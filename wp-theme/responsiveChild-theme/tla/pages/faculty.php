<?php
/**
 * Body partial for /faculty/ (TLA Full HTML template).
 * Generated from public/faculty.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Faculty — The Loan Atlas';
$tla_description = 'Meet 18 active originators, leaders, and strategists — collectively responsible for $29B+ in funded loan volume — who teach inside The Loan Atlas every week.';
$tla_active      = 'faculty';
?>
  <style>
    /* ── Faculty page ─────────────────────────────────────────────── */

    .fh-hero {
      background:
        /* gradient fades from solid navy on the left to transparent on the right,
           revealing the image underneath */
        linear-gradient(to right,
          rgba(2, 28, 54, 1)    0%,
          rgba(2, 28, 54, 0.96) 30%,
          rgba(2, 28, 54, 0.78) 50%,
          rgba(2, 28, 54, 0.35) 75%,
          rgba(2, 28, 54, 0)    100%
        ),
        url('<?php echo TLA_BASE; ?>/assets/faculty-header.png') right center / cover no-repeat,
        /* fallback navy gradient if the image fails to load */
        linear-gradient(160deg, #021c36 0%, #0a1628 60%, #131b2e 100%);
      padding-top: calc(var(--header-h) + clamp(56px, 8vw, 96px));
      padding-bottom: clamp(56px, 8vw, 96px);
      position: relative;
      overflow: hidden;
    }
    .fh-hero::before {
      content: '';
      position: absolute;
      top: -80px;
      right: 8%;
      width: 540px;
      height: 540px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.11), transparent);
      filter: blur(70px);
      pointer-events: none;
    }
    .fh-hero::after {
      content: '';
      position: absolute;
      bottom: -80px;
      left: 4%;
      width: 400px;
      height: 400px;
      background: radial-gradient(closest-side, rgba(178, 200, 233, 0.08), transparent);
      filter: blur(70px);
      pointer-events: none;
    }
    .fh-hero__content {
      position: relative;
      z-index: 1;
      max-width: 52rem;
    }
    .fh-hero__title {
      font-family: var(--font-display);
      font-size: clamp(2.5rem, 1.7rem + 3.2vw, 4.25rem);
      line-height: 1.04;
      letter-spacing: -0.03em;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: var(--space-md);
    }
    .fh-hero__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .fh-hero__sub {
      font-size: clamp(1rem, 0.9rem + 0.5vw, 1.1875rem);
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.68);
      max-width: 40rem;
      margin-bottom: var(--space-lg);
    }
    .fh-hero__sub strong { color: #ffffff; font-weight: 700; }
    .fh-hero__actions {
      display: flex;
      flex-wrap: wrap;
      gap: var(--space-sm);
      margin-top: var(--space-md);
    }

    /* Leadership section wrapper — flows from faculty-intro (same bg),
       so its top padding is suppressed; faculty-intro's bottom padding
       defines the gap between copy and cards. */
    .leaders-section {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 96px);
      padding-top: 0;
      position: relative;
    }
    .leaders-section > .container { position: relative; }

    /* Faculty intro — heading + copy that introduces the leadership grid. */
    .faculty-intro {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 96px);
      text-align: center;
    }
    .faculty-intro__title {
      font-family: var(--font-display);
      font-size: clamp(2rem, 1.4rem + 2.2vw, 3rem);
      font-weight: 800;
      line-height: 1.1;
      letter-spacing: -0.025em;
      color: var(--on-surface);
      max-width: 22ch;
      margin: 0 auto var(--space-md);
    }
    .faculty-intro__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .faculty-intro__lead {
      font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);
      line-height: 1.65;
      color: var(--on-surface-variant);
      max-width: 44rem;
      margin-inline: auto;
    }

    /* Faculty section heads */
    .faculty-section-head {
      display: flex;
      align-items: baseline;
      justify-content: space-between;
      gap: var(--space-md);
      margin-bottom: var(--space-lg);
      flex-wrap: wrap;
    }
    @media (min-width: 760px) { .faculty-section-head { align-items: flex-end; } }
    .faculty-section-head__title {
      font-family: var(--font-display);
      font-size: clamp(1.625rem, 1.1rem + 1.6vw, 2.25rem);
      font-weight: 700;
      line-height: 1.1;
      letter-spacing: -0.02em;
      margin-top: var(--space-xs);
    }
    .faculty-section-head__lead {
      font-size: 1rem;
      line-height: 1.6;
      max-width: 30rem;
    }
    .faculty-section-head__title { color: var(--on-surface); }
    .faculty-section-head__lead  { color: var(--on-surface-variant); }

    /* Mentor section — flows from fac-quotes (same bg), top padding suppressed. */
    .mentor-section {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 96px);
      padding-top: 0;
    }

    /* Card grid */
    .faculty-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-md);
    }
    @media (min-width: 560px)  { .faculty-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 900px)  { .faculty-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1120px) { .faculty-grid { grid-template-columns: repeat(4, 1fr); } }
    .faculty-grid--leadership { grid-template-columns: 1fr; gap: var(--space-md); }
    @media (min-width: 760px) {
      .faculty-grid--leadership { grid-template-columns: repeat(3, 1fr); gap: var(--space-lg); }
    }

    /* Card */
    .faculty-card {
      display: flex;
      flex-direction: column;
      text-align: left;
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-xl);
      overflow: hidden;
      cursor: pointer;
      transition: box-shadow 200ms ease, transform 200ms ease, border-color 200ms ease;
      width: 100%;
      font-family: inherit;
      padding: 0;
    }
    .faculty-card:hover {
      box-shadow: 0 16px 40px rgba(2, 28, 54, 0.10);
      transform: translateY(-3px);
      border-color: var(--outline);
    }
    .faculty-card:focus-visible {
      outline: 2px solid var(--brass);
      outline-offset: 3px;
    }
    .faculty-card__photo {
      position: relative;
      aspect-ratio: 4 / 5;
      background: linear-gradient(160deg, #0a1628, #021c36);
      overflow: hidden;
    }
    .faculty-card__photo[data-initials]::before {
      content: attr(data-initials);
      position: absolute;
      inset: 0;
      display: grid;
      place-items: center;
      font-family: var(--font-display);
      font-size: 2.5rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      color: var(--brass-bright);
      z-index: 0;
    }
    .faculty-card__photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 400ms ease;
      position: relative;
      z-index: 1;
    }
    .faculty-card:hover .faculty-card__photo img { transform: scale(1.03); }
    .faculty-card__body {
      padding: var(--space-md);
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .faculty-card__name {
      font-family: var(--font-display);
      font-size: 1.125rem;
      font-weight: 700;
      line-height: 1.2;
      letter-spacing: -0.01em;
      color: var(--on-surface);
    }
    .faculty-card__title {
      font-size: 0.8125rem;
      line-height: 1.45;
      color: var(--on-surface-variant);
    }
    /* Leadership cards — slightly larger, brass titles */
    .faculty-grid--leadership .faculty-card__body { padding: var(--space-lg); }
    .faculty-grid--leadership .faculty-card__name { font-size: 1.375rem; }
    .faculty-grid--leadership .faculty-card__title {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--brass);
    }

    /* Modal */
    .faculty-modal {
      padding: 0;
      border: 0;
      border-radius: var(--radius-3xl);
      background: var(--surface-container-lowest);
      color: var(--on-surface);
      max-width: min(960px, calc(100vw - 32px));
      width: 100%;
      max-height: calc(100vh - 32px);
      overflow: hidden;
      box-shadow: 0 32px 80px rgba(2,28,54,0.32);
    }
    .faculty-modal::backdrop {
      background: rgba(2, 28, 54, 0.6);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
    }
    .faculty-modal[open] { animation: faculty-modal-in 240ms ease; }
    @keyframes faculty-modal-in {
      from { opacity: 0; transform: translateY(8px) scale(0.98); }
      to   { opacity: 1; transform: translateY(0) scale(1); }
    }
    .faculty-modal__inner {
      display: grid;
      grid-template-columns: 1fr;
      max-height: calc(100vh - 32px);
      overflow-y: auto;
    }
    @media (min-width: 820px) {
      .faculty-modal__inner { grid-template-columns: minmax(320px, 380px) 1fr; }
    }
    .faculty-modal__close {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(2, 28, 54, 0.08);
      color: var(--on-surface);
      display: grid;
      place-items: center;
      z-index: 10;
      transition: background 200ms ease, color 200ms ease;
      border: 0;
      cursor: pointer;
    }
    .faculty-modal__close:hover { background: var(--primary); color: #ffffff; }
    .faculty-modal__close svg { width: 18px; height: 18px; }
    .faculty-modal__left {
      background: linear-gradient(160deg, #0a1628 0%, #021c36 100%);
      color: #ffffff;
      display: flex;
      flex-direction: column;
    }
    .faculty-modal__photo {
      position: relative;
      aspect-ratio: 4 / 5;
      overflow: hidden;
    }
    .faculty-modal__photo[data-initials]::before {
      content: attr(data-initials);
      position: absolute;
      inset: 0;
      display: grid;
      place-items: center;
      font-family: var(--font-display);
      font-size: 4rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      color: var(--brass-bright);
      z-index: 0;
    }
    .faculty-modal__photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: relative;
      z-index: 1;
    }
    .faculty-modal__identity {
      padding: var(--space-lg);
      display: flex;
      flex-direction: column;
      gap: var(--space-xs);
    }
    .faculty-modal__name {
      font-family: var(--font-display);
      font-size: clamp(1.5rem, 1.2rem + 1vw, 1.875rem);
      font-weight: 800;
      letter-spacing: -0.02em;
      line-height: 1.1;
      color: #ffffff;
    }
    .faculty-modal__title {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--brass-bright);
      line-height: 1.4;
    }
    .faculty-modal__production {
      margin-top: var(--space-md);
      padding-top: var(--space-md);
      border-top: 1px solid rgba(255,255,255,0.14);
    }
    .faculty-modal__production-label {
      font-size: 0.6875rem;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.55);
      margin-bottom: var(--space-xs);
    }
    .faculty-modal__production-value {
      font-size: 0.9375rem;
      font-weight: 500;
      color: #ffffff;
      line-height: 1.5;
    }
    .faculty-modal__right {
      padding: var(--space-xl) var(--space-lg);
      display: flex;
      flex-direction: column;
      gap: var(--space-md);
    }
    @media (min-width: 820px) {
      .faculty-modal__right { padding: var(--space-xl); }
    }
    .faculty-modal__section-label {
      font-family: var(--font-body);
      font-size: 0.6875rem;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--brass);
      margin-bottom: var(--space-xs);
    }
    .faculty-modal__bio {
      font-size: 1rem;
      line-height: 1.65;
      color: var(--on-surface-variant);
    }
    .faculty-modal__bio em { font-style: italic; }
    .faculty-modal__specialty {
      border-left: 3px solid var(--brass);
      padding-left: var(--space-sm);
    }
    .faculty-modal__specialty-text {
      font-size: 0.9375rem;
      line-height: 1.6;
      color: var(--on-surface-variant);
      margin-top: var(--space-xs);
    }
    .faculty-modal__video {
      position: relative;
      aspect-ratio: 16 / 9;
      background: var(--surface-container-low);
      border-radius: var(--radius-xl);
      overflow: hidden;
      display: grid;
      place-items: center;
      color: var(--on-surface-variant);
      border: 1px dashed var(--outline-variant);
    }
    .faculty-modal__video--filled {
      background: #000;
      border: 0;
    }
    .faculty-modal__video iframe {
      width: 100%;
      height: 100%;
      border: 0;
      display: block;
    }
    .faculty-modal__video-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-sm);
    }
    .faculty-modal__video-icon {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: var(--primary);
      color: #ffffff;
      display: grid;
      place-items: center;
    }
    .faculty-modal__video-icon svg { width: 22px; height: 22px; margin-left: 3px; }
    .faculty-modal__video-caption {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--on-surface-variant);
    }
    @media (max-width: 819px) {
      .faculty-modal__photo { aspect-ratio: 16 / 9; }
      .faculty-modal__identity { padding: var(--space-md); }
      .faculty-modal__right { padding: var(--space-md); }
    }
    body.faculty-modal-open { overflow: hidden; }

    /* Testimonials — flows from leaders-section (same bg), top padding suppressed. */
    .fac-quotes {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 96px);
      padding-top: 0;
    }
    .fac-quotes__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-md);
    }
    @media (min-width: 760px) {
      .fac-quotes__grid { grid-template-columns: repeat(3, 1fr); gap: var(--space-lg); }
    }

    /* Access section */
    .access-section {
      background: var(--surface-container-low);
      padding-block: clamp(48px, 6vw, 96px);
    }
    .access-intro { text-align: center; margin-bottom: var(--space-xl); }
    .access-intro__title {
      font-family: var(--font-display);
      font-size: clamp(2rem, 1.4rem + 2.2vw, 3rem);
      font-weight: 800;
      line-height: 1.1;
      letter-spacing: -0.025em;
      color: var(--on-surface);
      max-width: 22ch;
      margin: 0 auto var(--space-md);
    }
    .access-intro__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .access-intro__lead {
      font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);
      line-height: 1.65;
      color: var(--on-surface-variant);
      max-width: 44rem;
      margin-inline: auto;
    }

    /* Live coaching marquee */
    .access-marquee {
      position: relative;
      width: 100vw;
      margin-left: calc(50% - 50vw);
      overflow: hidden;
      -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 6%, #000 94%, transparent 100%);
      mask-image: linear-gradient(90deg, transparent 0, #000 6%, #000 94%, transparent 100%);
    }
    .access-marquee__track {
      display: flex;
      width: max-content;
      gap: var(--space-md);
      animation: access-marquee-scroll 40s linear infinite;
    }
    .access-marquee:hover .access-marquee__track { animation-play-state: paused; }
    .access-marquee__item {
      flex-shrink: 0;
      width: clamp(280px, 32vw, 460px);
      aspect-ratio: 16 / 10;
      border-radius: var(--radius-2xl);
      overflow: hidden;
      box-shadow: 0 12px 32px rgba(2, 28, 54, 0.10);
    }
    .access-marquee__item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    @keyframes access-marquee-scroll {
      from { transform: translateX(0); }
      to   { transform: translateX(calc(-50% - var(--space-md) / 2)); }
    }
    @media (prefers-reduced-motion: reduce) {
      .access-marquee__track { animation: none; }
    }

    /* Checkmark SVG shortcut */
    .chk { width:18px; height:18px; flex-shrink:0; margin-top:2px; color: var(--brass); }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main">

    <!-- ── Hero ─────────────────────────────────────────────────────── -->
    <section class="fh-hero" aria-labelledby="fh-hero-heading">
      <div class="container">
        <div class="fh-hero__content">
          <span class="eyebrow" data-hero-step="1" style="margin-bottom: var(--space-md);">
            <span class="eyebrow__text" style="color: var(--brass-bright);">The Faculty</span>
          </span>
          <h1 id="fh-hero-heading" class="fh-hero__title" data-hero-step="2">Learn from the <em>Top&nbsp;1%</em></h1>
          <p class="fh-hero__sub" data-hero-step="3">
            Most coaching platforms give you access to <em>one</em> coach.
            <strong>The Loan Atlas gives you access to <span data-countup="18" data-countup-commas="false">18</span> of the best minds in the mortgage business.</strong>
          </p>
          <div class="fh-hero__actions" data-hero-step="4">
            <a class="btn btn--gold btn--lg" href="/join/">Start Your Transformation</a>
            <a class="btn btn--primary btn--lg" href="/consultation/">Book Your Free Coaching Session</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Faculty intro ─────────────────────────────────────────────── -->
    <section class="faculty-intro">
      <div class="container" data-reveal="up">
        <h2 class="faculty-intro__title">Decades of Experience. <em>Billions in Funded Loans.</em></h2>
        <p class="faculty-intro__lead">Inside The Loan Atlas, you'll learn weekly from branch managers, division presidents, and top 1% producers — all of them still serving families and leading high-producing teams.</p>
      </div>
    </section>

    <!-- ── Faculty grids ─────────────────────────────────────────────── -->
    <section class="leaders-section">
      <div class="container">
        <div class="faculty-grid faculty-grid--leadership" data-reveal-stagger="100">
          <button class="faculty-card" type="button" data-faculty="tim-braheem">
            <div class="faculty-card__photo" data-initials="TB">
              <img src="<?php echo TLA_BASE; ?>/assets/tim-braheem-headshot.png" alt="Tim Braheem" loading="lazy" />
            </div>
            <div class="faculty-card__body">
              <span class="faculty-card__name">Tim Braheem</span>
              <span class="faculty-card__title">Founder &amp; Chief Content Officer</span>
            </div>
          </button>
          <button class="faculty-card" type="button" data-faculty="craig-strent">
            <div class="faculty-card__photo" data-initials="CS">
              <img src="<?php echo TLA_BASE; ?>/assets/craig-strent-headshot.png" alt="Craig Strent" loading="lazy" />
            </div>
            <div class="faculty-card__body">
              <span class="faculty-card__name">Craig Strent</span>
              <span class="faculty-card__title">Head of Faculty</span>
            </div>
          </button>
          <button class="faculty-card" type="button" data-faculty="josh-mettle">
            <div class="faculty-card__photo" data-initials="JM">
              <img src="<?php echo TLA_BASE; ?>/assets/josh-mettle-headshot.png" alt="Josh Mettle" loading="lazy" />
            </div>
            <div class="faculty-card__body">
              <span class="faculty-card__name">Josh Mettle</span>
              <span class="faculty-card__title">Head of Faculty</span>
            </div>
          </button>
        </div>
      </div>
    </section>

    <!-- ── Testimonials ─────────────────────────────────────────────── -->
    <section class="fac-quotes" aria-label="Member testimonials">
      <div class="container">
        <div class="fac-quotes__grid" data-reveal-stagger="120">
          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">I love the depth of knowledge. There are a lot of things out there that just skim the surface, but you get training from people who are at the top of their game and get real one-on-one time with them. That implementation component is huge.</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Scott DiGregorio</div>
              <div class="quote-card__org">NEO Home Loans</div>
            </figcaption>
          </figure>
          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">Highly recommend The Loan Atlas. Being able to sit in on office hours and the live group coaching is worth the price itself!</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Gabe Garza</div>
              <div class="quote-card__org">The Mortgage Brokers</div>
            </figcaption>
          </figure>
          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">I truly appreciate The Loan Atlas and the incredible support from the faculty. Kelly Marsh took the time to host a private Zoom call with my team and me, demonstrating how Mortgage Coach works. I'm so grateful that someone as busy and talented as her would invest that time in us.</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Charlie Peterson</div>
              <div class="quote-card__org">Member</div>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- ── Faculty Mentors ──────────────────────────────────────────── -->
    <section class="mentor-section">
      <div class="container">
        <div class="faculty-grid" data-reveal-stagger="60">
          <button class="faculty-card" type="button" data-faculty="josh-burruss">
            <div class="faculty-card__photo" data-initials="JB"><img src="<?php echo TLA_BASE; ?>/assets/josh-burruss-headshot.png" alt="Josh Burruss" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Josh Burruss</span><span class="faculty-card__title">EVP &amp; Chief Lending Officer, Intercoastal Mortgage</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="julie-weix">
            <div class="faculty-card__photo" data-initials="JW"><img src="<?php echo TLA_BASE; ?>/assets/julie-weix-headshot.png" alt="Julie Weix" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Julie Weix</span><span class="faculty-card__title">Executive Coach, Performance Experts</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="tyler-osby">
            <div class="faculty-card__photo" data-initials="TO"><img src="<?php echo TLA_BASE; ?>/assets/tyler-osby-headshot.png" alt="Tyler Osby" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Tyler Osby</span><span class="faculty-card__title">Branch Manager, Fairway; Founder, Osby Labs</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="brent-hicks">
            <div class="faculty-card__photo" data-initials="BH"><img src="<?php echo TLA_BASE; ?>/assets/brent-hicks-headshot.png" alt="Brent Hicks" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Brent Hicks</span><span class="faculty-card__title">Divisional President, Clear Modern Mortgage</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="marc-bui">
            <div class="faculty-card__photo" data-initials="MB"><img src="<?php echo TLA_BASE; ?>/assets/marc-bui-headshot.png" alt="Marc Bui" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Marc Bui</span><span class="faculty-card__title">Branch Manager, Thrive Lending Group</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="trevor-carlson">
            <div class="faculty-card__photo" data-initials="TC"><img src="<?php echo TLA_BASE; ?>/assets/trevor-carlson-headshot.png" alt="Trevor Carlson" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Trevor Carlson</span><span class="faculty-card__title">President, Heritage Reverse Mortgage</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="mark-robertson">
            <div class="faculty-card__photo" data-initials="MR"><img src="<?php echo TLA_BASE; ?>/assets/mark-robertson-headshot.png" alt="Mark Robertson" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Mark Robertson</span><span class="faculty-card__title">Division President, NEO Home Loans</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="caleb-legrand">
            <div class="faculty-card__photo" data-initials="CL"><img src="<?php echo TLA_BASE; ?>/assets/caleb-legrand-headshot.png" alt="Caleb LeGrand" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Caleb LeGrand</span><span class="faculty-card__title">Branch Manager, CL Team at Apex Home Loans</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="holly-walther">
            <div class="faculty-card__photo" data-initials="HW"><img src="<?php echo TLA_BASE; ?>/assets/holly-walther-headshot.png" alt="Holly Walther" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Holly Walther</span><span class="faculty-card__title">Branch Manager, Success Mortgage Partners</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="kelly-marsh">
            <div class="faculty-card__photo" data-initials="KM"><img src="<?php echo TLA_BASE; ?>/assets/kelly-marsh-headshot.png" alt="Kelly Marsh" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Kelly Marsh</span><span class="faculty-card__title">VP &amp; Area Manager, Cornerstone Home Lending</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="jay-dacey">
            <div class="faculty-card__photo" data-initials="JD"><img src="<?php echo TLA_BASE; ?>/assets/jay-dacey-headshot.png" alt="Jay Dacey" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Jay Dacey</span><span class="faculty-card__title">President, Jay Dacey Mortgage Team</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="steve-grossman">
            <div class="faculty-card__photo" data-initials="SG"><img src="<?php echo TLA_BASE; ?>/assets/steve-grossman-headshot.png" alt="Steve Grossman" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Steve Grossman</span><span class="faculty-card__title">Vice President, NJ Lenders Corp</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="katrinka-condie">
            <div class="faculty-card__photo" data-initials="KC"><img src="<?php echo TLA_BASE; ?>/assets/katrinka-condie-headshot.png" alt="Katrinka Condie" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Katrinka Condie</span><span class="faculty-card__title">Producing Branch Manager, NEO Home Loans</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="michael-belfor">
            <div class="faculty-card__photo" data-initials="MB"><img src="<?php echo TLA_BASE; ?>/assets/michael-belfor-headshot.png" alt="Michael Belfor" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Michael Belfor</span><span class="faculty-card__title">Branch Manager — Loan Originator, American Pacific Mortgage</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="becky-staples">
            <div class="faculty-card__photo" data-initials="BS"><img src="<?php echo TLA_BASE; ?>/assets/becky-staples-headshot.png" alt="Becky Staples" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Becky Staples</span><span class="faculty-card__title">VP — Loan Originator, Sun American Mortgage</span></div>
          </button>
        </div>
      </div>
    </section>


    <!-- ── Section 4: Live Coaching Every Week ───────────────────────── -->
    <section class="access-section">
      <div class="container">
        <div class="access-intro" data-reveal="up">
          <h2 class="access-intro__title"><em>Live Coaching</em> Every Week</h2>
          <p class="access-intro__lead">
            Learning from elite originators is one thing. Having them available to answer any question you have
            and guide your next move? That's a game changer.
          </p>
        </div>
      </div>
      <div class="access-marquee" data-reveal="up" aria-hidden="true">
        <div class="access-marquee__track">
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-masterclass.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-office-hours.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-talk-to-tim.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-ai-labs.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-masterclass.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-office-hours.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-talk-to-tim.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-ai-labs.jpg" alt="" loading="lazy" /></div>
        </div>
      </div>
    </section>

    <!-- ── Section 5: Final CTA ──────────────────────────────────────── -->
    <section class="close-section close-section--faculty" aria-labelledby="final-cta-heading">
      <div class="container close-section__grid">
        <div class="close-section__copy" data-reveal="up">
          <span class="close-section__eyebrow">Start Your Transformation</span>
          <h2 id="final-cta-heading" class="close-section__title">
            You Deserve to Be <em>Mentored by the Best</em>
          </h2>
          <p class="close-section__sub">
            From your first call script to your next hire, <strong>The Loan Atlas faculty</strong> is here
            to help you close more, serve better, and scale faster.
          </p>
        </div>

        <div class="close-section__actions" data-reveal="up" role="group" aria-label="Get started">
          <a class="close-section-action close-section-action--primary" href="/join/">
            <span>
              <span class="close-section-action__label">Join The Loan Atlas</span>
              <span class="close-section-action__hint">View membership options and get access today.</span>
            </span>
            <span class="close-section-action__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
            </span>
          </a>
          <a class="close-section-action close-section-action--secondary" href="/consultation/">
            <span>
              <span class="close-section-action__label">Book Your Free Coaching Session</span>
              <span class="close-section-action__hint">Start building your growth plan.</span>
            </span>
            <span class="close-section-action__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
            </span>
          </a>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <!-- Faculty modal (single shared dialog, hydrated by JS) -->
  <dialog class="faculty-modal" id="facultyModal" aria-labelledby="facultyModalName">
    <button class="faculty-modal__close" type="button" aria-label="Close" data-modal-close>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="faculty-modal__inner">
      <div class="faculty-modal__left">
        <div class="faculty-modal__photo" id="facultyModalPhoto">
          <img id="facultyModalImg" src="" alt="" />
        </div>
        <div class="faculty-modal__identity">
          <h2 class="faculty-modal__name" id="facultyModalName"></h2>
          <span class="faculty-modal__title" id="facultyModalTitle"></span>
          <div class="faculty-modal__production" id="facultyModalProductionSection">
            <div class="faculty-modal__production-label" id="facultyModalProductionLabel">2025 Production</div>
            <div class="faculty-modal__production-value" id="facultyModalProduction"></div>
          </div>
        </div>
      </div>
      <div class="faculty-modal__right">
        <p class="faculty-modal__bio" id="facultyModalBio"></p>
        <div class="faculty-modal__specialty">
          <div class="faculty-modal__section-label" id="facultyModalSpecialtyLabel">Specialty</div>
          <p class="faculty-modal__specialty-text" id="facultyModalSpecialty"></p>
        </div>
        <div class="faculty-modal__video" id="facultyModalVideo"></div>
      </div>
    </div>
  </dialog>

  <script>
    (function () {
      const facultyData = {
        'tim-braheem': {
          name: 'Tim Braheem',
          title: 'Founder & Chief Content Officer',
          image: 'assets/tim-braheem-headshot.png',
          initials: 'TB',
          youtubeId: '2k1XrsEIKJ0',
          productionLabel: '',
          production2025: 'Tim has originated over $1.4 billion in personal production during his career as a loan originator.',
          bio: "Tim is the founder of The Loan Atlas and the foundation it's built on. He's a producer who built coaching because he couldn't find coaching that worked — and now teaches the operating system he wishes he'd had in the seat, every week, alongside the rest of the faculty. 25+ years as a mortgage originator with $1.4B in personal loan volume. Founded First Rate Financial in 1995 and co-founded Loantoolbox.com in 2001, which reached 10,800 paying members by 2006 and was named to the Inc. 500. Host of <em>The 360 Experience</em> podcast.",
          specialty: 'Architect of the Perfect Loan Process, the scripting frameworks, and the personal development work that runs underneath everything The Loan Atlas teaches. Leads Talk to Tim — the monthly coaching session where members bring real situations and Tim works through them live.'
        },
        'craig-strent': {
          name: 'Craig Strent',
          title: 'Head of Faculty',
          image: 'assets/craig-strent-headshot.png',
          initials: 'CS',
          youtubeId: 'OX74AstCAKQ',
          productionLabel: '',
          production2025: 'Craig has originated over $2 billion in personal production during his career as a loan originator.',
          bio: 'Craig is one of the few originators in the country who built a top 1% mortgage business almost entirely outside the Realtor referral channel. 25 years in the mortgage industry with $2B+ in loan volume — primarily through non-Realtor referral sources. Top 1% of mortgage bankers nationwide for 15+ years; named among America’s Most Influential Mortgage Executives. CMPS and CDLP certified; featured on NBC Nightly News, CNBC, and Fox Morning News.',
          specialty: 'Non-Realtor referral building and trusted advisor positioning — advisory-style client relationships and financial planner partnerships at a level very few originators have replicated.'
        },
        'josh-mettle': {
          name: 'Josh Mettle',
          title: 'Head of Faculty',
          image: 'assets/josh-mettle-headshot.png',
          initials: 'JM',
          youtubeId: 'NVz6KMeSf9k',
          production2025: '$190.8M · 358 families served',
          bio: "Josh is one of the most successful originator-leaders in the country — a top 1% producer who has scaled into division leadership while continuing to publish, podcast, and build a public-facing brand that produces real loan volume. 25+ years in the mortgage industry with $1.17B in personal production. Top 1% of mortgage originators in 2020 per <em>Mortgage Executive Magazine</em>. Currently leads a $250M production team; co-owns a nine-figure real estate portfolio.",
          specialty: 'Marketing that compounds — content, audience-building, consumer-direct strategy. Also drives the faculty’s work on health, energy, and financial freedom.'
        },
        'josh-burruss': {
          name: 'Josh Burruss',
          title: 'EVP & Chief Lending Officer, Intercoastal Mortgage',
          image: 'assets/josh-burruss-headshot.png',
          initials: 'JB',
          youtubeId: 'cnr66dFho4k',
          production2025: '$82.5M volume · 125 families served',
          bio: 'Josh has personally originated $830M in loan volume and now leads sales at one of the most respected lenders on the East Coast. His career has spanned high-volume personal production, sales leadership, and building lending relationships with national homebuilders.',
          specialty: 'Sales leadership and the builder business — winning and retaining builder relationships, building high-performing sales teams, and the loan-program fluency that keeps originators competitive in any market.'
        },
        'julie-weix': {
          name: 'Julie Weix',
          title: 'Executive Coach, Performance Experts',
          image: 'assets/julie-weix-headshot.png',
          initials: 'JW',
          youtubeId: 'Cu04tdoY1HM',
          productionHide: true,
          production2025: '',
          bio: "Julie coaches more than 60 of the nation's top-producing originators one-on-one. Her work focuses on the patterns underneath production — how the highest performers protect their time, manage their energy, and lead themselves before they lead anyone else.",
          specialty: 'The mindset and the calendar — personal leadership, time and task management, and the inner work that separates originators who hit one strong year from originators who compound year over year.'
        },
        'tyler-osby': {
          name: 'Tyler Osby',
          title: 'Branch Manager, Fairway Independent Mortgage; Founder, Osby Labs',
          image: 'assets/tyler-osby-headshot.png',
          initials: 'TO',
          youtubeId: 'wiDWdTX1n3Y',
          production2025: '$60.9M volume · 210 families served',
          bio: 'Tyler has personally helped more than 1,962 families across $422M in lifetime production, all while building a parallel reputation as one of the most systems-minded originators in the country. Through Osby Labs, he develops the technology stacks and automated workflows that top originators actually use.',
          specialty: 'Systems, technology, and scripting — turning the day-to-day execution of calls, follow-ups, and workflows into something that runs without an originator having to remember every step.'
        },
        'brent-hicks': {
          name: 'Brent Hicks',
          title: 'Divisional President, Clear Modern Mortgage',
          image: 'assets/brent-hicks-headshot.png',
          initials: 'BH',
          youtubeId: 'W1u-X5dArWc',
          productionLabel: '',
          production2025: 'Brent has originated over $1.5 billion in personal production during his career as a loan originator.',
          bio: "Brent has personally originated more than $1.5B in loan volume, earned top-50-nationwide rankings, and now leads a division as one of the country's most respected mortgage executives. His path moved from elite individual production into building and recruiting teams that perform at the same level.",
          specialty: 'Leadership, team building, and recruiting — done at the highest level, first as an elite producer, then as a leader scaling teams that perform at the same level he did.'
        },
        'marc-bui': {
          name: 'Marc Bui',
          title: 'Branch Manager, Thrive Lending Group',
          image: 'assets/marc-bui-headshot.png',
          initials: 'MB',
          youtubeId: 'CsdqQu0XHaA',
          production2025: '$45.9M volume · 70 families served',
          bio: "Marc has personally originated $750M while building a 75,000+ Instagram audience that generates real loan volume. He's one of the few originators who has cracked social media as a primary lead source instead of a vanity channel.",
          specialty: 'Social media marketing, with deep authority on Instagram specifically — the difference between content that builds an audience and content that builds a pipeline, and how to do the latter while running a real origination business.'
        },
        'trevor-carlson': {
          name: 'Trevor Carlson',
          title: 'President, Heritage Reverse Mortgage',
          image: 'assets/trevor-carlson-headshot.png',
          initials: 'TC',
          youtubeId: 'F48bmBMJDiI',
          production2025: '$21M volume · 69 families served',
          bio: 'Trevor has helped more than 1,700 families across $400M+ in lifetime production, with deep expertise in the reverse mortgage market most originators never touch. He runs his business through a tightly engineered consumer-direct system.',
          specialty: 'Reverse mortgage, plus consumer-direct marketing and operational systems — adding reverse as a complementary product line to a traditional mortgage business, and running a high-volume direct-to-consumer model with discipline.'
        },
        'mark-robertson': {
          name: 'Mark Robertson',
          title: 'Division President, NEO Home Loans',
          image: 'assets/mark-robertson-headshot.png',
          initials: 'MR',
          youtubeId: 'AjnjsvWgMCg',
          production2025: '$65.9M volume · 76 families served',
          bio: 'Mark has originated more than $931M in lifetime production and has been ranked in the top 1% of originators by <em>Scotsman Guide</em>. He now leads a division at NEO while continuing to operate one of the strongest Realtor referral businesses in the country.',
          specialty: 'Realtor business development and the strategy that holds it together — operating a top 1% referral-based business, and building or rebuilding teams around the same model.'
        },
        'caleb-legrand': {
          name: 'Caleb LeGrand',
          title: 'Branch Manager, CL Team at Apex Home Loans',
          image: 'assets/caleb-legrand-headshot.png',
          initials: 'CL',
          youtubeId: 'SBjOcwAn2UM',
          production2025: '$69.7M volume · 200 families served',
          bio: 'Caleb has helped more than 5,017 families across $1.12B+ in lifetime production while building one of the most respected branch teams in the industry. His work is grounded in the day-to-day systems that make consistency possible.',
          specialty: 'The Perfect Loan Process, the System for Selling, and the builder business — installing the execution systems that take a top originator from solo producer to a team that runs without chaos.'
        },
        'holly-walther': {
          name: 'Holly Walther',
          title: 'Branch Manager, Success Mortgage Partners',
          image: 'assets/holly-walther-headshot.png',
          initials: 'HW',
          youtubeId: 'TBqZZdETO8M',
          production2025: '$46.4M volume · 124 families served',
          bio: 'Holly has originated $1B in lifetime production and helped more than 5,000 families, all while raising a family and building a business that doesn’t run her life. Her authority comes from doing both at a level very few originators in the industry have managed.',
          specialty: "Work, life, and family balance — backed by real workflow systems. Holly is also one of the faculty's strongest voices on women empowerment in the industry, centered on building a high-producing business that doesn't consume the rest of an originator's life."
        },
        'kelly-marsh': {
          name: 'Kelly Marsh',
          title: 'VP & Area Manager, Cornerstone Home Lending; Host, Think & Grow Podcast',
          image: 'assets/kelly-marsh-headshot.png',
          initials: 'KM',
          youtubeId: 'eQdjTopvrek',
          production2025: '$36.9M volume · 54 families served',
          bio: 'Kelly has originated more than $1B in lifetime production and now leads at Cornerstone while hosting the <em>Think & Grow</em> podcast. Her business has always been built on a database that produces year after year.',
          specialty: 'Database nurturing and management, plus mindset and personal development — turning past clients and sphere of influence into a compounding production engine, and the leadership required to sustain it.'
        },
        'jay-dacey': {
          name: 'Jay Dacey',
          title: 'President, Jay Dacey Mortgage Team',
          image: 'assets/jay-dacey-headshot.png',
          initials: 'JD',
          youtubeId: 'wpbW4SN-pzk',
          production2025: '$73.9M volume · 199 families served',
          bio: 'Jay has originated more than $500M in lifetime production and runs one of the most respected mortgage teams in the Twin Cities market. His business runs on database depth and a tightly engineered loan process.',
          specialty: 'Database management and the Perfect Loan Process, with deep specialization in first-time homebuyers and divorce-situation lending — serving clients in moments of major life transition.'
        },
        'steve-grossman': {
          name: 'Steve Grossman',
          title: 'Vice President, NJ Lenders Corp',
          image: 'assets/steve-grossman-headshot.png',
          initials: 'SG',
          youtubeId: 'RoCT9M3r9Hs',
          production2025: '$52.9M volume · 95 families served',
          bio: 'Steve has originated more than $3B in residential loans, helped over 7,800 families, and has been ranked in the top 1% of originators every single year since 2001. Two decades of consistency at that level is a credential almost nobody in the industry holds.',
          specialty: 'Strategy and vision — the long view. Figuring out where a mortgage business is going and how to position for the next ten years, not the next ninety days.'
        },
        'katrinka-condie': {
          name: 'Katrinka Condie',
          title: 'Producing Branch Manager, NEO Home Loans',
          image: 'assets/katrinka-condie-headshot.png',
          initials: 'KC',
          youtubeId: '9VZcS5N_B30',
          production2025: '$56.9M volume · 102 families served',
          bio: 'Katrinka has originated more than $309M in lifetime production and helped over 755 families, while ranking in the top 1% of originators nationwide since her second year in the business. She is one of the most respected client-relationship operators in the industry.',
          specialty: "Building real relationships and lasting client connection — the work the rest of the industry has tried to automate away. Katrinka is also one of the faculty's strongest voices on women empowerment in mortgage."
        },
        'michael-belfor': {
          name: 'Michael Belfor',
          title: 'Branch Manager — Loan Originator, American Pacific Mortgage',
          image: 'assets/michael-belfor-headshot.png',
          initials: 'MB',
          youtubeId: 'RPRE-ZKSNh0',
          production2025: '$46.6M volume · 89 families served',
          bio: "Michael has been originating since 2010 and ranked among the top 1% of mortgage originators nationwide for over a decade by <em>Scotsman Guide</em> and <em>Mortgage Executive Magazine</em>. He opened American Pacific Mortgage's first retail branch and its flagship Bay Area office, holds the Certified Mortgage Advisor (CMA) designation, and is the author of three books — <em>The Fed Made Simple</em>, <em>Crypto Bro</em>, and <em>Anchor</em>.",
          specialty: 'Advanced loan structuring and market literacy at a level very few originators operate at — building scalable production systems, applying AI-powered efficiency across the origination workflow, and creating content that turns market knowledge into authority.'
        },
        'becky-staples': {
          name: 'Becky Staples',
          title: 'Vice President — Loan Originator, Sun American Mortgage',
          image: 'assets/becky-staples-headshot.png',
          initials: 'BS',
          youtubeId: 'LN317MG-V4s',
          production2025: '$84.3M volume · 201 families served',
          bio: 'Becky has spent nearly 20 years in the industry, funded $1B+ in career loan volume, and helped more than 3,600 families. She is ranked as a top-100 U.S. loan officer by volume.',
          specialty: 'The fundamentals — done at the highest level. Production systems and process control, developing new loan officers from the ground up, and delivering the kind of high-touch client experience that produces a billion dollars in volume one client at a time.'
        }
      };

      const modal = document.getElementById('facultyModal');
      const modalImg = document.getElementById('facultyModalImg');
      const modalPhoto = document.getElementById('facultyModalPhoto');
      const modalName = document.getElementById('facultyModalName');
      const modalTitle = document.getElementById('facultyModalTitle');
      const modalProduction = document.getElementById('facultyModalProduction');
      const modalProductionSection = document.getElementById('facultyModalProductionSection');
      const modalProductionLabel = document.getElementById('facultyModalProductionLabel');
      const modalBio = document.getElementById('facultyModalBio');
      const modalSpecialty = document.getElementById('facultyModalSpecialty');
      const modalSpecialtyLabel = document.getElementById('facultyModalSpecialtyLabel');
      const modalVideo = document.getElementById('facultyModalVideo');

      const VIDEO_PLACEHOLDER_HTML = `
        <div class="faculty-modal__video-content">
          <span class="faculty-modal__video-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7L8 5z"/></svg>
          </span>
          <span class="faculty-modal__video-caption">Video coming soon</span>
        </div>`;

      function escapeAttr(value) {
        return String(value).replace(/&/g, '&amp;').replace(/"/g, '&quot;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
      }

      let lastFocused = null;

      function openFaculty(slug, originEl) {
        const data = facultyData[slug];
        if (!data) return;
        lastFocused = originEl || document.activeElement;

        // Prefer the card's already-resolved image src so paths stay correct
        // after the build rewrites asset URLs (the hardcoded data.image is not rewritten).
        const cardImg = originEl && originEl.querySelector('.faculty-card__photo img');
        modalImg.src = (cardImg && cardImg.getAttribute('src')) || data.image;
        modalImg.alt = data.name;
        modalPhoto.setAttribute('data-initials', data.initials || '');
        modalName.textContent = data.name;
        modalTitle.textContent = data.title;

        const firstName = data.name.split(' ')[0];
        modalSpecialtyLabel.textContent = `${firstName}'s Specialty`;

        if (data.productionHide) {
          modalProductionSection.hidden = true;
        } else {
          modalProductionSection.hidden = false;
          const label = data.productionLabel === undefined ? '2025 Production' : data.productionLabel;
          if (label) {
            modalProductionLabel.textContent = label;
            modalProductionLabel.hidden = false;
          } else {
            modalProductionLabel.hidden = true;
          }
          modalProduction.textContent = data.production2025;
        }

        modalBio.innerHTML = data.bio;
        modalSpecialty.innerHTML = data.specialty;

        if (data.youtubeId) {
          modalVideo.classList.add('faculty-modal__video--filled');
          modalVideo.innerHTML = `<iframe src="https://www.youtube-nocookie.com/embed/${encodeURIComponent(data.youtubeId)}" title="${escapeAttr(data.name)} — Faculty introduction" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
        } else {
          modalVideo.classList.remove('faculty-modal__video--filled');
          modalVideo.innerHTML = VIDEO_PLACEHOLDER_HTML;
        }

        if (typeof modal.showModal === 'function') {
          modal.showModal();
        } else {
          modal.setAttribute('open', '');
        }
        document.body.classList.add('faculty-modal-open');
      }

      function closeFaculty() {
        if (typeof modal.close === 'function') {
          modal.close();
        } else {
          modal.removeAttribute('open');
        }
        document.body.classList.remove('faculty-modal-open');
        modalVideo.innerHTML = '';
        modalVideo.classList.remove('faculty-modal__video--filled');
        if (lastFocused && typeof lastFocused.focus === 'function') {
          lastFocused.focus();
        }
      }

      document.querySelectorAll('.faculty-card').forEach((card) => {
        card.addEventListener('click', () => openFaculty(card.dataset.faculty, card));
      });
      modal.querySelectorAll('[data-modal-close]').forEach((btn) => {
        btn.addEventListener('click', closeFaculty);
      });
      modal.addEventListener('click', (event) => {
        if (event.target === modal) closeFaculty();
      });
      modal.addEventListener('close', () => {
        document.body.classList.remove('faculty-modal-open');
        modalVideo.innerHTML = '';
        modalVideo.classList.remove('faculty-modal__video--filled');
      });
    })();
  </script>
