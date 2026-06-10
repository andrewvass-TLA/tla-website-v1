# Platinum Activation Page — members.theloanatlas.com

A **self-contained, JS-free** marketing + activation page for the members site, built to live
inside a single Gutenberg **Custom HTML block**. This is a *separate* WordPress install from
theloanatlas.com — it is **not** part of this repo's `public/` → `build`/`ship` pipeline. Source
lives here for version control only; deploy is a manual copy-paste into WP.

## Files
- `index.html` — the snippet + deploy instructions in the top comment. Open it directly in a browser to preview.

## Deploy (copy-paste, no SFTP / no theme edits)
1. **Upload images** to the WP Media Library on members.theloanatlas.com. Source images you can reuse:
   `../public/assets/platinum-example-1.png`, `-2.png`, `-3.png`.
2. Copy each Media URL and replace the placeholders, then **uncomment** the gallery block in `index.html`:
   - `__MEDIA_URL_EXAMPLE_1__`, `__MEDIA_URL_EXAMPLE_2__`, `__MEDIA_URL_EXAMPLE_3__`
3. Replace the link placeholders:
   - `__ACTIVATE_URL__` — the activation flow URL
   - `__COACHING_URL__` — the free coaching session booking URL
4. WP admin → new page → add one **Custom HTML** block → paste everything between the
   `PASTE FROM THE NEXT LINE DOWN` and `PASTE UP TO HERE` markers (omit the top comment).
5. **Preview** the page (not just the editor view). Then re-open + re-save to confirm the block
   isn't flagged "invalid" (round-trip test).
6. Set `<title>` / meta description / OG tags in the **SEO plugin fields** on the page — not in the HTML.

## Why it's built this way (constraints)
- **JS-free** so it survives multisite / security-plugin sanitization (`<script>` is stripped first).
- **Every CSS selector scoped under `.tla-plat`** so it can't collide with the theme's styles.
- **Dark sections break out** of the theme content container via `width:100vw; margin-left:calc(50% - 50vw)`.
- **Fonts via `@import` + system fallback** — reads cleanly even if the `@import` is stripped.
- FAQ uses native `<details>`/`<summary>` (no JS).

## Before publishing — confirm
- The publishing user is an **Administrator** (Super Admin if multisite) so HTML isn't filtered.
- Whether a **full-width / canvas page template** exists (makes the breakout unnecessary).
- The **FAQ billing answer** wording matches the real terms of the 6-month offer.
