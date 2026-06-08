<?php
/**
 * Body partial for /join-mastermind-2026/ (TLA Full HTML template).
 * Generated from public/mastermind.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Mastermind Summit 2026 — Exclusive Loan Atlas Offer';
$tla_description = 'An offer exclusively for Mastermind Summit 2026 attendees: get full access to The Loan Atlas for $49 your first month, then $249/mo locked in — over $2,600 in savings.';
$tla_active      = '';
?>
  <style>
    /* ── MASTERMIND-SPECIFIC STYLES (page-scoped) ───────────────────────────── */

    /* ── Sticky offer bar — pinned under the header ─────────────────────────── */
    .mm-bar {
      position: sticky;
      top: var(--header-h);
      z-index: 40;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      color: #021c36;
      box-shadow: 0 6px 20px rgba(2, 28, 54, 0.18);
    }
    .mm-bar__inner {
      max-width: var(--container-max);
      margin-inline: auto;
      padding: 10px var(--gutter);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 8px 16px;
      text-align: center;
    }
    .mm-bar__text {
      font-family: var(--font-body);
      font-size: 0.875rem;
      font-weight: 700;
      letter-spacing: 0.01em;
      line-height: 1.3;
    }
    .mm-bar__text strong { font-weight: 800; }
    .mm-bar__sep {
      opacity: 0.5;
      padding-inline: 4px;
    }
    .mm-bar__btn {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #021c36;
      color: #ffffff;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      padding: 8px 18px;
      border-radius: var(--radius-full);
      transition: transform 150ms ease, box-shadow 150ms ease;
    }
    .mm-bar__btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 20px rgba(2, 28, 54, 0.3);
    }
    @media (max-width: 600px) {
      .mm-bar__hide-sm { display: none; }
    }

    /* ── Hero (reuses lp-intro; tightened for offer focus) ──────────────────── */
    /* Hero co-brand lockup — Loan Atlas mark × full-color Mastermind logo */
    .mm-hero-lockup {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: clamp(16px, 2.5vw, 28px);
      margin: 0 auto var(--space-lg);
      padding: clamp(12px, 1.8vw, 18px) clamp(20px, 3vw, 32px);
      background: #ffffff;
      border: 1px solid rgba(201, 150, 28, 0.35);
      border-radius: var(--radius-full);
      box-shadow:
        0 18px 44px rgba(2, 28, 54, 0.16),
        0 0 0 4px rgba(234, 194, 90, 0.1);
    }
    .mm-hero-lockup__atlas {
      height: clamp(40px, 6vw, 64px);
      width: auto;
      display: block;
    }
    .mm-hero-lockup__mm {
      height: clamp(34px, 5vw, 54px);
      width: auto;
      display: block;
    }
    .mm-hero-lockup__x {
      font-family: var(--font-display);
      font-weight: 400;
      font-size: clamp(1.25rem, 1rem + 1vw, 1.75rem);
      color: var(--brass);
      line-height: 1;
    }
    /* This headline is longer than the default lp-intro title, so scale it down
       on narrow screens to prevent the long words from overflowing the gutter. */
    @media (max-width: 600px) {
      .lp-intro__title {
        font-size: clamp(1.625rem, 0.9rem + 3.2vw, 2.25rem);
        overflow-wrap: break-word;
      }
    }

    /* ── Offer highlight card (the flyer centerpiece) ───────────────────────── */
    .mm-offer {
      background-image: url('<?php echo TLA_BASE; ?>/assets/bellagio.png');
      background-size: cover;
      background-position: center;
      padding-block: clamp(48px, 6vw, 88px);
      position: relative;
      overflow: hidden;
    }
    /* Navy gradient overlay over the bellagio photo */
    .mm-offer::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(160deg, rgba(6, 14, 28, 0.92) 0%, rgba(2, 28, 54, 0.88) 50%, rgba(6, 14, 28, 0.94) 100%);
      pointer-events: none;
      z-index: 0;
    }
    .mm-offer > .container { position: relative; z-index: 1; }
    .mm-offer__card {
      max-width: 64rem;
      margin-inline: auto;
      background: linear-gradient(135deg, #0a1628 0%, #021c36 55%, #0a223d 100%);
      border-radius: var(--radius-3xl);
      border: 1px solid rgba(234, 194, 90, 0.4);
      box-shadow:
        0 40px 90px rgba(2, 28, 54, 0.45),
        0 0 60px rgba(234, 194, 90, 0.14),
        inset 0 0 0 1px rgba(234, 194, 90, 0.12);
      padding: clamp(28px, 4vw, 56px);
      position: relative;
      overflow: hidden;
      text-align: center;
    }
    .mm-offer__card::before {
      content: '';
      position: absolute;
      top: -120px;
      right: -120px;
      width: 360px;
      height: 360px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.2), transparent);
      filter: blur(50px);
      pointer-events: none;
    }
    /* Lockup + Platinum Super Bonus title inside the offer card */
    .mm-offer__card .mm-plan__lockup {
      position: relative;
      z-index: 1;
    }
    .mm-offer__hero-title {
      position: relative;
      z-index: 1;
      margin-bottom: var(--space-md);
    }
    .mm-offer__regular {
      position: relative;
      z-index: 1;
      font-family: var(--font-body);
      font-size: 0.9375rem;
      color: rgba(255, 255, 255, 0.7);
      margin: 0 0 var(--space-lg);
      line-height: 1.6;
    }
    .mm-offer__regular b {
      color: rgba(255, 255, 255, 0.9);
      font-weight: 600;
    }
    .mm-offer__strike {
      position: relative;
      white-space: nowrap;
    }
    .mm-offer__strike::after {
      content: '';
      position: absolute;
      left: -2px;
      right: -2px;
      top: 50%;
      height: 2px;
      background: var(--brass-bright);
      transform: rotate(-6deg);
    }

    /* Two-step deal blocks */
    .mm-offer__steps {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-md);
      align-items: stretch;
      max-width: 40rem;
      margin: 0 auto var(--space-lg);
    }
    @media (min-width: 560px) {
      .mm-offer__steps {
        grid-template-columns: 1fr auto 1fr;
        align-items: center;
        gap: var(--space-sm);
      }
    }
    .mm-step {
      border-radius: var(--radius-2xl);
      padding: clamp(20px, 3vw, 32px) var(--space-md);
    }
    .mm-step--first {
      background: rgba(234, 194, 90, 0.1);
      border: 1px solid rgba(234, 194, 90, 0.45);
    }
    .mm-step--rest {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.14);
    }
    .mm-step__label {
      display: block;
      font-family: var(--font-body);
      font-size: 0.6875rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--brass-bright);
      margin-bottom: 6px;
    }
    .mm-step__price {
      display: block;
      font-family: var(--font-display);
      font-weight: 800;
      line-height: 0.95;
      letter-spacing: -0.03em;
      color: #ffffff;
    }
    .mm-step--first .mm-step__price {
      font-size: clamp(3.25rem, 2rem + 6vw, 5rem);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-step--rest .mm-step__price {
      font-size: clamp(2.75rem, 1.5rem + 5vw, 4.25rem);
    }
    .mm-step__sub {
      display: block;
      margin-top: 8px;
      font-family: var(--font-body);
      font-size: 0.875rem;
      font-weight: 500;
      color: rgba(255, 255, 255, 0.72);
      line-height: 1.4;
    }
    .mm-step__sub strong { color: #ffffff; font-weight: 700; }
    .mm-offer__arrow {
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--brass-bright);
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 0.8125rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
    }
    .mm-offer__arrow svg { width: 28px; height: 28px; }
    @media (max-width: 559px) {
      .mm-offer__arrow { transform: rotate(90deg); padding-block: 4px; }
    }

    /* Savings banner */
    .mm-offer__savings {
      position: relative;
      z-index: 1;
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.5rem, 1.1rem + 1.6vw, 2.25rem);
      letter-spacing: -0.01em;
      line-height: 1.2;
      color: #ffffff;
      margin: 0 0 var(--space-sm);
    }
    .mm-offer__savings em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-offer__pill {
      position: relative;
      z-index: 1;
      display: inline-block;
      font-family: var(--font-body);
      font-size: 0.875rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--brass-bright);
      background: rgba(234, 194, 90, 0.14);
      border: 1px solid rgba(234, 194, 90, 0.32);
      border-radius: var(--radius-full);
      padding: 8px 20px;
      margin-bottom: var(--space-lg);
    }
    .mm-offer__cta {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-sm);
    }
    .mm-offer__fine {
      position: relative;
      z-index: 1;
      font-size: 0.8125rem;
      color: rgba(255, 255, 255, 0.55);
      margin: var(--space-md) 0 0;
      line-height: 1.5;
    }

    /* ── Bridge (visual + copy split) ───────────────────────────────────────── */
    .lp-bridge {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 88px);
      border-bottom: 1px solid var(--outline-variant);
    }
    .lp-bridge__split {
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(32px, 4vw, 64px);
      align-items: center;
    }
    @media (min-width: 860px) {
      .lp-bridge__split {
        grid-template-columns: minmax(0, 5fr) minmax(0, 6fr);
      }
    }
    .lp-bridge__inner {
      max-width: 40rem;
    }

    /* Volume-up / hours-down chart */
    .bridge-chart {
      background: linear-gradient(160deg, #ffffff 0%, var(--surface-container-low) 100%);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-3xl);
      box-shadow: var(--shadow-lg);
      padding: clamp(20px, 2.5vw, 32px);
    }
    .bridge-chart__legend {
      display: flex;
      flex-wrap: wrap;
      gap: var(--space-sm) var(--space-lg);
      margin-bottom: var(--space-md);
    }
    .bridge-chart__legend-item {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }
    .bridge-chart__legend-item--up { color: var(--brass); }
    .bridge-chart__legend-item--down { color: var(--on-surface-variant); }
    .bridge-chart__legend-item svg { width: 16px; height: 16px; }
    .bridge-chart__dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      flex-shrink: 0;
    }
    .bridge-chart__dot--up { background: linear-gradient(135deg, #c9961c, #eac25a); }
    .bridge-chart__dot--down { background: var(--on-surface-variant); }
    .bridge-chart__svg {
      display: block;
      width: 100%;
      height: auto;
      aspect-ratio: 400 / 230;
    }
    .bridge-chart__grid line {
      stroke: var(--outline-variant);
      stroke-width: 1;
    }
    .bridge-chart__line {
      fill: none;
      stroke-width: 4;
      stroke-linecap: round;
      stroke-linejoin: round;
    }
    .bridge-chart__line--up { stroke: #c9961c; }
    .bridge-chart__line--down {
      stroke: #94a3b8;
      stroke-dasharray: 6 7;
    }
    .bridge-chart__axis {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
      font-family: var(--font-body);
      font-size: 0.6875rem;
      font-weight: 600;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--on-surface-variant);
    }
    /* Draw-on reveal: the solid volume line draws in, the area + dotted hours
       line fade in, when the section scrolls into view. */
    .bridge-chart__area {
      opacity: 0;
      transition: opacity 800ms ease 600ms;
    }
    .bridge-chart__line--up {
      stroke-dasharray: 640;
      stroke-dashoffset: 640;
      transition: stroke-dashoffset 1500ms cubic-bezier(0.22, 1, 0.36, 1) 200ms;
    }
    .bridge-chart__line--down {
      opacity: 0;
      transition: opacity 900ms ease 400ms;
    }
    .bridge-chart.is-revealed .bridge-chart__line--up { stroke-dashoffset: 0; }
    .bridge-chart.is-revealed .bridge-chart__line--down { opacity: 1; }
    .bridge-chart.is-revealed .bridge-chart__area { opacity: 1; }
    @media (prefers-reduced-motion: reduce) {
      .bridge-chart__line--up { stroke-dashoffset: 0 !important; transition: none; }
      .bridge-chart__line--down,
      .bridge-chart__area { opacity: 1 !important; transition: none; }
    }

    /* ── Trust strip ────────────────────────────────────────────────────────── */
    .lp-trust-strip {
      background: var(--surface-container-low);
      border-block: 1px solid var(--outline-variant);
      padding-block: clamp(28px, 3.5vw, 52px);
    }
    .lp-trust-strip__eyebrow {
      text-align: center;
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--on-surface-variant);
      margin: 0 0 var(--space-md);
    }

    /* ── 5 Systems grid ─────────────────────────────────────────────────────── */
    .lp-systems {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-block: clamp(56px, 7vw, 104px);
    }
    .lp-systems__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-md);
      margin-top: var(--space-xl);
    }
    @media (min-width: 720px) {
      .lp-systems__grid { grid-template-columns: 1fr 1fr; }
      .lp-systems__grid .system-card:last-child {
        grid-column: 1 / -1;
        max-width: calc(50% - var(--space-md) / 2);
        justify-self: center;
      }
    }
    .system-card {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.09);
      border-radius: var(--radius-2xl);
      padding: var(--space-lg);
      position: relative;
      overflow: hidden;
      transition: background 200ms ease, border-color 200ms ease, transform 200ms ease;
    }
    .system-card:hover {
      background: rgba(255, 255, 255, 0.07);
      border-color: rgba(234, 194, 90, 0.28);
      transform: translateY(-2px);
    }
    .system-card::before {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      width: 130px;
      height: 130px;
      border-bottom-left-radius: 50%;
      background: linear-gradient(135deg, rgba(234, 194, 90, 0.09), transparent 70%);
      pointer-events: none;
    }
    .system-card__num {
      font-family: var(--font-display);
      font-size: 2.75rem;
      font-weight: 700;
      line-height: 1;
      color: rgba(234, 194, 90, 0.16);
      display: block;
      margin-bottom: var(--space-sm);
    }
    .system-card__tagline {
      font-family: var(--font-body);
      font-size: 0.6875rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--brass-bright);
      display: block;
      margin-bottom: 8px;
    }
    .system-card__title {
      font-family: var(--font-display);
      font-size: 1.1875rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: var(--space-sm);
      line-height: 1.3;
    }
    .system-card p {
      font-size: 0.9375rem;
      line-height: 1.68;
      color: rgba(255, 255, 255, 0.7);
      margin: 0;
    }

    /* ── Visual value tour — alternating image + copy rows ──────────────────── */
    .mm-tour {
      background: #ffffff;
      padding-block: clamp(56px, 7vw, 96px);
    }
    .mm-tour__rows {
      display: flex;
      flex-direction: column;
      gap: clamp(48px, 6vw, 88px);
      margin-top: var(--space-xl);
    }
    .mm-row {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-lg);
      align-items: center;
    }
    @media (min-width: 860px) {
      .mm-row {
        grid-template-columns: 1fr 1fr;
        gap: clamp(40px, 5vw, 72px);
      }
      .mm-row--flip .mm-row__media { order: 2; }
    }
    .mm-row__copy {
      max-width: 34rem;
    }
    .mm-row__eyebrow {
      font-family: var(--font-body);
      font-size: 0.875rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--brass);
      display: block;
      margin-bottom: var(--space-sm);
    }
    .mm-row__title {
      font-family: var(--font-display);
      font-size: clamp(1.375rem, 1.1rem + 1vw, 1.75rem);
      font-weight: 700;
      letter-spacing: -0.01em;
      line-height: 1.25;
      color: var(--primary-container);
      margin: 0 0 var(--space-sm);
    }
    .mm-row__desc {
      font-size: 1rem;
      line-height: 1.65;
      color: var(--on-surface-variant);
      margin: 0;
    }
    .mm-row__media {
      position: relative;
      border-radius: var(--radius-3xl);
      overflow: hidden;
      box-shadow: var(--shadow-xl);
      border: 1px solid var(--outline-variant);
      background: var(--surface-container-low);
    }
    .mm-row__media img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      aspect-ratio: 16 / 11;
    }
    /* Phone variant — drop the card chrome so the full device shows, floating
       with a soft shadow instead of being cropped inside a container. */
    .mm-row__media--phone {
      border: none;
      background: none;
      box-shadow: none;
      border-radius: 0;
      overflow: visible;
      display: flex;
      justify-content: center;
    }
    .mm-row__media--phone img {
      width: auto;
      height: auto;
      max-height: 620px;
      max-width: 100%;
      aspect-ratio: auto;
      object-fit: contain;
      filter:
        drop-shadow(0 12px 24px rgba(2, 28, 54, 0.22))
        drop-shadow(0 30px 60px rgba(2, 28, 54, 0.28));
    }

    /* Composite variant — overlapping platform UI fragments floating freely
       (no container card), mirroring the homepage AI-systems composite.
       A large base card sits centered with two smaller cards overlapping at
       the lower corners. */
    .mm-compose {
      position: relative;
      width: 100%;
      aspect-ratio: 4 / 3;
    }
    .mm-compose__img {
      position: absolute;
      display: block;
      border-radius: 12px;
      background: #ffffff;
      border: 1px solid rgba(2, 28, 54, 0.06);
      box-shadow:
        0 1px 0 rgba(255, 255, 255, 0.6) inset,
        0 18px 40px rgba(2, 28, 54, 0.22),
        0 2px 6px rgba(2, 28, 54, 0.12);
    }
    .mm-compose__img--base {
      left: 50%;
      top: 0;
      transform: translateX(-50%);
      width: 92%;
      z-index: 1;
    }
    .mm-compose__img--left {
      left: 0;
      bottom: 6%;
      width: 40%;
      z-index: 2;
    }
    .mm-compose__img--left.mm-compose__img--action {
      width: 60%;
    }
    .mm-compose__img--right {
      right: 0;
      bottom: 14%;
      width: 38%;
      z-index: 3;
    }
    @media (max-width: 600px) {
      .mm-compose { aspect-ratio: 5 / 4; }
      .mm-compose__img--left { width: 46%; }
      .mm-compose__img--left.mm-compose__img--action { width: 68%; }
      .mm-compose__img--right { width: 46%; }
    }

    /* ── What You Get features ──────────────────────────────────────────────── */
    .lp-features {
      background: var(--surface-container-low);
      border-block: 1px solid var(--outline-variant);
      padding-block: clamp(56px, 7vw, 96px);
    }
    .lp-features__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-md);
      margin-top: var(--space-xl);
    }
    @media (min-width: 720px) {
      .lp-features__grid { grid-template-columns: repeat(3, 1fr); }
    }

    /* ── Platinum Marketing — bold premium dark panel ───────────────────────── */
    .mm-plat {
      position: relative;
      overflow: hidden;
      background:
        radial-gradient(120% 90% at 100% 0%, #14243f 0%, transparent 55%),
        linear-gradient(160deg, #04122a 0%, #021c36 45%, #050c1a 100%);
      padding-block: clamp(64px, 8vw, 120px);
      isolation: isolate;
    }
    .mm-plat__glow {
      position: absolute;
      top: -160px;
      right: -120px;
      width: 620px;
      height: 620px;
      max-width: 90vw;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.22), transparent 70%);
      filter: blur(60px);
      pointer-events: none;
      z-index: -1;
    }
    .mm-plat__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(40px, 6vw, 80px);
      align-items: center;
    }
    @media (min-width: 960px) {
      .mm-plat__grid { grid-template-columns: minmax(0, 1fr) minmax(0, 1.05fr); }
    }

    /* Left copy column */
    /* Full-width header above the grid */
    .mm-plat__header {
      text-align: center;
      max-width: 60rem;
      margin: 0 auto clamp(40px, 5vw, 72px);
    }
    /* Big shiny metallic-silver headline */
    .mm-plat__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.75rem, 1.6rem + 5.5vw, 6rem);
      line-height: 1.0;
      letter-spacing: -0.03em;
      margin: 0 0 var(--space-md);
      background: linear-gradient(180deg, #ffffff 0%, #f2f6fb 30%, #c3cedd 55%, #8b9bb3 78%, #e8eef6 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
      filter: drop-shadow(0 8px 26px rgba(0, 0, 0, 0.5));
      position: relative;
    }
    /* moving sheen sweep for the metallic shine */
    .mm-plat__title::after {
      content: 'Platinum Marketing';
      position: absolute;
      inset: 0;
      background: linear-gradient(105deg, transparent 40%, rgba(255, 255, 255, 0.9) 50%, transparent 60%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      background-size: 250% 100%;
      background-position: 200% 0;
      animation: mm-plat-shine 6s ease-in-out 1s infinite;
      pointer-events: none;
    }
    @keyframes mm-plat-shine {
      0%   { background-position: 200% 0; }
      55%  { background-position: -130% 0; }
      100% { background-position: -130% 0; }
    }
    @media (prefers-reduced-motion: reduce) {
      .mm-plat__title::after { animation: none; display: none; }
    }
    .mm-plat__subhead {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: clamp(1.25rem, 1rem + 1.1vw, 1.875rem);
      line-height: 1.35;
      letter-spacing: -0.01em;
      color: #ffffff;
      margin: 0 auto;
      max-width: 44rem;
      text-wrap: balance;
    }
    .mm-plat__subhead-em {
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-plat__list-label {
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.5);
      margin: 0 0 var(--space-md);
    }
    .mm-plat__list {
      margin: 0 0 var(--space-lg);
      display: grid;
      gap: 10px var(--space-lg);
    }
    @media (min-width: 480px) {
      .mm-plat__list { grid-template-columns: 1fr 1fr; }
    }
    .mm-plat__list li { font-size: 0.9375rem; }

    /* Price tag — $100 struck through → free */
    .mm-plat__price {
      display: flex;
      align-items: center;
      gap: var(--space-md);
      flex-wrap: wrap;
      padding: var(--space-md) var(--space-lg);
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(234, 194, 90, 0.28);
      border-radius: var(--radius-2xl);
      margin-bottom: var(--space-lg);
    }
    .mm-plat__price-tag {
      display: flex;
      align-items: baseline;
      gap: 12px;
      flex-shrink: 0;
    }
    .mm-plat__price-was {
      position: relative;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.75rem;
      color: rgba(255, 255, 255, 0.5);
    }
    .mm-plat__price-was span { font-size: 0.9375rem; font-weight: 600; }
    .mm-plat__price-was::after {
      content: '';
      position: absolute;
      left: -4px;
      right: -4px;
      top: 52%;
      height: 3px;
      border-radius: 2px;
      background: var(--brass-bright);
      transform: rotate(-8deg);
    }
    .mm-plat__price-now {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.75rem, 1.8rem + 3vw, 3.75rem);
      line-height: 0.9;
      letter-spacing: -0.03em;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-plat__price-note {
      font-family: var(--font-body);
      font-size: 0.9375rem;
      line-height: 1.45;
      color: rgba(255, 255, 255, 0.78);
      margin: 0;
    }
    .mm-plat__price-note strong { color: var(--brass-bright); font-weight: 700; }

    .mm-plat__actions {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: var(--space-sm);
    }
    .mm-plat__link {
      font-size: 0.9375rem;
      color: rgba(255, 255, 255, 0.7);
      text-decoration: underline;
      text-underline-offset: 4px;
      text-decoration-thickness: 1px;
      transition: color 150ms ease;
    }
    .mm-plat__link:hover { color: var(--brass-bright); }

    /* Right showcase — floating asset cards */
    .mm-plat__showcase {
      position: relative;
      min-height: clamp(380px, 50vw, 540px);
    }
    .mm-plat__asset {
      position: absolute;
      margin: 0;
      border-radius: 14px;
      overflow: hidden;
      background: #ffffff;
      box-shadow:
        0 24px 60px rgba(0, 0, 0, 0.45),
        0 2px 8px rgba(0, 0, 0, 0.3);
      transition: transform 300ms cubic-bezier(0.22, 1, 0.36, 1);
    }
    .mm-plat__asset img {
      display: block;
      width: 100%;
      height: auto;
    }
    .mm-plat__asset figcaption {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      padding: 18px 14px 10px;
      font-family: var(--font-body);
      font-size: 0.6875rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #ffffff;
      text-align: center;
      background: linear-gradient(0deg, rgba(2, 12, 26, 0.82) 0%, transparent 100%);
    }
    /* Flyer — tall, back-left */
    .mm-plat__asset--flyer {
      width: 46%;
      top: 0;
      left: 0;
      transform: rotate(-5deg);
      z-index: 1;
    }
    /* Newsletter — tall, back-right */
    .mm-plat__asset--news {
      width: 42%;
      top: 8%;
      right: 0;
      transform: rotate(5deg);
      z-index: 2;
    }
    /* Social — square, front-center, overlapping */
    .mm-plat__asset--social {
      width: 50%;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%) rotate(-1deg);
      z-index: 3;
    }
    .mm-plat__showcase:hover .mm-plat__asset--flyer { transform: rotate(-7deg) translateY(-6px); }
    .mm-plat__showcase:hover .mm-plat__asset--news { transform: rotate(7deg) translateY(-6px); }
    .mm-plat__showcase:hover .mm-plat__asset--social { transform: translateX(-50%) rotate(-1deg) translateY(-8px); }

    @media (max-width: 600px) {
      .mm-plat__showcase { min-height: 0; display: grid; gap: var(--space-md); }
      .mm-plat__asset {
        position: static;
        width: 100% !important;
        transform: none !important;
        max-width: 360px;
        margin-inline: auto;
      }
      .mm-plat__asset figcaption { font-size: 0.625rem; }
    }

    /* ── 8 Disciplines (matches what's-inside.html top section) ─────────────── */
    .disc-section {
      background: var(--surface-container-low);
      padding-block: clamp(64px, 8vw, 112px);
      overflow: hidden;
    }
    .disc-section__inner {
      max-width: var(--container-max);
      margin-inline: auto;
      padding-inline: var(--gutter);
    }
    .disc-split {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-xl);
      align-items: center;
    }
    @media (min-width: 960px) {
      .disc-split {
        grid-template-columns: minmax(320px, 5fr) minmax(0, 7fr);
        gap: clamp(32px, 4vw, 64px);
      }
    }
    .disc-copy__eyebrow {
      display: inline-block;
      font-family: var(--font-body);
      font-weight: 600;
      font-size: 0.75rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--brass);
      margin-bottom: var(--space-sm);
    }
    .disc-copy__title {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(2rem, 1.4rem + 2.4vw, 3.25rem);
      line-height: 1.08;
      letter-spacing: -0.025em;
      color: var(--primary);
      margin: 0 0 var(--space-md);
      text-wrap: balance;
    }
    .disc-copy__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .disc-copy__lede {
      font-family: var(--font-body);
      font-size: 1.0625rem;
      line-height: 1.7;
      color: var(--on-surface-variant);
      margin: 0 0 var(--space-lg);
      max-width: 36rem;
    }
    .disc-marquee {
      position: relative;
      height: clamp(480px, 56vw, 660px);
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-md);
      -webkit-mask-image: linear-gradient(180deg, transparent 0, #000 14%, #000 86%, transparent 100%);
              mask-image: linear-gradient(180deg, transparent 0, #000 14%, #000 86%, transparent 100%);
    }
    .disc-marquee__col {
      position: relative;
      overflow: hidden;
    }
    .disc-marquee__track {
      display: flex;
      flex-direction: column;
      gap: var(--space-md);
      animation: disc-scroll-up 80s linear infinite;
      will-change: transform;
    }
    .disc-marquee__col--down .disc-marquee__track {
      animation-name: disc-scroll-down;
    }
    @keyframes disc-scroll-up {
      from { transform: translateY(0); }
      to   { transform: translateY(-50%); }
    }
    @keyframes disc-scroll-down {
      from { transform: translateY(-50%); }
      to   { transform: translateY(0); }
    }
    .disc-thumb {
      position: relative;
      display: block;
      width: 100%;
      aspect-ratio: 16 / 9;
      border-radius: var(--radius-xl);
      overflow: hidden;
      border: 1px solid var(--outline-variant);
      box-shadow: var(--shadow);
      background: var(--surface-container-lowest);
      flex: 0 0 auto;
    }
    .disc-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    /* Block-level inline testimonial */
    .quote-card--block {
      flex: none;
      width: 100%;
      max-width: none;
      margin: var(--space-xl) 0 0;
    }
    @media (prefers-reduced-motion: reduce) {
      .disc-marquee__track { animation: none !important; }
    }
    @media (max-width: 720px) {
      .disc-marquee { height: clamp(420px, 90vw, 520px); }
    }

    /* ── Proof panel — stat + Habib testimonial ─────────────────────────────── */
    .lp-proof-section {
      background: var(--surface);
      padding-block: clamp(56px, 7vw, 96px);
    }
    .lp-proof-card {
      max-width: 64rem;
      margin-inline: auto;
      background: linear-gradient(135deg, #0a1628 0%, #021c36 55%, #0a223d 100%);
      border-radius: var(--radius-3xl);
      border: 1px solid rgba(234, 194, 90, 0.28);
      box-shadow:
        0 30px 70px rgba(2, 28, 54, 0.35),
        inset 0 0 0 1px rgba(234, 194, 90, 0.08);
      padding: clamp(32px, 4vw, 56px) clamp(24px, 4vw, 56px);
      position: relative;
      overflow: hidden;
      display: grid;
      gap: clamp(32px, 4vw, 56px);
      grid-template-columns: 1fr;
      align-items: center;
      text-align: center;
    }
    .lp-proof-card::before {
      content: '';
      position: absolute;
      top: -120px;
      right: -120px;
      width: 360px;
      height: 360px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.18), transparent);
      filter: blur(50px);
      pointer-events: none;
    }
    @media (min-width: 760px) {
      .lp-proof-card {
        grid-template-columns: minmax(0, 0.95fr) minmax(0, 1fr);
        text-align: left;
      }
    }
    .lp-proof-card__stat-col { position: relative; z-index: 1; }
    .lp-proof-card__label {
      display: inline-block;
      font-family: var(--font-body);
      font-size: 0.9375rem;
      font-weight: 800;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--brass-bright);
      margin-bottom: var(--space-sm);
    }
    .lp-proof-card__stat {
      display: flex;
      align-items: flex-start;
      justify-content: center;
      gap: 4px;
      font-family: var(--font-display);
      font-weight: 800;
      line-height: 0.95;
      letter-spacing: -0.04em;
      margin: 0 0 var(--space-sm);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    @media (min-width: 760px) {
      .lp-proof-card__stat { justify-content: flex-start; }
    }
    .lp-proof-card__currency {
      font-size: clamp(2rem, 1rem + 3vw, 3rem);
      padding-top: clamp(8px, 1.5vw, 16px);
      font-weight: 700;
    }
    .lp-proof-card__number { font-size: clamp(4.5rem, 2rem + 8vw, 7.5rem); }
    .lp-proof-card__unit {
      font-size: clamp(2.5rem, 1rem + 4vw, 4rem);
      padding-top: clamp(4px, 1vw, 8px);
      font-weight: 700;
    }
    .lp-proof-card__plus {
      display: inline-block;
      font-size: clamp(1.25rem, 0.75rem + 1.5vw, 1.875rem);
      vertical-align: top;
      padding-top: clamp(8px, 1.5vw, 18px);
      margin-left: 4px;
    }
    .lp-proof-card__caption {
      font-size: clamp(1.0625rem, 0.95rem + 0.5vw, 1.375rem);
      font-weight: 600;
      color: rgba(255, 255, 255, 0.85);
      margin: 0;
      line-height: 1.4;
      max-width: 26ch;
      margin-inline: auto;
    }
    @media (min-width: 760px) {
      .lp-proof-card__caption { margin-inline: 0; }
    }
    .lp-proof-card__test-col {
      position: relative;
      z-index: 1;
      margin: 0;
      padding-left: 0;
      border-left: none;
    }
    @media (min-width: 760px) {
      .lp-proof-card__test-col {
        padding-left: clamp(28px, 3vw, 48px);
        border-left: 1px solid rgba(234, 194, 90, 0.2);
      }
    }
    .lp-proof-card__test-head {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: var(--space-sm);
      margin-bottom: var(--space-md);
    }
    @media (min-width: 760px) {
      .lp-proof-card__test-head { justify-content: flex-start; }
    }
    .lp-proof-card__photo {
      width: 56px;
      height: 56px;
      flex-shrink: 0;
      padding: 2px;
      border-radius: 50%;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
    }
    .lp-proof-card__photo img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      background: #021c36;
    }
    .lp-proof-card__attr-name {
      display: block;
      font-family: var(--font-display);
      font-size: 0.9375rem;
      font-weight: 700;
      color: #ffffff;
      line-height: 1.2;
    }
    .lp-proof-card__attr-role {
      display: block;
      margin-top: 2px;
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.04em;
      color: var(--brass-bright);
    }
    .lp-proof-card__quote {
      margin: 0;
      font-family: var(--font-display);
      font-size: clamp(1rem, 0.9rem + 0.5vw, 1.1875rem);
      font-style: italic;
      font-weight: 500;
      line-height: 1.55;
      color: rgba(255, 255, 255, 0.92);
    }

    /* ── Testimonials — image-rich cards ────────────────────────────────────── */
    .lp-testimonials {
      background: var(--surface-container-low);
      border-block: 1px solid var(--outline-variant);
      padding-block: clamp(56px, 7vw, 96px);
    }
    .mm-tcards {
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(40px, 4vw, 32px);
      margin-top: calc(var(--space-xl) + 28px);
    }
    @media (min-width: 760px) {
      .mm-tcards { grid-template-columns: repeat(3, 1fr); }
    }
    .mm-tcard {
      position: relative;
      margin: 0;
      background: #ffffff;
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-3xl);
      box-shadow: var(--shadow-lg);
      padding: 0 var(--space-lg) var(--space-lg);
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    /* circular avatar straddling the top edge, with brass gradient ring */
    .mm-tcard__photo {
      width: 96px;
      height: 96px;
      margin-top: -48px;
      margin-bottom: var(--space-md);
      flex-shrink: 0;
      padding: 3px;
      border-radius: 50%;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      box-shadow: 0 10px 28px rgba(2, 28, 54, 0.22);
    }
    .mm-tcard__photo img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      background: #f2f4f6;
    }
    .mm-tcard__body {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;
    }
    .mm-tcard__stars {
      font-size: 1rem;
      letter-spacing: 0.18em;
      color: var(--brass);
      margin-bottom: var(--space-sm);
    }
    .mm-tcard__quote {
      margin: 0 0 var(--space-md);
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 500;
      font-size: 1.0625rem;
      line-height: 1.55;
      color: var(--on-surface);
      flex: 1;
    }
    .mm-tcard__attr {
      padding-top: var(--space-md);
      border-top: 1px solid var(--outline-variant);
      width: 100%;
    }
    .mm-tcard__name {
      display: block;
      font-family: var(--font-display);
      font-size: 0.9375rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      color: var(--primary-container);
    }
    .mm-tcard__org {
      display: block;
      font-size: 0.8125rem;
      color: var(--on-surface-variant);
      margin-top: 3px;
    }

    /* ── Pricing section — the Mastermind offer card ────────────────────────── */
    .mm-pricing {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-block: clamp(56px, 7vw, 104px);
      position: relative;
      overflow: hidden;
    }
    .mm-pricing::before {
      content: '';
      position: absolute;
      top: -80px;
      left: 6%;
      width: 480px;
      height: 480px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.1), transparent);
      filter: blur(70px);
      pointer-events: none;
    }
    .mm-plan {
      position: relative;
      z-index: 1;
      max-width: 40rem;
      margin-inline: auto;
      margin-top: var(--space-xl);
      background: linear-gradient(135deg, #0a1628 0%, #021c36 55%, #0a223d 100%);
      border-radius: var(--radius-3xl);
      border: 1px solid rgba(234, 194, 90, 0.55);
      box-shadow:
        0 40px 90px rgba(2, 28, 54, 0.45),
        0 0 60px rgba(234, 194, 90, 0.18),
        inset 0 0 0 1px rgba(234, 194, 90, 0.22);
      padding: clamp(32px, 4vw, 56px) clamp(24px, 4vw, 48px);
      text-align: center;
    }
    /* Co-branded logo lockup — Loan Atlas × Mastermind */
    .mm-plan__lockup {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: clamp(12px, 2.5vw, 26px);
      margin-bottom: var(--space-md);
    }
    /* Both marks sized to a similar visual height, sitting bare on the card */
    .mm-plan__lockup-atlas {
      height: clamp(56px, 8vw, 84px);
      width: auto;
      display: block;
    }
    .mm-plan__lockup-x {
      font-family: var(--font-display);
      font-weight: 400;
      font-size: clamp(1.125rem, 0.9rem + 0.8vw, 1.5rem);
      color: rgba(234, 194, 90, 0.7);
      line-height: 1;
    }
    .mm-plan__lockup-mm {
      height: clamp(48px, 7vw, 70px);
      width: auto;
      display: block;
      /* recolor the black/red mastermind logo to solid white */
      filter: brightness(0) invert(1);
    }
    .mm-plan__sponsored {
      font-family: var(--font-body);
      font-size: 0.6875rem;
      font-weight: 700;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--brass-bright);
      margin: 0 0 var(--space-xs);
    }
    /* Big, bold headline — shiny white with a red "Platinum" */
    .mm-plan__hero-title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2rem, 1.3rem + 3.2vw, 3.25rem);
      line-height: 1.02;
      letter-spacing: -0.03em;
      margin: 0 0 var(--space-lg);
      color: #ffffff;
      text-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
      filter: drop-shadow(0 6px 20px rgba(0, 0, 0, 0.45));
    }
    .mm-plan__hero-plat {
      background: linear-gradient(180deg, #c2262b 0%, #9e1e22 60%, #7a171a 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-plan__price-row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: var(--space-sm) var(--space-md);
      margin-bottom: var(--space-sm);
    }
    .mm-plan__price {
      font-family: var(--font-display);
      font-weight: 800;
      letter-spacing: -0.03em;
      line-height: 0.95;
      color: #ffffff;
    }
    .mm-plan__price--first {
      font-size: clamp(3.5rem, 2rem + 7vw, 5.5rem);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-plan__price small {
      display: block;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 600;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--brass-bright);
      margin-top: 8px;
    }
    .mm-plan__then {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2rem, 1.2rem + 3vw, 3rem);
      letter-spacing: -0.02em;
      color: #ffffff;
    }
    .mm-plan__then small {
      display: block;
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.6);
      margin-top: 6px;
    }
    .mm-plan__arrow {
      color: var(--brass-bright);
      display: inline-flex;
    }
    .mm-plan__arrow svg { width: 26px; height: 26px; }
    @media (max-width: 520px) {
      .mm-plan__arrow { transform: rotate(90deg); }
    }
    .mm-plan__save {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.125rem, 0.9rem + 0.9vw, 1.5rem);
      color: #ffffff;
      margin: 0 0 var(--space-lg);
    }
    .mm-plan__save em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-plan__list {
      list-style: none;
      margin: 0 0 var(--space-lg);
      padding: var(--space-lg) 0;
      border-block: 1px solid rgba(234, 194, 90, 0.18);
      display: grid;
      gap: 12px;
      text-align: left;
    }
    .mm-plan__list li {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      font-size: 0.9375rem;
      line-height: 1.5;
      color: rgba(255, 255, 255, 0.85);
    }
    .mm-plan__list .icon {
      flex-shrink: 0;
      width: 20px;
      height: 20px;
      margin-top: 2px;
      color: var(--brass-bright);
    }
    .mm-plan__cta {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-sm);
    }
    .mm-plan__fine {
      font-size: 0.8125rem;
      color: rgba(255, 255, 255, 0.5);
      margin: var(--space-md) 0 0;
      line-height: 1.5;
    }
      

    /* Offset collage for weekly coaching */
    .mm-card-stack {
      position: relative;
      width: 100%;
      aspect-ratio: 1;
    }
    .mm-card-stack__img {
      position: absolute;
      width: 64%;
      border-radius: 12px;
      box-shadow: 0 20px 40px rgba(2, 28, 54, 0.25);
      border: 6px solid white;
      opacity: 0;
      transform: translateY(28px);
    }

    /* Staggered collage positions — overlapping into one cohesive cluster */
    .mm-card-stack__img:nth-child(1) { z-index: 1; top: 0;    left: 0;    animation-delay: 0.1s;  }
    .mm-card-stack__img:nth-child(2) { z-index: 2; top: 6%;   right: 0;   animation-delay: 0.25s; }
    .mm-card-stack__img:nth-child(3) { z-index: 3; bottom: 0; left: 2%;   animation-delay: 0.4s;  }
    .mm-card-stack__img:nth-child(4) { z-index: 4; bottom: 6%; right: 1%; animation-delay: 0.55s; }

    /* Reveal-on-scroll: subtle fade + slide-in, no rotation */
    .mm-row.is-revealed .mm-card-stack__img {
      animation: cardFadeIn 0.6s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
    }

    @keyframes cardFadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>


  <!-- ── Header (standard site chrome) ──────────────────────────────────────── -->
<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <!-- ── Sticky offer bar ───────────────────────────────────────────────────── -->
  <div class="mm-bar">
    <div class="mm-bar__inner">
      <p class="mm-bar__text">
        <strong>Mastermind Exclusive</strong>
        <span class="mm-bar__sep mm-bar__hide-sm">·</span>
        <span class="mm-bar__hide-sm">$49 first month, then $249/mo locked</span>
        <span class="mm-bar__sep">·</span>
        Save $2,600
      </p>
      <a class="mm-bar__btn" href="#pricing">Claim Offer</a>
    </div>
  </div>

  <main>

    <!-- ── 1. HERO ──────────────────────────────────────────────────────────── -->
    <section class="lp-intro" aria-labelledby="mm-hero-heading">
      <div class="container">
        <div class="lp-intro__content">
          <div class="mm-hero-lockup" data-hero-step="1" aria-label="The Loan Atlas — official Mastermind Summit 2026 offer">
            <img class="mm-hero-lockup__atlas" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="The Loan Atlas" />
            <span class="mm-hero-lockup__x" aria-hidden="true">×</span>
            <img class="mm-hero-lockup__mm" src="<?php echo TLA_BASE; ?>/assets/mastermind-logo.webp" alt="Mastermind Summit 2026" />
          </div>
          <h1 id="mm-hero-heading" class="lp-intro__title" data-hero-step="2">Walk Away From Mastermind With the <em>System Top Producers Run</em></h1>
          <p class="lp-intro__subtitle" data-hero-step="3">Five AI-powered systems, live coaching every week, and the full curriculum that built billion-dollar mortgage teams — now at a price reserved only for Mastermind Summit attendees.</p>
          <div class="lp-intro__actions" data-hero-step="4">
            <a class="btn btn--gold btn--lg" href="#pricing">Start Your Transformation — $49 Today</a>
          </div>
        </div>
      </div>

      <div class="lp-intro__stage" data-hero-step="5">
        <div class="lp-intro__glow" aria-hidden="true"></div>
        <img class="lp-intro__dash" src="<?php echo TLA_BASE; ?>/assets/dashboard.png" alt="The Loan Atlas member dashboard" loading="eager" />
        <img class="lp-phone-img" src="<?php echo TLA_BASE; ?>/assets/sales-coach-phone.png" alt="AI Sales &amp; Scripting Coach on mobile" />
      </div>
    </section>

    <!-- ── 2. OFFER HIGHLIGHT CARD ──────────────────────────────────────────── -->
    <section class="mm-offer" aria-labelledby="mm-offer-heading">
      <div class="container">
        <div class="mm-offer__card" data-reveal="scale">
          <div class="mm-plan__lockup" aria-label="The Loan Atlas — official Mastermind Summit 2026 offer">
            <img class="mm-plan__lockup-atlas" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="The Loan Atlas" />
            <span class="mm-plan__lockup-x" aria-hidden="true">×</span>
            <img class="mm-plan__lockup-mm" src="<?php echo TLA_BASE; ?>/assets/mastermind-logo.webp" alt="Mastermind Summit 2026" />
          </div>
          <h3 class="mm-plan__hero-title mm-offer__hero-title"><span class="mm-plan__hero-plat">Platinum</span> Super Bonus</h3>
          <p class="mm-offer__regular">
            Regular membership is <b>$349/mo</b> + the <b>$100/mo</b> Platinum upgrade =
            <span class="mm-offer__strike">$449/mo</span>. Here&rsquo;s what you pay as a Mastermind attendee:
          </p>

          <div id="mm-offer-heading" class="mm-offer__steps">
            <div class="mm-step mm-step--first">
              <span class="mm-step__label">First Month</span>
              <span class="mm-step__price">$49</span>
              <span class="mm-step__sub"><strong>Immediate full access</strong> to The Loan Atlas</span>
            </div>
            <div class="mm-offer__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
            </div>
            <div class="mm-step mm-step--rest">
              <span class="mm-step__label">Months 2&ndash;12</span>
              <span class="mm-step__price">$249<span style="font-size: 0.32em; font-weight: 700; letter-spacing: 0;">/mo</span></span>
              <span class="mm-step__sub"><strong>Locked in</strong> — no increase</span>
            </div>
          </div>

          <p class="mm-offer__savings"><em>$2,600 in savings</em> exclusively for Mastermind</p>
          <span class="mm-offer__pill">Save $400 month one · $200/mo after</span>

          <div class="mm-offer__cta">
            <a class="btn btn--gold btn--lg" href="#pricing" style="font-size: 1.0625rem; padding: 18px 44px; box-shadow: 0 8px 28px rgba(201, 150, 28, 0.32);">Claim Your $49 First Month</a>
          </div>
          <p class="mm-offer__fine">12-month commitment. Offer exclusively for Mastermind Summit 2026 attendees. Available to new members only.</p>
        </div>
      </div>
    </section>

    <!-- ── 3. TRUST STRIP ───────────────────────────────────────────────────── -->
    <section class="lp-trust-strip" aria-label="Trusted by loan officers at these companies">
      <div class="container">
        <p class="lp-trust-strip__eyebrow">Trusted by loan officers at</p>
      </div>
      <div class="trust__marquee">
        <div class="trust__track">
          <ul class="trust__group">
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/american-pacific-logo.webp" alt="American Pacific Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/acm-logo.webp" alt="Atlantic Coast Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/cross-country-logo.webp" alt="CrossCountry Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/UWM-logo.png" alt="United Wholesale Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/fairway-logo.png" alt="Fairway Independent Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/CMG-logo.svg" alt="CMG Financial"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/swbc-logo.png" alt="SWBC Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/better-logo.png" alt="Better"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/lower-mortgage-logo.svg" alt="Lower"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/rate-logo.png" alt="Rate"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/loan-depot-logo.png" alt="loanDepot"></li>
          </ul>
          <ul class="trust__group" aria-hidden="true">
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/american-pacific-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/acm-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/cross-country-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/UWM-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/fairway-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/CMG-logo.svg" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/swbc-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/better-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/lower-mortgage-logo.svg" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/rate-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/loan-depot-logo.png" alt=""></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ── 4. BRIDGE ────────────────────────────────────────────────────────── -->
    <div class="lp-bridge">
      <div class="container">
        <div class="lp-bridge__split">
          <!-- LEFT: Image -->
          <div class="mm-row__media" data-reveal="fade">
            <img src="<?php echo TLA_BASE; ?>/assets/loan-officer-smiling-phone.png" alt="Loan officer smiling at phone" loading="lazy">
          </div>

          <!-- RIGHT: copy -->
          <div class="lp-bridge__inner" data-reveal="up">
            <p class="text-brass" style="font-family: var(--font-display); font-size: clamp(1.5rem, 1.1rem + 1.4vw, 2.125rem); font-weight: 800; line-height: 1.25; letter-spacing: -0.015em; margin: 0 0 var(--space-md);">
              The loan officers pulling away from the pack aren&rsquo;t working harder than you.
            </p>
            <p class="t-headline-md" style="line-height: 1.5; margin: 0;">
              They&rsquo;re running a system that compounds every month. Mastermind is your chance to install it.
            </p>
          </div>

        </div>
      </div>
    </div>

    <!-- ── 5. FIVE AI SYSTEMS ───────────────────────────────────────────────── -->
    <section class="lp-systems" id="systems" aria-labelledby="systems-heading">
      <div class="container">
        <div class="center" data-reveal="up" style="max-width: 46rem; margin-inline: auto;">
          <span class="eyebrow" style="justify-content: center; margin-bottom: var(--space-md);">
            <span class="eyebrow__text" style="color: var(--brass-bright);">Five AI-Powered Systems</span>
          </span>
          <h2 id="systems-heading" class="t-display" style="color: #ffffff; font-weight: 800; margin-bottom: var(--space-md);">
            Help You Close More Loans<br>
            <span style="background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">With Less Chaos</span>
          </h2>
          <p class="t-body-lg" style="color: rgba(255, 255, 255, 0.68);">Inside The Loan Atlas, these systems work together to help you make better decisions, execute faster, and stay focused on what actually drives production.</p>
        </div>

        <div class="lp-systems__grid" data-reveal-stagger="100">
          <article class="system-card">
            <span class="system-card__num">01</span>
            <span class="system-card__tagline">Stop Flying Blind</span>
            <h3 class="system-card__title">AI Business Intelligence System</h3>
            <p>See exactly what's driving your numbers. Which lead sources are producing, which referral partners are worth your time, where deals are dying. Guesswork becomes answers.</p>
          </article>
          <article class="system-card">
            <span class="system-card__num">02</span>
            <span class="system-card__tagline">Stop Starting Every Week From Scratch</span>
            <h3 class="system-card__title">AI Business Planning Tool</h3>
            <p>A personalized plan and weekly priority list based on your real pipeline and goals. Not a generic to-do list — a system that tells you what moves the needle right now.</p>
          </article>
          <article class="system-card">
            <span class="system-card__num">03</span>
            <span class="system-card__tagline">Stop Guessing What to Say</span>
            <h3 class="system-card__title">AI Sales &amp; Marketing Advisor</h3>
            <p>The right words for every conversation. Rate shoppers, Realtor meetings, objections, follow-up. Stop improvising; start communicating with clarity and precision.</p>
          </article>
          <article class="system-card">
            <span class="system-card__num">04</span>
            <span class="system-card__tagline">Stop Spinning Your Wheels</span>
            <h3 class="system-card__title">AI Performance Coach</h3>
            <p>Find the exact gaps slowing your growth and fix them faster. Instead of consuming more content and hoping something sticks, you get a focused plan to improve what matters most right now.</p>
          </article>
          <article class="system-card">
            <span class="system-card__num">05</span>
            <span class="system-card__tagline">Stop Making Big Decisions Alone</span>
            <h3 class="system-card__title">AI Strategic Thought Partner</h3>
            <p>Real-time guidance on decisions, deal scenarios, and growth opportunities. Think more clearly. Move faster. Make better calls with less hesitation.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- ── 6. VISUAL VALUE TOUR ─────────────────────────────────────────────── -->
    <section class="mm-tour" id="value" aria-labelledby="value-heading">
      <div class="container">
        <div data-reveal="up" style="max-width: 46rem; margin-bottom: var(--space-xl);">
          <span class="eyebrow" style="margin-bottom: var(--space-md);">
            <span class="eyebrow__text">What's Inside</span>
          </span>
          <h2 id="value-heading" class="t-display" style="color: var(--primary-container); font-weight: 800; margin-bottom: var(--space-sm);">Stop Flying Blind.<br><span style="background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">Start Running a Predictable Mortgage Business.</span></h2>
        </div>

        <div class="mm-tour__rows">

          <div class="mm-row" data-reveal="up">
            <div class="mm-row__media mm-row__media--phone" data-reveal="fade">
            <img src="<?php echo TLA_BASE; ?>/assets/loan-officer-business-intelligence.png" alt="Loan Officer Business Intelligence" loading="lazy">
          </div>
            <div class="mm-row__copy">
              <span class="mm-row__eyebrow">AI Business Intelligence</span>
              <h3 class="mm-row__title">See the numbers that actually run your business</h3>
              <p class="mm-row__desc">Lead sources, conversion rates, referral partners, pipeline health — all in one view. Stop guessing where your production comes from and start making decisions backed by your own data.</p>
            </div>
          </div>

          <div class="mm-row" data-reveal="up">
            <div class="mm-row__copy">
              <span class="mm-row__eyebrow">AI Business Planning</span>
              <h3 class="mm-row__title">A weekly plan built around your real goals</h3>
              <p class="mm-row__desc">Turn big-picture goals into a focused weekly priority list tied to your actual pipeline. Walk into every week knowing exactly what moves the needle — and what to ignore.</p>
            </div>
            <div class="mm-row__media mm-row__media--phone"><img src="<?php echo TLA_BASE; ?>/assets/loan-officer-business-planning.png" alt="Loan Officer Business Planning" loading="lazy"></div>
          </div>

          <div class="mm-row" data-reveal="up">
            <div class="mm-card-stack">
              <img class="mm-card-stack__img" src="<?php echo TLA_BASE; ?>/assets/what's-inside-office-hours.jpg" alt="Office Hours" loading="lazy">
              <img class="mm-card-stack__img" src="<?php echo TLA_BASE; ?>/assets/what's-inside-talk-to-tim.jpg" alt="Talk to Tim" loading="lazy">
              <img class="mm-card-stack__img" src="<?php echo TLA_BASE; ?>/assets/what's-inside-masterclass.jpg" alt="Masterclass" loading="lazy">
              <img class="mm-card-stack__img" src="<?php echo TLA_BASE; ?>/assets/what's-inside-ai-labs.jpg" alt="AI Labs" loading="lazy">
            </div>
            <div class="mm-row__copy">
              <span class="mm-row__eyebrow">Live Coaching Every Week</span>
              <h3 class="mm-row__title">Bring your real deals to active top producers</h3>
              <p class="mm-row__desc">Weekly Office Hours, monthly Masterclasses, and live group coaching with branch managers, division presidents, and top 1% originators — all still serving families and leading high-producing teams.</p>
            </div>
          </div>

          <div class="mm-row mm-row--flip" data-reveal="up">
            <div class="mm-row__media mm-row__media--phone"><img src="<?php echo TLA_BASE; ?>/assets/sales-coach-phone.png" alt="AI Sales &amp; Scripting Coach on a phone" loading="lazy"></div>
            <div class="mm-row__copy">
              <span class="mm-row__eyebrow">AI Sales &amp; Scripting Coaches</span>
              <h3 class="mm-row__title">The right words for every conversation, in your pocket</h3>
              <p class="mm-row__desc">Rate shoppers, Realtor meetings, objections, follow-up — ask your AI Sales &amp; Scripting Coach and get a tailored script on the spot. Stop improvising and start communicating with clarity and precision, right from your phone.</p>
            </div>
          </div>

          <div class="mm-row" data-reveal="up">
            <div class="mm-row__media mm-row__media--phone"><img src="<?php echo TLA_BASE; ?>/assets/scripts-presentation-templates.png" alt="Scripts, presentations, and templates library" loading="lazy"></div>
            <div class="mm-row__copy">
              <span class="mm-row__eyebrow">Scripts, Presentations &amp; Templates</span>
              <h3 class="mm-row__title">Word-for-word language for the conversations that close</h3>
              <p class="mm-row__desc">Discovery calls, rate-shopper responses, objection handling, referral-partner meetings, client-facing presentations — pre-built, proven, and ready to use tomorrow.</p>
            </div>
          </div>

          <div class="mm-row mm-row--flip" data-reveal="up">
            <div class="mm-row__media"><img src="<?php echo TLA_BASE; ?>/assets/private-member-community.png" alt="The Loan Atlas private member community" loading="lazy"></div>
            <div class="mm-row__copy">
              <span class="mm-row__eyebrow">A Community of Originators</span>
              <h3 class="mm-row__title">You're never solving a problem alone again</h3>
              <p class="mm-row__desc">Top producers, mid-career operators, newer LOs, and team leaders working through the same frameworks in real time — with faculty inside the conversation answering the questions that matter today.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── 7b. PLATINUM MARKETING ───────────────────────────────────────────── -->
    <section class="mm-plat" id="platinum" aria-labelledby="plat-heading">
      <div class="mm-plat__glow" aria-hidden="true"></div>
      <div class="container">

        <!-- FULL-WIDTH HEADER -->
        <div class="mm-plat__header" data-reveal="up">
          <span class="eyebrow" style="justify-content: center; margin-bottom: var(--space-md);">
            <span class="eyebrow__text" style="color: var(--brass-bright);">Just Launched for Mastermind</span>
          </span>
          <h2 id="plat-heading" class="mm-plat__title">Platinum Marketing</h2>
          <p class="mm-plat__subhead">
            The mortgage marketing you keep meaning to send — <span class="mm-plat__subhead-em">finally built, polished, and ready to go.</span>
          </p>
        </div>

        <div class="mm-plat__grid">

          <!-- LEFT: copy + checklist + price + CTAs -->
          <div class="mm-plat__copy" data-reveal="up">
            <p class="mm-plat__list-label">What you can build with Platinum</p>
            <ul class="checklist checklist--inverse mm-plat__list">
              <li><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>Refinance flyers</li>
              <li><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>Market update emails</li>
              <li><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>Realtor presentations</li>
              <li><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>Buyer education campaigns</li>
              <li><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>Social graphics</li>
              <li><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>Past-client campaigns</li>
            </ul>

            <!-- Price tag — $100/mo struck through, free with Mastermind -->
            <div class="mm-plat__price">
              <div class="mm-plat__price-tag">
                <span class="mm-plat__price-was">$100<span>/mo</span></span>
                <span class="mm-plat__price-now">$0</span>
              </div>
              <p class="mm-plat__price-note"><strong>Free</strong> with your Mastermind offer — a $1,200/year value, included.</p>
            </div>

            <div class="mm-plat__actions">
              <!-- TODO: Replace MASTERMIND_PLACEHOLDER with the real Mastermind checkout URL -->
              <a class="btn btn--gold btn--lg" href="https://members.theloanatlas.com/checkouts/MASTERMIND_PLACEHOLDER">Join The Loan Atlas with Platinum</a>
              <a class="mm-plat__link" href="/consultation/">Schedule a free coaching session &rarr;</a>
            </div>
          </div>

          <!-- RIGHT: floating asset screenshots -->
          <div class="mm-plat__showcase" data-reveal="scale" aria-label="Examples of marketing assets built with Platinum">
            <figure class="mm-plat__asset mm-plat__asset--flyer">
              <img src="<?php echo TLA_BASE; ?>/assets/platinum-example-1.png" alt="Renovation home loan programs flyer built in Platinum" loading="lazy">
              <figcaption>Refinance &amp; Program Flyers</figcaption>
            </figure>
            <figure class="mm-plat__asset mm-plat__asset--social">
              <img src="<?php echo TLA_BASE; ?>/assets/platinum-example-2.png" alt="Homebuyer success story social graphic built in Platinum" loading="lazy">
              <figcaption>Social Graphics</figcaption>
            </figure>
            <figure class="mm-plat__asset mm-plat__asset--news">
              <img src="<?php echo TLA_BASE; ?>/assets/platinum-example-3.png" alt="Monthly market update newsletter built in Platinum" loading="lazy">
              <figcaption>Market Updates</figcaption>
            </figure>
          </div>

        </div>
      </div>
    </section>

    <!-- ── 9. 8 DISCIPLINES ─────────────────────────────────────────────────── -->
    <section class="disc-section" id="disciplines">
      <div class="disc-section__inner">

        <div class="disc-split">

          <!-- LEFT: heading + body + testimonial -->
          <div class="disc-copy" data-reveal="up">
            <span class="disc-copy__eyebrow">The Training Framework</span>
            <h2 class="disc-copy__title">Built upon the <em>8 Disciplines</em> of Mortgage Origination Mastery.</h2>
            <p class="disc-copy__lede">Nobody taught you how to run a mortgage business. They taught you how to originate loans. The 8 Disciplines cover what's actually required to do both — so you're building something that compounds instead of grinding through a job that resets every Monday.</p>

            <!-- Inline testimonial quote (homepage quote-card style) -->
            <figure class="quote-card quote-card--block">
              <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
              <blockquote class="quote-card__quote">If you did nothing else but go through the System for Selling module &mdash; it&rsquo;ll change your career and your life.</blockquote>
              <figcaption class="quote-card__attr">
                <div class="quote-card__name">Jim Juergens</div>
                <div class="quote-card__org">NEO Home Loans</div>
              </figcaption>
            </figure>
          </div>

          <!-- RIGHT: vertical marquee of module thumbnails -->
          <div class="disc-marquee" aria-hidden="true">
            <div class="disc-marquee__col disc-marquee__col--up">
              <div class="disc-marquee__track">
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/connect-with-target-agents-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/Minimizing-Taxes-Maximizing-Investments-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/fixed-adjustable-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/handling-a-negative-review-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/peak-performance-rituals-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/experiencing-your-genius-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/reverse%20mortgages-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/turning-clients-into-advocates-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/ultimate-business-planning-tool-module-thumbnail.jpg" alt="" /></div>
                <!-- duplicate set for seamless loop -->
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/connect-with-target-agents-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/Minimizing-Taxes-Maximizing-Investments-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/fixed-adjustable-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/handling-a-negative-review-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/peak-performance-rituals-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/experiencing-your-genius-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/reverse%20mortgages-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/turning-clients-into-advocates-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/ultimate-business-planning-tool-module-thumbnail.jpg" alt="" /></div>
              </div>
            </div>

            <div class="disc-marquee__col disc-marquee__col--down">
              <div class="disc-marquee__track">
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/female-empowerment-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/email-optimization-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/gratitude-calls-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/handling-objections-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/employee-reviews-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/the-process-for-creating-content-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/presenting-new-lead-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/take-care-of-your-epople-module-thumbnail.png" alt="" /></div>
                <!-- duplicate set for seamless loop -->
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/female-empowerment-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/email-optimization-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/gratitude-calls-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/handling-objections-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/employee-reviews-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/the-process-for-creating-content-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/presenting-new-lead-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/take-care-of-your-epople-module-thumbnail.png" alt="" /></div>
              </div>
            </div>
          </div>

        </div><!-- /disc-split -->

      </div>
    </section>

    <!-- ── 11. TESTIMONIALS + PROOF ─────────────────────────────────────────── -->
    <section class="lp-testimonials" id="testimonials" aria-labelledby="testimonials-heading">
      <div class="container">
        <div class="center" data-reveal="up" style="max-width: 44rem; margin-inline: auto; margin-bottom: var(--space-xl);">
          <span class="eyebrow" style="justify-content: center; margin-bottom: var(--space-md);">
            <span class="eyebrow__text">Member Results</span>
          </span>
          <h2 id="testimonials-heading" class="section-heading" style="text-align: center;">What Operating From a System Looks Like</h2>
        </div>

        <div class="mm-tcards" data-reveal-stagger="120">

          <figure class="mm-tcard">
            <div class="mm-tcard__photo">
              <img src="<?php echo TLA_BASE; ?>/assets/gian-ceretto.png" alt="Gian Ceretto" loading="lazy">
            </div>
            <div class="mm-tcard__body">
              <span class="mm-tcard__stars" aria-label="5 out of 5 stars">★★★★★</span>
              <blockquote class="mm-tcard__quote">If you're considering joining The Loan Atlas, it's been the best investment I've ever made — and you will make it back within your first month's production.</blockquote>
              <figcaption class="mm-tcard__attr">
                <span class="mm-tcard__name">Gian Ceretto</span>
                <span class="mm-tcard__org">Prosperity Home Mortgage</span>
              </figcaption>
            </div>
          </figure>

          <figure class="mm-tcard">
            <div class="mm-tcard__photo">
              <img src="<?php echo TLA_BASE; ?>/assets/sue botelho.jpeg" alt="Sue Botelho" loading="lazy">
            </div>
            <div class="mm-tcard__body">
              <span class="mm-tcard__stars" aria-label="5 out of 5 stars">★★★★★</span>
              <blockquote class="mm-tcard__quote">I'm a former Loan Toolbox member — the technology Tim had 20 years ago that got me where I am today. The Loan Atlas is Loan Toolbox 2.0. It's worth its weight in gold.</blockquote>
              <figcaption class="mm-tcard__attr">
                <span class="mm-tcard__name">Sue Botelho</span>
                <span class="mm-tcard__org">Waterstone Mortgage</span>
              </figcaption>
            </div>
          </figure>

          <figure class="mm-tcard">
            <div class="mm-tcard__photo">
              <img src="<?php echo TLA_BASE; ?>/assets/edgardo-balentine.jpeg" alt="Edgardo Valentine" loading="lazy">
            </div>
            <div class="mm-tcard__body">
              <span class="mm-tcard__stars" aria-label="5 out of 5 stars">★★★★★</span>
              <blockquote class="mm-tcard__quote">The Loan Atlas makes it so I never have to guess. Anything you could need in your business, you'll find there.</blockquote>
              <figcaption class="mm-tcard__attr">
                <span class="mm-tcard__name">Edgardo Valentine</span>
                <span class="mm-tcard__org">NEO Home Loans</span>
              </figcaption>
            </div>
          </figure>

        </div>

        <!-- Proof stat + Habib quote -->
        <div class="lp-proof-card" data-reveal="up" style="margin-top: clamp(32px, 4vw, 56px);">
          <div class="lp-proof-card__stat-col">
            <span class="lp-proof-card__label">Loan Atlas Members Close</span>
            <p id="proof-heading" class="lp-proof-card__stat" aria-label="$8.2 million plus more per year">
              <span class="lp-proof-card__currency">$</span><span class="lp-proof-card__number" data-countup="8.2">8.2</span><span class="lp-proof-card__unit">M</span><span class="lp-proof-card__plus" aria-hidden="true">+</span>
            </p>
            <p class="lp-proof-card__caption">More in annual production than the industry average.</p>
          </div>

          <figure class="lp-proof-card__test-col">
            <blockquote class="lp-proof-card__quote">"The wealth that's in The Loan Atlas is absolutely incredible. Imagine how valuable it is to have access to the smartest minds in our industry."</blockquote>
            <figcaption class="lp-proof-card__test-head" style="margin-top: var(--space-md); margin-bottom: 0;">
              <div class="lp-proof-card__photo">
                <img src="<?php echo TLA_BASE; ?>/assets/barry-habib.jpg" alt="Barry Habib">
              </div>
              <div>
                <cite class="lp-proof-card__attr-name" style="font-style: normal;">Barry Habib</cite>
                <span class="lp-proof-card__attr-role">Founder &amp; CEO, MBS Highway</span>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- ── 12. MASTERMIND PRICING ───────────────────────────────────────────── -->
    <section class="mm-pricing" id="pricing" aria-labelledby="pricing-heading">
      <div class="container">
        <div class="center" data-reveal="up" style="max-width: 46rem; margin-inline: auto;">
          <span class="eyebrow" style="justify-content: center; margin-bottom: var(--space-md);">
            <span class="eyebrow__text" style="color: var(--brass-bright);">Your Mastermind Offer</span>
          </span>
          <h2 id="pricing-heading" class="t-display" style="color: #ffffff; font-weight: 800; margin-bottom: var(--space-sm);">One Membership. <span style="background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">A Price Only You Get.</span></h2>
          <p class="t-body-lg" style="color: rgba(255, 255, 255, 0.68);">Full access to everything above — the AI systems, live coaching, the curriculum, the community — at the exclusive Mastermind Summit rate.</p>
        </div>

        <article class="mm-plan" data-reveal="scale">
          <div class="mm-plan__lockup" aria-label="The Loan Atlas — official Mastermind Summit 2026 offer">
            <img class="mm-plan__lockup-atlas" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="The Loan Atlas" />
            <span class="mm-plan__lockup-x" aria-hidden="true">×</span>
            <img class="mm-plan__lockup-mm" src="<?php echo TLA_BASE; ?>/assets/mastermind-logo.webp" alt="Mastermind Summit 2026" />
          </div>
          <h3 class="mm-plan__hero-title"><span class="mm-plan__hero-plat">Platinum</span> Super Bonus</h3>

          <div class="mm-plan__price-row">
            <div>
              <div class="mm-plan__price mm-plan__price--first">$49<small>First Month</small></div>
            </div>
            <span class="mm-plan__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
            </span>
            <div>
              <div class="mm-plan__then">$249<span style="font-size: 0.4em;">/mo</span><small>Months 2&ndash;12 · Locked In</small></div>
            </div>
          </div>

          <p class="mm-plan__save"><em>$2,600 in total savings</em> vs. the regular $449/mo</p>

          <ul class="mm-plan__list">
            <li>
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              5 AI-powered systems to help you close twice the loans in half the time
            </li>
            <li>
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Live weekly and monthly coaching sessions
            </li>
            <li>
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              200+ training modules
            </li>
            <li>
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Full library of scripts, templates, and playbooks
            </li>
            <li>
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Platinum Marketing upgrade included
            </li>
            <li>
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              New tools and content added every month
            </li>
          </ul>

          <div class="mm-plan__cta">
            <!-- TODO: Replace MASTERMIND_PLACEHOLDER with the real Mastermind checkout URL -->
            <a class="btn btn--gold btn--lg" href="https://members.theloanatlas.com/checkouts/MASTERMIND_PLACEHOLDER"
              style="font-size: 1.0625rem; padding: 18px 44px; box-shadow: 0 8px 28px rgba(201, 150, 28, 0.32);">
              Claim Your $49 First Month
            </a>
            <a href="/consultation/" style="font-size: 0.9375rem; color: rgba(255,255,255,0.7); text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness: 1px;">
              Have questions? Book a free coaching session
            </a>
          </div>
          <p class="mm-plan__fine">12-month commitment. Offer exclusively for Mastermind Summit 2026 attendees. Available to new members only.</p>
        </article>
      </div>
    </section>

  </main>

  <!-- ── Footer (standard site chrome) ──────────────────────────────────────── -->
<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

