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
OUT="wp-theme/responsiveChild-theme/tla/pages"
mkdir -p "$OUT"

# source-basename | slug | active-key | title | description
# (title/description pulled from the file; active-key drives nav highlight)
convert() {
  local src="$1" slug="$2" active="$3"
  local file="$SRC/$src.html"
  [ -f "$file" ] || { echo "SKIP (missing): $file"; return; }

  local title desc
  title=$(grep -oE '<title>[^<]*</title>' "$file" | head -1 | sed -E 's/<[^>]*>//g')
  desc=$(perl -0ne 'if(/<meta\s+name="description"\s+content="([^"]*)"/s){ $v=$1; $v=~s/\s+/ /g; print $v; exit }' "$file")

  # Line numbers for slicing.
  local body_open hdr_start hdr_end ftr_start ftr_end navjs
  body_open=$(grep -nE '<body' "$file" | head -1 | cut -d: -f1)
  hdr_start=$(grep -nE '<header class="site-header">' "$file" | head -1 | cut -d: -f1)
  hdr_end=$(awk 'NR>='"$hdr_start"' && /<\/header>/{print NR; exit}' "$file")
  ftr_start=$(grep -nE '<footer class="site-footer">' "$file" | head -1 | cut -d: -f1)
  ftr_end=$(awk 'NR>='"$ftr_start"' && /<\/footer>/{print NR; exit}' "$file")
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

  # 3. Body: after <body> .. before header  => then header include
  awk 'NR>'"$body_open"' && NR<'"$hdr_start"'' "$file" >> "$tmp"
  echo "<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>" >> "$tmp"

  # 4. Body between header end and footer start (the unique page content)
  awk 'NR>'"$hdr_end"' && NR<'"$ftr_start"'' "$file" >> "$tmp"

  # 5. footer include, then everything from after the footer up to </body>,
  #    EXCEPT the two universal scripts (nav.js, animations.js) that the
  #    template already adds. Page-specific scripts (carousel, inline blocks,
  #    form embeds) and post-footer markup (e.g. faculty modal) are preserved
  #    wherever they sit.
  echo "<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>" >> "$tmp"
  awk 'NR>'"$ftr_end"' && NR<'"$body_close"'' "$file" \
    | grep -vE '<script[^>]*src="js/(nav|animations)\.js' >> "$tmp"

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
  perl -0pi -e 's/href="mastermind\.html"/href="\/mastermind-2026\/"/g'   "$f"
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
convert mastermind              mastermind-2026               ""
convert consultation-corporate  enterprise-consultation       ""
convert consultation-mastermind consultation-mastermind-2026  ""

echo "Done."
