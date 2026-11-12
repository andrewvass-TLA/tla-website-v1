<?php
/**
 * Body partial for /replay-mbs-111926/ (TLA Full HTML template).
 * Generated from public/webinar-replays/replay-mbs-111926.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Your Marketing Is Being Ignored — Replay — The Loan Atlas';
$tla_description = 'Watch the replay of Your Marketing Is Being Ignored — And It\'s Costing You More Than You Realize — then join The Loan Atlas at $199/mo, down from $349/mo.';
$tla_active      = '';
?>
  <style>
    /* Blur-up swatch while the Wistia web component defines itself */
    wistia-player[media-id='serwg0uf2i']:not(:defined) {
      background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/serwg0uf2i/swatch');
      display: block;
      filter: blur(5px);
      padding-top: 56.25%;
    }

    /* ── Header: centered logo ──────────────────────────────────────────────── */
    .site-header--replay .site-header__inner { justify-content: center; }

    /* ── Replay heading (sits above the video, same navy section) ───────────── */
    .rp-head__inner {
      max-width: 52rem;
      margin: 0 auto clamp(28px, 4vw, 48px);
      text-align: center;
    }
    /* CTA between the body copy and the video */
    .rp-head__cta {
      margin-top: clamp(24px, 3vw, 36px);
    }
    .rp-head__eyebrow {
      display: inline-block;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--brass-bright);
      margin: 0 0 var(--space-sm);
    }
    .rp-head__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2rem, 1.4rem + 2.8vw, 3.25rem);
      line-height: 1.08;
      letter-spacing: -0.025em;
      color: #ffffff;
      margin: 0 0 var(--space-sm);
      text-wrap: balance;
    }
    .rp-head__sub {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 0.95rem + 0.5vw, 1.25rem);
      line-height: 1.55;
      color: rgba(255, 255, 255, 0.72);
      margin: 0 auto;
      max-width: 40rem;
    }

    /* ── Video stage (holds the heading + player) ───────────────────────────── */
    .rp-video {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-block: clamp(40px, 6vw, 80px) clamp(48px, 6vw, 88px);
    }
    .rp-video__frame {
      max-width: 68rem;
      margin-inline: auto;
      border-radius: var(--radius-2xl);
      overflow: hidden;
      box-shadow:
        0 40px 90px rgba(2, 28, 54, 0.5),
        0 0 60px rgba(234, 194, 90, 0.14);
      border: 1px solid rgba(234, 194, 90, 0.28);
    }
    .rp-video__frame wistia-player { display: block; }

    /* ── Larger landing-page CTA ────────────────────────────────────────────── */
    .btn--landing {
      font-size: clamp(1.0625rem, 0.95rem + 0.6vw, 1.3125rem);
      padding: clamp(20px, 1.6vw, 26px) clamp(36px, 4vw, 56px);
      border-radius: var(--radius-2xl);
      box-shadow: 0 10px 32px rgba(201, 150, 28, 0.34);
    }
    .rp-head__note {
      font-family: var(--font-body);
      font-size: 0.9375rem;
      color: rgba(255, 255, 255, 0.7);
      text-decoration: underline;
      text-underline-offset: 4px;
      text-decoration-thickness: 1px;
    }

    /* ══════════════════════════════════════════════════════════════════════════
       PRICING CARD — ported from mbs-seller-advantage.html (.naq-* pricing)
       ══════════════════════════════════════════════════════════════════════════ */
    .naq-pricing {
      --naq-brass: #c9961c;
      --naq-brass-bright: #eac25a;
      --naq-grad: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
    }
    /* Scroll offset so the landing header clears the pricing band. */
    #pricing { scroll-margin-top: calc(var(--header-h) + 24px); }

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


  <!-- ── Header — centered logo (page-local landing nav) ─────────────────────── -->
  <header class="site-header site-header--replay">
    <div class="site-header__inner">
      <a class="brand" href="/" aria-label="The Loan Atlas">
        <img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-gold.png" alt="The Loan Atlas" class="brand__logo" />
      </a>
    </div>
  </header>

  <main>

    <!-- ── 1. REPLAY — heading + video together ─────────────────────────────── -->
    <section class="rp-video" aria-labelledby="rp-head-title">
      <div class="container">
        <div class="rp-head__inner">
          <span class="rp-head__eyebrow">Live Event Replay</span>
          <h1 id="rp-head-title" class="rp-head__title">Your Marketing Is Being Ignored — And It's Costing You More Than You Realize</h1>
          <p class="rp-head__sub">Watch the full replay below &mdash; then join The Loan Atlas and start installing the systems top producers are using to close more loans with less chaos.</p>
          <div class="rp-head__cta">
            <a class="btn btn--gold btn--landing" href="#pricing">Start Your Transformation</a>
          </div>
        </div>
        <div class="rp-video__frame">
          <!-- Wistia loader scripts live in <body> (the build strips <head> scripts) -->
          <script src="https://fast.wistia.com/player.js" async></script>
          <script src="https://fast.wistia.com/embed/serwg0uf2i.js" async type="module"></script>
          <wistia-player media-id="serwg0uf2i" seo="false" aspect="1.7777777777777777"></wistia-player>
        </div>
      </div>
    </section>

    <!-- ── 2. PRICING (from mbs-seller-advantage.html) ─────────────────────── -->
    <section class="naq-pricing" id="pricing" aria-labelledby="naq-pricing-title">
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

