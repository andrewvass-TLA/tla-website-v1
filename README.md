# The Loan Atlas — Marketing Site

Static HTML/CSS/JS marketing site. No build step.

## Layout

```
public/        Source pages for local dev (HTML, css/, js/, assets/)
wp-theme/      WordPress child theme that gets deployed (see DEPLOY.md)
docs/          Design briefs and DESIGN.md (never deployed)
experiments/   Historical variants, mockups, design references
scripts/       Local dev tooling (serve, screenshot)
```

## Local development

```bash
npm run serve            # serves public/ at http://localhost:4321
```

Or open any file under `public/` directly in a browser.

## Deploy

The site lives **inside WordPress** as a child-theme page template, and ships by
**`git push` to `main`** — a GitHub Action SFTPs the changed theme files to the
server. WordPress keeps serving the shop, blog, podcast, and partner funnels
untouched.

See **[DEPLOY.md](DEPLOY.md)** for the full setup (GitHub secrets, server path,
creating WordPress pages) and the source-file → URL slug map.

```bash
git add -A && git commit -m "Update pages" && git push origin main
# → Actions tab runs "Deploy child theme to WordPress (SFTP)"
```

Pages are edited under `public/` during local dev, then converted into theme
partials under `wp-theme/responsiveChild-theme/tla/pages/`. DEPLOY.md explains the
relationship.

## Design system

See [docs/DESIGN.md](docs/DESIGN.md) for tokens, typography, and component conventions.

## Screenshots (dev only)

```bash
npm run shoot:install    # one-time: install Playwright Chromium
npm run shoot index.html # capture desktop/tablet/mobile screenshots
```
