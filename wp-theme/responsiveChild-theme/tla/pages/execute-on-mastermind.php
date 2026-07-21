<?php
/**
 * Body partial for /execute-on-mastermind/ (TLA Full HTML template).
 * Generated from public/replay-execute-on-mastermind.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Execute on Mastermind — Replay — The Loan Atlas';
$tla_description = 'Watch the replay of Execute on Mastermind: Keep Momentum Going and Turn Your Goals Into Loans — then lock in the exclusive Mastermind Platinum bundle: $249/mo locked in, plus 6 months free Platinum Marketing.';
$tla_active      = '';
?>
  <style>
    /* Blur-up swatch while the Wistia web component defines itself */
    wistia-player[media-id='8xf5e7f2az']:not(:defined) {
      background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/8xf5e7f2az/swatch');
      display: block;
      filter: blur(5px);
      padding-top: 56.25%;
    }

    /* ── Header: logo left, custom checkout CTA right ───────────────────────── */
    .site-header--replay .site-header__inner { justify-content: space-between; }
    /* Always show the short button label on phones so the CTA never overflows */
    @media (max-width: 539.98px) {
      .site-header--replay .btn--header .btn__full { display: none; }
      .site-header--replay .btn--header .btn__short { display: inline; }
    }

    /* ── Replay heading (sits above the video, same navy section) ───────────── */
    .rp-head__inner {
      max-width: 52rem;
      margin: 0 auto clamp(28px, 4vw, 48px);
      text-align: center;
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

    /* ── Larger landing-page CTA (from mastermind.html) ─────────────────────── */
    .btn--landing,
    .mm-offer__cta .btn--gold.btn--lg {
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
       OFFER CARD — ported verbatim from mastermind.html's inline styles
       ══════════════════════════════════════════════════════════════════════════ */
    .mm-offer {
      background-image: url('<?php echo TLA_BASE; ?>/assets/bellagio.png');
      background-size: cover;
      background-position: center;
      padding-block: clamp(48px, 6vw, 88px);
      position: relative;
      overflow: hidden;
    }
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
    .mm-offer__card .mm-plan__lockup { position: relative; z-index: 1; }
    .mm-offer__hero-title {
      position: relative;
      z-index: 1;
      margin-bottom: var(--space-md);
    }
    .mm-offer__strike { position: relative; white-space: nowrap; }
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

    /* Deal block */
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
    .mm-step {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-md);
      border-radius: var(--radius-2xl);
      padding: clamp(32px, 4vw, 48px) var(--space-lg);
    }
    .mm-step--rest {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.14);
    }
    .mm-step__was {
      display: block;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(1.375rem, 1.1rem + 1vw, 1.875rem);
      color: rgba(255, 255, 255, 0.85);
    }
    .mm-step__was .mm-offer__strike { letter-spacing: 0; }
    .mm-step__was .mm-offer__strike::after { height: 3px; }
    .mm-step__price {
      display: block;
      font-family: var(--font-display);
      font-weight: 800;
      line-height: 0.95;
      letter-spacing: -0.03em;
      color: #ffffff;
      font-size: clamp(3.25rem, 2rem + 6vw, 5rem);
    }
    .mm-step__sub {
      display: block;
      font-family: var(--font-body);
      font-size: 0.9375rem;
      font-weight: 500;
      color: rgba(255, 255, 255, 0.72);
      line-height: 1.4;
    }
    .mm-step__sub strong { color: #ffffff; font-weight: 700; }

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
    .mm-offer__card .mm-plan__plus,
    .mm-offer__card .mm-plan__save { position: relative; z-index: 1; }

    /* Co-branded logo lockup — Loan Atlas × Mastermind */
    .mm-plan__lockup {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: clamp(12px, 2.5vw, 26px);
      margin-bottom: var(--space-md);
    }
    .mm-plan__lockup-atlas { height: clamp(56px, 8vw, 84px); width: auto; display: block; }
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
      filter: brightness(0) invert(1);
    }
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
    .mm-plan__plus {
      display: flex;
      align-items: center;
      gap: var(--space-md);
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(1.25rem, 1rem + 1vw, 1.625rem);
      letter-spacing: 0;
      line-height: 1.3;
      color: rgba(255, 255, 255, 0.92);
      text-align: center;
      max-width: 40rem;
      margin: var(--space-lg) auto;
    }
    .mm-plan__plus::before,
    .mm-plan__plus::after {
      content: '';
      flex: 1 0 32px;
      min-width: 32px;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(234, 194, 90, 0.5), transparent);
    }
    .mm-plan__plus > span { flex: 0 1 auto; }
    .mm-plan__plus em {
      font-style: normal;
      font-weight: 800;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-plan__save { text-align: center; margin: 0 0 var(--space-xl); }
    .mm-plan__save-pill {
      display: inline-block;
      font-family: var(--font-body);
      font-size: clamp(1rem, 0.9rem + 0.5vw, 1.1875rem);
      font-weight: 600;
      letter-spacing: 0;
      color: #6ee7a8;
      background: rgba(52, 211, 153, 0.12);
      border: 1px solid rgba(52, 211, 153, 0.4);
      border-radius: var(--radius-full);
      padding: 12px 28px;
      line-height: 1.5;
    }
    .mm-plan__save-pill em { font-style: normal; font-weight: 800; color: #34d399; }
  </style>


  <!-- ── Header — logo + custom checkout CTA (page-local landing nav) ─────────── -->
  <header class="site-header site-header--replay">
    <div class="site-header__inner">
      <a class="brand" href="/" aria-label="The Loan Atlas">
        <img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-gold.png" alt="The Loan Atlas" class="brand__logo" />
      </a>
      <div class="site-header__actions">
        <a class="btn btn--header" href="https://members.theloanatlas.com/checkouts/premium-membership-checkout-mastermind-2026/">
          <span class="btn__full">Get the Mastermind Platinum Bundle</span>
          <span class="btn__short">Get the Bundle</span>
        </a>
      </div>
    </div>
  </header>

  <main>

    <!-- ── 1. REPLAY — heading + video together ─────────────────────────────── -->
    <section class="rp-video" aria-labelledby="rp-head-title">
      <div class="container">
        <div class="rp-head__inner">
          <span class="rp-head__eyebrow">Live Event Replay</span>
          <h1 id="rp-head-title" class="rp-head__title">Execute on Mastermind: Keep Momentum Going and Turn Your Goals Into Loans</h1>
          <p class="rp-head__sub">Watch the full replay below &mdash; then lock in your exclusive Mastermind Platinum bundle before you close this page.</p>
        </div>
        <div class="rp-video__frame">
          <wistia-player media-id="8xf5e7f2az" seo="false" aspect="1.7777777777777777"></wistia-player>
        </div>
      </div>
    </section>

    <!-- ── 3. OFFER HIGHLIGHT CARD (from mastermind.html) ───────────────────── -->
    <section class="mm-offer" aria-labelledby="mm-offer-heading">
      <div class="container">
        <div class="mm-offer__card">
          <div class="mm-plan__lockup" aria-label="The Loan Atlas — official Mastermind Summit 2026 offer">
            <img class="mm-plan__lockup-atlas" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="The Loan Atlas" />
            <span class="mm-plan__lockup-x" aria-hidden="true">×</span>
            <img class="mm-plan__lockup-mm" src="<?php echo TLA_BASE; ?>/assets/mastermind-logo.webp" alt="Mastermind Summit 2026" />
          </div>
          <h2 class="mm-plan__hero-title mm-offer__hero-title"><span class="mm-plan__hero-plat">Platinum</span> Super Bonus</h2>

          <div id="mm-offer-heading" class="mm-offer__steps" style="grid-template-columns: 1fr; max-width: 22rem;">
            <div class="mm-step mm-step--rest">
              <span class="mm-step__was"><span class="mm-offer__strike">$349/mo</span></span>
              <span class="mm-step__price">$249<span style="font-size: 0.32em; font-weight: 700; letter-spacing: 0;">/mo</span></span>
              <span class="mm-step__sub"><strong>Locked in</strong> — no increase</span>
            </div>
          </div>

          <p class="mm-plan__plus"><span>plus <em>6 months FREE</em> of Platinum Marketing</span></p>

          <p class="mm-plan__save"><span class="mm-plan__save-pill"><em>$1,800</em> in Annual Savings — Exclusively for Mastermind Attendees</span></p>

          <div class="mm-offer__cta">
            <a class="btn btn--gold btn--lg" href="https://members.theloanatlas.com/checkouts/premium-membership-checkout-mastermind-2026/">Get Your Mastermind Platinum Bundle</a>
            <a class="rp-head__note" href="/consultation-mastermind-2026/">
              Have questions? Book a free coaching session
            </a>
          </div>
          <p class="mm-offer__fine">12-month commitment. Offer exclusively for Mastermind Summit 2026 attendees. Available to new members only.</p>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

