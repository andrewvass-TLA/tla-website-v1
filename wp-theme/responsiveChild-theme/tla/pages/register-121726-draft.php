<?php
/**
 * Body partial for /register-121726-draft/ (TLA Full HTML template).
 * Generated from public/webinar-registration-pages/register-121726.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = '2027 Business Planning: Turn Your Goals Into an Execution Plan — The Loan Atlas';
$tla_description = 'Tim Braheem and Josh Mettle help you turn your 2027 goals into an execution plan. A private live session for Revolution Mortgage, Thursday, December 17, 2026 at 10:00 AM PT.';
$tla_active      = '';
?>
  <style>
    .evc { background: var(--background); color: var(--on-surface); }
    .evc-wrap { max-width: 1160px; margin-inline: auto; padding-inline: var(--gutter); }
    .evc-dark { background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%); color: #fff; }

    .evc-eyebrow {
      margin: 0 0 14px; font-size: 0.8125rem; font-weight: 700; letter-spacing: 0.18em;
      text-transform: uppercase; color: var(--secondary);
    }
    .evc-dark .evc-eyebrow { color: var(--brass-bright); }
    .evc-h2 {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: clamp(1.75rem, 3.2vw, 2.5rem); line-height: 1.12; letter-spacing: -0.02em; margin: 0;
    }
    .evc-dark .evc-h2 { color: #fff; }
    .evc-center { text-align: center; }

    /* --- Buttons -------------------------------------------------------- */
    .evc-btn {
      display: inline-flex; align-items: center; justify-content: center; gap: 10px;
      padding: 16px 28px; border-radius: var(--radius-lg);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      color: var(--primary); text-decoration: none;
      font-family: var(--font-display); font-weight: 800; font-size: 0.9375rem;
      box-shadow: 0 8px 22px rgba(201, 150, 28, 0.28);
      transition: transform 160ms ease, filter 160ms ease, box-shadow 160ms ease;
    }
    .evc-btn:hover { transform: translateY(-2px); filter: brightness(1.05); box-shadow: 0 12px 28px rgba(201, 150, 28, 0.36); }
    .evc-btn:focus-visible { outline: 3px solid var(--primary-fixed-dim); outline-offset: 3px; }
    .evc-btn svg { width: 16px; height: 16px; }

    /* --- Hero: left-aligned copy, photo bleeding off the right edge ----- */
    .evc-hero {
      position: relative; overflow: hidden; background: #060e1c;
      padding: clamp(40px, 5vw, 60px) 0 clamp(64px, 8vw, 104px);
      min-height: clamp(600px, 52vw, 720px); display: flex; align-items: center;
    }
    .evc-hero::before {
      content: ""; position: absolute; inset: 0; pointer-events: none; z-index: 1;
      background: radial-gradient(45% 60% at 0% 0%, rgba(234, 194, 90, 0.14), transparent 70%);
    }
    .evc-hero__media { position: absolute; top: 0; right: 0; bottom: 0; width: 62%; margin: 0; }
    .evc-hero__media img { width: 100%; height: 100%; object-fit: cover; object-position: 75% center; display: block; }
    /* Fade the photo into the hero: strong on the left edge, light vignette top/bottom */
    .evc-hero__media::after {
      content: ""; position: absolute; inset: 0;
      background:
        linear-gradient(90deg, #060e1c 0%, rgba(6, 14, 28, 0.82) 22%, rgba(6, 14, 28, 0.25) 55%, rgba(6, 14, 28, 0.1) 100%),
        linear-gradient(180deg, rgba(6, 14, 28, 0.55) 0%, transparent 22%, transparent 72%, rgba(6, 14, 28, 0.8) 100%);
    }
    .evc-hero > .evc-wrap { position: relative; z-index: 2; width: 100%; }
    .evc-hero__copy { max-width: 660px; }
    /* Webinar logo: gold Loan Atlas logomark + "LIVE WEBINAR" wordmark */
    .evc-wlogo {
      display: inline-flex; align-items: center; gap: clamp(14px, 1.8vw, 18px);
      margin: 0 0 clamp(32px, 4vw, 44px);
    }
    .evc-wlogo__mark { height: clamp(38px, 4.2vw, 48px); width: auto; display: block; }
    .evc-wlogo__div { width: 1px; align-self: stretch; background: rgba(234, 194, 90, 0.45); }
    .evc-wlogo__txt {
      font-family: var(--font-display); font-weight: 800; font-size: clamp(1rem, 1.5vw, 1.1875rem);
      letter-spacing: 0.22em; line-height: 1; color: #fff; text-transform: uppercase;
    }
    .evc-title {
      font-family: var(--font-display); font-weight: 800; color: #fff;
      font-size: clamp(2.25rem, 4.2vw, 3.25rem); line-height: 1.06; letter-spacing: -0.03em;
      margin: 0 0 20px;
    }
    .evc-title span {
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .evc-lede { font-size: 1.0625rem; line-height: 1.75; color: rgba(255, 255, 255, 0.74); max-width: 32em; margin: 0 0 32px; }
    /* Event facts strip — one segmented panel with a brass edge */
    .evc-when {
      display: inline-grid; grid-template-columns: repeat(3, auto);
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(234, 194, 90, 0.45); border-radius: var(--radius-2xl);
      box-shadow: 0 0 0 6px rgba(234, 194, 90, 0.06), 0 18px 40px rgba(0, 0, 0, 0.25);
    }
    .evc-when__item { display: flex; align-items: center; gap: 12px; padding: 16px 20px; }
    .evc-when__item + .evc-when__item { border-left: 1px solid rgba(255, 255, 255, 0.12); }
    .evc-when__item i {
      flex-shrink: 0; width: 40px; height: 40px; border-radius: 50%;
      display: grid; place-items: center;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%); color: var(--primary);
    }
    .evc-when__item svg { width: 20px; height: 20px; }
    .evc-when__item small {
      display: block; margin-bottom: 3px;
      font-size: 0.6875rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; color: var(--brass-bright);
    }
    .evc-when__item b { display: block; font-family: var(--font-display); font-weight: 800; font-size: 1.0625rem; color: #fff; white-space: nowrap; }
    .evc-when__item b span { display: block; font-weight: 600; color: rgba(255, 255, 255, 0.6); font-size: 0.8125rem; }
    @media (max-width: 760px) {
      .evc-when { display: grid; grid-template-columns: 1fr; }
      .evc-when__item { padding: 16px 20px; }
      .evc-when__item + .evc-when__item { border-left: 0; border-top: 1px solid rgba(255, 255, 255, 0.12); }
    }

    /* Hero CTA */
    .evc-hero__cta { margin-top: clamp(28px, 3.5vw, 40px); }
    .evc-hero__cta .evc-btn { padding: 18px 40px; font-size: 1.0625rem; }
    .evc-hero__note { margin: 14px 0 0; font-size: 0.8125rem; color: rgba(255, 255, 255, 0.55); }
    /* Tablet/phone: photo becomes a banner above the copy */
    @media (max-width: 900px) {
      .evc-hero { display: block; min-height: 0; padding-top: 0; }
      .evc-hero__media { position: relative; width: 100%; height: clamp(240px, 52vw, 420px); }
      .evc-hero__media img { object-position: center 30%; }
      .evc-hero__media::after {
        background: linear-gradient(180deg, rgba(6, 14, 28, 0.35) 0%, transparent 30%, rgba(6, 14, 28, 0.6) 70%, #060e1c 100%);
      }
      .evc-hero > .evc-wrap { margin-top: -56px; }
    }

    /* --- Sections ------------------------------------------------------- */
    .evc-sec { padding-block: clamp(72px, 9vw, 120px); }

    /* About + agenda: story on the left, learning list on the right */
    .evc-about { display: grid; grid-template-columns: 1.1fr 1fr; gap: clamp(40px, 5vw, 72px); align-items: start; }
    .evc-why__quote {
      font-family: var(--font-display); font-weight: 800; color: var(--primary);
      font-size: clamp(2rem, 3.3vw, 2.625rem); line-height: 1.08; letter-spacing: -0.03em; margin: 0 0 28px;
    }
    .evc-why__quote span { color: var(--brass); }
    .evc-why .evc-why__txt { font-size: 1.0625rem; line-height: 1.75; color: var(--on-surface-variant); margin: 0 0 18px; }
    .evc-why strong { color: var(--primary); font-weight: 600; }

    /* Agenda list */
    .evc-learn {
      padding: clamp(28px, 3.4vw, 40px); background: #fff;
      border: 1px solid rgba(2, 28, 54, 0.08); border-radius: var(--radius-2xl);
      box-shadow: 0 18px 40px rgba(2, 28, 54, 0.06);
    }
    .evc-learn .evc-h2 { font-size: clamp(1.5rem, 2.4vw, 1.875rem); margin-bottom: 8px; }
    .evc-learn ol { list-style: none; margin: 0; padding: 0; counter-reset: ag; }
    .evc-learn li {
      counter-increment: ag; display: grid; grid-template-columns: 36px 1fr; gap: 14px;
      padding: 18px 0; border-bottom: 1px solid rgba(2, 28, 54, 0.08);
    }
    .evc-learn li::before {
      content: counter(ag, decimal-leading-zero); padding-top: 3px;
      font-family: var(--font-display); font-weight: 800; font-size: 0.875rem; color: var(--brass);
    }
    .evc-learn li { font-size: 1.0625rem; line-height: 1.75; color: var(--primary); }
    .evc-learn li:last-child { border-bottom: 0; padding-bottom: 0; }
    @media (max-width: 900px) { .evc-about { grid-template-columns: 1fr; } }

    /* Inline CTA: photo card washed with a fading brass gradient */
    .evc-icta { padding-block: clamp(72px, 9vw, 120px); }
    .evc-icta__card {
      position: relative; overflow: hidden; border-radius: var(--radius-3xl, 24px);
      padding: clamp(40px, 6vw, 72px) clamp(28px, 5vw, 64px);
      background: #c9961c url("<?php echo TLA_BASE; ?>/assets/inline-cta-bg.webp") right center / cover no-repeat;
      box-shadow: 0 24px 60px rgba(2, 28, 54, 0.16);
    }
    .evc-icta__card::before {
      content: ""; position: absolute; inset: 0;
      background: linear-gradient(100deg, rgba(201, 150, 28, 0.97) 0%, rgba(234, 194, 90, 0.92) 38%, rgba(255, 213, 108, 0.45) 66%, rgba(255, 213, 108, 0) 100%);
    }
    .evc-icta__body { position: relative; max-width: 540px; }
    .evc-icta__body .evc-h2 { color: var(--primary); margin-bottom: 14px; }
    .evc-icta__body p { margin: 0 0 28px; font-size: 1.0625rem; line-height: 1.75; color: rgba(2, 28, 54, 0.82); }
    .evc-btn--dark { background: var(--primary); color: #fff; box-shadow: 0 10px 24px rgba(2, 28, 54, 0.3); }
    @media (max-width: 700px) {
      .evc-icta__card::before { background: linear-gradient(180deg, rgba(201, 150, 28, 0.96) 0%, rgba(234, 194, 90, 0.9) 60%, rgba(255, 213, 108, 0.7) 100%); }
    }

    /* Hosts band: one row per host, large cutout photo, alternating sides */
    .evc-speaker { position: relative; overflow: hidden; padding-block: clamp(72px, 9vw, 120px); }
    .evc-speaker .evc-wrap { position: relative; }
    .evc-hosts-title {
      margin: 0 0 clamp(40px, 5vw, 64px); text-align: center;
      font-family: var(--font-display); font-weight: 800; font-size: clamp(1.75rem, 3.2vw, 2.5rem);
      letter-spacing: 0.08em; text-transform: uppercase; color: #fff;
    }
    .evc-host {
      display: grid; grid-template-columns: 0.9fr 1.1fr; gap: clamp(32px, 5vw, 72px); align-items: center;
    }
    .evc-host + .evc-host { margin-top: clamp(64px, 8vw, 104px); }
    .evc-host--flip { grid-template-columns: 1.1fr 0.9fr; }
    .evc-host--flip .evc-host__photo { order: 2; }
    .evc-host__photo {
      position: relative; aspect-ratio: 4 / 5; border-radius: var(--radius-3xl, 24px); overflow: hidden;
      border: 1px solid rgba(234, 194, 90, 0.28);
      background:
        radial-gradient(70% 55% at 50% 62%, rgba(234, 194, 90, 0.34), transparent 70%),
        linear-gradient(180deg, #0d2340 0%, #071528 100%);
    }
    .evc-host__photo::after {
      content: ""; position: absolute; inset: auto 0 0; height: 18%;
      background: linear-gradient(180deg, transparent, rgba(6, 14, 28, 0.55));
    }
    .evc-host__photo img {
      position: absolute; left: 50%; bottom: 0; transform: translateX(-50%);
      width: 92%; height: 92%; object-fit: contain; object-position: center bottom; display: block;
    }
    .evc-host__name { margin: 0; font-family: var(--font-display); font-weight: 800; font-size: clamp(2rem, 3.6vw, 2.75rem); letter-spacing: -0.02em; color: #fff; }
    .evc-host__copy .evc-speaker__role { margin: 6px 0 24px; color: var(--brass-bright); font-weight: 600; font-size: 1.0625rem; }
    .evc-host__copy > p { color: rgba(255, 255, 255, 0.76); font-size: 1.0625rem; line-height: 1.75; margin: 0 0 16px; }
    .evc-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-top: 24px; }
    .evc-stats div { padding: 14px 16px; border: 1px solid rgba(255, 255, 255, 0.12); border-radius: var(--radius-xl); background: rgba(255, 255, 255, 0.03); }
    .evc-stats b { display: block; font-family: var(--font-display); font-weight: 800; font-size: clamp(1.25rem, 2vw, 1.5rem); color: #fff; letter-spacing: -0.02em; }
    .evc-stats span { font-size: 0.8125rem; line-height: 1.4; color: rgba(255, 255, 255, 0.6); }
    @media (max-width: 900px) {
      .evc-host, .evc-host--flip { grid-template-columns: 1fr; }
      .evc-host--flip .evc-host__photo { order: 0; }
      .evc-host__photo { max-width: 440px; width: 100%; margin-inline: auto; }
    }
    @media (max-width: 520px) { .evc-stats { grid-template-columns: 1fr; } }

    /* Mobile register bar */
    .evc-mbar { display: none; }
    @media (max-width: 860px) {
      .evc-mbar {
        display: flex; position: fixed; left: 0; right: 0; bottom: 0; z-index: 45;
        align-items: center; justify-content: space-between; gap: 12px;
        padding: 12px 16px; background: rgba(2, 28, 54, 0.97); color: #fff;
        box-shadow: 0 -6px 20px rgba(2, 28, 54, 0.2);
        transform: translateY(110%); transition: transform 200ms ease;
      }
      .evc-mbar.is-on { transform: none; }
      .evc-mbar b { display: block; font-family: var(--font-display); font-size: 0.875rem; }
      .evc-mbar span { font-size: 0.75rem; color: rgba(255, 255, 255, 0.65); }
      .evc-mbar .evc-btn { padding: 11px 18px; font-size: 0.875rem; box-shadow: none; }
    }

    @media (prefers-reduced-motion: reduce) {
      .evc-btn, .evc-mbar { transition: none; }
      .evc-btn:hover { transform: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header-minimal.php'; ?>

  <main class="evc">

    <!-- ─────────── Hero ─────────── -->
    <section class="evc-hero evc-dark">
      <figure class="evc-hero__media" aria-hidden="true">
        <img src="<?php echo TLA_BASE; ?>/assets/register-121726-hero.webp" alt="" width="1172" height="941" />
      </figure>
      <div class="evc-wrap">
        <div class="evc-hero__copy">
          <div class="evc-wlogo" role="img" aria-label="The Loan Atlas Live Webinar">
            <img class="evc-wlogo__mark" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" />
            <span class="evc-wlogo__div" aria-hidden="true"></span>
            <span class="evc-wlogo__txt" aria-hidden="true">Live Webinar</span>
          </div>
          <h1 class="evc-title"><span>2027 Business Planning:</span> Turn Your Goals Into an Execution Plan</h1>
          <p class="evc-lede">Map out where your loans will come from next year&nbsp;&mdash; which relationships, which channels, which numbers&nbsp;&mdash; before the market decides for you.</p>
          <div class="evc-when">
            <div class="evc-when__item"><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></i><div><small>Date</small><b>Thu, Dec 17, 2026</b></div></div>
            <div class="evc-when__item"><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></i><div><small>Time</small><b>10:00 AM PT <span>1:00 PM ET</span></b></div></div>
            <div class="evc-when__item"><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="6" width="14" height="12" rx="2"/><path d="m16 10 6-3v10l-6-3"/></svg></i><div><small>Where</small><b>Live on Zoom</b></div></div>
          </div>
          <div class="evc-hero__cta" id="register">
            <a class="evc-btn" href="https://us02web.zoom.us/meeting/register/3qpk6vn_SNC_D00YxTABZQ#/registration" target="_blank" rel="noopener">
              Register on Zoom
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg>
            </a>
            <p class="evc-hero__note">Opens Zoom&rsquo;s registration page in a new tab. Your join link arrives by email.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ─────────── About + agenda ─────────── -->
    <section class="evc-sec">
      <div class="evc-wrap evc-about">
        <div class="evc-why" data-reveal="up">
          <p class="evc-why__quote">You don&rsquo;t rise to your goals.<br /><span>You fall to your systems.</span></p>
          <p class="evc-why__txt">Nobody can tell you where rates, inventory, or the Fed will land in 2027. What we can tell you is that top producers aren&rsquo;t guessing where their business is going to come from. They are already mapping it out months in advance (which relationships, which channels, which numbers) so when the market throws a curveball, they don&rsquo;t freeze. They pivot, and their pipelines keep moving.</p>
          <p class="evc-why__txt">On <strong>December 17th</strong>, Tim Braheem and Josh Mettle are going to help you be more intentional about where you get your loans next year. They will take you through the same planning system they&rsquo;ve used to build billion-dollar businesses and coach the highest producing originators in the country. You&rsquo;ll learn how to assess your business, run your real numbers, and leave with a focused plan for 2027 that you will execute on.</p>
        </div>
        <div class="evc-learn" data-reveal="up">
          <h2 class="evc-h2">What you&rsquo;ll learn</h2>
          <ol>
            <li>The mindset patterns that separate people who consistently execute on their goals from those who get knocked off course when challenges arise</li>
            <li>How to connect your income and production targets to a focused 2027 business plan</li>
            <li>How to turn a broad or &ldquo;half-baked&rdquo; goal into a specific, measurable, time-bound goal with clear action items</li>
            <li>How to use AI to reduce the amount of work you have to do</li>
            <li>How to build an accountability cadence through Q1 2027, and keep your goals from disappearing after planning season</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- ─────────── Hosts ─────────── -->
    <section class="evc-speaker evc-dark">
      <div class="evc-wrap">
        <h2 class="evc-hosts-title" data-reveal="up">Hosted By</h2>

        <article class="evc-host" data-reveal="up">
          <div class="evc-host__photo">
            <img src="<?php echo TLA_BASE; ?>/assets/tim-braheem-headshot.png" alt="Tim Braheem" loading="lazy" />
          </div>
          <div class="evc-host__copy">
            <h3 class="evc-host__name">Tim Braheem</h3>
            <p class="evc-speaker__role">Founder &amp; Chief Content Officer, The Loan Atlas</p>
            <p>Tim is the founder of The Loan Atlas and the foundation it&rsquo;s built on. He&rsquo;s a producer who built coaching because he couldn&rsquo;t find coaching that worked&nbsp;&mdash; and now teaches the operating system he wishes he&rsquo;d had in the seat, every week, alongside the rest of the faculty.</p>
            <p>He founded First Rate Financial in 1995 and co-founded Loantoolbox.com in 2001, which reached 10,800 paying members by 2006 and was named to the Inc.&nbsp;500. He hosts <em>The 360 Experience</em> podcast.</p>
            <div class="evc-stats">
              <div><b>$1.4B</b><span>Personal loan volume</span></div>
              <div><b>25+</b><span>Years as a mortgage originator</span></div>
              <div><b>Inc. 500</b><span>Loantoolbox.com, co-founded 2001</span></div>
            </div>
          </div>
        </article>

        <article class="evc-host evc-host--flip" data-reveal="up">
          <div class="evc-host__photo">
            <img src="<?php echo TLA_BASE; ?>/assets/josh-mettle-headshot.png" alt="Josh Mettle" loading="lazy" />
          </div>
          <div class="evc-host__copy">
            <h3 class="evc-host__name">Josh Mettle</h3>
            <p class="evc-speaker__role">Head of Faculty, The Loan Atlas</p>
            <p>Josh is one of the most successful originator-leaders in the country&nbsp;&mdash; a top 1% producer who has scaled into division leadership while continuing to publish, podcast, and build a public-facing brand that produces real loan volume.</p>
            <p>He was named to the top 1% of mortgage originators in 2020 by <em>Mortgage Executive Magazine</em>. He currently leads a $250M production team and co-owns a nine-figure real estate portfolio.</p>
            <div class="evc-stats">
              <div><b>$1.17B</b><span>Personal production</span></div>
              <div><b>$190.8M</b><span>2025 production &middot; 358 families served</span></div>
              <div><b>25+</b><span>Years in the mortgage industry</span></div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- ─────────── Inline CTA ─────────── -->
    <section class="evc-icta">
      <div class="evc-wrap">
        <div class="evc-icta__card" data-reveal="up">
          <div class="evc-icta__body">
            <h2 class="evc-h2">Build your 2027 plan live with Tim and Josh</h2>
            <p>Thursday, December 17 at 10:00 AM PT. Bring your real numbers and leave with a focused plan you&rsquo;ll actually execute.</p>
            <a class="evc-btn evc-btn--dark" href="https://us02web.zoom.us/meeting/register/3qpk6vn_SNC_D00YxTABZQ#/registration" target="_blank" rel="noopener">
              Register on Zoom
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Mobile register bar (shows once the hero Register button scrolls away) -->
  <div class="evc-mbar" data-evc-mbar>
    <div><b>2027 Business Planning</b><span>Thu, Dec 17 &middot; 10:00 AM PT</span></div>
    <a class="evc-btn" href="https://us02web.zoom.us/meeting/register/3qpk6vn_SNC_D00YxTABZQ#/registration" target="_blank" rel="noopener">Register</a>
  </div>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script>
    /* Mobile register bar: show after the hero Register button leaves the viewport */
    (function () {
      var bar = document.querySelector('[data-evc-mbar]');
      var card = document.getElementById('register');
      if (!bar || !card || !('IntersectionObserver' in window)) return;
      new IntersectionObserver(function (entries) {
        var e = entries[0];
        bar.classList.toggle('is-on', !e.isIntersecting && e.boundingClientRect.top < 0);
      }).observe(card);
    })();
  </script>
