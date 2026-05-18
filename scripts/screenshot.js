#!/usr/bin/env node
const { chromium } = require('playwright');
const http = require('http');
const fs = require('fs');
const path = require('path');

const ROOT = path.resolve(__dirname, '..');
const PORT = Number(process.env.PORT || 4321);
const PAGE = process.argv[2] || 'index-v2.html';
const SECTION = process.argv[3] || null;

const VIEWPORTS = [
  { name: 'desktop', width: 1440, height: 900 },
  { name: 'tablet', width: 768, height: 1024 },
  { name: 'mobile', width: 390, height: 844 },
];

const MIME = {
  '.html': 'text/html; charset=utf-8',
  '.css':  'text/css; charset=utf-8',
  '.js':   'application/javascript; charset=utf-8',
  '.json': 'application/json; charset=utf-8',
  '.svg':  'image/svg+xml',
  '.png':  'image/png',
  '.jpg':  'image/jpeg',
  '.jpeg': 'image/jpeg',
  '.webp': 'image/webp',
  '.woff': 'font/woff',
  '.woff2':'font/woff2',
};

function startServer() {
  return new Promise((resolve) => {
    const server = http.createServer((req, res) => {
      try {
        const urlPath = decodeURIComponent(req.url.split('?')[0]);
        const safe = path.normalize(urlPath).replace(/^([/\\])+/, '');
        const filePath = path.join(ROOT, safe);
        if (!filePath.startsWith(ROOT) || !fs.existsSync(filePath) || fs.statSync(filePath).isDirectory()) {
          res.writeHead(404); res.end('Not found'); return;
        }
        res.writeHead(200, { 'Content-Type': MIME[path.extname(filePath).toLowerCase()] || 'application/octet-stream' });
        fs.createReadStream(filePath).pipe(res);
      } catch (e) {
        res.writeHead(500); res.end(String(e));
      }
    });
    server.listen(PORT, () => resolve(server));
  });
}

function ts() {
  const d = new Date();
  const p = (n) => String(n).padStart(2, '0');
  return `${d.getFullYear()}${p(d.getMonth()+1)}${p(d.getDate())}-${p(d.getHours())}${p(d.getMinutes())}${p(d.getSeconds())}`;
}

(async () => {
  const server = await startServer();
  const outDir = path.join(ROOT, 'screenshots', ts());
  fs.mkdirSync(outDir, { recursive: true });

  const browser = await chromium.launch();
  try {
    for (const vp of VIEWPORTS) {
      const ctx = await browser.newContext({ viewport: { width: vp.width, height: vp.height }, deviceScaleFactor: 2 });
      const page = await ctx.newPage();
      await page.goto(`http://127.0.0.1:${PORT}/${PAGE}`, { waitUntil: 'networkidle' });
      await page.waitForTimeout(300);

      if (process.env.CLICK) {
        try {
          await page.click(process.env.CLICK, { timeout: 2000 });
          await page.waitForTimeout(500);
        } catch (e) {
          console.warn('CLICK selector not found:', process.env.CLICK);
        }
      }

      const file = path.join(outDir, `${path.parse(PAGE).name}__${vp.name}${SECTION ? '__' + SECTION : ''}.png`);
      if (SECTION) {
        const el = await page.locator(`[data-screenshot="${SECTION}"]`).first();
        await el.screenshot({ path: file });
      } else {
        await page.screenshot({ path: file, fullPage: true });
      }
      console.log('saved', path.relative(ROOT, file));
      await ctx.close();
    }
  } finally {
    await browser.close();
    server.close();
  }
})().catch((err) => { console.error(err); process.exit(1); });
