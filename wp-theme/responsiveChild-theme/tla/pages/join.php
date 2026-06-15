<?php
/**
 * Body partial for /join/ (TLA Full HTML template).
 * Generated from public/pricing.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Pricing — The Loan Atlas';
$tla_description = 'One membership. Every AI system, all live coaching, and the full curriculum — for individual loan officers ready to scale.';
$tla_active      = 'join';
?>
  <style>
    /* ── Pricing page ─────────────────────────────────────────────── */

    /* Dark hero — matches corporate.html / whats-inside.html / faculty.html */
    .pr-hero {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-top: calc(var(--header-h) + clamp(56px, 8vw, 96px));
      padding-bottom: clamp(72px, 9vw, 120px);
      position: relative;
      overflow: hidden;
    }
    .pr-hero::before {
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
    .pr-hero::after {
      content: '';
      position: absolute;
      bottom: -120px;
      left: 4%;
      width: 440px;
      height: 440px;
      background: radial-gradient(closest-side, rgba(178, 200, 233, 0.08), transparent);
      filter: blur(70px);
      pointer-events: none;
    }
    .pr-hero__content {
      position: relative;
      z-index: 1;
      text-align: center;
      max-width: 52rem;
      margin: 0 auto;
    }
    .pr-hero .eyebrow {
      justify-content: center;
    }
    .pr-hero__title {
      font-family: var(--font-display);
      font-size: clamp(2.25rem, 1.5rem + 3vw, 3.75rem);
      line-height: 1.05;
      letter-spacing: -0.03em;
      font-weight: 800;
      color: #ffffff;
      margin: 0 auto var(--space-md);
      max-width: 26ch;
    }
    .pr-hero__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .pr-hero__subtitle {
      font-size: clamp(1rem, 0.9rem + 0.4vw, 1.1875rem);
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.68);
      max-width: 40rem;
      margin: 0 auto;
    }

    /* Pricing cards sit below the hero with breathing room */
    .pr-cards-section {
      padding-top: clamp(56px, 7vw, 96px);
      position: relative;
      z-index: 2;
    }

    /* ── Standout middle card (Annual) ──────────────────────────────
       The Annual card is the recommended path, so we visually
       elevate it: wider column, larger padding/price, brass-glow
       border, centered podium badge. Side cards are subtly scaled
       down so the middle one clearly dominates. */
    @media (min-width: 880px) {
      .pr-cards-section .pricing-grid {
        grid-template-columns: 1fr 1.35fr 1fr;
        gap: var(--space-lg);
        align-items: center;
      }
    }

    /* Side cards: slightly muted + smaller so the middle dominates */
    @media (min-width: 880px) {
      .pr-cards-section .plan:not(.plan--featured) {
        transform: scale(0.95);
        opacity: 0.96;
        transition: transform 220ms ease, opacity 220ms ease,
                    box-shadow 200ms ease, border-color 200ms ease;
      }
      .pr-cards-section .plan:not(.plan--featured):hover {
        transform: scale(0.97);
        opacity: 1;
      }
      .pr-cards-section .plan:not(.plan--featured) .plan__price {
        font-size: 2.5rem;
      }
    }

    /* Featured (Annual) card — the standout */
    .pr-cards-section .plan--featured {
      padding: clamp(32px, 4vw, 56px) clamp(24px, 3vw, 44px);
      border-radius: var(--radius-3xl);
      gap: var(--space-lg);
      border: 1px solid rgba(234, 194, 90, 0.55);
      box-shadow:
        0 40px 90px rgba(2, 28, 54, 0.45),
        0 0 60px rgba(234, 194, 90, 0.18),
        inset 0 0 0 1px rgba(234, 194, 90, 0.22);
      overflow: visible;
    }

    /* Gradient brass edge — subtle premium frame */
    .pr-cards-section .plan--featured::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: inherit;
      padding: 1px;
      background: linear-gradient(135deg,
        rgba(234, 194, 90, 0.75) 0%,
        rgba(255, 213, 108, 0.2) 45%,
        rgba(201, 150, 28, 0.6) 100%);
      -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
              mask-composite: exclude;
      pointer-events: none;
    }

    @media (min-width: 880px) {
      .pr-cards-section .plan--featured {
        transform: translateY(-28px) scale(1.05);
      }
      .pr-cards-section .plan--featured:hover {
        transform: translateY(-32px) scale(1.06);
      }
    }

    /* Bigger name + price on the featured card */
    .pr-cards-section .plan--featured .plan__name {
      font-size: 1.5rem;
    }
    .pr-cards-section .plan--featured .plan__price {
      font-size: clamp(3rem, 2rem + 3vw, 4.25rem);
    }

    /* Recenter the badge as a podium pill */
    .pr-cards-section .plan--featured .plan__badge {
      top: 0;
      right: auto;
      left: 50%;
      transform: translate(-50%, -50%);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      color: #021c36;
      font-size: 0.75rem;
      padding: 8px 18px;
      border-radius: var(--radius-full);
      letter-spacing: 0.14em;
      box-shadow: 0 10px 28px rgba(234, 194, 90, 0.45);
      border-bottom-left-radius: var(--radius-full);
      white-space: nowrap;
    }

    /* Annual "Save $698" pill */
    .pr-save {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-top: var(--space-xs);
      background: rgba(234, 194, 90, 0.18);
      color: var(--brass-bright);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      padding: 4px 12px;
      border-radius: var(--radius-full);
      border: 1px solid rgba(234, 194, 90, 0.3);
    }
    .plan__price--custom {
      font-size: 1.75rem;
      letter-spacing: -0.01em;
    }

    /* ── ROI panel under pricing cards ──────────────────────────────
       Dark gradient hero stat + side-by-side math breakdown.
       Stacks vertically on small screens. */
    .pr-roi {
      margin-top: clamp(64px, 8vw, 112px);
      max-width: 64rem;
      margin-inline: auto;
      background: linear-gradient(135deg, #0a1628 0%, #021c36 55%, #0a223d 100%);
      border-radius: var(--radius-3xl);
      border: 1px solid rgba(234, 194, 90, 0.28);
      box-shadow:
        0 30px 70px rgba(2, 28, 54, 0.35),
        inset 0 0 0 1px rgba(234, 194, 90, 0.08);
      padding: clamp(32px, 4vw, 56px) clamp(24px, 4vw, 56px);
      position: relative;
      overflow: hidden;
      display: grid;
      gap: clamp(28px, 4vw, 48px);
      grid-template-columns: 1fr;
      align-items: center;
      text-align: center;
    }
    .pr-roi::before {
      content: '';
      position: absolute;
      top: -120px;
      right: -120px;
      width: 360px;
      height: 360px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.18), transparent);
      filter: blur(50px);
      pointer-events: none;
    }
    @media (min-width: 760px) {
      .pr-roi {
        grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
        text-align: left;
      }
    }

    /* Left: hero stat */
    .pr-roi__hero {
      position: relative;
      z-index: 1;
    }
    .pr-roi__label {
      display: inline-block;
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--brass-bright);
      margin-bottom: var(--space-sm);
    }
    .pr-roi__stat {
      display: flex;
      align-items: flex-start;
      justify-content: center;
      gap: 4px;
      font-family: var(--font-display);
      font-weight: 800;
      line-height: 0.95;
      letter-spacing: -0.04em;
      margin: 0 0 var(--space-sm);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    @media (min-width: 760px) {
      .pr-roi__stat { justify-content: flex-start; }
    }
    .pr-roi__currency {
      font-size: clamp(2rem, 1rem + 3vw, 3rem);
      padding-top: clamp(8px, 1.5vw, 16px);
      font-weight: 700;
    }
    .pr-roi__number {
      font-size: clamp(4.5rem, 2rem + 8vw, 7.5rem);
    }
    .pr-roi__unit {
      font-size: clamp(2.5rem, 1rem + 4vw, 4rem);
      padding-top: clamp(4px, 1vw, 8px);
      font-weight: 700;
    }
    .pr-roi__plus {
      display: inline-block;
      font-size: clamp(1.25rem, 0.75rem + 1.5vw, 1.875rem);
      vertical-align: top;
      padding-top: clamp(8px, 1.5vw, 18px);
      margin-left: 4px;
    }
    .pr-roi__caption {
      font-size: 0.9375rem;
      color: rgba(255, 255, 255, 0.7);
      margin: 0;
      line-height: 1.5;
      max-width: 22ch;
      margin-inline: auto;
    }
    @media (min-width: 760px) {
      .pr-roi__caption { margin-inline: 0; }
    }

    /* Right: math breakdown */
    .pr-roi__math {
      position: relative;
      z-index: 1;
      padding-left: 0;
      border-left: none;
    }
    @media (min-width: 760px) {
      .pr-roi__math {
        padding-left: clamp(28px, 3vw, 48px);
        border-left: 1px solid rgba(234, 194, 90, 0.2);
      }
    }
    .pr-roi__math-headline {
      font-family: var(--font-display);
      font-size: clamp(1.125rem, 0.9rem + 0.6vw, 1.375rem);
      font-weight: 700;
      color: #ffffff;
      margin: 0 0 var(--space-sm);
      line-height: 1.3;
    }
    .pr-roi__math-headline strong {
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .pr-roi__math-body {
      font-size: 0.9375rem;
      color: rgba(255, 255, 255, 0.72);
      margin: 0;
      line-height: 1.7;
    }
    .pr-roi__math-body strong {
      color: #ffffff;
      font-weight: 600;
    }

    /* Section heading block (centered) */
    .pr-section-head {
      text-align: center;
      max-width: 52rem;
      margin-inline: auto;
      margin-bottom: var(--space-xl);
    }
    .pr-section-head .eyebrow {
      justify-content: center;
    }
    .pr-section-head h2 {
      margin-top: var(--space-sm);
      margin-bottom: 0;
    }

    /* Testimonials grid — uses homepage .quote-card style */
    .pr-testimonials {
      display: grid;
      gap: var(--space-lg);
      grid-template-columns: 1fr;
    }
    @media (min-width: 720px) {
      .pr-testimonials { grid-template-columns: repeat(3, 1fr); }
    }
    /* Override marquee-specific flex sizing so quote-card flows in a grid */
    .pr-testimonials .quote-card {
      flex: initial;
      width: auto;
    }

    /* What's Included grid */
    .pr-included {
      display: grid;
      gap: var(--space-md);
      grid-template-columns: 1fr;
    }
    @media (min-width: 720px) {
      .pr-included { grid-template-columns: 1fr 1fr; }
    }
    .pr-feature {
      display: flex;
      gap: var(--space-md);
      align-items: flex-start;
      padding: var(--space-md);
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-2xl);
      transition: transform 200ms ease, box-shadow 200ms ease, border-color 200ms ease;
    }
    .pr-feature:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow);
      border-color: rgba(2, 28, 54, 0.18);
    }
    .pr-feature__icon {
      flex-shrink: 0;
      width: 44px;
      height: 44px;
      background: rgba(201, 150, 28, 0.1);
      border-radius: var(--radius-xl);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--brass);
    }
    .pr-feature__icon svg { width: 20px; height: 20px; }
    .pr-feature__title {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1rem;
      color: var(--on-surface);
      margin: 0 0 6px;
    }
    .pr-feature__desc {
      font-size: 0.9375rem;
      color: var(--on-surface-variant);
      margin: 0;
      line-height: 1.6;
    }

  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main">

    <!-- ============================================================
         HERO
         ============================================================ -->
    <section class="pr-hero" aria-labelledby="pr-hero-heading">
      <div class="container">
        <div class="pr-hero__content">
          <h1 id="pr-hero-heading" class="pr-hero__title" data-hero-step="2">
            <em>One Membership.</em><br>
            Everything You Need to Create, Operate, and Scale a Profitable Mortgage Business.
          </h1>
        </div>
      </div>
    </section>

    <!-- ============================================================
         PRICING CARDS
         ============================================================ -->
    <section class="section pr-cards-section">
      <div class="container">
        <div class="pricing-grid" data-reveal-stagger="140">

          <!-- Monthly -->
          <article class="plan">
            <div>
              <div class="plan__name">Monthly</div>
              <p class="plan__desc">12-month commitment · Billed monthly</p>
            </div>
            <div class="plan__price">$349<span class="plan__per">/mo</span></div>
            <a class="btn btn--ghost btn--block" href="https://members.theloanatlas.com/checkouts/premium-membership/">Start Your Monthly Membership</a>
            <ul class="checklist">
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                All 5 AI-powered business systems
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Weekly &amp; monthly live coaching
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                200+ training modules
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Full script, template &amp; playbook library
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Private member community
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                New tools added every month
              </li>
            </ul>
          </article>

          <!-- Annual — Featured -->
          <article class="plan plan--featured">
            <span class="plan__badge">Most Popular</span>
            <div>
              <div class="plan__name">Annual</div>
              <p class="plan__desc">12-month commitment · Two months completely free</p>
            </div>
            <div>
              <div class="plan__price">$3,490<span class="plan__per">/year</span></div>
              <div>
                <span class="pr-save">Save $698</span>
              </div>
            </div>
            <a class="btn btn--brass btn--block" href="https://members.theloanatlas.com/checkouts/premium-membership/">Go Annual &amp; Save</a>
            <ul class="checklist checklist--inverse">
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Everything in Monthly
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <strong>$698 in savings</strong>
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--brass-bright);"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <strong>Two months free</strong> compared to monthly
              </li>
            </ul>
          </article>

          <!-- Enterprise -->
          <article class="plan">
            <div>
              <div class="plan__name">Enterprise</div>
              <p class="plan__desc">For teams, branches, and organizations</p>
            </div>
            <div class="plan__price plan__price--custom">Custom Pricing</div>
            <a class="btn btn--ghost btn--block" href="/enterprise-consultation/">Get Your Custom Quote</a>
            <ul class="checklist">
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Unlimited seats
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Dedicated account manager
              </li>
              <li>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Custom curriculum &amp; onboarding
              </li>
            </ul>
          </article>

        </div>

        <!-- ROI statement -->
        <div class="pr-roi" data-reveal="up">
          <div class="pr-roi__hero">
            <span class="pr-roi__label">Loan Atlas Members Close</span>
            <p class="pr-roi__stat" aria-label="$8.2 million plus">
              <span class="pr-roi__currency">$</span><span class="pr-roi__number" data-countup="8.2">8.2</span><span class="pr-roi__unit">M</span><span class="pr-roi__plus" aria-hidden="true">+</span>
            </p>
            <p class="pr-roi__caption">More in annual production than the industry average</p>
          </div>
          <div class="pr-roi__math">
            <p class="pr-roi__math-headline">You don't need $8.2M more to make this work — you need <strong>one additional closed loan.</strong></p>
            <p class="pr-roi__math-body">On most loan amounts, the commission from a single closing covers your membership for the year. <strong>Everything after that is net gain.</strong></p>
          </div>
        </div>

      </div>
    </section>

    <!-- ============================================================
         PROOF — TESTIMONIALS
         ============================================================ -->
    <section class="section bg-surface-low">
      <div class="container">

        <div class="pr-section-head" data-reveal="up">
          <span class="eyebrow"><span class="eyebrow__text">What Members Say</span></span>
        </div>

        <div class="pr-testimonials" data-reveal-stagger="120">

          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">If you&rsquo;re considering joining The Loan Atlas, it&rsquo;s been the best investment I&rsquo;ve ever made &mdash; and you will make it back within your first month&rsquo;s production.</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Gian Ceretto</div>
              <div class="quote-card__org">Prosperity Home Mortgage</div>
            </figcaption>
          </figure>

          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">After 32 years in this industry, I will tell you it&rsquo;s worth every single penny.</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Sarajane Trier</div>
            </figcaption>
          </figure>

          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">Being able to sit in on Office Hours and live group coaching is worth the price of membership itself.</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Gabe Garza</div>
              <div class="quote-card__org">The Mortgage Brokers</div>
            </figcaption>
          </figure>

        </div>
      </div>
    </section>

    <!-- ============================================================
         WHAT'S INCLUDED
         ============================================================ -->
    <section class="section bg-white">
      <div class="container">

        <div class="pr-section-head" data-reveal="up">
          <span class="eyebrow"><span class="eyebrow__text">Everything in Your Membership</span></span>
          <h2 class="section-heading">What's Included</h2>
        </div>

        <div class="pr-included" data-reveal-stagger="80">

          <div class="pr-feature">
            <span class="pr-feature__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
            </span>
            <div>
              <p class="pr-feature__title">All 5 AI-powered business systems</p>
              <p class="pr-feature__desc">Business Intelligence, Business Planning, Sales &amp; Marketing Advisor, Performance Coach, Strategic Thought Partner.</p>
            </div>
          </div>

          <div class="pr-feature">
            <span class="pr-feature__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </span>
            <div>
              <p class="pr-feature__title">Live coaching every week and every month</p>
              <p class="pr-feature__desc">Weekly Office Hours, Monthly Masterclasses, Talk to Tim, and ongoing AI Labs &amp; Workshops.</p>
            </div>
          </div>

          <div class="pr-feature">
            <span class="pr-feature__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
            </span>
            <div>
              <p class="pr-feature__title">200+ training modules</p>
              <p class="pr-feature__desc">The full 8 Disciplines of Mortgage Origination Mastery, masterclasses, workshops, and podcast content.</p>
            </div>
          </div>

          <div class="pr-feature">
            <span class="pr-feature__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            </span>
            <div>
              <p class="pr-feature__title">Scripts, presentations, and templates</p>
              <p class="pr-feature__desc">Discovery calls, rate-shopper responses, objection handling, referral partner meetings, PPC presentations.</p>
            </div>
          </div>

          <div class="pr-feature">
            <span class="pr-feature__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </span>
            <div>
              <p class="pr-feature__title">The Loan Atlas community</p>
              <p class="pr-feature__desc">Active originators across the country, plus faculty inside the conversation.</p>
            </div>
          </div>

          <div class="pr-feature">
            <span class="pr-feature__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            </span>
            <div>
              <p class="pr-feature__title">New tools and content added every month</p>
              <p class="pr-feature__desc">At no additional cost.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ============================================================
         FAQ
         ============================================================ -->
    <section class="section bg-surface-low">
      <div class="container">

        <div style="max-width: 48rem; margin-inline: auto;">
          <div class="pr-section-head" data-reveal="up">
            <span class="eyebrow"><span class="eyebrow__text">Common Questions</span></span>
            <h2 class="section-heading">Frequently Asked Questions</h2>
          </div>

          <div class="faq" data-reveal-stagger="80">

            <details class="faq-item">
              <summary>What's the difference between monthly and annual?</summary>
              <div class="faq-item__body">Both plans are 12-month memberships with identical access — same AI systems, same coaching, same library, same community. The only difference is how you pay. Annual is paid upfront and saves you $698 (the equivalent of two months free). Monthly spreads the same annual commitment across 12 payments of $349.</div>
            </details>

            <details class="faq-item">
              <summary>Is there a contract or long-term commitment?</summary>
              <div class="faq-item__body">Yes — both plans are 12-month memberships. We built it that way on purpose. Real transformation in a mortgage business doesn't happen in 30 days. It happens over a full year of coaching, installation, and execution. A month-to-month subscription would let you bail before the work actually pays off, and that's not the outcome we want for members.</div>
            </details>

            <details class="faq-item">
              <summary>Can I switch from monthly to annual later?</summary>
              <div class="faq-item__body">Yes. Many members start with monthly billing and move to annual at renewal once they've seen the platform pay for itself.</div>
            </details>

          </div>
        </div>

      </div>
    </section>

    <!-- ============================================================
         FINAL CTA
         ============================================================ -->
    <section class="close-section close-section--homepage" aria-labelledby="final-cta-heading">
      <div class="container close-section__grid">
        <div class="close-section__copy" data-reveal="up">
          <span class="close-section__eyebrow">Start Your Transformation</span>
          <h2 id="final-cta-heading" class="close-section__title">
            Install the System <em>Top Producers Are Using</em>
          </h2>
          <p class="close-section__sub">
            Whichever path you pick, you're in from day one — every tool, every coach, every framework,
            every resource. <strong>The annual plan saves you $698.</strong>
          </p>
        </div>

        <div class="close-section__actions" data-reveal="up" role="group" aria-label="Get started">
          <a class="close-section-action close-section-action--primary" href="https://members.theloanatlas.com/checkouts/premium-membership/">
            <span>
              <span class="close-section-action__label">Start Annual — $3,490/year</span>
              <span class="close-section-action__hint">Save $698 vs monthly · Full access from day one</span>
            </span>
            <span class="close-section-action__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
            </span>
          </a>
          <a class="close-section-action close-section-action--secondary" href="https://members.theloanatlas.com/checkouts/premium-membership/">
            <span>
              <span class="close-section-action__label">Join Monthly — $349/month</span>
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

