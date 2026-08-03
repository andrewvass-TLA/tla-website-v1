<?php
/**
 * Body partial for /live-events/ (TLA Full HTML template).
 * Generated from public/events.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Live Events &amp; Masterclasses — The Loan Atlas';
$tla_description = 'Join live expert-led masterclasses, office hours, AI Labs and Talk to Tim sessions inside The Loan Atlas — and catch up on past masterclasses and AI Labs on demand.';
$tla_active      = 'events';
?>
  <style>
    /* --- Page hero (styled like the blog masthead) ------------------- */
    .ev-hero {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      color: var(--on-primary);
      /* Clear the fixed 72px nav so content isn't tucked under it. */
      padding-block: calc(var(--header-h) + clamp(40px, 5vw, 56px)) clamp(40px, 5vw, 72px);
      position: relative; overflow: hidden;
    }
    .ev-hero::before {
      content: ""; position: absolute; top: -80px; right: 8%;
      width: 540px; height: 540px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.11), transparent);
      filter: blur(70px); pointer-events: none;
    }
    .ev-hero::after {
      content: ""; position: absolute; bottom: -80px; left: 4%;
      width: 400px; height: 400px;
      background: radial-gradient(closest-side, rgba(178, 200, 233, 0.08), transparent);
      filter: blur(70px); pointer-events: none;
    }
    .ev-hero__inner { position: relative; z-index: 1; text-align: left; }
    .ev-hero .eyebrow__text { color: var(--brass-bright); }
    .ev-hero h1 {
      font-family: var(--font-display);
      font-size: clamp(2.25rem, 1.55rem + 3vw, 4rem);
      line-height: 1.06; letter-spacing: -0.03em; font-weight: 800;
      color: #fff; margin: 0; max-width: 46rem;
    }
    .ev-hero h1 em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .ev-hero__dek {
      font-family: var(--font-body);
      font-size: clamp(1rem, 0.9rem + 0.5vw, 1.1875rem); line-height: 1.7;
      color: rgba(255, 255, 255, 0.68);
      margin: 16px 0 0; max-width: 40rem;
    }

    /* --- Page rhythm ------------------------------------------------- */
    .ev-section { padding-block: clamp(56px, 6vw, 104px); }
    .ev-section--alt { background: var(--surface-container-low); }

    .ev-head { max-width: 44rem; margin-bottom: clamp(28px, 3.5vw, 44px); }
    .ev-head--row {
      max-width: none;
      display: flex; flex-wrap: wrap; gap: 16px;
      align-items: flex-end; justify-content: space-between;
    }
    .ev-eyebrow {
      font-family: var(--font-body);
      font-size: 0.8125rem; font-weight: 700;
      letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--brass);
    }
    .ev-title {
      font-family: var(--font-display);
      font-size: clamp(1.75rem, 1.25rem + 2vw, 2.5rem);
      line-height: 1.12; letter-spacing: -0.02em; font-weight: 700;
      color: var(--on-surface); margin: 10px 0 0;
    }
    .ev-dek {
      font-family: var(--font-body);
      font-size: 1.0625rem; line-height: 1.6;
      color: var(--on-surface-variant); margin: 12px 0 0;
    }
    .ev-link {
      font-family: var(--font-body); font-weight: 600; font-size: 0.9375rem;
      color: var(--primary); display: inline-flex; align-items: center; gap: 6px;
      transition: gap 150ms ease, color 150ms ease;
    }
    .ev-link:hover { gap: 10px; color: var(--brass); }
    .ev-link svg { width: 16px; height: 16px; }

    /* --- Category tag chips (one accent per event type) -------------- */
    .ev-tag {
      display: inline-flex; align-items: center; gap: 7px;
      font-family: var(--font-body);
      font-size: 0.75rem; font-weight: 700;
      letter-spacing: 0.06em; text-transform: uppercase;
      padding: 6px 12px; border-radius: var(--radius-full);
      border: 1px solid transparent;
    }
    .ev-tag::before {
      content: ""; width: 7px; height: 7px; border-radius: 50%;
      background: currentColor;
    }
    .ev-tag--masterclass  { background: rgba(201, 150, 28, 0.12);  color: #8a6608; border-color: rgba(201, 150, 28, 0.28); }
    .ev-tag--office-hours { background: rgba(69, 70, 77, 0.08);    color: #45464d; border-color: rgba(69, 70, 77, 0.20); }
    .ev-tag--ai-lab       { background: rgba(43, 108, 176, 0.12);  color: #2b6cb0; border-color: rgba(43, 108, 176, 0.28); }
    .ev-tag--talk-to-tim  { background: rgba(31, 122, 58, 0.12);   color: #1f7a3a; border-color: rgba(31, 122, 58, 0.26); }
    /* On dark surfaces the tag text/glow brightens for contrast. */
    .ev-tag--on-dark.ev-tag--masterclass { background: rgba(234, 194, 90, 0.16); color: var(--brass-bright); border-color: rgba(234, 194, 90, 0.35); }

    /* ================================================================
       SECTION 1 — Featured event (full-width card, blue gradient)
       ================================================================ */
    .ev-section--feature { padding-top: clamp(40px, 5vw, 72px); padding-bottom: 0; }

    .ev-feature-card {
      position: relative; overflow: hidden;
      border-radius: var(--radius-3xl);
      /* Lighter slate than the hero so the card lifts off the section above. */
      background: linear-gradient(155deg, #143251 0%, #0d2742 52%, #102c49 100%);
      color: var(--on-primary);
      /* Gold edge + soft brass glow to separate it from the dark hero. */
      border: 1px solid rgba(234, 194, 90, 0.42);
      box-shadow: 0 30px 70px rgba(2, 28, 54, 0.45), 0 0 0 1px rgba(234, 194, 90, 0.08), 0 0 50px rgba(234, 194, 90, 0.10);
    }
    /* Brass + cool radial glows for depth */
    .ev-feature-card::before {
      content: ""; position: absolute; top: -120px; right: 4%;
      width: 460px; height: 460px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.18), transparent);
      filter: blur(72px); pointer-events: none;
    }
    .ev-feature-card::after {
      content: ""; position: absolute; bottom: -140px; left: 30%;
      width: 380px; height: 380px;
      background: radial-gradient(closest-side, rgba(178, 200, 233, 0.08), transparent);
      filter: blur(72px); pointer-events: none;
    }

    .ev-feature-card__grid {
      position: relative; z-index: 1;
      display: grid; grid-template-columns: minmax(0, 0.48fr) minmax(0, 0.52fr);
      gap: clamp(32px, 4vw, 64px); align-items: center;
      padding: clamp(28px, 3.4vw, 52px);
    }
    /* Square image with its own rounded frame, inset from the card edges */
    .ev-feature-card__media {
      position: relative; overflow: hidden;
      aspect-ratio: 1 / 1; border-radius: var(--radius-2xl);
      border: 1px solid rgba(234, 194, 90, 0.18);
      box-shadow: 0 20px 50px rgba(2, 28, 54, 0.45);
    }
    .ev-feature-card__media img { width: 100%; height: 100%; object-fit: cover; display: block; }
    /* Media is an <a> now that the featured event has a detail page */
    a.ev-feature-card__media { display: block; }

    .ev-feature-card__copy {
      padding-right: clamp(8px, 1.5vw, 24px);
    }
    .ev-feature-card__title {
      font-family: var(--font-display);
      font-size: clamp(1.75rem, 1.1rem + 2.4vw, 2.75rem);
      line-height: 1.1; letter-spacing: -0.02em; font-weight: 800;
      color: #fff; margin: 14px 0 0;
    }
    .ev-feature-card__meta {
      display: flex; flex-wrap: wrap; align-items: center; gap: 12px 22px;
      margin-top: 18px;
      font-family: var(--font-body); font-size: 1.125rem; font-weight: 700;
      color: rgba(255, 255, 255, 0.92);
    }
    .ev-feature-card__meta-item { display: inline-flex; align-items: center; gap: 9px; }
    .ev-feature-card__meta-item svg { width: 19px; height: 19px; color: var(--brass-bright); }
    .ev-feature-card__desc {
      font-family: var(--font-body);
      font-size: 1.0625rem; line-height: 1.65;
      color: rgba(255, 255, 255, 0.78); margin: 18px 0 26px;
    }

    /* ================================================================
       SECTION 2 — Upcoming events grid
       ================================================================ */
    .ev-grid {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: clamp(20px, 2.4vw, 28px);
    }
    .ev-card {
      display: flex; flex-direction: column;
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-2xl);
      overflow: hidden;
      transition: transform 160ms ease, box-shadow 160ms ease, border-color 160ms ease;
    }
    .ev-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-lg);
      border-color: var(--brass);
    }
    /* Square image at the top of each card */
    .ev-card__media { aspect-ratio: 1 / 1; overflow: hidden; background: var(--surface-container-low); }
    .ev-card__media img {
      width: 100%; height: 100%; object-fit: cover; display: block;
      transition: transform 320ms ease;
    }
    /* Media is an <a> on cards that have a detail page (office hours) */
    a.ev-card__media { display: block; }
    .ev-card:hover .ev-card__media img { transform: scale(1.04); }
    .ev-card__body {
      display: flex; flex-direction: column; flex: 1;
      padding: clamp(20px, 2vw, 26px);
    }
    .ev-card__date {
      display: flex; align-items: center; gap: 8px;
      font-family: var(--font-body); font-size: 0.875rem; font-weight: 600;
      color: var(--on-surface-variant);
    }
    .ev-card__date svg { width: 15px; height: 15px; color: var(--brass); }
    .ev-card__title {
      font-family: var(--font-display);
      font-size: 1.1875rem; line-height: 1.3; letter-spacing: -0.01em; font-weight: 800;
      color: var(--on-surface); margin: 10px 0 8px;
    }
    .ev-card__desc {
      font-family: var(--font-body); font-size: 0.9375rem; line-height: 1.55;
      color: var(--on-surface-variant); flex: 1; margin: 0;
    }
    .ev-card__foot { margin-top: 18px; }
    /* Card CTA — blue (primary), full-width within the card */
    .ev-card__join {
      display: inline-flex; align-items: center; justify-content: center; gap: 8px;
      width: 100%; padding: 12px 18px;
      font-family: var(--font-display); font-weight: 700; font-size: 0.9375rem;
      letter-spacing: -0.005em; color: var(--on-primary);
      background: var(--primary);
      border-radius: var(--radius-lg);
      box-shadow: 0 4px 14px rgba(2, 28, 54, 0.30), inset 0 1px 0 rgba(255, 255, 255, 0.08);
      transition: box-shadow 150ms ease, transform 150ms ease, background 150ms ease;
    }
    .ev-card__join:hover { background: #032647; box-shadow: 0 6px 20px rgba(2, 28, 54, 0.42), inset 0 1px 0 rgba(255, 255, 255, 0.08); }
    .ev-card__join svg { width: 15px; height: 15px; }

    /* ================================================================
       SECTION 3 — Past Masterclasses & AI Labs (full-width cards)
       ================================================================ */
    .ev-library { display: flex; flex-direction: column; gap: clamp(20px, 2.4vw, 28px); }
    .ev-pastcard {
      display: grid; grid-template-columns: minmax(0, 0.42fr) minmax(0, 0.58fr);
      gap: clamp(20px, 3vw, 40px); align-items: center;
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-3xl);
      overflow: hidden;
      transition: transform 160ms ease, box-shadow 160ms ease, border-color 160ms ease;
    }
    .ev-pastcard:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-xl);
      border-color: var(--brass);
    }
    .ev-pastcard__media { position: relative; overflow: hidden; aspect-ratio: 16 / 9; }
    .ev-pastcard__media img {
      width: 100%; height: 100%; object-fit: cover; display: block;
      transition: transform 320ms ease;
    }
    .ev-pastcard:hover .ev-pastcard__media img { transform: scale(1.04); }
    .ev-pastcard__body {
      padding: clamp(22px, 2.6vw, 36px) clamp(22px, 2.6vw, 40px) clamp(22px, 2.6vw, 36px) 0;
      display: flex; flex-direction: column; justify-content: center;
    }
    .ev-pastcard__title {
      font-family: var(--font-display);
      font-size: clamp(1.25rem, 1rem + 1vw, 1.625rem);
      line-height: 1.22; letter-spacing: -0.015em; font-weight: 700;
      color: var(--on-surface); margin: 12px 0 10px;
    }
    .ev-pastcard__desc {
      font-family: var(--font-body); font-size: 1rem; line-height: 1.6;
      color: var(--on-surface-variant); margin: 0;
    }
    .ev-pastcard__foot {
      display: flex; flex-wrap: wrap; align-items: center; gap: 8px 18px;
      margin-top: 18px;
    }
    .ev-pastcard__recorded {
      display: inline-flex; align-items: center; gap: 7px;
      font-family: var(--font-body); font-size: 0.875rem; font-weight: 600;
      color: var(--on-surface-variant);
    }
    .ev-pastcard__recorded svg { width: 15px; height: 15px; color: var(--brass); }
    .ev-pastcard__watch {
      display: inline-flex; align-items: center; gap: 6px;
      font-family: var(--font-body); font-weight: 700; font-size: 0.9375rem;
      color: var(--primary); transition: gap 150ms ease, color 150ms ease;
    }
    .ev-pastcard:hover .ev-pastcard__watch { gap: 10px; color: var(--brass); }
    .ev-pastcard__watch svg { width: 16px; height: 16px; }

    /* --- Responsive -------------------------------------------------- */
    @media (max-width: 900px) {
      .ev-feature-card__grid { grid-template-columns: 1fr; }
      .ev-feature-card__copy { padding-right: 0; }
      .ev-grid { grid-template-columns: repeat(2, 1fr); }
      .ev-pastcard { grid-template-columns: 1fr; }
      .ev-pastcard__media { aspect-ratio: 16 / 9; }
      .ev-pastcard__body { padding: 0 clamp(22px, 5vw, 32px) clamp(24px, 5vw, 32px); }
    }
    @media (max-width: 600px) {
      .ev-grid { grid-template-columns: 1fr; }
    }

    /* --- Motion fallback --------------------------------------------- */
    @media (prefers-reduced-motion: reduce) {
      .ev-card, .ev-pastcard, .ev-pastcard__media img,
      .ev-link, .ev-pastcard__watch {
        transition: none;
      }
      .ev-card:hover, .ev-pastcard:hover { transform: none; }
      .ev-pastcard:hover .ev-pastcard__media img { transform: none; }
    }

    /* ================================================================
       ACCESS MODAL — opened by every event CTA
       ================================================================ */
    .ev-modal {
      position: fixed; inset: 0; z-index: 1000;
      display: grid; place-items: center;
      padding: clamp(16px, 4vw, 40px);
    }
    .ev-modal[hidden] { display: none; }
    .ev-modal__backdrop {
      position: absolute; inset: 0;
      background: rgba(2, 12, 26, 0.62);
      backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px);
      opacity: 0; transition: opacity 200ms ease;
    }
    .ev-modal.is-open .ev-modal__backdrop { opacity: 1; }

    .ev-modal__dialog {
      position: relative; z-index: 1;
      width: min(980px, 100%); max-height: 92vh;
      overflow-x: hidden; overflow-y: auto;
      background: var(--surface-container-lowest);
      border-radius: var(--radius-3xl);
      box-shadow: 0 40px 100px rgba(2, 28, 54, 0.45);
      opacity: 0; transform: translateY(16px) scale(0.985);
      transition: opacity 220ms ease, transform 220ms ease;
    }
    .ev-modal.is-open .ev-modal__dialog { opacity: 1; transform: none; }

    .ev-modal__close {
      position: absolute; top: 14px; right: 14px; z-index: 3;
      width: 40px; height: 40px; display: grid; place-items: center;
      border-radius: 50%; color: #fff;
      background: rgba(2, 12, 26, 0.45);
      border: 1px solid rgba(255, 255, 255, 0.22);
      transition: background 150ms ease, transform 150ms ease;
    }
    .ev-modal__close:hover { background: rgba(2, 12, 26, 0.7); transform: scale(1.05); }
    .ev-modal__close svg { width: 20px; height: 20px; }

    /* Navy header band — holds the image strip + heading */
    .ev-modal__head {
      position: relative; overflow: hidden;
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      color: var(--on-primary);
      border-radius: var(--radius-3xl) var(--radius-3xl) 0 0;
    }

    /* Image strip — square event tiles full-bleed across the top of the navy
       band, flush together, fading down into the navy (and softly at the
       sides) just like the live-events collage. */
    .ev-modal__strip { position: relative; }
    .ev-modal__strip-row {
      display: grid; grid-template-columns: repeat(5, 1fr);
    }
    .ev-modal__strip-row img {
      width: 100%; aspect-ratio: 1 / 1; object-fit: cover; display: block;
    }
    /* Gradient fade: tiles dissolve into the navy at the bottom + edges. */
    .ev-modal__strip::after {
      content: ""; position: absolute; inset: 0; pointer-events: none;
      background:
        linear-gradient(180deg, rgba(6, 14, 28, 0) 38%, rgba(6, 14, 28, 0.65) 78%, #021c36 100%),
        linear-gradient(90deg, rgba(6, 14, 28, 0.55) 0%, rgba(6, 14, 28, 0) 12%, rgba(6, 14, 28, 0) 88%, rgba(6, 14, 28, 0.55) 100%);
    }

    /* Heading */
    .ev-modal__head-in {
      position: relative; z-index: 1;
      padding: clamp(22px, 3vw, 32px) clamp(24px, 4vw, 48px) clamp(28px, 3.5vw, 40px);
      text-align: center; max-width: 40rem; margin-inline: auto;
    }
    .ev-modal__head-in .tlc-eyebrow { color: var(--brass-bright); justify-content: center; }
    .ev-modal__title {
      font-family: var(--font-display); font-weight: 800;
      font-size: clamp(1.5rem, 1.15rem + 1.6vw, 2.125rem);
      line-height: 1.1; letter-spacing: -0.02em; color: #fff; margin: 10px 0 0;
    }
    .ev-modal__sub {
      font-family: var(--font-body); font-size: 1rem; line-height: 1.6;
      color: rgba(255, 255, 255, 0.80); margin: 12px 0 0;
    }

    /* Body — two columns with an "or" divider between */
    .ev-modal__body {
      display: grid; grid-template-columns: 1fr auto 1fr;
      gap: clamp(20px, 2.4vw, 32px); align-items: stretch;
      padding: clamp(24px, 3.2vw, 40px);
    }
    .ev-modal__body .tlc-navy,
    .ev-modal__body .tlc-split { height: 100%; }
    /* Member-platform image at the bottom of the navy Join card; bleeds flush
       to the card edges, below the button. The .tlc-navy clips it via overflow. */
    .ev-modal__body .tlc-navy { display: flex; flex-direction: column; }
    .ev-modal__body .tlc-navy .tlc-navy__in { flex: 1; }
    .ev-join__media { margin-top: auto; }
    .ev-join__media img { display: block; width: 100%; height: auto; }
    .ev-modal__or {
      display: flex; flex-direction: column; align-items: center; gap: 12px;
      color: var(--on-surface-variant);
      font-family: var(--font-display); font-weight: 700; font-size: 0.8125rem;
      text-transform: uppercase; letter-spacing: 0.12em;
    }
    .ev-modal__or::before, .ev-modal__or::after {
      content: ""; flex: 1; width: 1px; background: var(--outline-variant);
    }
    .ev-modal__book-iframe {
      display: block; width: calc(100% + 44px); margin-left: -22px;
      min-height: 560px; border: none; overflow: hidden;
    }

    @media (max-width: 760px) {
      .ev-modal__body { grid-template-columns: 1fr; }
      .ev-modal__or { flex-direction: row; }
      .ev-modal__or::before, .ev-modal__or::after { width: auto; height: 1px; }
    }

    @media (prefers-reduced-motion: reduce) {
      .ev-modal__backdrop, .ev-modal__dialog, .ev-modal__close { transition: none; }
      .ev-modal__dialog { transform: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main ev">

    <!-- ───────────────────── Page hero ───────────────────── -->
    <section class="ev-hero">
      <div class="container ev-hero__inner" data-reveal="up">
        <span class="eyebrow"><span class="eyebrow__text">Live Events &amp; Masterclasses</span></span>
        <h1><em>Learn Live</em> with The Loan Atlas</h1>
        <p class="ev-hero__dek">As a member of The Loan Atlas, you're never more than a week away from your next live coaching.</p>
      </div>
    </section>

    <!-- ───────────────────── SECTION 1 — Featured event (card) ───────────────────── -->
    <section class="ev-section ev-section--feature" aria-labelledby="ev-featured-heading">
      <div class="container">
        <article class="ev-feature-card" data-reveal="up">

          <div class="ev-feature-card__grid">
            <!-- Square thumbnail -->
            <a class="ev-feature-card__media" href="/lead-generation-that-converts/" tabindex="-1" aria-hidden="true">
              <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-Lead-Generation-That-Converts-0806-1x1.jpg" alt="Lead Generation That Converts masterclass — The Loan Atlas" loading="eager" />
            </a>

            <!-- Copy -->
            <div class="ev-feature-card__copy">
              <span class="ev-tag ev-tag--on-dark ev-tag--masterclass">Next Live Masterclass</span>
              <h1 id="ev-featured-heading" class="ev-feature-card__title">Lead Generation That Converts: What Loan Originators Should Do Now</h1>
              <div class="ev-feature-card__meta">
                <span class="ev-feature-card__meta-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Thursday, August 6, 2026
                </span>
                <span class="ev-feature-card__meta-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 14"></polyline></svg>
                  11:00 AM PT
                </span>
              </div>
              <p class="ev-feature-card__desc">Tim Braheem will interview Michael Regan and Jay Voorhees. They will share what is actually working right now to generate leads, build trust, and create consistent conversations without depending on constant social media posting or complicated digital marketing strategies.</p>
              <a class="btn btn--gold btn--xl" href="/lead-generation-that-converts/">Learn More and Get Access</a>
            </div>
          </div>

        </article>
      </div>
    </section>

    <!-- ───────────────────── SECTION 2 — Upcoming events ───────────────────── -->
    <section class="ev-section">
      <div class="container">
        <header class="ev-head" data-reveal="up">
          <h2 class="ev-title">Upcoming Live Events</h2>
          <p class="ev-dek">Masterclasses, office hours, AI Labs and Talk to Tim sessions — all part of being a member of The Loan Atlas.</p>
        </header>

        <div class="ev-grid" data-reveal-stagger="80">

          <article class="ev-card">
            <a class="ev-card__media" href="/talk-to-tim/" tabindex="-1" aria-hidden="true"><img src="<?php echo TLA_BASE; ?>/assets/live-events/Talk-to-Tim-0731.png" alt="Talk to Tim live session" loading="lazy" /></a>
            <div class="ev-card__body">
              <div class="ev-card__date">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Jul 31, 2026 · 10:00 AM PT
              </div>
              <h3 class="ev-card__title">Talk to Tim</h3>
              <p class="ev-card__desc">Business or personal, Tim Braheem brings out his decades of experience to help you overcome whatever challenges are keeping you from reaching peak performance.</p>
              <div class="ev-card__foot"><a class="ev-card__join" href="/talk-to-tim/">Learn More</a></div>
            </div>
          </article>

          <article class="ev-card">
            <a class="ev-card__media" href="/office-hours-trevor-carlson/" tabindex="-1" aria-hidden="true"><img src="<?php echo TLA_BASE; ?>/assets/live-events/Office-Hours-Trevor-Carlson-0805.png" alt="Office Hours with Trevor Carlson" loading="lazy" /></a>
            <div class="ev-card__body">
              <div class="ev-card__date">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Aug 5, 2026 · 11:00 AM PT
              </div>
              <h3 class="ev-card__title">Office Hours with Trevor Carlson</h3>
              <p class="ev-card__desc">Join this session with Trevor Carlson, whose niche / specialty is in the area of Reverse Mortgage, Systems and Consumer Direct Marketing.</p>
              <div class="ev-card__foot"><a class="ev-card__join" href="/office-hours-trevor-carlson/">Learn More</a></div>
            </div>
          </article>

          <article class="ev-card">
            <a class="ev-card__media" href="/office-hours-michael-belfor/" tabindex="-1" aria-hidden="true"><img src="<?php echo TLA_BASE; ?>/assets/live-events/Office-Hours-Michael-Belfor-0812.png" alt="Office Hours with Michael Belfor" loading="lazy" /></a>
            <div class="ev-card__body">
              <div class="ev-card__date">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Aug 12, 2026 · 11:00 AM PT
              </div>
              <h3 class="ev-card__title">Office Hours with Michael Belfor</h3>
              <p class="ev-card__desc">Join this session with Michael Belfor, whose niche / specialty is in the area of Advanced Loan Structuring, Market Literacy, and AI-Powered Efficiency.</p>
              <div class="ev-card__foot"><a class="ev-card__join" href="/office-hours-michael-belfor/">Learn More</a></div>
            </div>
          </article>

          <article class="ev-card">
            <a class="ev-card__media" href="/ai-lab-success-with-follow-up-pro/" tabindex="-1" aria-hidden="true"><img src="<?php echo TLA_BASE; ?>/assets/live-events/AI-Lab-Success-With-Follow-Up-Pro-0813-1x1.jpg" alt="AI Lab: Success With Follow Up Pro" loading="lazy" /></a>
            <div class="ev-card__body">
              <div class="ev-card__date">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Aug 13, 2026 · 11:00 AM PT
              </div>
              <h3 class="ev-card__title">AI Lab: Success With Follow Up Pro</h3>
              <p class="ev-card__desc">Join us for a live Follow-Up Pro Show &amp; Tell, where two Loan Atlas members will show how they've made Follow-Up Pro part of their daily workflow to stay consistent and create a better experience for borrowers and referral partners.</p>
              <div class="ev-card__foot"><a class="ev-card__join" href="/ai-lab-success-with-follow-up-pro/">Learn More</a></div>
            </div>
          </article>

          <article class="ev-card">
            <a class="ev-card__media" href="/office-hours-becky-staples/" tabindex="-1" aria-hidden="true"><img src="<?php echo TLA_BASE; ?>/assets/live-events/Office-Hours-Beck-Staples-0819.png" alt="Office Hours with Becky Staples" loading="lazy" /></a>
            <div class="ev-card__body">
              <div class="ev-card__date">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Aug 19, 2026 · 11:00 AM PT
              </div>
              <h3 class="ev-card__title">Office Hours with Becky Staples</h3>
              <p class="ev-card__desc">Join this session with Becky Staples, whose niche / specialty is in the area of Fundamentals, Production Systems, and Consistent Execution.</p>
              <div class="ev-card__foot"><a class="ev-card__join" href="/office-hours-becky-staples/">Learn More</a></div>
            </div>
          </article>

          <article class="ev-card">
            <a class="ev-card__media" href="/market-update-with-barry-habib/" tabindex="-1" aria-hidden="true"><img src="<?php echo TLA_BASE; ?>/assets/live-events/Market-Update-Barry-Habib-0820-1x1.jpg" alt="Market Update with Barry Habib" loading="lazy" /></a>
            <div class="ev-card__body">
              <div class="ev-card__date">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Aug 20, 2026 · 11:00 AM PT
              </div>
              <h3 class="ev-card__title">Market Update with Barry Habib</h3>
              <p class="ev-card__desc">Join Tim Braheem for an exclusive Loan Atlas webinar with Barry Habib, CEO of MBS Highway and the leading economist of the mortgage industry. Gain expert insights into where the mortgage and real estate markets are headed.</p>
              <div class="ev-card__foot"><a class="ev-card__join" href="/market-update-with-barry-habib/">Learn More</a></div>
            </div>
          </article>

          <article class="ev-card">
            <a class="ev-card__media" href="/office-hours-tyler-osby/" tabindex="-1" aria-hidden="true"><img src="<?php echo TLA_BASE; ?>/assets/live-events/Office-Hours-Tyler-Osby-0826.png" alt="Office Hours with Tyler Osby" loading="lazy" /></a>
            <div class="ev-card__body">
              <div class="ev-card__date">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Aug 26, 2026 · 11:00 AM PT
              </div>
              <h3 class="ev-card__title">Office Hours with Tyler Osby</h3>
              <p class="ev-card__desc">Join this session with Tyler Osby, whose niche / specialty is in the area of Systems, Technology, Scripting and Business Development.</p>
              <div class="ev-card__foot"><a class="ev-card__join" href="/office-hours-tyler-osby/">Learn More</a></div>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- ───────────────────── SECTION 3 — Past Masterclasses & AI Labs ───────────────────── -->
    <section class="ev-section ev-section--alt">
      <div class="container">
        <header class="ev-head" data-reveal="up">
          <h2 class="ev-title">Past Masterclasses &amp; AI Labs</h2>
          <p class="ev-dek">Missed one live? Catch up on recorded masterclasses and AI Labs any time.</p>
        </header>

        <div class="ev-library" data-reveal-stagger="90">

          <!-- Whole card is clickable → replay detail page -->
          <a class="ev-pastcard" href="/2026-mid-year-playbook/">
            <div class="ev-pastcard__media">
              <img src="<?php echo TLA_BASE; ?>/assets/live-events/past-events/Masterclass-2026-Mid-Year-Playbook-0716-16x9.jpg" alt="" loading="lazy" />
            </div>
            <div class="ev-pastcard__body">
              <span class="ev-pastcard__recorded">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Recorded on Jul 16, 2026
              </span>
              <h3 class="ev-pastcard__title">2026 Mid-Year Playbook: What Top Producers Are Doing Now</h3>
              <p class="ev-pastcard__desc">Top-producing Loan Atlas faculty members shared what they are doubling down on, what they have stopped doing, and what they believe loan officers need to focus on for the second half of the year.</p>
              <div class="ev-pastcard__foot">
                <span class="ev-pastcard__watch">Access the Replay <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
              </div>
            </div>
          </a>

          <!-- Whole card is clickable → replay detail page -->
          <a class="ev-pastcard" href="/winning-the-ai-game/">
            <div class="ev-pastcard__media">
              <img src="<?php echo TLA_BASE; ?>/assets/live-events/past-events/Masterclass-Winning-AI-Game-0709-16x9.jpg" alt="" loading="lazy" />
            </div>
            <div class="ev-pastcard__body">
              <span class="ev-pastcard__recorded">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Recorded on Jul 9, 2026
              </span>
              <h3 class="ev-pastcard__title">Winning the AI Game: How Top Loan Originators Are Using AI to Gain Massive Leverage</h3>
              <p class="ev-pastcard__desc">Top producers in 2026 aren't using AI for the occasional task — they're building their businesses around it. In this exclusive webinar, Highway + The Loan Atlas share the systems they use to turn conversations and follow-up into a consistent execution system — and the mindset shift that makes it stick.</p>
              <div class="ev-pastcard__foot">
                <span class="ev-pastcard__watch">Access the Replay <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
              </div>
            </div>
          </a>

          <a class="ev-pastcard" href="#" data-ev-modal>
            <div class="ev-pastcard__media">
              <img src="<?php echo TLA_BASE; ?>/assets/live-events/past-events/Masterclass-Fuel-Your-Fire-0611-16x9.jpg" alt="" loading="lazy" />
            </div>
            <div class="ev-pastcard__body">
              <span class="ev-pastcard__recorded">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Recorded on Jun 11, 2026
              </span>
              <h3 class="ev-pastcard__title">Fuel Your Fire: Finding Purpose &amp; Creating Lasting Impact</h3>
              <p class="ev-pastcard__desc">Tim Braheem and Matt Bassitt explore how authentic leadership, purpose-driven work, and intentional community involvement can shape long-term success — and how creating a nonprofit can be a meaningful way to serve others, expand your reach, and make a lasting difference in the communities you care about most.</p>
              <div class="ev-pastcard__foot">
                <span class="ev-pastcard__watch">Access the Replay <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
              </div>
            </div>
          </a>

          <a class="ev-pastcard" href="#" data-ev-modal>
            <div class="ev-pastcard__media">
              <img src="<?php echo TLA_BASE; ?>/assets/live-events/past-events/Talk-To-Tim-0616-16x9.jpg" alt="" loading="lazy" />
            </div>
            <div class="ev-pastcard__body">
              <span class="ev-pastcard__recorded">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Recorded on Jun 19, 2026
              </span>
              <h3 class="ev-pastcard__title">Talk to Tim Live</h3>
              <p class="ev-pastcard__desc">Tim Braheem worked through the toughest deals, hardest conversations, and stuck decisions originators brought to the call — going past tactics into the mindset, fear, and identity blocks that quietly cap production.</p>
              <div class="ev-pastcard__foot">
                <span class="ev-pastcard__watch">Access the Replay <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
              </div>
            </div>
          </a>

          <!-- Whole card is clickable → replay detail page -->
          <a class="ev-pastcard" href="/ai-lab-follow-up-pro/">
            <div class="ev-pastcard__media">
              <img src="<?php echo TLA_BASE; ?>/assets/live-events/past-events/AI-Lab-Follow-Up-Pro-0514-16x9.jpg" alt="" loading="lazy" />
            </div>
            <div class="ev-pastcard__body">
              <span class="ev-pastcard__recorded">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Recorded on May 14, 2026
              </span>
              <h3 class="ev-pastcard__title">AI Lab: Follow Up Pro – Analyze, Organize, and Execute on Every Conversation in 90 Seconds</h3>
              <p class="ev-pastcard__desc">You just got off a great borrower call. Now imagine that in the next 90 seconds, you have organized notes, a CRM-ready summary, a tailored follow-up email to the client, and a proactive update to the referring agent — all written in your voice, ready to send.</p>
              <div class="ev-pastcard__foot">
                <span class="ev-pastcard__watch">Access the Replay <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
              </div>
            </div>
          </a>

          <a class="ev-pastcard" href="#" data-ev-modal>
            <div class="ev-pastcard__media">
              <img src="<?php echo TLA_BASE; ?>/assets/live-events/past-events/Sales-Leadership-Panel-0507-16x9.jpg" alt="" loading="lazy" />
            </div>
            <div class="ev-pastcard__body">
              <span class="ev-pastcard__recorded">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Recorded on May 7, 2026
              </span>
              <h3 class="ev-pastcard__title">Sales Leadership Panel</h3>
              <p class="ev-pastcard__desc">A highly engaging Sales Panel Masterclass featuring top producers and leaders inside The Loan Atlas community. This was a real, conversational panel that delivered practical insights you can immediately apply to your business.</p>
              <div class="ev-pastcard__foot">
                <span class="ev-pastcard__watch">Access the Replay <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
              </div>
            </div>
          </a>

        </div>
      </div>
    </section>

  </main>

  <!-- ───────────────────── Access modal (opened by every event CTA) ───────────────────── -->
  <div class="ev-modal" id="ev-access-modal" hidden>
    <div class="ev-modal__backdrop" data-ev-close></div>
    <div class="ev-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="ev-modal-title">
      <button type="button" class="ev-modal__close" data-ev-close aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </button>

      <!-- Navy header band: uncropped image strip + heading -->
      <div class="ev-modal__head">
        <!-- Square event tiles, full-bleed across the top, fading into the navy -->
        <div class="ev-modal__strip" aria-hidden="true">
          <div class="ev-modal__strip-row">
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-2026-Playbook-0716.png" alt="" loading="lazy" />
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-Lead-Generation-That-Converts-0806-1x1.jpg" alt="" loading="lazy" />
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-Massive-Leverage-0709-1x1.png" alt="" loading="lazy" />
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Talk-to-Tim-0731.png" alt="" loading="lazy" />
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-Fuel-Your-Fire-0611.png" alt="" loading="lazy" />
          </div>
        </div>
        <div class="ev-modal__head-in">
          <span class="tlc-eyebrow">Join The Loan Atlas</span>
          <h2 class="ev-modal__title" id="ev-modal-title">Get Access to All Past &amp; Future Live Trainings and Coaching Calls</h2>
          <p class="ev-modal__sub">Every masterclass, AI Lab and Talk to Tim session — live and on demand — is included with your Loan Atlas membership.</p>
        </div>
      </div>

      <!-- Two-column body: join (left) + book a call (right) -->
      <div class="ev-modal__body">

        <!-- LEFT — Join The Loan Atlas (navy slab) -->
        <div class="tlc-navy">
          <div class="tlc-navy__in">
            <h3 class="tlc-navy__title">Join The Loan Atlas</h3>
            <p class="tlc-navy__text">Unlock every live event plus everything inside the membership:</p>
            <svg width="0" height="0" aria-hidden="true" style="position:absolute"><defs><linearGradient id="evGoldCheck" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#c9961c"/><stop offset="50%" stop-color="#eac25a"/><stop offset="100%" stop-color="#ffd56c"/></linearGradient></defs></svg>
            <ul class="tlc-list">
              <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#evGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>Live + on-demand access</strong> to every masterclass, office hours and AI Lab</span></li>
              <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#evGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>Seven live coaching calls</strong> every month</span></li>
              <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#evGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>200+ training modules</strong> across the 8 Disciplines of Loan Origination Mastery</span></li>
              <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#evGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>An all-star faculty</strong> with over $29 billion in collective loan funding</span></li>
              <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#evGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>The Ultimate AI GPT Coach</strong> for scripting, follow-up, realtor relationships and more</span></li>
            </ul>
            <a class="tlc-btn" href="/join/">View Membership Options</a>
          </div>
          <div class="ev-join__media">
            <img src="<?php echo TLA_BASE; ?>/assets/hero image.png" alt="The Loan Atlas member platform" loading="lazy" />
          </div>
        </div>

        <!-- Either/or divider -->
        <div class="ev-modal__or" aria-hidden="true"><span>or</span></div>

        <!-- RIGHT — Book a free coaching session (gold-header split + calendar) -->
        <div class="tlc-split">
          <div class="tlc-split__cap">
            <h3 class="tlc-split__cap-title">Book a Free Coaching Session</h3>
          </div>
          <div class="tlc-split__body" style="padding-bottom:0;">
            <p style="margin-bottom:14px;">Get a tour of everything inside The Loan Atlas and find out what your business is missing. Pick a time below.</p>
            <iframe src="https://api.leadconnectorhq.com/widget/booking/sNSShvRjEhTdDcR9MTmx"
              class="ev-modal__book-iframe" scrolling="no"
              id="ev-modal-booking" title="Schedule Booking"></iframe>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
  <script>
    /* ── Events access modal: every CTA with [data-ev-modal] opens it ── */
    (function () {
      var modal = document.getElementById('ev-access-modal');
      if (!modal) return;
      var dialog = modal.querySelector('.ev-modal__dialog');
      var lastFocus = null;

      function open(e) {
        if (e) e.preventDefault();
        lastFocus = document.activeElement;
        modal.hidden = false;
        document.body.style.overflow = 'hidden';
        /* next frame so the transition runs */
        requestAnimationFrame(function () { modal.classList.add('is-open'); });
        var closeBtn = modal.querySelector('.ev-modal__close');
        if (closeBtn) closeBtn.focus();
      }
      function close() {
        modal.classList.remove('is-open');
        document.body.style.overflow = '';
        var onEnd = function () {
          modal.hidden = true;
          dialog.removeEventListener('transitionend', onEnd);
        };
        dialog.addEventListener('transitionend', onEnd);
        /* fallback if no transition fires */
        setTimeout(function () { if (!modal.classList.contains('is-open')) modal.hidden = true; }, 320);
        if (lastFocus && lastFocus.focus) lastFocus.focus();
      }

      document.querySelectorAll('[data-ev-modal]').forEach(function (btn) {
        btn.addEventListener('click', open);
      });
      modal.querySelectorAll('[data-ev-close]').forEach(function (el) {
        el.addEventListener('click', close);
      });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !modal.hidden) close();
      });
    })();
  </script>
