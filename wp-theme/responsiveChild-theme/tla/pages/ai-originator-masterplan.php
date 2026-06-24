<?php
/**
 * Body partial for /ai-originator-masterplan/ (TLA Full HTML template).
 * Generated from public/ai-originator-masterplan.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'The AI-Empowered Originator Masterplan';
$tla_description = 'The free guide showing how the next generation of mortgage originators close twice the loans in half the time — using the 5 AI systems behind today\'s top producers.';
$tla_active      = '';
?>

<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main aimp">

    <!-- ───────────────────────── HERO ───────────────────────── -->
    <section class="aimp-hero" aria-labelledby="aimp-hero-heading">
      <div class="aimp-hero__bg" aria-hidden="true"></div>
      <div class="container aimp-hero__grid">

        <!-- Left: the pitch -->
        <div class="aimp-hero__copy">
          <span class="aimp-eyebrow">Free Guide For Mortgage Originators</span>
          <h1 id="aimp-hero-heading" class="aimp-hero__title">
            The <span class="aimp-grad">AI-Empowered</span><br />Originator Masterplan
          </h1>
          <p class="aimp-hero__sub">
            Learn how the next generation of mortgage advisors are closing <strong>twice the loans
            in half the time</strong> — and the 5 AI systems they're using to do it.
          </p>

          <ul class="aimp-hero__bullets">
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg>
              Why some originators are pulling ahead while others stall in the same market
            </li>
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg>
              The 5 AI systems behind today's top producers — and where you stand today
            </li>
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg>
              What to change first to make next year more predictable than this one
            </li>
          </ul>

          <div class="aimp-hero__actions">
            <a class="btn btn--gold btn--xl" href="#get-the-plan" data-scroll-to-form>Get the Masterplan</a>
          </div>
        </div>

        <!-- Right: hero imagery — masterplan on iPad with the phone hovering above.
             Device mockups are transparent PNGs, used bare (no container) with
             drop-shadow filters. -->
        <div class="aimp-hero__stage" aria-hidden="true">
          <div class="aimp-hero__glow"></div>
          <img class="aimp-hero__ipad" src="<?php echo TLA_BASE; ?>/assets/ai-masterplan-ipad.png"
            alt="" loading="eager" width="1122" height="1402" />
          <img class="aimp-hero__phone" src="<?php echo TLA_BASE; ?>/assets/ai-masterplan-phone.png"
            alt="" loading="eager" width="1122" height="1402" />
        </div>

      </div>
    </section>

    <!-- ──────────── LEAD-CAPTURE MODAL ──────────── -->
    <dialog class="aimp-modal" id="get-the-plan" aria-labelledby="aimp-modal-title">
      <div class="aimp-formcard">
        <button type="button" class="aimp-modal__close" aria-label="Close" data-close-form>
          <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" /></svg>
        </button>
        <h2 id="aimp-modal-title" class="aimp-formcard__title">Learn How to Become an AI-Empowered Originator</h2>
        <!-- LeadConnector (GoHighLevel) inline form embed, full-width inside
             the card. form_embed.js (bottom of this file) reads the data-* attrs
             and auto-resizes the iframe to the form's real height. -->
        <div class="aimp-formcard__embed">
          <iframe
            src="https://api.leadconnectorhq.com/widget/form/MeLvO1N8Pxv5GOxYyJrD"
            style="width:100%;height:100%;border:none;border-radius:0px"
            id="inline-MeLvO1N8Pxv5GOxYyJrD"
            data-layout="{'id':'INLINE'}"
            data-trigger-type="alwaysShow"
            data-trigger-value=""
            data-activation-type="alwaysActivated"
            data-activation-value=""
            data-deactivation-type="neverDeactivate"
            data-deactivation-value=""
            data-form-name="LM: The AI-Empowered Originator Masterplan"
            data-height="498"
            data-layout-iframe-id="inline-MeLvO1N8Pxv5GOxYyJrD"
            data-form-id="MeLvO1N8Pxv5GOxYyJrD"
            title="LM: The AI-Empowered Originator Masterplan"></iframe>
        </div>
      </div>
    </dialog>

    <!-- ──────────────────── PROBLEM / AGITATION ──────────────────── -->
    <section class="aimp-section aimp-section--problem" aria-labelledby="aimp-change-heading">
      <div class="container aimp-problem__grid">
        <header class="aimp-secthead aimp-secthead--left" data-reveal="up">
          <h2 id="aimp-change-heading" class="aimp-secthead__title">
            You're working harder than ever —
            <span class="aimp-grad">but the numbers aren't following</span>.
          </h2>
          <p class="aimp-secthead__sub">
            Realtor referrals are less predictable. Borrowers shop more. Margins are tighter.
            You're putting in the same hours (or more) for results that swing wildly from
            one month to the next.
          </p>
          <p class="aimp-secthead__sub aimp-secthead__sub--bold">
            The originators succeeding in this market aren't working harder than
            you. They've changed how their business actually operates day-to-day —
            and you can't close a gap you can't yet see.
          </p>
        </header>

        <!-- Volatile monthly-closings chart in a card: closings swing wildly
             month to month, repeatedly missing a flat target — visualizes the
             "coin-flip months" pain. Pure inline SVG (themeable, crisp, no
             asset). Sits in the right column of .aimp-problem__grid. -->
        <div class="aimp-chart-card" data-reveal="up">
          <h3 class="aimp-chart-card__heading">Does This Look Familiar?</h3>
          <figure class="aimp-chart aimp-chart--inline" role="img"
            aria-label="Bar chart of monthly loan closings swinging up and down through the year, repeatedly missing a steady target line.">
            <figcaption class="aimp-chart__label">Your Monthly Closings</figcaption>

            <svg class="aimp-chart__svg" viewBox="0 0 960 300" preserveAspectRatio="none"
            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <defs>
              <linearGradient id="aimpBar" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#63a3f9" />
                <stop offset="100%" stop-color="#2b6fc4" />
              </linearGradient>
              <linearGradient id="aimpLine" x1="0" y1="0" x2="1" y2="0">
                <stop offset="0%" stop-color="#41b7f9" />
                <stop offset="100%" stop-color="#7fc4ff" />
              </linearGradient>
            </defs>

            <!-- baseline -->
            <line x1="20" y1="256" x2="940" y2="256" stroke="rgba(255,255,255,0.14)" stroke-width="1" vector-effect="non-scaling-stroke" />

            <!-- target line they keep missing (flat, dashed brass) -->
            <line x1="20" y1="138" x2="940" y2="138" stroke="#eac25a" stroke-width="2"
              stroke-dasharray="6 6" opacity="0.85" vector-effect="non-scaling-stroke" />

            <!-- 12 months, wildly varying heights (baseline y=256) -->
            <g class="aimp-chart__bars">
              <rect x="40"  width="40" y="142" height="114" rx="3" />
              <rect x="116" width="40" y="196" height="60"  rx="3" />
              <rect x="192" width="40" y="108" height="148" rx="3" />
              <rect x="268" width="40" y="208" height="48"  rx="3" />
              <rect x="344" width="40" y="158" height="98"  rx="3" />
              <rect x="420" width="40" y="222" height="34"  rx="3" />
              <rect x="496" width="40" y="124" height="132" rx="3" />
              <rect x="572" width="40" y="186" height="70"  rx="3" />
              <rect x="648" width="40" y="88"  height="168" rx="3" />
              <rect x="724" width="40" y="214" height="42"  rx="3" />
              <rect x="800" width="40" y="166" height="90"  rx="3" />
              <rect x="876" width="40" y="218" height="38"  rx="3" />
            </g>

            <!-- jagged line tracing the swing across bar tops (bar centers) -->
            <polyline class="aimp-chart__swing" fill="none" stroke="url(#aimpLine)" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round" vector-effect="non-scaling-stroke"
              points="60,142 136,196 212,108 288,208 364,158 440,222 516,124 592,186 668,88 744,214 820,166 896,218" />
          </svg>

          <!-- month labels in normal flow so they aren't distorted by the stretched SVG -->
          <div class="aimp-chart__months" aria-hidden="true">
            <span>J</span><span>F</span><span>M</span><span>A</span><span>M</span><span>J</span>
            <span>J</span><span>A</span><span>S</span><span>O</span><span>N</span><span>D</span>
          </div>

          <div class="aimp-chart__legend">
            <span class="aimp-chart__key aimp-chart__key--bar">Closings</span>
            <span class="aimp-chart__key aimp-chart__key--goal">Target</span>
          </div>
          </figure>
        </div>
      </div>
    </section>

    <!-- ──────────────────── WHAT YOU'LL LEARN INSIDE ──────────────────── -->
    <section class="aimp-section aimp-section--systems" aria-labelledby="aimp-systems-heading">
      <div class="container">
        <div class="aimp-systems__card" data-reveal="up">
        <header class="aimp-secthead aimp-systems__head">
          <h2 id="aimp-systems-heading" class="aimp-secthead__title">
            Learn How to Become an <span class="aimp-grad">AI-Empowered Originator</span>
          </h2>
        </header>

        <div class="aimp-systems__grid">
        <div class="aimp-systems__main">
        <ol class="aimp-timeline" data-reveal="up" role="list" aria-label="What you'll learn inside the guide">
          <!-- progress rail: a track plus a fill that animates on reveal -->
          <span class="aimp-timeline__rail" aria-hidden="true">
            <span class="aimp-timeline__fill"></span>
          </span>

          <li class="aimp-tl">
            <span class="aimp-tl__node" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M9 11l3 3 8-8" /><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" /></svg>
            </span>
            <div class="aimp-tl__card">
              <h3 class="aimp-tl__title">The AI Maturity Ladder</h3>
              <p class="aimp-tl__body">
                The 4 levels of AI adoption in a mortgage business — and an honest way to pinpoint
                exactly which rung you're standing on right now.
              </p>
            </div>
          </li>

          <li class="aimp-tl">
            <span class="aimp-tl__node" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M3 3v18h18" /><polyline points="7 14 11 10 15 13 21 6" /></svg>
            </span>
            <div class="aimp-tl__card">
              <h3 class="aimp-tl__title">The 5 Essential AI Systems</h3>
              <p class="aimp-tl__body">
                What top producers have actually put in place across intelligence, planning, sales,
                coaching, and decision-making — and why each one matters.
              </p>
            </div>
          </li>

          <li class="aimp-tl">
            <span class="aimp-tl__node" aria-hidden="true">
              <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>
            </span>
            <div class="aimp-tl__card">
              <h3 class="aimp-tl__title">Where Your Production Is Leaking</h3>
              <p class="aimp-tl__body">
                The hidden gaps in lead flow, conversion, and execution that quietly cost
                originators loans every single month — and how the best spot them.
              </p>
            </div>
          </li>

          <li class="aimp-tl">
            <span class="aimp-tl__node" aria-hidden="true">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9" /><polyline points="12 7 12 12 15 14" /></svg>
            </span>
            <div class="aimp-tl__card">
              <h3 class="aimp-tl__title">From Reactive Week to Systemized Week</h3>
              <p class="aimp-tl__body">
                How AI-empowered originators turn chaotic, fire-fighting days into a focused
                operating rhythm that produces consistent results.
              </p>
            </div>
          </li>

          <li class="aimp-tl">
            <span class="aimp-tl__node" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M3 12a9 9 0 1 0 18 0 9 9 0 0 0-18 0z" /><polyline points="8 13 11 16 16 9" /></svg>
            </span>
            <div class="aimp-tl__card">
              <h3 class="aimp-tl__title">Your Next Move</h3>
              <p class="aimp-tl__body">
                A simple way to decide which system to build first — so the shift feels
                achievable, not overwhelming, starting this week.
              </p>
            </div>
          </li>

        </ol>
          <div class="aimp-systems__cta">
            <a class="btn btn--gold btn--xl" href="#get-the-plan" data-scroll-to-form>Get the Masterplan</a>
          </div>
        </div><!-- /.aimp-systems__main -->

        <!-- Right column: the Masterplan tablet (same asset as the hero),
             scaled up to break out past the card's bottom/right edges for
             depth. Decorative — hidden on mobile. -->
        <div class="aimp-systems__media" data-reveal="up" aria-hidden="true">
          <div class="aimp-systems__media-inner">
            <div class="aimp-systems__glow"></div>
            <img class="aimp-systems__ipad" src="<?php echo TLA_BASE; ?>/assets/ai-masterplan-ipad.png"
              alt="" loading="lazy" width="1122" height="1402" />
          </div>
        </div>
        </div><!-- /.aimp-systems__grid -->
        </div><!-- /.aimp-systems__card -->
      </div>
    </section>

    <!-- ──────────────────── WHAT CHANGES FOR YOU ──────────────────── -->
    <section class="aimp-payoff" aria-labelledby="aimp-payoff-heading">
      <div class="container aimp-payoff__inner" data-reveal="up">
        <h2 id="aimp-payoff-heading" class="aimp-payoff__title">
          Once you see how AI-empowered originators operate,
          <span class="aimp-grad">everything changes</span>.
        </h2>

        <div class="aimp-payoff__grid">
          <!-- Left: the before → after comparison, with the CTA centered beneath -->
          <div class="aimp-payoff__col">
            <ul class="aimp-shift" data-reveal="up">
              <li>
                <span class="aimp-shift__from">Inconsistent, coin-flip months</span>
                <span class="aimp-shift__arrow" aria-hidden="true">→</span>
                <span class="aimp-shift__to">Production you can actually forecast</span>
              </li>
              <li>
                <span class="aimp-shift__from">Reacting to your day</span>
                <span class="aimp-shift__arrow" aria-hidden="true">→</span>
                <span class="aimp-shift__to">A focused weekly operating rhythm</span>
              </li>
              <li>
                <span class="aimp-shift__from">Working more hours for less</span>
                <span class="aimp-shift__arrow" aria-hidden="true">→</span>
                <span class="aimp-shift__to">Twice the loans in half the time</span>
              </li>
              <li>
                <span class="aimp-shift__from">Falling behind quietly</span>
                <span class="aimp-shift__arrow" aria-hidden="true">→</span>
                <span class="aimp-shift__to">Leading the shift in your market</span>
              </li>
            </ul>

            <div class="aimp-payoff__cta">
              <a class="btn btn--gold btn--xl" href="#get-the-plan" data-scroll-to-form>Get the Masterplan</a>
            </div>
          </div>

          <!-- Right: loan officer on the phone, smiling -->
          <div class="aimp-payoff__media" data-reveal="up" aria-hidden="true">
            <div class="aimp-payoff__glow"></div>
            <img class="aimp-payoff__img" src="<?php echo TLA_BASE; ?>/assets/loan-officer-smiling-phone.png"
              alt="" loading="lazy" />
          </div>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <!-- LeadConnector form embed runtime (resizes the iframe form) -->
  <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
  <!-- Open the lead-capture form in a modal dialog -->
  <script>
    (function () {
      var modal = document.getElementById('get-the-plan');
      if (!modal) return;

      function openModal(e) {
        if (e) e.preventDefault();
        if (typeof modal.showModal === 'function') {
          modal.showModal();
        } else {
          modal.setAttribute('open', '');
        }
      }
      function closeModal() {
        if (typeof modal.close === 'function') {
          modal.close();
        } else {
          modal.removeAttribute('open');
        }
      }

      document.querySelectorAll('[data-scroll-to-form]').forEach(function (el) {
        el.addEventListener('click', openModal);
      });
      document.querySelectorAll('[data-close-form]').forEach(function (el) {
        el.addEventListener('click', closeModal);
      });
      // Click on the backdrop (the dialog element itself, outside the card) closes.
      modal.addEventListener('click', function (e) {
        if (e.target === modal) closeModal();
      });
    })();
  </script>
