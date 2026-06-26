<?php
/**
 * Body partial for /event-detail/ (TLA Full HTML template).
 * Generated from public/event-detail.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Event Replay — The Loan Atlas';
$tla_description = 'Watch the replay of this Loan Atlas masterclass or AI Lab on demand.';
$tla_active      = '';
?>
  <style>
    .evd-head {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      color: var(--on-primary);
      padding-block: calc(var(--header-h) + clamp(32px, 4vw, 56px)) clamp(40px, 5vw, 72px);
      position: relative; overflow: hidden;
    }
    .evd-head::after {
      content: ""; position: absolute; inset: 0;
      background: radial-gradient(55% 70% at 80% 0%, rgba(201, 150, 28, 0.16), transparent 60%);
      pointer-events: none;
    }
    .evd-head__inner { position: relative; z-index: 1; max-width: 60rem; }
    .evd-crumb {
      display: inline-flex; align-items: center; gap: 7px;
      font-family: var(--font-body); font-size: 0.8125rem; font-weight: 700;
      letter-spacing: 0.12em; text-transform: uppercase;
      color: var(--brass-bright); transition: color 150ms ease;
    }
    .evd-crumb:hover { color: #fff; }
    .evd-crumb svg { width: 14px; height: 14px; }
    .evd-tag {
      display: inline-flex; align-items: center; gap: 7px;
      font-family: var(--font-body); font-size: 0.75rem; font-weight: 700;
      letter-spacing: 0.06em; text-transform: uppercase;
      padding: 6px 12px; border-radius: var(--radius-full);
      background: rgba(234, 194, 90, 0.16); color: var(--brass-bright);
      border: 1px solid rgba(234, 194, 90, 0.35);
    }
    .evd-head h1 {
      font-family: var(--font-display);
      font-size: clamp(1.875rem, 1.2rem + 2.8vw, 3rem);
      line-height: 1.1; letter-spacing: -0.02em; font-weight: 800;
      color: #fff; margin: 16px 0 14px;
    }
    .evd-recorded {
      display: inline-flex; align-items: center; gap: 8px;
      font-family: var(--font-body); font-size: 0.9375rem; font-weight: 600;
      color: rgba(255, 255, 255, 0.78);
    }
    .evd-recorded svg { width: 16px; height: 16px; color: var(--brass-bright); }

    .evd-body { padding-block: clamp(40px, 5vw, 72px); }
    .evd-player {
      max-width: 60rem; margin: 0 auto clamp(28px, 3vw, 44px);
      aspect-ratio: 16 / 9; border-radius: var(--radius-3xl); overflow: hidden;
      position: relative;
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      border: 1px solid var(--outline-variant);
      display: grid; place-items: center;
    }
    .evd-player span {
      width: 72px; height: 72px; border-radius: 50%; display: grid; place-items: center;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      box-shadow: 0 10px 30px rgba(201, 150, 28, 0.45);
    }
    .evd-player svg { width: 26px; height: 26px; color: var(--primary); margin-left: 3px; }
    .evd-prose { max-width: 44rem; margin: 0 auto; }
    .evd-prose p {
      font-family: var(--font-body); font-size: 1.0625rem; line-height: 1.7;
      color: var(--on-surface-variant); margin: 0 0 18px;
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main">

    <!-- PLACEHOLDER detail page — full design TBD -->
    <header class="evd-head">
      <div class="container">
        <div class="evd-head__inner">
          <a class="evd-crumb" href="/live-events/">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Back to Events
          </a>
          <div style="margin-top: 18px;"><span class="evd-tag">Masterclass</span></div>
          <h1>Structuring Jumbo Loans in 2026</h1>
          <span class="evd-recorded">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            Recorded on Sep 18, 2026
          </span>
        </div>
      </div>
    </header>

    <section class="evd-body">
      <div class="container">
        <div class="evd-player" aria-label="Replay placeholder">
          <span aria-hidden="true"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></span>
        </div>
        <div class="evd-prose">
          <p><strong>This is a placeholder event detail page.</strong> The full per-event design — replay player, agenda, resources and registration — will be built later.</p>
          <p>Placeholder body copy describing the session goes here. Reserve requirements, alternative documentation tactics, and how to win high-net-worth clients in the current rate environment.</p>
          <p>For now, this page exists so the clickable cards on the Live Events page have a real destination and the click-through flow can be tested end to end.</p>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

