<?php
/**
 * Body partial for /5-scripts-for-dominating-point-of-sale/ (TLA Full HTML template).
 * Generated from public/5-scripts.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = '5 Essential Scripts for Dominating the Point of Sale | Free Download from The Loan Atlas';
$tla_description = 'Free word-for-word scripts for the 5 objections that kill mortgage deals at the point of sale — rate shopping, rate-drop fear, market timing, the stall, and Rocket/Zillow — plus the coaching notes that make them work.';
$tla_active      = '';
?>
  <style>
    .s5 {
      --s5-navy: #021c36;
      --s5-navy-deep: #060e1c;
      --s5-ink: #16202b;
      --s5-ink-dim: #4a5663;
      --s5-line: rgba(2, 28, 54, 0.1);
      --s5-cream: #f7f4ec;
      --s5-brass: #c9961c;
      --s5-brass-bright: #eac25a;
      --s5-grad: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      --s5-darkband: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      color: var(--s5-ink);
      background: #fbfaf6;
      overflow-x: clip;
    }

    .s5 .s5-wrap { max-width: 1200px; margin-inline: auto; padding-inline: 24px; }

    /* Shared bits ----------------------------------------------------------- */
    .s5 .s5-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--s5-brass);
      margin: 0 0 18px;
    }
    .s5 .s5-eyebrow::before {
      content: '';
      width: 26px;
      height: 2px;
      background: var(--s5-grad);
      border-radius: 2px;
    }
    .s5 .s5-eyebrow--ondark { color: var(--s5-brass-bright); }

    .s5 .s5-grad {
      background: var(--s5-grad);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .s5 .s5-cta {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.0625rem;
      letter-spacing: -0.01em;
      padding: 18px 34px;
      border: none;
      border-radius: 999px;
      cursor: pointer;
      background: var(--s5-grad);
      color: #1a1205;
      box-shadow: 0 10px 28px -8px rgba(201, 150, 28, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.4);
      transition: transform 200ms cubic-bezier(0.22, 1, 0.36, 1), box-shadow 200ms ease;
    }
    .s5 .s5-cta:hover { transform: translateY(-2px); box-shadow: 0 16px 38px -10px rgba(201, 150, 28, 0.7); }
    .s5 .s5-cta svg { width: 18px; height: 18px; stroke: currentColor; stroke-width: 2.5; fill: none; transition: transform 200ms ease; }
    .s5 .s5-cta:hover svg { transform: translateX(4px); }
    .s5 .s5-cta--ghost {
      background: transparent;
      color: #fff;
      box-shadow: inset 0 0 0 1.5px rgba(255, 255, 255, 0.28);
    }
    .s5 .s5-cta--ghost:hover { box-shadow: inset 0 0 0 1.5px rgba(255, 255, 255, 0.55); }
    /* block variant — matches the form's gold submit button (full-width rounded
       rectangle, uppercase, no arrow). */
    .s5 .s5-cta--block {
      display: flex;
      width: 100%;
      justify-content: center;
      border-radius: 12px;
      padding: 18px 28px;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      font-size: 1rem;
    }

    /* ── 1. HERO — copy left, download form right ───────────────────────────── */
    .s5 .s5-hero {
      position: relative;
      padding-block: clamp(48px, 7vw, 96px);
      /* white with a very subtle blue gradient wash */
      background: linear-gradient(180deg, #ffffff 0%, #eef3f9 100%);
      overflow: hidden;
    }
    /* Background photo: right half of the hero band, full-bleed to the right edge,
       fading into the white background on its left so the seam is soft. */
    .s5 .s5-hero__bgphoto {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      /* seam sits roughly mid-way behind the form card, not at the section center */
      width: 30%;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      pointer-events: none;
      z-index: 0;
    }
    @media (max-width: 939px) {
      /* stacked layout — the photo behind the copy hurts legibility, so hide it */
      .s5 .s5-hero__bgphoto { display: none; }
    }
    .s5 .s5-hero__grid {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(40px, 5vw, 72px);
      align-items: center;
    }
    @media (min-width: 940px) {
      .s5 .s5-hero__grid { grid-template-columns: minmax(0, 1.08fr) minmax(0, 0.92fr); }
    }
    .s5 .s5-hero__copy { position: relative; }
    /* Hero eyebrow — larger, with a brass keyline (left rule on this layout). */
    .s5 .s5-hero__eyebrow {
      display: flex;
      align-items: center;
      gap: 14px;
      margin: 0 0 22px;
      font-family: var(--font-body);
      font-weight: 700;
      font-size: clamp(0.8125rem, 0.74rem + 0.3vw, 0.9375rem);
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--s5-brass);
      text-wrap: balance;
    }
    .s5 .s5-hero__eyebrow-logo {
      flex: none;
      width: auto;
      height: 40px;
      object-fit: contain;
      display: block;
    }
    .s5 .s5-hero__eyebrow-rule {
      flex: none;
      width: 1px;
      align-self: stretch;
      min-height: 26px;
      background: rgba(2, 28, 54, 0.22);
    }
    .s5 .s5-hero__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.25rem, 1.4rem + 3.6vw, 3.75rem);
      line-height: 1.04;
      letter-spacing: -0.03em;
      margin: 0 0 22px;
      color: var(--s5-navy);
      text-wrap: balance;
    }
    .s5 .s5-hero__lede {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 0.98rem + 0.5vw, 1.25rem);
      line-height: 1.6;
      color: var(--s5-ink-dim);
      max-width: 50ch;
      margin: 0 0 24px;
    }
    .s5 .s5-hero__lede strong { color: var(--s5-ink); font-weight: 600; }
    .s5 .s5-hero__points {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      gap: 12px 22px;
    }
    .s5 .s5-hero__points li {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.9375rem;
      font-weight: 500;
      color: var(--s5-ink);
    }
    .s5 .s5-hero__points svg {
      width: 20px; height: 20px; flex: none;
      stroke: var(--s5-brass); stroke-width: 2.5; fill: none;
      padding: 3px; border-radius: 999px; background: rgba(234, 194, 90, 0.16);
    }
    /* same checks on a dark band (closing CTA) */
    .s5 .s5-hero__points--ondark li { color: rgba(255, 255, 255, 0.9); }
    .s5 .s5-hero__points--ondark svg { stroke: var(--s5-brass-bright); }
    .s5 .s5-close__copy .s5-hero__points { margin-top: 26px; }

    /* ── 2. PROBLEM — copy + the kept hero photo with floating objections ───── */
    .s5 .s5-problem {
      position: relative;
      background: var(--s5-darkband);
      color: #fff;
      padding-block: clamp(64px, 8vw, 108px);
      overflow: hidden;
    }
    .s5 .s5-problem::before {
      content: '';
      position: absolute;
      top: -20%; right: -10%;
      width: 50%; height: 70%;
      background: radial-gradient(circle, rgba(234, 194, 90, 0.14), transparent 70%);
      filter: blur(50px);
      pointer-events: none;
    }
    /* Two columns: large heading left, gold gradient divider, copy + CTA right. */
    .s5 .s5-problem__grid {
      position: relative;
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(28px, 4vw, 48px);
      align-items: center;
    }
    @media (min-width: 880px) {
      .s5 .s5-problem__grid {
        grid-template-columns: minmax(0, 1fr) 1px minmax(0, 1fr);
        gap: clamp(40px, 5vw, 72px);
        align-items: start;
      }
    }
    .s5 .s5-problem__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.1rem, 1.4rem + 3vw, 3.5rem);
      line-height: 1.06;
      letter-spacing: -0.03em;
      margin: 0;
      color: #fff;
      text-wrap: balance;
    }
    /* gold gradient divider — vertical on desktop, horizontal on mobile */
    .s5 .s5-problem__rule {
      align-self: stretch;
      border-radius: 2px;
      background: linear-gradient(180deg, transparent 0%, #c9961c 18%, #eac25a 50%, #c9961c 82%, transparent 100%);
    }
    @media (max-width: 879.98px) {
      .s5 .s5-problem__rule {
        height: 2px;
        width: 72px;
        background: linear-gradient(90deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      }
    }
    .s5 .s5-problem__body {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 1rem + 0.4vw, 1.1875rem);
      line-height: 1.65;
      color: rgba(255, 255, 255, 0.78);
      margin: 0;
    }
    .s5 .s5-problem__body strong { color: #fff; font-weight: 600; }
    .s5 .s5-problem__body + .s5-problem__body { margin-top: 16px; }
    /* Emphasized closing line — bridges into the next section. Distinct from the
       display heading: body font, lighter weight, smaller. */
    .s5 .s5-problem__bridge {
      margin: clamp(24px, 3.5vw, 36px) 0 0;
      font-family: var(--font-body);
      font-weight: 600;
      font-size: clamp(1.1875rem, 1.05rem + 0.7vw, 1.5rem);
      line-height: 1.4;
      letter-spacing: -0.01em;
      color: #fff;
      text-wrap: balance;
    }
    .s5 .s5-problem__bridge .s5-grad { font-weight: 700; }
    .s5 .s5-problem__actions { margin-top: clamp(36px, 5vw, 56px); }
    /* gold block CTA — matches the What's Inside / hero submit button */
    .s5 .s5-problem__cta { width: 100%; max-width: 360px; }

    @keyframes s5Float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-9px); }
    }

    /* ── Download form card — lives in the hero (light) and closing CTA (dark).
       Self-contained single-column card: badge → title → sub → embed. ──────── */
    .s5 .s5-formcard {
      position: relative;
      padding: clamp(24px, 3vw, 36px);
      background: #fff;
      border: 1px solid var(--s5-line);
      border-radius: 24px;
      box-shadow: 0 40px 90px -50px rgba(2, 28, 54, 0.4);
    }
    .s5 .s5-formcard::before {
      content: '';
      position: absolute;
      top: 0; left: 28px; right: 28px;
      height: 4px;
      border-radius: 0 0 4px 4px;
      background: var(--s5-grad);
    }
    .s5 .s5-formcard__badge {
      display: inline-block;
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: #4a3a05;
      background: var(--s5-grad);
      padding: 6px 14px;
      border-radius: 999px;
      margin-bottom: 14px;
    }
    .s5 .s5-formcard__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.5rem, 1.2rem + 1vw, 1.875rem);
      line-height: 1.12;
      letter-spacing: -0.02em;
      margin: 0 0 8px;
      color: var(--s5-navy);
    }
    .s5 .s5-formcard__sub {
      font-size: 1rem;
      line-height: 1.5;
      color: var(--s5-ink-dim);
      margin: 0 0 18px;
    }
    .s5 .s5-formcard__embed {
      border-radius: 16px;
      overflow: hidden;
      background: var(--s5-cream);
      border: 1px solid var(--s5-line);
      min-height: 498px;
    }
    .s5 .s5-formcard__iframe { width: 100%; min-height: 498px; border: 0; display: block; }
    .s5 .s5-formcard__fineprint {
      margin: 12px 2px 0;
      font-size: 0.8125rem;
      color: var(--s5-ink-dim);
      text-align: center;
    }
    /* On the dark closing band the card stays white but the brass border glows. */
    .s5 .s5-formcard--ondark {
      border-color: rgba(234, 194, 90, 0.3);
      box-shadow: 0 50px 100px -50px rgba(0, 0, 0, 0.7), 0 0 0 1px rgba(234, 194, 90, 0.12);
    }

    /* ── 4. WHAT'S INSIDE ──────────────────────────────────────────────────── */
    .s5 .s5-inside { padding-block: clamp(64px, 8vw, 110px); }
    .s5 .s5-inside__head { max-width: 860px; margin: 0 auto clamp(40px, 5vw, 60px); text-align: center; }
    .s5 .s5-inside__head .s5-eyebrow { justify-content: center; }
    .s5 .s5-inside__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.1rem, 1.4rem + 2.8vw, 3.25rem);
      line-height: 1.08;
      letter-spacing: -0.025em;
      margin: 0 0 18px;
      color: var(--s5-navy);
      text-wrap: balance;
    }
    .s5 .s5-inside__sub { font-size: clamp(1.0625rem, 1rem + 0.4vw, 1.1875rem); line-height: 1.6; color: var(--s5-ink-dim); margin: 0; }

    /* Two-column layout: scripts cards on the left, photo on the right. */
    .s5 .s5-inside__layout {
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(36px, 5vw, 64px);
      align-items: start;
    }
    @media (min-width: 960px) {
      .s5 .s5-inside__layout { grid-template-columns: minmax(0, 1.15fr) minmax(0, 0.85fr); }
    }

    .s5 .s5-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 16px;
    }
    @media (min-width: 560px) and (max-width: 959.98px) {
      .s5 .s5-grid { grid-template-columns: repeat(2, 1fr); }
    }

    /* Photo column — sticks in view as the cards scroll past on desktop. */
    .s5 .s5-inside__stage { position: relative; }
    @media (min-width: 960px) {
      .s5 .s5-inside__stage { position: sticky; top: 96px; }
    }
    /* Photo + floating cards live in their own frame so the cards' inset:0
       anchors to the photo, not the stage (which also holds the CTA below). */
    .s5 .s5-inside__frame { position: relative; }
    .s5 .s5-inside__glow {
      position: absolute;
      inset: -8% -6% -12% -6%;
      z-index: 0;
      background: radial-gradient(60% 55% at 55% 40%, rgba(234, 194, 90, 0.28), transparent 70%);
      filter: blur(46px);
      pointer-events: none;
    }
    .s5 .s5-inside__photo {
      position: relative;
      z-index: 1;
      width: 100%;
      aspect-ratio: 4 / 3;
      object-fit: cover;
      border-radius: 24px;
      box-shadow: 0 40px 80px -34px rgba(2, 28, 54, 0.5);
    }
    .s5 .s5-inside__cards {
      position: absolute;
      inset: 0;
      z-index: 2;
      list-style: none;
      margin: 0;
      padding: 0;
      pointer-events: none;
    }
    /* CTA below the photo in the What's Inside stage */
    .s5 .s5-inside__cta { position: relative; z-index: 3; margin-top: 36px; }
    .s5 .s5-inside__floatcard {
      position: absolute;
      display: flex;
      align-items: flex-start;
      gap: 8px;
      max-width: 13.5rem;
      padding: 12px 15px;
      font-family: var(--font-body);
      font-size: 0.875rem;
      font-weight: 600;
      line-height: 1.35;
      color: var(--s5-navy);
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.8);
      border-radius: 14px;
      box-shadow: 0 18px 38px -14px rgba(2, 28, 54, 0.4);
      animation: s5Float 7s ease-in-out infinite;
    }
    .s5 .s5-inside__floatcard-q {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.5rem;
      line-height: 0.8;
      color: var(--s5-brass);
      flex: none;
    }
    .s5 .s5-inside__floatcard:nth-child(1) { top: 4%;  left: -10%; animation-delay: 0s; }
    .s5 .s5-inside__floatcard:nth-child(2) { top: 30%; right: -12%; animation-delay: 1.1s; }
    .s5 .s5-inside__floatcard:nth-child(3) { bottom: 28%; left: -11%; animation-delay: 2.2s; }
    .s5 .s5-inside__floatcard:nth-child(4) { bottom: 1%; right: -8%; animation-delay: 0.6s; }
    .s5 .s5-inside__floatcard:nth-child(5) { display: none; }
    @media (min-width: 1180px) {
      .s5 .s5-inside__floatcard:nth-child(5) { display: flex; top: 56%; left: 44%; animation-delay: 1.7s; }
    }
    /* On small screens, drop the floating cards (they need the photo width). */
    @media (max-width: 620px) {
      .s5 .s5-inside__cards { display: none; }
      .s5 .s5-inside__photo { aspect-ratio: 16 / 11; }
    }

    /* ── 2. TESTIMONIALS — homepage quote-card style (hero copy + coach band) ── */
    .s5 .s5-herotesti {
      margin-top: 30px;
      display: grid;
      gap: 22px;
    }
    /* quote text with a brass rail down the left edge; no oversized mark */
    .s5 .s5-qc {
      margin: 0;
      padding: 4px 0 4px 20px;
      border-left: 2px solid var(--s5-brass);
    }
    .s5 .s5-qc__quote {
      margin: 0;
      font-family: var(--font-body);
      font-style: italic;
      font-size: 1rem;
      line-height: 1.6;
      color: var(--s5-ink-dim);
    }

    /* dark-band variant (coach section) — extra breathing room from the body copy */
    .s5 .s5-qc--ondark {
      border-left-color: var(--s5-brass-bright);
      margin-top: 32px;
      padding-top: 8px;
      padding-bottom: 8px;
    }
    .s5 .s5-qc--ondark .s5-qc__quote { color: rgba(255, 255, 255, 0.88); }

    .s5 .s5-card {
      position: relative;
      display: flex;
      flex-direction: column;
      padding: 28px 26px;
      background: #fff;
      border: 1px solid var(--s5-line);
      border-radius: 20px;
      box-shadow: 0 1px 2px rgba(2, 28, 54, 0.04);
      overflow: hidden;
      transition: transform 220ms cubic-bezier(0.22, 1, 0.36, 1), box-shadow 220ms ease, border-color 220ms ease;
    }
    .s5 .s5-card::after {
      content: '';
      position: absolute;
      inset: 0 0 auto 0;
      height: 3px;
      background: var(--s5-grad);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 260ms ease;
    }
    .s5 .s5-card:hover { transform: translateY(-4px); box-shadow: 0 22px 44px -22px rgba(2, 28, 54, 0.32); border-color: rgba(201, 150, 28, 0.4); }
    .s5 .s5-card:hover::after { transform: scaleX(1); }
    .s5 .s5-card__num {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 2.5rem;
      line-height: 1;
      letter-spacing: -0.03em;
      background: var(--s5-grad);
      -webkit-background-clip: text; background-clip: text; color: transparent;
      margin-bottom: 14px;
    }
    .s5 .s5-card__q {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.1875rem;
      line-height: 1.3;
      letter-spacing: -0.01em;
      color: var(--s5-navy);
      margin: 0 0 12px;
    }
    .s5 .s5-card__desc {
      font-family: var(--font-body);
      font-size: 0.9375rem;
      line-height: 1.55;
      color: var(--s5-ink-dim);
      margin: 0 0 18px;
    }
    .s5 .s5-card__meta {
      margin-top: auto;
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
    }
    .s5 .s5-card__tag {
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.02em;
      color: var(--s5-ink-dim);
      background: var(--s5-cream);
      border: 1px solid var(--s5-line);
      padding: 5px 11px;
      border-radius: 999px;
    }
    /* CTA tile */
    .s5 .s5-card--cta {
      background: var(--s5-darkband);
      border-color: rgba(234, 194, 90, 0.25);
      justify-content: center;
      align-items: flex-start;
    }
    .s5 .s5-card--cta::after { display: none; }
    .s5 .s5-card--cta:hover { transform: translateY(-4px); box-shadow: 0 22px 48px -22px rgba(0, 0, 0, 0.6); }
    .s5 .s5-card__icon {
      display: inline-flex; align-items: center; justify-content: center;
      width: 46px; height: 46px; border-radius: 12px;
      background: var(--s5-grad); margin-bottom: 16px;
    }
    .s5 .s5-card__icon svg { width: 22px; height: 22px; stroke: #1a1205; stroke-width: 2.5; fill: none; }
    .s5 .s5-card--cta .s5-card__q { color: #fff; }
    .s5 .s5-card__lead { font-size: 0.9375rem; line-height: 1.55; color: rgba(255, 255, 255, 0.75); margin: 0 0 18px; }
    .s5 .s5-card__link {
      font-family: var(--font-display); font-weight: 700; font-size: 0.9375rem;
      color: var(--s5-brass-bright); text-decoration: none;
      display: inline-flex; align-items: center; gap: 6px;
    }
    .s5 .s5-card__link:hover { color: #fff; }

    /* ── 5. INLINE CALLOUT — full-width Sales & Scripting Coach band ─────────
       Full-bleed section: the GPT screenshot sits as a fixed background behind
       a navy gradient overlay; copy on the left; the coach phone bleeds off the
       bottom edge on the right. */
    .s5 .s5-coachband {
      position: relative;
      isolation: isolate;
      overflow: hidden;
      padding-block: clamp(56px, 8vw, 104px);
      background: var(--s5-navy-deep);
      color: #fff;
    }
    /* blurred screenshot backdrop + dark overlay (blurred together) */
    .s5 .s5-coachband::after {
      content: '';
      position: absolute;
      inset: 0;
      z-index: -2;
      background:
        linear-gradient(105deg, rgba(2, 14, 30, 0.97) 0%, rgba(2, 28, 54, 0.93) 50%, rgba(6, 14, 28, 0.95) 100%),
        url("<?php echo TLA_BASE; ?>/assets/sales-scripting-gpt-screenshot.png");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      filter: blur(3px);
      transform: scale(1.03);
      pointer-events: none;
    }
    /* brass glow accent over the overlay */
    .s5 .s5-coachband::before {
      content: '';
      position: absolute;
      top: -10%; left: -6%;
      width: 55%; height: 80%;
      z-index: -1;
      background: radial-gradient(circle, rgba(234, 194, 90, 0.18), transparent 70%);
      filter: blur(60px);
      pointer-events: none;
    }
    .s5 .s5-coach {
      position: relative;
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(24px, 3vw, 48px);
      align-items: start;
    }
    @media (min-width: 880px) {
      .s5 .s5-coach { grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr); }
    }
    .s5 .s5-coach__copy {
      position: relative;
      z-index: 1;
      max-width: 36rem;
      /* breathing room at the bottom so the copy clears the section edge */
      padding-bottom: clamp(40px, 6vw, 80px);
    }
    .s5 .s5-coach__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.8rem, 1.3rem + 2vw, 2.75rem);
      line-height: 1.12;
      letter-spacing: -0.02em;
      margin: 0 0 20px;
      color: #fff;
      text-wrap: balance;
    }
    .s5 .s5-coach__body {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 1rem + 0.4vw, 1.1875rem);
      line-height: 1.65;
      color: rgba(255, 255, 255, 0.82);
      margin: 0;
    }
    .s5 .s5-coach__body strong { color: #fff; font-weight: 600; }
    /* gold block CTA below the testimonial */
    .s5 .s5-coach__cta { margin-top: clamp(28px, 4vw, 40px); width: 100%; max-width: 360px; }

    /* Sample conversation with the Sales & Scripting Coach — a white bot bubble
       with the Loan Atlas avatar + a dark right-aligned user bubble that types. */
    .s5 .s5-coach__chat {
      position: relative;
      z-index: 1;
      align-self: center;
      display: flex;
      flex-direction: column;
      gap: 16px;
      width: 100%;
      max-width: 440px;
      margin-inline: auto;
    }
    /* one turn = an avatar + bubble (bot) or a right-aligned bubble (user). */
    .s5 .s5-coach__turn {
      display: flex;
      align-items: flex-end;
      gap: 14px;
      max-width: 96%;
      /* steps reveal in sequence as the conversation plays */
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 450ms ease, transform 450ms cubic-bezier(0.22, 1, 0.36, 1);
    }
    .s5 .s5-coach__turn.is-in { opacity: 1; transform: translateY(0); }
    .s5 .s5-coach__turn--bot { align-self: flex-start; }
    .s5 .s5-coach__turn--user { align-self: flex-end; justify-content: flex-end; }
    .s5 .s5-coach__turn--user .s5-coach__msg { max-width: 100%; }
    /* show the caret on the turn currently being typed */
    .s5 .s5-coach__turn.is-typing .s5-coach__caret { display: inline-block; }
    .s5 .s5-coach__avatar {
      flex: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border-radius: 9999px;
      background: var(--s5-navy);
      border: 1px solid rgba(234, 194, 90, 0.45);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.35);
    }
    .s5 .s5-coach__avatar img { width: 30px; height: 30px; object-fit: contain; display: block; }
    .s5 .s5-coach__msg {
      padding: 16px 22px;
      font-family: var(--font-body);
      font-size: clamp(0.9375rem, 0.88rem + 0.3vw, 1.0625rem);
      line-height: 1.5;
      border-radius: 20px;
    }
    .s5 .s5-coach__msg--bot {
      background: #ffffff;
      color: var(--s5-ink);
      border-bottom-left-radius: 6px;
      box-shadow: 0 12px 30px -8px rgba(0, 0, 0, 0.4);
    }
    .s5 .s5-coach__msg--bot em { font-style: italic; color: var(--s5-navy); }
    .s5 .s5-coach__msg--user {
      background: linear-gradient(135deg, #0c2440 0%, #021c36 100%);
      color: #ffffff;
      border: 1px solid rgba(234, 194, 90, 0.35);
      border-bottom-right-radius: 6px;
    }
    .s5 .s5-coach__typed { white-space: pre-wrap; }
    /* caret only shows on the turn that is actively being typed */
    .s5 .s5-coach__caret {
      display: none;
      width: 2px;
      height: 1.05em;
      margin-left: 1px;
      background: var(--s5-brass-bright);
      vertical-align: text-bottom;
      animation: s5CaretBlink 1s steps(2, end) infinite;
    }
    @keyframes s5CaretBlink {
      0%, 50% { opacity: 1; }
      51%, 100% { opacity: 0; }
    }
    @media (prefers-reduced-motion: reduce) {
      .s5 .s5-coach__caret { animation: none; }
      .s5 .s5-coach__turn { opacity: 1; transform: none; transition: none; }
    }

    /* ── 5. CLOSING CTA — copy left, download form right ────────────────────── */
    .s5 .s5-close {
      position: relative;
      padding-block: clamp(56px, 8vw, 104px);
      background: var(--s5-darkband);
      color: #fff;
      overflow: hidden;
    }
    .s5 .s5-close::before {
      content: '';
      position: absolute; inset: 0;
      background: radial-gradient(60% 70% at 18% 30%, rgba(234, 194, 90, 0.16), transparent 65%);
      pointer-events: none;
    }
    /* Single centered column: header + body span the page, then the form below. */
    .s5 .s5-close__grid {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      gap: clamp(32px, 4vw, 48px);
    }
    .s5 .s5-close__copy { position: relative; width: 100%; }
    .s5 .s5-close .s5-formcard { width: 100%; max-width: 620px; }
    .s5 .s5-close__copy .s5-hero__points { justify-content: center; }
    .s5 .s5-close__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2rem, 1.4rem + 2.6vw, 3rem);
      line-height: 1.08;
      letter-spacing: -0.025em;
      margin: 0 0 20px;
      color: #fff;
      text-wrap: balance;
    }
    .s5 .s5-close__sub {
      font-size: clamp(1.0625rem, 1rem + 0.4vw, 1.25rem);
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.78);
      margin: 0 0 18px;
      max-width: 46ch;
      margin-inline: auto;
    }
    .s5 .s5-close__micro { margin: 0; font-size: 0.875rem; color: rgba(255, 255, 255, 0.6); }

    /* ── Scroll reveal (page-scoped, animations.js-independent fallback) ───── */
    .s5 [data-s5-reveal] {
      opacity: 0;
      transform: translateY(22px);
      transition: opacity 700ms cubic-bezier(0.22, 1, 0.36, 1), transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
    }
    .s5 [data-s5-reveal].is-in { opacity: 1; transform: none; }

    /* ── Reduced motion ────────────────────────────────────────────────────── */
    @media (prefers-reduced-motion: reduce) {
      .s5 .s5-inside__floatcard { animation: none; }
      .s5 [data-s5-reveal] { opacity: 1; transform: none; transition: none; }
      .s5 .s5-card, .s5 .s5-cta { transition: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main s5">

    <!-- ──────────── 1 · HERO — copy left, download form right ──────────── -->
    <section class="s5-hero" id="get-the-scripts" aria-labelledby="s5-hero-heading">
      <!-- Background photo: white on the left half, image filling the right half of the
           band (full-bleed to the right edge), so it sits halfway behind the form card. -->
      <div class="s5-hero__bgphoto" aria-hidden="true"
        style="background-image: url('<?php echo TLA_BASE; ?>/assets/5-scripts-hero.png');"></div>
      <div class="s5-wrap s5-hero__grid">
        <div class="s5-hero__copy" data-s5-reveal>
          <p class="s5-hero__eyebrow">
            <img class="s5-hero__eyebrow-logo" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-color.png"
              alt="The Loan Atlas" height="40" />
            <span class="s5-hero__eyebrow-rule" aria-hidden="true"></span>
            Free Sales Scripts
          </p>
          <h1 id="s5-hero-heading" class="s5-hero__title">
            Stop losing borrowers the moment they <span class="s5-grad">ask a difficult question.</span>
          </h1>
          <p class="s5-hero__lede s5-hero__lede--tight">
            The worst time to think about what you're going to say is when you need to say it.
            These 5 scripts will help you stay calm, ask better questions, and keep control of the
            conversation.
          </p>
          <ul class="s5-hero__points">
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> Free download</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> Instant access</li>
          </ul>
          <div class="s5-herotesti">
            <figure class="s5-qc">
              <blockquote class="s5-qc__quote">&ldquo;It helped me save two loans so far from going to a competitor. It's fantastic to see these work!&rdquo;</blockquote>
            </figure>
            <figure class="s5-qc">
              <blockquote class="s5-qc__quote">&ldquo;This is literally the best tool I have EVER used in 40 years in the business!&rdquo;</blockquote>
            </figure>
          </div>
        </div>

        <!-- Download form (right). LeadConnector embed — see note at the
             closing-CTA copy for the shared PLACEHOLDER_FORM_ID TODO. -->
        <div class="s5-formcard" data-s5-reveal>
          <h2 class="s5-formcard__title">Get the 5 Essential Scripts for Dominating the Point of Sale</h2>
          <div class="s5-formcard__embed">
            <iframe
              src="https://api.leadconnectorhq.com/widget/form/sKtyqXeMElEIzI277jwu"
              class="s5-formcard__iframe"
              title="LM: 5 Essential Scripts for Dominating the Point of Sale"
              scrolling="no"
              id="inline-sKtyqXeMElEIzI277jwu-hero"
              data-layout="{'id':'INLINE'}"
              data-trigger-type="alwaysShow"
              data-trigger-value=""
              data-activation-type="alwaysActivated"
              data-activation-value=""
              data-deactivation-type="neverDeactivate"
              data-deactivation-value=""
              data-form-name="LM: 5 Essential Scripts for Dominating the Point of Sale"
              data-height="498"
              data-layout-iframe-id="inline-sKtyqXeMElEIzI277jwu-hero"
              data-form-id="sKtyqXeMElEIzI277jwu"></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- ───────────── 3 · PROBLEM — heading left | gold divider | copy right ───────────── -->
    <section class="s5-problem" aria-labelledby="s5-problem-heading">
      <div class="s5-wrap s5-problem__grid" data-s5-reveal>
        <div class="s5-problem__head">
          <h2 id="s5-problem-heading" class="s5-problem__title">
            The point of sale is where good deals <span class="s5-grad">start slipping.</span>
          </h2>
          <div class="s5-problem__actions">
            <a class="s5-cta s5-cta--block s5-problem__cta" href="#get-the-scripts" data-scroll-to-form>
              Send Me the Scripts
            </a>
          </div>
        </div>

        <div class="s5-problem__rule" aria-hidden="true"></div>

        <div class="s5-problem__copy">
          <p class="s5-problem__body">
            A borrower asks about rate. Then another lender. Then the market. Then whether they
            should wait.
          </p>
          <p class="s5-problem__body">
            Then they say they need to think about it, and suddenly you are chasing a deal that
            felt solid five minutes ago.
          </p>
          <p class="s5-problem__bridge">
            That's because the worst time to think about what you're going to say is the
            <span class="s5-grad">moment you need to say it.</span>
          </p>
        </div>
      </div>
    </section>


    <!-- ──────────────────── 4 · WHAT'S INSIDE — cards left, photo right ──────────────────── -->
    <section class="s5-inside" aria-labelledby="s5-inside-heading">
      <div class="s5-wrap">
        <header class="s5-inside__head" data-s5-reveal>
          <span class="s5-eyebrow">What's Inside</span>
          <h2 id="s5-inside-heading" class="s5-inside__title">
            5 Essential Scripts for <span class="s5-grad">Dominating the Point of Sale</span>
          </h2>
          <p class="s5-inside__sub">
            Each script includes a short version, a longer conversational version, and coaching
            notes on how to use it.
          </p>
        </header>

        <div class="s5-inside__layout">
        <div class="s5-grid">
          <article class="s5-card" data-s5-reveal>
            <span class="s5-card__num">01</span>
            <h3 class="s5-card__q">“What rate can you offer today? Can you beat my credit union’s rate?”</h3>
            <p class="s5-card__desc">
              Learn how to avoid getting reduced to a number before you’ve built value — and how to
              reframe the rate conversation around structure, options, and the borrower’s full outcome.
            </p>
          </article>

          <article class="s5-card" data-s5-reveal>
            <span class="s5-card__num">02</span>
            <h3 class="s5-card__q">“What if rates go down right after we lock the rate with you?”</h3>
            <p class="s5-card__desc">
              Use this when borrowers are worried about making the wrong move. You’ll learn how to
              respond without overpromising, overexplaining, or losing authority.
            </p>
          </article>

          <article class="s5-card" data-s5-reveal>
            <span class="s5-card__num">03</span>
            <h3 class="s5-card__q">“I don’t know if now is the right time with the market.”</h3>
            <p class="s5-card__desc">
              Shift the conversation from market timing to personal timing, so borrowers can compare
              real scenarios instead of freezing in uncertainty.
            </p>
          </article>

          <article class="s5-card" data-s5-reveal>
            <span class="s5-card__num">04</span>
            <h3 class="s5-card__q">“Can I think about it and get back to you?”</h3>
            <p class="s5-card__desc">
              Stop letting this objection disappear into the follow-up black hole. Learn how to
              uncover what they actually need to think through and guide them back to a clearer decision.
            </p>
          </article>

          <article class="s5-card" data-s5-reveal>
            <span class="s5-card__num">05</span>
            <h3 class="s5-card__q">“How are you guys different from Rocket or Zillow?”</h3>
            <p class="s5-card__desc">
              Answer comparison questions without sounding defensive, generic, or commoditized — and
              earn the right to go deeper before making your value proposition.
            </p>
          </article>
        </div>

          <!-- Photo (right) — the loan-officer image with the five objections
               floating over it; sticks in view as the cards scroll past. -->
          <div class="s5-inside__stage" data-s5-reveal aria-label="The 5 objections these scripts answer">
            <div class="s5-inside__frame">
              <div class="s5-inside__glow" aria-hidden="true"></div>
              <img class="s5-inside__photo" src="<?php echo TLA_BASE; ?>/assets/5-scripts-hero.png"
                alt="A loan officer on the phone with a client" loading="lazy"
                width="720" height="540" />
            </div>
            <a class="s5-cta s5-cta--block s5-inside__cta" href="#get-the-scripts" data-scroll-to-form>
              Send Me the Scripts
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ──────────── 5 · INLINE CALLOUT — full-width Sales & Scripting Coach ──────────
         Full-bleed band: GPT screenshot background under a navy overlay; copy left;
         the coach phone bleeds off the bottom edge on the right. -->
    <section class="s5-coachband" aria-labelledby="s5-coach-heading">
      <div class="s5-wrap">
        <div class="s5-coach" data-s5-reveal>

          <div class="s5-coach__copy">
            <h2 id="s5-coach-heading" class="s5-coach__title">
              These scripts come straight out of the <span class="s5-grad">Loan Atlas AI Sales &amp; Scripting Coach.</span>
            </h2>
            <p class="s5-coach__body">
              <strong>The right words for every conversation.</strong> Trained on hundreds of hours
              of coaching calls, training modules, top-producer interviews, and masterclasses from
              originators who have closed over $29 Billion in loan volume.
            </p>
            <figure class="s5-qc s5-qc--ondark">
              <blockquote class="s5-qc__quote">&ldquo;GAME CHANGER!! It walked me through my whole loan scenario start to finish. It didn't matter if it was 8:00 am or 1:00 am — it was RIGHT THERE when I needed it. I am so confident now!&rdquo;</blockquote>
            </figure>
            <a class="s5-cta s5-cta--block s5-coach__cta" href="#get-the-scripts" data-scroll-to-form>
              Send Me the Scripts
            </a>
          </div>

          <!-- A live sample conversation with the Sales & Scripting Coach: the
               user types a question, the coach replies, the user follows up, and
               the coach delivers the script. Each step reveals in sequence. -->
          <div class="s5-coach__chat" data-s5-chat aria-label="A sample conversation with the Loan Atlas Sales &amp; Scripting Coach">
            <!-- 1 · user (typed) -->
            <div class="s5-coach__turn s5-coach__turn--user" data-s5-step="0">
              <div class="s5-coach__msg s5-coach__msg--user">
                <span class="s5-coach__typed"></span><span class="s5-coach__caret"></span>
              </div>
              <span class="s5-coach__say" hidden>I'm trying to get more referrals from my clients after their loans close.</span>
            </div>
            <!-- 2 · coach -->
            <div class="s5-coach__turn s5-coach__turn--bot" data-s5-step="1">
              <span class="s5-coach__avatar"><img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="The Loan Atlas" /></span>
              <div class="s5-coach__msg s5-coach__msg--bot">
                What are you currently saying (if anything) when you ask for referrals after closing? And are you making that ask on a call, text, email — or a mix?
              </div>
            </div>
            <!-- 3 · user (typed) -->
            <div class="s5-coach__turn s5-coach__turn--user" data-s5-step="2">
              <div class="s5-coach__msg s5-coach__msg--user">
                <span class="s5-coach__typed"></span><span class="s5-coach__caret"></span>
              </div>
              <span class="s5-coach__say" hidden>Nothing right now. I'll be making the ask on a call.</span>
            </div>
            <!-- 4 · coach (the script) -->
            <div class="s5-coach__turn s5-coach__turn--bot" data-s5-step="3">
              <span class="s5-coach__avatar"><img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="The Loan Atlas" /></span>
              <div class="s5-coach__msg s5-coach__msg--bot">
                Got it — this is about earning the right to ask through the experience, then confidently claiming the next step with a clear call to action. Try this: <em>&ldquo;It's been a pleasure getting this done for you. Most of my business comes from people like you — so if a friend or coworker mentions buying or refinancing, would you feel comfortable connecting us?&rdquo;</em>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ──────────── 5 · CLOSING CTA — copy left, download form right ──────────── -->
    <section class="s5-close" aria-labelledby="s5-close-heading">
      <div class="s5-wrap s5-close__grid">
        <div class="s5-close__copy" data-s5-reveal>
          <h2 id="s5-close-heading" class="s5-close__title">
            Stop losing deals because you didn't have the <span class="s5-grad">right words ready.</span>
          </h2>
          <p class="s5-close__sub">
            Loan officers who prepare for the point of sale close more deals, feel more confident, and
            finally stop leaving money on the table.
          </p>
          <ul class="s5-hero__points s5-hero__points--ondark">
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> Free download</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> Instant access</li>
          </ul>
        </div>

        <!--
          LEAD-CAPTURE FORM — LeadConnector (GoHighLevel) embed (also in the hero).
          Same form (sKtyqXeMElEIzI277jwu) embedded twice; each iframe needs a unique id
          / data-layout-iframe-id so form_embed.js (loaded at the bottom of this file)
          can resize them independently.
        -->
        <div class="s5-formcard s5-formcard--ondark" data-s5-reveal>
          <h2 class="s5-formcard__title">Get the 5 Essential Scripts for Dominating the Point of Sale</h2>
          <div class="s5-formcard__embed">
            <iframe
              src="https://api.leadconnectorhq.com/widget/form/sKtyqXeMElEIzI277jwu"
              class="s5-formcard__iframe"
              title="LM: 5 Essential Scripts for Dominating the Point of Sale"
              scrolling="no"
              id="inline-sKtyqXeMElEIzI277jwu-close"
              data-layout="{'id':'INLINE'}"
              data-trigger-type="alwaysShow"
              data-trigger-value=""
              data-activation-type="alwaysActivated"
              data-activation-value=""
              data-deactivation-type="neverDeactivate"
              data-deactivation-value=""
              data-form-name="LM: 5 Essential Scripts for Dominating the Point of Sale"
              data-height="498"
              data-layout-iframe-id="inline-sKtyqXeMElEIzI277jwu-close"
              data-form-id="sKtyqXeMElEIzI277jwu"></iframe>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <!-- LeadConnector form embed runtime (resizes the iframe form) -->
  <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>

  <!-- Page behavior: smooth-scroll CTAs and scroll-reveal. Reduced-motion aware. -->
  <script>
    (function () {
      var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      /* Smooth-scroll every CTA to the lead-capture form. */
      document.querySelectorAll('[data-scroll-to-form]').forEach(function (el) {
        el.addEventListener('click', function (e) {
          e.preventDefault();
          var target = document.getElementById('get-the-scripts');
          if (target) target.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'center' });
        });
      });

      /* Generic scroll-reveal for [data-s5-reveal]. */
      var revealEls = document.querySelectorAll('[data-s5-reveal]');
      if (reduce || !('IntersectionObserver' in window)) {
        revealEls.forEach(function (el) { el.classList.add('is-in'); });
      } else {
        var revObs = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) { entry.target.classList.add('is-in'); revObs.unobserve(entry.target); }
          });
        }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
        revealEls.forEach(function (el) { revObs.observe(el); });
      }

      /* Sales & Scripting Coach sample chat: play the conversation in sequence on
         scroll into view. User turns type out; coach turns fade in after a beat. */
      var chat = document.querySelector('[data-s5-chat]');
      if (chat) {
        var turns = Array.prototype.slice.call(chat.querySelectorAll('.s5-coach__turn'));

        function revealAll() {
          turns.forEach(function (turn) {
            turn.classList.add('is-in');
            var say = turn.querySelector('.s5-coach__say');
            var typed = turn.querySelector('.s5-coach__typed');
            if (say && typed) typed.textContent = say.textContent;
          });
        }

        function playTurn(idx) {
          if (idx >= turns.length) return;
          var turn = turns[idx];
          turn.classList.add('is-in');
          var say = turn.querySelector('.s5-coach__say');
          var typed = turn.querySelector('.s5-coach__typed');
          if (say && typed) {
            // user turn: type the message out, then advance
            turn.classList.add('is-typing');
            var msg = say.textContent, i = 0;
            (function tick() {
              i++;
              typed.textContent = msg.slice(0, i);
              if (i < msg.length) {
                window.setTimeout(tick, 30 + Math.random() * 28);
              } else {
                turn.classList.remove('is-typing');
                window.setTimeout(function () { playTurn(idx + 1); }, 700);
              }
            })();
          } else {
            // coach turn: brief "thinking" beat, then play the next turn
            window.setTimeout(function () { playTurn(idx + 1); }, 1100);
          }
        }

        function runChat() {
          if (reduce) { revealAll(); return; }
          playTurn(0);
        }

        if (reduce || !('IntersectionObserver' in window)) {
          runChat();
        } else {
          var chatObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
              if (entry.isIntersecting) { runChat(); chatObs.unobserve(entry.target); }
            });
          }, { threshold: 0.35 });
          chatObs.observe(chat);
        }
      }

    })();
  </script>
