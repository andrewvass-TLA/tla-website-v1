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
  # CSS class → t-caption / t-eyebrow
  caption:
    fontFamily: Inter
    fontSize: 0.75rem
    fontWeight: '400'
    lineHeight: 1.25
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

## Brand & Style

The Loan Atlas is a mortgage coaching and AI business system. The visual language must communicate authority, precision, and premium access — like a private coaching firm, not a software product. Every page targets working mortgage professionals who are skeptical of hype and respond to systems, proof, and specificity.

The homepage established the design direction: an alternating rhythm of light content sections and immersive dark sections, with brass accents used selectively for moments of high value or AI identity. Pages should feel editorial and calm, never cluttered.

---

## Colors

### Light sections
Content sections default to `--background: #f7f9fb`. Cards and containers use the surface scale (`--surface-container-lowest: #fff` through `--surface-container: #eceef0`).

Body text: `--on-surface: #191c1e`. Muted/secondary text: `--on-surface-variant: #45464d`. Use the `.t-muted` class.

### Dark sections
Three dark gradient patterns are in use:

| Context | Value |
|---|---|
| Standard dark panel (`.panel-dark`, inline CTA) | `linear-gradient(135deg, #0a1628 0%, #131b2e 50%, #1e293b 100%)` |
| Full-width CTA sections | `linear-gradient(160deg, #021c36 0%, #0a1628 50%, #131b2e 100%)` |
| Header (frosted) | `rgba(2, 28, 54, 0.92)` + `backdrop-filter: saturate(180%) blur(12px)` |

Text on dark backgrounds: headlines `#ffffff`, body `rgba(255,255,255,0.78)`, muted `rgba(255,255,255,0.65)`.

Decorative radial glows on dark sections use `rgba(234, 194, 90, 0.09)` (brass) and `rgba(178, 200, 233, 0.07)` (blue), blurred ~70px, positioned near edges.

### Brass / Gold
Brass is the premium accent. Two solid tokens and one gradient:

- `--brass: #c9961c` — icons, eyebrow rules, quote marks, left border accents
- `--brass-bright: #eac25a` — system eyebrows on dark backgrounds
- **Brass gradient** (buttons, heading highlights): `linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%)`

Use `.text-brass` for inline brass text. Use the brass gradient on `<em>` inside headings (`background-clip: text; color: transparent`).

---

## Typography

Both fonts are loaded from Google Fonts CDN: **Manrope** (weights 500–800) and **Inter** (weights 400–700).

### CSS utility classes
| Class | Specs |
|---|---|
| `.t-display` | Manrope, clamp(2.25rem→3rem), 700, ls -0.02em |
| `.t-headline-lg` | Manrope, clamp(1.625rem→2rem), 600, ls -0.01em |
| `.t-headline-md` | Manrope, 1.5rem / 2rem, 600 |
| `.t-body-lg` | Inter, 1.125rem, 400, lh 1.55 |
| `.t-body` | Inter, 1rem, 400, lh 1.5 |
| `.t-label` | Inter, 0.875rem, 500, ls 0.01em |
| `.t-caption` | Inter, 0.75rem, 400 |
| `.t-eyebrow` | Inter, 0.75rem, 600, ls 0.18em, uppercase, color `var(--brass)` |
| `.t-muted` | Sets `color: var(--on-surface-variant)` |
| `.text-brass` | Sets `color: var(--brass)` |

Hero titles and final CTA headings use direct styles with `clamp(2.25rem, 1.6rem + 2.6vw, 3.5rem)` and weight 700–800 — go slightly larger and bolder than `.t-display` for these landmark moments.

---

## Layout & Spacing

1280px container, 24px gutter. All pages use `.container` for horizontal padding. Section vertical rhythm: `padding-block: clamp(48px, 6vw, 96px)` via the `.section` class.

CSS variables: `--space-xs: 8px` · `--space-sm: 16px` · `--space-md: 24px` · `--space-lg: 40px` · `--space-xl: 64px`

Layout primitives in styles.css: `.grid` (CSS grid, gap md), `.stack` (column flex, gap md), `.stack-sm` (gap sm), `.row` (row flex wrap, gap sm), `.center` (text-align center), `.grid-2` (two-column grid).

---

## Elevation & Depth

Shadow tokens use Midnight Slate at low opacity:

| Token | Value |
|---|---|
| `--shadow-sm` | `0 1px 2px rgba(2,28,54,0.06)` |
| `--shadow` | `0 4px 14px rgba(2,28,54,0.08)` |
| `--shadow-lg` | `0 12px 32px rgba(2,28,54,0.10)` |
| `--shadow-xl` | `0 24px 60px rgba(2,28,54,0.14)` |

Cards: 1px border (`--outline-variant`), no shadow (`--shadow-sm` on cards with more presence). Dark overlays and modals: `--shadow-xl`. System screenshots on dark: heavy shadow `0 24px 64px rgba(0,0,0,0.5)`.

---

## Shape

Default: `--radius: 0.25rem` (buttons, small UI). Cards: `--radius-xl: 0.75rem` or `--radius-2xl: 1rem`. Large containers, booking widgets, compare tables: `--radius-3xl: 1.5rem`. Image cards and audience cards: `--radius-2xl`. Audience cards and system visuals use `border-radius: var(--radius-3xl)`.

---

## Components

### Header
Fixed, 72px height (`--header-h`). Background: frosted dark (`rgba(2,28,54,0.92)` + blur). Logo: gold variant (`Loan Atlas logo-gold.png`). Nav links: Manrope 600, 0.875rem, white/78 → white on hover. Header CTA: gold gradient button (`.btn--primary.btn--header` overrides to gold). Mobile breakpoint: 880px — hamburger toggle shows below, nav links + login hide.

### Buttons
Five variants, all Manrope 600, `--radius-lg` default, `--radius-xl` for `.btn--lg`:

| Class | Appearance | Use |
|---|---|---|
| `.btn--primary` | Midnight Slate bg, white text | Primary actions on light sections |
| `.btn--gold` | Brass gradient bg, dark navy text | Primary actions on dark sections |
| `.btn--brass` | `#ffd56c` flat bg, dark text | Secondary actions on dark sections |
| `.btn--ghost` | Transparent + `outline-variant` border | Low-emphasis on light |
| `.btn--ghost-on-dark` | Transparent + white/30 border | Low-emphasis on dark |

### Eyebrow
`.eyebrow` + `.eyebrow__text` — a 32px brass rule line followed by uppercase brass text (0.75rem, 600, 0.2em letter-spacing). Used before section headings. Do not use on every section — reserve for credibility anchors.

### Trust Bar
Scrolling logo marquee on `--surface-container-low` background, sandwiched between 1px borders. Mask fades at edges. Pauses on hover. Label: 0.75rem uppercase, centered, `--outline` color.

### AI Insight Panel (`.ai-panel`)
A framed callout used to break up body copy. Styled with the dark gradient background and brass quote marks or text. Used on homepage between the problem/solution section and compare table.

### Compare Table (`.compare`)
Two-column split on `--surface-container` background, `--radius-3xl` corners. Left column = "What You've Been Told" in `--on-surface-variant`; right column = "What Actually Works" in `--primary-container` / weight 500. Header row labels: error color (left), primary-container (right).

### AI Systems List (`.systems`)
On a dark gradient section. Each `.system` alternates copy + screenshot using CSS grid (1fr 1fr at 900px+). `.system--reverse` moves the visual to the left. Eyebrows use `.system__eyebrow` in `--brass-bright`. Screenshots use `--radius-3xl` with heavy drop shadow.

### Inline CTA Band (`.inline-cta`)
Dark gradient background. 4px brass gradient left border (`::before`). Horizontal flex: copy left, button right. Stacks to column on mobile. Used between gallery and testimonials.

### Gallery Cards (`.gallery-card`)
Image-first cards with a bottom gradient overlay for text legibility. Arrow icon in `--brass` appears at bottom right. Cards are anchor tags linking to detail pages. Used in a 3-column grid on desktop.

### Faculty Panel (`.faculty-panel`)
Dark section with `faculty-bg.png` overlaid at ~93% dark. Two-column: text content left (max 36rem), headshot photo right (bleeds to bottom of section). Eyebrow + headline + body + gold CTA.

### Audience Cards (`.audience-card`)
Full-bleed photography with a `linear-gradient(180deg, transparent → rgba(2,18,38,0.98))` overlay. 2×2 grid on desktop. Title: Manrope 800, 1.625rem. Aspect ratio 16/10.

### Video Cards (`.video-card`) + Quote Marquee (`.quote-marquee`)
Video cards: 16/10 iframe embed with `--radius-2xl` corners, stat headline, italic quote, uppercase attribution. Quote marquee: horizontal scroll, 60s loop, pauses on hover, brass left border on each `.quote-card`.

### Final CTA Section
Full-width dark section with decorative radial glows (brass top-right, blue bottom-left). Logo centered above headline. Headline: Manrope 800, clamp(2.25rem→4rem), white + brass gradient text. Body: white/65. Gold gradient primary CTA button + underlined secondary link below. Closing testimonial with quote marks, italic blockquote, brass rule-line attribution.

### Footer
`--surface-container-low` background, top border in `--outline-variant`. Logo (color variant) top-left, nav links top-right. Copyright + legal links in 0.75rem uppercase `--on-surface-variant`.

---

## Page Section Rhythm

The homepage establishes a pattern to follow on new pages:

1. **Light section** — problem/value content on `--background`
2. **Dark immersive section** — feature showcase or proof on dark gradient
3. **Light section** — supporting content or details
4. **Inline CTA band** — conversion moment
5. **Light section** — social proof or additional content
6. **Dark final CTA** — closing conversion, full-width

Not every page needs all six beats, but alternate dark/light rather than stacking same-tone sections.
