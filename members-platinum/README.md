# Platinum Activation Page — members.theloanatlas.com

A **self-contained, JS-free** marketing + activation page for the members site, built to live
inside a single Gutenberg **Custom HTML block**. This is a *separate* WordPress install from
theloanatlas.com — it is **not** part of this repo's `public/` → `build`/`ship` pipeline. Source
lives here for version control only; deploy is a manual copy-paste into WP.

## Files
- `index.html` — the snippet + deploy instructions in the top comment. Open it directly in a browser to preview.

This page mirrors the public marketing page (`../public/platinum-marketing.html`,
theloanatlas.com/platinum-marketing) in look and content, rebuilt JS-free and re-pointed at the
members' **free 6-month activation** offer.

## Deploy (copy-paste, no SFTP / no theme edits)
1. **All images are wired** to the members.theloanatlas.com Media Library
   (`.../wp-content/uploads/2026/06/...`) — decks, flyer, newsletter, social (1–4), landing (1–2),
   and the Loan Atlas logomark (chat avatars + comparison lockup). No placeholders remain.
2. The two CTA areas (hero + final) use the WPCode shortcodes (`[tla_magic_login_form]`,
   `[tla_platinum_cta]`, `[tla_spt_add_url …]`). Confirm those snippets + the `do_shortcode`
   filter snippet are active (see the top comment in `index.html`).
4. WP admin → new page → add one **Custom HTML** block (or single Elementor "HTML" widget) → paste
   everything between the `PASTE FROM THE NEXT LINE DOWN` and `PASTE UP TO HERE` markers (omit the
   top comment).
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
