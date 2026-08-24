<?php
/**
 * Body partial for /plp-draft/ (TLA Full HTML template).
 * Generated from public/plp-draft.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'The Perfect Loan Process — Free Download | The Loan Atlas';
$tla_description = 'Download the Perfect Loan Process — the free 72-step framework behind the most consistent, referral-generating loan originators in the country. No credit card. No sales call.';
$tla_active      = '';
?>
  <style>
    .plp {
      /* page-local identity mapped onto the brand palette
         (formerly an emerald scheme; reverted to house navy + brass) */
      --plp-green: #c9961c;          /* brass — primary accent, icons, rules */
      --plp-green-deep: #052849;     /* deep navy — hovers, dark text on tint */
      --plp-green-ink: #021c36;      /* Midnight Slate — headings */
      --plp-mint: #eceef0;           /* surface-container — section tints */
      --plp-mint-panel: #e6e8ea;     /* surface-container-high — hero/featured panels */
      --plp-navy: #021c36;           /* brand navy — dark band + body ink */
      --plp-navy-soft: #0a2845;
      --plp-line: #c6c6cd;           /* outline-variant — hairline on light */
      --plp-card: #ffffff;           /* white card on tinted sections */
      --plp-ink: #191c1e;            /* primary text (on-surface) */
      --plp-muted: #45464d;          /* secondary text (on-surface-variant) */
      --plp-r-panel: 32px;
      --plp-r-card: 20px;
    }

    .plp { background: #ffffff; color: var(--plp-ink); }
    .plp .container { max-width: 1180px; }

    /* ── shared type ── */
    .plp-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      font-family: var(--font-body);
      font-size: 0.875rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--plp-green);
    }
    .plp-eyebrow::before { content: ""; width: 32px; height: 2px; background: var(--plp-green); border-radius: 2px; }
    .plp-eyebrow--center { justify-content: center; }
    /* --on-mint kept as a hook but now brass like every other eyebrow on the site */

    .plp-h1 {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.25rem, 1.5rem + 3.2vw, 3.5rem);
      line-height: 1.05;
      letter-spacing: -0.03em;
      color: var(--plp-green-ink);
      margin: 16px 0 0;
    }
    .plp-h2 {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.75rem, 1.25rem + 2vw, 2.625rem);
      line-height: 1.1;
      letter-spacing: -0.025em;
      margin: 0;
    }
    .plp-h2--center { text-align: center; }
    .plp-sub {
      font-family: var(--font-body);
      font-size: clamp(1rem, 0.96rem + 0.3vw, 1.1875rem);
      line-height: 1.6;
      color: var(--plp-muted);
      margin: 16px 0 0;
    }
    .plp-sub--center { text-align: center; margin-inline: auto; max-width: 42rem; }

    /* Buttons use the shared house classes (.btn / .btn--gold / .btn--primary /
       .btn--ghost / .btn--ghost-on-dark / .btn--lg) from styles.css so they
       match the rest of the site exactly. No page-local button styles here. */

    /* ── section rhythm ── */
    .plp-section { padding-block: clamp(56px, 7vw, 104px); position: relative; }
    .plp-section--mint { background: var(--plp-mint); }
    .plp-shell { padding-inline: clamp(12px, 2vw, 24px); }

    /* ── editorial prose block (PROBLEM / FOUNDATION narrative) ──
          heading + eyebrow stay centered; the body is one constrained,
          left-aligned column at a comfortable reading measure. */
    .plp-prose { max-width: 42rem; margin-inline: auto; }
    .plp-prose__head { text-align: center; }
    .plp-prose__body { margin-top: clamp(24px, 3vw, 36px); }
    .plp-prose__body p {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 1rem + 0.35vw, 1.25rem);
      line-height: 1.7;
      color: var(--plp-muted);
      margin: 20px 0 0;
    }
    .plp-prose__body p:first-child { margin-top: 0; }
    .plp-prose__body p strong { color: var(--plp-ink); font-weight: 700; }
    .plp-prose__body p em { font-style: italic; }
    /* the closing payoff line — a bold, brass-keyed standout */
    .plp-prose__payoff {
      margin-top: clamp(28px, 3.5vw, 40px) !important;
      padding: 20px 26px;
      background: var(--plp-mint);
      border-left: 3px solid var(--plp-green);
      border-radius: var(--plp-r-card);
      font-family: var(--font-display) !important;
      font-size: clamp(1.25rem, 1.1rem + 0.7vw, 1.625rem) !important;
      font-weight: 700 !important;
      line-height: 1.3 !important;
      color: var(--plp-ink) !important;
    }
    .plp-prose__payoff strong { color: var(--plp-green-ink) !important; }

    /* ── THE DIFFERENCE — two-column: copy left, image right ── */
    .plp-problem { display: grid; gap: clamp(32px, 5vw, 64px); align-items: center; }
    @media (min-width: 900px) { .plp-problem { grid-template-columns: 1.05fr 0.95fr; } }
    .plp-problem__body { margin-top: clamp(20px, 2.5vw, 28px); }
    .plp-problem__body p {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 1rem + 0.35vw, 1.1875rem);
      line-height: 1.7;
      color: var(--plp-muted);
      margin: 18px 0 0;
    }
    .plp-problem__body p strong { color: var(--plp-ink); font-weight: 700; }
    /* reuse the payoff treatment from .plp-prose__payoff */
    .plp-problem__body .plp-prose__payoff { margin-top: clamp(24px, 3vw, 32px) !important; }
    /* image placeholder (swap for a real <img> later) */
    .plp-imgph {
      position: relative;
      aspect-ratio: 4 / 5;
      border-radius: var(--plp-r-panel);
      background:
        repeating-linear-gradient(135deg, transparent 0 22px, rgba(2,28,54,0.025) 22px 44px),
        var(--plp-mint);
      border: 1.5px dashed var(--plp-line);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px;
      color: var(--plp-muted);
      text-align: center;
    }
    .plp-imgph svg { width: 46px; height: 46px; stroke: var(--plp-green); fill: none; stroke-width: 1.6; stroke-linecap: round; stroke-linejoin: round; opacity: 0.8; }
    .plp-imgph span { font-family: var(--font-body); font-size: 0.8125rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; }

    /* ═══════════════════════ HERO (full-bleed) ═══════════════════════ */
    .plp-hero {
      position: relative;
      overflow: hidden;
      background: var(--plp-mint-panel);
    }
    /* decorative thin orbit line echoing the reference, on the right */
    .plp-hero::before {
      content: "";
      position: absolute;
      right: -6%;
      top: -22%;
      width: 56%;
      height: 150%;
      border-radius: 50%;
      border: 1.5px solid rgba(2, 28, 54, 0.18);
      pointer-events: none;
      z-index: 0;
    }
    .plp-hero__grid {
      position: relative;
      z-index: 1;
      display: grid;
      gap: clamp(28px, 4vw, 48px);
      align-items: center;
      min-height: clamp(440px, 52vw, 620px);
      padding-top: clamp(40px, 5vw, 80px);
    }
    /* copy gets bottom padding; the media column bleeds to the very bottom */
    .plp-hero__copy { padding-bottom: clamp(96px, 9vw, 150px); }
    @media (min-width: 900px) { .plp-hero__grid { grid-template-columns: 1.05fr 0.95fr; } }

    .plp-hero__lede { font-size: clamp(1rem, 0.95rem + 0.4vw, 1.1875rem); line-height: 1.55; color: var(--plp-green-deep); margin: 18px 0 0; max-width: 30rem; }
    .plp-hero__actions { margin-top: 28px; display: flex; flex-wrap: wrap; gap: 12px; }
    .plp-hero__stats { margin: 30px 0 0; display: flex; flex-wrap: wrap; gap: 28px 44px; }
    .plp-stat__num { font-family: var(--font-display); font-weight: 800; font-size: clamp(1.5rem, 1.2rem + 1vw, 2rem); color: var(--plp-green-ink); line-height: 1; letter-spacing: -0.02em; font-variant-numeric: tabular-nums; }
    .plp-stat__label { font-size: 0.9375rem; color: var(--plp-green-deep); margin-top: 4px; }
    .plp-hero__note { margin: 18px 0 0; font-size: 0.84rem; font-style: italic; color: rgba(2, 28, 54, 0.62); }

    /* ── Hero composite: tinted disc behind, the PLP cover centered on top,
          floating card in front ── */
    .plp-hero__stage {
      position: relative;
      align-self: stretch;
      min-height: clamp(360px, 44vw, 600px);
    }
    /* the soft tinted disc sitting behind everything */
    .plp-hero__disc {
      position: absolute;
      right: 4%;
      top: 50%;
      transform: translateY(-50%);
      width: min(118%, 560px);
      aspect-ratio: 1;
      border-radius: 50%;
      background: radial-gradient(circle at 50% 45%, #dfe3e7 0%, #cdd2d8 72%, #c1c7ce 100%);
      z-index: 0;
    }
    /* PLP-cover — the angled book mockup, centered on the disc. The art already
       carries its own soft shadow, so only a light extra drop-shadow is added to
       seat it on the tinted disc. */
    .plp-hero__cover {
      position: absolute;
      z-index: 2;
      left: 56%;
      top: 46%;
      transform: translate(-50%, -50%);
      width: min(80%, 410px);
      height: auto;
      filter: drop-shadow(0 26px 44px rgba(2, 28, 54, 0.26));
      pointer-events: none;
    }
    /* floating mini-card stays in front of the cover */
    .plp-minicard {
      position: absolute;
      z-index: 3;
      left: -4%;
      bottom: 24%;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 20px 44px -18px rgba(2, 28, 54, 0.5);
      padding: 14px 16px;
      width: min(72%, 270px);
    }
    .plp-minicard__head { display: flex; align-items: center; gap: 10px; }
    .plp-minicard__badge { width: 34px; height: 34px; border-radius: 9px; background: var(--plp-green); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .plp-minicard__badge svg { width: 19px; height: 19px; stroke: #fff; fill: none; stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round; }
    .plp-minicard__title { font-family: var(--font-display); font-weight: 700; font-size: 0.9375rem; color: var(--plp-ink); }
    .plp-minicard__sub { font-size: 0.78rem; color: var(--plp-muted); }
    .plp-minicard__rows { margin: 12px 0 0; display: grid; gap: 7px; }
    .plp-minicard__row { display: flex; align-items: center; gap: 8px; font-size: 0.8rem; color: var(--plp-muted); }
    .plp-minicard__row svg { width: 15px; height: 15px; stroke: var(--plp-green); fill: none; stroke-width: 2.4; stroke-linecap: round; stroke-linejoin: round; flex-shrink: 0; }

    /* Hero composite — below the 2-col breakpoint, give the stage a fixed
       height so the cover + disc still sit correctly under the stacked copy. */
    @media (max-width: 899px) {
      .plp-hero__grid { min-height: 0; }
      .plp-hero__copy { padding-bottom: 0; }
      .plp-hero__stage { height: clamp(340px, 78vw, 460px); margin-top: 8px; }
      .plp-hero__cover { width: min(64%, 300px); }
      .plp-minicard { left: 0; bottom: 6%; }
    }
    @media (max-width: 520px) {
      .plp-minicard { width: min(86%, 250px); }
    }

    /* ═══════════════ WHAT IT INSTALLS (split) ═══════════════ */
    .plp-split { display: grid; gap: clamp(32px, 5vw, 64px); align-items: center; }
    @media (min-width: 900px) { .plp-split { grid-template-columns: 1fr 1fr; } }
    .plp-split--rev .plp-split__media { order: 2; }

    .plp-mediablock { position: relative; }
    .plp-mediablock__bg {
      position: absolute;
      left: 6%;
      bottom: -18px;
      width: 88%;
      height: 70%;
      background: var(--plp-mint-panel);
      border-radius: var(--plp-r-card);
      z-index: 0;
    }
    .plp-mediablock__img {
      position: relative;
      z-index: 1;
      width: 100%;
      height: auto;
      border-radius: var(--plp-r-card);
      box-shadow: 0 28px 56px -22px rgba(2, 28, 54, 0.4);
    }
    /* floating badge over a media block */
    .plp-badge {
      position: absolute;
      z-index: 2;
      left: -4%;
      bottom: 14%;
      background: var(--plp-green-ink);
      color: #fff;
      border-radius: 14px;
      padding: 12px 18px;
      display: flex;
      align-items: baseline;
      gap: 8px;
      box-shadow: 0 18px 40px -16px rgba(2, 28, 54, 0.6);
    }
    .plp-badge b { font-family: var(--font-display); font-weight: 800; font-size: 1.5rem; letter-spacing: -0.02em; }
    .plp-badge span { font-size: 0.84rem; opacity: 0.85; }

    .plp-featlist { list-style: none; margin: 26px 0 0; padding: 0; display: grid; gap: 14px; }
    .plp-featlist li {
      display: grid;
      grid-template-columns: 46px 1fr;
      gap: 16px;
      align-items: start;
      padding: 16px 0;
      border-top: 1px solid var(--plp-line);
    }
    .plp-featlist li:first-child { border-top: none; }
    .plp-feat__icon { width: 46px; height: 46px; border-radius: 12px; background: var(--plp-mint); display: flex; align-items: center; justify-content: center; }
    .plp-feat__icon svg { width: 22px; height: 22px; stroke: var(--plp-green); fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
    .plp-feat__title { font-family: var(--font-display); font-weight: 700; font-size: 1.0625rem; color: var(--plp-ink); }
    .plp-feat__desc { font-size: 0.9375rem; line-height: 1.5; color: var(--plp-muted); margin-top: 3px; }

    /* ═══════════════ WHAT IT IS — installs card grid ═══════════════ */
    .plp-installs__intro { max-width: 46rem; margin: 16px auto 0; text-align: center; }
    .plp-installs__lead {
      text-align: center;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.0625rem;
      color: var(--plp-ink);
      margin: clamp(40px, 5vw, 60px) 0 0;
    }
    .plp-installs__grid {
      margin-top: clamp(20px, 2.5vw, 28px);
      display: grid;
      gap: 18px;
    }
    @media (min-width: 640px) { .plp-installs__grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 980px) { .plp-installs__grid { grid-template-columns: repeat(3, 1fr); } }
    .plp-icard {
      background: var(--plp-card);
      border: 1px solid var(--plp-line);
      border-radius: var(--plp-r-card);
      padding: clamp(22px, 2.4vw, 30px);
      transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    }
    .plp-icard:hover {
      transform: translateY(-3px);
      box-shadow: 0 20px 44px -24px rgba(2, 28, 54, 0.4);
      border-color: rgba(2, 28, 54, 0.18);
    }
    .plp-icard__icon {
      width: 48px; height: 48px; border-radius: 14px;
      background: var(--plp-mint);
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 18px;
    }
    .plp-icard__icon svg { width: 24px; height: 24px; stroke: var(--plp-green); fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
    .plp-icard__title { font-family: var(--font-display); font-weight: 700; font-size: 1.0625rem; line-height: 1.4; color: var(--plp-ink); }
    .plp-installs__foot { max-width: 44rem; margin: clamp(36px, 4vw, 52px) auto 0; text-align: center; }
    .plp-installs__cta { margin-top: 28px; text-align: center; }

    /* ═══════════════ WHO BUILT IT (founder split) ═══════════════ */
    .plp-founder__photo { position: relative; }
    .plp-founder__photo .plp-mediablock__bg { background: var(--plp-mint-panel); }
    .plp-founder__name { font-family: var(--font-display); font-weight: 800; font-size: 1.125rem; color: var(--plp-ink); margin-top: 18px; }
    .plp-founder__title { font-size: 0.9375rem; color: var(--plp-muted); margin-top: 2px; }
    .plp-pullquote {
      margin: 26px 0 0;
      padding: 22px 26px;
      background: var(--plp-mint);
      border-left: 3px solid var(--plp-green);
      border-radius: var(--plp-r-card);
    }
    .plp-pullquote p {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: clamp(1.125rem, 1rem + 0.5vw, 1.375rem);
      line-height: 1.4;
      font-style: italic;
      color: var(--plp-ink);
      margin: 0;
    }
    .plp-pullquote cite { display: block; margin-top: 12px; font-style: normal; font-weight: 700; font-size: 0.78rem; letter-spacing: 0.08em; text-transform: uppercase; color: var(--plp-green-deep); }

    /* ═══════════════ NAVY BAND wrapping a green panel ═══════════════ */
    .plp-darkband { background: var(--plp-navy); padding-block: clamp(40px, 5vw, 72px); }
    .plp-greenpanel {
      position: relative;
      overflow: hidden;
      background: var(--plp-mint-panel);
      border-radius: var(--plp-r-panel);
      padding: clamp(36px, 5vw, 64px);
      text-align: center;
    }
    .plp-greenpanel::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 38%;
      width: 130%;
      height: 130%;
      transform: translateX(-50%);
      border-radius: 50%;
      border: 1.5px solid rgba(2, 28, 54, 0.16);
      pointer-events: none;
    }
    .plp-greenpanel > * { position: relative; z-index: 1; }
    .plp-greenpanel .plp-h2 { color: var(--plp-green-ink); }
    .plp-greenpanel__sub { font-size: 1.0625rem; line-height: 1.55; color: var(--plp-green-deep); margin: 14px auto 0; max-width: 40rem; }
    .plp-greenpanel__cta { margin-top: 24px; }

    .plp-roles { margin-top: clamp(32px, 4vw, 44px); display: grid; gap: 16px; }
    @media (min-width: 680px) { .plp-roles { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 1000px) { .plp-roles { grid-template-columns: repeat(4, 1fr); } }
    .plp-role {
      background: #fff;
      border-radius: 16px;
      padding: 22px 20px;
      text-align: left;
      box-shadow: 0 18px 40px -22px rgba(2, 28, 54, 0.35);
    }
    .plp-role__tag { display: inline-block; font-size: 0.7rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: var(--plp-green-deep); background: var(--plp-mint); border-radius: 999px; padding: 4px 11px; }
    .plp-role__name { font-family: var(--font-display); font-weight: 700; font-size: 1.0625rem; color: var(--plp-ink); margin: 12px 0 6px; }
    .plp-role__desc { font-size: 0.875rem; line-height: 1.5; color: var(--plp-muted); }

    /* ═══════════════ FLOATING FEATURE ROW (overlaps the hero) ═══════════════ */
    /* The band itself carries no top padding — the card row is pulled up with a
       negative margin so it straddles the hero's bottom edge. */
    .plp-floatfeat { position: relative; z-index: 3; padding-block: 0 clamp(40px, 5vw, 72px); }
    .plp-floatfeat__grid {
      margin-top: clamp(-56px, -5vw, -88px);
      display: grid;
      gap: 18px;
    }
    @media (min-width: 640px)  { .plp-floatfeat__grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 1060px) { .plp-floatfeat__grid { grid-template-columns: repeat(4, 1fr); } }
    .plp-ffcard {
      background: #fff;
      border: 1px solid var(--plp-line);
      border-radius: var(--plp-r-card);
      padding: clamp(24px, 2.4vw, 32px) clamp(20px, 2vw, 26px);
      text-align: center;
      box-shadow: 0 26px 54px -26px rgba(2, 28, 54, 0.34);
      transition: transform 220ms ease, box-shadow 220ms ease;
    }
    @media (hover: hover) {
      .plp-ffcard:hover { transform: translateY(-4px); box-shadow: 0 34px 64px -26px rgba(2, 28, 54, 0.42); }
    }
    .plp-ffcard__icon { width: 56px; height: 56px; border-radius: 50%; background: var(--plp-mint-panel); display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; }
    .plp-ffcard__icon svg { width: 25px; height: 25px; stroke: var(--plp-green-deep); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
    .plp-ffcard__title { font-family: var(--font-display); font-weight: 700; font-size: 1.0625rem; color: var(--plp-ink); }
    .plp-ffcard__desc { font-size: 0.875rem; line-height: 1.55; color: var(--plp-muted); margin-top: 8px; }
    /* Below the 2-col breakpoint the row no longer overlaps — stacked cards
       hanging off the hero would cover the copy. */
    @media (max-width: 639px) {
      .plp-floatfeat__grid { margin-top: clamp(-40px, -7vw, -56px); }
    }

    /* ═══════════════ PROOF (full-width testimonials + bleeding image) ═══════════════ */
    /* original testimonial formatting — brass left-border quotes, stacked */
    .plp-quotes { margin: 0; display: grid; gap: 18px; }
    @media (min-width: 820px) { .plp-quotes { grid-template-columns: repeat(3, 1fr); } }
    .plp-quote {
      border-left: 3px solid var(--plp-green);
      padding: 4px 0 4px 18px;
    }
    .plp-quote p { font-size: 1.0625rem; line-height: 1.5; color: var(--plp-ink); margin: 0; font-style: italic; }
    .plp-quote cite { display: block; margin-top: 8px; font-style: normal; font-weight: 700; font-size: 0.78rem; letter-spacing: 0.08em; text-transform: uppercase; color: var(--plp-green-deep); }
    /* ═══════════════ CLOSING CTA ═══════════════ */
    .plp-close { padding-block: clamp(40px, 5vw, 72px); }
    .plp-close__panel {
      position: relative;
      overflow: hidden;
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      border-radius: var(--plp-r-panel);
      padding: clamp(40px, 5vw, 80px);
      text-align: center;
      color: #fff;
    }
    .plp-close__panel::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 30%;
      width: 120%;
      height: 140%;
      transform: translateX(-50%);
      border-radius: 50%;
      border: 1.5px solid rgba(255, 255, 255, 0.18);
      pointer-events: none;
    }
    .plp-close__panel > * { position: relative; z-index: 1; }
    .plp-close__panel .plp-h2 { color: #fff; }
    .plp-close__sub { font-size: 1.0625rem; line-height: 1.55; color: rgba(255, 255, 255, 0.86); margin: 14px auto 0; max-width: 38rem; }
    .plp-close__actions { margin-top: 28px; display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; }

    /* ═══════════════ LEAD-CAPTURE MODAL (navy) ═══════════════ */
    .plp-modal {
      border: none;
      background: transparent;
      padding: 0;
      width: min(720px, calc(100vw - 32px));
      max-width: 720px;
      max-height: calc(100dvh - 32px);
      margin: auto;
      overflow: visible;
    }
    .plp-modal::backdrop { background: rgba(2, 28, 54, 0.62); backdrop-filter: blur(4px); }
    .plp-modal:not([open]) { display: none; }
    .plp-modal__close {
      position: absolute;
      top: 14px;
      right: 14px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.1);
      color: #eac25a;
      cursor: pointer;
      transition: background 0.15s ease, color 0.15s ease, border-color 0.15s ease;
    }
    .plp-modal__close:hover { background: rgba(255, 255, 255, 0.2); border-color: rgba(255, 255, 255, 0.5); color: #fff; }
    .plp-modal__close svg { width: 20px; height: 20px; fill: none; stroke: currentColor; stroke-width: 2; stroke-linecap: round; }
    .plp-formcard {
      position: relative;
      border-radius: var(--plp-r-panel);
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      box-shadow: 0 40px 90px -36px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.12);
      padding: clamp(28px, 4vw, 48px);
      max-height: calc(100dvh - 32px);
      overflow-y: auto;
    }
    .plp-formcard__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.5rem, 1.15rem + 1.6vw, 2.125rem);
      line-height: 1.15;
      letter-spacing: -0.02em;
      text-align: center;
      color: #fff;
      margin: 0 auto clamp(20px, 3vw, 30px);
      max-width: 22em;
    }
    .plp-formcard__embed { width: 100%; max-width: 680px; margin-inline: auto; border-radius: 16px; overflow: hidden; background: #fff; }
    .plp-formcard__embed iframe { display: block; width: 100%; height: 400px; }
    @media (max-width: 700px) { .plp-formcard__embed iframe { height: 660px; } }

    /* ═══════════════ STICKY MOBILE CTA ═══════════════ */
    .plp-sticky {
      position: fixed;
      left: 0; right: 0; bottom: 0;
      z-index: 60;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
      padding: 12px 16px calc(12px + env(safe-area-inset-bottom));
      background: var(--plp-green-ink);
      border-top: 1px solid rgba(255, 255, 255, 0.14);
      box-shadow: 0 -8px 28px rgba(0, 0, 0, 0.28);
    }
    .plp-sticky__label { font-family: var(--font-display); font-weight: 700; font-size: 0.9375rem; line-height: 1.2; color: #fff; flex: 1; min-width: 0; }
    .plp-sticky .btn { flex-shrink: 0; white-space: nowrap; }
    @media (min-width: 768px) { .plp-sticky { display: none; } }
    @media (max-width: 767px) { .plp-close { padding-bottom: calc(clamp(40px, 5vw, 72px) + 76px); } }

    /* ═══════════════ reduced motion ═══════════════ */
    @media (prefers-reduced-motion: reduce) {
      .plp [data-reveal], .plp [data-hero-step] { opacity: 1 !important; transform: none !important; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main plp">

    <!-- ═══════════════════════ HERO (full-bleed) ═══════════════════════ -->
    <section class="plp-hero" aria-labelledby="plp-hero-heading">
      <div class="container">
        <div class="plp-hero__grid">
          <!-- copy -->
          <div class="plp-hero__copy">
            <span class="plp-eyebrow plp-eyebrow--on-mint" data-hero-step>The Perfect Loan Process</span>
              <h1 id="plp-hero-heading" class="plp-h1" data-hero-step>
                Create a 5-star client experience that wins you repeat business
              </h1>
              <p class="plp-hero__lede" data-hero-step>
                Download the 72-step framework behind the most consistent,
                referral-generating originators in the country
              </p>
              <div class="plp-hero__actions" data-hero-step>
                <a class="btn btn--gold btn--lg" href="#get-the-plp" data-scroll-to-form>Start Building Your Perfect Loan Process →</a>
              </div>
              <div class="plp-hero__stats" data-hero-step>
                <div>
                  <div class="plp-stat__num" data-countup="72" data-countup-suffix="">72</div>
                  <div class="plp-stat__label">defined steps</div>
                </div>
                <div>
                  <div class="plp-stat__num" data-countup="4" data-countup-suffix="">4</div>
                  <div class="plp-stat__label">team roles</div>
                </div>
                <div>
                  <div class="plp-stat__num">1</div>
                  <div class="plp-stat__label">standard for every file</div>
                </div>
              </div>
              <p class="plp-hero__note" data-hero-step>No credit card. No sales call. Just the framework.</p>
            </div>

            <!-- Composite: tinted disc behind → the PLP cover angled on top
                 → floating mini-card in front -->
            <div class="plp-hero__stage" data-hero-step aria-hidden="true">
              <span class="plp-hero__disc"></span>
              <img class="plp-hero__cover" src="<?php echo TLA_BASE; ?>/assets/PLP-cover.webp" alt="" loading="eager" />
              <div class="plp-minicard">
                <div class="plp-minicard__head">
                  <span class="plp-minicard__badge">
                    <svg viewBox="0 0 24 24"><path d="M4 4h11l5 5v11a0 0 0 0 1 0 0H4z" /><polyline points="9 13 11 15 15 11" /></svg>
                  </span>
                  <span>
                    <span class="plp-minicard__title">The Perfect Loan Process</span><br />
                    <span class="plp-minicard__sub">72-step operating system</span>
                  </span>
                </div>
                <div class="plp-minicard__rows">
                  <div class="plp-minicard__row"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12" /></svg>Inquiry → pre-approval scripts</div>
                  <div class="plp-minicard__row"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12" /></svg>Clean role-to-role handoffs</div>
                  <div class="plp-minicard__row"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12" /></svg>Post-closing referral sequence</div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- ──────────── LEAD-CAPTURE MODAL ──────────── -->
    <dialog class="plp-modal" id="get-the-plp" aria-labelledby="plp-modal-title">
      <div class="plp-formcard">
        <button type="button" class="plp-modal__close" aria-label="Close" data-close-form>
          <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" /></svg>
        </button>
        <h2 id="plp-modal-title" class="plp-formcard__title">Start Building Your Perfect Loan Process</h2>
        <!-- LeadConnector (GoHighLevel) inline form embed. form_embed.js (bottom of
             this file) reads the data-* attrs and auto-resizes the iframe.
             TODO: swap PLP_FORM_ID for the real GoHighLevel form-id before shipping. -->
        <div class="plp-formcard__embed">
          <iframe
            src="https://api.leadconnectorhq.com/widget/form/PLP_FORM_ID"
            style="width:100%;height:100%;border:none;border-radius:0px"
            id="inline-PLP_FORM_ID"
            data-layout="{'id':'INLINE'}"
            data-trigger-type="alwaysShow"
            data-trigger-value=""
            data-activation-type="alwaysActivated"
            data-activation-value=""
            data-deactivation-type="neverDeactivate"
            data-deactivation-value=""
            data-form-name="LM: The Perfect Loan Process"
            data-height="498"
            data-layout-iframe-id="inline-PLP_FORM_ID"
            data-form-id="PLP_FORM_ID"
            title="LM: The Perfect Loan Process"></iframe>
        </div>
      </div>
    </dialog>

    <!-- ═══════════════ FLOATING FEATURE ROW (overlaps the hero) ═══════════════ -->
    <section class="plp-floatfeat" aria-label="What the Perfect Loan Process gives you">
      <div class="container plp-shell">
        <div class="plp-floatfeat__grid" data-reveal="up" data-reveal-stagger="80">
          <div class="plp-ffcard">
            <span class="plp-ffcard__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg></span>
            <div class="plp-ffcard__title">Find the right rhythm</div>
            <p class="plp-ffcard__desc">A predictable cadence that works the same on file #1 and file #100.</p>
          </div>
          <div class="plp-ffcard">
            <span class="plp-ffcard__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" /><polyline points="22 4 12 14.01 9 11.01" /></svg></span>
            <div class="plp-ffcard__title">Stop the scramble</div>
            <p class="plp-ffcard__desc">No more files falling apart mid-process and last-minute heroics.</p>
          </div>
          <div class="plp-ffcard">
            <span class="plp-ffcard__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" /></svg></span>
            <div class="plp-ffcard__title">Communicate proactively</div>
            <p class="plp-ffcard__desc">End the anxious "what's happening?" calls before they start.</p>
          </div>
          <div class="plp-ffcard">
            <span class="plp-ffcard__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12" /></svg></span>
            <div class="plp-ffcard__title">Earn the referral</div>
            <p class="plp-ffcard__desc">A post-closing sequence designed to turn clients into advocates.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════ PROBLEM ═══════════════ -->
    <section class="plp-section" aria-labelledby="plp-problem-heading">
      <div class="container plp-shell">
        <div class="plp-problem">
          <div class="plp-problem__copy" data-reveal="up">
            <h2 id="plp-problem-heading" class="plp-h2">The Originators Winning Right Now Have One Thing You Can See</h2>
            <div class="plp-problem__body">
              <p>It's not more leads. It's not better rates. It's not a different personality.</p>
              <p>It's a written, role-specific, repeatable process for every single step — from the first inquiry call to the post-closing phone call.</p>
              <p>The originators who earn referrals on every deal, who have clients sending thank-you notes, whose Realtor partners stop working with anyone else — they are not more talented than you. They have a system that makes them look like they are.</p>
              <p class="plp-prose__payoff">That system is called <strong>The Perfect Loan Process.</strong></p>
            </div>
          </div>
          <div class="plp-problem__media" data-reveal="right" aria-hidden="true">
            <div class="plp-imgph">
              <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
              <span>Image placeholder</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════ WHAT IT IS — installs card grid ═══════════════ -->
    <section class="plp-section plp-section--mint" aria-labelledby="plp-installs-heading">
      <div class="container plp-shell">
        <div class="plp-prose__head" data-reveal="up">
          <h2 id="plp-installs-heading" class="plp-h2 plp-h2--center">72 Steps. Four Roles. One Standard for Every Loan.</h2>
        </div>
        <p class="plp-sub plp-installs__intro" data-reveal="up">The Perfect Loan Process is the complete, end-to-end operating system for a mortgage origination team. It maps every critical step from first contact through post-closing — with clear ownership assigned to the Loan Originator, Transaction Coordinator, Loan Processor, and Production Assistant.</p>
        <p class="plp-sub plp-installs__intro" data-reveal="up">It was built to answer one question: <em>What has to happen, by whom, and in what order, for every single client to have an experience they tell people about?</em></p>

        <p class="plp-installs__lead" data-reveal="up">What the PLP installs in your business:</p>
        <div class="plp-installs__grid" data-reveal="up" data-reveal-stagger="80">
          <div class="plp-icard">
            <span class="plp-icard__icon"><svg viewBox="0 0 24 24"><path d="M12 2l2.4 6.9H21l-5.3 4 2 6.8L12 16l-5.7 3.7 2-6.8L3 8.9h6.6z"/></svg></span>
            <div class="plp-icard__title">A consistent, wow-worthy client experience from inquiry to funding</div>
          </div>
          <div class="plp-icard">
            <span class="plp-icard__icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
            <div class="plp-icard__title">Clear team accountability at every stage — no more dropped batons</div>
          </div>
          <div class="plp-icard">
            <span class="plp-icard__icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></span>
            <div class="plp-icard__title">Proactive communication that eliminates the anxious "what's happening?" calls</div>
          </div>
          <div class="plp-icard">
            <span class="plp-icard__icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/><path d="M3 12h2"/></svg></span>
            <div class="plp-icard__title">An under-promise, over-deliver standard that earns reviews and referrals</div>
          </div>
          <div class="plp-icard">
            <span class="plp-icard__icon"><svg viewBox="0 0 24 24"><path d="M4 7h11"/><path d="M4 7l3-3M4 7l3 3"/><path d="M20 17H9"/><path d="M20 17l-3-3M20 17l-3 3"/></svg></span>
            <div class="plp-icard__title">A clean, scripted handoff system between every role on your team</div>
          </div>
          <div class="plp-icard">
            <span class="plp-icard__icon"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></span>
            <div class="plp-icard__title">A post-closing follow-up sequence designed to turn clients into a referral engine</div>
          </div>
        </div>

        <p class="plp-sub plp-installs__foot" data-reveal="up">And if you're building a team — or already running one — the PLP becomes the baseline standard everyone operates from, so your client experience doesn't depend on which originator or coordinator happened to handle the file.</p>
        <div class="plp-installs__cta" data-reveal="up">
          <a class="btn btn--gold btn--lg" href="#get-the-plp" data-scroll-to-form>Start Building Your Perfect Loan Process →</a>
        </div>
      </div>
    </section>

    <!-- ═══════════════ NAVY BAND + green panel + role cards ═══════════════ -->
    <section class="plp-darkband" aria-labelledby="plp-roles-heading">
      <div class="container plp-shell">
        <div class="plp-greenpanel">
          <h2 id="plp-roles-heading" class="plp-h2" data-reveal="up">One playbook for your whole team</h2>
          <p class="plp-greenpanel__sub" data-reveal="up">The PLP assigns every action to a role — so your client experience never depends on who happened to touch the file.</p>
          <div class="plp-greenpanel__cta" data-reveal="up">
            <a class="btn btn--gold btn--lg" href="#get-the-plp" data-scroll-to-form>Get it free</a>
          </div>
          <div class="plp-roles" data-reveal="up" data-reveal-stagger="80">
            <div class="plp-role"><span class="plp-role__tag">Role 01</span><div class="plp-role__name">Loan Originator</div><p class="plp-role__desc">Owns the first call, expectations and the under-promise / over-deliver standard.</p></div>
            <div class="plp-role"><span class="plp-role__tag">Role 02</span><div class="plp-role__name">Transaction Coordinator</div><p class="plp-role__desc">Drives the file forward and keeps every party informed at each stage.</p></div>
            <div class="plp-role"><span class="plp-role__tag">Role 03</span><div class="plp-role__name">Loan Processor</div><p class="plp-role__desc">Turns a clean file fast — the scripted handoff makes it seamless.</p></div>
            <div class="plp-role"><span class="plp-role__tag">Role 04</span><div class="plp-role__name">Production Assistant</div><p class="plp-role__desc">Runs proactive touchpoints so clients feel cared for the whole way.</p></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════ WHO BUILT IT (founder split) ═══════════════ -->
    <section class="plp-section plp-section--mint" aria-labelledby="plp-founder-heading">
      <div class="container plp-shell">
        <div class="plp-split">
          <div class="plp-split__media plp-founder__photo" data-reveal="left">
            <div class="plp-mediablock">
              <span class="plp-mediablock__bg"></span>
              <img class="plp-mediablock__img" src="<?php echo TLA_BASE; ?>/assets/tim-braheem-smiling.webp" alt="Tim Braheem, creator of the Perfect Loan Process" loading="lazy" />
            </div>
            <div class="plp-founder__name">Tim Braheem</div>
            <div class="plp-founder__title">Co-founder, The Loan Atlas</div>
          </div>
          <div class="plp-split__copy" data-reveal="up">
            <h2 id="plp-founder-heading" class="plp-h2">Created by Tim Braheem</h2>
            <p class="plp-sub" style="margin-top:16px;"><strong>Tim Braheem</strong> spent 25+ years as a producing loan originator and closed over <strong>$1.4 billion</strong> in personal loan volume. He didn't design the Perfect Loan Process in theory. He built it by originating — watching what broke, fixing it, writing it down, and running it again until it didn't break.</p>
            <p class="plp-sub" style="margin-top:16px;">It's the same process he refined over decades of coaching top producers, and it's the foundation The Loan Atlas is built on today.</p>
            <figure class="plp-pullquote" data-reveal="up">
              <p>"Perfection is what we're striving for. The name is intentional — it defines the goal. And the goal is to, on every single loan, exceed everyone's expectations."</p>
              <cite>Tim Braheem</cite>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════ TESTIMONIALS ═══════════════ -->
    <section class="plp-section" aria-label="What members say">
      <div class="container plp-shell">
        <div class="plp-quotes" data-reveal="up" data-reveal-stagger="80">
          <figure class="plp-quote"><p>"After 32 years in this industry, I will tell you it's worth every single penny."</p><cite>Sarajane Trier</cite></figure>
          <figure class="plp-quote"><p>"I wish I would have known about this 5 years ago. I've been looking for this level of support my entire Loan Officer career of 15 years."</p><cite>Jill Coss</cite></figure>
          <figure class="plp-quote"><p>"If you're considering joining The Loan Atlas, it's been the best investment I've ever made — and you will make it back within your first month's production."</p><cite>Gian Ceretto</cite></figure>
        </div>
      </div>
    </section>

    <!-- ═══════════════ CLOSING CTA ═══════════════ -->
    <section class="plp-close" aria-labelledby="plp-close-heading">
      <div class="container plp-shell">
        <div class="plp-close__panel" data-reveal="up">
          <h2 id="plp-close-heading" class="plp-h2">Start Building Your Perfect Loan Process</h2>
          <p class="plp-close__sub">Every consistent originator is running a process. Download the framework that's funded billions in loan volume, and start building yours today.</p>
          <div class="plp-close__actions">
            <a class="btn btn--gold btn--lg" href="#get-the-plp" data-scroll-to-form>Start Building Your Perfect Loan Process →</a>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <!-- Sticky mobile CTA bar (small screens only) -->
  <div class="plp-sticky" role="region" aria-label="Download the Perfect Loan Process">
    <span class="plp-sticky__label">The Perfect Loan Process — Free</span>
    <a class="btn btn--gold" href="#get-the-plp" data-scroll-to-form>Start Building →</a>
  </div>

  <!-- LeadConnector form embed runtime (resizes the iframe form) -->
  <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
  <!-- Open the lead-capture form in a modal dialog -->
  <script>
    (function () {
      var modal = document.getElementById('get-the-plp');
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
