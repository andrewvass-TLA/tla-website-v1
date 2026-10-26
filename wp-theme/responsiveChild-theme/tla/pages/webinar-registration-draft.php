<?php
/**
 * Body partial for /webinar-registration-draft/ (TLA Full HTML template).
 * Generated from public/webinar-registration-pages/webinar-registration.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Winning in 2026: The Eight Disciplines of Origination Mastery — The Loan Atlas';
$tla_description = 'A live session with Tim Braheem, exclusively for Revolution Mortgage: build and run the system that wins in a hard market, before January.';
$tla_active      = '';
?>
  <style>
    .wr {
      background: var(--surface-container-lowest);
      color: var(--on-surface);
      font-family: var(--font-body);
    }
    .wr-wrap { width: 100%; max-width: 1000px; margin-inline: auto; padding-inline: var(--gutter); }

    /* Countdown tiles (register band) */
    .wr-count { display: flex; align-items: center; gap: 10px; }
    .wr-count__unit { display: flex; align-items: center; gap: 6px; }
    .wr-count__num {
      min-width: 52px; padding: 8px 10px; text-align: center;
      background: var(--surface-container-lowest);
      border-radius: var(--radius-md);
      box-shadow: 0 2px 10px rgba(2, 28, 54, 0.14);
      font-family: var(--font-display); font-weight: 800; font-size: 1.125rem;
      color: var(--primary); font-variant-numeric: tabular-nums; line-height: 1.2;
    }
    .wr-count__lbl { font-size: 0.6875rem; color: var(--outline); }
    .wr-count--stack .wr-count__unit { flex-direction: column; gap: 8px; }
    .wr-count--stack { gap: 16px; justify-content: center; }
    .wr-count--stack .wr-count__num { min-width: 64px; padding: 12px 12px; font-size: 1.375rem; }
    .wr-count--stack .wr-count__lbl { font-size: 0.75rem; }
    .wr-count__live {
      font-family: var(--font-display); font-weight: 700; color: var(--primary);
    }

    /* --- Buttons -------------------------------------------------------- */
    .wr-btn {
      display: inline-flex; align-items: center; justify-content: center;
      padding: 15px 30px; border: 0; border-radius: var(--radius);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      color: var(--primary); cursor: pointer; text-decoration: none;
      font-family: var(--font-display); font-weight: 800; font-size: 0.9375rem;
      box-shadow: 0 6px 18px rgba(201, 150, 28, 0.32);
      transition: transform 160ms ease, box-shadow 160ms ease, filter 160ms ease;
    }
    .wr-btn:hover { transform: translateY(-2px); filter: brightness(1.04); box-shadow: 0 10px 24px rgba(201, 150, 28, 0.4); }
    .wr-btn:focus-visible { outline: 3px solid var(--primary-fixed-dim); outline-offset: 3px; }

    /* Brass gradient text — the template's two-tone highlight word */
    .wr-grad {
      background: linear-gradient(135deg, #a87a0e 0%, #c9961c 45%, #e0ae35 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }

    /* --- Hero ----------------------------------------------------------- */
    .wr-hero {
      background:
        radial-gradient(120% 90% at 85% 0%, rgba(177, 200, 233, 0.55) 0%, rgba(177, 200, 233, 0) 60%),
        linear-gradient(180deg, #e9f0f8 0%, #f3f6fa 70%, #f7f9fb 100%);
      padding-block: clamp(48px, 7vw, 88px);
    }
    .wr-hero__grid {
      display: grid; grid-template-columns: 1.05fr 1fr; gap: clamp(32px, 4vw, 56px);
      align-items: center;
    }
    .wr-hero__title {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: clamp(2rem, 3.6vw, 2.75rem); line-height: 1.18; letter-spacing: -0.01em;
      margin: 0 0 18px;
    }
    .wr-hero__title u { text-decoration-thickness: 3px; text-underline-offset: 6px; }
    .wr-hero__lede { font-size: 1.0625rem; line-height: 1.65; color: var(--on-surface-variant); margin: 0 0 24px; max-width: 34em; }
    .wr-pill {
      display: inline-flex; align-items: center; gap: 10px;
      padding: 11px 22px; border-radius: var(--radius-md);
      background: var(--primary); color: #fff;
      font-family: var(--font-display); font-weight: 700; font-size: 0.9375rem;
      margin-bottom: 28px;
    }
    .wr-pill svg { width: 18px; height: 18px; color: var(--brass-bright); flex-shrink: 0; }
    .wr-hero__cta { display: block; }

    .wr-video {
      position: relative; aspect-ratio: 16 / 9; overflow: hidden;
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-xl);
      background: var(--primary);
    }
    .wr-video img { width: 100%; height: 100%; object-fit: cover; display: block; }

    /* Hero title card — navy band, title left, Tim cutout right */
    .wr-card {
      background:
        radial-gradient(70% 90% at 78% 70%, rgba(201, 150, 28, 0.28) 0%, rgba(201, 150, 28, 0) 65%),
        linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      color: #fff;
    }
    .wr-card__copy {
      position: relative; z-index: 1; height: 100%; width: 62%;
      display: flex; flex-direction: column; justify-content: center;
      padding: 6% 0 6% 7%;
    }
    .wr-card__tag {
      align-self: flex-start; margin-bottom: 10px; padding: 4px 10px;
      border: 1px solid rgba(234, 194, 90, 0.6); border-radius: var(--radius-full);
      font-size: clamp(0.5625rem, 1vw, 0.6875rem); font-weight: 700; letter-spacing: 0.14em;
      text-transform: uppercase; color: var(--brass-bright);
    }
    .wr-card__title {
      margin: 0; font-family: var(--font-display); font-weight: 800; line-height: 1.05;
      font-size: clamp(1.375rem, 2.9vw, 2.125rem); letter-spacing: -0.01em;
    }
    .wr-card__sub {
      margin: 6px 0 0; font-family: var(--font-display); font-weight: 700; line-height: 1.25;
      font-size: clamp(0.75rem, 1.35vw, 1rem); color: var(--brass-bright);
    }
    .wr-card__by { margin: 10px 0 0; font-size: clamp(0.6875rem, 1.1vw, 0.8125rem); color: rgba(255, 255, 255, 0.78); }
    .wr-card__for {
      display: flex; align-items: center; gap: 8px; margin-top: auto; padding-top: 10px;
      font-size: clamp(0.5625rem, 0.95vw, 0.6875rem); color: rgba(255, 255, 255, 0.7);
      text-transform: uppercase; letter-spacing: 0.1em;
    }
    .wr-card__for img { height: clamp(18px, 2.6vw, 26px); width: auto; display: block; }
    .wr-video .wr-card__tim {
      position: absolute; right: -2%; bottom: 0; width: auto; height: 108%;
      object-fit: contain; object-position: bottom;
    }

    /* --- About the webinar ---------------------------------------------- */
    .wr-about + .wr-sec { padding-top: 0; }
    .wr-eyebrow {
      text-align: center; margin: 0 0 12px;
      font-weight: 700; font-size: 0.875rem; letter-spacing: 0.14em;
      text-transform: uppercase; color: var(--brass);
    }
    .wr-about__body { max-width: 720px; margin: 28px auto 0; }
    .wr-about__body p { font-size: 1.0625rem; line-height: 1.75; color: var(--on-surface-variant); margin: 0 0 20px; }
    .wr-about__body .wr-about__callout {
      margin: 0; padding: 22px 26px;
      background: #fbf6e8; border-left: 4px solid var(--brass);
      color: var(--primary);
    }
    .wr-about__callout strong { font-weight: 700; }

    @media (max-width: 860px) {
      .wr-hero__grid { grid-template-columns: 1fr; }
      .wr-hero__media { order: -1; }
    }

    /* --- Section headings ---------------------------------------------- */
    .wr-sec { padding-block: clamp(56px, 7vw, 96px); }
    .wr-h2 {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: clamp(1.75rem, 3.2vw, 2.375rem); line-height: 1.2; letter-spacing: -0.01em;
      text-align: center; margin: 0;
    }
    .wr-swash { position: relative; display: inline-block; }
    .wr-swash svg {
      position: absolute; left: -2%; bottom: -14px; width: 104%; height: 14px;
      color: var(--brass); overflow: visible;
    }
    .wr-sub {
      text-align: center; max-width: 36em; margin: 18px auto 0;
      font-size: 1.0625rem; line-height: 1.65; color: var(--on-surface-variant);
    }

    /* --- Speaker cards -------------------------------------------------- */
    .wr-speakers { display: grid; gap: 28px; margin-top: clamp(40px, 5vw, 64px); }
    .wr-speaker {
      display: grid; grid-template-columns: 1fr 260px; gap: clamp(28px, 4vw, 56px);
      align-items: center;
      background: var(--surface-container-lowest);
      box-shadow: 0 6px 30px rgba(2, 28, 54, 0.09);
      padding: clamp(28px, 4vw, 44px);
    }
    .wr-speaker--flip { grid-template-columns: 260px 1fr; }
    .wr-speaker--flip .wr-speaker__photo { order: -1; }
    .wr-speaker .wr-speaker__kicker {
      font-family: var(--font-body); font-weight: 600; font-size: 0.8125rem;
      letter-spacing: 0.16em; text-transform: uppercase; color: var(--brass);
      margin: 0 0 10px;
    }
    .wr-speaker__name {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: 1.625rem; line-height: 1.25; margin: 0 0 16px;
    }
    .wr-speaker p { font-size: 0.96875rem; line-height: 1.7; color: var(--on-surface-variant); margin: 0 0 14px; }
    .wr-speaker p:last-child { margin-bottom: 0; }
    .wr-speaker__stat {
      display: inline-block; margin-top: 6px; padding-top: 14px;
      border-top: 2px solid var(--secondary-fixed);
      font-family: var(--font-display); font-weight: 700; font-size: 0.9375rem; color: var(--primary);
    }
    .wr-speaker__photo { aspect-ratio: 4 / 5; overflow: hidden; background: var(--surface-container); }
    .wr-speaker__photo img { width: 100%; height: 100%; object-fit: cover; object-position: center top; display: block; }
    @media (max-width: 760px) {
      .wr-speaker, .wr-speaker--flip { grid-template-columns: 1fr; }
      .wr-speaker__photo, .wr-speaker--flip .wr-speaker__photo { order: -1; max-width: 240px; }
    }

    /* --- Laptop + learn list ------------------------------------------- */
    .wr-learn {
      display: grid; grid-template-columns: 1fr 1fr; gap: clamp(32px, 5vw, 64px);
      align-items: center; margin-top: clamp(56px, 7vw, 96px);
    }
    .wr-laptop { width: 100%; }
    .wr-laptop__screen {
      background: #0b0f17; padding: 3.2% 3.2% 3.6%;
      border-radius: 14px 14px 0 0;
      box-shadow: inset 0 0 0 1px #2a3240;
      margin-inline: 7%;
    }
    .wr-laptop__screen img { width: 100%; aspect-ratio: 16 / 10; object-fit: cover; object-position: left top; display: block; }
    .wr-laptop__base {
      height: 14px; position: relative;
      background: linear-gradient(180deg, #3a4150 0%, #1c212b 100%);
      border-radius: 0 0 14px 14px;
      box-shadow: 0 18px 30px rgba(2, 28, 54, 0.22);
    }
    .wr-laptop__base::before {
      content: ""; position: absolute; left: 50%; top: 0; transform: translateX(-50%);
      width: 16%; height: 5px; background: #12161e; border-radius: 0 0 6px 6px;
    }
    .wr-learn__title {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: clamp(1.5rem, 2.4vw, 1.875rem); line-height: 1.3; margin: 0 0 22px;
    }
    .wr-checks { list-style: none; margin: 0; padding: 0; display: grid; gap: 14px; }
    .wr-checks li { display: flex; gap: 12px; font-size: 0.96875rem; line-height: 1.6; color: var(--on-surface-variant); }
    .wr-checks svg { width: 16px; height: 16px; flex-shrink: 0; margin-top: 4px; color: var(--brass); }
    @media (max-width: 860px) { .wr-learn { grid-template-columns: 1fr; } }

    /* --- Before / After ------------------------------------------------- */
    .wr-expect {
      background:
        radial-gradient(90% 120% at 100% 50%, rgba(177, 200, 233, 0.45) 0%, rgba(177, 200, 233, 0) 60%),
        linear-gradient(180deg, #f1f5fa 0%, #eaf0f7 100%);
    }
    .wr-ba {
      display: grid; grid-template-columns: 1fr 1fr; gap: 32px;
      max-width: 800px; margin: clamp(40px, 5vw, 56px) auto 0;
    }
    .wr-ba__card {
      background: var(--surface-container-lowest);
      box-shadow: 0 6px 26px rgba(2, 28, 54, 0.08);
      padding: 30px 32px 34px;
    }
    .wr-ba__title {
      font-family: var(--font-display); font-weight: 800; font-size: 1.125rem;
      color: var(--primary); text-align: center; margin: 0 0 20px; letter-spacing: 0.01em;
    }
    .wr-ba__title .is-before { color: var(--error); }
    .wr-ba__title .is-after { color: var(--success); }
    .wr-ba ul { list-style: none; margin: 0; padding: 0; display: grid; gap: 13px; }
    .wr-ba li { display: flex; gap: 11px; font-size: 0.9375rem; line-height: 1.5; color: var(--on-surface-variant); }
    .wr-ba li svg { width: 18px; height: 18px; flex-shrink: 0; margin-top: 1px; }
    .wr-ba__card--before li svg { color: var(--error); }
    .wr-ba__card--after li svg { color: var(--success); }
    @media (max-width: 700px) { .wr-ba { grid-template-columns: 1fr; } }

    /* --- Register band -------------------------------------------------- */
    .wr-facts {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;
      max-width: 820px; margin: clamp(36px, 5vw, 52px) auto 44px;
    }
    .wr-fact__head {
      display: flex; align-items: center; gap: 10px; margin-bottom: 10px;
      font-family: var(--font-display); font-weight: 800; font-size: 1.125rem; color: var(--primary);
    }
    .wr-fact__head svg { width: 22px; height: 22px; color: var(--brass); }
    .wr-fact p { margin: 0; font-size: 0.9375rem; color: var(--on-surface-variant); }
    .wr-register__cta { text-align: center; margin-top: 32px; }
    @media (max-width: 640px) {
      .wr-facts { grid-template-columns: 1fr; gap: 22px; max-width: 320px; }
    }

    /* --- Footer --------------------------------------------------------- */
    .wr-foot {
      background: var(--primary); color: rgba(255, 255, 255, 0.82);
      padding-block: 44px; text-align: center; font-size: 0.8125rem;
    }
    .wr-foot p { margin: 0 0 14px; }
    .wr-foot__row { display: flex; flex-wrap: wrap; justify-content: center; gap: 6px 22px; margin-bottom: 14px; }
    .wr-foot__row span { display: inline-flex; align-items: center; gap: 7px; }
    .wr-foot__row svg { width: 14px; height: 14px; }
    .wr-foot a { color: inherit; text-decoration: none; }
    .wr-foot a:hover { color: var(--brass-bright); }
    .wr-foot__links { display: flex; flex-wrap: wrap; justify-content: center; }
    .wr-foot__links a { padding-inline: 10px; }
    .wr-foot__links a + a { border-left: 1px solid rgba(255, 255, 255, 0.4); }

    /* --- Registration modal --------------------------------------------- */
    .wr-modal { position: fixed; inset: 0; z-index: 100; display: grid; place-items: center; padding: 16px; }
    .wr-modal[hidden] { display: none; }
    .wr-modal__backdrop { position: absolute; inset: 0; background: rgba(2, 12, 26, 0.62); opacity: 0; transition: opacity 220ms ease; }
    .wr-modal__dialog {
      position: relative; width: 100%; max-width: 460px; max-height: calc(100vh - 32px); overflow: auto;
      background: var(--surface-container-lowest); border-radius: var(--radius-lg);
      box-shadow: var(--shadow-xl); padding: 34px 30px 30px;
      opacity: 0; transform: translateY(14px);
      transition: opacity 220ms ease, transform 220ms ease;
    }
    .wr-modal.is-open .wr-modal__backdrop { opacity: 1; }
    .wr-modal.is-open .wr-modal__dialog { opacity: 1; transform: none; }
    .wr-modal__close {
      position: absolute; top: 12px; right: 12px; width: 34px; height: 34px;
      display: grid; place-items: center; border: 0; border-radius: var(--radius-full);
      background: var(--surface-container-low); color: var(--primary); cursor: pointer;
    }
    .wr-modal__close svg { width: 16px; height: 16px; }
    .wr-modal__title {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: 1.5rem; line-height: 1.25; margin: 0 0 6px; padding-right: 30px;
    }
    .wr-modal__meta { font-size: 0.875rem; color: var(--on-surface-variant); margin: 0 0 22px; }
    .wr-form { display: grid; gap: 14px; }
    .wr-form label { display: grid; gap: 6px; font-size: 0.8125rem; font-weight: 600; color: var(--primary); }
    .wr-form input {
      font: inherit; font-size: 0.9375rem; font-weight: 400; color: var(--on-surface);
      padding: 12px 14px; border: 1px solid var(--outline-variant); border-radius: var(--radius-md);
      background: var(--surface-container-lowest);
    }
    .wr-form input:focus { outline: 2px solid var(--brass); outline-offset: 0; border-color: var(--brass); }
    .wr-form .wr-btn { width: 100%; margin-top: 6px; }
    .wr-form__fine { font-size: 0.75rem; color: var(--outline); text-align: center; margin: 4px 0 0; }

    @media (prefers-reduced-motion: reduce) {
      .wr-btn, .wr-modal__backdrop, .wr-modal__dialog { transition: none; }
      .wr-btn:hover { transform: none; }
      .wr-modal__dialog { transform: none; }
    }
  </style>


  <!-- ── Header (minimal landing chrome — logo only) ─────────────────────────── -->
<?php include get_stylesheet_directory() . '/tla/partials/header-minimal.php'; ?>

  <!-- Countdown target: Oct 14, 2026 11:00 AM PT (PDT, UTC-7) — TIME TBC -->
  <main class="wr" data-wr-deadline="2026-10-14T18:00:00Z">

    <!-- ─────────── Hero ─────────── -->
    <section class="wr-hero">
      <div class="wr-wrap">
        <div class="wr-hero__grid">
          <div data-reveal="up">
            <h1 class="wr-hero__title">Winning in <u>2026</u>: The <span class="wr-grad">Eight Disciplines</span> of Origination Mastery</h1>
            <p class="wr-hero__lede">A special live session with Tim Braheem, exclusively for Revolution Mortgage. Stop waiting on rates and get deliberate about the things you can actually control&nbsp;&mdash; before January.</p>
            <div class="wr-pill">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
              Wednesday, October 14th @ 11:00AM PT
            </div>
            <div class="wr-hero__cta">
              <button type="button" class="wr-btn" data-wr-register>Register Your Spot Now</button>
            </div>
          </div>
          <div class="wr-hero__media" data-reveal="up">
            <!-- Title card built in CSS (stands in for the template's video) -->
            <div class="wr-video wr-card" role="img" aria-label="Winning in 2026: The Eight Disciplines of Origination Mastery, with Tim Braheem — exclusively for Revolution Mortgage">
              <div class="wr-card__copy">
                <span class="wr-card__tag">Live Webinar</span>
                <p class="wr-card__title">Winning in 2026</p>
                <p class="wr-card__sub">The Eight Disciplines of Origination Mastery</p>
                <p class="wr-card__by">with Tim Braheem</p>
                <div class="wr-card__for">
                  <span>Exclusively for</span>
                  <img src="<?php echo TLA_BASE; ?>/assets/revolution-mortgage-logo.svg" alt="" />
                </div>
              </div>
              <img class="wr-card__tim" src="<?php echo TLA_BASE; ?>/assets/tim-braheem-smiling.webp" alt="" loading="eager" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ─────────── About the webinar ─────────── -->
    <section class="wr-sec wr-about">
      <div class="wr-wrap">
        <p class="wr-eyebrow" data-reveal="up">About This Webinar</p>
        <h2 class="wr-h2" data-reveal="up">Hope Isn&rsquo;t a Plan</h2>
        <div class="wr-about__body" data-reveal="up">
          <p>This market has been hard, and most originators are waiting it out&nbsp;&mdash; hoping that when rates drop, things get easier. But hope isn&rsquo;t a plan, and the ones who come out ahead won&rsquo;t be the ones who waited. They&rsquo;ll be the ones who got deliberate about the things they can actually control before January.</p>
          <p class="wr-about__callout">On <strong>October 14th</strong>, Tim Braheem and The Loan Atlas are going to show you how to build and run that system in a special session <strong>exclusively for Revolution Mortgage</strong>.</p>
        </div>
      </div>
    </section>

    <!-- ─────────── Speakers + what you'll learn ─────────── -->
    <section class="wr-sec">
      <div class="wr-wrap">
        <h2 class="wr-h2" data-reveal="up">Meet Your <span class="wr-swash">Speaker<svg viewBox="0 0 200 14" preserveAspectRatio="none" aria-hidden="true"><path d="M3 9 C 50 2, 120 1, 197 7" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round"/></svg></span></h2>

        <div class="wr-speakers">
          <article class="wr-speaker" data-reveal="up">
            <div>
              <p class="wr-speaker__kicker">Founder &amp; Chief Content Officer &middot; The Loan Atlas</p>
              <h3 class="wr-speaker__name">Tim Braheem</h3>
              <p>Tim is the founder of The Loan Atlas and the foundation it&rsquo;s built on. He&rsquo;s a producer who built coaching because he couldn&rsquo;t find coaching that worked&nbsp;&mdash; and now teaches the operating system he wishes he&rsquo;d had in the seat, every week, alongside the rest of the faculty.</p>
              <p>25+ years as a mortgage originator. Founded First Rate Financial in 1995 and co-founded Loantoolbox.com in 2001, which was named to the Inc. 500. Host of <em>The 360 Experience</em> podcast.</p>
              <span class="wr-speaker__stat">$1.4B in personal loan production</span>
            </div>
            <div class="wr-speaker__photo">
              <img src="<?php echo TLA_BASE; ?>/assets/tim-braheem-headshot.png" alt="Tim Braheem" loading="lazy" />
            </div>
          </article>
        </div>

        <div class="wr-learn">
          <div class="wr-laptop" data-reveal="up">
            <div class="wr-laptop__screen">
              <img src="<?php echo TLA_BASE; ?>/assets/ai-business-planning-screenshot.png" alt="The Loan Atlas business assessment, scored across the Eight Disciplines" loading="lazy" />
            </div>
            <div class="wr-laptop__base"></div>
          </div>
          <div data-reveal="up">
            <h2 class="wr-learn__title">What you&rsquo;ll learn during the live webinar:</h2>
            <ul class="wr-checks">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>The Eight Disciplines of Origination Mastery&nbsp;&mdash; and an honest score on where your business is strong and where it&rsquo;s leaking.</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Why lifting your conversion from two closes in ten to three can raise your income by 150%&nbsp;&mdash; and where that&rsquo;s slipping away.</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Where the deals are hiding in a slow market: the referral sources and niches most originators walk right past.</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>How to use AI as a real advantage in 2027&nbsp;&mdash; without letting it quietly replace the selling that pays you.</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>The customer-service system behind Tim&rsquo;s biggest years at 500+ loans.</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Live coaching on your real situation&nbsp;&mdash; bring what you&rsquo;re stuck on and get Tim&rsquo;s read in the room.</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ─────────── Before / After ─────────── -->
    <section class="wr-sec wr-expect">
      <div class="wr-wrap">
        <h2 class="wr-h2" data-reveal="up">What You Can Expect From This Webinar</h2>
        <p class="wr-sub" data-reveal="up">Most originators are waiting for rates to make things easier. Here&rsquo;s the shift from waiting it out to running a system you control.</p>

        <div class="wr-ba">
          <div class="wr-ba__card wr-ba__card--before" data-reveal="up">
            <h3 class="wr-ba__title"><span class="is-before">BEFORE</span> THIS WEBINAR&hellip;</h3>
            <ul>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm3.7 12.3a1 1 0 0 1-1.4 1.4L12 13.4l-2.3 2.3a1 1 0 0 1-1.4-1.4l2.3-2.3-2.3-2.3a1 1 0 0 1 1.4-1.4l2.3 2.3 2.3-2.3a1 1 0 0 1 1.4 1.4L13.4 12Z"/></svg>Waiting on rates to make things easier</li>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm3.7 12.3a1 1 0 0 1-1.4 1.4L12 13.4l-2.3 2.3a1 1 0 0 1-1.4-1.4l2.3-2.3-2.3-2.3a1 1 0 0 1 1.4-1.4l2.3 2.3 2.3-2.3a1 1 0 0 1 1.4 1.4L13.4 12Z"/></svg>Two closes in ten&nbsp;&mdash; and no idea why</li>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm3.7 12.3a1 1 0 0 1-1.4 1.4L12 13.4l-2.3 2.3a1 1 0 0 1-1.4-1.4l2.3-2.3-2.3-2.3a1 1 0 0 1 1.4-1.4l2.3 2.3 2.3-2.3a1 1 0 0 1 1.4 1.4L13.4 12Z"/></svg>Walking past referral sources and niches</li>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm3.7 12.3a1 1 0 0 1-1.4 1.4L12 13.4l-2.3 2.3a1 1 0 0 1-1.4-1.4l2.3-2.3-2.3-2.3a1 1 0 0 1 1.4-1.4l2.3 2.3 2.3-2.3a1 1 0 0 1 1.4 1.4L13.4 12Z"/></svg>Unsure where AI fits in your selling</li>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm3.7 12.3a1 1 0 0 1-1.4 1.4L12 13.4l-2.3 2.3a1 1 0 0 1-1.4-1.4l2.3-2.3-2.3-2.3a1 1 0 0 1 1.4-1.4l2.3 2.3 2.3-2.3a1 1 0 0 1 1.4 1.4L13.4 12Z"/></svg>Service that depends on memory</li>
            </ul>
          </div>
          <div class="wr-ba__card wr-ba__card--after" data-reveal="up">
            <h3 class="wr-ba__title"><span class="is-after">AFTER</span> THIS WEBINAR&hellip;</h3>
            <ul>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm4.7 7.7-5.5 5.5a1 1 0 0 1-1.4 0l-2.5-2.5a1 1 0 1 1 1.4-1.4l1.8 1.8 4.8-4.8a1 1 0 0 1 1.4 1.4Z"/></svg>An honest score across all Eight Disciplines</li>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm4.7 7.7-5.5 5.5a1 1 0 0 1-1.4 0l-2.5-2.5a1 1 0 1 1 1.4-1.4l1.8 1.8 4.8-4.8a1 1 0 0 1 1.4 1.4Z"/></svg>A plan to lift conversion to three in ten</li>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm4.7 7.7-5.5 5.5a1 1 0 0 1-1.4 0l-2.5-2.5a1 1 0 1 1 1.4-1.4l1.8 1.8 4.8-4.8a1 1 0 0 1 1.4 1.4Z"/></svg>New deal sources in a slow market</li>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm4.7 7.7-5.5 5.5a1 1 0 0 1-1.4 0l-2.5-2.5a1 1 0 1 1 1.4-1.4l1.8 1.8 4.8-4.8a1 1 0 0 1 1.4 1.4Z"/></svg>AI as an advantage, not a replacement</li>
              <li><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm4.7 7.7-5.5 5.5a1 1 0 0 1-1.4 0l-2.5-2.5a1 1 0 1 1 1.4-1.4l1.8 1.8 4.8-4.8a1 1 0 0 1 1.4 1.4Z"/></svg>A service system built for 500+ loan years</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ─────────── Register band ─────────── -->
    <section class="wr-sec">
      <div class="wr-wrap">
        <h2 class="wr-h2" data-reveal="up">Register For The <span class="wr-grad">Live Webinar</span></h2>

        <div class="wr-facts" data-reveal="up">
          <div class="wr-fact">
            <div class="wr-fact__head"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>Date</div>
            <p>Wednesday, October 14th, 2026</p>
          </div>
          <div class="wr-fact">
            <div class="wr-fact__head"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 14"></polyline></svg>Time</div>
            <p>11:00AM PT</p>
          </div>
          <div class="wr-fact">
            <div class="wr-fact__head"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="12" rx="2"></rect><line x1="2" y1="20" x2="22" y2="20"></line></svg>Location</div>
            <p>Online, from your laptop</p>
          </div>
        </div>

        <div class="wr-count wr-count--stack" data-wr-count data-reveal="up" aria-label="Time until the webinar starts">
          <div class="wr-count__unit"><span class="wr-count__num" data-wr-d>00</span><span class="wr-count__lbl">Days</span></div>
          <div class="wr-count__unit"><span class="wr-count__num" data-wr-h>00</span><span class="wr-count__lbl">Hrs</span></div>
          <div class="wr-count__unit"><span class="wr-count__num" data-wr-m>00</span><span class="wr-count__lbl">Mins</span></div>
          <div class="wr-count__unit"><span class="wr-count__num" data-wr-s>00</span><span class="wr-count__lbl">Secs</span></div>
        </div>

        <div class="wr-register__cta" data-reveal="up">
          <button type="button" class="wr-btn" data-wr-register>Register Your Spot Now</button>
        </div>
      </div>
    </section>

  </main>

  <!-- Slim footer in place of the site footer -->
  <footer class="wr-foot">
    <div class="wr-wrap">
      <p>&copy; 2026 The Loan Atlas. All Rights Reserved.</p>
      <div class="wr-foot__links">
        <a href="/terms-of-use/">Terms of Use</a>
        <a href="/privacy-policy/">Privacy Policy</a>
        <a href="/end-user-agreement/">End User Agreement</a>
        <a href="/contact/">Support</a>
      </div>
    </div>
  </footer>

  <!-- Registration modal -->
  <div class="wr-modal" id="wr-register-modal" hidden>
    <div class="wr-modal__backdrop" data-wr-close></div>
    <div class="wr-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="wr-modal-title">
      <button type="button" class="wr-modal__close" data-wr-close aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </button>
      <h2 class="wr-modal__title" id="wr-modal-title">Save Your Seat</h2>
      <p class="wr-modal__meta">Winning in 2026 &middot; Wed, Oct 14 &middot; 11:00AM PT</p>
      <!--
        TODO before going live: replace this placeholder form with the
        LeadConnector registration form embed (iframe src
        https://api.leadconnectorhq.com/widget/form/<FORM_ID>) — it does not
        submit anywhere yet.
      -->
      <form class="wr-form" onsubmit="return false;">
        <label>First Name<input type="text" name="first_name" autocomplete="given-name" required /></label>
        <label>Last Name<input type="text" name="last_name" autocomplete="family-name" required /></label>
        <label>Email<input type="email" name="email" autocomplete="email" required /></label>
        <label>Phone<input type="tel" name="phone" autocomplete="tel" /></label>
        <button type="submit" class="wr-btn">Register Your Spot Now</button>
        <p class="wr-form__fine">We&rsquo;ll email your join link and a reminder before we go live.</p>
      </form>
    </div>
  </div>

  <script>
    /* ── Countdown: fills every [data-wr-count] from main[data-wr-deadline] ── */
    (function () {
      var main = document.querySelector('[data-wr-deadline]');
      if (!main) return;
      var end = Date.parse(main.getAttribute('data-wr-deadline'));
      var counts = document.querySelectorAll('[data-wr-count]');
      function pad(n) { return n < 10 ? '0' + n : String(n); }
      function tick() {
        var ms = end - Date.now();
        if (ms <= 0) {
          counts.forEach(function (c) { c.innerHTML = '<span class="wr-count__live">We&rsquo;re live now</span>'; });
          clearInterval(timer);
          return;
        }
        var s = Math.floor(ms / 1000);
        var vals = { d: Math.floor(s / 86400), h: Math.floor(s % 86400 / 3600), m: Math.floor(s % 3600 / 60), s: s % 60 };
        counts.forEach(function (c) {
          c.querySelector('[data-wr-d]').textContent = pad(vals.d);
          c.querySelector('[data-wr-h]').textContent = pad(vals.h);
          c.querySelector('[data-wr-m]').textContent = pad(vals.m);
          c.querySelector('[data-wr-s]').textContent = pad(vals.s);
        });
      }
      var timer = setInterval(tick, 1000);
      tick();
    })();

    /* ── Registration modal: every [data-wr-register] opens it ── */
    (function () {
      var modal = document.getElementById('wr-register-modal');
      if (!modal) return;
      var lastFocus = null;
      function open() {
        lastFocus = document.activeElement;
        modal.hidden = false;
        document.body.style.overflow = 'hidden';
        requestAnimationFrame(function () { modal.classList.add('is-open'); });
        var first = modal.querySelector('input');
        if (first) first.focus();
      }
      function close() {
        modal.classList.remove('is-open');
        document.body.style.overflow = '';
        setTimeout(function () { modal.hidden = true; }, 230);
        if (lastFocus && lastFocus.focus) lastFocus.focus();
      }
      document.querySelectorAll('[data-wr-register]').forEach(function (b) { b.addEventListener('click', open); });
      modal.querySelectorAll('[data-wr-close]').forEach(function (b) { b.addEventListener('click', close); });
      document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !modal.hidden) close(); });
    })();
  </script>
