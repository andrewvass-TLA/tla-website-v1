#!/usr/bin/env bash
# Local dev server: public/ at http://localhost:4321/, mockups/ at /mockups/.
# See scripts/dev-server.js for how subfolder pages find css/js/assets.
set -euo pipefail
cd "$(dirname "$0")/.."
exec node scripts/dev-server.js "${1:-4321}"
