#!/usr/bin/env node
/*
 * preview-blog.js — render the LIVE blog templates (home.php, single.php,
 * archive.php) to static HTML for local review, using real PHP.
 *
 * The live /blog/ is NOT public/blog.html (that's a mockup). It's rendered by
 * the WordPress templates in wp-theme/responsiveChild-theme/ + tla/css/blog.css
 * + the tla_blog_* helpers in functions.php. This script runs those exact files
 * through PHP against a small fake WordPress (scripts/blog-preview/wp-stub.php)
 * and sample posts (scripts/blog-preview/fixtures.php), so the preview is the
 * same markup the live site produces — nothing is hand-copied, nothing drifts.
 *
 * Requires PHP (`brew install php`). Not modeled: the database, plugins, the
 * parent theme. Still glance at the live page after a deploy.
 *
 * Usage:  npm run preview:blog              # all three
 *         node scripts/preview-blog.js home # just one
 * Output: wp-theme/_preview-tpl-<template>.html  (gitignored)
 *         Run `npm run build` first so tla/css/blog.css has your public/ edits.
 */
'use strict';
const fs = require('fs');
const path = require('path');
const { spawnSync } = require('child_process');

const ROOT = path.resolve(__dirname, '..');
const STUB = path.join(__dirname, 'blog-preview', 'wp-stub.php');
const VIEWS = ['home', 'single', 'archive'];

// Find PHP: PATH first, then Homebrew's locations (editor terminals opened
// before Homebrew was installed may not have it on PATH yet).
function findPhp() {
  const candidates = ['php', '/opt/homebrew/bin/php', '/usr/local/bin/php'];
  for (const bin of candidates) {
    const r = spawnSync(bin, ['-v'], { stdio: 'ignore' });
    if (!r.error && r.status === 0) return bin;
  }
  return null;
}

const php = findPhp();
if (!php) {
  console.error('preview-blog: PHP not found. Install it with `brew install php`, then re-run.');
  process.exit(1);
}

const targets = process.argv[2] ? [process.argv[2]] : VIEWS;
let failed = false;
for (const view of targets) {
  if (!VIEWS.includes(view)) {
    console.error(`preview-blog: unknown template "${view}" (use ${VIEWS.join(', ')})`);
    failed = true;
    continue;
  }
  const r = spawnSync(php, [STUB, view], { cwd: ROOT, encoding: 'utf8', maxBuffer: 32 * 1024 * 1024 });
  if (r.status !== 0 || r.stderr.trim()) {
    // Any PHP warning/notice counts as a failure — it would show up live too.
    console.error(`preview-blog: ${view}.php failed:\n${(r.stderr || r.stdout).trim()}`);
    failed = true;
    continue;
  }
  const html = r.stdout.replace(/<title>/, '<title>PREVIEW — ');
  const out = path.join(ROOT, 'wp-theme', `_preview-tpl-${view}.html`);
  fs.writeFileSync(out, html);
  console.log(`built ${path.relative(ROOT, out)}`);
}
process.exit(failed ? 1 : 0);
