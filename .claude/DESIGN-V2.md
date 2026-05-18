# The Loan Atlas — Design System V2 (Mighty Networks replica)

A direct visual replica of [mightynetworks.com](https://www.mightynetworks.com/) — same section types, same component patterns, same page structure. The Loan Atlas color palette (navy + gold) is the only thing carried over from V1. All other tokens, components, content, and imagery are new.

Reference captures live in `reference/mn-*/` (full-page screenshot, fold screenshot, DOM skeleton, computed styles).

This document is the source of truth. Tokens here must match `styles-v2.css` exactly.

---

## Constraints

- **Colors:** navy (`#021c36`) and gold (`#c9961c` / `#eac25a`) only, on white and cool light-gray backgrounds. No green, no cream, no lavender, no other accents. Where MN uses mint green, we use gold.
- **Typography:** Poppins only (Google Fonts, weights 400/500/600/700). No Manrope, no Inter, no serif.
- **Content:** Placeholder copy is fine. Imagery is placeholder gray boxes / color blocks until real photos/screenshots are sourced.
- **Layout fidelity:** Section order, component types, and page rhythm must mirror MN. If MN has a centered hero with an arch collage and an overlaid pill email form, we have the same — not a re-skin of V1 with similar tokens.

---

## Page structure (locked, mirrors MN)

1. **Header** — wordmark left, 4 nav links, "Log In" link + brass pill "Start Your Free Trial" right
2. **Hero** — centered headline + subhead → 5-arch collage → pill email form overlaid in center of arches → small disclaimer below
3. **Stat row** — 4 stats, gold numerals, dark labels, top + bottom hairline rules
4. **Feature: hosts/operators** — text left + phone mockup right
5. **Feature: earnings** — centered intro + wide screen mockup
6. **Feature: membership ($497)** — checklist left + screen mockup right (reverse)
7. **Feature: why it works** — checklist + media (alternating)
8. **Feature: native mobile apps** — checklist left + phone mockup right (reverse)
9. **Plans** — 3-card grid, middle card featured (dark fill, brass badge, brass CTA)
10. **FAQ** — accordion, max 760px, divider lines between
11. **Final CTA** — dark navy band, centered headline (brass accent on key phrase), email pill form
12. **Footer** — wordmark, nav links, copyright bar

---

## Color tokens

```css
/* Backgrounds */
--color-bg:           #ffffff;   /* primary */
--color-bg-alt:       #f7f9fb;   /* alternate light section */
--color-bg-subtle:    #f2f4f6;   /* media placeholder backgrounds */
--color-bg-muted:     #eceef0;

/* Dark accent surfaces (sparing use — final CTA, featured plan) */
--color-dark:         #021c36;
--color-dark-2:       #0a1628;

/* Ink */
--color-ink:          #021c36;
--color-ink-body:     #45464d;
--color-ink-muted:    #76777d;
--color-on-dark:      #ffffff;
--color-on-dark-muted: rgba(255, 255, 255, 0.72);

/* Lines */
--color-line:         #e6e8ea;
--color-line-soft:    #eceef0;

/* Gold (brass) */
--color-brass:        #c9961c;
--color-brass-bright: #eac25a;
--color-brass-deep:   #765b00;
```

---

## Typography

**Poppins only**, weights 400/500/600/700.

| Use | Size | Weight | Tracking | Line |
|-----|------|--------|----------|------|
| Hero headline | clamp(2.5rem, 1.5rem + 4.5vw, 4.5rem) | 600 | -0.025em | 1.05 |
| Feature title | clamp(1.75rem, 1.2rem + 2vw, 2.75rem) | 600 | -0.02em | 1.1 |
| Section intro title | clamp(2rem, 1.4rem + 2.4vw, 3rem) | 600 | -0.025em | 1.1 |
| Final CTA title | clamp(2.25rem, 1.5rem + 3vw, 3.5rem) | 600 | -0.025em | 1.1 |
| Lead / subhead | 1.0625rem | 400 | 0 | 1.6 |
| Body | 1rem | 400 | 0 | 1.55 |
| Eyebrow | 0.8125rem | 600 | 0.14em uppercase | 1.2 |
| Plan price | 3rem | 600 | -0.02em | 1 |
| Stat value | clamp(2rem, 1.5rem + 1.8vw, 2.75rem) | 600 | -0.02em | 1 |

---

## Components

### Arch collage (hero)
5 vertical "tombstone"-shape blocks in a centered row, gap 16px, max-width 240px each, aspect-ratio 5/7. Background is alternating navy gradient / brass gradient placeholders (will become photos). Top corners fully rounded (`border-top-left-radius: 9999px; border-top-right-radius: 9999px`).

### Pill email form
Rounded-pill container (radius 999px), white at 94% with 10px blur backdrop, soft xl shadow. Input on the left (no border, transparent), brass pill button on the right. On mobile collapses to a stacked card with rounded-lg radius.

### Stat row
4-column grid, gold value (clamp 32–44px) over a 1-line dark label. Top and bottom hairline rules using `--color-line-soft`.

### Feature row
50/50 grid, generous gap (`var(--space-9)`), alternates orientation via `.feature--reverse`. Copy column: eyebrow → title → lead → checklist → CTA. Media column: `media-frame` (4/3), `media-frame--screen` (16/10), or `media-frame--phone` (9/16 with navy bezel + notch).

### Plans
3-column grid. Middle card uses `.plan--featured` (navy fill, brass badge floating above the top edge, brass CTA, gold-bright accent text). Side cards are white with `--color-line` border and ghost CTA. Checklist items use brass circle checkmarks.

### FAQ
`<details>` accordion, max-width 760px centered. Each item has a hairline bottom border. Caret rotates 180° on `[open]`. No card chrome — flat list.

### Final CTA (dark)
Full-width navy section, centered headline with brass accent on the verb/object, lead paragraph muted-white, transparent-frame pill email form with brass submit button.

---

## Placeholder strategy

Until real assets are sourced:
- **Media frames** render as light-gray rectangles with the label `App preview`, `Earnings calculator preview`, etc. (uppercase, tracked, muted ink color).
- **Phone mockups** are CSS-only: navy bezel + black notch + navy gradient screen + brass label inside.
- **Arch collage** uses 5 CSS gradient placeholders alternating navy / brass / navy / brass / navy.

When real imagery arrives, replace by swapping `background` property on `.arch--N` or by adding `<img>` to `.media-frame`.

---

## What's explicitly retired from V1 and earlier V2

- All section types from the original site (problem/reality, AI-systems-as-articles, audience cards, testimonials marquee, gallery cards) — replaced with the MN section set above.
- Manrope and Inter type families.
- Brass-gradient headline text fills.
- Alternating light/dark section rhythm — V2 is light-dominant with dark used only for the final CTA and the featured plan card.
- 700/800 headline weights (Poppins headlines are 600).
- Square / 0.25rem default border-radius.
- Hero with single inline image (replaced by arch collage + overlaid form).
