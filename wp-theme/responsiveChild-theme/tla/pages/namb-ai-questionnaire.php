<?php
/**
 * Body partial for /namb-ai-questionnaire/ (TLA Full HTML template).
 * Generated from public/mortgage-advisor-questionnaire.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'The Mortgage Advisor Questionnaire — Build Your AI Operating Manual';
$tla_description = 'Teach AI how your mortgage business works. Fill in this worksheet to build your AI operating manual, then copy your answers straight into ChatGPT.';
$tla_active      = '';
?>
         - every answer field auto-saves to localStorage on input
         - "Copy for ChatGPT" copies all answers, grouped by section
         - "Clear answers" wipes saved answers + fields
       All client-side — no backend.
       ============================================================ -->
  <style>
    .maq {
      --maq-navy: #021c36;
      --maq-navy-deep: #060e1c;
      --maq-brass: #c9961c;
      --maq-brass-bright: #eac25a;
      --maq-grad: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      /* Warm parchment tints used for the section header strips + tip cards,
         echoing the printed worksheet. */
      --maq-cream: #fdf7ea;
      --maq-cream-line: rgba(201, 150, 28, 0.28);
      --maq-field-line: #d3d7dc;
      background: var(--background);
    }

    /* ── Header: logo left, savings line + CTA right ────────────────────────── */
    .site-header--maq .site-header__inner { justify-content: space-between; }
    /* Savings line to the left of the CTA. */
    .maq-header-save {
      font-family: var(--font-body);
      font-weight: 700;
      font-size: 1rem;
      line-height: 1.3;
      letter-spacing: 0.01em;
      color: #ffffff;
      text-align: right;
      max-width: 18rem;
    }
    .maq-header-save__amt {
      font-weight: 800;
      /* Brass gradient hardcoded — the header sits outside <main class="maq">,
         so the --maq-grad token isn't in scope here. */
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }
    /* Enlarged header CTA — bigger pad + text than the base .btn--header.
       chrome.css loads last and sets font-size at ≥540px with 2-class
       specificity, so match it with a 3-class selector to win. */
    .site-header.site-header--maq .btn--header {
      padding: 12px 22px;
      font-size: 1rem;
      border-radius: var(--radius-lg);
    }
    /* Always show the full "Join The Loan Atlas" label. */
    .site-header--maq .btn--header .btn__short { display: none; }
    .site-header--maq .btn--header .btn__full  { display: inline; }

    /* On narrow screens the savings copy won't fit beside the logo + full
       button, so drop it out of the header into a full-width band directly
       below the fixed header. The header keeps just logo + button. */
    @media (max-width: 767.98px) {
      .maq-header-save {
        position: fixed;
        top: var(--header-h, 72px);
        left: 0;
        right: 0;
        z-index: 49;
        max-width: none;
        text-align: center;
        font-size: 0.875rem;
        line-height: 1.3;
        padding: 8px 16px;
        background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      }
      /* Push the page content down so the band doesn't cover the hero. */
      body > main.maq { padding-top: calc(var(--header-h, 72px) + 40px); }
      /* Shrink the button so the full "Join The Loan Atlas" label fits beside
         the logo now that the savings copy has moved to the band below. */
      .site-header.site-header--maq .btn--header {
        padding: 9px 15px;
        font-size: 0.8125rem;
      }
    }
    @media (max-width: 400px) {
      .site-header.site-header--maq .btn--header { padding: 8px 12px; font-size: 0.75rem; }
      .site-header.site-header--maq .brand__logo { height: 24px; }
    }

    /* ── Hero band ──────────────────────────────────────────────────────────── */
    .maq-hero {
      position: relative;
      overflow: hidden;
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      color: #ffffff;
      padding-block: clamp(48px, 7vw, 96px);
    }
    /* brass + blue radial glows */
    .maq-hero::before,
    .maq-hero::after {
      content: "";
      position: absolute;
      border-radius: 50%;
      filter: blur(70px);
      pointer-events: none;
    }
    .maq-hero::before {
      width: 460px; height: 460px;
      top: -160px; right: -120px;
      background: rgba(234, 194, 90, 0.14);
    }
    .maq-hero::after {
      width: 420px; height: 420px;
      bottom: -180px; left: -140px;
      background: rgba(178, 200, 233, 0.12);
    }
    .maq-hero__inner {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(24px, 4vw, 40px);
      align-items: start;
    }
    @media (min-width: 860px) {
      .maq-hero__inner { grid-template-columns: 1.55fr 1fr; }
    }
    .maq-hero__eyebrow {
      font-family: var(--font-body);
      font-weight: 700;
      font-size: 0.875rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--maq-brass-bright);
      margin: 0 0 var(--space-md);
    }
    .maq-hero__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2rem, 1.5rem + 2.4vw, 3.25rem);
      line-height: 1.08;
      letter-spacing: -0.02em;
      margin: 0;
      color: #ffffff;
    }
    .maq-hero__title .maq-hero__title-sub {
      display: block;
      margin-top: 0.15em;
      background: var(--maq-grad);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .maq-hero__lede {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 0.95rem + 0.5vw, 1.25rem);
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.78);
      max-width: 40rem;
      margin: var(--space-md) 0 0;
    }
    /* Right column: "how it works" steps stacked above the tip card */
    .maq-hero__aside {
      display: flex;
      flex-direction: column;
      gap: clamp(20px, 2.6vw, 32px);
    }
    /* "How it works" steps */
    .maq-hero__steps {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: clamp(16px, 2vw, 22px);
    }
    .maq-hero__step {
      display: flex;
      align-items: center;
      gap: 16px;
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 0.95rem + 0.5vw, 1.25rem);
      line-height: 1.45;
      color: rgba(255, 255, 255, 0.9);
    }
    .maq-hero__step-num {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px; height: 40px;
      border-radius: 50%;
      background: var(--maq-grad);
      color: var(--maq-navy);
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.1875rem;
      box-shadow: 0 4px 12px rgba(201, 150, 28, 0.3);
    }
    /* Tip chip — top-right on the hero, mirrors the worksheet tip cards */
    .maq-hero__tip {
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(234, 194, 90, 0.4);
      border-radius: var(--radius-2xl);
      padding: clamp(18px, 2.4vw, 24px);
      backdrop-filter: blur(8px);
      display: flex;
      gap: 14px;
      align-items: flex-start;
    }
    .maq-hero__tip-icon {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 44px; height: 44px;
      border-radius: 50%;
      background: var(--maq-navy);
      border: 1px solid rgba(234, 194, 90, 0.5);
      color: var(--maq-brass-bright);
    }
    .maq-hero__tip-icon svg { width: 22px; height: 22px; }
    .maq-hero__tip-label {
      font-family: var(--font-body);
      font-weight: 700;
      color: var(--maq-brass-bright);
      font-size: 0.9375rem;
      margin: 0 0 4px;
    }
    .maq-hero__tip-text {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 1rem + 0.3vw, 1.1875rem);
      line-height: 1.5;
      color: rgba(255, 255, 255, 0.78);
      margin: 0;
    }

    /* ── Worksheet body ─────────────────────────────────────────────────────── */
    #maq-start { scroll-margin-top: calc(var(--header-h) + 24px); }
    .maq-sheet { padding-block: clamp(40px, 6vw, 88px); }
    .maq-sheet__intro {
      max-width: 46rem;
      margin: 0 auto clamp(28px, 4vw, 48px);
      text-align: center;
    }
    .maq-sheet__intro h2 {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.75rem, 1.4rem + 1.6vw, 2.5rem);
      line-height: 1.12;
      letter-spacing: -0.02em;
      color: var(--on-surface);
      margin: 0 0 var(--space-sm);
    }
    .maq-sheet__intro p {
      font-family: var(--font-body);
      font-size: 1.0625rem;
      line-height: 1.6;
      color: var(--on-surface-variant);
      margin: 0;
    }

    /* Section card */
    .maq-section {
      background: #ffffff;
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-3xl);
      box-shadow: var(--shadow-sm);
      overflow: hidden;
      margin-bottom: clamp(24px, 3vw, 40px);
    }
    .maq-section__head {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 18px;
      align-items: center;
      background: var(--maq-cream);
      border-bottom: 1px solid var(--maq-cream-line);
      padding: clamp(20px, 2.6vw, 28px) clamp(20px, 3vw, 36px);
    }
    @media (min-width: 720px) {
      .maq-section__head { grid-template-columns: auto 1fr auto; }
    }
    .maq-section__icon {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: clamp(52px, 6vw, 64px);
      height: clamp(52px, 6vw, 64px);
      border-radius: 50%;
      background: var(--maq-navy);
      border: 2px solid var(--maq-brass);
      color: var(--maq-brass-bright);
    }
    .maq-section__icon svg { width: 50%; height: 50%; }
    .maq-section__titles { min-width: 0; }
    .maq-section__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.375rem, 1.1rem + 1vw, 1.875rem);
      line-height: 1.15;
      letter-spacing: -0.015em;
      color: var(--maq-navy);
      margin: 0 0 4px;
    }
    .maq-section__desc {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 1rem + 0.3vw, 1.1875rem);
      line-height: 1.45;
      color: var(--on-surface-variant);
      margin: 0;
    }
    /* Per-section tip callout (right of the head on wide screens).
       Lightbulb + "Tip:" label share the top row; tip text sits below. */
    .maq-section__tip {
      grid-column: 1 / -1;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
      background: #ffffff;
      border: 1px dashed var(--maq-cream-line);
      border-radius: var(--radius-xl);
      padding: 16px 18px;
      max-width: none;
      margin-top: 4px;
    }
    @media (min-width: 720px) {
      .maq-section__tip {
        grid-column: auto;
        margin-top: 0;
        max-width: 15rem;
        align-self: center;
      }
    }
    /* Top row: lightbulb icon + "Tip:" label side by side. */
    .maq-section__tip-head {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .maq-section__tip-icon {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px; height: 40px;
      border-radius: 50%;
      background: var(--maq-navy);
      border: 1px solid rgba(201, 150, 28, 0.5);
      color: var(--maq-brass);
    }
    .maq-section__tip-icon svg { width: 20px; height: 20px; }
    .maq-section__tip-label {
      font-family: var(--font-body);
      font-weight: 700;
      color: var(--maq-brass);
      font-size: 0.9375rem;
    }
    .maq-section__tip-text {
      font-family: var(--font-body);
      font-size: 0.9375rem;
      line-height: 1.45;
      color: var(--on-surface-variant);
      margin: 0;
    }

    /* Questions */
    .maq-questions {
      list-style: none;
      margin: 0;
      padding: clamp(16px, 2.4vw, 28px) clamp(20px, 3vw, 36px) clamp(20px, 3vw, 32px);
      counter-reset: none;
    }
    .maq-q {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 14px;
      padding-block: clamp(14px, 1.8vw, 18px);
      border-top: 1px solid var(--surface-container);
    }
    .maq-q:first-child { border-top: none; }
    .maq-q__num {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 30px; height: 30px;
      border-radius: 50%;
      background: var(--maq-grad);
      color: var(--maq-navy);
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 0.9375rem;
      box-shadow: 0 2px 6px rgba(201, 150, 28, 0.3);
      margin-top: 2px;
    }
    .maq-q__body { min-width: 0; }
    .maq-q__label {
      display: block;
      font-family: var(--font-body);
      font-weight: 600;
      font-size: clamp(0.9375rem, 0.9rem + 0.2vw, 1.0625rem);
      line-height: 1.4;
      color: var(--maq-navy);
      margin: 0 0 8px;
      cursor: pointer;
    }
    .maq-q__field {
      display: block;
      width: 100%;
      resize: vertical;
      min-height: 44px;
      font-family: var(--font-body);
      font-size: 1rem;
      line-height: 1.5;
      color: var(--on-surface);
      background: transparent;
      border: none;
      border-bottom: 1.5px solid var(--maq-field-line);
      border-radius: 0;
      padding: 6px 2px;
      transition: border-color 150ms ease, box-shadow 150ms ease;
    }
    .maq-q__field::placeholder { color: var(--outline); opacity: 0.7; }
    .maq-q__field:focus {
      outline: none;
      border-bottom-color: var(--maq-brass);
      box-shadow: 0 2px 0 -1px rgba(201, 150, 28, 0.35);
    }

    /* ── Two-up panels: After You Finish + Sample Prompt ────────────────────── */
    .maq-panels {
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(20px, 3vw, 32px);
      margin-top: clamp(24px, 3vw, 40px);
    }
    @media (min-width: 760px) {
      .maq-panels { grid-template-columns: 1fr 1fr; }
    }
    .maq-panel {
      border-radius: var(--radius-3xl);
      padding: clamp(24px, 3vw, 36px);
    }
    .maq-panel--finish {
      background: var(--maq-cream);
      border: 1px solid var(--maq-cream-line);
    }
    .maq-panel--prompt {
      background: linear-gradient(135deg, #0a1628 0%, #131b2e 50%, #1e293b 100%);
      border: 1px solid rgba(234, 194, 90, 0.4);
      color: #ffffff;
    }
    .maq-panel__head {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: var(--space-md);
    }
    .maq-panel__icon {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 44px; height: 44px;
      border-radius: 50%;
      background: var(--maq-navy);
      border: 1px solid rgba(234, 194, 90, 0.5);
      color: var(--maq-brass-bright);
    }
    .maq-panel__icon svg { width: 22px; height: 22px; }
    .maq-panel__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.375rem;
      letter-spacing: -0.01em;
      margin: 0;
    }
    .maq-panel--finish .maq-panel__title { color: var(--maq-navy); }
    .maq-panel--prompt .maq-panel__title { color: #ffffff; }
    .maq-finish-list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: 14px;
    }
    .maq-finish-list li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      font-family: var(--font-body);
      font-size: 1rem;
      line-height: 1.5;
      color: var(--on-surface);
    }
    .maq-finish-list__check {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 24px; height: 24px;
      border-radius: 50%;
      background: var(--maq-grad);
    }
    .maq-finish-list__check svg { width: 14px; height: 14px; }
    .maq-prompt__text {
      font-family: var(--font-body);
      font-style: italic;
      font-size: 1rem;
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.86);
      margin: 0;
    }

    /* ── Action bar ─────────────────────────────────────────────────────────── */
    .maq-actions {
      max-width: 46rem;
      margin: clamp(28px, 4vw, 48px) auto 0;
      background: #ffffff;
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-3xl);
      box-shadow: var(--shadow);
      padding: clamp(24px, 3vw, 36px);
      text-align: center;
    }
    .maq-actions__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.25rem, 1rem + 1vw, 1.625rem);
      letter-spacing: -0.015em;
      color: var(--on-surface);
      margin: 0 0 8px;
    }
    .maq-actions__sub {
      font-family: var(--font-body);
      font-size: 1rem;
      line-height: 1.5;
      color: var(--on-surface-variant);
      margin: 0 0 var(--space-md);
    }
    .maq-actions__row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center;
    }
    .maq-status {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-top: var(--space-md);
      font-family: var(--font-body);
      font-size: 0.8125rem;
      color: var(--on-surface-variant);
    }
    .maq-status__dot {
      width: 8px; height: 8px;
      border-radius: 50%;
      background: var(--success);
    }

    /* Larger landing CTA, matching the site's other lead-magnet pages */
    .maq .btn--landing {
      font-size: clamp(1rem, 0.95rem + 0.4vw, 1.1875rem);
      padding: clamp(16px, 1.4vw, 22px) clamp(28px, 3vw, 44px);
      border-radius: var(--radius-2xl);
    }
    /* Copy buttons flip to a green "copied" state on success (kept for ~2s by JS).
       3-class selector + covering :hover so it wins over .btn--gold and its hover. */
    .maq .btn--gold.is-copied,
    .maq .btn--gold.is-copied:hover {
      background: var(--success);
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(31, 122, 58, 0.35);
    }

    @media (prefers-reduced-motion: reduce) {
      .maq-q__field { transition: none; }
    }
  </style>
</head>

<body>

  <!-- ── Header — logo left, CTA right (page-local landing nav) ───────────────── -->
  <header class="site-header site-header--maq">
    <div class="site-header__inner">
      <a class="brand" href="/" aria-label="The Loan Atlas">
        <img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-gold.png" alt="The Loan Atlas" class="brand__logo" />
      </a>
      <div class="site-header__actions">
        <span class="maq-header-save">Save <span class="maq-header-save__amt">$1,200</span> on your membership with your NAMB discount!</span>
        <a class="btn btn--header" href="https://theloanatlas.com/NAMB" target="_blank" rel="noopener">
          <span class="btn__full">Join The Loan Atlas</span>
          <span class="btn__short">Join</span>
        </a>
      </div>
    </div>
  </header>

  <main class="maq">

    <!-- ── 1. HERO ──────────────────────────────────────────────────────────── -->
    <section class="maq-hero" aria-labelledby="maq-hero-title">
      <div class="container">
        <div class="maq-hero__inner">
          <div>
            <p class="maq-hero__eyebrow">Build Your AI Operating Manual</p>
            <h1 id="maq-hero-title" class="maq-hero__title">
              The Mortgage Advisor Questionnaire
              <span class="maq-hero__title-sub">Teach AI how your business works.</span>
            </h1>
            <p class="maq-hero__lede">
              Use this worksheet to teach AI how your mortgage business works &mdash; so it
              can write, plan, and communicate more like you. Fill it in below, then copy
              your answers straight into your AI assistant.
            </p>
          </div>
          <div class="maq-hero__aside">
            <ol class="maq-hero__steps">
              <li class="maq-hero__step">
                <span class="maq-hero__step-num">1</span>
                <span>Answer the questions below &mdash; your work saves automatically in this browser.</span>
              </li>
              <li class="maq-hero__step">
                <span class="maq-hero__step-num">2</span>
                <span>Tap <strong>Copy</strong> to grab all your answers at once.</span>
              </li>
              <li class="maq-hero__step">
                <span class="maq-hero__step-num">3</span>
                <span>Paste into your AI assistant and turn them into your Custom Instructions.</span>
              </li>
            </ol>
            <aside class="maq-hero__tip" aria-label="Tip">
            <span class="maq-hero__tip-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.2 1 2V16h6v-.5c0-.8.4-1.4 1-2A6 6 0 0 0 12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <p class="maq-hero__tip-label">Tip</p>
              <p class="maq-hero__tip-text">Write short bullet answers. You can refine them later with AI &mdash; done beats perfect.</p>
            </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 2. WORKSHEET ─────────────────────────────────────────────────────── -->
    <section class="maq-sheet" id="maq-start" aria-labelledby="maq-sheet-title">
      <div class="container">
        <div class="maq-sheet__intro">
          <h2 id="maq-sheet-title">Fill in your operating manual</h2>
          <p>Five sections, eight questions each. Answer what you can &mdash; every field saves
             automatically as you type.</p>
        </div>

        <form id="maq-worksheet" autocomplete="off" novalidate>

          <!-- SECTION A — MY BUSINESS -->
          <article class="maq-section" data-section="A" aria-labelledby="maq-sec-a">
            <header class="maq-section__head">
              <span class="maq-section__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.7"/><path d="M5 20c0-3.3 3.1-5.5 7-5.5s7 2.2 7 5.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
              </span>
              <div class="maq-section__titles">
                <h3 id="maq-sec-a" class="maq-section__title">Section A: My Business</h3>
                <p class="maq-section__desc">Teach AI who you are, what you do, and where you want to grow.</p>
              </div>
              <div class="maq-section__tip">
                <div class="maq-section__tip-head">
                  <span class="maq-section__tip-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.2 1 2V16h6v-.5c0-.8.4-1.4 1-2A6 6 0 0 0 12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </span>
                  <span class="maq-section__tip-label">Tip:</span>
                </div>
                  <p class="maq-section__tip-text">Write short bullet answers. You can refine them later with AI.</p>
              </div>
            </header>
            <ol class="maq-questions">
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">1</span><div class="maq-q__body"><label class="maq-q__label" for="a1">What is my role and company?</label><textarea class="maq-q__field" id="a1" name="a1" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">2</span><div class="maq-q__body"><label class="maq-q__label" for="a2">Where am I licensed or active?</label><textarea class="maq-q__field" id="a2" name="a2" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">3</span><div class="maq-q__body"><label class="maq-q__label" for="a3">What type of business do I want more of?</label><textarea class="maq-q__field" id="a3" name="a3" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">4</span><div class="maq-q__body"><label class="maq-q__label" for="a4">What types of borrowers do I serve best?</label><textarea class="maq-q__field" id="a4" name="a4" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">5</span><div class="maq-q__body"><label class="maq-q__label" for="a5">What complex scenarios am I especially skilled at solving?</label><textarea class="maq-q__field" id="a5" name="a5" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">6</span><div class="maq-q__body"><label class="maq-q__label" for="a6">What makes my process or expertise different?</label><textarea class="maq-q__field" id="a6" name="a6" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">7</span><div class="maq-q__body"><label class="maq-q__label" for="a7">What do I want clients and partners to say about me?</label><textarea class="maq-q__field" id="a7" name="a7" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">8</span><div class="maq-q__body"><label class="maq-q__label" for="a8">What are my three biggest business priorities?</label><textarea class="maq-q__field" id="a8" name="a8" rows="1" placeholder="Your answer…"></textarea></div></li>
            </ol>
          </article>

          <!-- SECTION B — MY AUDIENCE -->
          <article class="maq-section" data-section="B" aria-labelledby="maq-sec-b">
            <header class="maq-section__head">
              <span class="maq-section__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none"><circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="1.7"/><path d="M3 19c0-3 2.7-4.8 6-4.8s6 1.8 6 4.8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><path d="M16 6.2A3 3 0 0 1 16 12M18 19c0-2.3-1-3.7-2.6-4.4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
              </span>
              <div class="maq-section__titles">
                <h3 id="maq-sec-b" class="maq-section__title">Section B: My Audience</h3>
                <p class="maq-section__desc">Teach AI who you serve, what they care about, and why they reach out to you.</p>
              </div>
              <div class="maq-section__tip">
                <div class="maq-section__tip-head">
                  <span class="maq-section__tip-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.2 1 2V16h6v-.5c0-.8.4-1.4 1-2A6 6 0 0 0 12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </span>
                  <span class="maq-section__tip-label">Tip:</span>
                </div>
                  <p class="maq-section__tip-text">Use the exact words your borrowers and partners would say out loud.</p>
              </div>
            </header>
            <ol class="maq-questions">
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">1</span><div class="maq-q__body"><label class="maq-q__label" for="b1">Who is my highest-value borrower?</label><textarea class="maq-q__field" id="b1" name="b1" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">2</span><div class="maq-q__body"><label class="maq-q__label" for="b2">Who are my most important referral partners?</label><textarea class="maq-q__field" id="b2" name="b2" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">3</span><div class="maq-q__body"><label class="maq-q__label" for="b3">What problems cause them to contact me?</label><textarea class="maq-q__field" id="b3" name="b3" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">4</span><div class="maq-q__body"><label class="maq-q__label" for="b4">What frustrates them about lenders?</label><textarea class="maq-q__field" id="b4" name="b4" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">5</span><div class="maq-q__body"><label class="maq-q__label" for="b5">What are their biggest fears?</label><textarea class="maq-q__field" id="b5" name="b5" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">6</span><div class="maq-q__body"><label class="maq-q__label" for="b6">What objections do I hear repeatedly?</label><textarea class="maq-q__field" id="b6" name="b6" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">7</span><div class="maq-q__body"><label class="maq-q__label" for="b7">What outcome are they trying to achieve?</label><textarea class="maq-q__field" id="b7" name="b7" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">8</span><div class="maq-q__body"><label class="maq-q__label" for="b8">What language do they use when describing their situation?</label><textarea class="maq-q__field" id="b8" name="b8" rows="1" placeholder="Your answer…"></textarea></div></li>
            </ol>
          </article>

          <!-- SECTION C — MY SOLUTIONS -->
          <article class="maq-section" data-section="C" aria-labelledby="maq-sec-c">
            <header class="maq-section__head">
              <span class="maq-section__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none"><path d="M10.5 4.5a1.5 1.5 0 0 1 3 0V6h2.5a1 1 0 0 1 1 1v2.5H18a1.5 1.5 0 0 1 0 3h-1v2.5a1 1 0 0 1-1 1H13.5V18a1.5 1.5 0 0 1-3 0v-1.5H8a1 1 0 0 1-1-1V13H5.5a1.5 1.5 0 0 1 0-3H7V7a1 1 0 0 1 1-1h2.5V4.5Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
              </span>
              <div class="maq-section__titles">
                <h3 id="maq-sec-c" class="maq-section__title">Section C: My Solutions</h3>
                <p class="maq-section__desc">Teach AI how you help, what scenarios you solve, and what makes your solutions valuable.</p>
              </div>
              <div class="maq-section__tip">
                <div class="maq-section__tip-head">
                  <span class="maq-section__tip-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.2 1 2V16h6v-.5c0-.8.4-1.4 1-2A6 6 0 0 0 12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </span>
                  <span class="maq-section__tip-label">Tip:</span>
                </div>
                  <p class="maq-section__tip-text">Connect each solution to a real borrower problem, not just a loan product.</p>
              </div>
            </header>
            <ol class="maq-questions">
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">1</span><div class="maq-q__body"><label class="maq-q__label" for="c1">What mortgage solutions do I commonly provide?</label><textarea class="maq-q__field" id="c1" name="c1" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">2</span><div class="maq-q__body"><label class="maq-q__label" for="c2">What client problem does each solution address?</label><textarea class="maq-q__field" id="c2" name="c2" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">3</span><div class="maq-q__body"><label class="maq-q__label" for="c3">What scenarios should cause someone to call me?</label><textarea class="maq-q__field" id="c3" name="c3" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">4</span><div class="maq-q__body"><label class="maq-q__label" for="c4">What process do I use to guide a client?</label><textarea class="maq-q__field" id="c4" name="c4" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">5</span><div class="maq-q__body"><label class="maq-q__label" for="c5">What common mistakes do I help clients avoid?</label><textarea class="maq-q__field" id="c5" name="c5" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">6</span><div class="maq-q__body"><label class="maq-q__label" for="c6">What stories or results prove my value?</label><textarea class="maq-q__field" id="c6" name="c6" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">7</span><div class="maq-q__body"><label class="maq-q__label" for="c7">What questions do clients ask most often?</label><textarea class="maq-q__field" id="c7" name="c7" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">8</span><div class="maq-q__body"><label class="maq-q__label" for="c8">What differentiators should AI emphasize?</label><textarea class="maq-q__field" id="c8" name="c8" rows="1" placeholder="Your answer…"></textarea></div></li>
            </ol>
          </article>

          <!-- SECTION D — MY COMMUNICATION STYLE -->
          <article class="maq-section" data-section="D" aria-labelledby="maq-sec-d">
            <header class="maq-section__head">
              <span class="maq-section__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none"><path d="M4 5.5A1.5 1.5 0 0 1 5.5 4h9A1.5 1.5 0 0 1 16 5.5v5A1.5 1.5 0 0 1 14.5 12H9l-3.5 3v-3H5.5A1.5 1.5 0 0 1 4 10.5v-5Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M18 9h.5A1.5 1.5 0 0 1 20 10.5v5A1.5 1.5 0 0 1 18.5 17H18v3l-3-3" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
              </span>
              <div class="maq-section__titles">
                <h3 id="maq-sec-d" class="maq-section__title">Section D: My Communication Style</h3>
                <p class="maq-section__desc">Teach AI how you want it to sound, structure information, and support your thinking.</p>
              </div>
              <div class="maq-section__tip">
                <div class="maq-section__tip-head">
                  <span class="maq-section__tip-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.2 1 2V16h6v-.5c0-.8.4-1.4 1-2A6 6 0 0 0 12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </span>
                  <span class="maq-section__tip-label">Tip:</span>
                </div>
                  <p class="maq-section__tip-text">If you can, include examples of emails, texts, and posts that sound like you.</p>
              </div>
            </header>
            <ol class="maq-questions">
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">1</span><div class="maq-q__body"><label class="maq-q__label" for="d1">What should my tone feel like?</label><textarea class="maq-q__field" id="d1" name="d1" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">2</span><div class="maq-q__body"><label class="maq-q__label" for="d2">How concise should responses be?</label><textarea class="maq-q__field" id="d2" name="d2" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">3</span><div class="maq-q__body"><label class="maq-q__label" for="d3">How technical should explanations be?</label><textarea class="maq-q__field" id="d3" name="d3" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">4</span><div class="maq-q__body"><label class="maq-q__label" for="d4">What phrases sound like me?</label><textarea class="maq-q__field" id="d4" name="d4" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">5</span><div class="maq-q__body"><label class="maq-q__label" for="d5">What phrases should never appear?</label><textarea class="maq-q__field" id="d5" name="d5" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">6</span><div class="maq-q__body"><label class="maq-q__label" for="d6">How should AI structure emails, texts, and social posts?</label><textarea class="maq-q__field" id="d6" name="d6" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">7</span><div class="maq-q__body"><label class="maq-q__label" for="d7">What type of call to action do I prefer?</label><textarea class="maq-q__field" id="d7" name="d7" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">8</span><div class="maq-q__body"><label class="maq-q__label" for="d8">Should AI challenge my thinking, execute quickly, or both?</label><textarea class="maq-q__field" id="d8" name="d8" rows="1" placeholder="Your answer…"></textarea></div></li>
            </ol>
          </article>

          <!-- SECTION E — MY GUARDRAILS -->
          <article class="maq-section" data-section="E" aria-labelledby="maq-sec-e">
            <header class="maq-section__head">
              <span class="maq-section__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none"><path d="M12 3l7 2.5v5.5c0 4.4-3 7.8-7 9-4-1.2-7-4.6-7-9V5.5L12 3Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M9 12l2 2 4-4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
              <div class="maq-section__titles">
                <h3 id="maq-sec-e" class="maq-section__title">Section E: My Guardrails</h3>
                <p class="maq-section__desc">Teach AI what must be verified, what it should never invent, and where human review is required.</p>
              </div>
              <div class="maq-section__tip">
                <div class="maq-section__tip-head">
                  <span class="maq-section__tip-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.2 1 2V16h6v-.5c0-.8.4-1.4 1-2A6 6 0 0 0 12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </span>
                  <span class="maq-section__tip-label">Tip:</span>
                </div>
                  <p class="maq-section__tip-text">Strong guardrails save time and reduce bad output.</p>
              </div>
            </header>
            <ol class="maq-questions">
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">1</span><div class="maq-q__body"><label class="maq-q__label" for="e1">What facts must always be verified?</label><textarea class="maq-q__field" id="e1" name="e1" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">2</span><div class="maq-q__body"><label class="maq-q__label" for="e2">What should AI never invent?</label><textarea class="maq-q__field" id="e2" name="e2" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">3</span><div class="maq-q__body"><label class="maq-q__label" for="e3">What claims should AI avoid?</label><textarea class="maq-q__field" id="e3" name="e3" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">4</span><div class="maq-q__body"><label class="maq-q__label" for="e4">When should AI ask me questions?</label><textarea class="maq-q__field" id="e4" name="e4" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">5</span><div class="maq-q__body"><label class="maq-q__label" for="e5">What work always requires compliance or human review?</label><textarea class="maq-q__field" id="e5" name="e5" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">6</span><div class="maq-q__body"><label class="maq-q__label" for="e6">What confidential information should never be entered?</label><textarea class="maq-q__field" id="e6" name="e6" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">7</span><div class="maq-q__body"><label class="maq-q__label" for="e7">How should assumptions be identified?</label><textarea class="maq-q__field" id="e7" name="e7" rows="1" placeholder="Your answer…"></textarea></div></li>
              <li class="maq-q"><span class="maq-q__num" aria-hidden="true">8</span><div class="maq-q__body"><label class="maq-q__label" for="e8">What does unacceptable AI output look like?</label><textarea class="maq-q__field" id="e8" name="e8" rows="1" placeholder="Your answer…"></textarea></div></li>
            </ol>
          </article>

        </form>

        <!-- ── After You Finish + Sample Prompt ─────────────────────────────── -->
        <div class="maq-panels">
          <section class="maq-panel maq-panel--finish" aria-labelledby="maq-finish-title">
            <div class="maq-panel__head">
              <span class="maq-panel__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none"><rect x="4" y="4" width="16" height="16" rx="3" stroke="currentColor" stroke-width="1.7"/><path d="M8 12l2.5 2.5L16 9" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
              <h3 id="maq-finish-title" class="maq-panel__title">After You Finish</h3>
            </div>
            <ul class="maq-finish-list">
              <li>
                <span class="maq-finish-list__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <span>Click &ldquo;Copy All Answers&rdquo; below.</span>
              </li>
              <li>
                <span class="maq-finish-list__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <span>Paste your answers into your AI assistant.</span>
              </li>
              <li>
                <span class="maq-finish-list__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <span>Use the Sample Prompt to turn them into Custom Instructions.</span>
              </li>
              <li>
                <span class="maq-finish-list__check" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-9" stroke="#052e16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <span>Test the output, refine it, and save what works.</span>
              </li>
            </ul>
          </section>

          <section class="maq-panel maq-panel--prompt" aria-labelledby="maq-prompt-title">
            <div class="maq-panel__head">
              <span class="maq-panel__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none"><path d="M4 6.5A1.5 1.5 0 0 1 5.5 5h13A1.5 1.5 0 0 1 20 6.5v8A1.5 1.5 0 0 1 18.5 16H10l-4 3v-3H5.5A1.5 1.5 0 0 1 4 14.5v-8Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><circle cx="9" cy="10.5" r="1" fill="currentColor"/><circle cx="12" cy="10.5" r="1" fill="currentColor"/><circle cx="15" cy="10.5" r="1" fill="currentColor"/></svg>
              </span>
              <h3 id="maq-prompt-title" class="maq-panel__title">Sample Prompt</h3>
            </div>
            <p class="maq-prompt__text">
              &ldquo;Organize my answers into clear Custom Instructions for an AI assistant.
              Preserve my voice, remove repetition, and include guardrails so AI does not
              invent rates, guidelines, approvals, or compliance claims. Ask me up to 5
              clarifying questions before finalizing.&rdquo;
            </p>
          </section>
        </div>

        <!-- ── Action bar ───────────────────────────────────────────────────── -->
        <div class="maq-actions">
          <h3 class="maq-actions__title">Ready to build your AI operating manual?</h3>
          <p class="maq-actions__sub">Copy everything you&rsquo;ve written &mdash; grouped by section &mdash; and paste it straight into your AI assistant.</p>
          <div class="maq-actions__row">
            <button type="button" class="btn btn--gold btn--landing" id="maq-copy">Copy All Answers</button>
            <button type="button" class="btn btn--gold btn--landing" id="maq-copy-prompt">Copy All Answers and Prompt</button>
          </div>
          <span class="maq-status" id="maq-status" aria-live="polite">
            <span class="maq-status__dot" aria-hidden="true"></span>
            <span id="maq-status-text">Your answers save automatically in this browser.</span>
          </span>
        </div>

      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>


  <!-- ── Worksheet interactivity: auto-save, copy, clear ────────────────────── -->
  <script>
    (function () {
      var STORE_PREFIX = 'maq:';
      var form = document.getElementById('maq-worksheet');
      if (!form) return;

      var fields = Array.prototype.slice.call(form.querySelectorAll('.maq-q__field'));
      var statusText = document.getElementById('maq-status-text');
      var reduceMotion = window.matchMedia &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      // Section metadata for the copy output (in A→E order).
      var SECTIONS = [
        { key: 'A', title: 'SECTION A: MY BUSINESS' },
        { key: 'B', title: 'SECTION B: MY AUDIENCE' },
        { key: 'C', title: 'SECTION C: MY SOLUTIONS' },
        { key: 'D', title: 'SECTION D: MY COMMUNICATION STYLE' },
        { key: 'E', title: 'SECTION E: MY GUARDRAILS' }
      ];

      // ── Auto-grow textareas so long answers stay visible ──
      function autoGrow(el) {
        el.style.height = 'auto';
        el.style.height = el.scrollHeight + 'px';
      }

      // ── localStorage helpers (fail-safe if storage is unavailable) ──
      function storeAvailable() {
        try {
          var t = '__maq_test__';
          window.localStorage.setItem(t, t);
          window.localStorage.removeItem(t);
          return true;
        } catch (e) { return false; }
      }
      var canStore = storeAvailable();

      function save(el) {
        if (!canStore) return;
        try { window.localStorage.setItem(STORE_PREFIX + el.id, el.value); } catch (e) {}
      }

      // ── Restore saved answers on load ──
      fields.forEach(function (el) {
        if (canStore) {
          var saved = null;
          try { saved = window.localStorage.getItem(STORE_PREFIX + el.id); } catch (e) {}
          if (saved !== null) el.value = saved;
        }
        autoGrow(el);
        el.addEventListener('input', function () {
          autoGrow(el);
          save(el);
          flashStatus('Saved');
        });
      });

      if (!canStore && statusText) {
        statusText.textContent = 'Answers stay while this page is open (private mode blocks saving).';
      }

      // ── Transient status flash ──
      var statusTimer = null;
      function flashStatus(msg) {
        if (!statusText || !canStore) return;
        statusText.textContent = msg;
        if (statusTimer) clearTimeout(statusTimer);
        statusTimer = setTimeout(function () {
          statusText.textContent = 'Your answers save automatically in this browser.';
        }, 1500);
      }

      // The Sample Prompt shown on the page (appended by the "…and prompt" button).
      var SAMPLE_PROMPT = 'Organize my answers into clear Custom Instructions for ' +
        'an AI assistant. Preserve my voice, remove repetition, and include guardrails ' +
        'so AI does not invent rates, guidelines, approvals, or compliance claims. Ask ' +
        'me up to 5 clarifying questions before finalizing.';

      // ── Build the copy text: answers only, grouped by section ──
      // withPrompt=true prepends the Sample Prompt above the answers.
      function buildText(withPrompt) {
        var out = [];
        SECTIONS.forEach(function (sec) {
          var lines = [];
          var article = form.querySelector('article[data-section="' + sec.key + '"]');
          if (!article) return;
          var qs = article.querySelectorAll('.maq-q');
          qs.forEach(function (q) {
            var label = q.querySelector('.maq-q__label');
            var field = q.querySelector('.maq-q__field');
            var answer = field ? field.value.trim() : '';
            if (answer) {
              lines.push((label ? label.textContent.trim() : '') + ' ' + answer);
            }
          });
          if (lines.length) {
            out.push('== ' + sec.title + ' ==');
            out.push(lines.join('\n'));
            out.push('');
          }
        });
        var body = out.join('\n').trim();
        if (withPrompt && body) {
          return SAMPLE_PROMPT + '\n\n' + body;
        }
        return body;
      }

      var copyTimer = null;

      function copyFallback(text) {
        var ta = document.createElement('textarea');
        ta.value = text;
        ta.setAttribute('readonly', '');
        ta.style.position = 'absolute';
        ta.style.left = '-9999px';
        document.body.appendChild(ta);
        ta.select();
        var ok = false;
        try { ok = document.execCommand('copy'); } catch (e) {}
        document.body.removeChild(ta);
        return ok;
      }

      // Flash a transient message on a button, then restore its original label.
      // On a successful copy, toggle .is-copied so the button changes color.
      function flashBtn(btn, label, msg, copied) {
        btn.textContent = msg;
        if (copied) btn.classList.add('is-copied');
        if (btn._maqTimer) clearTimeout(btn._maqTimer);
        btn._maqTimer = setTimeout(function () {
          btn.textContent = label;
          btn.classList.remove('is-copied');
        }, 2000);
      }

      // Wire a copy button. withPrompt controls whether the Sample Prompt is included.
      function wireCopy(id, withPrompt) {
        var btn = document.getElementById(id);
        if (!btn) return;
        var label = btn.textContent;
        btn.addEventListener('click', function () {
          var text = buildText(withPrompt);
          if (!text) {
            flashBtn(btn, label, 'Fill in an answer first', false);
            return;
          }
          if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text).then(
              function () { flashBtn(btn, label, 'Copied!', true); },
              function () { var ok = copyFallback(text); flashBtn(btn, label, ok ? 'Copied!' : 'Press Ctrl/Cmd+C', ok); }
            );
          } else {
            var ok = copyFallback(text);
            flashBtn(btn, label, ok ? 'Copied!' : 'Press Ctrl/Cmd+C', ok);
          }
        });
      }

      wireCopy('maq-copy', false);
      wireCopy('maq-copy-prompt', true);
    })();
  </script>
