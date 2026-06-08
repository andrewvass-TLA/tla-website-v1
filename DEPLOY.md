# Deploying to theloanatlas.com (WordPress)

The new marketing pages live **inside** the existing WordPress site as a custom
page template in the `responsiveChild-theme` child theme. WordPress keeps serving
everything else (shop, checkout, blog, podcast, partner funnels) untouched.

Updates ship by **`git push` to `main`** → a GitHub Action SFTPs the changed
theme files to the server. No more drag-and-drop.

```
wp-theme/responsiveChild-theme/        ← mirror of the live child theme
  style.css                            child-theme header (Template: responsive)
  functions.php                        enqueues parent + child styles (safe to activate)
  new-page-template.php                (pre-existing — unchanged)
  second-page-template.php             (pre-existing — unchanged)
  screenshot.png                       (pre-existing — unchanged)
  tla-fullhtml-template.php            "TLA Full HTML" page template
  tla/
    css/   (styles.css, chrome.css)
    js/    (nav.js, animations.js, ai-systems-carousel.js)
    assets/ (images)
    partials/ (header.php, footer.php — SHARED nav + footer)
    pages/ (one PHP partial per page, e.g. home.php, pricing.php)
```

## How a page works

1. The template `tla-fullhtml-template.php` renders a **complete standalone HTML
   document** — no parent-theme header/footer.
2. It reads the WordPress page **slug** and includes `tla/pages/<slug>.php` as the body.
3. Each page partial includes the **shared** `tla/partials/header.php` and
   `footer.php` — so the nav and footer are edited in ONE place for all pages.
4. Asset URLs use `TLA_BASE` (the absolute URL to `tla/`), so images/CSS/JS
   resolve regardless of the page's URL.
5. Each partial sets `$tla_title` / `$tla_description` / `$tla_active` at the top
   (SEO title/description + which nav item to highlight).

> **Don't hand-edit `tla/pages/*.php`.** They're generated from `public/*.html`
> by `scripts/convert-pages.sh`. Edit the source HTML (or the shared partials),
> then re-run the script. See "Regenerating pages" below.

---

## One-time setup

### A. Add the GitHub secrets
Repo → **Settings → Secrets and variables → Actions → New repository secret**:

| Secret | Value |
|---|---|
| `SFTP_HOST` | your SFTP host (e.g. `theloanatlas.com`) |
| `SFTP_USER` | your SFTP username |
| `SFTP_PORT` | usually `22` |
| `SFTP_SSH_KEY` | **private** SSH key (full text) — recommended |
| `SFTP_PASSWORD` | only if your host is password-only (see workflow note) |

**SSH key vs password:** SSH key is recommended. Generate a keypair
(`ssh-keygen -t ed25519`), add the **public** key to your host's SSH/SFTP
settings, and paste the **private** key into `SFTP_SSH_KEY`. If your host only
allows password SFTP, edit `.github/workflows/deploy.yml`: comment out the
`ssh-private-key:` line and uncomment `password:`.

### B. Confirm the server path
In `.github/workflows/deploy.yml`, `SERVER_DIR` defaults to
`/wp-content/themes/responsiveChild-theme/`. Confirm the **absolute** path via your
SFTP client (some hosts prefix `/public_html/` or `/sites/theloanatlas.com/files/`).

### C. Activate the child theme  ⚠️ the important step
The site currently runs the **parent** `Responsive` theme. WordPress only loads
our page templates from the **active** theme, so the child must be activated.
Our `functions.php` re-enqueues the parent stylesheet first, so activation is
safe — but treat it carefully on a live site:

1. **Back up** (host snapshot or a full backup) first.
2. Push once (so the updated `functions.php` is on the server) **before** activating.
3. Activate during **low traffic**: Appearance → Themes → **Responsive Child
   Theme → Activate**.
4. Immediately check the **homepage, a blog post, and the shop/checkout**.
5. **Rollback if anything looks off:** Appearance → Themes → activate
   **Responsive** again. Instant, one click.

> If you'd rather not switch the active theme yet, you can keep testing by
> putting `tla-fullhtml-template.php` + `tla/` into the **active parent**
> `Responsive` theme — but that's temporary (wiped on a theme update). The child
> theme is the real home.

---

## Creating the WordPress pages

For each page: WP Admin → **Pages → Add New** → set the **Slug** (table below) →
**Page Attributes → Template → "TLA Full HTML"** → leave the body empty →
**Publish**. (Don't open these with Elementor — set the template in the normal
page editor.)

### Slug map (source file → WordPress slug → nav highlight)

| Source (`public/`) | Slug → URL | Notes |
|---|---|---|
| `index.html` | `home` → set as homepage (see below) | |
| `pricing.html` | `pricing` → `/pricing/` | |
| `faculty.html` | `faculty` → `/faculty/` | has the faculty modal |
| `corporate.html` | `businesses` → `/businesses/` | old SEO slug |
| `whats-inside.html` | `whats-inside` → `/whats-inside/` | |
| `sales-individual.html` | `individuals` → `/individuals/` | old SEO slug |
| `consultation.html` | `book-a-demo` → `/book-a-demo/` | old SEO slug; GHL form embed |
| `events.html` | `events` → `/events/` | |
| `mastermind.html` | `mastermind` → `/mastermind/` | |
| `consultation-corporate.html` | `consultation-corporate` → `/consultation-corporate/` | GHL form embed |
| `consultation-mastermind.html` | `consultation-mastermind` → `/consultation-mastermind/` | GHL form embed |

> **Slug collisions:** the old WordPress site already has pages at some of these
> slugs (e.g. `/individuals/`, `/businesses/`, `/book-a-demo/`). WordPress won't
> let two published pages share a slug. For each, either (a) move/trash the old
> page first, or (b) test on a `-new` slug, then swap. Do this per page as you
> cut each one over.

### The homepage (do this last)
1. Create a page with slug `home` + "TLA Full HTML" template; verify it at `/home/`.
2. **Settings → Reading → "Your homepage displays" → A static page → Home.**
3. Reversible anytime by switching it back to the previous homepage.

---

## Pushing updates

```bash
git add -A
git commit -m "Update pages"
git push origin main      # → Actions tab runs the SFTP deploy
```

### Regenerating pages from source
The deployable `tla/pages/*.php` are generated, not hand-written:

```bash
bash scripts/convert-pages.sh     # rebuild all page partials from public/*.html
bash scripts/preview-pages.sh     # build wp-theme/_preview-*.html to eyeball locally
```

Edit `public/<page>.html` (or `tla/partials/header.php` / `footer.php` for nav
and footer), re-run `convert-pages.sh`, preview, then commit + push.

---

## Verifying a deploy

1. **Action is green** (repo → Actions tab); files updated under
   `wp-content/themes/responsiveChild-theme/tla/` (check via SFTP).
2. Load each page; DevTools → **Network → zero 404s** for `tla/css`, `tla/js`,
   `tla/assets`.
3. Nav + footer links go to real slugs; the current page is highlighted.
4. Page-specific behavior works: homepage AI-systems carousel, faculty modal
   opens, consultation pages show the booking form, mobile menu toggles.
5. **Untouched WordPress still works:** `/shop`, `/checkout`, `/blog/`, a
   `/mentors-…`, a partner funnel — all unchanged.

## Notes / known quirks
- **WordPress popups/plugins still fire** on these pages (via `wp_head`/`wp_footer`)
  — that's intentional (SEO, analytics, consent). If a marketing popup clashes,
  it can be suppressed on TLA-template pages specifically.
- **Filenames with spaces/apostrophes** (e.g. `Loan Atlas logo-gold.png`) are
  referenced URL-encoded and load fine; no need to rename.
