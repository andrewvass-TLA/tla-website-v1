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
    | grep -vE '<script[^>]*src="js/(nav|animations)\.js' \
    | perl -0pe "s{<!-- TLA_HEADER -->}{<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>}g;
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
  perl -0pi -e 's/((?:src|href)=")assets\//$1<?php echo TLA_BASE; ?>\/assets\//g' "$f"
  perl -0pi -e 's/((?:src|href)=")js\//$1<?php echo TLA_BASE; ?>\/js\//g'         "$f"
  perl -0pi -e 's/((?:src|href)=")css\//$1<?php echo TLA_BASE; ?>\/css\//g'       "$f"
  # CSS url(assets/...) inside inline <style>
  perl -0pi -e "s/url\((['\"]?)assets\//url(\${1}<?php echo TLA_BASE; ?>\/assets\//g" "$f"

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
  perl -0pi -e 's/href="events\.html"/href="\/events\/"/g'                "$f"
  perl -0pi -e 's/href="mastermind\.html"/href="\/join-mastermind-2026\/"/g'   "$f"
  perl -0pi -e 's/href="privacy-policy\.html"/href="\/privacy-policy\/"/g'      "$f"
  perl -0pi -e 's/href="terms-of-use\.html"/href="\/terms-of-use\/"/g'          "$f"
  perl -0pi -e 's/href="end-user-agreement\.html"/href="\/end-user-agreement\/"/g' "$f"
  perl -0pi -e 's/href="platinum-marketing\.html"/href="\/platinum-marketing\/"/g' "$f"
}

# slug map (source | slug | active)
convert index                   home                          ""
convert pricing                 join                          join
convert faculty                 faculty                       faculty
convert corporate               enterprise                    enterprise
convert whats-inside            whats-inside                  whats-inside
convert sales-individual        membership                    membership
convert consultation            consultation                  ""
convert events                  events                        ""
convert mastermind              join-mastermind-2026          ""
convert consultation-corporate  enterprise-consultation       ""
convert consultation-mastermind consultation-mastermind-2026  ""
convert privacy-policy          privacy-policy                ""
convert terms-of-use            terms-of-use                  ""
convert end-user-agreement      end-user-agreement            ""
convert ai-masterplan           ai-masterplan                 ""
convert 5-scripts               5-scripts                     ""
convert contact                 contact                       ""
convert platinum-marketing      platinum-marketing            ""

echo "Done."
