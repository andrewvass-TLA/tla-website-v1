---
name: The Loan Atlas — Design System
colors:
  # Surfaces
  surface: '#f7f9fb'
  surface-bright: '#f7f9fb'
  surface-dim: '#d8dadc'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f4f6'
  surface-container: '#eceef0'
  surface-container-high: '#e6e8ea'
  surface-container-highest: '#e0e3e5'
  background: '#f7f9fb'
  on-background: '#191c1e'
  on-surface: '#191c1e'
  on-surface-variant: '#45464d'
  outline: '#76777d'
  outline-variant: '#c6c6cd'
  inverse-surface: '#2d3133'
  inverse-on-surface: '#eff1f3'

  # Primary — Midnight Slate
  primary: '#021c36'
  primary-deep: '#000000'
  on-primary: '#ffffff'
  primary-container: '#021c36'
  on-primary-container: '#6f85a4'
  primary-fixed: '#d2e4ff'
  primary-fixed-dim: '#b1c8e9'

  # Secondary / Brass family
  secondary: '#765b00'
  on-secondary: '#ffffff'
  secondary-container: '#ffd56c'
  on-secondary-container: '#775b00'
  secondary-fixed: '#ffdf94'
  secondary-fixed-dim: '#eac25a'
  brass: '#c9961c'          # warm mid-tone; icons, eyebrows, quote marks
  brass-bright: '#eac25a'   # lighter tone; system eyebrows on dark bg

  # Tertiary (deep navy — card accents)
  tertiary-container: '#0d1c2f'
  on-tertiary-container: '#76859b'

  # Status
  error: '#ba1a1a'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  success: '#1f7a3a'

typography:
  # CSS class → t-display
  display:
    fontFamily: Manrope
    fontSize: clamp(2.25rem, 1.6rem + 2.5vw, 3rem)
    fontWeight: '700'
    lineHeight: 1.1
    letterSpacing: -0.02em
  # CSS class → t-headline-lg
  headline-lg:
    fontFamily: Manrope
    fontSize: clamp(1.625rem, 1.3rem + 1.2vw, 2rem)
    fontWeight: '600'
    lineHeight: 1.25
    letterSpacing: -0.01em
  # CSS class → t-headline-md
  headline-md:
    fontFamily: Manrope
    fontSize: 1.5rem
    fontWeight: '600'
    lineHeight: 2rem
  # CSS class → t-body-lg
  body-lg:
    fontFamily: Inter
    fontSize: 1.125rem
    fontWeight: '400'
    lineHeight: 1.55
  # CSS class → t-body
  body:
    fontFamily: Inter
    fontSize: 1rem
    fontWeight: '400'
    lineHeight: 1.5
  # CSS class → t-label
  label:
    fontFamily: Inter
    fontSize: 0.875rem
    fontWeight: '500'
    lineHeight: 1.25
    letterSpacing: 0.01em
  # CSS class → t-caption
  caption:
    fontFamily: Inter
    fontSize: 0.75rem
    fontWeight: '400'
    lineHeight: 1.25
  # CSS class → t-eyebrow (note: 0.875rem / 700 in code)
  eyebrow:
    fontFamily: Inter
    fontSize: 0.875rem
    fontWeight: '700'
    letterSpacing: 0.18em
    textTransform: uppercase
    color: brass
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  2xl: 1rem
  3xl: 1.5rem
  full: 9999px
spacing:
  base: 4px
  xs: 8px
  sm: 16px
  md: 24px
  lg: 40px
  xl: 64px
  container-max: 1280px
  gutter: 24px
---

# The Loan Atlas — Design System

> **Source of truth for the current website build.** Last full audit: June 2026.
> This document describes the design as it actually ships, across all live pages and
> the four CSS systems that have grown inside `css/styles.css`.

---

## Brand & Voice

The Loan Atlas is a mortgage coaching and AI business system. The visual language
communicates **authority, precision, and premium access** — a private coaching firm,
not a software product. Every page targets working mortgage professionals who are
skeptical of hype and respond to systems, proof, and specificity.

The core feel: **editorial and calm**, with an alternating rhythm of light content
sections and immersive dark sections. Brass is reserved for moments of high value or
AI identity — never sprayed across the page. Type is tight and confident; whitespace
is generous; motion is subtle and always reduced-motion-aware.

---

## CSS Architecture (read this first)

The site is static HTML/CSS/JS, no build step. Every live page links **exactly two
stylesheets**, in this order:

1. **`css/styles.css`** (~8,200 lines) — design tokens, type scale, layout primitives,
   and the full component catalog. It also contains four distinct design systems that
   have accreted over time (see below) plus two page-scoped fresh-page suites
   (`.aimp-*`, `.s5-*`).
2. **`css/chrome.css`** (~370 lines) — site-wide header, footer, and nav dropdown.
   Loaded **last** so the chrome looks identical on every page. **Self-contained:** all
   values are hardcoded (no token dependency) so it never breaks regardless of which
   base styles a page uses.

**Important reality: most pages also carry a large page-scoped `<style>` block** for
their hero and bespoke layout. This is the dominant pattern, not the exception:

| Page | Inline `<style>` lines | Notes |
|---|---|---|
| `whats-inside.html` | ~2,650 | Most elaborate; full curriculum/showcase ecosystem |
| `mastermind.html` | ~1,940 | Sticky offer bar, hero assistant, trust strip |
| `consultation-mastermind.html` | ~830 | Offer bar + booking |
| `corporate.html` | ~690 | Enterprise hero + offer sections |
| `faculty.html` | ~570 | Navy hero w/ right-edge image fade + grid |
| `sales-individual.html` | ~480 | LP header + hero |
| `pricing.html` | ~420 | Dark hero + pricing grid |
| `platinum-marketing.html` | ~340 | Reuses mastermind `.lp-`/`.mm-` language |
| `consultation.html` | ~285 | Navy hero + booking |
| `contact.html` | ~265 | Two-column contact shell |
| `blog-post.html` | ~265 | Two-column post (future `blog.css`) |
| `index.html` | ~240 | Hero/content width overrides |
| `consultation-corporate.html` | ~230 | Navy hero + booking |
| blog / blog-archive | ~220 / ~125 | Future `blog.css` |
| legal pages | ~40 each | `.legal-header` + `.legal-doc` prose rhythm |
| `events.html` | 0 | Pure house style (shared classes only) |
| `ai-originator-masterplan.html` | 0 | Fresh design lives in styles.css as `.aimp-*` |
| `5-scripts.html` | 0 | Fresh design lives in styles.css as `.s5-*` |

**Rule of thumb:** shared tokens, chrome, and reusable components live in the
stylesheets; per-page hero + layout choreography lives inline. When adding a new page,
follow whichever family it belongs to (below) and keep its bespoke layout inline.

### The four systems inside styles.css
`styles.css` is organized by comment banners. The major regions:

1. **House catalog** (~ln 1–3266) — tokens, type, layout primitives, and the original
   reusable components. **This is the default vocabulary.**
2. **"What's Inside" V1 system** (~ln 3267–3883) — `.video-ph`, `.stats-bar`,
   `.tool-row`, `.discipline-card`, `.coaching-card`, `.template-item`. Legacy.
3. **"What's Inside" V2 system** (~ln 3884–4547) — `.wi2-*`: browser-frame, bento grid,
   tabbed AI-tools showcase, glass community card, social-proof band. **The preferred
   modern direction** for product-showcase layouts.
4. **Mastermind / shared-landing system** (~ln 4548–6396) — `.aisc-*` (AI systems
   carousel), `.takeaways`, `.mm-*` (summit CTA), `.lp-*` (shared landing hero with
   phone+dashboard stage), `.close-section` (standardized closing CTA).
5. **Pattern library** (~ln 6397–6739) — `.pl-*` scoped under `.patterns`. **Reference
   only** (`patterns.html`); namespaced so it never affects live pages. Do not ship.
6. **AI Originator Masterplan** (~ln 6740–8224) — `.aimp-*`, a fully page-scoped fresh
   design (see "Fresh page designs").

---

## Color

### Light sections
Default background `--background: #f7f9fb`. Cards/containers use the surface scale
(`--surface-container-lowest: #fff` … `--surface-container: #eceef0`). Body text
`--on-surface: #191c1e`; muted text `--on-surface-variant: #45464d` (use `.t-muted`).

### Dark sections — the canonical gradients
The site uses a small, consistent set of dark gradients. Use these verbatim; do not
invent new navies.

| Role | Value |
|---|---|
| **Standard dark band** (most dark sections, V2 dark, stats bar, compare "ours") | `linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%)` |
| **Dark panel / AI panel** (`.panel-dark`, inline accents) | `linear-gradient(135deg, #0a1628 0%, #131b2e 50%, #1e293b 100%)` |
| **Featured pricing plan card** | `linear-gradient(135deg, #0a1628, #021c36 60%, #0a223d)` |
| **Takeaways dark variant** | `linear-gradient(180deg, #021c36 0%, #06223f 55%, #021c36 100%)` |
| **Header (frosted)** | `rgba(2, 28, 54, 0.92)` + `backdrop-filter: saturate(180%) blur(12px)` |
| **Mastermind summit CTA** | `#000000` + low-opacity (~0.18) photo overlay |

Text on dark: headlines `#ffffff`, body `rgba(255,255,255,0.78)`, muted
`rgba(255,255,255,0.65)`. Glass surfaces: `rgba(255,255,255,0.06)` fill,
`rgba(255,255,255,0.1)`–`0.18` border, `backdrop-filter: blur(8px)`.

Decorative radial glows on dark sections: brass `rgba(234,194,90,0.09–0.16)` and blue
`rgba(178,200,233,0.07–0.25)`, blurred ~40–70px, positioned near edges via
`::before`/`::after`.

### Brass / Gold — the premium accent
- `--brass: #c9961c` — icons, eyebrow rules, quote marks, left-border accents
- `--brass-bright: #eac25a` — eyebrows and labels on dark backgrounds
- **Brass gradient** (buttons, heading highlights, save/CTA chips): `linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%)`
- **Brass gradient — hover/darker:** `linear-gradient(135deg, #b3841a 0%, #d6ae47 50%, #f6c95c 100%)`

Use `.text-brass` for inline brass text. Apply the brass gradient to `<em>` inside
headings with `background-clip: text; color: transparent`.

### Status
Error `#ba1a1a` (used for "what you've been told" / dash markers), success `#1f7a3a`.

---

## Typography

Loaded from Google Fonts CDN: **Manrope** (display, weights 500–800) and **Inter**
(body, 400–700). `--font-display` and `--font-body` both fall back to system-ui.

All headings (`h1`–`h6`) default to Manrope 600, `letter-spacing: -0.01em`,
`color: var(--on-surface)`.

### Utility classes
| Class | Specs |
|---|---|
| `.t-display` | Manrope, clamp(2.25rem→3rem), 700, ls -0.02em, lh 1.1 |
| `.t-headline-lg` | Manrope, clamp(1.625rem→2rem), 600, ls -0.01em |
| `.t-headline-md` | Manrope, 1.5rem / lh 2rem, 600 |
| `.t-body-lg` | Inter, 1.125rem, 400, lh 1.55 |
| `.t-body` | Inter, 1rem, 400, lh 1.5 |
| `.t-label` | Inter, 0.875rem, 500, ls 0.01em |
| `.t-caption` | Inter, 0.75rem, 400 |
| `.t-eyebrow` | Inter, **0.875rem, 700**, ls 0.18em, uppercase, `var(--brass)` |
| `.t-muted` | sets `color: var(--on-surface-variant)` |
| `.text-brass` | sets `color: var(--brass)` |

**Landmark headings** (hero titles, final CTA): go bigger and bolder than `.t-display` —
`clamp(2.25rem, 1.6rem + 2.6vw, 3.5rem)`, weight **700–800**, often with a brass-gradient
`<em>`. Inline-CTA / payoff headings push to weight 800 and `letter-spacing: -0.025em`.

---

## Layout & Spacing

- **Container:** `.container` — `max-width: 1280px`, `padding-inline: 24px`, centered.
  (Header uses a wider 1400px inner; footer uses 1280px.)
- **Section rhythm:** `.section` — `padding-block: clamp(48px, 6vw, 96px)`;
  `.section--tight` — `clamp(32px, 4vw, 56px)`.
- **Header offset:** `.site-main` / `body > main` gets `padding-top: 72px` to clear the
  fixed header (`--header-h: 72px`).
- **Spacing scale (8px-ish):** `--space-base: 4px` · `--space-xs: 8px` · `--space-sm: 16px`
  · `--space-md: 24px` · `--space-lg: 40px` · `--space-xl: 64px`.
- **Primitives:** `.grid` (gap md), `.stack` / `.stack-sm` (column flex), `.row`
  (row flex wrap, items center), `.center` (text-align center), `.center-x`
  (`margin-inline: auto`).

---

## Shape & Elevation

**Radius:** default `--radius: 0.25rem` (buttons, small UI). Cards → `--radius-xl: 0.75rem`
or `--radius-2xl: 1rem`. Large containers (booking widgets, compare tables, audience
cards, fresh-page cards) → `--radius-3xl: 1.5rem`. Pills → `--radius-full`.

**Shadow tokens** (Midnight Slate at low opacity):
| Token | Value |
|---|---|
| `--shadow-sm` | `0 1px 2px rgba(2,28,54,0.06)` |
| `--shadow` | `0 4px 14px rgba(2,28,54,0.08)` |
| `--shadow-lg` | `0 12px 32px rgba(2,28,54,0.10)` |
| `--shadow-xl` | `0 24px 60px rgba(2,28,54,0.14)` |

Cards default to a 1px `--outline-variant` border, no/`-sm` shadow. Elevated cards and
device mockups on dark use heavy shadows — `0 24px 64px rgba(0,0,0,0.5)` for product
screenshots; `drop-shadow(0 44px 64px rgba(0,0,0,0.55))` for transparent-PNG devices.

---

## Components — house catalog

These are the reusable building blocks (styles.css ~ln 758–3266). Default to these
before writing bespoke CSS.

### Buttons
All Manrope 600, `inline-flex`, `padding: 12px 24px`, `--radius-lg`. Transitions on
transform/shadow/background ~150–200ms.

| Class | Appearance | Use |
|---|---|---|
| `.btn--primary` | `--primary-container` bg, white text, `--shadow`; hover `#052849` + `--shadow-lg` | Primary on light |
| `.btn--gold` | Brass gradient bg, `#021c36` text; shadow `0 4px 14px rgba(201,150,28,0.35)` + inset light; hover → darker brass gradient | Primary on dark |
| `.btn--brass` | `--secondary-container` (`#ffd56c`) flat, dark text | Secondary on dark |
| `.btn--ghost` | Transparent + `--outline-variant` border | Low-emphasis on light |
| `.btn--ghost-on-dark` | Transparent + white/30 border | Low-emphasis on dark |
| `.btn--lg` / `.btn--xl` | Larger padding, `--radius-xl` | Hero/landmark CTAs |
| `.btn--header` | Brass gradient pill, compact; swaps short/full label 1080–1320px | Header only (in chrome.css) |

### Eyebrow rule (`.eyebrow` + `.eyebrow__text`)
A 32px brass `::before` rule followed by uppercase brass text (0.875rem, 700,
0.2em tracking). Precedes section headings. **Reserve for credibility anchors** — not
every section.

### Cards (`.card`, `.card--hover`, `.card--padded`)
`--surface-container-lowest` bg, 1px `--outline-variant` border, `--radius-xl`,
`--shadow-sm`. Hover: `translateY(-2px)`, `--shadow`, border darkens to
`rgba(2,28,54,0.18)`. `.icon-tile` — 48×48, `--radius-lg`, `--primary-container` bg.

### Hero (`.hero`)
White bg, top padding `clamp(48px, 6vw, 88px)`. `.hero__grid` 1fr 1.4fr at 960px+.
Title `clamp(2.25rem→3.5rem)/700`; brass `<em>`. `.hero__glow` radial brass at 0.18,
blur 40px. Below 540px, actions go full-width.

### Trust bar (`.trust`)
Scrolling logo marquee on `--surface-container-low`, sandwiched between 1px borders,
edge mask-fade, `trust-scroll 50s linear infinite`, pauses on hover. Logos
`clamp(32px→48px)` tall.

### Dark panel (`.panel-dark`, `.section-seam-top`)
Standard dark band gradient, white text, `--radius-3xl`, padding `clamp(40px→80px)`,
brass radial `::before`. `.section-seam-top::after` draws a 1px brass-gradient hairline
seam across the top edge.

### AI insight panel (`.ai-panel`)
`linear-gradient(135deg, #131b2e, #1e293b)`, white text, `rgba(234,194,90,0.4)` border,
`--radius-2xl`. A framed callout to break up body copy.

### AI Systems list (`.systems` / `.system`)
On a dark band. Each `.system` alternates copy + screenshot via grid (1fr 1fr at 900px+);
`.system--reverse` flips. `.system__num` 4rem in `rgba(234,194,90,0.25)`;
`.system__eyebrow` in `--brass-bright`; screenshots `--radius-3xl` + heavy shadow.

### Audience cards (`.audience-card`)
Full-bleed photo, `aspect-ratio: 16/10`, `--radius-2xl`, gradient overlay
`linear-gradient(180deg, transparent → rgba(2,14,30,0.98))`. Title Manrope 800,
1.625rem, white. 2×2 grid at 720px+.

### Results / video cards (`.video-card`)
`aspect-ratio: 16/10` media, `--radius-2xl`, 64px white circular play button (hover
scale 1.06), stat headline 1.375rem/700, italic quote, uppercase attribution. 3-col at
880px+.

### Quote marquee (`.quote-marquee` / `.quote-card`)
Horizontal scroll, `quote-scroll 60s linear infinite`, edge mask, pauses on hover. Each
card: 2-col grid, 2px brass left border, 3.5rem brass quote mark, italic quote, brass
uppercase attribution.

### Pricing (`.pricing-grid` / `.plan`)
3-col at 880px+ (1-col below). Plan: white bg, `--outline-variant` border,
`--radius-2xl`, `--shadow-sm`. `.plan--featured`: featured-plan gradient, white text,
brass-tinted border, `translateY(-12px)`, `--shadow-xl`-class shadow. Price 3rem/700.
`.plan__badge`: `--secondary-container`. `.toggle` segmented control for billing period.

### Compare table (`.compare-v2`)
2-col, `--radius-3xl`, `--shadow-lg` (1-col below 580px). Left "theirs"
`--surface-container` bg, muted checks at 0.4 opacity; right "ours" standard dark band,
white/85 text, `--brass-bright` checks. Labels 0.8125rem/700 uppercase; titles 1.5rem/800.

### Booking widget (`.booking`) + popup (`.booking-popup`)
White, `--outline-variant` border, `--radius-3xl`, `--shadow-xl`. Brass + blue radial
glows. Calendar 7-col grid, day cells `aspect-ratio: 1` circles. Popup is a `<dialog>`:
backdrop `rgba(2,28,54,0.6)` blur(4px), `--radius-3xl`, 32px circular close, `--radius-full`
time slots.

### Faculty panel (`.faculty-panel`)
Dark section, `faculty-bg.png` at ~93% navy overlay. Two-column: copy left (max 34rem),
headshot right (bleeds to bottom). Stacks below 720px.

### What's Inside V2 (`.wi2-*`) — preferred product-showcase system
- **Browser frame** (`.wi2-browser-frame`, `--dark`): macOS-dot chrome around a
  screenshot. Light bar `linear-gradient(180deg,#f4f6f8,#eceef0)`; dark bar
  `linear-gradient(180deg,#0d1c2f,#0a1628)`, shadow `0 24px 64px rgba(0,0,0,0.5)`.
- **Bento grid** (`.wi2-bento__tile`): CSS grid-areas at 1024px+; light, brass, or dark
  AI/community tiles; hover lift + brass border; 36px arrow chip top-right.
- **Tabbed AI-tools showcase** (`.wi2-tabs`): dark band; pill tabs (active =
  `rgba(234,194,90,0.12)` + brass-bright border); panels grid 1fr 1.1fr at 960px+;
  brass benefit pills.
- **Glass community card** (`.wi2-community-card`): bg-image cover, `--radius-3xl`,
  glass `.wi2-stat-chip`s (`rgba(255,255,255,0.08)` + blur 8px).
- **Social-proof band** (`.wi2-proof-card`): 4→2→1 col; brass quote-mark overlay.

### Mastermind / shared-landing system
- **AI systems carousel** (`.aisc-*`): dark band, auto-advancing slides (5s) + step
  pills with progress bar; chat-demo typing effect. Drops to single column at 860px,
  uses `container-type: inline-size` for the composite stage.
- **Takeaways** (`.takeaways`): light section, question marquee (45s) + dashed-divider
  grid (4→2→1 col). `.takeaways--dark` variant = navy gradient + gapped glass cards with
  large faded numbers and 46px brass-gradient icon circles.
- **Summit CTA** (`.mm-section`): black + photo overlay, "Antonio" display font uppercase
  red-accent title, white pill button.
- **Shared landing hero** (`.lp-intro`): white bg, centered copy with brass `<em>`,
  wide dashboard image stage + absolute phone mockup with animated chat bubbles (brass
  user gradient, glass coach bubble, typing dots 1.4s).
- **Standardized closing CTA** (`.close-section`): navy + per-page bg image fading to
  transparent, brass glows + hairline seam, two tall card-buttons (brass primary, glass
  secondary) with arrow that slides +4px on hover.

### Forms (`.form-*`)
Label 0.875rem/600. Inputs: white bg, `--outline-variant` border, `--radius-md`. Focus:
`--primary-container` border + `0 0 0 3px rgba(2,28,54,0.08)` ring. `.form-grid-2` →
2-col at 480px+.

### Footer (`chrome.css`)
`#f2f4f6` bg, 1px `#c6c6cd` top border, `padding-block: 64px`. Color-variant logo (60px)
top-left, nav links top-right. Legal links 0.75rem uppercase `#45464d`. Rows go
horizontal at 720px+.

---

## Chrome — header, nav, footer (`css/chrome.css`)

**Header:** fixed, 72px, frosted navy (`rgba(2,28,54,0.92)` + blur), 1px white/8 bottom
border. Gold-variant logo (`Loan Atlas logo-gold.png`), 28→40px responsive. Nav links
Manrope 600 0.875rem, white/78 → white, with `.nav__link--active` white underline.
`.nav__dropdown` opens on click (`data-open="true"`), chevron rotates 180°, dark menu
panel. **Nav + login appear at ≥1080px; below that the hamburger drawer (`.mobile-nav`)
takes over.** Header CTA is the brass-gradient `.btn--header` pill. `.site-header--minimal`
centers a lone logo (landing pages). All chrome values are hardcoded (token-independent).

---

## Page families

Every live page belongs to one of these. Match the family when adding pages.

1. **House style** — `index`, `pricing`, `sales-individual`, `events`, `contact`.
   Shared catalog + light/dark section rhythm; modest inline hero/layout CSS.
2. **Dark-hero / enterprise** — `faculty`, `consultation`, `consultation-corporate`,
   `consultation-mastermind`, `corporate`, `whats-inside`. Coordinated navy hero
   (standard dark band `160deg,#060e1c→#021c36→#060e1c`), brass/blue radial glows,
   right-edge image fades, large bespoke inline component suites. `whats-inside` is the
   richest.
3. **Fresh standalone landings** — `ai-originator-masterplan` (`.aimp-*`),
   `5-scripts` (`.s5-*`), `mastermind` + `platinum-marketing` (`.mm-*`/`.lp-*`). Distinct
   visual languages; see next section.
4. **Blog** — `blog`, `blog-archive`, `blog-post`. Inline styles slated to become
   `tla/css/blog.css`. Distinctive: navy masthead hero (standard dark band) with a
   right-half featured-image reveal and brass-bright breadcrumbs; two-column post
   (`minmax(0,1fr) 20rem` content+sidebar) on a white card pulled up over the hero by
   `--blog-overlap`; `.tla-article` prose with H2/H3 gold-gradient treatment; collapses
   to one column at 760px.
5. **Legal / utility** — `privacy-policy`, `terms-of-use`, `end-user-agreement`. Plain
   house style: small navy `.legal-header` + `.legal-doc` prose rhythm.

> `hero-mockup*.html` and `patterns.html` are experiments/reference, **not live**. The
> `.pl-*` pattern library is namespaced under `.patterns` and must never ship.

---

## Page section rhythm

The house pattern, to follow on new in-system pages:

1. Light section — problem/value content on `--background`
2. Dark immersive section — feature showcase or proof
3. Light section — supporting detail
4. Inline CTA band (`.inline-cta`) — conversion moment
5. Light section — social proof
6. Dark final CTA (`.close-section`) — closing conversion, full-width

Not every page needs all six, but **alternate dark/light** rather than stacking
same-tone sections. The `.inline-cta` band has a 4px brass-gradient left border; the
`.cta-bridge` is an alternate floating gold-edged card that overlaps two sections.

---

## Motion & Interaction

Three JS files, all reduced-motion-aware.

### `nav.js`
Mobile drawer (`.mobile-nav` toggles `is-open`; closes on link click + Escape).
Nav dropdowns (`.nav__dropdown[data-open]`; closes on outside click + Escape).
Also: horizontal card scrollers, a path-finder panel toggle, and the V2 tabs
(`.wi2-tabs__pill` ↔ `.wi2-tabs__panel`, `--active` classes).

### `animations.js`
- **Scroll reveal:** elements with `[data-reveal="fade|up|left|right|scale"]` get
  `is-revealed` when 15% visible (`threshold 0.15`, `rootMargin '0px 0px -8% 0px'`).
  Stagger with `data-reveal-stagger="N"` → sets `--reveal-delay` on children (80ms step,
  600ms max).
- **Hero entrance:** `body.is-loaded` triggers staged fade-up of `[data-hero-step]`
  (delays 80/220/360/500/640ms).
- **Count-up:** `[data-countup="N"]` animates on scroll (threshold 0.4), easeOutCubic,
  `data-countup-duration` default 1400ms, with `-prefix`/`-suffix`/`-commas`. Uses
  `font-variant-numeric: tabular-nums` to avoid shift.

### `ai-systems-carousel.js`
`[data-aisc]` root: auto-advances `.aisc__slide` every `data-interval` (5000ms), pauses
on hover/focus, stops when off-screen. Step pills show a 5s progress bar. Chat demo types
at 32–58ms/char, 1500ms between messages.

### Standard timings
- **150ms ease** — link/button color, border, form transitions (the default)
- **200ms ease** — transform/shadow/border on card lifts and primary hovers
- **80–120ms ease** — small nav micro-interactions
- **700–800ms cubic-bezier(0.22, 1, 0.36, 1)** — the signature reveal/entrance ease

### Marquees (all pause on hover via `animation-play-state: paused`)
`trust-scroll 50s` · `quote-scroll 60s` · `takeaways-marquee-x` (default 45s).

### Reduced motion
`@media (prefers-reduced-motion: reduce)` is honored everywhere: marquees stop, reveals
force `opacity:1; transform:none`, count-ups jump to final value, the Masterplan timeline
fill / chart bars / carousel typing all disable. **Any new motion must add a
reduced-motion fallback.**

---

## Fresh page designs (emulating an external reference)

Most pages follow the house system above. But sometimes the brief is **"make this page
look like `<external site>`"** — a standout landing page that adopts a *different* visual
language. When that is the explicit ask, these rules **override** "Page section rhythm,"
the component catalog, and house layout conventions for that page only.

**Canonical example — AI Originator Masterplan (`.aimp-*`):** a page-scoped fresh design
living in `styles.css`. It defines its own local tokens (`--aimp-navy-top: #0d1d2c`,
`--aimp-blue: #41b7f9`, glass `--aimp-card`, etc.) and a **signature blue→white text
gradient** for accent words — `linear-gradient(100deg, #41b7f9 0%, #7fc4ff 32%, #ffffff
55%, #63a3f9 100%)` — instead of the house brass gradient. It has its own hero device
stage, animated vertical timeline (blue→brass rail fill), animated SVG closings chart,
lead-capture `<dialog>`, and before→after shift list. It does **not** reuse `.eyebrow`,
`.systems`, `.compare-v2`, etc. `5-scripts` (`.s5-*`) and `mastermind`/`platinum-marketing`
(`.mm-*`/`.lp-*`) are the same idea in their own languages.

**What stays sacred (the ONLY things that carry over):**
- **Colors** — the brand palette (Midnight Slate `#021c36`, Brass `#c9961c`/`#eac25a`,
  the brass gradient, surface/text tokens). Map the reference's *roles* onto our colors.
  *(The Masterplan is a deliberate exception: it introduces a page-local blue accent
  because its source guide cover is electric blue. Brass still appears as the CTA/secondary
  accent. Page-local accent tokens are acceptable for a fresh page when justified by the
  reference — but the navy base, fonts, and logo never change.)*
- **Fonts** — Manrope (display) + Inter (body). No new families.
- **Logo** — the Loan Atlas mark.

**What must be rebuilt from the reference (do NOT carry over):**
- The **entire stylesheet** for that page. Author a new page-scoped `<style>` block or
  new namespaced classes (`.aimp-`, `.s5-`, `.mm-`, …) from the reference's conventions.
  Do not reuse house component classes. Reskinning an existing component is the failure
  mode — if a section looks structurally like our other pages, it is wrong.
- **Layout, spacing rhythm, section types, card shapes, image treatments, motion** —
  replicate the reference's actual patterns (cropping/rounding/overlap of imagery, stat
  displays, carousels, calculators, phone mockups, FAQ treatment, whitespace cadence,
  button shape).

**Process (required before writing CSS):**
1. **Study the real reference, not memory.** Fetch the live site (WebFetch for structure;
   `curl` the HTML to sample its radius scale, type scale, spacing, signature components).
2. Map the reference's color *roles* onto our palette (introduce a justified page-local
   accent token only if the reference's identity demands it).
3. Build a new stylesheet section-by-section. Default to "their style, our narrative" —
   their visual language, our copy/sections — unless told to mirror structure 1:1.
4. Verify visually (build → preview → screenshot desktop/tablet/mobile) and ask: *does
   this look like the reference, or still like our other pages?* If the latter, not done.

**Recurring expectation:** "emulate `<X>`" means a fresh design language, keeping only
colors + fonts + logo — not house components reskinned.
