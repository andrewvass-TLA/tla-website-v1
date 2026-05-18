#!/usr/bin/env node
// Capture mightynetworks.com for visual + structural reference.
const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');

const ROOT = path.resolve(__dirname, '..');

function ts() {
  const d = new Date();
  const p = (n) => String(n).padStart(2, '0');
  return `${d.getFullYear()}${p(d.getMonth()+1)}${p(d.getDate())}-${p(d.getHours())}${p(d.getMinutes())}${p(d.getSeconds())}`;
}

(async () => {
  const outDir = path.join(ROOT, 'reference', `mn-${ts()}`);
  fs.mkdirSync(outDir, { recursive: true });

  const browser = await chromium.launch();
  const ctx = await browser.newContext({
    viewport: { width: 1440, height: 900 },
    deviceScaleFactor: 2,
    userAgent: 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0 Safari/537.36',
  });
  const page = await ctx.newPage();
  await page.goto('https://www.mightynetworks.com/', { waitUntil: 'networkidle', timeout: 45000 });
  await page.waitForTimeout(1500);

  await page.screenshot({ path: path.join(outDir, 'desktop-full.png'), fullPage: true });

  // Capture above-the-fold separately
  await page.screenshot({ path: path.join(outDir, 'desktop-fold.png'), fullPage: false });

  // Dump simplified DOM structure (top-level sections)
  const skeleton = await page.evaluate(() => {
    function summarize(el, depth = 0, max = 4) {
      if (depth > max) return null;
      const tag = el.tagName.toLowerCase();
      const cls = (el.className || '').toString().trim().split(/\s+/).slice(0, 3).join('.');
      const id = el.id ? `#${el.id}` : '';
      const text = (el.innerText || '').trim().slice(0, 80).replace(/\s+/g, ' ');
      const kids = Array.from(el.children).map(c => summarize(c, depth + 1, max)).filter(Boolean);
      return { tag: `${tag}${id}${cls ? '.' + cls : ''}`, text, kids };
    }
    const main = document.querySelector('main') || document.body;
    return Array.from(main.children).map(c => summarize(c, 0, 3));
  });
  fs.writeFileSync(path.join(outDir, 'skeleton.json'), JSON.stringify(skeleton, null, 2));

  // Pull computed styles for the body to extract type / color cues
  const styles = await page.evaluate(() => {
    const body = document.body;
    const cs = getComputedStyle(body);
    const h1 = document.querySelector('h1');
    const h1cs = h1 ? getComputedStyle(h1) : null;
    return {
      body: {
        fontFamily: cs.fontFamily,
        fontSize: cs.fontSize,
        color: cs.color,
        background: cs.backgroundColor,
        lineHeight: cs.lineHeight,
      },
      h1: h1cs ? {
        fontFamily: h1cs.fontFamily,
        fontSize: h1cs.fontSize,
        fontWeight: h1cs.fontWeight,
        lineHeight: h1cs.lineHeight,
        letterSpacing: h1cs.letterSpacing,
        color: h1cs.color,
        text: h1.innerText.slice(0, 100),
      } : null,
    };
  });
  fs.writeFileSync(path.join(outDir, 'styles.json'), JSON.stringify(styles, null, 2));

  console.log('saved to', path.relative(ROOT, outDir));
  await browser.close();
})().catch((err) => { console.error(err); process.exit(1); });
