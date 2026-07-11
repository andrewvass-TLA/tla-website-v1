<?php
/**
 * Body partial for /winning-the-ai-game/ (TLA Full HTML template).
 * Generated from public/replay-winning-the-ai-game.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Winning the AI Game — Masterclass Replay — The Loan Atlas';
$tla_description = 'Watch the replay of Winning the AI Game — Josh Mettle sits down with three originators using AI as a leverage system to close more loans in less time, with the specific tools, prompts and workflows they\'ve built.';
$tla_active      = '';
?>
  <style>
    .oh { background: var(--background); }

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
    /* even flow gap between every section in the card */
    .oh-main > * + * { margin-top: clamp(36px, 4.5vw, 64px); }
    /* sections carry no extra leading space of their own — the flow gap is the gap */
    .oh-main section > :first-child { margin-top: 0; }

    /* Hero image bleeds to the top edges of the white card (artifact-style) */
    .oh-thumb {
      overflow: hidden; aspect-ratio: 16 / 9;
      margin: calc(-1 * clamp(28px, 3.5vw, 48px));
      margin-bottom: 0;
      border-radius: var(--radius-3xl) var(--radius-3xl) 0 0;
    }
    .oh-thumb img { width: 100%; height: 100%; object-fit: cover; display: block; }

    /* Header order: thumb → meta (date/type) → title.
       Meta sits below the bled image; title sits close beneath the meta. */
    .oh-header > * + * { margin-top: 0; }
    .oh-header .oh-thumb + .oh-meta { margin-top: clamp(24px, 3vw, 32px); }
    .oh-header .oh-meta + .oh-title { margin-top: 10px; }
    /* Bottom CTA — centered below the Taught By section */
    .oh-cta-foot { display: flex; justify-content: center; }

    /* Full-width watch CTA (gold .tlc-btn, stretched) — under the title
       and again at the bottom of the card */
    .oh-watch-btn { width: 100%; font-size: 1.125rem; padding-block: 16px; }
    .oh-header .oh-watch-btn { margin-top: clamp(22px, 2.8vw, 32px); }

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

    /* "You'll learn" list — brass check bullets */
    .oh-list {
      list-style: none; margin: 18px 0 0; padding: 0;
      display: flex; flex-direction: column; gap: 14px;
    }
    .oh-list li {
      display: grid; grid-template-columns: 20px 1fr; gap: 12px; align-items: start;
      font-family: var(--font-body); font-size: 1.0625rem; line-height: 1.6;
      color: var(--on-surface-variant);
    }
    .oh-list svg { width: 20px; height: 20px; margin-top: 3px; color: var(--brass); }

    /* Pull-quote — shared .quote-card testimonial block (styles.css).
       Override the marquee-specific flex sizing so it flows in the column;
       with the gold mark omitted, let the text span its empty grid column. */
    .oh-main .quote-card {
      flex: initial;
      width: auto;
    }
    .oh-main .quote-card__quote,
    .oh-main .quote-card__attr { grid-column: 1 / -1; }
    /* the quote sits a bit tighter in the flow than full section gaps */
    .oh-main > .quote-card,
    .oh-main > .quote-card + * { margin-top: clamp(22px, 2.8vw, 36px); }

    /* Taught By — presenter medallion cards on the canonical dark band.
       Brass-gradient ring around the headshot; role split into a brass
       eyebrow (title) + muted company line. */
    .oh-people { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 20px; }
    .oh-person {
      position: relative; overflow: hidden;
      display: flex; align-items: center; gap: 18px;
      background: linear-gradient(160deg, #060e1c 0%, #021c36 55%, #081527 100%);
      border: 1px solid rgba(234, 194, 90, 0.22);
      border-radius: var(--radius-2xl);
      padding: 20px 22px;
      transition: transform 160ms ease, border-color 160ms ease, box-shadow 160ms ease;
    }
    /* faint brass glow drifting in from the top-right corner */
    .oh-person::before {
      content: ""; position: absolute; top: -70%; right: -18%;
      width: 220px; height: 220px; border-radius: 50%;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.16), transparent);
      filter: blur(28px); pointer-events: none;
    }
    .oh-person:hover {
      transform: translateY(-3px);
      border-color: rgba(234, 194, 90, 0.55);
      box-shadow: 0 16px 36px rgba(2, 28, 54, 0.38);
    }
    .oh-person__photo {
      width: 80px; height: 80px; flex: none;
      border-radius: 50%; padding: 3px;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      box-shadow: 0 6px 18px rgba(2, 12, 26, 0.5);
    }
    .oh-person__photo img {
      width: 100%; height: 100%; object-fit: cover; display: block;
      border-radius: 50%;
      /* navy gap between photo and gradient ring — reads as a medallion */
      border: 3px solid #081527;
    }
    .oh-person__body { position: relative; z-index: 1; }
    .oh-person__name {
      font-family: var(--font-display); font-size: 1.125rem; font-weight: 800;
      letter-spacing: -0.01em; color: #fff; margin: 0;
    }
    .oh-person__role {
      font-family: var(--font-body); font-size: 0.6875rem; font-weight: 700;
      letter-spacing: 0.14em; text-transform: uppercase;
      color: var(--brass-bright); margin: 6px 0 0;
    }
    .oh-person__org {
      font-family: var(--font-body); font-size: 0.875rem; font-weight: 500;
      line-height: 1.4; color: rgba(255, 255, 255, 0.65); margin: 3px 0 0;
    }

    /* Replay video — 16:9 embed */
    .oh-video {
      position: relative; aspect-ratio: 16 / 9; overflow: hidden;
      border-radius: var(--radius-xl); border: 1px solid var(--outline-variant);
      background: #000; box-shadow: var(--shadow);
    }
    .oh-video iframe { width: 100%; height: 100%; border: 0; display: block; }

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

    /* Booking card header — restyled to match the navy slab above it:
       navy gradient cap with the 4px gold gradient line (vs. the shared
       component's solid gold cap). Scoped to the sidebar only. */
    .oh-side .tlc-split__cap {
      position: relative;
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-top: 19px;
    }
    .oh-side .tlc-split__cap::before {
      content: ""; position: absolute; top: 0; left: 0; right: 0; height: 4px;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
    }
    .oh-side .tlc-split__cap-title { color: #fff; }

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
    }
    @media (max-width: 520px) {
      .oh-people { grid-template-columns: 1fr; }
    }

    /* --- Motion fallback --------------------------------------------- */
    @media (prefers-reduced-motion: reduce) {
      .oh-person { transition: none; }
      .oh-person:hover { transform: none; }
    }

    /* ================================================================
       ACCESS MODAL — ported from the live-events page (.ev-modal);
       opened by the sticky action bar CTA.
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

  <main class="site-main oh">

    <div class="oh-layout">
      <div class="container">
        <div class="oh-grid">

          <!-- ─────────── LEFT: content ─────────── -->
          <div class="oh-main">

            <!-- Header: thumbnail + meta + title -->
            <div class="oh-header" data-reveal="up">
              <div class="oh-thumb">
                <img src="<?php echo TLA_BASE; ?>/assets/live-events/past-events/Masterclass-Winning-AI-Game-0709-16x9.jpg" alt="Winning the AI Game masterclass — Highway + The Loan Atlas" loading="eager" />
              </div>
              <div class="oh-meta">
                <span class="oh-meta__item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Recorded on Jul 9, 2026
                </span>
              </div>
              <h1 class="oh-title">Winning the AI Game: How Top Loan Originators Are Using AI to Gain Massive Leverage</h1>
              <button type="button" class="tlc-btn oh-watch-btn" data-ev-modal>Watch This Masterclass</button>
            </div>

            <!-- About this masterclass -->
            <section data-reveal="up">
              <p class="oh-prose">Most originators feel it right now: working harder than ever, yet closing fewer loans. The tailwinds that carried this industry for forty years are gone, and rates and inventory are still outside your control. So what actually separates the originators taking ground in this market from the ones falling behind?</p>
              <p class="oh-prose">In this joint masterclass with The Loan Atlas and MBS Highway, Josh Mettle sat down with three originators who are winning in exactly these conditions to show you how they're using AI not as a novelty, but as a leverage system that closes more loans in less time. You'll see the specific tools, prompts, and workflows they've built, from getting recommended by AI search engines to training AI to sound exactly like you to deploying agents that run entire tasks with zero human involvement. This isn't theory about where AI is headed. It's a working playbook from originators who have already doubled their production with it.</p>
            </section>

            <!-- What you'll learn -->
            <section data-reveal="up">
              <h2 class="oh-h2">What You'll Learn</h2>
              <ul class="oh-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Why the "old model" originator (chasing leads, competing on rate, reacting to the market) is being left behind, and what the new AI-empowered model looks like in practice</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span>How Ryan McDonnell built an AI audit that gets his referral partners found on Google, ChatGPT, and AI search, and turned it into a relationship that makes him indispensable</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span>The five things you must do to make AI stop sounding artificial and start writing in your actual voice, from Scott DiGregorio and Edgardo Balentine</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span>How to think in workflows instead of tasks so AI performs like your best team member, not your worst</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span>A live look at an AI agent completing a full client report start to finish with no human involvement</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span>The five essential AI systems top producers are using to close twice the loans in half the time</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Where your production is leaking right now, and how to identify your next strategic move on the AI maturity ladder</span></li>
              </ul>
            </section>

            <!-- Pull-quote — shared testimonial block (no gold mark; inline quotes instead) -->
            <figure class="quote-card" data-reveal="up">
              <blockquote class="quote-card__quote">&ldquo;There&rsquo;s been a mental shift from &lsquo;AI is going to put me out of business&rsquo; to &lsquo;I&rsquo;m going to use AI to put other originators that aren&rsquo;t using AI out of business.&rsquo;&rdquo;</blockquote>
              <figcaption class="quote-card__attr">
                <div class="quote-card__name">Josh Mettle</div>
              </figcaption>
            </figure>

            <!-- Taught by -->
            <section data-reveal="up">
              <h2 class="oh-h2">Taught By</h2>
              <div class="oh-people">
                <div class="oh-person">
                  <div class="oh-person__photo"><img src="<?php echo TLA_BASE; ?>/assets/josh-mettle-headshot.png" alt="Josh Mettle" loading="lazy" /></div>
                  <div class="oh-person__body">
                    <p class="oh-person__name">Josh Mettle</p>
                    <p class="oh-person__role">Head of Faculty</p>
                    <p class="oh-person__org">The Loan Atlas</p>
                  </div>
                </div>
                <div class="oh-person">
                  <div class="oh-person__photo"><img src="<?php echo TLA_BASE; ?>/assets/ryan-mcdonnell-headshot.jpg" alt="Ryan McDonnell" loading="lazy" /></div>
                  <div class="oh-person__body">
                    <p class="oh-person__name">Ryan McDonnell</p>
                    <p class="oh-person__role">Branch Manager</p>
                    <p class="oh-person__org">Paramount Residential Mortgage Group</p>
                  </div>
                </div>
                <div class="oh-person">
                  <div class="oh-person__photo"><img src="<?php echo TLA_BASE; ?>/assets/edgardo-balentine-headshot.jpeg" alt="Edgardo Balentine" loading="lazy" /></div>
                  <div class="oh-person__body">
                    <p class="oh-person__name">Edgardo Balentine</p>
                    <p class="oh-person__role">Branch Manager</p>
                    <p class="oh-person__org">NEO Home Loans</p>
                  </div>
                </div>
                <div class="oh-person">
                  <div class="oh-person__photo"><img src="<?php echo TLA_BASE; ?>/assets/scott-digregorio-headshot.webp" alt="Scott DiGregorio" loading="lazy" /></div>
                  <div class="oh-person__body">
                    <p class="oh-person__name">Scott DiGregorio</p>
                    <p class="oh-person__role">Branch Manager</p>
                    <p class="oh-person__org">NEO Home Loans</p>
                  </div>
                </div>
              </div>
            </section>

            <!-- Bottom CTA — opens the access modal -->
            <div class="oh-cta-foot" data-reveal="up">
              <button type="button" class="tlc-btn oh-watch-btn" data-ev-modal>Watch This Masterclass</button>
            </div>

          </div>

          <!-- ─────────── RIGHT: sticky sidebar ─────────── -->
          <aside class="oh-side" data-reveal="up">

            <!-- Column header — frames the two cards as an either/or choice -->
            <div class="oh-side__head">
              <h2 class="oh-side__title">Get On-Demand Access to Every Masterclass</h2>
              <p class="oh-side__sub">Join The Loan Atlas to get immediate access, or schedule your free business assessment to see everything inside.</p>
            </div>

            <!-- Card 1 — Join The Loan Atlas — A1 Navy Slab callout (.tlc-navy) -->
            <div class="tlc-navy">
              <div class="tlc-navy__in">
                <h3 class="tlc-navy__title">Join The Loan Atlas</h3>
                <p class="tlc-navy__text">Every masterclass replay is included with membership. Here's everything you unlock inside The Loan Atlas:</p>
                <!-- Brass gradient definition for the bare checkmarks below -->
                <svg width="0" height="0" aria-hidden="true" style="position:absolute"><defs><linearGradient id="tlcGoldCheck" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#c9961c"/><stop offset="50%" stop-color="#eac25a"/><stop offset="100%" stop-color="#ffd56c"/></linearGradient></defs></svg>
                <ul class="tlc-list">
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>Live + on-demand access</strong> to every masterclass, office hours and AI Lab</span></li>
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>Seven live coaching calls</strong> every month</span></li>
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>200+ training modules</strong> across the 8 Disciplines of Loan Origination Mastery</span></li>
                  <li><svg class="tlc-chk tlc-chk--bare" viewBox="0 0 24 24" fill="none" stroke="url(#tlcGoldCheck)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg><span><strong>An all-star faculty</strong> with over $29 billion in collective loan funding</span></li>
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
                <h3 class="tlc-split__cap-title">Schedule Your Free Business Assessment</h3>
              </div>
              <div class="tlc-split__body" style="padding-bottom:0;">
                <p style="margin-bottom:14px;">Get a tour of The Loan Atlas and walk away with a clear read on what's actually holding your production back and what you can do to fix it.</p>
                <!-- LeadConnector booking widget — same as consultation.html -->
                <iframe src="https://api.leadconnectorhq.com/widget/booking/sNSShvRjEhTdDcR9MTmx"
                  class="oh-book__iframe" scrolling="no"
                  id="oh-booking-replay-ai-game" title="Schedule Booking"></iframe>
              </div>
            </div>

          </aside>

        </div>
      </div>
    </div>

  </main>

  <!-- ───────────────────── Access modal (opened by the action bar CTA) ───────────────────── -->
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
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/AI-Lab-Inside-Platinum-0717.png" alt="" loading="lazy" />
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-2026-Playbook-0716.png" alt="" loading="lazy" />
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Office-Hours-Kelly-Marsh-0715.png" alt="" loading="lazy" />
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Talk-to-Tim-0731.png" alt="" loading="lazy" />
            <img src="<?php echo TLA_BASE; ?>/assets/live-events/Masterclass-Mortgage-Success-Plan-0723.png" alt="" loading="lazy" />
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
    /* ── Access modal: every CTA with [data-ev-modal] opens it ── */
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
