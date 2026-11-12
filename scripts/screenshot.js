#!/usr/bin/env node
const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');
const devServer = require('./dev-server');

const ROOT = path.resolve(__dirname, '..', 'public');
const PORT = Number(process.env.PORT || 4321);
const PAGE = process.argv[2] || 'index.html';
const SECTION = process.argv[3] || null;

const VIEWPORTS = [
  { name: 'desktop', width: 1440, height: 900 },
  { name: 'tablet', width: 768, height: 1024 },
  { name: 'mobile', width: 390, height: 844 },
];

function startServer() {
  // Same resolver as `npm run serve`: public/ at /, mockups/ at /mockups/, with
  // css/js/assets fallbacks for pages in subfolders.
  return devServer.start(PORT);
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
