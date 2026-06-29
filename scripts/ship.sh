#!/usr/bin/env bash
# One-command deploy: regenerate theme partials (+ sync css/js/assets), rebuild
# local previews, then commit and push. Pushing to main triggers the GitHub
# Action that SFTPs wp-theme/responsiveChild-theme/ to WP Engine.
#
# Usage: bash scripts/ship.sh "commit message"   (or: npm run ship "message")
set -euo pipefail
cd "$(dirname "$0")/.."

bash scripts/convert-pages.sh
bash scripts/preview-pages.sh
node scripts/preview-blog.js

git add -A
git commit -m "${1:-Update site}"
git push origin main

echo
echo "Pushed → watch GitHub → Actions (~30s to green)."
echo "Then clear WP Engine cache AND Cloudflare cache, and hard-refresh (Cmd+Shift+R)."
