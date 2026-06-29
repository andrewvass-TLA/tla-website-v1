<?php
/**
 * Body partial for /blog-post/ (TLA Full HTML template).
 * Generated from public/blog-post.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'The AI-Empowered Originator — The Loan Atlas (MOCKUP)';
$tla_description = '';
$tla_active      = '';
?>
  <style>
    /* --- Post header (dark band, featured image revealed at right) ------
       The featured image is dynamic, so PHP sets it via the inline custom
       property --blog-hero-img on this element. The left→right navy fade
       (matches the enterprise/corporate hero) keeps the left-aligned copy
       legible while revealing the image toward the right. Falls back to the
       flat navy gradient when no featured image is set. */
    .blog-post-head {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      color: var(--on-primary);
      /* Top padding clears the FIXED 72px nav (var(--header-h)) plus a gap.
         BOTTOM padding = the card's pull-up (--blog-overlap) PLUS a gap, so
         the card sits BELOW the byline with breathing room (not flush against
         it). The extra gap is the visible space between meta and card. */
      padding-block: calc(var(--header-h) + clamp(28px, 4vw, 56px)) calc(var(--blog-overlap) + clamp(28px, 4vw, 48px));
      position: relative; overflow: hidden;
    }
    /* Featured-image layer + left→right fade (only when --blog-hero-img set).
       The image is sized to the RIGHT HALF at its natural aspect ratio (not
       full-bleed cover), so the WHOLE image is visible rather than just the
       cropped right portion. The fade feathers its left edge into the navy. */
    .blog-post-head--has-image {
      background:
        linear-gradient(to right,
          rgba(2, 28, 54, 1)    0%,
          rgba(2, 28, 54, 1)    42%,
          rgba(2, 28, 54, 0.95) 68%,
          rgba(2, 28, 54, 0.78) 100%),
        var(--blog-hero-img) right center / cover no-repeat,
        linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
    }
    .blog-post-head::after {
      content: ""; position: absolute; inset: 0;
      background: radial-gradient(55% 70% at 80% 0%, rgba(201, 150, 28, 0.16), transparent 60%);
      pointer-events: none;
    }
    /* On small screens the image behind text hurts legibility — flat navy. */
    @media (max-width: 760px) {
      .blog-post-head--has-image {
        background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      }
    }
    /* Header content shares the shell geometry (max 75rem, gutter, centered),
       PLUS the content card's inner padding, so the hero copy aligns with the
       TEXT inside the white card — not the card's outer edge. The left inset
       is therefore gutter + card-padding, matched to .blog-post-card. */
    .blog-post-head__inner {
      position: relative; z-index: 1; max-width: 75rem; margin-inline: auto;
      padding-inline: calc(var(--gutter) + clamp(28px, 3.5vw, 56px));
    }
    .blog-post-head__inner > :first-child { margin: 0; }
    /* Breadcrumb: Articles and Resources › Category */
    .blog-crumbs {
      display: flex; flex-wrap: wrap; align-items: center; gap: 8px;
      font-family: var(--font-body); font-size: 0.8125rem; font-weight: 700;
      letter-spacing: 0.12em; text-transform: uppercase;
    }
    .blog-crumbs a { color: var(--brass-bright); transition: color 150ms ease; }
    .blog-crumbs a:hover { color: #fff; }
    .blog-crumbs__sep { color: rgba(255,255,255,0.4); }
    .blog-post-head h1 {
      font-family: var(--font-display);
      font-size: clamp(1.875rem, 1.2rem + 2.8vw, 3rem);
      line-height: 1.1; letter-spacing: -0.02em; font-weight: 700;
      color: #fff; margin: 14px 0 18px;
    }
    .blog-post-head__dek { margin: 0; font-size: 1.125rem; line-height: 1.55; color: rgba(255,255,255,0.82); max-width: 42rem; }
    .blog-post-head__meta {
      display: flex; align-items: center; flex-wrap: wrap; gap: 12px;
      margin-top: 26px; font-size: 0.9375rem; color: rgba(255,255,255,0.72);
    }
    .blog-post-head__avatar {
      width: 40px; height: 40px; border-radius: 50%;
      background: #fff; /* light circle so the logomark reads */
      display: inline-flex; align-items: center; justify-content: center;
    }
    .blog-post-head__avatar img { width: 64%; height: 64%; object-fit: contain; }
    .blog-post-head__byline strong { color: #fff; font-weight: 600; }
    .blog-post-head__meta-dot { width: 3px; height: 3px; border-radius: 50%; background: rgba(255,255,255,0.4); }

    /* --- Two-column shell (pulled up over the dark band) ------------- */
    /* Shared overlap distance: header bottom-padding == card pull-up. */
    body { --blog-overlap: clamp(64px, 9vw, 132px); }
    .blog-post-shell {
      max-width: 75rem; margin-inline: auto; padding-inline: var(--gutter);
      margin-top: calc(-1 * var(--blog-overlap)); position: relative; z-index: 2;
      padding-bottom: clamp(48px, 6vw, 88px);
    }
    .blog-post-grid {
      display: grid;
      grid-template-columns: minmax(0, 1fr) 20rem;
      gap: clamp(24px, 3vw, 44px);
      align-items: start;
    }
    /* Article media can never exceed the card width (prevents h-overflow). */
    .tla-article pre, .tla-article img, .tla-article table, .tla-article figure { max-width: 100%; }

    /* --- White content card ----------------------------------------- */
    .blog-post-card {
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-3xl);
      box-shadow: var(--shadow-xl);
      padding: clamp(28px, 3.5vw, 56px);
      min-width: 0; /* allow the grid column to shrink (prevents overflow that
                       made side padding look unequal on mobile) */
      overflow-wrap: break-word; /* long URLs/words wrap instead of pushing width */
    }

    /* --- Sidebar ---------------------------------------------------- */
    .blog-sidebar { position: sticky; top: 88px; display: flex; flex-direction: column; gap: 20px; }
    .blog-side-card {
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-2xl);
      overflow: hidden;
    }
    .blog-side-card__pad { padding: 20px 22px; }
    .blog-side-card__title {
      display: flex; align-items: center; gap: 8px;
      font-family: var(--font-display); font-size: 0.875rem; font-weight: 700;
      letter-spacing: 0.06em; text-transform: uppercase; color: var(--on-surface-variant);
      margin: 0 0 14px;
    }
    /* Header-image card */
    .blog-side-hero img { width: 100%; display: block; aspect-ratio: 16/9; object-fit: cover; }

    /* TOC */
    .blog-toc { list-style: none; margin: 0; padding: 0; }
    .blog-toc li { margin: 0; }
    .blog-toc a {
      display: block; padding: 7px 0 7px 14px;
      border-left: 2px solid var(--outline-variant);
      color: var(--on-surface-variant); font-size: 0.9375rem; line-height: 1.4;
      transition: color 120ms ease, border-color 120ms ease;
    }
    .blog-toc a:hover { color: var(--on-surface); }
    .blog-toc a.is-active {
      color: var(--on-surface); font-weight: 600;
      border-left-color: var(--brass);
    }

    /* Resources box */
    .blog-resource { display: flex; gap: 12px; padding: 12px 0; border-top: 1px solid var(--outline-variant); }
    .blog-resource:first-of-type { border-top: 0; padding-top: 0; }
    .blog-resource__thumb { width: 56px; height: 56px; flex-shrink: 0; border-radius: var(--radius-lg); overflow: hidden; background: var(--surface-container); }
    .blog-resource__thumb img { width: 100%; height: 100%; object-fit: cover; }
    .blog-resource__cat { font-size: 0.6875rem; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; color: var(--brass); }
    .blog-resource__title { font-family: var(--font-display); font-size: 0.9375rem; line-height: 1.3; font-weight: 600; color: var(--on-surface); margin: 3px 0 0; }
    .blog-resource__title a { color: inherit; }
    .blog-resource__title a:hover { color: var(--brass); }

    /* Mobile collapsible TOC (hidden on desktop) */
    .blog-toc-mobile { display: none; }

    /* --- THE ARTICLE TYPOGRAPHY (NerdWallet-style sizing/spacing) ---- */
    .tla-article { color: var(--on-surface); font-size: 1.0625rem; line-height: 1.7; }
    .tla-article > :first-child { margin-top: 0; }
    .tla-article > :last-child { margin-bottom: 0; }
    .tla-article p { margin: 0 0 1.25em; }

    /* H2 — plain bold black. */
    .tla-article h2 {
      font-family: var(--font-display); font-size: 1.5rem; line-height: 1.25;
      letter-spacing: -0.01em; font-weight: 800; color: var(--on-surface);
      margin: 1.9em 0 0.7em; scroll-margin-top: 88px;
    }
    /* H3 — subtle deep-gold gradient text. */
    .tla-article h3 {
      font-family: var(--font-display); font-size: 1.125rem; line-height: 1.35;
      font-weight: 700; margin: 1.6em 0 0.4em; scroll-margin-top: 88px;
      width: fit-content;
      background: linear-gradient(135deg, #a87a16 0%, #c9961c 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .tla-article a { color: var(--brass); text-decoration: underline; text-underline-offset: 2px; text-decoration-thickness: 1px; }
    .tla-article a:hover { color: var(--secondary); }
    .tla-article strong { font-weight: 700; color: var(--on-surface); }
    /* Restore list markers — styles.css resets `ul { list-style:none }` globally,
       so article lists need them re-enabled explicitly. */
    .tla-article ul { margin: 0 0 1.25em; padding-left: 1.4em; list-style: disc; }
    .tla-article ol { margin: 0 0 1.25em; padding-left: 1.4em; list-style: decimal; }
    .tla-article li + li { margin-top: 0.45em; }
    .tla-article li::marker { color: var(--brass); }
    .tla-article ol > li::marker { font-weight: 700; }
    .tla-article img { margin: 0 0 1.25em; border-radius: var(--radius-xl); box-shadow: var(--shadow); height: auto; }
    /* Smaller, indented, italic. No name/cite line (most quotes have none,
       which left an empty gap). */
    .tla-article blockquote {
      border-left: 4px solid var(--brass);
      padding: 2px 0 2px 22px; margin: 1.6em 0 1.6em 1.5em;
      font-family: var(--font-body); font-size: 1.0625rem; line-height: 1.6;
      font-weight: 400; font-style: italic; color: var(--on-surface-variant);
    }
    .tla-article blockquote p { margin: 0; }
    .tla-article blockquote cite { display: none; }
    .tla-article code { font-family: ui-monospace, SFMono-Regular, Menlo, monospace; font-size: 0.9em; background: var(--surface-container); padding: 2px 6px; border-radius: var(--radius); }
    .tla-article pre {
      margin: 0 0 1.25em; background: var(--primary); color: #e6edf6;
      padding: 20px 24px; border-radius: var(--radius-lg);
      font-size: 0.9375rem; line-height: 1.6;
      /* Wrap long lines (keeps indentation) so code never runs off-screen on
         mobile, instead of horizontal scroll. */
      white-space: pre-wrap; overflow-wrap: anywhere; word-break: break-word;
    }
    .tla-article pre code { background: none; padding: 0; }
    .tla-article hr { border: 0; border-top: 1px solid var(--outline-variant); margin: 2.2em 0; }
    .tla-article figure { margin: 0 0 1.25em; }
    .tla-article figure figcaption { font-size: 0.875rem; color: var(--on-surface-variant); text-align: center; margin-top: 10px; }
    .tla-article .tla-callout {
      margin: 1.6em 0; background: var(--surface-container-low);
      border: 1px solid var(--outline-variant); border-left: 4px solid var(--brass);
      border-radius: var(--radius-lg); padding: 18px 22px; font-size: 1.0625rem;
    }

    /* --- In-card footer: tags + author ------------------------------ */
    .blog-post-foot {
      display: flex; flex-wrap: wrap; gap: 16px; align-items: center; justify-content: space-between;
      border-top: 1px solid var(--outline-variant); margin-top: 36px; padding-top: 28px;
    }
    .blog-tags { display: flex; flex-wrap: wrap; gap: 8px; }
    .blog-tag { font-size: 0.8125rem; font-weight: 600; padding: 6px 14px; border-radius: var(--radius-full); background: var(--surface-container); color: var(--on-surface-variant); }

    /* Social share buttons */
    .blog-share { display: flex; align-items: center; gap: 8px; }
    .blog-share__label { font-size: 0.8125rem; font-weight: 600; color: var(--on-surface-variant); margin-right: 2px; }
    .blog-share__btn {
      width: 38px; height: 38px; flex-shrink: 0;
      display: inline-flex; align-items: center; justify-content: center;
      border-radius: var(--radius-full);
      background: var(--surface-container); color: var(--on-surface-variant);
      border: 1px solid transparent;
      transition: background 150ms ease, color 150ms ease, transform 80ms ease;
    }
    .blog-share__btn:hover { background: var(--primary); color: #fff; }
    .blog-share__btn:active { transform: translateY(1px); }
    .blog-share__btn .icon { width: 18px; height: 18px; }
    .blog-share__btn--copied { background: var(--success); color: #fff; }

    .blog-progress { position: fixed; top: 0; left: 0; height: 3px; width: 0; background: var(--brass); z-index: 200; transition: width 80ms linear; }

    /* --- Responsive: collapse sidebar below content ----------------- */
    @media (max-width: 920px) {
      .blog-post-grid { grid-template-columns: 1fr; }
      .blog-sidebar { position: static; }
      /* On mobile we move the header-image + resources BELOW the article,
         and show a collapsible TOC at the top of the card instead. */
      .blog-sidebar { order: 2; }
      .blog-sidebar .blog-side-toc { display: none; } /* desktop TOC hidden on mobile */
      .blog-sidebar .blog-side-hero { display: none; } /* header image hidden on mobile (no need at page bottom) */
      .blog-toc-mobile { display: block; margin: 0 0 24px; }
      .blog-toc-mobile > summary {
        cursor: pointer; list-style: none; font-family: var(--font-display); font-weight: 700;
        font-size: 0.9375rem; padding: 14px 18px; border: 1px solid var(--outline-variant);
        border-radius: var(--radius-lg); background: var(--surface-container-low);
        display: flex; align-items: center; justify-content: space-between;
      }
      .blog-toc-mobile > summary::-webkit-details-marker { display: none; }
      .blog-toc-mobile[open] > summary { border-radius: var(--radius-lg) var(--radius-lg) 0 0; }
      .blog-toc-mobile .blog-toc { border: 1px solid var(--outline-variant); border-top: 0; border-radius: 0 0 var(--radius-lg) var(--radius-lg); padding: 8px 18px; }
    }
  </style>


  <div class="blog-progress" id="blogProgress"></div>

  <?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <!-- ===== Post header (dark band) ===== -->
  <header class="blog-post-head blog-post-head--has-image" style="--blog-hero-img: url('<?php echo TLA_BASE; ?>/assets/TLA Blog Image.png');">
    <div class="blog-post-head__inner">
      <nav class="blog-crumbs" aria-label="Breadcrumb">
        <a href="/blog/">Articles and Resources</a>
        <span class="blog-crumbs__sep" aria-hidden="true">&rsaquo;</span>
        <a href="/blog-archive/">AI &amp; Systems</a>
      </nav>
      <h1>The AI-Empowered Originator: building a predictable pipeline in 2026</h1>
      <p class="blog-post-head__dek">The originators winning right now aren't working harder — they've built systems that compound. Here's the exact framework our top performers use.</p>
      <div class="blog-post-head__meta">
        <span class="blog-post-head__avatar"><img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="The Loan Atlas" /></span>
        <span class="blog-post-head__byline"><strong>Andrew Vass</strong></span>
        <span class="blog-post-head__meta-dot"></span>
        <span>June 18, 2026</span>
        <span class="blog-post-head__meta-dot"></span>
        <span>8 min read</span>
      </div>
    </div>
  </header>

  <!-- ===== Two-column shell (pulled up over the dark band) ===== -->
  <div class="blog-post-shell">
    <div class="blog-post-grid">

      <!-- LEFT: white content card -->
      <main class="blog-post-card">

        <!-- Mobile-only collapsible TOC -->
        <details class="blog-toc-mobile">
          <summary>On this page
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </summary>
          <ul class="blog-toc" id="tocMobile"></ul>
        </details>

        <article class="tla-article" id="articleBody">
          <p>Most loan originators are stuck in a cycle that feels productive but isn't: chasing leads, manually following up, and rebuilding their pipeline from scratch every single month. The top 1% have escaped that cycle — not by working more hours, but by building <strong>systems that compound</strong> while they sleep.</p>

          <p>In this article, I'll walk through the exact framework our highest-performing members use to turn AI into a referral engine that runs whether they're at the closing table or on vacation.</p>

          <h2>Why most pipelines are fragile</h2>
          <p>The typical originator's pipeline depends entirely on their personal effort. Stop prospecting for two weeks, and the pipeline dries up. This is the fundamental flaw: <strong>effort and output are locked together</strong>. A real business decouples them.</p>

          <blockquote>
            The goal isn't to originate more loans this month. It's to build a machine that originates loans every month — with or without you.
          </blockquote>

          <figure>
            <img src="<?php echo TLA_BASE; ?>/assets/talk-to-tim.png" alt="Talk to Tim — book a coaching session" />
            <figcaption>An inline image as it renders inside an article body.</figcaption>
          </figure>

          <h2>The three layers of a compounding system</h2>
          <p>Every durable origination business we've studied shares the same three-layer structure. Get these in the right order and growth becomes inevitable.</p>

          <h3>1. Capture — never lose a lead again</h3>
          <p>Before automation, you need a single place every lead lands. That means:</p>
          <ul>
            <li>One CRM as the source of truth — no leads living in your inbox or your head</li>
            <li>Instant lead routing so no inquiry waits more than five minutes</li>
            <li>A tagging system that lets AI segment your database intelligently</li>
          </ul>

          <h3>2. Nurture — let AI do the follow-up</h3>
          <p>This is where most of the leverage lives. A well-built nurture sequence stays in front of every past client and prospect <em>automatically</em>. Here's a simplified version of the logic we deploy:</p>
          <pre><code>IF borrower.closed_date > 12 months ago
  AND current_rate - market_rate >= 0.75%
THEN trigger "refi opportunity" sequence
  → personalized AI email + originator alert</code></pre>

          <div class="tla-callout">
            <strong>Try this:</strong> Audit your last 50 closed loans. How many have you contacted in the past 90 days? For most originators the answer is fewer than five — that gap is pure, recoverable revenue.
          </div>

          <h3>3. Convert — show up as the obvious choice</h3>
          <p>When a borrower is finally ready, the originator who has stayed top-of-mind wins — almost regardless of rate. AI handles the staying-in-touch; <strong>you handle the human moment</strong> that closes the deal.</p>

          <h2>Putting it together</h2>
          <p>None of these layers are exotic. What separates the top performers is that they've <em>actually built</em> all three and connected them. The result is a business where:</p>
          <ol>
            <li>Leads never fall through the cracks</li>
            <li>Follow-up happens whether or not you're working</li>
            <li>Your past database becomes your best lead source</li>
          </ol>

          <hr />

          <p>If you want the full build — the templates, the sequences, and the AI prompts our members use — that's exactly what we teach inside the Atlas Mastermind. <a href="/join/">See what's inside →</a></p>
        </article>

        <!-- Tags -->
        <div class="blog-post-foot">
          <div class="blog-tags">
            <a class="blog-tag" href="#">AI</a>
            <a class="blog-tag" href="#">Pipeline</a>
            <a class="blog-tag" href="#">Systems</a>
            <a class="blog-tag" href="#">Referrals</a>
          </div>
          <div class="blog-share" id="blogShare">
            <span class="blog-share__label">Share</span>
            <a class="blog-share__btn" data-share="linkedin" href="#" target="_blank" rel="noopener" aria-label="Share on LinkedIn">
              <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.55V9h3.57v11.45zM22.22 0H1.77C.8 0 0 .78 0 1.74v20.52C0 23.22.8 24 1.77 24h20.45c.98 0 1.78-.78 1.78-1.74V1.74C24 .78 23.2 0 22.22 0z"/></svg>
            </a>
            <a class="blog-share__btn" data-share="facebook" href="#" target="_blank" rel="noopener" aria-label="Share on Facebook">
              <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07c0 6.02 4.39 11.01 10.13 11.93v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.69.24 2.69.24v2.97h-1.52c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.08 24 18.09 24 12.07z"/></svg>
            </a>
            <a class="blog-share__btn" data-share="twitter" href="#" target="_blank" rel="noopener" aria-label="Share on X">
              <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
            <a class="blog-share__btn" data-share="email" href="#" aria-label="Share by email">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-10 5L2 7"></path></svg>
            </a>
            <button type="button" class="blog-share__btn" data-share="copy" aria-label="Copy link">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
            </button>
          </div>
        </div>
      </main>

      <!-- RIGHT: sticky sidebar -->
      <aside class="blog-sidebar">
        <!-- TOC (desktop) -->
        <div class="blog-side-card blog-side-toc">
          <div class="blog-side-card__pad">
            <p class="blog-side-card__title">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
              On this page
            </p>
            <ul class="blog-toc" id="tocDesktop"></ul>
          </div>
        </div>

        <!-- Additional resources -->
        <div class="blog-side-card">
          <div class="blog-side-card__pad">
            <p class="blog-side-card__title">Additional Resources</p>
            <div class="blog-resource">
              <a class="blog-resource__thumb" href="/blog-post/"><img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" style="object-fit:contain;background:var(--surface-container);padding:18%;" /></a>
              <div>
                <span class="blog-resource__cat">Lead Generation</span>
                <p class="blog-resource__title"><a href="/blog-post/">5 referral scripts that fill your calendar</a></p>
              </div>
            </div>
            <div class="blog-resource">
              <a class="blog-resource__thumb" href="/blog-post/"><img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" style="object-fit:contain;background:var(--surface-container);padding:18%;" /></a>
              <div>
                <span class="blog-resource__cat">Mindset</span>
                <p class="blog-resource__title"><a href="/blog-post/">The habits of $100M originators</a></p>
              </div>
            </div>
            <div class="blog-resource">
              <a class="blog-resource__thumb" href="/blog-post/"><img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" style="object-fit:contain;background:var(--surface-container);padding:18%;" /></a>
              <div>
                <span class="blog-resource__cat">Market Trends</span>
                <p class="blog-resource__title"><a href="/blog-post/">The 2026 rate environment &amp; your refi strategy</a></p>
              </div>
            </div>
          </div>
        </div>
      </aside>

    </div>
  </div>

  <?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script>
    /* Blog single-post behaviors. Ships as tla/js/blog.js after the port. */
    (function () {
      var article = document.getElementById('articleBody');
      if (!article) return;

      /* 1) Build the table of contents from H2s, give each an id, mirror into
            both the desktop and mobile TOC lists. */
      var heads = article.querySelectorAll('h2');
      var tocDesktop = document.getElementById('tocDesktop');
      var tocMobile = document.getElementById('tocMobile');
      var links = [];
      heads.forEach(function (h, i) {
        if (!h.id) {
          h.id = 'section-' + (i + 1) + '-' + h.textContent.trim().toLowerCase()
            .replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '').slice(0, 40);
        }
        ['d', 'm'].forEach(function (which) {
          var target = which === 'd' ? tocDesktop : tocMobile;
          if (!target) return;
          var li = document.createElement('li');
          var a = document.createElement('a');
          a.href = '#' + h.id;
          a.textContent = h.textContent;
          a.dataset.target = h.id;
          li.appendChild(a);
          target.appendChild(li);
          if (which === 'd') links.push(a);
        });
      });
      /* If no H2s, hide the TOC cards entirely. */
      if (!heads.length) {
        document.querySelectorAll('.blog-side-toc, .blog-toc-mobile').forEach(function (el) { el.style.display = 'none'; });
      }

      /* 2) Scrollspy — highlight the current section in the desktop TOC. */
      function onScroll() {
        var pos = window.scrollY + 120;
        var current = null;
        heads.forEach(function (h) { if (h.offsetTop <= pos) current = h.id; });
        links.forEach(function (a) { a.classList.toggle('is-active', a.dataset.target === current); });
      }
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();

      /* 3) Reading-progress bar. */
      var bar = document.getElementById('blogProgress');
      function progress() {
        var rect = article.getBoundingClientRect();
        var total = article.offsetHeight - window.innerHeight;
        var scrolled = Math.min(Math.max(-rect.top, 0), total);
        if (bar) bar.style.width = total > 0 ? (scrolled / total * 100) + '%' : '0%';
      }
      window.addEventListener('scroll', progress, { passive: true });
      window.addEventListener('resize', progress);
      progress();

      /* 4) Social share buttons — build URLs from the current page + title. */
      var share = document.getElementById('blogShare');
      if (share) {
        var url = encodeURIComponent(window.location.href);
        var title = encodeURIComponent(document.title.replace(/\s*[—|-]\s*The Loan Atlas.*$/i, '').trim());
        var targets = {
          linkedin: 'https://www.linkedin.com/sharing/share-offsite/?url=' + url,
          facebook: 'https://www.facebook.com/sharer/sharer.php?u=' + url,
          twitter:  'https://twitter.com/intent/tweet?url=' + url + '&text=' + title,
          email:    'mailto:?subject=' + title + '&body=' + url
        };
        share.querySelectorAll('[data-share]').forEach(function (el) {
          var kind = el.dataset.share;
          if (targets[kind]) { el.setAttribute('href', targets[kind]); }
        });
        var copyBtn = share.querySelector('[data-share="copy"]');
        if (copyBtn) {
          copyBtn.addEventListener('click', function () {
            var done = function () {
              copyBtn.classList.add('blog-share__btn--copied');
              setTimeout(function () { copyBtn.classList.remove('blog-share__btn--copied'); }, 1600);
            };
            if (navigator.clipboard && navigator.clipboard.writeText) {
              navigator.clipboard.writeText(window.location.href).then(done, done);
            } else {
              var t = document.createElement('textarea');
              t.value = window.location.href; document.body.appendChild(t); t.select();
              try { document.execCommand('copy'); } catch (e) {}
              document.body.removeChild(t); done();
            }
          });
        }
      }
    })();
  </script>
