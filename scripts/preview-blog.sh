#!/usr/bin/env bash
# Preview the blog PHP templates (single.php / home.php / archive.php) WITHOUT
# a WordPress install or PHP. We can't execute the WP loop locally, so this
# does the next best thing: it reuses the already-built static MOCKUPS
# (public/blog*.html) — which are visually identical to what the templates
# render — but rewrites their asset paths to the theme's tla/ folder and
# inlines the SHARED header/footer partials, exactly as preview-pages.sh does.
#
# In other words: this proves the templates will use the shared chrome + the
# real blog.css from the theme. The dynamic content (titles, loop) is sampled
# from the mockups. Output: wp-theme/_preview-blog-*.html (gitignored).
#
# To verify the ACTUAL PHP (the loop, helpers, dequeue), push to a WP staging
# site — that's the only place the WP functions exist.
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
THEME="$ROOT/wp-theme/responsiveChild-theme"
TLA="$THEME/tla"
OUTDIR="$ROOT/wp-theme"
BASE="responsiveChild-theme/tla"   # asset base, relative to OUTDIR

# Render a shared partial to static HTML (resolve TLA_BASE, strip remaining PHP).
render_partial() {
  BASE_URL="$BASE" perl -0pe '
    my $b = $ENV{BASE_URL};
    s/<\?php\s*echo\s*TLA_BASE;\s*\?>/$b/g;
    s/<\?php.*?\?>//gs;
  ' "$1"
}

HDR=$(mktemp); FTR=$(mktemp)
render_partial "$TLA/partials/header.php" > "$HDR"
render_partial "$TLA/partials/footer.php" > "$FTR"
trap 'rm -f "$HDR" "$FTR"' EXIT

# map: <mockup in public/>  ->  <template it represents>
declare -a PAIRS=(
  "blog.html|home.php (the /blog/ index)"
  "blog-post.html|single.php (one post)"
  "blog-archive.html|archive.php (category/tag/search)"
)

for pair in "${PAIRS[@]}"; do
  src="${pair%%|}"; src="${pair%%|*}"
  label="${pair#*|}"
  mock="$ROOT/public/$src"
  [ -f "$mock" ] || { echo "skip (missing) $src"; continue; }
  out="$OUTDIR/_preview-blog-${src%.html}.html"

  # 1) Point CSS/JS/asset paths at the THEME's tla/ (so blog.css from the theme
  #    is exercised), 2) swap the inline mock header/footer for the SHARED
  #    partials so we preview the real chrome.
  B="$BASE" HDR="$HDR" FTR="$FTR" perl -0pe '
      # assets: css/, js/, assets/  ->  $ENV{B}/...
      s{(?<=["'"'"'])(css/|js/|assets/)}{$ENV{B}/$1}g;
    ' "$mock" \
  | HDR="$HDR" FTR="$FTR" perl -0pe '
      BEGIN { local $/; open my $h,"<",$ENV{HDR}; our $H=<$h>; open my $f,"<",$ENV{FTR}; our $F=<$f>; }
      # Replace the whole inline <header class="site-header">...</header> with shared header.
      s{<header class="site-header">.*?</header>}{$H}s;
      # Replace the whole inline <footer class="site-footer">...</footer> with shared footer.
      s{<footer class="site-footer">.*?</footer>}{$F}s;
    ' \
  | perl -0pe 's/<title>([^<]*)\(MOCKUP\)<\/title>/<title>PREVIEW BLOG — $1<\/title>/' \
  > "$out"

  echo "built $out   [$label]"
done

echo
echo "Open these in a browser:"
echo "  wp-theme/_preview-blog-blog.html          (home.php)"
echo "  wp-theme/_preview-blog-blog-post.html     (single.php)"
echo "  wp-theme/_preview-blog-blog-archive.html  (archive.php)"
