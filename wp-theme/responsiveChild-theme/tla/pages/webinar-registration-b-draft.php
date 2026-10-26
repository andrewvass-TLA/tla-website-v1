<?php
/**
 * Body partial for /webinar-registration-b-draft/ (TLA Full HTML template).
 * Generated from public/webinar-registration-pages/webinar-registration-b.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Winning in 2026: The Eight Disciplines of Origination Mastery — The Loan Atlas';
$tla_description = 'A private live session with Tim Braheem, exclusively for Revolution Mortgage. Wednesday, October 14, 2026 at 11:00 AM ET.';
$tla_active      = '';
?>
  <style>
    .evb { background: var(--surface-container-lowest); color: var(--on-surface); }
    .evb-wrap { max-width: 1200px; margin-inline: auto; padding-inline: var(--gutter); }

    /* --- Private-session bar ------------------------------------------- */
    .evb-bar {
      background: var(--surface-container-low); border-bottom: 1px solid var(--surface-container-high);
      font-size: 0.8125rem; color: var(--on-surface-variant);
    }
    .evb-bar .evb-wrap {
      display: flex; align-items: center; justify-content: center; flex-wrap: wrap;
      gap: 6px 14px; padding-block: 10px; text-align: center;
    }
    .evb-bar img { height: 20px; width: auto; display: block; }
    .evb-bar__sep { width: 1px; height: 14px; background: var(--outline-variant); }
    .evb-bar strong { color: var(--primary); font-weight: 600; }

    /* --- Shared type ---------------------------------------------------- */
    .evb-eyebrow {
      display: flex; align-items: center; gap: 12px; margin: 0 0 18px;
      font-size: 0.75rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase;
      color: var(--secondary);
    }
    .evb-eyebrow::after { content: ""; width: 56px; height: 1px; background: var(--brass); }
    .evb-h2 {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: clamp(1.75rem, 3vw, 2.25rem); line-height: 1.15; letter-spacing: -0.02em; margin: 0;
    }

    /* --- Buttons -------------------------------------------------------- */
    .evb-btn {
      display: inline-flex; align-items: center; justify-content: center; gap: 10px;
      padding: 15px 26px; border-radius: var(--radius-lg);
      background: var(--primary); color: #fff; text-decoration: none;
      font-family: var(--font-display); font-weight: 700; font-size: 0.9375rem;
      transition: background 160ms ease, transform 160ms ease;
    }
    .evb-btn:hover { background: #0a2d52; transform: translateY(-1px); }
    .evb-btn:focus-visible { outline: 3px solid var(--brass-bright); outline-offset: 3px; }
    .evb-btn svg { width: 16px; height: 16px; }
    .evb-btn--gold {
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%); color: var(--primary);
    }
    .evb-btn--gold:hover { background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%); filter: brightness(1.05); }

    /* --- Hero ------------------------------------------------------------ */
    .evb-hero { padding-block: clamp(48px, 6vw, 80px) clamp(56px, 7vw, 96px); }
    .evb-hero__grid {
      display: grid; grid-template-columns: minmax(0, 1fr) 400px;
      gap: clamp(40px, 6vw, 80px); align-items: start;
    }
    .evb-title {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: clamp(2.25rem, 4.6vw, 3.5rem); line-height: 1.06; letter-spacing: -0.03em;
      margin: 0 0 22px;
    }
    .evb-lede { font-size: 1.125rem; line-height: 1.65; color: var(--on-surface-variant); margin: 0 0 36px; max-width: 38em; }

    .evb-facts {
      display: grid; grid-template-columns: repeat(3, 1fr);
      border: 1px solid var(--surface-container-highest); border-radius: var(--radius-xl);
      margin-bottom: 36px;
    }
    .evb-facts > div { padding: 18px 20px; }
    .evb-facts > div + div { border-left: 1px solid var(--surface-container-highest); }
    .evb-facts small, .evb-card dt {
      display: block; margin-bottom: 6px;
      font-size: 0.6875rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--outline);
    }
    .evb-facts b { font-family: var(--font-display); font-weight: 700; color: var(--primary); font-size: 1rem; }
    .evb-facts span { display: block; font-size: 0.8125rem; color: var(--on-surface-variant); margin-top: 2px; }

    .evb-host { display: flex; align-items: center; gap: 16px; padding-top: 28px; border-top: 1px solid var(--surface-container-high); }
    .evb-host img { width: 60px; height: 60px; border-radius: 50%; object-fit: cover; object-position: center top; background: var(--surface-container); }
    .evb-host b { display: block; font-family: var(--font-display); font-weight: 700; color: var(--primary); font-size: 1.0625rem; }
    .evb-host span { font-size: 0.875rem; color: var(--on-surface-variant); }

    /* Registration card (sticky on desktop) */
    .evb-card {
      position: sticky; top: calc(var(--header-h) + 24px);
      border: 1px solid var(--surface-container-highest); border-radius: var(--radius-2xl);
      background: var(--surface-container-lowest); box-shadow: var(--shadow-lg);
      padding: 30px;
    }
    .evb-card h2 { font-family: var(--font-display); font-weight: 800; font-size: 1.375rem; color: var(--primary); margin: 0 0 6px; }
    .evb-card > p { margin: 0 0 22px; font-size: 0.9375rem; color: var(--on-surface-variant); line-height: 1.55; }
    .evb-card dl { margin: 0 0 24px; display: grid; gap: 0; }
    .evb-card dl > div { display: grid; grid-template-columns: 82px 1fr; gap: 12px; padding: 12px 0; border-top: 1px solid var(--surface-container-high); }
    .evb-card dl > div:last-child { border-bottom: 1px solid var(--surface-container-high); }
    .evb-card dt { margin: 2px 0 0; }
    .evb-card dd { margin: 0; font-size: 0.9375rem; font-weight: 600; color: var(--primary); }
    .evb-card dd span { display: block; font-weight: 400; font-size: 0.8125rem; color: var(--on-surface-variant); }
    .evb-card .evb-btn { width: 100%; }
    .evb-card__note { margin: 14px 0 0; font-size: 0.8125rem; color: var(--outline); text-align: center; line-height: 1.5; }

    @media (max-width: 960px) {
      .evb-hero__grid { grid-template-columns: 1fr; }
      .evb-card { position: static; }
    }
    @media (max-width: 600px) {
      .evb-facts { grid-template-columns: 1fr; }
      .evb-facts > div + div { border-left: 0; border-top: 1px solid var(--surface-container-highest); }
    }

    /* --- Sections ------------------------------------------------------- */
    .evb-sec { padding-block: clamp(64px, 8vw, 104px); border-top: 1px solid var(--surface-container-high); }
    .evb-sec--tint { background: var(--surface-container-low); }

    /* About */
    .evb-about { display: grid; grid-template-columns: 0.8fr 1.2fr; gap: clamp(32px, 6vw, 96px); align-items: start; }
    .evb-about__body p { font-size: 1.0625rem; line-height: 1.75; color: var(--on-surface-variant); margin: 0 0 20px; }
    .evb-about__body p:last-child { margin: 0; }
    .evb-about__body strong { color: var(--primary); font-weight: 600; }
    @media (max-width: 860px) { .evb-about { grid-template-columns: 1fr; } }

    /* Agenda */
    .evb-agenda__head { display: flex; justify-content: space-between; align-items: end; gap: 24px; margin-bottom: 40px; flex-wrap: wrap; }
    .evb-agenda__head p { margin: 0; color: var(--on-surface-variant); max-width: 30em; }
    .evb-agenda { list-style: none; margin: 0; padding: 0; counter-reset: ag; }
    .evb-agenda li {
      counter-increment: ag;
      display: grid; grid-template-columns: 72px minmax(0, 0.9fr) minmax(0, 1.1fr); gap: 24px;
      padding: 26px 0; border-top: 1px solid var(--outline-variant);
    }
    .evb-agenda li:last-child { border-bottom: 1px solid var(--outline-variant); }
    .evb-agenda li::before {
      content: counter(ag, decimal-leading-zero);
      font-family: var(--font-display); font-weight: 800; font-size: 1rem; color: var(--brass);
      padding-top: 2px;
    }
    .evb-agenda h3 { margin: 0; font-family: var(--font-display); font-weight: 700; font-size: 1.1875rem; line-height: 1.35; color: var(--primary); }
    .evb-agenda p { margin: 0; font-size: 0.96875rem; line-height: 1.65; color: var(--on-surface-variant); }
    @media (max-width: 760px) {
      .evb-agenda li { grid-template-columns: 48px 1fr; gap: 6px 16px; }
      .evb-agenda p { grid-column: 2; }
    }

    /* Speaker */
    .evb-speaker { display: grid; grid-template-columns: 380px minmax(0, 1fr); gap: clamp(40px, 6vw, 88px); align-items: center; }
    .evb-speaker__photo { aspect-ratio: 4 / 5; border-radius: var(--radius-2xl); overflow: hidden; background: var(--surface-container); }
    .evb-speaker__photo img { width: 100%; height: 100%; object-fit: cover; object-position: center top; display: block; }
    .evb-speaker__role { margin: 8px 0 22px; font-size: 1rem; color: var(--on-surface-variant); }
    .evb-speaker__bio p { font-size: 1rem; line-height: 1.75; color: var(--on-surface-variant); margin: 0 0 16px; }
    .evb-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 32px; padding-top: 28px; border-top: 1px solid var(--outline-variant); }
    .evb-stats b { display: block; font-family: var(--font-display); font-weight: 800; font-size: clamp(1.5rem, 2.6vw, 2rem); color: var(--primary); letter-spacing: -0.02em; }
    .evb-stats span { font-size: 0.8125rem; color: var(--on-surface-variant); }
    @media (max-width: 860px) {
      .evb-speaker { grid-template-columns: 1fr; }
      .evb-speaker__photo { max-width: 320px; }
    }

    /* FAQ */
    .evb-faq { display: grid; grid-template-columns: 0.8fr 1.2fr; gap: clamp(32px, 6vw, 96px); align-items: start; }
    .evb-faq__list details { border-top: 1px solid var(--outline-variant); }
    .evb-faq__list details:last-child { border-bottom: 1px solid var(--outline-variant); }
    .evb-faq__list summary {
      list-style: none; cursor: pointer; padding: 22px 40px 22px 0; position: relative;
      font-family: var(--font-display); font-weight: 700; font-size: 1.0625rem; color: var(--primary);
    }
    .evb-faq__list summary::-webkit-details-marker { display: none; }
    .evb-faq__list summary::after {
      content: ""; position: absolute; right: 6px; top: 50%; width: 10px; height: 10px;
      border-right: 2px solid var(--brass); border-bottom: 2px solid var(--brass);
      transform: translateY(-70%) rotate(45deg); transition: transform 160ms ease;
    }
    .evb-faq__list details[open] summary::after { transform: translateY(-30%) rotate(-135deg); }
    .evb-faq__list details p { margin: 0 0 22px; padding-right: 40px; line-height: 1.7; color: var(--on-surface-variant); }
    @media (max-width: 860px) { .evb-faq { grid-template-columns: 1fr; } }

    /* Closing CTA */
    .evb-close { background: var(--primary); color: #fff; padding-block: clamp(56px, 7vw, 88px); }
    .evb-close .evb-wrap { display: flex; align-items: center; justify-content: space-between; gap: 32px; flex-wrap: wrap; }
    .evb-close h2 { color: #fff; font-family: var(--font-display); font-weight: 800; font-size: clamp(1.625rem, 3vw, 2.25rem); line-height: 1.15; letter-spacing: -0.02em; margin: 0 0 8px; }
    .evb-close p { margin: 0; color: rgba(255, 255, 255, 0.7); }

    /* Mobile register bar */
    .evb-mbar { display: none; }
    @media (max-width: 960px) {
      .evb-mbar {
        display: flex; position: fixed; left: 0; right: 0; bottom: 0; z-index: 45;
        align-items: center; justify-content: space-between; gap: 12px;
        padding: 12px 16px; background: rgba(255, 255, 255, 0.97);
        border-top: 1px solid var(--surface-container-highest); box-shadow: 0 -6px 20px rgba(2, 28, 54, 0.08);
        transform: translateY(110%); transition: transform 200ms ease;
      }
      .evb-mbar.is-on { transform: none; }
      .evb-mbar b { display: block; font-family: var(--font-display); font-size: 0.875rem; color: var(--primary); }
      .evb-mbar span { font-size: 0.75rem; color: var(--on-surface-variant); }
      .evb-mbar .evb-btn { padding: 11px 18px; font-size: 0.875rem; }
    }

    @media (prefers-reduced-motion: reduce) {
      .evb-btn, .evb-mbar, .evb-faq__list summary::after { transition: none; }
      .evb-btn:hover { transform: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header-minimal.php'; ?>

  <main class="evb">

    <!-- Private-session bar -->
    <div class="evb-bar">
      <div class="evb-wrap">
        <span>A private session <strong>exclusively for</strong></span>
        <img src="<?php echo TLA_BASE; ?>/assets/revolution-mortgage-logo.svg" alt="Revolution Mortgage" />
        <span class="evb-bar__sep" aria-hidden="true"></span>
        <span>Wednesday, October 14, 2026</span>
      </div>
    </div>

    <!-- ─────────── Hero ─────────── -->
    <section class="evb-hero">
      <div class="evb-wrap evb-hero__grid">
        <div>
          <p class="evb-eyebrow">Live Webinar</p>
          <h1 class="evb-title">Winning in 2026: The Eight Disciplines of Origination Mastery</h1>
          <p class="evb-lede">Most originators are waiting this market out. The ones who come out ahead will be the ones who got deliberate about what they can actually control&nbsp;&mdash; before January. Tim Braheem will show you how to build and run that system.</p>

          <div class="evb-facts">
            <div><small>Date</small><b>Wed, Oct 14, 2026</b></div>
            <div><small>Time</small><b>11:00 AM ET</b><span>8:00 AM PT</span></div>
            <div><small>Format</small><b>Live on Zoom</b></div>
          </div>

          <div class="evb-host">
            <img src="<?php echo TLA_BASE; ?>/assets/tim-braheem-headshot.png" alt="" />
            <div>
              <b>Tim Braheem</b>
              <span>Founder, The Loan Atlas &middot; $1.4B in personal production</span>
            </div>
          </div>
        </div>

        <aside class="evb-card" id="register">
          <h2>Register for this session</h2>
          <p>Reserve your seat on Zoom. Your personal join link arrives by email as soon as you register.</p>
          <dl>
            <div><dt>When</dt><dd>Wednesday, Oct 14<span>11:00 AM ET &middot; 8:00 AM PT</span></dd></div>
            <div><dt>Where</dt><dd>Online<span>Zoom webinar</span></dd></div>
            <div><dt>For</dt><dd>Revolution Mortgage<span>Loan originators &amp; leaders</span></dd></div>
          </dl>
          <a class="evb-btn" href="https://us02web.zoom.us/meeting/register/6ZpRjfvGQZWQIneX9Mqw7w" target="_blank" rel="noopener">
            Register on Zoom
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg>
          </a>
          <p class="evb-card__note">Opens Zoom&rsquo;s registration page in a new tab.</p>
        </aside>
      </div>
    </section>

    <!-- ─────────── About ─────────── -->
    <section class="evb-sec">
      <div class="evb-wrap evb-about">
        <div>
          <p class="evb-eyebrow">About This Session</p>
          <h2 class="evb-h2">Hope isn&rsquo;t a plan.</h2>
        </div>
        <div class="evb-about__body">
          <p>This market has been hard, and most originators are waiting it out&nbsp;&mdash; hoping that when rates drop, things get easier. But hope isn&rsquo;t a plan, and the ones who come out ahead won&rsquo;t be the ones who waited. They&rsquo;ll be the ones who got deliberate about the things they can actually control before January.</p>
          <p>On <strong>October 14th</strong>, Tim Braheem and The Loan Atlas are going to show you how to build and run that system in a special session <strong>exclusively for Revolution Mortgage</strong>.</p>
        </div>
      </div>
    </section>

    <!-- ─────────── Agenda ─────────── -->
    <section class="evb-sec evb-sec--tint" id="agenda">
      <div class="evb-wrap">
        <div class="evb-agenda__head">
          <div>
            <p class="evb-eyebrow">Agenda</p>
            <h2 class="evb-h2">What you&rsquo;ll learn</h2>
          </div>
          <p>Six parts, one system&nbsp;&mdash; finishing with live coaching on your own pipeline.</p>
        </div>
        <ol class="evb-agenda">
          <li><h3>The Eight Disciplines of Origination Mastery</h3><p>An honest score on where your business is strong and where it&rsquo;s leaking.</p></li>
          <li><h3>The conversion math</h3><p>Why lifting your conversion from two closes in ten to three can raise your income by 150%&nbsp;&mdash; and where that&rsquo;s slipping away.</p></li>
          <li><h3>Where the deals are hiding</h3><p>The referral sources and niches most originators walk right past in a slow market.</p></li>
          <li><h3>AI as a real advantage in 2027</h3><p>How to use it without letting it quietly replace the selling that pays you.</p></li>
          <li><h3>The customer-service system</h3><p>The system behind Tim&rsquo;s biggest years at 500+ loans.</p></li>
          <li><h3>Live coaching</h3><p>Bring what you&rsquo;re stuck on and get Tim&rsquo;s read on your real situation, in the room.</p></li>
        </ol>
      </div>
    </section>

    <!-- ─────────── Speaker ─────────── -->
    <section class="evb-sec" id="speaker">
      <div class="evb-wrap evb-speaker">
        <div class="evb-speaker__photo">
          <img src="<?php echo TLA_BASE; ?>/assets/tim-braheem-headshot.png" alt="Tim Braheem" loading="lazy" />
        </div>
        <div>
          <p class="evb-eyebrow">Your Speaker</p>
          <h2 class="evb-h2">Tim Braheem</h2>
          <p class="evb-speaker__role">Founder &amp; Chief Content Officer, The Loan Atlas</p>
          <div class="evb-speaker__bio">
            <p>Tim is the founder of The Loan Atlas and the foundation it&rsquo;s built on. He&rsquo;s a producer who built coaching because he couldn&rsquo;t find coaching that worked&nbsp;&mdash; and now teaches the operating system he wishes he&rsquo;d had in the seat.</p>
            <p>He founded First Rate Financial in 1995 and co-founded Loantoolbox.com in 2001, which was named to the Inc.&nbsp;500. He hosts <em>The 360 Experience</em> podcast.</p>
          </div>
          <div class="evb-stats">
            <div><b>$1.4B</b><span>Personal loan production</span></div>
            <div><b>25+</b><span>Years as an originator</span></div>
            <div><b>500+</b><span>Loans in his biggest years</span></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ─────────── FAQ ─────────── -->
    <section class="evb-sec evb-sec--tint">
      <div class="evb-wrap evb-faq">
        <div>
          <p class="evb-eyebrow">FAQ</p>
          <h2 class="evb-h2">Before you register</h2>
        </div>
        <div class="evb-faq__list">
          <details open>
            <summary>Who is this session for?</summary>
            <p>This is a private session for Revolution Mortgage loan originators and leaders.</p>
          </details>
          <details>
            <summary>How do I join on the day?</summary>
            <p>Register on Zoom and you&rsquo;ll receive a personal join link by email. Use that link on October 14th to enter the session.</p>
          </details>
          <details>
            <summary>What time does it start in my time zone?</summary>
            <p>11:00 AM Eastern, 10:00 AM Central, 9:00 AM Mountain, and 8:00 AM Pacific.</p>
          </details>
          <details>
            <summary>Can I bring my own questions?</summary>
            <p>Yes. The session ends with live coaching&nbsp;&mdash; bring what you&rsquo;re stuck on and get Tim&rsquo;s read on your real situation.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- ─────────── Closing CTA ─────────── -->
    <section class="evb-close">
      <div class="evb-wrap">
        <div>
          <h2>Reserve your seat for October 14</h2>
          <p>Wednesday &middot; 11:00 AM ET &middot; Live on Zoom</p>
        </div>
        <a class="evb-btn evb-btn--gold" href="https://us02web.zoom.us/meeting/register/6ZpRjfvGQZWQIneX9Mqw7w" target="_blank" rel="noopener">
          Register on Zoom
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg>
        </a>
      </div>
    </section>

  </main>

  <!-- Mobile register bar (shows once the hero card scrolls away) -->
  <div class="evb-mbar" data-evb-mbar>
    <div><b>Winning in 2026</b><span>Wed, Oct 14 &middot; 11:00 AM ET</span></div>
    <a class="evb-btn" href="https://us02web.zoom.us/meeting/register/6ZpRjfvGQZWQIneX9Mqw7w" target="_blank" rel="noopener">Register</a>
  </div>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script>
    /* Mobile register bar: show after the registration card leaves the viewport */
    (function () {
      var bar = document.querySelector('[data-evb-mbar]');
      var card = document.getElementById('register');
      if (!bar || !card || !('IntersectionObserver' in window)) return;
      new IntersectionObserver(function (entries) {
        var e = entries[0];
        bar.classList.toggle('is-on', !e.isIntersecting && e.boundingClientRect.top < 0);
      }).observe(card);
    })();
  </script>
