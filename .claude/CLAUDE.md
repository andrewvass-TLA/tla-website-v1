# CLAUDE.md

Guidance for Claude Code (claude.ai/code) when working in this repository.

> **Docs map:** this file is the orientation + summary. For full detail, defer to:
> **[WORKFLOW.md](../WORKFLOW.md)** (everyday edit→ship loop, caching gotcha) ·
> **[DEPLOY.md](../DEPLOY.md)** (deploy architecture & one-time setup) ·
> **[.claude/DESIGN.md](DESIGN.md)** (colors, type, components, page families, motion).

## Project Overview

Marketing website for **The Loan Atlas** — a mortgage coaching and AI business system.
Source is plain static HTML/CSS/JS (no framework, no bundler). It ships to a live
WordPress site (theloanatlas.com) via a small build step that turns each `public/` page
into a PHP theme partial. Playwright is present **only** for design-review screenshots.

## Dev & deploy workflow (read this first)

**You edit `public/` — never `wp-theme/…/tla/`, which is generated and overwritten on
every build.** There are three copies of each page; you only author one.

```bash
npm run serve     # localhost:4321 — quick raw-source dev server (no nav/footer chrome)
npm run build     # scripts/convert-pages.sh — regenerates wp-theme/…/tla/ from public/
npm run preview   # scripts/preview-pages.sh — assembles wp-theme/_preview-*.html
npm run ship "msg"# build → preview → commit → push (push to main auto-deploys in ~30s)
npm run shoot     # Playwright screenshots (run `npm run shoot:install` once first)
```

- **Source of truth is `public/`** — `public/*.html`, `public/css/`, `public/js/`,
  `public/assets/`.
- **The only files you hand-edit under `wp-theme/`** are the shared
  `…/tla/partials/header.php` and `footer.php`. Each page's `<header>`/`<footer>` is a
  `<!-- TLA_HEADER -->` placeholder the build swaps for these partials.
- **The preview IS the test.** Judge a change from `wp-theme/_preview-<slug>.html` (it
  renders the exact files that deploy). A raw `public/*.html` opened directly will be
  missing the nav/footer — don't judge from it.
- **Default: edit `public/` only.** Run a build/preview when asked; run `ship` (which
  pushes/deploys) only on a separate, explicit OK.

> Full detail lives in **[WORKFLOW.md](../WORKFLOW.md)** (everyday loop, the caching
> gotcha) and **[DEPLOY.md](../DEPLOY.md)** (architecture & one-time setup). This file
> only summarizes — defer to those.

## Architecture

**Pages:** 21 live `.html` pages in `public/`, each standalone. They fall into five
design families (see DESIGN.md): house style (`index`, `pricing`, `sales-individual`,
`events`, `contact`), dark-hero/enterprise (`faculty`, `consultation*`, `corporate`,
`whats-inside`), fresh standalone landings (`ai-originator-masterplan`, `5-scripts`,
`mastermind`, `platinum-marketing`), blog (`blog`, `blog-archive`, `blog-post`), and
legal/utility (`privacy-policy`, `terms-of-use`, `end-user-agreement`).

`hero-mockup*.html` and `patterns.html` are experiments/reference — **not live**.

**Shared resources (linked by every page, in this order):**
- `css/styles.css` (~8,200 lines) — design tokens at the top, then the component
  catalog. It has grown to contain four design systems (house, What's-Inside V1/V2,
  mastermind/shared-landing) plus two page-scoped fresh-page suites (`.aimp-*`, `.s5-*`).
- `css/chrome.css` (~370 lines) — site-wide header/footer/nav, loaded **last**.
  Self-contained (hardcoded values, no token dependency).
- `js/nav.js` (mobile drawer + nav dropdowns), `js/animations.js` (scroll reveal,
  count-ups, hero entrance), `js/ai-systems-carousel.js` (auto-advancing showcase).
  Not every page loads all three.
- Google Fonts CDN — Manrope (display) + Inter (body).

**Reality of page CSS:** most pages also carry a **large inline `<style>` block** for
their hero and bespoke layout (whats-inside ~2,650 lines; mastermind ~1,940). Shared
tokens/chrome/components live in the stylesheets; per-page layout choreography lives
inline. Match this pattern when adding pages.

**Assets:** all images in `public/assets/`. Logos: gold variant in the header, color
variant in the footer (`Loan Atlas logo-gold.png` / `…-color.png` / `…-white.png`).

## Design System

**Source of truth: [.claude/DESIGN.md](DESIGN.md)** — full color/type/component reference,
the five page families, motion specs, and the "fresh page design" rules. Highlights:

- **Colors:** Primary Midnight Slate `#021c36`; Brass `#c9961c` / Brass-bright `#eac25a`;
  brass gradient `linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%)`;
  background `#f7f9fb`, surface `#ffffff`.
- **Canonical dark band:** `linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%)`
  (most dark sections). `linear-gradient(135deg, #0a1628, #131b2e, #1e293b)` is only
  `.panel-dark`/`.ai-panel`.
- **Type:** Manrope display / Inter body. `.t-display` (700), `.t-headline-lg/-md` (600),
  `.t-body-lg/-body` (400), `.t-eyebrow` (Inter **700**, 0.875rem, uppercase, brass).
- **Spacing:** 8px-ish — xs 8 / sm 16 / md 24 / lg 40 / xl 64. 1280px container, 24px gutter.
  `.section` = `padding-block: clamp(48px, 6vw, 96px)`.
- **Shape:** `--radius` 0.25rem default; cards `--radius-xl`/`-2xl`; large containers
  `--radius-3xl`.

## CSS conventions

- Use the CSS custom properties (design tokens), not hardcoded hex.
- For a **new reusable component**, add it to the relevant region of `css/styles.css`.
  For **page-specific layout**, prefer an inline `<style>` block on the page (the
  established pattern) rather than bloating styles.css.
- Mobile-first; breakpoints declared within each component's section.
- "Fresh page" landings (`make it look like <external site>`) get their own namespaced
  classes and visual language — keep only colors + fonts + logo. See DESIGN.md.
- All motion must include a `prefers-reduced-motion: reduce` fallback (the site honors it
  everywhere).
