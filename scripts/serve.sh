#!/usr/bin/env bash
set -euo pipefail
cd "$(dirname "$0")/../public"
exec python3 -m http.server 4321
