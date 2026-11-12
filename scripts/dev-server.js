#!/usr/bin/env node
// Local dev server for public/ pages and root-level mockups/.
//
//   /<anything>          -> public/<anything>
//   /mockups/<anything>  -> mockups/<anything>   (repo root; never deploys)
//
// Pages are authored as if they sat at the root of public/ (href="css/...",
// src="assets/...", href="pricing.html"). That's what convert-pages.sh expects,
// and the WordPress build rewrites those paths. Pages in subfolders
// (public/live-events/, mockups/, …) therefore ask for paths like
// /live-events/css/styles.css. When the exact file doesn't exist, this server
// falls back:
//   1. css/, js/ or assets/ anywhere in the path -> serve it from public/
//   2. a *.html name -> serve the page with that file name from anywhere in
//      public/ (so links between pages in different folders work)
//
// Usage:  node scripts/dev-server.js [port]     (npm run serve)
//         require('./dev-server').start(port)   (scripts/screenshot.js)
const http = require('http');
const fs = require('fs');
const path = require('path');

const REPO = path.resolve(__dirname, '..');
const PUBLIC = path.join(REPO, 'public');
const MOCKUPS = path.join(REPO, 'mockups');

const MIME = {
  '.html': 'text/html; charset=utf-8',
  '.css':  'text/css; charset=utf-8',
  '.js':   'application/javascript; charset=utf-8',
  '.json': 'application/json; charset=utf-8',
  '.svg':  'image/svg+xml',
  '.png':  'image/png',
  '.jpg':  'image/jpeg',
  '.jpeg': 'image/jpeg',
  '.gif':  'image/gif',
  '.webp': 'image/webp',
  '.mp4':  'video/mp4',
  '.pdf':  'application/pdf',
  '.woff': 'font/woff',
  '.woff2':'font/woff2',
};

const isFile = (p) => { try { return fs.statSync(p).isFile(); } catch { return false; } };

// Map page file name -> path, for every *.html under public/ (built per request
// so newly added pages are picked up without a restart).
function findPageByName(name) {
  const stack = [PUBLIC];
  while (stack.length) {
    const dir = stack.pop();
    for (const ent of fs.readdirSync(dir, { withFileTypes: true })) {
      if (ent.name === 'screenshots' || ent.name.startsWith('.')) continue;
      const p = path.join(dir, ent.name);
      if (ent.isDirectory()) stack.push(p);
      else if (ent.name === name) return p;
    }
  }
  return null;
}

function resolve(urlPath) {
  const rel = path.normalize(urlPath).replace(/^([/\\])+/, '');
  const inMockups = rel === 'mockups' || rel.startsWith('mockups' + path.sep);
  const root = inMockups ? MOCKUPS : PUBLIC;
  const sub = inMockups ? rel.slice('mockups'.length).replace(/^[/\\]+/, '') : rel;

  let p = path.join(root, sub);
  if (!p.startsWith(root)) return null;
  if (fs.existsSync(p) && fs.statSync(p).isDirectory()) p = path.join(p, 'index.html');
  if (isFile(p)) return p;

  // 1. Shared css/js/assets requested from a subfolder page.
  const parts = rel.split(path.sep);
  const i = parts.findIndex((s) => s === 'css' || s === 'js' || s === 'assets');
  if (i >= 0) {
    const shared = path.join(PUBLIC, ...parts.slice(i));
    if (shared.startsWith(PUBLIC) && isFile(shared)) return shared;
  }

  // 2. Page-to-page link across folders.
  if (path.extname(rel) === '.html') return findPageByName(path.basename(rel));

  return null;
}

function start(port = 4321) {
  const server = http.createServer((req, res) => {
    try {
      const file = resolve(decodeURIComponent(req.url.split('?')[0]));
      if (!file) { res.writeHead(404); res.end('Not found'); return; }
      res.writeHead(200, { 'Content-Type': MIME[path.extname(file).toLowerCase()] || 'application/octet-stream' });
      fs.createReadStream(file).pipe(res);
    } catch (e) {
      res.writeHead(500); res.end(String(e));
    }
  });
  return new Promise((ok) => server.listen(port, () => ok(server)));
}

module.exports = { start };

if (require.main === module) {
  const port = Number(process.argv[2] || process.env.PORT || 4321);
  start(port).then(() => {
    console.log(`Serving public/ at http://localhost:${port}/`);
    console.log(`Mockups at        http://localhost:${port}/mockups/<file>.html`);
  });
}
