<?php
/**
 * Body partial for /office-hours-caleb-legrand/ (TLA Full HTML template).
 * Generated from public/office-hours-caleb-legrand.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Office Hours with Caleb Legrand — The Loan Atlas';
$tla_description = 'Join Caleb Legrand\'s live office hours inside The Loan Atlas — bring your live deals and get real-time answers from a top-producing coach.';
$tla_active      = '';
?>
  <style>
    .oh { background: var(--background); }

    /* --- Breadcrumb -------------------------------------------------- */
    .oh-crumbs {
      border-bottom: 1px solid var(--outline-variant);
      background: var(--surface-container-lowest);
    }
    .oh-crumbs__inner {
      display: flex; flex-wrap: wrap; align-items: center; gap: 8px;
      padding-block: 14px;
      font-family: var(--font-body); font-size: 0.8125rem; font-weight: 600;
      color: var(--on-surface-variant);
    }
    .oh-crumbs a { color: var(--on-surface-variant); transition: color 150ms ease; }
    .oh-crumbs a:hover { color: var(--brass); }
    .oh-crumbs__sep { color: var(--outline); }
    .oh-crumbs__current { color: var(--on-surface); }

    /* --- Two-column grid (content + sticky sidebar) ------------------ */
    .oh-layout { padding-block: clamp(32px, 4vw, 56px) clamp(56px, 7vw, 104px); }
    .oh-grid {
      display: grid; grid-template-columns: 1.6fr 1fr;
      gap: clamp(32px, 4vw, 64px); align-items: start;
    }

    /* --- Left column: white drop-shadowed card on the grey ground ----- */
    .oh-main {
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-3xl);
      box-shadow: var(--shadow-lg);
      padding: clamp(28px, 3.5vw, 48px);
    }
    .oh-main > * + * { margin-top: clamp(36px, 4.5vw, 64px); }
    /* the first section sits closer to the title/meta header than inter-section gaps */
    .oh-main > .oh-header + * { margin-top: clamp(28px, 3vw, 40px); }

    /* Hero image bleeds to the top edges of the white card (artifact-style) */
    .oh-thumb {
      overflow: hidden; aspect-ratio: 16 / 9;
      margin: calc(-1 * clamp(28px, 3.5vw, 48px));
      margin-bottom: 0;
      border-radius: var(--radius-3xl) var(--radius-3xl) 0 0;
    }
    .oh-thumb img { width: 100%; height: 100%; object-fit: cover; display: block; }

    /* Header order: thumb → meta (date/time) → title.
       Meta sits below the bled image; title sits close beneath the meta. */
    .oh-header > * + * { margin-top: 0; }
    .oh-header .oh-thumb + .oh-meta { margin-top: clamp(24px, 3vw, 32px); }
    .oh-header .oh-meta + .oh-title { margin-top: 10px; }

    .oh-title {
      font-family: var(--font-display);
      font-size: clamp(2rem, 1.4rem + 2.4vw, 2.875rem);
      line-height: 1.1; letter-spacing: -0.025em; font-weight: 800;
      color: var(--on-surface); margin: 0;
    }
    .oh-meta {
      display: flex; flex-wrap: wrap; align-items: center; gap: 10px 20px;
      font-family: var(--font-body); font-size: 0.9375rem; font-weight: 600;
      color: var(--on-surface-variant);
    }
    .oh-meta__item { display: inline-flex; align-items: center; gap: 8px; }
    .oh-meta__item svg { width: 16px; height: 16px; color: var(--brass); }

    .oh-h2 {
      font-family: var(--font-display);
      font-size: clamp(1.375rem, 1.1rem + 1vw, 1.75rem);
      line-height: 1.2; letter-spacing: -0.015em; font-weight: 700;
      color: var(--on-surface); margin: 8px 0 0;
    }
    .oh-prose {
      font-family: var(--font-body); font-size: 1.0625rem; line-height: 1.65;
      color: var(--on-surface-variant); margin: 14px 0 0;
    }

    /* Specialties chips */
    .oh-chips { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
    .oh-chip {
      font-family: var(--font-body); font-size: 0.875rem; font-weight: 600;
      padding: 9px 16px; border-radius: var(--radius-full);
      background: var(--surface-container-low); color: var(--on-surface);
      border: 1px solid var(--outline-variant);
    }

    /* About Caleb */
    .oh-about { display: grid; grid-template-columns: 96px 1fr; gap: 20px; align-items: start; margin-top: 18px; }
    .oh-about__photo {
      width: 96px; height: 96px; border-radius: var(--radius-2xl); overflow: hidden;
      background: var(--surface-container); display: grid; place-items: center;
      border: 1px solid var(--outline-variant); color: var(--on-surface-variant);
    }
    .oh-about__photo svg { width: 40px; height: 40px; }
    .oh-about__photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .oh-about__body p { margin: 0; }
    .oh-about__body p + p { margin-top: 12px; }

    /* Production stat row */
    .oh-stats {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(16px, 2vw, 28px);
      margin-top: 22px;
    }
    .oh-stats--2 { grid-template-columns: repeat(2, 1fr); }
    .oh-stat {
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-2xl);
      padding: clamp(20px, 2.2vw, 28px);
    }
    .oh-stat__num {
      font-family: var(--font-display);
      font-size: clamp(1.75rem, 1.2rem + 1.8vw, 2.5rem); font-weight: 800;
      letter-spacing: -0.02em; line-height: 1;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .oh-stat__label {
      font-family: var(--font-body); font-size: 0.9375rem; font-weight: 600;
      color: var(--on-surface-variant); margin-top: 10px;
    }

    /* Caleb's faculty video — 16:9 embed */
    .oh-video {
      position: relative; aspect-ratio: 16 / 9; overflow: hidden;
      border-radius: var(--radius-xl); border: 1px solid var(--outline-variant);
      background: #000; box-shadow: var(--shadow);
    }
    .oh-video iframe { width: 100%; height: 100%; border: 0; display: block; }

    /* Notify-me callout uses the shared B4 .tlc-notify component (styles.css).
       Here it's pinned as a footer: bleeds out of the white card's padding on
       the left/right/bottom so it spans flush to the card edges, with the
       bottom corners rounded to match the card and the top corners squared. */
    .oh-notify-footer {
      --bleed: clamp(28px, 3.5vw, 48px);
      /* +1px on the bled sides swallows the card's 1px border so it sits flush */
      margin: var(--bleed) calc(-1 * var(--bleed) - 1px) calc(-1 * var(--bleed) - 1px);
      width: auto;
      border-radius: 0 0 var(--radius-3xl) var(--radius-3xl);
    }

    /* --- Right column (sticky sidebar) ------------------------------- */
    .oh-side { position: sticky; top: calc(var(--header-h) + 16px); display: flex; flex-direction: column; gap: 18px; }

    /* Column header — frames the either/or choice */
    .oh-side__head { margin-bottom: 2px; }
    .oh-side__title {
      font-family: var(--font-display); font-weight: 800;
      font-size: clamp(1.375rem, 1.1rem + 1vw, 1.75rem);
      line-height: 1.12; letter-spacing: -0.02em; color: var(--on-surface); margin: 0;
    }
    .oh-side__sub {
      font-family: var(--font-body); font-size: 0.9375rem; line-height: 1.55;
      color: var(--on-surface-variant); margin: 10px 0 0;
    }


    /* Image at the bottom of the A1 navy slab (.tlc-navy), below the button —
       bleeds flush to the card edges with no frame (the artwork carries its
       own composition). The content above keeps its own bottom padding. */
    .oh-join__media img { display: block; width: 100%; height: auto; }

    /* "or" divider between the two cards */
    .oh-or {
      display: flex; align-items: center; gap: 14px;
      color: var(--on-surface-variant);
      font-family: var(--font-display); font-weight: 700; font-size: 0.8125rem;
      text-transform: uppercase; letter-spacing: 0.12em;
    }
    .oh-or::before, .oh-or::after {
      content: ""; flex: 1; height: 1px; background: var(--outline-variant);
    }

    /* Booking calendar embed — mirrors consultation.html .booking-card__iframe.
       Bleeds to the card edges below the A2 split body's intro copy. */
    .oh-book__iframe {
      display: block; width: calc(100% + 44px); margin-left: -22px;
      min-height: 620px; border: none; overflow: hidden;
    }

    /* --- Responsive -------------------------------------------------- */
    @media (max-width: 900px) {
      .oh-grid { grid-template-columns: 1fr; }
      .oh-side { position: static; }
      .oh-stats { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 520px) {
      .oh-stats { grid-template-columns: 1fr; }
      .oh-about { grid-template-columns: 1fr; }
    }

    /* --- Motion fallback --------------------------------------------- */
    @media (prefers-reduced-motion: reduce) {
      .oh-crumbs a { transition: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main oh">

    <!-- Breadcrumb -->
    <nav class="oh-crumbs" aria-label="Breadcrumb">
      <div class="container">
        <div class="oh-crumbs__inner">
          <a href="/live-events/">Live Events</a>
          <span class="oh-crumbs__sep">›</span>
          <span class="oh-crumbs__current">Office Hours with Caleb LeGrand</span>
        </div>
      </div>
    </nav>

    <div class="oh-layout">
      <div class="container">
        <div class="oh-grid">

          <!-- ─────────── LEFT: content ─────────── -->
          <div class="oh-main">

            <!-- Header: thumbnail + title + date -->
            <div class="oh-header" data-reveal="up">
              <div class="oh-thumb">
                <img src="<?php echo TLA_BASE; ?>/assets/live-events/Office-Hours-Caleb-Legrand-0701-16x9.png" alt="Office Hours with Caleb Legrand" loading="eager" />
              </div>
              <div class="oh-meta">
                <span class="oh-meta__item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Jul 1, 2026
                </span>
                <span class="oh-meta__item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 14"></polyline></svg>
                  11:00 AM PT
                </span>
              </div>
              <h1 class="oh-title">Office Hours with Caleb LeGrand</h1>
            </div>

            <!-- What is Office Hours -->
            <section data-reveal="up">
              <h2 class="oh-h2">What is Office Hours?</h2>
              <p class="oh-prose">Office Hours is a live, members-only working session where you bring your real deals, scenarios and questions and get answers in real time. No slides, no theory — just a top-producing coach helping you move your pipeline forward. This is placeholder copy describing the format.</p>
            </section>

            <!-- Caleb's faculty video -->
            <section data-reveal="up">
              <div class="oh-video">
                <iframe src="https://www.youtube-nocookie.com/embed/SBjOcwAn2UM"
                  title="Caleb LeGrand — Faculty introduction"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </section>

            <!-- Specialties -->
            <section data-reveal="up">
              <h2 class="oh-h2">Caleb's Specialties</h2>
              <div class="oh-chips">
                <span class="oh-chip">The Perfect Loan Process</span>
                <span class="oh-chip">The System for Selling</span>
                <span class="oh-chip">The Builder Business</span>
                <span class="oh-chip">Execution Systems</span>
                <span class="oh-chip">Team Building</span>
              </div>
            </section>

            <!-- About Caleb -->
            <section data-reveal="up">
              <h2 class="oh-h2">About Caleb LeGrand</h2>
              <div class="oh-about">
                <div class="oh-about__photo">
                  <img src="<?php echo TLA_BASE; ?>/assets/caleb-legrand-headshot.png" alt="Caleb LeGrand" loading="lazy" />
                </div>
                <div class="oh-about__body">
                  <p>Caleb has helped more than 5,017 families across $1.12B+ in lifetime production while building one of the most respected branch teams in the industry. His work is grounded in the day-to-day systems that make consistency possible.</p>
                  <p>His specialty is The Perfect Loan Process, the System for Selling, and the builder business — installing the execution systems that take a top originator from solo producer to a team that runs without chaos.</p>
                </div>
              </div>
            </section>

            <!-- 2025 Production -->
            <section data-reveal="up">
              <h2 class="oh-h2">Caleb's 2025 Production</h2>
              <div class="oh-stats oh-stats--2">
                <div class="oh-stat">
                  <div class="oh-stat__num" data-countup="69.7" data-countup-prefix="$" data-countup-suffix="M">$69.7M</div>
                  <div class="oh-stat__label">Total funded volume</div>
                </div>
                <div class="oh-stat">
                  <div class="oh-stat__num" data-countup="200" data-countup-suffix="">200</div>
                  <div class="oh-stat__label">Families served</div>
                </div>
              </div>
            </section>

            <!-- Notify-me callout — shared B4 Notify Collage (.tlc-notify).
                 PLACEHOLDER form (no endpoint yet). -->
            <div class="tlc-notify oh-notify-footer" data-reveal="up">
              <!-- Left collage: 2×3 grid of past live events, fading into the navy -->
              <div class="tlc-notify__art" aria-hidden="true">
                <img src="<?php echo TLA_BASE; ?>/assets/live-events/Talk-to-Tim-0731.png" alt="" loading="lazy" />
                <img src="<?php echo TLA_BASE; ?>/assets/live-events/Office-Hours-Kelly-Marsh-0715.png" alt="" loading="lazy" />
                <img src="<?php echo TLA_BASE; ?>/assets/live-events/AI-Lab-Inside-Platinum-0717.png" alt="" loading="lazy" />
                <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-2026-Playbook-0716.png" alt="" loading="lazy" />
                <img src="<?php echo TLA_BASE; ?>/assets/live-events/Office-Hours-Caleb-Legrand-0701.png" alt="" loading="lazy" />
                <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-Fuel-Your-Fire-0611.png" alt="" loading="lazy" />
              </div>
              <div class="tlc-notify__in">
                <span class="tlc-eyebrow">Stay in the Loop</span>
                <h2 class="tlc-notify__title">Get notified about upcoming events</h2>
                <p class="tlc-notify__sub">Be the first to know about upcoming office hours, masterclasses and AI Labs inside The Loan Atlas.</p>
                <!-- TODO: wire this form to the real notify/subscribe endpoint -->
                <form class="tlc-notify__form" action="#" onsubmit="return false;">
                  <div class="tlc-notify__field"><input type="text" name="name" placeholder="Your name" aria-label="Your name" /></div>
                  <div class="tlc-notify__field"><input type="email" name="email" placeholder="Email address" aria-label="Email address" /></div>
                  <button type="submit" class="tlc-btn">Notify Me</button>
                </form>
              </div>
            </div>

          </div>

          <!-- ─────────── RIGHT: sticky sidebar ─────────── -->
          <aside class="oh-side" data-reveal="up">

            <!-- Column header — frames the two cards as an either/or choice -->
            <div class="oh-side__head">
              <h2 class="oh-side__title">Want to Join This Office Hours?</h2>
              <p class="oh-side__sub">Start your membership or schedule your coaching call to see everything inside.</p>
            </div>

            <!-- Card 1 — Join The Loan Atlas — A1 Navy Slab callout (.tlc-navy) -->
            <div class="tlc-navy">
              <div class="tlc-navy__in">
                <h3 class="tlc-navy__title">Join The Loan Atlas</h3>
                <p class="tlc-navy__text">Office hours are included with membership. Here's everything you unlock inside The Loan Atlas:</p>
                <!-- Brass gradient definition for the bare checkmarks below -->
                <svg width="0" height="0" aria-hidden="true" style="position:absolute"><defs><linearGradient id="tlcGoldCheck" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#c9961c"/><stop offset="50%" stop-color="#eac25a"/><stop offset="100%" stop-color="#ffd56c"/></linearGradient></defs></svg>
                <ul class="tlc-list">
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>Seven live coaching calls</strong> every month, including this one</span></li>
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>200+ training modules</strong> across the 8 Disciplines of Loan Origination Mastery</span></li>
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>An all-star faculty</strong> with over $29 billion in collective loan funding</span></li>
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>The Perfect Loan Process™</strong> — from initial inquiry to final approval</span></li>
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>The Ultimate AI GPT Coach</strong> for scripting, follow-up, realtor relationships and more</span></li>
                </ul>
                <a class="tlc-btn" href="/join/">View Membership Options</a>
              </div>
              <div class="oh-join__media">
                <img src="<?php echo TLA_BASE; ?>/assets/hero image.png" alt="The Loan Atlas member platform" loading="lazy" />
              </div>
            </div>

            <!-- Either/or divider -->
            <div class="oh-or" aria-hidden="true"><span>or</span></div>

            <!-- Card 2 — Free coaching session — A2 Gold-Header Split (.tlc-split) -->
            <div class="tlc-split">
              <div class="tlc-split__cap">
                <h3 class="tlc-split__cap-title">Book a Free Coaching Session</h3>
              </div>
              <div class="tlc-split__body" style="padding-bottom:0;">
                <p style="margin-bottom:14px;">Sit down with a coach one-on-one — no cost, no obligation. Pick a time below.</p>
                <!-- LeadConnector booking widget — same as consultation.html -->
                <iframe src="https://api.leadconnectorhq.com/widget/booking/sNSShvRjEhTdDcR9MTmx"
                  class="oh-book__iframe" scrolling="no"
                  id="oh-booking-caleb" title="Schedule Booking"></iframe>
              </div>
            </div>

          </aside>

        </div>
      </div>
    </div>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
