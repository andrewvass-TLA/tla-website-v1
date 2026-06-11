<?php
/**
 * Body partial for /consultation/ (TLA Full HTML template).
 * Generated from public/consultation.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Book a Free Consultation — The Loan Atlas';
$tla_description = 'A free 60-minute business assessment that shows you exactly where your next level of production is hiding — and how to get to it.';
$tla_active      = '';
?>
  <style>
    /* ── Hero ── */
    .hero-v2 {
      position: relative;
      overflow: hidden;
      /* Full-bleed background image with navy gradient overlay (matches faculty/what's-inside) */
      background:
        linear-gradient(to right,
          rgba(2, 28, 54, 0.98) 0%,
          rgba(2, 28, 54, 0.94) 38%,
          rgba(2, 28, 54, 0.7) 62%,
          rgba(2, 28, 54, 0.45) 100%),
        url('<?php echo TLA_BASE; ?>/assets/consultation-header.png') right center / cover no-repeat,
        /* fallback navy gradient if the image fails to load */
        linear-gradient(160deg, #021c36 0%, #0a1628 60%, #131b2e 100%);
      padding-block: clamp(80px, 8vw, 120px);
    }

    /* soft brass glow accent, top-right */
    .hero-v2::before {
      content: '';
      position: absolute;
      top: -80px;
      right: 8%;
      width: 540px;
      height: 540px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.11), transparent);
      filter: blur(70px);
      pointer-events: none;
      z-index: 0;
    }

    .hero-booking {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-xl);
      align-items: center;
    }

    @media (max-width: 900px) {
      .hero-booking {
        grid-template-columns: 1fr;
        gap: var(--space-lg);
      }

      /* drop the overlay to a flat navy stack on small screens for legibility */
      .hero-v2 {
        background:
          linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      }
    }

    .hero-v2__intro {
      max-width: 38rem;
    }

    .hero-v2__intro .t-display {
      color: #fff;
      font-size: clamp(2.25rem, 1.4rem + 3.2vw, 3.75rem);
      font-weight: 800;
      margin-top: var(--space-sm);
      margin-bottom: var(--space-md);
    }

    .hero-v2__accent {
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-v2__intro .t-body-lg {
      color: rgba(255, 255, 255, 0.72);
      max-width: 36rem;
      font-size: clamp(1rem, 0.875rem + 0.4vw, 1.1875rem);
      line-height: 1.6;
    }

    .hero-v2__trust {
      margin-top: var(--space-md);
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: var(--font-body);
      font-size: 0.875rem;
      color: rgba(255, 255, 255, 0.5);
    }

    .hero-v2__trust svg {
      color: var(--brass-bright);
      flex-shrink: 0;
    }

    /* keep the calendar card from stretching too wide in its grid column */
    .hero-booking .booking-card {
      margin-inline: 0;
    }

    /* ── Booking card ── */
    .booking-card {
      background: var(--surface-container-lowest);
      border-radius: var(--radius-3xl);
      box-shadow: var(--shadow-xl);
      overflow: hidden;
      max-width: 56rem;
      margin-inline: auto;
    }

    .booking-card__header {
      padding: var(--space-md) var(--space-md) var(--space-sm);
      border-bottom: 1px solid var(--outline-variant);
    }

    .booking-card__iframe {
      display: block;
      width: 100%;
      min-height: 620px;
      border: none;
      overflow: hidden;
    }

    /* ── Process steps ── */
    .process-section {
      background: var(--surface-container-lowest);
      border-block: 1px solid var(--outline-variant);
    }

    .process-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-xl);
      align-items: center;
    }

    @media (max-width: 760px) {
      .process-grid {
        grid-template-columns: 1fr;
      }
    }

    .process-steps {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: var(--space-lg);
    }

    .process-step {
      display: flex;
      gap: var(--space-md);
      align-items: flex-start;
    }

    .process-step__num {
      flex-shrink: 0;
      width: 48px;
      height: 48px;
      border-radius: var(--radius-full);
      display: grid;
      place-items: center;
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.125rem;
      color: var(--primary);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      box-shadow: 0 6px 18px rgba(201, 150, 28, 0.28);
    }

    .process-step__content h3 {
      font-family: var(--font-display);
      font-size: 1.125rem;
      font-weight: 600;
      color: var(--on-surface);
      margin: 0 0 6px;
      letter-spacing: -0.01em;
    }

    .process-step__content p {
      font-family: var(--font-body);
      font-size: 0.9375rem;
      line-height: 1.6;
      color: var(--on-surface-variant);
      margin: 0;
    }

    .process-grid__image img {
      width: 100%;
      display: block;
    }

    /* ── "Is this call for you" — two-column: who-card + stacked testimonials ── */
    .who-split {
      display: grid;
      grid-template-columns: minmax(0, 1.15fr) minmax(0, 1fr);
      gap: clamp(var(--space-lg), 4vw, var(--space-xl));
      align-items: start;
    }

    @media (max-width: 900px) {
      .who-split {
        grid-template-columns: 1fr;
      }
    }

    /* the who-card is auto-centered + width-capped by default; let it fill its column */
    .who-split .who-card {
      max-width: none;
      margin-inline: 0;
    }

    /* testimonials column — homepage quote-card style, stacked vertically */
    .who-testimonials {
      display: flex;
      flex-direction: column;
      gap: var(--space-lg);
    }

    .who-testimonials .quote-card {
      flex: unset;
    }

    /* This page has 4 takeaway cards (the shared dark grid is fixed at 3-col for
       the 3-card enterprise page). Lay all four out in a single row on desktop,
       collapsing to 2-up then 1-up on smaller screens. */
    .takeaways--dark .takeaways__grid {
      grid-template-columns: repeat(4, 1fr);
    }

    @media (max-width: 960px) {
      .takeaways--dark .takeaways__grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 560px) {
      .takeaways--dark .takeaways__grid {
        grid-template-columns: 1fr;
      }
    }

    /* ── FAQ: two-column (sticky aside + accordion) ── */
    .faq-split {
      display: grid;
      grid-template-columns: minmax(0, 22rem) minmax(0, 1fr);
      gap: clamp(var(--space-lg), 5vw, var(--space-xl));
      align-items: start;
    }

    .faq-split__aside {
      position: sticky;
      top: calc(var(--header-h) + var(--space-lg));
    }

    .faq-split__list {
      flex: 1;
    }

    @media (max-width: 860px) {
      .faq-split {
        grid-template-columns: 1fr;
        gap: var(--space-lg);
      }

      .faq-split__aside {
        position: static;
        top: auto;
      }
    }
  </style>


  <?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main">

    <!-- ── Hero ── -->
    <section class="hero-v2" id="book">
      <div class="container">
        <div class="hero-booking">

          <!-- Intro -->
          <div class="hero-v2__intro">
            <span class="eyebrow" data-hero-step="1"><span class="eyebrow__text">Free Business Assessment</span></span>
            <h1 class="t-display" data-hero-step="2">
              See Where Your Next <span class="hero-v2__accent">10 Loans</span> Are Hiding
            </h1>
            <p class="t-body-lg" data-hero-step="3">This free 1-hour business assessment will show you exactly where
              your next level of production is hiding — and how to get to it.</p>
            <p class="hero-v2__trust" data-hero-step="4">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              No cost · No obligation
            </p>
          </div>

          <!-- Booking widget -->
          <div data-hero-step="5">
            <div class="booking-card">
              <div class="booking-card__header">
                <h2 class="t-headline-md" style="margin-bottom: 4px;">Book Your Free Session</h2>
                <p class="t-body t-muted" style="margin: 0;">60 minutes · Video call · No cost, no obligation</p>
              </div>
              <iframe src="https://api.leadconnectorhq.com/widget/booking/sNSShvRjEhTdDcR9MTmx"
                class="booking-card__iframe" scrolling="no" id="BOsyPdKSxuiFky6PDbge_1773848314598"></iframe>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── Trust bar ── -->
    <section class="trust">
      <div class="container">
        <p class="trust__label" data-reveal="fade">Trusted by top producing loan officers and teams across the country.
        </p>
      </div>
      <div class="trust__marquee" aria-hidden="false">
        <div class="trust__track">
          <ul class="trust__group">
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/UWM-logo.png" alt="UWM"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/CMG-logo.svg" alt="CMG Financial"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/cross-country-logo.webp" alt="CrossCountry Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/rate-logo.png" alt="Guaranteed Rate"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/fairway-logo.png" alt="Fairway Independent Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/loan-depot-logo.png" alt="loanDepot"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/better-logo.png" alt="Better"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/american-pacific-logo.webp" alt="American Pacific Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/acm-logo.webp" alt="ACM"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/lower-mortgage-logo.svg" alt="Lower"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/swbc-logo.png" alt="SWBC Mortgage"></li>
          </ul>
          <ul class="trust__group" aria-hidden="true">
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/UWM-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/CMG-logo.svg" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/cross-country-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/rate-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/fairway-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/loan-depot-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/better-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/american-pacific-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/acm-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/lower-mortgage-logo.svg" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/swbc-logo.png" alt=""></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ── What to expect ── -->
    <section class="section process-section">
      <div class="container">
        <header data-reveal="up"
          style="max-width: 40rem; margin-inline: auto; margin-bottom: var(--space-xl); text-align: center;">
          <h2 class="section-heading">What To Expect</h2>
        </header>
        <div class="process-grid">
          <ol class="process-steps" data-reveal-stagger="120">
            <li class="process-step">
              <span class="process-step__num">1</span>
              <div class="process-step__content">
                <h3>Book a time</h3>
                <p>Pick a 60-minute slot that works for your schedule. Select a day and time from the calendar above.
                </p>
              </div>
            </li>
            <li class="process-step">
              <span class="process-step__num">2</span>
              <div class="process-step__content">
                <h3>Share your context</h3>
                <p>Tell us where you are in your business and where you want to go. No prep work required — just show
                  up.</p>
              </div>
            </li>
            <li class="process-step">
              <span class="process-step__num">3</span>
              <div class="process-step__content">
                <h3>Get your assessment</h3>
                <p>We map your leverage, your gaps, and your hidden opportunities. Most originators have never had
                  anyone look at their business this way.</p>
              </div>
            </li>
            <li class="process-step">
              <span class="process-step__num">4</span>
              <div class="process-step__content">
                <h3>Walk away with a plan</h3>
                <p>A prioritized growth plan built for your numbers, your market, your situation. Keep it whether you
                  join The Loan Atlas or not.</p>
              </div>
            </li>
          </ol>
          <div class="process-grid__image" data-reveal="right">
            <img src="<?php echo TLA_BASE; ?>/assets/ai-business-intelligence-2.png" alt="The Loan Atlas AI business intelligence" />
          </div>
        </div>
      </div>
    </section>

    <!-- ── What you'll leave this call with ── -->
    <section class="takeaways takeaways--dark">
      <div class="takeaways__intro" data-reveal="up">
        <h2 class="takeaways__heading">What you'll leave <span class="takeaways__heading-accent">this call</span> with
        </h2>
        <p class="takeaways__lede">Most originators are working harder than ever and still can't figure out why their
          production is uneven. It's rarely an effort problem. It's almost always a system problem — and you can't fix
          what you can't see.</p>
      </div>

      <div class="takeaways__features" data-reveal-stagger="100">
        <div class="takeaways__grid">
          <article class="takeaways__cell">
            <span class="takeaways__cell-num" aria-hidden="true">01</span>
            <span class="takeaways__cell-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="18" cy="18" r="3"></circle>
                <circle cx="6" cy="6" r="3"></circle>
                <path d="M6 21V9a9 9 0 0 0 9 9"></path>
              </svg>
            </span>
            <h3 class="takeaways__cell-title">Business Assessment</h3>
            <p class="takeaways__cell-copy">We'll look at your production honestly: what's working, what's inconsistent,
              where your time is going, where the bottlenecks are. Most originators have never had anyone look at their
              business this way.</p>
          </article>
          <article class="takeaways__cell">
            <span class="takeaways__cell-num" aria-hidden="true">02</span>
            <span class="takeaways__cell-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </span>
            <h3 class="takeaways__cell-title">Leverage &amp; Opportunity Analysis</h3>
            <p class="takeaways__cell-copy">We'll find where you're leaving money on the table. A referral source you've
              been underusing. A database segment you've stopped working. A conversation you've been losing.</p>
          </article>
          <article class="takeaways__cell">
            <span class="takeaways__cell-num" aria-hidden="true">03</span>
            <span class="takeaways__cell-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <polyline points="16 7 21 12 16 17"></polyline>
              </svg>
            </span>
            <h3 class="takeaways__cell-title">Growth Plan</h3>
            <p class="takeaways__cell-copy">Priorities. Sequencing. What to do first, what to do next, what to stop
              doing entirely. Built around your production, your market, your situation.</p>
          </article>
          <article class="takeaways__cell">
            <span class="takeaways__cell-num" aria-hidden="true">04</span>
            <span class="takeaways__cell-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 11l3 3L22 4"></path>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
              </svg>
            </span>
            <h3 class="takeaways__cell-title">Tour of The Loan Atlas</h3>
            <p class="takeaways__cell-copy">Once we know where your leverage is, we'll show you exactly how the platform
              maps to it — which AI systems solve which problems, which frameworks close which gaps.</p>
          </article>
        </div>
      </div>

      <div class="takeaways__marquees" aria-hidden="true">
        <div class="marquee">
          <div class="marquee__track">
            <span class="qpill">How do I generate consistent referrals?</span>
            <span class="qpill">Why am I stuck at the same production level?</span>
            <span class="qpill">How do I scale without burning out?</span>
            <span class="qpill">What does a top-10% LO do differently?</span>
            <span class="qpill">How do I build a personal brand?</span>
            <span class="qpill">Should I hire an assistant or an LOA?</span>
          </div>
          <div class="marquee__track" aria-hidden="true">
            <span class="qpill">How do I generate consistent referrals?</span>
            <span class="qpill">Why am I stuck at the same production level?</span>
            <span class="qpill">How do I scale without burning out?</span>
            <span class="qpill">What does a top-10% LO do differently?</span>
            <span class="qpill">How do I build a personal brand?</span>
            <span class="qpill">Should I hire an assistant or an LOA?</span>
          </div>
        </div>

        <div class="marquee marquee--reverse" style="--duration: 50s;">
          <div class="marquee__track">
            <span class="qpill">How do I price my services to win the deal?</span>
            <span class="qpill">What CRM is actually worth using?</span>
            <span class="qpill">How do I retain past clients for life?</span>
            <span class="qpill">What's the right comp split for me?</span>
            <span class="qpill">How do I structure my week?</span>
            <span class="qpill">Why are my conversion rates dropping?</span>
          </div>
          <div class="marquee__track" aria-hidden="true">
            <span class="qpill">How do I price my services to win the deal?</span>
            <span class="qpill">What CRM is actually worth using?</span>
            <span class="qpill">How do I retain past clients for life?</span>
            <span class="qpill">What's the right comp split for me?</span>
            <span class="qpill">How do I structure my week?</span>
            <span class="qpill">Why are my conversion rates dropping?</span>
          </div>
        </div>

        <div class="marquee" style="--duration: 42s;">
          <div class="marquee__track">
            <span class="qpill">How do I know if my marketing is working?</span>
            <span class="qpill">How do I get past plateaus?</span>
            <span class="qpill">Who is my ideal client?</span>
            <span class="qpill">How do I track my real numbers?</span>
            <span class="qpill">How do I lead a team?</span>
            <span class="qpill">What systems should I build first?</span>
          </div>
          <div class="marquee__track" aria-hidden="true">
            <span class="qpill">How do I know if my marketing is working?</span>
            <span class="qpill">How do I get past plateaus?</span>
            <span class="qpill">Who is my ideal client?</span>
            <span class="qpill">How do I track my real numbers?</span>
            <span class="qpill">How do I lead a team?</span>
            <span class="qpill">What systems should I build first?</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Who should book + testimonials (two-column) ── -->
    <section class="section"
      style="background: var(--surface-container-lowest); border-top: 1px solid var(--outline-variant);">
      <div class="container">
        <div class="who-split">

          <!-- Left: who-card checklist -->
          <div class="who-card" data-reveal="up">
            <div class="who-card__header">
              <span class="who-card__eyebrow">Is this call for you?</span>
              <h2 class="who-card__title">If any of this sounds familiar, this call is for you.</h2>
            </div>
            <ul class="who-card__list" data-reveal-stagger="80">
              <li class="who-card__item">
                <svg class="who-card__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Your production is inconsistent and you can't pinpoint why
              </li>
              <li class="who-card__item">
                <svg class="who-card__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                You have a database you've been neglecting and you know it's costing you
              </li>
              <li class="who-card__item">
                <svg class="who-card__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                You're strong at originating loans but weak at running the business
              </li>
              <li class="who-card__item">
                <svg class="who-card__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                You've tried programs before and ended up with more content, not more results
              </li>
              <li class="who-card__item">
                <svg class="who-card__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                You know you're leaving opportunity on the table but can't see where
              </li>
            </ul>
          </div>

          <!-- Right: testimonials stacked vertically (homepage quote-card style) -->
          <div class="who-testimonials" data-reveal-stagger="120">
            <figure class="quote-card">
              <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
              <blockquote class="quote-card__quote">The first night I had The Loan Atlas, I actually couldn't sleep. I
                learned so many things in a short amount of time that I wish I knew years ago.</blockquote>
              <figcaption class="quote-card__attr">
                <div class="quote-card__name">Loan Atlas Member</div>
              </figcaption>
            </figure>
            <figure class="quote-card">
              <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
              <blockquote class="quote-card__quote">I wish I would have known about this 5 years ago. I've been looking
                for this level of support my entire Loan Officer career of 15 years. I have needed this so desperately.
              </blockquote>
              <figcaption class="quote-card__attr">
                <div class="quote-card__name">Jill Coss</div>
                <div class="quote-card__org">Loan Atlas Member</div>
              </figcaption>
            </figure>
          </div>

        </div>
      </div>
    </section>

    <!-- ── FAQ ── -->
    <section class="section faq-section"
      style="background: var(--surface-container-low); border-block: 1px solid var(--outline-variant);">
      <div class="container">
        <div class="faq-split">
          <header class="faq-split__aside" data-reveal="left">
            <h2 class="section-heading faq-split__title">Common Questions</h2>
          </header>

          <div class="faq faq-split__list" data-reveal-stagger="80">
            <details class="faq-item">
              <summary>Is this really free?</summary>
              <div class="faq-item__body">Yes. We offer these because when an originator sees firsthand how The Loan
                Atlas maps to their business, a meaningful percentage decide to join. The rest walk away with a plan
                they wouldn't have had otherwise, and we're good with that trade.</div>
            </details>
            <details class="faq-item">
              <summary>What if I'm not ready to join right now?</summary>
              <div class="faq-item__body">Book it anyway. The plan you'll leave with is valuable whether you join
                tomorrow, next quarter, or never. And you'll know exactly what The Loan Atlas is the next time the
                question comes up — which beats guessing from the outside.</div>
            </details>
            <details class="faq-item">
              <summary>How do I prepare?</summary>
              <div class="faq-item__body">Just show up. Bring a rough sense of your last 12 months, your database size,
                and what's been frustrating you. No homework, no forms to fill out in advance.</div>
            </details>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Final CTA ── -->
    <section class="close-section close-section--homepage" aria-labelledby="final-cta-heading">
      <div class="container close-section__grid">
        <div class="close-section__copy" data-reveal="up">
          <span class="close-section__eyebrow">Start Your Transformation</span>
          <h2 id="final-cta-heading" class="close-section__title">
            Finally See Your Mortgage Business <em>Clearly</em>
          </h2>
          <p class="close-section__sub">
            Walk away with a clear read on what's actually holding your production back and what you can do to fix it.
          </p>
        </div>

        <div class="close-section__actions" data-reveal="up" role="group" aria-label="Get started">
          <a class="close-section-action close-section-action--primary" href="#book" data-scroll-to-calendar>
            <span>
              <span class="close-section-action__label">Build Your Growth Plan</span>
              <span class="close-section-action__hint">No cost · No obligation · Pick a time that works</span>
            </span>
            <span class="close-section-action__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="13 6 19 12 13 18" />
              </svg>
            </span>
          </a>
          <a class="close-section-action close-section-action--secondary" href="/join/">
            <span>
              <span class="close-section-action__label">Join The Loan Atlas</span>
              <span class="close-section-action__hint">See membership plans and start today</span>
            </span>
            <span class="close-section-action__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="13 6 19 12 13 18" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section>

  </main>

  <?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script>
    document.querySelectorAll('[data-scroll-to-calendar]').forEach(el => {
      el.addEventListener('click', e => {
        e.preventDefault();
        document.getElementById('book').scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    });
  </script>
  <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
