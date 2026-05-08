---
name: Human-Centric Mortgage AI
colors:
  surface: '#f7f9fb'
  surface-dim: '#d8dadc'
  surface-bright: '#f7f9fb'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f4f6'
  surface-container: '#eceef0'
  surface-container-high: '#e6e8ea'
  surface-container-highest: '#e0e3e5'
  on-surface: '#191c1e'
  on-surface-variant: '#45464d'
  inverse-surface: '#2d3133'
  inverse-on-surface: '#eff1f3'
  outline: '#76777d'
  outline-variant: '#c6c6cd'
  surface-tint: '#4a607c'
  primary: '#000000'
  on-primary: '#ffffff'
  primary-container: '#021c36'
  on-primary-container: '#6f85a4'
  inverse-primary: '#b1c8e9'
  secondary: '#765b00'
  on-secondary: '#ffffff'
  secondary-container: '#ffd56c'
  on-secondary-container: '#775b00'
  tertiary: '#000000'
  on-tertiary: '#ffffff'
  tertiary-container: '#0d1c2f'
  on-tertiary-container: '#76859b'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d2e4ff'
  primary-fixed-dim: '#b1c8e9'
  on-primary-fixed: '#021c36'
  on-primary-fixed-variant: '#324864'
  secondary-fixed: '#ffdf94'
  secondary-fixed-dim: '#eac25a'
  on-secondary-fixed: '#251a00'
  on-secondary-fixed-variant: '#594400'
  tertiary-fixed: '#d5e3fd'
  tertiary-fixed-dim: '#b9c7e0'
  on-tertiary-fixed: '#0d1c2f'
  on-tertiary-fixed-variant: '#3a485c'
  background: '#f7f9fb'
  on-background: '#191c1e'
  surface-variant: '#e0e3e5'
typography:
  display-xl:
    fontFamily: Manrope
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Manrope
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Manrope
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 20px
    letterSpacing: 0.01em
  caption:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '400'
    lineHeight: 16px
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
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

The core philosophy of this design system is to bridge the gap between complex financial technology and the deeply personal journey of home ownership. It targets high-intent borrowers and financial professionals who value precision, reliability, and a premium experience. The visual language balances institutional trust with a modern, high-touch feel.

The chosen style is **Modern Corporate with Minimalist leanings**. It utilizes expansive white space to reduce cognitive load during complex mortgage applications, while integrating high-fidelity photography of domestic life to ground the technology in human reality. The interface avoids cold, clinical aesthetics in favor of a sophisticated "private banking" digital environment that feels curated, secure, and forward-thinking.

## Colors

The palette is anchored by **Midnight Slate** and **Charcoal**, chosen to evoke the stability and authority of established financial institutions while maintaining a modern edge. To differentiate from traditional banks, a **Vibrant Brass** is used as a premium accent to highlight success states, primary actions, and "AI-powered" insights.

- **Primary (Midnight Slate):** Used for sidebars, primary navigation, and dominant headings to establish a foundation of trust and technical precision.
- **Secondary (Vibrant Brass):** Reserved for high-value interactions, premium features, and subtle brand flourishes that signify growth and success.
- **Neutrals:** A range of soft, cool grays and off-whites are used for surface layering to keep the interface feeling airy and modern.
- **Backgrounds:** Primarily off-white to reduce eye strain, with charcoal used for high-contrast footers or specialized dark-mode dashboards.

## Typography

This design system utilizes a dual-font strategy to balance character with utility. **Manrope** is used for headlines to provide a modern, geometric, and sophisticated tone. Its wide apertures and balanced proportions feel welcoming yet professional.

**Inter** is employed for all body copy and UI labels. Chosen for its exceptional legibility in data-heavy environments, Inter ensures that complex mortgage terms and financial figures are easily digestible. 

Typographic hierarchy is maintained through generous line heights and subtle weight variations rather than excessive color changes. High-level display text uses tighter letter spacing for a more editorial, "premium" feel.

## Layout & Spacing

The layout philosophy follows a **Fixed-Fluid Hybrid Grid**. Main content areas are contained within a 1280px max-width container to ensure readability on large monitors, while internal dashboard elements utilize a flexible 12-column system.

The spacing rhythm is based on an **8px linear scale**, favoring generous margins (MD and LG) to create a sense of "calm" in the interface. Information density is kept medium-low in the consumer-facing application flow to prevent overwhelm, while the professional "broker dashboard" may utilize tighter (SM) spacing for data efficiency.

## Elevation & Depth

This design system uses **Tonal Layering** combined with **Ambient Shadows** to create a sophisticated sense of hierarchy. Surfaces are layered based on their importance:

1.  **Background (Level 0):** Soft neutral (`#F8FAFC`), flat.
2.  **Card/Surface (Level 1):** Pure white with a 1px soft border in a light charcoal tint. No shadow.
3.  **Interactive/Floating (Level 2):** White background with a diffused, low-opacity navy shadow (approx. 10% opacity) to suggest elevation without feeling heavy.
4.  **Modals/Overlays (Level 3):** High elevation with a larger shadow blur and a subtle backdrop blur (glassmorphism) to keep the user grounded in their previous context.

This approach ensures that the most important information—such as the "Approved" loan status or the "Next Steps" action—physically stands out from the page.

## Shapes

The shape language is **Soft (0.25rem)**. This slight rounding of corners strikes a balance between the precision of the financial industry (sharp) and the approachability of a human-centric service (rounded).

Buttons and primary input fields utilize the base `0.25rem` radius. Larger containers, such as mortgage offer cards or imagery frames, utilize `0.5rem` (`rounded-lg`) to feel more approachable. Icons should follow this logic, using 1.5pt or 2pt strokes with slightly rounded caps and joins to match the UI components.

## Components

### Buttons
Primary buttons use the Midnight Slate background with white text. For "Special" or AI-assisted actions, a brass-bordered button with a subtle brass glow effect is used. Secondary buttons utilize a ghost style with a thin charcoal border.

### Cards
Cards are the primary container for mortgage options. They should feature a clean 1px border and ample internal padding (24px). Headers within cards should use the Brass accent for key figures (e.g., Interest Rates).

### Input Fields
Inputs are minimalist, using a bottom-border-only or a very light 4-sided border. Upon focus, the border transitions to Midnight Slate with a soft Brass glow to signal "Human-AI attention."

### Chips & Status Indicators
Used for "Loan Progress" or "Document Verified" states. These should be semi-transparent versions of the status colors (e.g., soft green background with dark green text) to maintain the sophisticated, low-vibrancy aesthetic.

### AI-Insight Panels
A custom component unique to this design system. These panels use a very subtle gradient of Midnight Slate to Charcoal with Brass iconography to signal that the information provided is an AI-generated mortgage recommendation or financial optimization tip.