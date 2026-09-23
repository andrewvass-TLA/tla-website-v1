<?php
/**
 * Body partial for /mbs-seller-advantage/ (TLA Full HTML template).
 * Generated from public/mbs-seller-advantage.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Give Your Partners the Seller Advantage — The Loan Atlas';
$tla_description = 'Download the Seller Advantage templates — a Realtor pitch deck, program handout, and two open house flyer samples — and give your Realtor partners the competitive advantage they need right now.';
$tla_active      = '';
?>
  <style>
    /* Blur-up swatch while the Wistia web component defines itself */
    wistia-player[media-id='1k07af1o60']:not(:defined) {
      background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/1k07af1o60/swatch');
      display: block;
      filter: blur(5px);
      padding-top: 56.25%;
    }

    .naq {
      --naq-navy: #021c36;
      --naq-navy-deep: #060e1c;
      --naq-brass: #c9961c;
      --naq-brass-bright: #eac25a;
      --naq-grad: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      background: var(--background);
    }

    /* ── Header: logo left, savings line + CTA right (matches the questionnaire) ── */
    .site-header--naq .site-header__inner { justify-content: space-between; }
    /* Savings line to the left of the CTA. */
    .naq-header-save {
      font-family: var(--font-body);
      font-weight: 700;
      font-size: 1rem;
      line-height: 1.3;
      letter-spacing: 0.01em;
      color: #ffffff;
      text-align: right;
      max-width: 18rem;
    }
    .naq-header-save__amt {
      font-weight: 800;
      /* Brass gradient hardcoded — the header sits outside <main class="naq">,
         so the --naq-grad token isn't in scope here. */
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }
    /* Enlarged header CTA — bigger pad + text than the base .btn--header.
       chrome.css loads last and sets font-size at ≥540px with 2-class
       specificity, so match it with a 3-class selector to win. */
    .site-header.site-header--naq .btn--header {
      padding: 12px 22px;
      font-size: 1rem;
      border-radius: var(--radius-lg);
    }
    /* Always show the full "Join The Loan Atlas" label. */
    .site-header--naq .btn--header .btn__short { display: none; }
    .site-header--naq .btn--header .btn__full  { display: inline; }

    /* On narrow screens the savings copy won't fit beside the logo + button,
       so drop it entirely — the header keeps just logo + button. (No band
       below the header, so the hero needs no extra top padding here.) */
    @media (max-width: 767.98px) {
      .naq-header-save { display: none; }
      /* Shrink the button so the full "Join The Loan Atlas" label fits beside
         the logo. */
      .site-header.site-header--naq .btn--header {
        padding: 9px 15px;
        font-size: 0.8125rem;
      }
    }
    @media (max-width: 400px) {
      .site-header.site-header--naq .btn--header { padding: 8px 12px; font-size: 0.75rem; }
      .site-header.site-header--naq .brand__logo { height: 24px; }
    }

    /* ══════════════════════════════════════════════════════════════════════════
       HERO — dark band, two columns (copy left · form right)
       ══════════════════════════════════════════════════════════════════════════ */
    .naq-hero {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-top: clamp(48px, 7vw, 104px);
      padding-bottom: clamp(48px, 7vw, 104px);
    }
    .naq-hero__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(32px, 4vw, 56px);
      align-items: center;
    }
    @media (min-width: 900px) {
      .naq-hero__grid {
        grid-template-columns: 1.05fr 0.95fr;
        gap: clamp(40px, 4vw, 72px);
        /* Top-align the columns so the H1 starts level with the form card. */
        align-items: start;
      }
      /* Nudge the copy down by the card's own top padding so the headline and
         the card's title sit on the same line, not just the boxes' edges.
         Blocks sit on a fixed gap (not space-between) so the rhythm stays
         tight regardless of how tall the form card grows. */
      .naq-hero__grid > .naq-hero__copy {
        padding-top: clamp(20px, 2vw, 28px);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        gap: 0;
      }
      /* Proximity: the subhead explains the headline, so it sits tight to it;
         the bigger gap falls before the list, which is its own block. */
      .naq-hero__copy > .naq-hero__title { margin-bottom: clamp(10px, 1vw, 14px); }
      .naq-hero__copy > .naq-hero__sub   { margin-bottom: clamp(28px, 3vw, 40px); }
    }

    /* ── Left column — copy ─────────────────────────────────────────────────── */
    .naq-hero__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.25rem, 1.5rem + 3vw, 3.5rem);
      line-height: 1.1;
      letter-spacing: -0.03em;
      /* Small bottom padding so background-clip: text doesn't crop the
         descender on "g" (Operating). */
      padding-bottom: 0.12em;
      margin: 0 0 var(--space-sm);
      text-wrap: balance;
      background: var(--naq-grad);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }
    .naq-hero__sub {
      font-family: var(--font-body);
      font-weight: 400;
      font-size: clamp(1.125rem, 0.98rem + 0.62vw, 1.4375rem);
      line-height: 1.45;
      letter-spacing: -0.005em;
      color: rgba(255, 255, 255, 0.88);
      margin: 0 0 var(--space-lg);
      text-wrap: balance;
    }
    .naq-hero__lede {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 0.95rem + 0.5vw, 1.25rem);
      line-height: 1.55;
      color: rgba(255, 255, 255, 0.82);
      margin: 0 0 var(--space-md);
      max-width: 34rem;
    }
    .naq-hero__lede strong {
      font-weight: 700;
      background: var(--naq-grad);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }

    /* What you get — brass ✓ bullets */
    .naq-wins {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: clamp(12px, 1.4vw, 16px);
      max-width: 36rem;
    }
    /* Each deliverable sits in its own subtly-lit row so the list reads as a
       set of assets you receive, not as running body copy. */
    .naq-wins__item {
      display: flex;
      align-items: center;
      gap: clamp(14px, 1.6vw, 18px);
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(1.125rem, 1rem + 0.65vw, 1.4375rem);
      line-height: 1.3;
      letter-spacing: -0.015em;
      color: #ffffff;
      background: rgba(255, 255, 255, 0.045);
      border: 1px solid rgba(234, 194, 90, 0.28);
      border-radius: var(--radius-lg);
      padding: clamp(14px, 1.6vw, 18px) clamp(16px, 1.8vw, 22px);
    }
    .naq-wins__check {
      flex: none;
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: var(--naq-grad);
      box-shadow: 0 6px 18px rgba(234, 194, 90, 0.28);
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    .naq-wins__check svg { width: 18px; height: 18px; display: block; }
    @media (max-width: 480px) {
      .naq-wins__check { width: 28px; height: 28px; }
      .naq-wins__check svg { width: 15px; height: 15px; }
    }

    /* ── Right column — GHL form card ───────────────────────────────────────── */
    .naq-formcard {
      background: #ffffff;
      border: 1px solid rgba(234, 194, 90, 0.4);
      border-radius: var(--radius-2xl);
      box-shadow:
        inset 0 0 0 1px rgba(234, 194, 90, 0.12),
        0 40px 90px rgba(2, 28, 54, 0.5),
        0 0 60px rgba(234, 194, 90, 0.14);
      padding: clamp(20px, 2vw, 28px) clamp(18px, 2.4vw, 32px);
      overflow: hidden;
      text-align: center;
    }
    .naq-formcard__head {
      margin-bottom: var(--space-md);
    }
    .naq-formcard__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.25rem, 1rem + 1vw, 1.625rem);
      line-height: 1.15;
      letter-spacing: -0.015em;
      color: var(--primary);
      margin: 0 0 8px;
    }
    .naq-formcard__sub {
      font-family: var(--font-body);
      font-size: 1rem;
      line-height: 1.55;
      color: var(--on-surface-variant);
      margin: 0;
    }
    /* Placeholder box — sized to hold a real LeadConnector form (~620px). Swap
       the .naq-formcard__placeholder div for the commented-out iframe below. */
    .naq-formcard__embed {
      min-height: 500px;
      display: flex;
    }
    /* form_embed.js resizes the iframe to the form's own height (~492px);
       keep a floor so there's no empty gap before the script runs. */
    .naq-formcard__embed iframe {
      display: block;
      width: 100%;
      min-height: 492px;
      border: none;
    }

    /* ══════════════════════════════════════════════════════════════════════════
       PRICING CARD — NAMB exclusive discount (ported from mastermind.html's
       .mm-offer / .mm-step pricing pattern, scoped to .naq-*)
       ══════════════════════════════════════════════════════════════════════════ */
    /* ══════════════════════════════════════════════════════════════════════════
       REPLAY — light band between the two dark sections, framed Wistia video
       ══════════════════════════════════════════════════════════════════════════ */
    .naq-replay {
      background: var(--background);
      padding-block: clamp(56px, 7vw, 104px);
    }
    .naq-replay__head {
      max-width: 52rem;
      margin: 0 auto clamp(32px, 4vw, 52px);
      text-align: center;
    }
    .naq-replay__eyebrow {
      display: inline-block;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--naq-brass);
      margin: 0 0 var(--space-sm);
    }
    .naq-replay__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.75rem, 1.2rem + 2vw, 2.75rem);
      line-height: 1.15;
      letter-spacing: -0.025em;
      color: var(--primary);
      margin: 0;
      text-wrap: balance;
    }

    .naq-replay__frame {
      max-width: 68rem;
      margin-inline: auto;
      border-radius: var(--radius-2xl);
      overflow: hidden;
      border: 1px solid rgba(2, 28, 54, 0.12);
      box-shadow: 0 30px 70px rgba(2, 28, 54, 0.22);
    }
    .naq-replay__frame wistia-player { display: block; }

    .naq-pricing {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-block: clamp(56px, 7vw, 104px);
      position: relative;
      overflow: hidden;
    }
    /* Consultation dashboard photo behind the card — blurred and very faint so
       it reads only as a subtle texture (matches the ACM replay pricing band).
       Its own layer so the blur doesn't affect the card/content above it. */
    .naq-pricing::after {
      content: '';
      position: absolute;
      inset: -60px;
      z-index: 0;
      background: url('<?php echo TLA_BASE; ?>/assets/consultation-header.png') center / cover no-repeat;
      filter: blur(8px);
      opacity: 0.12;
      pointer-events: none;
    }
    /* Gold radial glow at the top-left of the band. */
    .naq-pricing::before {
      content: '';
      position: absolute;
      top: -80px;
      left: 6%;
      width: 480px;
      height: 480px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.1), transparent);
      filter: blur(70px);
      z-index: 1;
      pointer-events: none;
    }
    .naq-pricing > .container { position: relative; z-index: 1; }
    .naq-plan {
      --naq-plan-pad: clamp(28px, 4vw, 56px);
      max-width: 72rem;
      margin-inline: auto;
      background: linear-gradient(135deg, #0a1628 0%, #021c36 55%, #0a223d 100%);
      border-radius: var(--radius-3xl);
      border: 1px solid rgba(234, 194, 90, 0.4);
      box-shadow:
        0 40px 90px rgba(2, 28, 54, 0.45),
        0 0 60px rgba(234, 194, 90, 0.14),
        inset 0 0 0 1px rgba(234, 194, 90, 0.12);
      padding: var(--naq-plan-pad);
      position: relative;
      overflow: hidden;
      text-align: center;
    }
    /* The pricing content (eyebrow → CTA) sits centered above the wider
       what's-inside band below. */
    .naq-plan__offer { max-width: 48rem; margin-inline: auto; }
    .naq-plan::before {
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
    .naq-plan > * { position: relative; z-index: 1; }

    .naq-plan__eyebrow {
      display: inline-block;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--naq-brass-bright);
      background: rgba(234, 194, 90, 0.14);
      border: 1px solid rgba(234, 194, 90, 0.32);
      border-radius: var(--radius-full);
      padding: 8px 20px;
      margin: 0 0 var(--space-md);
    }
    .naq-plan__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.875rem, 1.3rem + 2.6vw, 2.75rem);
      line-height: 1.05;
      letter-spacing: -0.03em;
      /* Small bottom padding so background-clip: text doesn't crop descenders. */
      padding-bottom: 0.12em;
      margin: 0 0 var(--space-sm);
      text-wrap: balance;
      background: var(--naq-grad);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }
    /* Subheading under the gradient title. */
    .naq-plan__sub {
      font-family: var(--font-body);
      font-size: clamp(1rem, 0.95rem + 0.3vw, 1.1875rem);
      line-height: 1.55;
      color: rgba(255, 255, 255, 0.82);
      max-width: 40rem;
      margin: 0 auto var(--space-lg);
      text-wrap: balance;
    }

    /* Two price blocks — monthly + annual */
    .naq-plan__steps {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-md);
      align-items: stretch;
      max-width: 40rem;
      margin: 0 auto var(--space-lg);
    }
    @media (min-width: 620px) {
      .naq-plan__steps { grid-template-columns: 1fr 1fr; }
    }
    .naq-step {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      border-radius: var(--radius-2xl);
      padding: clamp(28px, 3.5vw, 44px) var(--space-md);
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.14);
    }
    .naq-step--annual {
      background: rgba(234, 194, 90, 0.1);
      border: 1px solid rgba(234, 194, 90, 0.45);
    }
    .naq-step__label {
      display: block;
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--naq-brass-bright);
    }
    .naq-step__was {
      display: block;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(1.25rem, 1.05rem + 0.8vw, 1.625rem);
      color: rgba(255, 255, 255, 0.82);
    }
    .naq-step__strike {
      position: relative;
      white-space: nowrap;
    }
    .naq-step__strike::after {
      content: '';
      position: absolute;
      left: -2px;
      right: -2px;
      top: 50%;
      height: 3px;
      background: var(--naq-brass-bright);
      transform: rotate(-6deg);
    }
    .naq-step__price {
      display: block;
      font-family: var(--font-display);
      font-weight: 800;
      line-height: 0.95;
      letter-spacing: -0.03em;
      color: #ffffff;
      font-size: clamp(2.75rem, 1.8rem + 4.6vw, 4.25rem);
    }
    .naq-step--annual .naq-step__price {
      background: var(--naq-grad);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .naq-step__price span {
      font-size: 0.32em;
      font-weight: 700;
      letter-spacing: 0;
      -webkit-text-fill-color: initial;
    }
    .naq-step__sub {
      display: block;
      font-family: var(--font-body);
      font-size: 0.9375rem;
      font-weight: 500;
      color: rgba(255, 255, 255, 0.72);
      line-height: 1.4;
      /* Extra breathing room under the big price (adds to the .naq-step 10px gap). */
      margin-top: 10px;
    }
    .naq-step__sub strong { color: #ffffff; font-weight: 700; }

    /* Savings pill */
    .naq-plan__save {
      margin: 0 0 var(--space-xl);
    }
    .naq-plan__save-pill {
      display: inline-block;
      font-family: var(--font-body);
      font-size: clamp(1rem, 0.9rem + 0.5vw, 1.1875rem);
      font-weight: 600;
      color: #6ee7a8;
      background: rgba(52, 211, 153, 0.12);
      border: 1px solid rgba(52, 211, 153, 0.4);
      border-radius: var(--radius-full);
      padding: 12px 28px;
      line-height: 1.5;
    }
    .naq-plan__save-pill em { font-style: normal; font-weight: 800; color: #34d399; }

    .naq-plan__cta {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-sm);
    }
    /* Enlarged landing-page CTA — bigger pad + text than the shared .btn--lg
       (matches .btn--landing on the mastermind / ACM replay pages). */
    .naq-plan__cta .btn--gold.btn--lg {
      font-size: clamp(1.0625rem, 0.95rem + 0.6vw, 1.3125rem);
      padding: clamp(20px, 1.6vw, 26px) clamp(36px, 4vw, 56px);
      border-radius: var(--radius-2xl);
      box-shadow: 0 10px 32px rgba(201, 150, 28, 0.34);
    }
    .naq-plan__fine {
      font-size: 0.8125rem;
      color: rgba(255, 255, 255, 0.55);
      margin: var(--space-md) 0 0;
      line-height: 1.5;
    }

    /* ── What's-inside band: checklist (left) · full-bleed image (right) ──────
       Ported from the ACM replay card's .mm-inside. The band clears the card's
       bottom padding so the image reaches the card's bottom + right edges. */
    .naq-inside {
      margin-top: clamp(36px, 4vw, 56px);
      margin-bottom: calc(-1 * var(--naq-plan-pad));
      padding-top: clamp(36px, 4vw, 56px);
      border-top: 1px solid transparent;
      border-image: linear-gradient(90deg, transparent, rgba(234, 194, 90, 0.55), transparent) 1;
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(28px, 3.5vw, 48px);
      align-items: stretch;
      text-align: left;
    }
    @media (min-width: 900px) {
      .naq-inside {
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: clamp(40px, 4vw, 64px);
      }
    }
    .naq-inside__col { min-width: 0; }
    @media (min-width: 900px) {
      .naq-inside__col--text { padding-bottom: var(--naq-plan-pad); }
    }
    .naq-inside__list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: clamp(14px, 1.6vw, 20px);
    }
    .naq-inside__item {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 14px;
      align-items: start;
      font-family: var(--font-body);
      font-size: clamp(1rem, 0.95rem + 0.25vw, 1.125rem);
      line-height: 1.4;
      color: rgba(255, 255, 255, 0.82);
    }
    .naq-inside__item strong { color: #ffffff; font-weight: 700; }
    .naq-inside__check {
      flex-shrink: 0;
      width: 26px;
      height: 26px;
      margin-top: 2px;
      border-radius: var(--radius-full);
      background: #34d399;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 0 4px rgba(52, 211, 153, 0.16);
    }
    .naq-inside__check svg { width: 15px; height: 15px; display: block; }

    /* Full-bleed image — reaches the card's right + bottom edges. Negative
       right/bottom margins cancel the card padding; the card's overflow:hidden
       + radius clip the image to the rounded bottom-right corner. */
    .naq-inside__media {
      margin: 0 calc(-1 * var(--naq-plan-pad)) calc(-1 * var(--naq-plan-pad)) 0;
      align-self: stretch;
    }
    .naq-inside__img { display: block; width: 100%; height: auto; }
    @media (min-width: 900px) {
      .naq-inside__media { position: relative; }
      .naq-inside__img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: left center;
      }
    }
    @media (max-width: 899.98px) {
      .naq-inside__media {
        margin: 0 calc(-1 * var(--naq-plan-pad)) calc(-1 * var(--naq-plan-pad));
      }
    }
  </style>


  <!-- ── Header — logo left, savings line + CTA right (page-local landing nav) ── -->
  <header class="site-header site-header--naq">
    <div class="site-header__inner">
      <a class="brand" href="/" aria-label="The Loan Atlas">
        <img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-gold.png" alt="The Loan Atlas" class="brand__logo" />
      </a>
      <div class="site-header__actions">
        <span class="naq-header-save">Save <span class="naq-header-save__amt">$1,500/yr</span> with your Highway discount!</span>
        <a class="btn btn--header" href="https://members.theloanatlas.com/checkouts/premium-membership-checkout-mbs-sep-2026/" target="_blank" rel="noopener">
          <span class="btn__full">Join The Loan Atlas</span>
          <span class="btn__short">Join</span>
        </a>
      </div>
    </div>
  </header>

  <main class="naq">

    <!-- ── HERO — copy (left) · GHL form (right) ────────────────────────────── -->
    <section class="naq-hero" aria-labelledby="naq-title">
      <div class="container">
        <div class="naq-hero__grid">

          <!-- LEFT: copy -->
          <div class="naq-hero__copy">
            <h1 id="naq-title" class="naq-hero__title">Give Your Partners the Seller Advantage</h1>
            <p class="naq-hero__sub">Download these templates and TAKE ACTION toward giving your Realtor partners the competitive advantage they need right now:</p>
            <ul class="naq-wins">
              <li class="naq-wins__item">
                <span class="naq-wins__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#021c36" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <span><strong>Seller Advantage Realtor Pitch Deck</strong></span>
              </li>
              <li class="naq-wins__item">
                <span class="naq-wins__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#021c36" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <span><strong>Seller Advantage Program Handout</strong></span>
              </li>
              <li class="naq-wins__item">
                <span class="naq-wins__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#021c36" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <span><strong>TWO Open House Flyer Samples</strong></span>
              </li>
            </ul>
          </div>

          <!-- RIGHT: GHL LeadConnector form card -->
          <div class="naq-formcard">
            <div class="naq-formcard__head">
              <h2 class="naq-formcard__title">Get the Seller Advantage Templates</h2>
              <p class="naq-formcard__sub">Enter your info and we&rsquo;ll send you the full template kit.</p>
            </div>
            <div class="naq-formcard__embed">
              <iframe
                src="https://api.leadconnectorhq.com/widget/form/L20AUAcVIyjQzzsLGp5J"
                style="width:100%;height:100%;border:none;border-radius:0px"
                id="inline-L20AUAcVIyjQzzsLGp5J"
                data-layout="{'id':'INLINE'}"
                data-trigger-type="alwaysShow"
                data-trigger-value=""
                data-activation-type="alwaysActivated"
                data-activation-value=""
                data-deactivation-type="neverDeactivate"
                data-deactivation-value=""
                data-form-name="Event LM: Winning Mortgage Referrals From Listing Agents 9.23.26"
                data-height="492"
                data-layout-iframe-id="inline-L20AUAcVIyjQzzsLGp5J"
                data-form-id="L20AUAcVIyjQzzsLGp5J"
                data-cookie-consent="true"
                data-cookie-consent-provider="auto"
                title="Event LM: Winning Mortgage Referrals From Listing Agents 9.23.26">
              </iframe>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── REPLAY — session recording ───────────────────────────────────────── -->
    <section class="naq-replay" aria-labelledby="naq-replay-title">
      <div class="container">
        <div class="naq-replay__head">
          <span class="naq-replay__eyebrow">Watch the replay</span>
          <h2 id="naq-replay-title" class="naq-replay__title">Winning Mortgage Referrals From Listing Agents</h2>
        </div>
        <div class="naq-replay__frame">
          <!-- Wistia loader scripts live in <body> (the build strips <head> scripts) -->
          <script src="https://fast.wistia.com/player.js" async></script>
          <script src="https://fast.wistia.com/embed/1k07af1o60.js" async type="module"></script>
          <wistia-player media-id="1k07af1o60" seo="false" aspect="1.7777777777777777"></wistia-player>
        </div>
      </div>
    </section>

    <!-- ── PRICING — NAMB exclusive discount ────────────────────────────────── -->
    <section class="naq-pricing" aria-labelledby="naq-pricing-title">
      <div class="container">
        <article class="naq-plan">
          <div class="naq-plan__offer">
          <h2 id="naq-pricing-title" class="naq-plan__title">Install The Systems Top Producers Are Using</h2>
          <p class="naq-plan__sub">Enjoy full access to The Loan Atlas at a price reserved exclusively for Highway members.</p>

          <div class="naq-plan__steps">
            <div class="naq-step naq-step--monthly">
              <span class="naq-step__label">Monthly</span>
              <span class="naq-step__was"><span class="naq-step__strike">$349/mo</span></span>
              <span class="naq-step__price">$199<span>/mo</span></span>
              <span class="naq-step__sub">Billed monthly</span>
            </div>
            <div class="naq-step naq-step--annual">
              <span class="naq-step__label">Annual · Best Value</span>
              <span class="naq-step__was"><span class="naq-step__strike">$3,490/yr</span></span>
              <span class="naq-step__price">$1,990<span>/yr</span></span>
              <span class="naq-step__sub">Get <strong>TWO MONTHS</strong> for free with your annual membership!</span>
            </div>
          </div>


          <div class="naq-plan__cta">
            <a class="btn btn--gold btn--lg" href="https://members.theloanatlas.com/checkouts/premium-membership-checkout-mbs-sep-2026/">Start Your Transformation</a>
          </div>
          <p class="naq-plan__fine">12-month commitment. Offer available to new members only.</p>
          </div>

          <!-- BOTTOM — what's inside: checklist (left) · full-bleed image (right) -->
          <div class="naq-inside">
            <div class="naq-inside__col naq-inside__col--text">
              <ul class="naq-inside__list">
                <li class="naq-inside__item">
                  <span class="naq-inside__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                  <span><strong>Seven live, one-hour coaching calls</strong> every month</span>
                </li>
                <li class="naq-inside__item">
                  <span class="naq-inside__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                  <span><strong>200+ training modules</strong> to help you along the 8 Disciplines of Loan Origination Mastery</span>
                </li>
                <li class="naq-inside__item">
                  <span class="naq-inside__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                  <span><strong>An all-star faculty of coaches and mentors</strong> with over $29 billion in collective loan funding</span>
                </li>
                <li class="naq-inside__item">
                  <span class="naq-inside__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                  <span><strong>The Perfect Loan Process™</strong> – Streamline your entire loan process from initial inquiry to final approval</span>
                </li>
                <li class="naq-inside__item">
                  <span class="naq-inside__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                  <span><strong>AI Sales &amp; Scripting Coach</strong> – Confidently overcome every objection</span>
                </li>
                <li class="naq-inside__item">
                  <span class="naq-inside__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                  <span><strong>Health, Mindset, &amp; Vitality Coach</strong> – Respond with intention and stop reacting to the day</span>
                </li>
                <li class="naq-inside__item">
                  <span class="naq-inside__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                  <span><strong>Talk to Tim</strong> – Overcome any obstacle in this small group monthly coaching session with Tim Braheem</span>
                </li>
              </ul>
            </div>
            <div class="naq-inside__col naq-inside__media">
              <img class="naq-inside__img" src="<?php echo TLA_BASE; ?>/assets/hero image.png" alt="Inside The Loan Atlas — dashboard and AI coaching platform" loading="lazy" />
            </div>
          </div>
        </article>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <!-- LeadConnector form embed (Event LM: Winning Mortgage Referrals From Listing Agents 9.23.26) -->
  <script src="https://link.msgsndr.com/js/form_embed.js"></script>
