# Day-to-day workflow — editing & deploying the live site

The site is live on **theloanatlas.com** (WordPress, "Responsive Child Theme"),
and deploys automatically: **edit source → build → commit → push → it's live in
~30s.** No manual SFTP, no WordPress admin for content edits.

> Architecture & one-time setup live in **[DEPLOY.md](DEPLOY.md)**. This file is
> the repeatable everyday process.

---

## The mental model (read this once)

There are three copies of every page, but **you only ever edit one of them**:

| | What it is | You edit it? |
|---|---|---|
| `public/*.html`, `public/css`, `public/js`, `public/assets` | **The source** — plain HTML/CSS/JS you author | ✅ **yes** |
| `wp-theme/responsiveChild-theme/tla/partials/header.php`, `footer.php` | The shared nav/footer | ✅ yes (only these two) |
| `wp-theme/responsiveChild-theme/tla/**` (pages, css, js, assets) | **Generated** — what gets SFTP'd to WordPress | ❌ never — overwritten on build |
| `wp-theme/_preview-*.html` | **What you look at** — the assembled page rendered locally | ❌ never — generated |

> The live page is PHP and there's no PHP installed locally, so you can't just
> open the file that ships. `_preview-<slug>.html` is the bridge: it renders the
> **exact** `tla/` files the deploy uploads (real `header.php`, real CSS/JS).
> **Opening `_preview-<slug>.html` IS testing the shipping output.** Opening a raw
> `public/*.html` will NOT show the nav (it's a `<!-- TLA_HEADER -->` placeholder
> that the build swaps for the shared header) — trust the preview, not the raw file.

---

## The everyday loop

```bash
# 1. Edit the SOURCE only:
#    - a page:       public/index.html, public/pricing.html, …
#    - shared CSS/JS: public/css/styles.css, public/js/nav.js, …
#    - the nav/footer: wp-theme/responsiveChild-theme/tla/partials/header.php (or footer.php)

# 2+3. Build (regenerates partials + syncs css/js/assets into the theme) and preview:
npm run ship          # ← does everything below; OR run the steps by hand:

#   npm run build      # = scripts/convert-pages.sh
#   npm run preview     # = scripts/preview-pages.sh
#   open wp-theme/_preview-home.html        # or any _preview-<slug>.html
#   git add -A && git commit -m "describe the change" && git push origin main

# 4. Watch it deploy: GitHub repo -> Actions tab -> run goes green (~30s)

# 5. Clear caches (SEE BELOW), then hard-refresh the page
```

`npm run ship "message"` runs build → preview → commit → push in one shot. To
eyeball before committing, run `npm run build && npm run preview`, open the
preview, then `npm run ship "message"` once you're happy.

### The blog is different — it's WordPress templates, not `public/*.html`

The blog (`/blog/`, single posts, category archives) is **NOT** a `public/*.html`
page run through `convert-pages.sh`. It is rendered by real WordPress templates:

| Live URL | Template | Styles | Card/loop helpers |
|---|---|---|---|
| `/blog/` (posts index) | `wp-theme/responsiveChild-theme/home.php` | `tla/css/blog.css` | `tla_blog_*` in `functions.php` |
| single post | `single.php` | `tla/css/blog.css` | — |
| category/tag/search | `archive.php` | `tla/css/blog.css` | `tla_blog_*` |

`public/blog.html`, `blog-post.html`, `blog-archive.html` are **design mockups only**
— editing them changes nothing live. To change the blog, edit `home.php` /
`single.php` / `archive.php` + `tla/css/blog.css` directly.

Preview them with **`npm run preview:blog`** (or it runs inside `npm run preview`):
it stubs the WordPress post loop with fixture posts and renders the real template
markup + real `blog.css` to `wp-theme/_preview-tpl-<template>.html`. No PHP needed.
It prints a warning for any PHP it doesn't model (so the preview is honestly
flagged as approximate) — `home.php` is fully modeled; `single`/`archive` are
partial. It's a visual/structure check, not a real WP render — still verify the
live page after deploy.

---

## ⚠️ Caching — the #1 reason a change "didn't work"

There are **two** cache layers in front of the site. After every deploy, clear
both, then hard-refresh (Cmd+Shift+R) or use an incognito window:

1. **WP Engine** — admin bar "WP Engine → Clear all caches", or the WP Engine portal.
2. **Cloudflare** — Cloudflare dashboard → Caching → **Purge Everything**.

If a deployed change isn't visible, it's almost always cache — not the deploy.

---

## Which file do I edit?

| To change… | Edit | Then |
|---|---|---|
| Content/design of ONE page | `public/<page>.html` | `npm run ship "msg"` |
| Nav or footer (ALL pages) | `wp-theme/responsiveChild-theme/tla/partials/header.php` / `footer.php` | `npm run ship "msg"` |
| Shared styles | `public/css/styles.css` or `chrome.css` | `npm run ship "msg"` |
| Shared JS / images | `public/js/*.js` / `public/assets/*` | `npm run ship "msg"` |
| A brand-new page | new `public/X.html` + add to slug map in `scripts/convert-pages.sh` | `npm run ship` → **then create the WP page (below)** |

> **Never hand-edit anything under `wp-theme/responsiveChild-theme/tla/` except
> `partials/header.php` and `partials/footer.php`.** The `pages/`, `css/`, `js/`,
> and `assets/` folders are all **generated** by `convert-pages.sh` (it now rsyncs
> `public/css|js|assets` into the theme on every build) and are overwritten each
> run. Edit the source in `public/` instead. The nav/footer are the one exception
> because they're shared PHP — and they live in exactly one place, `partials/`.

---

## Adding a brand-new page (needs one WordPress step)

The deploy uploads the file, but WordPress still needs a Page created once:

1. Add `public/<name>.html` (copy an existing page; keep its `<title>`,
   `<meta name="description">`, and the `<!-- TLA_HEADER -->` / `<!-- TLA_FOOTER -->`
   sentinels where the shared nav/footer should go), then add a line to the slug
   map at the bottom of `scripts/convert-pages.sh`: `convert <name> <slug> <active-key>`
2. `npm run ship "add <name> page"` (file deploys).
3. WP Admin → **Pages → Add New** → set **Slug** = `<slug>` →
   **Page Attributes → Template → "TLA Full HTML"** → leave body empty → Publish.
4. Clear caches → load `/<slug>/`.

---

## Slug map (source file → live URL)

| Source (`public/`) | Live URL |
|---|---|
| `index.html` | `/` (homepage — set via Appearance → Customize → Homepage) |
| `pricing.html` | `/join/` |
| `faculty.html` | `/faculty/` |
| `corporate.html` | `/enterprise/` |
| `whats-inside.html` | `/whats-inside/` |
| `sales-individual.html` | `/membership/` |
| `consultation.html` | `/consultation/` |
| `events.html` | `/events/` |
| `mastermind.html` | `/join-mastermind-2026/` |
| `consultation-corporate.html` | `/enterprise-consultation/` |
| `consultation-mastermind.html` | `/consultation-mastermind-2026/` |

---

## Careful with `functions.php`

`wp-theme/responsiveChild-theme/functions.php` controls the CSS-dequeue and the
floating-bar suppression that make the pages render standalone. A PHP **syntax
error here can white-screen the theme**, and the deploy won't catch it (errors
only surface live). Edit it sparingly and verify the live site right after. The
WP Engine daily checkpoint backup is your rollback if needed.

---

## What is NOT automated

- **WordPress Pages** — creating a page / assigning the template / setting the
  slug is manual (one-time per page).
- **Everything outside these pages** — blog, shop, podcast, partner funnels —
  stays in WordPress, untouched by this workflow.
- **Old-slug orphans & `*-test.php`** — harmless leftovers on the server from the
  build-out; the deploy never deletes them. Remove via SFTP if you want a tidy
  server, but nothing references them.
