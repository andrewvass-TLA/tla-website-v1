# The Loan Atlas — Marketing Site

Static HTML/CSS/JS marketing site. No build step.

## Layout

```
public/        Everything that gets deployed (HTML, css/, js/, assets/)
docs/          Design briefs and DESIGN.md (never deployed)
experiments/   Historical variants, mockups, design references
scripts/       Local dev tooling (serve, screenshot)
```

## Local development

```bash
npm run serve            # serves public/ at http://localhost:4321
```

Or open any file under `public/` directly in a browser.

## Deploy (SFTP)

Upload the **contents** of `public/` to the web root on the SFTP server. Do not upload any other folder. Example with `lftp`:

```bash
lftp -e "mirror -R --delete public/ /path/on/server/" sftp://user@host
```

Whatever client you use (Cyberduck, Transmit, FileZilla, etc.), point it at `public/` as the local root.

## Design system

See [docs/DESIGN.md](docs/DESIGN.md) for tokens, typography, and component conventions.

## Screenshots (dev only)

```bash
npm run shoot:install    # one-time: install Playwright Chromium
npm run shoot index.html # capture desktop/tablet/mobile screenshots
```
