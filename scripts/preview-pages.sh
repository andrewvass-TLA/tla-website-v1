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

# Render a shared partial to static HTML for a given $tla_active value, so the
# preview shows the SAME active-nav highlight WordPress would. We evaluate the
# two PHP nav patterns header.php uses before stripping any remaining PHP:
#   <?php echo $tla_active === 'KEY' ? ' nav__link--active' : ''; ?>
#   <?php echo $tla_is( 'KEY' ); ?>   (=> ' mobile-nav__link--active' when active)
# Anything else PHP is stripped, and TLA_BASE -> $BASE.
render_partial() {
  # $1 = partial path; $2 = active key (may be empty).
  # Resolve TLA_BASE FIRST, then evaluate the nav-active ternaries, then strip any
  # remaining PHP. (TLA_BASE must be substituted before the catch-all strip below,
  # or `<?php echo TLA_BASE; ?>/assets/...` collapses to an absolute `/assets/...`.)
  TLA_ACTIVE="$2" BASE_URL="$BASE" perl -0pe '
    my $a = $ENV{TLA_ACTIVE};
    my $b = $ENV{BASE_URL};
    s/<\?php\s*echo\s*TLA_BASE;\s*\?>/$b/g;
    s/<\?php\s*echo\s*\$tla_active\s*===\s*'"'"'([^'"'"']*)'"'"'\s*\?\s*'"'"'([^'"'"']*)'"'"'\s*:\s*'"'"'([^'"'"']*)'"'"';\s*\?>/$1 eq $a ? $2 : $3/ge;
    s/<\?php\s*echo\s*\$tla_is\(\s*'"'"'([^'"'"']*)'"'"'\s*\)\s*;\s*\?>/$1 eq $a ? " mobile-nav__link--active" : ""/ge;
    s/<\?php.*?\?>//gs;
  ' "$1"
}

# Footer has no active state — render once.
FTR=$(mktemp)
render_partial "$TLA/partials/footer.php" "" > "$FTR"

# Minimal landing-page header (logo only) — no active state, render once.
HDRMIN=$(mktemp)
render_partial "$TLA/partials/header-minimal.php" "" > "$HDRMIN"

trap 'rm -f "$FTR" "$HDRMIN"' EXIT

for partial in "$TLA"/pages/*.php; do
  slug=$(basename "$partial" .php)
  [ "$slug" = "_missing" ] && continue
  out="$OUTDIR/_preview-$slug.html"

  title=$(perl -0ne "if(/\\\$tla_title\\s*=\\s*'((?:[^'\\\\]|\\\\.)*)'/s){print \$1; exit}" "$partial")
  active=$(perl -0ne "if(/\\\$tla_active\\s*=\\s*'((?:[^'\\\\]|\\\\.)*)'/s){print \$1; exit}" "$partial")

  # Render the shared header with THIS page's active key so the highlight matches prod.
  HDR=$(mktemp)
  render_partial "$TLA/partials/header.php" "$active" > "$HDR"

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
    HDR="$HDR" HDRMIN="$HDRMIN" FTR="$FTR" perl -0pe '
      s/^<\?php.*?\?>\s*//s;
      if (!our $h) { local $/; open my $f,"<",$ENV{HDR}; our $h=<$f>; open my $m,"<",$ENV{HDRMIN}; our $hm=<$m>; open my $g,"<",$ENV{FTR}; our $ft=<$g>; }
      s#<\?php include get_stylesheet_directory\(\) \. .\/tla/partials/header-minimal\.php.; \?>#$hm#g;
      s#<\?php include get_stylesheet_directory\(\) \. .\/tla/partials/header\.php.; \?>#$h#g;
      s#<\?php include get_stylesheet_directory\(\) \. .\/tla/partials/footer\.php.; \?>#$ft#g;
    ' "$partial" | sed "s#<?php echo TLA_BASE; ?>#$BASE#g"

    echo "<script src=\"$BASE/js/nav.js\"></script>"
    echo "<script src=\"$BASE/js/animations.js\" defer></script>"
    echo '</body></html>'
  } > "$out"
  rm -f "$HDR"
  echo "built $out"
done