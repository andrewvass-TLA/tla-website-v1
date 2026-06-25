# The Loan Atlas — Marketing Site

Static HTML/CSS/JS marketing site that ships **into WordPress** via a small build
step (each `public/` page becomes a theme partial). Edit source in `public/`, push to
`main`, and a GitHub Action deploys it.

## Layout

```
public/        Source pages — you edit these (HTML, css/, js/, assets/)
wp-theme/      Generated WordPress child theme that deploys (see DEPLOY.md)
docs/          Page copy briefs (never deployed)
experiments/   Historical variants, mockups, design references
scripts/       Build & dev tooling (build, preview, ship, serve, screenshot)
.claude/       Agent docs — CLAUDE.md (guidance) + DESIGN.md (design system)
```

## Local development

```bash
npm run serve     # raw source at http://localhost:4321 (no nav/footer chrome)
npm run build     # regenerate the WordPress theme from public/
npm run preview    # assemble wp-theme/_preview-*.html (the real shipping render)
```

Edit only under `public/`. To check a change, open `wp-theme/_preview-<slug>.html` —
that renders the exact files that deploy. A raw `public/*.html` opened directly is
missing the shared nav/footer, so don't judge from it.

## Deploy

The site lives **inside WordPress** as a child-theme page template, and ships by
**`git push` to `main`** — a GitHub Action SFTPs the changed theme files to the
server. WordPress keeps serving the shop, blog, podcast, and partner funnels
untouched.

**Everyday editing & deploying:** see **[WORKFLOW.md](WORKFLOW.md)** — the
repeatable edit → build → push loop, the caching gotcha, and the slug map.

**Architecture & one-time setup:** see **[DEPLOY.md](DEPLOY.md)**.

```bash
# edit public/<page>.html, then in one command:
npm run ship "Update pages"   # build → preview → commit → push
# → Actions tab auto-deploys to WP Engine (~30s); then clear WP Engine + Cloudflare caches
```

`npm run ship` runs `build` (converts `public/` pages into theme partials under
`wp-theme/responsiveChild-theme/tla/pages/`), `preview`, commit, and push.

## Design system

See [.claude/DESIGN.md](.claude/DESIGN.md) for tokens, typography, component
conventions, the page families, and motion specs.

## Screenshots (dev only)

```bash
npm run shoot:install    # one-time: install Playwright Chromium
npm run shoot index.html # capture desktop/tablet/mobile screenshots
```
