#!/usr/bin/env bash
# Create collision-free "-test" copies of every page partial so you can publish
# test pages in WordPress (slugs like home-test, pricing-test) without touching
# the real /pricing/, /faculty/, etc. URLs.
#
# A test partial is byte-identical to the real one EXCEPT its header comment.
# Its internal nav/footer links still point to the REAL slugs (/pricing/ etc.) —
# that's intentional: you're verifying each page RENDERS, not cross-navigation.
# (Clicking a nav link from a test page goes to the real slug, which may 404
# until that real page exists — expected during testing.)
#
# Run after convert-pages.sh. Re-runnable; overwrites existing -test partials.
set -euo pipefail

PAGES="wp-theme/responsiveChild-theme/tla/pages"

count=0
for f in "$PAGES"/*.php; do
  base=$(basename "$f" .php)
  case "$base" in
    _missing|*-test) continue ;;   # skip the fallback and any existing -test files
  esac
  cp "$f" "$PAGES/$base-test.php"
  count=$((count + 1))
  echo "  $base.php  ->  $base-test.php"
done

echo "Created/updated $count test partials in $PAGES"
echo ""
echo "WordPress pages to create (Slug -> Template 'TLA Full HTML'):"
for f in "$PAGES"/*-test.php; do
  echo "  $(basename "$f" .php)"
done