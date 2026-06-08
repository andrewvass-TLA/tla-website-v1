#!/usr/bin/env bash
# Build static HTML previews of the converted partials so you can eyeball them
# in a browser without a PHP server. Simulates the "TLA Full HTML" template:
# inlines the shared header/footer partials, resolves TLA_BASE to the local
# tla/ folder, and strips PHP. Output: wp-theme/_preview-<slug>.html (gitignored).
set -euo pipefail

THEME="wp-theme/responsiveChild-theme"
TLA="$THEME/tla"
OUTDIR="wp-theme"
BASE="responsiveChild-theme/tla"   # relative to OUTDIR

# Pre-render the shared partials to static HTML (strip PHP header guard + echo TLA_BASE).
render_partial() {
  # $1 = partial path; prints HTML with TLA_BASE -> $BASE and PHP stripped.
  perl -0pe 's/<\?php.*?\?>//gs' "$1" | sed "s#<?php echo TLA_BASE; ?>#$BASE#g"
}

HDR=$(mktemp); FTR=$(mktemp)
render_partial "$TLA/partials/header.php" > "$HDR"
render_partial "$TLA/partials/footer.php" > "$FTR"
trap 'rm -f "$HDR" "$FTR"' EXIT

for partial in "$TLA"/pages/*.php; do
  slug=$(basename "$partial" .php)
  [ "$slug" = "_missing" ] && continue
  out="$OUTDIR/_preview-$slug.html"

  title=$(perl -0ne "if(/\\\$tla_title\\s*=\\s*'((?:[^'\\\\]|\\\\.)*)'/s){print \$1; exit}" "$partial")

  {
    echo '<!DOCTYPE html><html lang="en"><head>'
    echo '<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">'
    echo "<title>PREVIEW — ${title:-$slug}</title>"
    echo '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>'
    echo '<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=Antonio:wght@400;500;600;700&display=swap" rel="stylesheet">'
    echo "<link rel=\"stylesheet\" href=\"$BASE/css/styles.css\"><link rel=\"stylesheet\" href=\"$BASE/css/chrome.css\">"
    echo '</head><body>'

    # Body: strip the PHP header block, inline header/footer from temp files
    # (read inside perl to avoid shell escaping), then resolve TLA_BASE.
    HDR="$HDR" FTR="$FTR" perl -0pe '
      s/^<\?php.*?\?>\s*//s;
      if (!our $h) { local $/; open my $f,"<",$ENV{HDR}; our $h=<$f>; open my $g,"<",$ENV{FTR}; our $ft=<$g>; }
      s#<\?php include get_stylesheet_directory\(\) \. .\/tla/partials/header\.php.; \?>#$h#g;
      s#<\?php include get_stylesheet_directory\(\) \. .\/tla/partials/footer\.php.; \?>#$ft#g;
    ' "$partial" | sed "s#<?php echo TLA_BASE; ?>#$BASE#g"

    echo "<script src=\"$BASE/js/nav.js\"></script>"
    echo "<script src=\"$BASE/js/animations.js\" defer></script>"
    echo '</body></html>'
  } > "$out"
  echo "built $out"
done