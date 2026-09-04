#!/usr/bin/env bash
# Convert public/*.html marketing pages into WordPress theme partials under
# wp-theme/responsiveChild-theme/tla/pages/<slug>.php for the "TLA Full HTML"
# template. Idempotent: regenerates partials from the source HTML each run.
#
# Per page it:
#   - extracts the body (from after <body> up to the universal nav.js script),
#     preserving page-specific scripts (carousel, inline JS, form embeds) and
#     any post-footer markup (e.g. the faculty modal)
#   - replaces the baked-in <header class="site-header"> block with an include
#     of tla/partials/header.php (passing $tla_active)
#   - replaces the baked-in <footer class="site-footer"> block with an include
#     of tla/partials/footer.php
#   - rewrites relative asset/css/js paths to TLA_BASE
#   - rewrites internal *.html links to real WordPress slugs
#   - prepends a PHP header setting $tla_title / $tla_description / $tla_active
set -euo pipefail

SRC="public"
TLA="wp-theme/responsiveChild-theme/tla"
OUT="$TLA/pages"
mkdir -p "$OUT"

# Sync shared static assets from public/ into the theme. These (css/js/assets)
# are the files the deploy Action SFTPs to WP Engine, so public/ must be the
# single edit point and the theme copies are generated. Direction is always
# public/ -> tla/, never the reverse.
echo "Syncing css / js / assets from public/ into the theme…"
rsync -a --delete "$SRC/css/"    "$TLA/css/"
rsync -a --delete "$SRC/js/"     "$TLA/js/"
rsync -a --delete "$SRC/assets/" "$TLA/assets/"

# source-basename | slug | active-key | title | description
# (title/description pulled from the file; active-key drives nav highlight)
convert() {
  local src="$1" slug="$2" active="$3"
  local file="$SRC/$src.html"
  [ -f "$file" ] || { echo "SKIP (missing): $file"; return; }

  local title desc
  title=$(grep -oE '<title>[^<]*</title>' "$file" | head -1 | sed -E 's/<[^>]*>//g')
  desc=$(perl -0ne 'if(/<meta\s+name="description"\s+content="([^"]*)"/s){ $v=$1; $v=~s/\s+/ /g; print $v; exit }' "$file")

  # Body boundaries. The body runs from after <body> to before </body>; the
  # shared header/footer are marked in the source by <!-- TLA_HEADER --> /
  # <!-- TLA_FOOTER --> sentinels, which we swap for PHP includes below.
  local body_open body_close
  body_open=$(grep -nE '<body' "$file" | head -1 | cut -d: -f1)
  body_close=$(grep -nE '</body>' "$file" | tail -1 | cut -d: -f1)

  local tmp; tmp=$(mktemp)

  # 1. PHP header
  {
    echo "<?php"
    echo "/**"
    echo " * Body partial for /$slug/ (TLA Full HTML template)."
    echo " * Generated from public/$src.html by scripts/convert-pages.sh — do not hand-edit;"
    echo " * edit the source HTML (or the shared header/footer partials) and re-run."
    echo " */"
    echo "if ( ! defined( 'ABSPATH' ) ) { exit; }"
    echo ""
    printf '$tla_title       = %s;\n' "$(php_str "$title")"
    printf '$tla_description = %s;\n' "$(php_str "$desc")"
    printf '$tla_active      = %s;\n' "$(php_str "$active")"

    # Page-family stylesheets: any css/*.css the source links other than the
    # two the template always loads (styles.css, chrome.css). The template
    # renders these between those two. Lets a group of pages share one
    # stylesheet instead of each inlining a copy of it.
    local extra_css
    extra_css=$(perl -0ne 'while (/<link[^>]+href="(?:\.\.\/)*css\/([A-Za-z0-9._-]+\.css)"/g) {
        next if $1 eq "styles.css" || $1 eq "chrome.css";
        print "$1\n";
      }' "$file" | awk '!seen[$0]++')
    if [ -n "$extra_css" ]; then
      printf '$tla_styles      = array('
      local first=1
      while IFS= read -r css; do
        [ -n "$css" ] || continue
        [ $first -eq 1 ] || printf ', '
        printf '%s' "$(php_str "$css")"
        first=0
      done <<< "$extra_css"
      printf ');\n'
    fi
    echo "?>"
  } > "$tmp"

  # 2. Inline <style> from <head> (lines before </head>), if present.
  local style_start style_end head_end
  style_start=$(awk 'NR<'"$body_open"' && /<style>/{print NR; exit}' "$file" || true)
  if [ -n "${style_start:-}" ]; then
    style_end=$(awk 'NR>='"$style_start"' && /<\/style>/{print NR; exit}' "$file")
    awk 'NR>='"$style_start"' && NR<='"$style_end"'' "$file" >> "$tmp"
    echo "" >> "$tmp"
  fi

  # 3. Body: everything between <body> and </body>, with the header/footer
  #    sentinels swapped for the shared PHP includes. Drops the two universal
  #    scripts (nav.js, animations.js) the template already adds; page-specific
  #    scripts (carousel, inline blocks, form embeds) and post-footer markup
  #    (e.g. the faculty modal) are preserved wherever they sit.
  awk 'NR>'"$body_open"' && NR<'"$body_close"'' "$file" \
    | grep -vE '<script[^>]*src="(\.\./)*js/(nav|animations)\.js' \
    | perl -0pe "s{<!-- TLA_HEADER_MINIMAL -->}{<?php include get_stylesheet_directory() . '/tla/partials/header-minimal.php'; ?>}g;
                 s{<!-- TLA_HEADER -->}{<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>}g;
                 s{<!-- TLA_FOOTER -->}{<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>}g" \
    >> "$tmp"

  # 6. Path + link rewrites on the assembled file.
  rewrite "$tmp"

  mv "$tmp" "$OUT/$slug.php"
  echo "OK: $OUT/$slug.php  (from $src.html, active=$active)"
}

# Emit a PHP single-quoted string literal for $1.
# In a PHP single-quoted string only \ and ' need escaping, each as a SINGLE
# backslash: \\ and \'. (bash ${//} substitution doubles backslashes, so use
# sed, which escapes to exactly one backslash.) Escape backslash, then quote.
php_str() {
  local s
  s=$(printf '%s' "$1" | sed -e 's/\\/\\\\/g' -e "s/'/\\\\'/g")
  printf "'%s'" "$s"
}

# Apply path/link rewrites in-place to file $1.
rewrite() {
  local f="$1"
  # assets/, js/, css/ in src="" / href="" -> TLA_BASE
  perl -0pi -e 's/((?:src|href)=")(?:\.\.\/)*assets\//$1<?php echo TLA_BASE; ?>\/assets\//g' "$f"
  perl -0pi -e 's/((?:src|href)=")(?:\.\.\/)*js\//$1<?php echo TLA_BASE; ?>\/js\//g'         "$f"
  perl -0pi -e 's/((?:src|href)=")(?:\.\.\/)*css\//$1<?php echo TLA_BASE; ?>\/css\//g'       "$f"
  # CSS url(assets/...) inside inline <style>
  perl -0pi -e "s/url\((['\"]?)(?:\.\.\/)*assets\//url(\${1}<?php echo TLA_BASE; ?>\/assets\//g" "$f"

  # Internal *.html links -> WP slugs
  perl -0pi -e 's/href="index\.html"/href="\/"/g'                         "$f"
  perl -0pi -e 's/href="sales-individual\.html"/href="\/membership\/"/g'  "$f"
  perl -0pi -e 's/href="corporate\.html"/href="\/enterprise\/"/g'         "$f"
  perl -0pi -e 's/href="consultation\.html"/href="\/consultation\/"/g'    "$f"
  perl -0pi -e 's/href="consultation-corporate\.html"/href="\/enterprise-consultation\/"/g' "$f"
  perl -0pi -e 's/href="consultation-mastermind\.html"/href="\/consultation-mastermind-2026\/"/g' "$f"
  perl -0pi -e 's/href="pricing\.html"/href="\/join\/"/g'                 "$f"
  perl -0pi -e 's/href="faculty\.html"/href="\/faculty\/"/g'             "$f"
  perl -0pi -e 's/href="whats-inside\.html"/href="\/whats-inside\/"/g'    "$f"
  perl -0pi -e 's/href="ai-originator-masterplan\.html"/href="\/ai-originator-masterplan\/"/g' "$f"
  perl -0pi -e 's/href="perfect-loan-process\.html"/href="\/perfect-loan-process\/"/g' "$f"
  perl -0pi -e 's/href="5-scripts\.html"/href="\/5-scripts-for-dominating-point-of-sale\/"/g' "$f"
  perl -0pi -e 's/href="events\.html"/href="\/live-events\/"/g'           "$f"
  perl -0pi -e 's/href="event-detail\.html"/href="\/event-detail\/"/g'    "$f"
  perl -0pi -e 's/href="office-hours-caleb-legrand\.html"/href="\/office-hours-caleb-legrand\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-trevor-carlson\.html"/href="\/office-hours-trevor-carlson\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-michael-belfor\.html"/href="\/office-hours-michael-belfor\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-becky-staples\.html"/href="\/office-hours-becky-staples\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-tyler-osby\.html"/href="\/office-hours-tyler-osby\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-josh-mettle\.html"/href="\/office-hours-josh-mettle\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-marc-bui\.html"/href="\/office-hours-marc-bui\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-brent-hicks\.html"/href="\/office-hours-brent-hicks\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-julie-weix\.html"/href="\/office-hours-julie-weix\/"/g' "$f"
  perl -0pi -e 's/href="office-hours-jay-dacey\.html"/href="\/office-hours-jay-dacey\/"/g' "$f"
  perl -0pi -e 's/href="talk-to-tim\.html"/href="\/talk-to-tim\/"/g' "$f"
  perl -0pi -e 's/href="lead-generation-that-converts\.html"/href="\/lead-generation-that-converts\/"/g' "$f"
  perl -0pi -e 's/href="ai-lab-success-with-follow-up-pro\.html"/href="\/ai-lab-success-with-follow-up-pro\/"/g' "$f"
  perl -0pi -e 's/href="market-update-with-barry-habib\.html"/href="\/market-update-with-barry-habib\/"/g' "$f"
  perl -0pi -e 's/href="leveraging-google-reviews\.html"/href="\/leveraging-google-reviews-to-attract-clients-and-agents\/"/g' "$f"
  perl -0pi -e 's/href="replay-winning-the-ai-game\.html"/href="\/winning-the-ai-game\/"/g' "$f"
  perl -0pi -e 's/href="replay-ai-lab-follow-up-pro\.html"/href="\/ai-lab-follow-up-pro\/"/g' "$f"
  perl -0pi -e 's/href="replay-2026-mid-year-playbook\.html"/href="\/2026-mid-year-playbook\/"/g' "$f"
  perl -0pi -e 's/href="mastermind\.html"/href="\/join-mastermind-2026\/"/g'   "$f"
  perl -0pi -e 's/href="privacy-policy\.html"/href="\/privacy-policy\/"/g'      "$f"
  perl -0pi -e 's/href="terms-of-use\.html"/href="\/terms-of-use\/"/g'          "$f"
  perl -0pi -e 's/href="end-user-agreement\.html"/href="\/end-user-agreement\/"/g' "$f"
  perl -0pi -e 's/href="platinum-marketing\.html"/href="\/platinum-marketing\/"/g' "$f"
  perl -0pi -e 's/href="contact\.html"/href="\/contact\/"/g'             "$f"
  perl -0pi -e 's/href="blog\.html"/href="\/blog\/"/g'                   "$f"
  perl -0pi -e 's/href="blog-post\.html"/href="\/blog-post\/"/g'         "$f"
  perl -0pi -e 's/href="blog-archive\.html"/href="\/blog-archive\/"/g'   "$f"
}

# slug map (source | slug | active)
convert index                   home                          ""
convert pricing                 join                          join
convert faculty                 faculty                       faculty
convert corporate               enterprise                    enterprise
convert whats-inside            whats-inside                  whats-inside
convert sales-individual        membership                    membership
convert consultation            consultation                  ""
convert events                  live-events                   events
convert event-detail            event-detail                  ""
convert office-hours-caleb-legrand office-hours-caleb-legrand  ""
convert office-hours-trevor-carlson office-hours-trevor-carlson ""
convert office-hours-michael-belfor office-hours-michael-belfor ""
convert office-hours-becky-staples office-hours-becky-staples ""
convert office-hours-tyler-osby office-hours-tyler-osby ""
convert office-hours-josh-mettle office-hours-josh-mettle ""
convert office-hours-marc-bui office-hours-marc-bui ""
convert office-hours-brent-hicks office-hours-brent-hicks ""
convert office-hours-julie-weix office-hours-julie-weix ""
convert office-hours-jay-dacey office-hours-jay-dacey ""
convert talk-to-tim              talk-to-tim                  ""
convert lead-generation-that-converts lead-generation-that-converts ""
convert ai-lab-success-with-follow-up-pro ai-lab-success-with-follow-up-pro ""
convert market-update-with-barry-habib market-update-with-barry-habib ""
convert leveraging-google-reviews leveraging-google-reviews-to-attract-clients-and-agents ""
convert replay-winning-the-ai-game winning-the-ai-game        ""
convert replay-ai-lab-follow-up-pro ai-lab-follow-up-pro      ""
convert replay-2026-mid-year-playbook 2026-mid-year-playbook   ""
convert replay-execute-on-mastermind execute-on-mastermind    ""
convert replay-your-marketing-is-being-ignored acm-replay-072326 ""
convert custom-sales-pages/mastermind join-mastermind-2026          ""
convert camp-irvine             camp-irvine                   ""
convert custom-sales-pages/acm       acm                           ""
convert custom-sales-pages/namb      namb                          ""
convert custom-sales-pages/vmba-convention-2026 vmba-convention-2026 ""
convert custom-sales-pages/namb-conference-2026 namb-conference-2026 ""
convert custom-sales-pages/apm-symposium-2026 apm-symposium-2026 ""
convert launch-namb-ai-operating-manual launch-namb-ai-operating-manual  ""
convert namb-ai-operating-manual namb-ai-operating-manual      ""
convert namb-build-your-custom-gpt namb-build-your-custom-gpt    ""
convert consultation-corporate  enterprise-consultation       ""
convert consultation-mastermind consultation-mastermind-2026  ""
convert privacy-policy          privacy-policy                ""
convert terms-of-use            terms-of-use                  ""
convert end-user-agreement      end-user-agreement            ""
convert ai-originator-masterplan ai-originator-masterplan     ""
convert perfect-loan-process    perfect-loan-process          ""
convert 5-scripts               5-scripts-for-dominating-point-of-sale  ""
convert contact                 contact                       ""
convert platinum-marketing      platinum-marketing            ""
# Individual training sales pages (public/trainings/, .trn-* suite). One page
# per training sold à la carte. public/trainings/_template.html is the
# copy-and-fill source and is deliberately NOT listed here (never deploys).
# Staged on a draft slug for review; move to its real slug once approved.
convert trainings/2026-mid-year-playbook-masterclass standalone-product-draft ""
# NOTE: blog/blog-post/blog-archive are NOT fullhtml partials — the live blog
# is rendered by home.php/single.php/archive.php (WP post loop) with CSS in
# tla/css/blog.css. Do NOT add them here. The blog*.html link rewrites in
# rewrite() are still useful (relative blog links -> /blog/ etc.).

echo "Done."
