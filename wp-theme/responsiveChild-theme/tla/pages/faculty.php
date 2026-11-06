<?php
/**
 * Body partial for /faculty/ (TLA Full HTML template).
 * Generated from public/faculty.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Faculty — The Loan Atlas';
$tla_description = 'Meet 19 active originators, leaders, and strategists — collectively responsible for $29B+ in funded loan volume — who teach inside The Loan Atlas every week.';
$tla_active      = 'faculty';
?>
  <style>
    /* ── Faculty page ─────────────────────────────────────────────── */

    .fh-hero {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-top: calc(var(--header-h) + clamp(56px, 8vw, 96px));
      padding-bottom: clamp(56px, 8vw, 96px);
      position: relative;
      overflow: hidden;
    }
    .fh-hero__bg {
      position: absolute;
      top: 0;
      right: 0;
      width: 70%;
      height: 100%;
      object-fit: cover;
      object-position: center top;
      pointer-events: none;
      z-index: 0;
    }
    .fh-hero__fade {
      position: absolute;
      inset: 0;
      background: linear-gradient(to right,
        rgba(2, 28, 54, 1)    0%,
        rgba(2, 28, 54, 0.96) 30%,
        rgba(2, 28, 54, 0.78) 50%,
        rgba(2, 28, 54, 0.35) 75%,
        rgba(2, 28, 54, 0)    100%);
      pointer-events: none;
      z-index: 1;
    }
    @media (max-width: 760px) {
      .fh-hero__bg { display: none; }
      .fh-hero__fade { display: none; }
    }
    .fh-hero::before {
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
    .fh-hero::after {
      content: '';
      position: absolute;
      bottom: -80px;
      left: 4%;
      width: 400px;
      height: 400px;
      background: radial-gradient(closest-side, rgba(178, 200, 233, 0.08), transparent);
      filter: blur(70px);
      pointer-events: none;
      z-index: 0;
    }
    .fh-hero__content {
      position: relative;
      z-index: 2;
      max-width: 52rem;
    }
    .fh-hero__title {
      font-family: var(--font-display);
      font-size: clamp(2.5rem, 1.7rem + 3.2vw, 4.25rem);
      line-height: 1.04;
      letter-spacing: -0.03em;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: var(--space-md);
    }
    .fh-hero__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .fh-hero__sub {
      font-size: clamp(1rem, 0.9rem + 0.5vw, 1.1875rem);
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.68);
      max-width: 40rem;
      margin-bottom: var(--space-lg);
    }
    .fh-hero__sub strong { color: #ffffff; font-weight: 700; }
    .fh-hero__actions {
      display: flex;
      flex-wrap: wrap;
      gap: var(--space-sm);
      margin-top: var(--space-md);
    }

    /* Leadership section wrapper — flows from faculty-intro (same bg),
       so its top padding is suppressed; faculty-intro's bottom padding
       defines the gap between copy and cards. */
    .leaders-section {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 96px);
      padding-top: 0;
      position: relative;
    }
    .leaders-section > .container { position: relative; }

    /* Faculty intro — heading + copy that introduces the leadership grid. */
    .faculty-intro {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 96px);
      text-align: center;
    }
    .faculty-intro__title {
      font-family: var(--font-display);
      font-size: clamp(2rem, 1.4rem + 2.2vw, 3rem);
      font-weight: 800;
      line-height: 1.1;
      letter-spacing: -0.025em;
      color: var(--on-surface);
      max-width: 22ch;
      margin: 0 auto var(--space-md);
    }
    .faculty-intro__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .faculty-intro__lead {
      font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);
      line-height: 1.65;
      color: var(--on-surface-variant);
      max-width: 44rem;
      margin-inline: auto;
    }

    /* Faculty section heads */
    .faculty-section-head {
      display: flex;
      align-items: baseline;
      justify-content: space-between;
      gap: var(--space-md);
      margin-bottom: var(--space-lg);
      flex-wrap: wrap;
    }
    @media (min-width: 760px) { .faculty-section-head { align-items: flex-end; } }
    .faculty-section-head__title {
      font-family: var(--font-display);
      font-size: clamp(1.625rem, 1.1rem + 1.6vw, 2.25rem);
      font-weight: 700;
      line-height: 1.1;
      letter-spacing: -0.02em;
      margin-top: var(--space-xs);
    }
    .faculty-section-head__lead {
      font-size: 1rem;
      line-height: 1.6;
      max-width: 30rem;
    }
    .faculty-section-head__title { color: var(--on-surface); }
    .faculty-section-head__lead  { color: var(--on-surface-variant); }

    /* Mentor section — flows from fac-quotes (same bg), top padding suppressed. */
    .mentor-section {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 96px);
      padding-top: 0;
    }

    /* Card grid */
    .faculty-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-md);
    }
    @media (min-width: 560px)  { .faculty-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 900px)  { .faculty-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1120px) { .faculty-grid { grid-template-columns: repeat(4, 1fr); } }
    .faculty-grid--leadership { grid-template-columns: 1fr; gap: var(--space-md); }
    @media (min-width: 760px) {
      .faculty-grid--leadership { grid-template-columns: repeat(3, 1fr); gap: var(--space-lg); }
    }

    /* Card */
    .faculty-card {
      display: flex;
      flex-direction: column;
      text-align: left;
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-xl);
      overflow: hidden;
      cursor: pointer;
      transition: box-shadow 200ms ease, transform 200ms ease, border-color 200ms ease;
      width: 100%;
      font-family: inherit;
      padding: 0;
    }
    .faculty-card:hover {
      box-shadow: 0 16px 40px rgba(2, 28, 54, 0.10);
      transform: translateY(-3px);
      border-color: var(--outline);
    }
    .faculty-card:focus-visible {
      outline: 2px solid var(--brass);
      outline-offset: 3px;
    }
    .faculty-card__photo {
      position: relative;
      aspect-ratio: 4 / 5;
      background: linear-gradient(160deg, #0a1628, #021c36);
      overflow: hidden;
    }
    .faculty-card__photo[data-initials]::before {
      content: attr(data-initials);
      position: absolute;
      inset: 0;
      display: grid;
      place-items: center;
      font-family: var(--font-display);
      font-size: 2.5rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      color: var(--brass-bright);
      z-index: 0;
    }
    .faculty-card__photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 400ms ease;
      position: relative;
      z-index: 1;
    }
    .faculty-card:hover .faculty-card__photo img { transform: scale(1.03); }
    .faculty-card__body {
      padding: var(--space-md);
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .faculty-card__name {
      font-family: var(--font-display);
      font-size: 1.125rem;
      font-weight: 700;
      line-height: 1.2;
      letter-spacing: -0.01em;
      color: var(--on-surface);
    }
    .faculty-card__name {
      font-size: 1.3125rem;
      font-weight: 800;
      letter-spacing: -0.02em;
    }
    /* Loan Atlas role — bold brass gradient (deeper stops so small text stays legible on white) */
    .faculty-card__role {
      margin-top: 2px;
      font-family: var(--font-display);
      font-size: 0.8125rem;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      line-height: 1.3;
      background: linear-gradient(135deg, #a87a0e 0%, #c9961c 45%, #dcae3a 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      width: fit-content;
    }
    /* Current role outside The Loan Atlas */
    .faculty-card__current {
      margin-top: 2px;
      font-size: 0.875rem;
      line-height: 1.45;
      color: var(--on-surface-variant);
    }
    /* Leadership cards — larger */
    .faculty-grid--leadership .faculty-card__body { padding: var(--space-lg); }
    .faculty-grid--leadership .faculty-card__name { font-size: 1.625rem; }
    .faculty-grid--leadership .faculty-card__role { font-size: 0.875rem; }
    .faculty-grid--leadership .faculty-card__current { font-size: 0.9375rem; }

    /* Modal */
    .faculty-modal {
      padding: 0;
      border: 0;
      border-radius: var(--radius-3xl);
      background: var(--surface-container-lowest);
      color: var(--on-surface);
      max-width: min(960px, calc(100vw - 32px));
      width: 100%;
      max-height: calc(100vh - 32px);
      overflow: hidden;
      box-shadow: 0 32px 80px rgba(2,28,54,0.32);
    }
    .faculty-modal::backdrop {
      background: rgba(2, 28, 54, 0.6);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
    }
    .faculty-modal[open] { animation: faculty-modal-in 240ms ease; }
    @keyframes faculty-modal-in {
      from { opacity: 0; transform: translateY(8px) scale(0.98); }
      to   { opacity: 1; transform: translateY(0) scale(1); }
    }
    .faculty-modal__inner {
      display: grid;
      grid-template-columns: 1fr;
      max-height: calc(100vh - 32px);
      overflow-y: auto;
    }
    @media (min-width: 820px) {
      .faculty-modal__inner { grid-template-columns: minmax(320px, 380px) 1fr; }
    }
    .faculty-modal__close {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(2, 28, 54, 0.08);
      color: var(--on-surface);
      display: grid;
      place-items: center;
      z-index: 10;
      transition: background 200ms ease, color 200ms ease;
      border: 0;
      cursor: pointer;
    }
    .faculty-modal__close:hover { background: var(--primary); color: #ffffff; }
    .faculty-modal__close svg { width: 18px; height: 18px; }
    .faculty-modal__left {
      background: linear-gradient(160deg, #0a1628 0%, #021c36 100%);
      color: #ffffff;
      display: flex;
      flex-direction: column;
    }
    .faculty-modal__photo {
      position: relative;
      aspect-ratio: 4 / 5;
      overflow: hidden;
    }
    .faculty-modal__photo[data-initials]::before {
      content: attr(data-initials);
      position: absolute;
      inset: 0;
      display: grid;
      place-items: center;
      font-family: var(--font-display);
      font-size: 4rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      color: var(--brass-bright);
      z-index: 0;
    }
    .faculty-modal__photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center top;
      position: relative;
      z-index: 1;
    }
    .faculty-modal__identity {
      padding: var(--space-lg);
      display: flex;
      flex-direction: column;
      gap: var(--space-xs);
    }
    .faculty-modal__name {
      font-family: var(--font-display);
      font-size: clamp(1.5rem, 1.2rem + 1vw, 1.875rem);
      font-weight: 800;
      letter-spacing: -0.02em;
      line-height: 1.1;
      color: #ffffff;
    }
    .faculty-modal__title {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--brass-bright);
      line-height: 1.4;
    }
    .faculty-modal__production {
      margin-top: var(--space-md);
      padding-top: var(--space-md);
      border-top: 1px solid rgba(255,255,255,0.14);
    }
    .faculty-modal__production-label {
      font-size: 0.6875rem;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.55);
      margin-bottom: var(--space-xs);
    }
    .faculty-modal__production-value {
      font-size: 0.9375rem;
      font-weight: 500;
      color: #ffffff;
      line-height: 1.5;
    }
    .faculty-modal__production-value--specialty {
      font-size: 0.875rem;
      font-weight: 400;
      color: rgba(255,255,255,0.85);
      line-height: 1.6;
    }
    .faculty-modal__right {
      padding: var(--space-xl) var(--space-lg);
      display: flex;
      flex-direction: column;
      gap: var(--space-md);
    }
    @media (min-width: 820px) {
      .faculty-modal__right { padding: var(--space-xl); }
    }
    .faculty-modal__section-label {
      font-family: var(--font-body);
      font-size: 0.6875rem;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--brass);
      margin-bottom: var(--space-xs);
    }
    .faculty-modal__bio {
      font-size: 1rem;
      line-height: 1.65;
      color: var(--on-surface-variant);
    }
    .faculty-modal__bio em { font-style: italic; }
    .faculty-modal__video {
      position: relative;
      aspect-ratio: 16 / 9;
      background: var(--surface-container-low);
      border-radius: var(--radius-xl);
      overflow: hidden;
      display: grid;
      place-items: center;
      color: var(--on-surface-variant);
      border: 1px dashed var(--outline-variant);
    }
    .faculty-modal__video--filled {
      background: #000;
      border: 0;
    }
    .faculty-modal__video iframe {
      width: 100%;
      height: 100%;
      border: 0;
      display: block;
    }
    .faculty-modal__video-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-sm);
    }
    .faculty-modal__video-icon {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: var(--primary);
      color: #ffffff;
      display: grid;
      place-items: center;
    }
    .faculty-modal__video-icon svg { width: 22px; height: 22px; margin-left: 3px; }
    .faculty-modal__video-caption {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--on-surface-variant);
    }
    @media (max-width: 819px) {
      .faculty-modal__photo { aspect-ratio: 4 / 5; }
      .faculty-modal__identity { padding: var(--space-md); }
      .faculty-modal__right { padding: var(--space-md); }
      /* Close button overlaps the dark photo on mobile — make it a solid, high-contrast chip. */
      .faculty-modal__close {
        background: #ffffff;
        color: var(--primary);
        box-shadow: 0 2px 10px rgba(2,28,54,0.35);
      }
      .faculty-modal__close:hover { background: var(--primary); color: #ffffff; }
    }
    body.faculty-modal-open { overflow: hidden; }

    /* Testimonials — flows from leaders-section (same bg), top padding suppressed. */
    .fac-quotes {
      background: #ffffff;
      padding-block: clamp(48px, 6vw, 96px);
      padding-top: 0;
    }
    .fac-quotes__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-md);
    }
    @media (min-width: 760px) {
      .fac-quotes__grid { grid-template-columns: repeat(3, 1fr); gap: var(--space-lg); }
    }

    /* Access section */
    .access-section {
      background: var(--surface-container-low);
      padding-block: clamp(48px, 6vw, 96px);
    }
    .access-intro { text-align: center; margin-bottom: var(--space-xl); }
    .access-intro__title {
      font-family: var(--font-display);
      font-size: clamp(2rem, 1.4rem + 2.2vw, 3rem);
      font-weight: 800;
      line-height: 1.1;
      letter-spacing: -0.025em;
      color: var(--on-surface);
      max-width: 22ch;
      margin: 0 auto var(--space-md);
    }
    .access-intro__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .access-intro__lead {
      font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);
      line-height: 1.65;
      color: var(--on-surface-variant);
      max-width: 44rem;
      margin-inline: auto;
    }

    /* Live coaching marquee */
    .access-marquee {
      position: relative;
      width: 100vw;
      margin-left: calc(50% - 50vw);
      overflow: hidden;
      -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 6%, #000 94%, transparent 100%);
      mask-image: linear-gradient(90deg, transparent 0, #000 6%, #000 94%, transparent 100%);
    }
    .access-marquee__track {
      display: flex;
      width: max-content;
      gap: var(--space-md);
      animation: access-marquee-scroll 40s linear infinite;
    }
    .access-marquee:hover .access-marquee__track { animation-play-state: paused; }
    .access-marquee__item {
      flex-shrink: 0;
      width: clamp(280px, 32vw, 460px);
      aspect-ratio: 16 / 10;
      border-radius: var(--radius-2xl);
      overflow: hidden;
      box-shadow: 0 12px 32px rgba(2, 28, 54, 0.10);
    }
    .access-marquee__item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    @keyframes access-marquee-scroll {
      from { transform: translateX(0); }
      to   { transform: translateX(calc(-50% - var(--space-md) / 2)); }
    }
    @media (prefers-reduced-motion: reduce) {
      .access-marquee__track { animation: none; }
    }

    /* Checkmark SVG shortcut */
    .chk { width:18px; height:18px; flex-shrink:0; margin-top:2px; color: var(--brass); }
    /* ======================================================================
       Faculty Profile popup (.fp-*) — magazine layout for long-form bios.
       Used for members with a `profile` object in facultyData.
       ====================================================================== */
    .fp {
      --fp-ink: var(--on-surface);
      --fp-ink-2: var(--on-surface-variant);
      --fp-ink-3: #6b6e76;
      --fp-line: #e3e6ea;
      --fp-brass-deep: var(--secondary);
      --fp-brass-grad: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      --fp-paper: #fdfcf9;
      padding: 0;
      border: 0;
      border-radius: 6px;
      background: var(--fp-paper);
      color: var(--fp-ink);
      width: min(1180px, calc(100vw - 48px));
      max-width: none;
      max-height: calc(100vh - 48px);
      overflow: hidden;
      box-shadow: 0 30px 80px -20px rgba(2, 28, 54, 0.45), 0 10px 30px -10px rgba(2, 28, 54, 0.25);
    }
    .fp[open] { display: flex; flex-direction: column; animation: faculty-modal-in 240ms ease; }
    .fp::backdrop {
      background: rgba(2, 12, 26, 0.72);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
    }
    .fp__scroll { overflow-y: auto; overscroll-behavior: contain; padding: 56px 64px 72px; }
    .fp__close {
      position: absolute; top: 20px; right: 20px; z-index: 2;
      width: 40px; height: 40px;
      border-radius: var(--radius-full);
      border: 1px solid var(--fp-line);
      background: #fff;
      color: var(--primary);
      display: grid; place-items: center;
      cursor: pointer;
      transition: background .2s, color .2s;
    }
    .fp__close:hover { background: var(--primary); color: #fff; }
    .fp__close svg { width: 18px; height: 18px; }

    .fp__kicker {
      display: flex; align-items: center; gap: 14px;
      font: 700 .9375rem/1 var(--font-body); letter-spacing: .18em; text-transform: uppercase;
      color: var(--fp-brass-deep);
      padding-bottom: 18px; margin-bottom: 36px;
      border-bottom: 2px solid var(--primary);
    }
    .fp__logo { height: 38px; width: auto; }
    .fp__kicker-rule { width: 1px; height: 30px; background: var(--fp-ink-3); opacity: .5; flex-shrink: 0; margin: 0 6px; }

    .fp__top { display: grid; gap: 48px; grid-template-columns: 1fr; align-items: center; }
    @media (min-width: 900px) { .fp__top { grid-template-columns: 1.35fr 1fr; } .fp__top > div { padding-bottom: 4px; } }
    .fp__name { font: 800 clamp(3rem, 7vw, 5.5rem)/0.92 var(--font-display); letter-spacing: -0.045em; color: var(--primary); margin: 0 0 24px; }
    .fp__name em { font-style: normal; background: var(--fp-brass-grad); -webkit-background-clip: text; background-clip: text; color: transparent; }
    .fp__role { font: 700 1.0625rem/1.3 var(--font-display); letter-spacing: .16em; text-transform: uppercase; color: var(--fp-ink-2); margin: -4px 0 28px; }
    /* Headshot is a cutout PNG: sits flush on the divider so it "stands" on the line */
    .fp__photo { position: relative; align-self: end; display: flex; justify-content: center; margin: 0; }
    .fp__photo img { width: auto; max-width: 100%; height: auto; max-height: 480px; filter: saturate(.95); }
    .fp__rail { display: grid; grid-template-columns: 1fr; border-top: 1px solid var(--fp-line); margin: 8px 0 0; max-width: 560px; }
    .fp__rail div { padding: 20px 28px 20px 0; border-bottom: 1px solid var(--fp-line); }
    /* Stats stack vertically, one per row; the bio divider closes off the last one */
    .fp__rail div:last-child { border-bottom: 0; }
    .fp__rail dt { font: 700 .6875rem/1 var(--font-body); letter-spacing: .14em; text-transform: uppercase; color: var(--fp-ink-3); margin-bottom: 8px; white-space: nowrap; }
    .fp__rail dd { margin: 0; font: 700 1.25rem/1.25 var(--font-display); color: var(--primary); text-wrap: balance; }
    .fp__sep { color: var(--brass); font-weight: 400; margin: 0 6px; }
    .fp__nw { white-space: nowrap; }

    .fp__cols { padding-top: 48px; border-top: 1px solid var(--fp-line); columns: 1; column-gap: 56px; font-size: 1.0625rem; line-height: 1.75; color: var(--fp-ink-2); }
    /* Executive summary: lede above the two-column bio, spans both columns */
    .fp__summary {
      column-span: all;
      margin: 0 0 40px; padding-left: 24px;
      border-left: 3px solid var(--brass);
      font: 500 1.3125rem/1.55 var(--font-display); letter-spacing: -.01em;
      color: var(--primary);
      max-width: 920px;
    }
    .fp__summary em { font-style: italic; }
    .fp__cols p { margin: 0 0 1.1em; break-inside: avoid-column; }
    .fp__cols em { font-style: italic; }
    .fp__pull {
      break-inside: avoid;
      margin: 8px 0 28px; padding: 22px 0;
      border-top: 3px solid var(--brass); border-bottom: 1px solid var(--fp-line);
      font: 700 1.375rem/1.35 var(--font-display); color: var(--primary); letter-spacing: -.01em;
    }

    /* Expertise + video share one panel so they read as a single section */
    .fp__foot {
      display: grid; gap: 32px; grid-template-columns: 1fr;
      margin-top: 56px; padding: 40px;
      background: #f4f0e6;
      border-top: 3px solid var(--brass);
      border-radius: 0 0 6px 6px;
    }
    @media (min-width: 900px) { .fp__foot { grid-template-columns: 1fr 1.15fr; gap: 48px; align-items: center; } }
    .fp__foot h3 { font: 800 1.75rem/1.15 var(--font-display); letter-spacing: -.02em; color: var(--primary); margin: 0 0 18px; }
    .fp__exp { list-style: none; margin: 0; padding: 0; }
    .fp__exp li {
      display: flex; align-items: center; gap: 14px;
      padding: 12px 0; border-bottom: 1px solid rgba(2, 28, 54, .1);
      font: 500 1.0625rem/1.3 var(--font-body); color: var(--fp-ink);
    }
    .fp__exp li:last-child { border-bottom: 0; }
    .fp__exp li::before { content: ""; width: 18px; height: 3px; border-radius: 2px; background: var(--fp-brass-grad); flex-shrink: 0; }

    /* Video — plain YouTube embed (YouTube's own play button) */
    .fp__vid {
      position: relative; display: block; width: 100%;
      aspect-ratio: 16 / 9; border-radius: 4px; overflow: hidden;
      background: #060e1c;
      box-shadow: 0 14px 30px -14px rgba(2, 28, 54, .45);
    }
    .fp__vid iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; }

    /* Big-photo layout (default; set profile.bigPhoto: false to opt out): narrower stats, larger headshot cropped at the
       bottom so it still stands flush on the divider. Desktop only for now. */
    @media (min-width: 900px) {
      .fp--big-photo .fp__top { grid-template-columns: minmax(0, 1fr) minmax(0, 1.2fr); gap: 32px; }
      .fp--big-photo .fp__rail { max-width: 460px; }
      .fp--big-photo .fp__photo { height: 500px; overflow: hidden; align-items: flex-start; }
      .fp--big-photo .fp__photo img { max-height: none; height: 580px; }
    }

    /* One-line name (default; set profile.oneLineName: false to stack): first + last on a single line.
       Phones keep the stacked name — there isn't room beside the headshot. */
    @media (min-width: 761px) {
      .fp--one-line .fp__br { display: none; }
      .fp--one-line .fp__name { white-space: nowrap; font-size: clamp(2.5rem, 5.2vw, 4.5rem); line-height: 1; }
      .fp--one-line .fp__role { font-size: clamp(1.0625rem, 1.4vw, 1.25rem); }
    }

    /* Under 900px: headshot stays beside name + title, standing on the stats' top rule */
    @media (max-width: 899px) {
      .fp__top {
        grid-template-columns: 1fr auto;
        grid-template-areas: "name photo" "role photo" "rail rail";
        grid-template-rows: 1fr auto auto;
        column-gap: 16px; row-gap: 0; align-items: end;
      }
      .fp__top > div { display: contents; }
      .fp__name { grid-area: name; margin-bottom: 14px; }
      .fp__role { grid-area: role; margin: 0 0 24px; }
      .fp__photo { grid-area: photo; }
      .fp__photo img { max-height: 300px; }
      .fp__rail { grid-area: rail; margin: 0; max-width: none; }
      .fp__cols { margin-top: 8px; }
    }
    @media (max-width: 760px) {
      .fp { width: 100vw; max-height: 100dvh; height: 100dvh; border-radius: 0; margin: 0; }
      .fp__scroll { padding: 64px 20px 48px; }
      .fp__close { top: 12px; right: 12px; }
      .fp__kicker { font-size: .75rem; gap: 10px; }
      .fp__logo { height: 26px; }
      .fp__kicker-rule { height: 22px; margin: 0 2px; }
      /* Scale name + headshot with screen width so wider phones don't leave dead space */
      .fp__name { font-size: clamp(2.75rem, 11.5vw, 4.75rem); }
      .fp__role { font-size: clamp(.8125rem, 2.8vw, 1.0625rem); letter-spacing: .14em; margin-bottom: 20px; }
      .fp__photo img { max-height: clamp(180px, 54vw, 340px); }
      .fp__rail div { padding: 16px 12px 16px 0; }
      .fp__rail dd { font-size: 1.0625rem; }
      .fp__cols { margin-top: 4px; padding-top: 32px; }
      .fp__summary { font-size: 1.0625rem; padding-left: 16px; margin-bottom: 28px; }
      .fp__foot { padding: 28px 20px; margin-left: -20px; margin-right: -20px; border-radius: 0; }
      .fp__foot h3 { font-size: 1.5rem; }
    }
    @media (prefers-reduced-motion: reduce) {
      .fp[open] { animation: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main">

    <!-- ── Hero ─────────────────────────────────────────────────────── -->
    <section class="fh-hero" aria-labelledby="fh-hero-heading">
      <img class="fh-hero__bg" src="<?php echo TLA_BASE; ?>/assets/faculty-header.png" alt="" aria-hidden="true" />
      <div class="fh-hero__fade" aria-hidden="true"></div>
      <div class="container">
        <div class="fh-hero__content">
          <span class="eyebrow" data-hero-step="1" style="margin-bottom: var(--space-md);">
            <span class="eyebrow__text" style="color: var(--brass-bright);">The Faculty</span>
          </span>
          <h1 id="fh-hero-heading" class="fh-hero__title" data-hero-step="2">Learn from the <em>Top&nbsp;1%</em></h1>
          <p class="fh-hero__sub" data-hero-step="3">
            Most coaching platforms give you access to <em>one</em> coach.
            <strong>The Loan Atlas gives you access to <span data-countup="19" data-countup-commas="false">19</span> of the best minds in the mortgage business.</strong>
          </p>
          <div class="fh-hero__actions" data-hero-step="4">
            <a class="btn btn--gold btn--lg" href="/join/">Start Your Transformation</a>
            <a class="btn btn--ghost-on-dark btn--lg" href="/consultation/">Book Your Free Coaching Session</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Faculty intro ─────────────────────────────────────────────── -->
    <section class="faculty-intro">
      <div class="container" data-reveal="up">
        <h2 class="faculty-intro__title">Decades of Experience. <em>Billions in Funded Loans.</em></h2>
        <p class="faculty-intro__lead">Inside The Loan Atlas, you'll learn weekly from branch managers, division presidents, and top 1% producers — all of them still serving families and leading high-producing teams.</p>
      </div>
    </section>

    <!-- ── Faculty grids ─────────────────────────────────────────────── -->
    <section class="leaders-section">
      <div class="container">
        <div class="faculty-grid faculty-grid--leadership" data-reveal-stagger="100">
          <button class="faculty-card" type="button" data-faculty="tim-braheem">
            <div class="faculty-card__photo" data-initials="TB">
              <img src="<?php echo TLA_BASE; ?>/assets/tim-braheem-headshot.png" alt="Tim Braheem" loading="lazy" />
            </div>
            <div class="faculty-card__body"><span class="faculty-card__name">Tim Braheem</span><span class="faculty-card__role">Founder &amp; Chief Content Officer</span><span class="faculty-card__current">Head Coach, Performance Experts</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="craig-strent">
            <div class="faculty-card__photo" data-initials="CS">
              <img src="<?php echo TLA_BASE; ?>/assets/craig-strent-headshot.png" alt="Craig Strent" loading="lazy" />
            </div>
            <div class="faculty-card__body"><span class="faculty-card__name">Craig Strent</span><span class="faculty-card__role">Head of Faculty</span><span class="faculty-card__current">Head of Faculty, The Loan Atlas</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="josh-mettle">
            <div class="faculty-card__photo" data-initials="JM">
              <img src="<?php echo TLA_BASE; ?>/assets/josh-mettle-headshot.png" alt="Josh Mettle" loading="lazy" />
            </div>
            <div class="faculty-card__body"><span class="faculty-card__name">Josh Mettle</span><span class="faculty-card__role">Head of Faculty</span><span class="faculty-card__current">Division President, NEO Home Loans</span></div>
          </button>
        </div>
      </div>
    </section>

    <!-- ── Testimonials ─────────────────────────────────────────────── -->
    <section class="fac-quotes" aria-label="Member testimonials">
      <div class="container">
        <div class="fac-quotes__grid" data-reveal-stagger="120">
          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">I love the depth of knowledge. There are a lot of things out there that just skim the surface, but you get training from people who are at the top of their game and get real one-on-one time with them. That implementation component is huge.</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Scott DiGregorio</div>
              <div class="quote-card__org">NEO Home Loans</div>
            </figcaption>
          </figure>
          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">Highly recommend The Loan Atlas. Being able to sit in on office hours and the live group coaching is worth the price itself!</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Gabe Garza</div>
              <div class="quote-card__org">The Mortgage Brokers</div>
            </figcaption>
          </figure>
          <figure class="quote-card">
            <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="quote-card__quote">I truly appreciate The Loan Atlas and the incredible support from the faculty. Kelly Marsh took the time to host a private Zoom call with my team and me, demonstrating how Mortgage Coach works. I'm so grateful that someone as busy and talented as her would invest that time in us.</blockquote>
            <figcaption class="quote-card__attr">
              <div class="quote-card__name">Charlie Peterson</div>
              <div class="quote-card__org">Member</div>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- ── Faculty Mentors ──────────────────────────────────────────── -->
    <section class="mentor-section">
      <div class="container">
        <div class="faculty-grid" data-reveal-stagger="60">
          <button class="faculty-card" type="button" data-faculty="josh-burruss">
            <div class="faculty-card__photo" data-initials="JB"><img src="<?php echo TLA_BASE; ?>/assets/josh-burruss-headshot.png" alt="Josh Burruss" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Josh Burruss</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Head of Retail Innovation, NEO Home Loans</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="julie-weix">
            <div class="faculty-card__photo" data-initials="JW"><img src="<?php echo TLA_BASE; ?>/assets/julie-weix-headshot.png" alt="Julie Weix" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Julie Weix</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Executive Coach, Performance Experts</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="tyler-osby">
            <div class="faculty-card__photo" data-initials="TO"><img src="<?php echo TLA_BASE; ?>/assets/tyler-osby-headshot.png" alt="Tyler Osby" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Tyler Osby</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Branch Manager and Certified Mortgage Planner, Fairway Independent Mortgage</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="brent-hicks">
            <div class="faculty-card__photo" data-initials="BH"><img src="<?php echo TLA_BASE; ?>/assets/brent-hicks-headshot.png" alt="Brent Hicks" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Brent Hicks</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Divisional President, Clear Modern Mortgage</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="marc-bui">
            <div class="faculty-card__photo" data-initials="MB"><img src="<?php echo TLA_BASE; ?>/assets/marc-bui-headshot.png" alt="Marc Bui" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Marc Bui</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Co-Founder &amp; Chief Financial Officer, Mamba Lending Capital Inc.</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="trevor-carlson">
            <div class="faculty-card__photo" data-initials="TC"><img src="<?php echo TLA_BASE; ?>/assets/trevor-carlson-headshot.png" alt="Trevor Carlson" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Trevor Carlson</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">President, Heritage Reverse Mortgage</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="mark-robertson">
            <div class="faculty-card__photo" data-initials="MR"><img src="<?php echo TLA_BASE; ?>/assets/mark-robertson-headshot.png" alt="Mark Robertson" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Mark Robertson</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Division President, NEO Home Loans</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="caleb-legrand">
            <div class="faculty-card__photo" data-initials="CL"><img src="<?php echo TLA_BASE; ?>/assets/caleb-legrand-headshot.png" alt="Caleb LeGrand" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Caleb LeGrand</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Branch Manager, CL Team at Luminate Home Loans</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="holly-walther">
            <div class="faculty-card__photo" data-initials="HW"><img src="<?php echo TLA_BASE; ?>/assets/holly-walther-headshot.png" alt="Holly Walther" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Holly Walther</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Branch Manager, Holly Walther Lending Team at Success Mortgage Partners, Inc.</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="kelly-marsh">
            <div class="faculty-card__photo" data-initials="KM"><img src="<?php echo TLA_BASE; ?>/assets/kelly-marsh-headshot.png" alt="Kelly Marsh" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Kelly Marsh</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Vice President &amp; Area Manager, The Kelly Marsh Team at Cornerstone Home Lending</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="jay-dacey">
            <div class="faculty-card__photo" data-initials="JD"><img src="<?php echo TLA_BASE; ?>/assets/jay-dacey-headshot.png" alt="Jay Dacey" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Jay Dacey</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">President, Jay Dacey Mortgage Team</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="steve-grossman">
            <div class="faculty-card__photo" data-initials="SG"><img src="<?php echo TLA_BASE; ?>/assets/steve-grossman-headshot.png" alt="Steve Grossman" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Steve Grossman</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Vice President, NJ Lenders Corp</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="katrinka-condie">
            <div class="faculty-card__photo" data-initials="KC"><img src="<?php echo TLA_BASE; ?>/assets/katrinka-condie-headshot.png" alt="Katrinka Condie" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Katrinka Condie</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Producing Branch Manager, NEO Home Loans</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="michael-belfor">
            <div class="faculty-card__photo" data-initials="MB"><img src="<?php echo TLA_BASE; ?>/assets/michael-belfor-headshot.png" alt="Michael Belfor" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Michael Belfor</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Branch Manager, American Pacific Mortgage</span></div>
          </button>
          <button class="faculty-card" type="button" data-faculty="becky-staples">
            <div class="faculty-card__photo" data-initials="BS"><img src="<?php echo TLA_BASE; ?>/assets/becky-staples-headshot.png" alt="Becky Staples" loading="lazy" /></div>
            <div class="faculty-card__body"><span class="faculty-card__name">Becky Staples</span><span class="faculty-card__role">Faculty Mentor</span><span class="faculty-card__current">Vice President &amp; Loan Originator, Sun American Mortgage</span></div>
          </button>
        </div>
      </div>
    </section>


    <!-- ── Section 4: Live Coaching Every Week ───────────────────────── -->
    <section class="access-section">
      <div class="container">
        <div class="access-intro" data-reveal="up">
          <h2 class="access-intro__title"><em>Live Coaching</em> Every Week</h2>
          <p class="access-intro__lead">
            Learning from elite originators is one thing. Having them available to answer any question you have
            and guide your next move? That's a game changer.
          </p>
        </div>
      </div>
      <div class="access-marquee" data-reveal="up" aria-hidden="true">
        <div class="access-marquee__track">
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-masterclass.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-office-hours.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-talk-to-tim.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-ai-labs.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-masterclass.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-office-hours.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-talk-to-tim.jpg" alt="" loading="lazy" /></div>
          <div class="access-marquee__item"><img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-ai-labs.jpg" alt="" loading="lazy" /></div>
        </div>
      </div>
    </section>

    <!-- ── Section 5: Final CTA ──────────────────────────────────────── -->
    <section class="close-section close-section--faculty" aria-labelledby="final-cta-heading">
      <div class="container close-section__grid">
        <div class="close-section__copy" data-reveal="up">
          <span class="close-section__eyebrow">Start Your Transformation</span>
          <h2 id="final-cta-heading" class="close-section__title">
            You Deserve to Be <em>Mentored by the Best</em>
          </h2>
          <p class="close-section__sub">
            From your first call script to your next hire, <strong>The Loan Atlas faculty</strong> is here
            to help you close more, serve better, and scale faster.
          </p>
        </div>

        <div class="close-section__actions" data-reveal="up" role="group" aria-label="Get started">
          <a class="close-section-action close-section-action--primary" href="/join/">
            <span>
              <span class="close-section-action__label">Join The Loan Atlas</span>
              <span class="close-section-action__hint">View membership options and get access today.</span>
            </span>
            <span class="close-section-action__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
            </span>
          </a>
          <a class="close-section-action close-section-action--secondary" href="/consultation/">
            <span>
              <span class="close-section-action__label">Book Your Free Coaching Session</span>
              <span class="close-section-action__hint">Start building your growth plan.</span>
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

  <!-- Faculty modal (single shared dialog, hydrated by JS) -->
  <dialog class="faculty-modal" id="facultyModal" aria-labelledby="facultyModalName">
    <button class="faculty-modal__close" type="button" aria-label="Close" data-modal-close>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="faculty-modal__inner">
      <div class="faculty-modal__left">
        <div class="faculty-modal__photo" id="facultyModalPhoto">
          <img id="facultyModalImg" src="" alt="" />
        </div>
        <div class="faculty-modal__identity">
          <h2 class="faculty-modal__name" id="facultyModalName"></h2>
          <span class="faculty-modal__title" id="facultyModalTitle"></span>
          <div class="faculty-modal__production" id="facultyModalProductionSection">
            <div class="faculty-modal__production-label" id="facultyModalProductionLabel">2025 Production</div>
            <div class="faculty-modal__production-value" id="facultyModalProduction"></div>
          </div>
          <div class="faculty-modal__production">
            <div class="faculty-modal__production-label" id="facultyModalSpecialtyLabel">Specialty</div>
            <div class="faculty-modal__production-value faculty-modal__production-value--specialty" id="facultyModalSpecialty"></div>
          </div>
        </div>
      </div>
      <div class="faculty-modal__right">
        <p class="faculty-modal__bio" id="facultyModalBio"></p>
        <div class="faculty-modal__video" id="facultyModalVideo"></div>
      </div>
    </div>
  </dialog>

  <!-- Faculty Profile popup (magazine layout) — filled from facultyData[slug].profile -->
  <dialog class="fp" id="facultyProfile" aria-labelledby="fpName">
    <button class="fp__close" type="button" aria-label="Close" data-fp-close>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
    </button>
    <div class="fp__scroll" id="fpScroll">
      <div class="fp__kicker">
        <img class="fp__logo" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-color.png" alt="The Loan Atlas" />
        <span class="fp__kicker-rule" aria-hidden="true"></span>
        <span>Meet Your Mentors</span>
      </div>
      <div class="fp__top">
        <div>
          <h2 class="fp__name" id="fpName"></h2>
          <p class="fp__role" id="fpRole"></p>
          <dl class="fp__rail" id="fpStats"></dl>
        </div>
        <figure class="fp__photo"><img id="fpImg" src="" alt="" /></figure>
      </div>
      <div class="fp__cols" id="fpBio"></div>
      <div class="fp__foot">
        <div><h3 id="fpExpTitle"></h3><ul class="fp__exp" id="fpExp"></ul></div>
        <div id="fpVideo"></div>
      </div>
    </div>
  </dialog>

  <script>
    (function () {
      const facultyData = {
        'tim-braheem': {
          name: 'Tim Braheem',
          title: 'Founder & Chief Content Officer',
          image: 'assets/tim-braheem-headshot.png',
          initials: 'TB',
          youtubeId: '2k1XrsEIKJ0',
          productionLabel: '',
          production2025: 'Tim has originated over $1.4 billion in personal production during his career as a loan originator.',
          bio: "Tim is the founder of The Loan Atlas and the foundation it's built on. He's a producer who built coaching because he couldn't find coaching that worked — and now teaches the operating system he wishes he'd had in the seat, every week, alongside the rest of the faculty. 30+ years as a mortgage originator with $1.4B in personal loan volume. Founded First Rate Financial in 1995 and co-founded Loantoolbox.com in 2001, which reached 10,800 paying members by 2006 and was named to the Inc. 500. Host of <em>The 360 Experience</em> podcast.",
          specialty: 'Architect of the Perfect Loan Process, the scripting frameworks, and the personal development work that runs underneath everything The Loan Atlas teaches. Leads Talk to Tim — the monthly coaching session where members bring real situations and Tim works through them live.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '1992' },
              { label: 'Current Role', value: 'Head Coach, Performance Experts' },
              { label: 'Lifetime Production', value: '$1.4 Billion' }
            ],
            summary: 'With more than 30 years of experience as a mortgage professional, industry leader, educator, and life coach, Tim Braheem is committed to engaging with individuals on a deep level to help them uncover the barriers they have placed in the way of having the success they deserve in both their business and personal lives.',
            bio: [
              'Tim Braheem is a highly successful mortgage professional turned coach and educator with more than 30 years of experience in the industry. Tim co-founded the Loan Atlas in 2023 to provide a dynamic learning platform and community for mortgage professionals to come together, share ideas, and gain knowledge from the greatest teaching faculty ever assembled in the mortgage industry.',
              'Tim has had a very long and storied career that has helped shape who he is, all while leading up to the industry-altering creation and launch of the Loan Atlas.',
              'From the founding of Performance Experts Coaching and the launch of the wildly popular <em>The 360 Experience</em> podcast to the many years he spent working in the mortgage industry, every moment of Tim’s career has contributed to the creation of the Loan Atlas.',
              'In 1995, at the age of 28, Tim founded First Rate Financial, one of the top mortgage companies in the United States. Much of his early success was a direct result of his commitment to creating systems of world-class customer service, evolving his sales and presentation skills, and focusing on database management.',
              'Because of Tim’s widely recognized reputation and success in the mortgage industry, his career as an educator and public speaker began in 1999 when several major financial institutions, including Bank of America, Suntrust, and Wells Fargo, hired him to train their staff on sales, marketing, systems of customer service, database management, and time management. Tim’s experience as an educator and public speaker would go on to inspire his next successful business venture, Loantoolbox.com.',
              'In 2001, Tim and his founding partner Richard Katz founded Loantoolbox.com, an online educational website for the mortgage industry. As founder, CEO, and Head of Faculty, Braheem quickly became one of the top educators in the mortgage industry, and by 2006, Loantoolbox.com had over 10,800 paying members who looked to Tim as their coach. Loantoolbox quickly became the standard for education within the mortgage space, and in 2006, Loantoolbox was recognized by <em>Inc. 500</em> Magazine as one of the 500 fastest-growing companies in the United States.',
              'After retiring at the age of 40, Tim obtained a Master of Arts Degree in Spiritual Psychology from the University of Santa Monica. His love for education would inspire the development of a coaching model and curriculum that would become the basis of a new venture, Performance Experts Coaching. This unique coaching system was created to help business professionals address their underperforming areas by removing limiting beliefs to enhance performance and achieve a more vibrant quality of life. Performance Experts Coaching evolved from humble beginnings to be one of the most influential personal and professional life coaching organizations in the United States.',
              'While developing Performance Experts Coaching and the exclusive Leadership360 Coaching Program, Tim also created and became the host of <em>The 360 Experience</em>, a podcast dedicated to bringing education in the areas of business and personal development. With <em>The 360 Experience</em>, Tim leverages his vast network of well-known teachers in the mortgage space and personal development field while using his ability to extract and summarize valuable teaching points to make for unique and in-depth experiences for the listener.'
            ],
            expertise: ['Scripting', 'Perfect Loan Process', 'Time Management', 'Personal Development', 'Database Management']
          }
        },
        'craig-strent': {
          name: 'Craig Strent',
          title: 'Head of Faculty',
          image: 'assets/craig-strent-headshot.png',
          initials: 'CS',
          youtubeId: 'OX74AstCAKQ',
          productionLabel: '',
          production2025: 'Craig has originated over $2 billion in personal production during his career as a loan originator.',
          bio: 'Craig is one of the few originators in the country who built a top 1% mortgage business almost entirely outside the Realtor referral channel. 25 years in the mortgage industry with $2B+ in loan volume — primarily through non-Realtor referral sources. Top 1% of mortgage bankers nationwide for 15+ years; named among America’s Most Influential Mortgage Executives. CMPS and CDLP certified; featured on NBC Nightly News, CNBC, and Fox Morning News.',
          specialty: 'Non-Realtor referral building and trusted advisor positioning — advisory-style client relationships and financial planner partnerships at a level very few originators have replicated.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '1994' },
              { label: 'Current Role', value: 'Head of Faculty, The Loan Atlas' },
              { label: 'Lifetime Production', value: 'Over $2 Billion' }
            ],
            summary: 'With over 30 years of experience as a dynamic and influential leader in the mortgage industry, Craig Strent is passionate about networking, business development, and mentoring the next generation of mortgage professionals looking to make their mark in the industry and become the influential leaders and industry giants they are destined to be.',
            bio: [
              'For more than 15 years, Craig has been consistently ranked among the top 1% of mortgage bankers nationwide and named among America’s Most Influential Mortgage Executives. In addition to Craig’s Certified Mortgage Planning Specialist (CMPS) designation, which speaks to his mortgage planning expertise in working with financial advisers to tailor a mortgage that complements long-term financial goals, he is also a Certified Divorce Lending Professional (CDLP), which allows him to effectively work on Professional Divorce teams. He is also a proud graduate of American University’s Kogod School of Business.',
              'Over the years, Craig has been recognized as a subject matter expert. He has garnered national and local media attention for his adept understanding of the mortgage and housing market. He has provided commentary on NBC Nightly News, CNBC, News Channel 8, and Fox Morning News, and his writing has appeared in several notable publications, including the <em>Washington Business Journal</em>.',
              'Craig is a longtime member of the Greater Washington Board of Trade, where he served on the Board of Directors for four years and co-chaired the membership committee. Craig is a graduate of Leadership Greater Washington, where he served on the Board for six years and chaired the membership, selection, and nomination committees. Craig is also a member of the Economic Club of Washington, where he joins the likes of other CEOs, Presidents, and significant national corporation heads to attend exclusive events that signal the future of the U.S. economy and the local business landscape.'
            ],
            expertise: ['Leadership', 'Perfect Loan Process', 'Financial Planner Business Development']
          }
        },
        'josh-mettle': {
          name: 'Josh Mettle',
          title: 'Head of Faculty',
          image: 'assets/josh-mettle-headshot.png',
          initials: 'JM',
          youtubeId: 'bMPntUVuPhk',
          production2025: '$190.8M · 358 families served',
          bio: "Josh is one of the most successful originator-leaders in the country — a top 1% producer who has scaled into division leadership while continuing to publish, podcast, and build a public-facing brand that produces real loan volume. 25+ years in the mortgage industry with $1.17B in personal production. Top 1% of mortgage originators in 2020 per <em>Mortgage Executive Magazine</em>. Currently leads a $250M production team; co-owns a nine-figure real estate portfolio.",
          specialty: 'Marketing that compounds — content, audience-building, consumer-direct strategy. Also drives the faculty’s work on health, energy, and financial freedom.',
          // New magazine-style popup. Any member with `profile` gets it.
          profile: {
            // Subheader under the name = Loan Atlas role (data.title). Stats stack vertically.
            stats: [
              { label: 'Originating Since', value: '2001' },
              { label: 'Current Role', value: 'Division President, NEO Home Loans' },
              { label: '2025 Production', value: '<span class="fp__nw">$191M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">358 Families Served</span>' }
            ],
            summary: 'With more than 25 years in the mortgage industry and over $1.17 billion in personal production, Josh Mettle is an industry-leading author and mortgage originator, ranking in the top 1% of mortgage originators in 2020 by <em>Mortgage Executive Magazine</em>.',
            bio: [
              'Josh is a Division President at NEO Home Loans and Co-founder of Triibe Coaching. NEO represents a new way of doing home loans for people looking to maximize their wealth through proactively managing their mortgages and utilizing various wealth creation strategies over the life of a loan. With the help of Josh and his team, homeowners can work towards creating generational wealth and financial independence.',
              'With Triibe Coaching, Josh has worked with mortgage professionals for several years to help them excel in their careers and personal lives, making every aspect of life more abundant. Members of the Triibe look to Josh for coaching on content marketing, financial freedom, adapting quickly to market conditions, and spending their time where it will have the most impact.',
              'On top of being a seasoned mortgage professional and professional life coach, Josh is an industry-leading author and podcast host. His drive to help create successful homebuyers and investors is illustrated in his book, <em>Why Physician Home Loans Fail</em>, and his podcast, <em>Infinite Financial Freedom</em>.',
              'His podcast, <em>Infinite Financial Freedom</em>, interviews financial advisors, investors, and entrepreneurs who have found success and financial freedom through smart money management. Topics include personal finance, investing, real estate, retirement planning, and living your best life. These topics all align with Josh’s overall philosophy and goal of helping homeowners get the most out of their investments.',
              'The many years of mortgage industry experience combined with the valuable experience of coaching mortgage professionals and being a podcast personality who is afraid to tackle even the most complex topics make Josh Mettle a solid mentor and member of the Loan Atlas faculty.'
            ],
            expertise: ['Marketing', 'Consumer Direct', 'Health and Wellness', 'Financial Freedom']
          }
        },
        'josh-burruss': {
          name: 'Josh Burruss',
          title: 'Faculty Mentor',
          image: 'assets/josh-burruss-headshot.png',
          initials: 'JB',
          youtubeId: 'cnr66dFho4k',
          production2025: '$82.5M volume · 125 families served',
          bio: "Josh Burruss is a distinguished figure in the mortgage industry, bringing over 21 years of experience and an impressive $900 million + in loan origination. As the Head of Retail Innovation for NEO Home Loans, powered by Better, his expertise spans secondary markets, executive management, and builder business.<br><br>His journey in the mortgage world is marked by a diverse skill set, enabling him to navigate complex loan programs with ease. This rare ability allows him to effectively communicate intricate mortgage concepts to customers and professionals, setting him apart in the field.<br><br>Josh's commitment to mentorship and warm, engaging personality makes him a standout member of The Loan Atlas faculty. His insights are invaluable for those looking to understand and excel in the nuanced world of mortgages.<br><br>Outside of his professional sphere, Josh cherishes time with his family in Aldie, Virginia. His life is enriched by hobbies like playing hockey, practicing martial arts, and honing his golf skills, reflecting a well-rounded approach to life and work. Josh's balance of professional excellence and personal passion makes him a model mentor for Loan Atlas members, guiding them through the complexities of the mortgage industry with expertise and ease.",
          specialty: 'Sales leadership and the builder business — winning and retaining builder relationships, building high-performing sales teams, and the loan-program fluency that keeps originators competitive in any market.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '2006' },
              { label: 'Current Role', value: 'Head of Retail Innovation, NEO Home Loans' },
              { label: '2025 Production', value: '<span class="fp__nw">$85.2M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">125 Families Served</span>' }
            ],
            summary: 'With over 20 years of experience in the mortgage industry, Josh Burruss brings a unique and vast knowledge and skill set that helps him think “outside of the box” when it comes to sales and creating a seamless mortgage experience from start to finish. He is also a loan product expert with the rare ability to explain complex loan programs and concepts to customers and other mortgage professionals.',
            bio: [
              'Josh Burruss is a distinguished figure in the mortgage industry, bringing over 21 years of experience and an impressive $900 million + in loan origination. As the Head of Retail Innovation for NEO Home Loans, powered by Better, his expertise spans secondary markets, executive management, and builder business.',
              'His journey in the mortgage world is marked by a diverse skill set, enabling him to navigate complex loan programs with ease. This rare ability allows him to effectively communicate intricate mortgage concepts to customers and professionals, setting him apart in the field.',
              'Josh’s commitment to mentorship and warm, engaging personality makes him a standout member of The Loan Atlas faculty. His insights are invaluable for those looking to understand and excel in the nuanced world of mortgages.',
              'Outside of his professional sphere, Josh cherishes time with his family in Aldie, Virginia. His life is enriched by hobbies like playing hockey, practicing martial arts, and honing his golf skills, reflecting a well-rounded approach to life and work. Josh’s balance of professional excellence and personal passion makes him a model mentor for Loan Atlas members, guiding them through the complexities of the mortgage industry with expertise and ease.'
            ],
            expertise: ['Leadership', 'Loan Programs', 'Sales', 'Builder Business']
          }
        },
        'julie-weix': {
          name: 'Julie Weix',
          title: 'Faculty Mentor',
          image: 'assets/julie-weix-headshot.png',
          initials: 'JW',
          youtubeId: 'Cu04tdoY1HM',
          productionHide: true,
          production2025: '',
          bio: "Julie coaches more than 60 of the nation's top-producing originators one-on-one. Her work focuses on the patterns underneath production — how the highest performers protect their time, manage their energy, and lead themselves before they lead anyone else.",
          specialty: 'The mindset and the calendar — personal leadership, time and task management, and the inner work that separates originators who hit one strong year from originators who compound year over year.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '2013' },
              { label: 'Current Role', value: 'Executive Coach, Performance Experts' }
            ],
            summary: 'With more than 15 years of high-level corporate experience and a decade of experience as a coach and mentor for high-performing mortgage professionals, Julie Weix is passionate about empowering people to break through perceived barriers to live the life of their dreams, achieve their goals, and experience breakthrough success.',
            bio: [
              'Julie received her Bachelor of Science in Business from Miami University in Oxford, Ohio, in 1998. After graduating, Julie accumulated a tremendous amount of business experience related to supply chain, global business processes, and change management, working for Fortune 100 company Kraft Foods for 15 years.',
              'Julie brings her leadership, team management, time management, process management, and communication background to support her clients and their teams. She is passionate about helping people bring their best selves to work and leveraging their team members’ skill sets to produce excellent results. Her experience in supporting large-scale corporate change and redefining business processes across the globe enables her to easily understand complex business situations, provide clarity, and create a successful path forward for her clients.',
              'In 2014, Julie earned a Master of Arts degree in Spiritual Psychology and then a concentration in Consciousness, Health, and Healing in 2016, both from the University of Santa Monica. She is also a Certified Coach through the Newfield Network International Coaching School in Boulder, Colorado.',
              'As an Executive Coach with Performance Experts, Julie coaches and supports high-performing originators in achieving extraordinary results in their businesses and lives. As co-facilitator of the L360 Signature Program and L360 Masters Program, she leads clients in deepening their self-awareness and business skillsets to produce results and achieve goals. She coaches 60+ of the nation’s top-producing loan originators.',
              'Julie has also led group workshops with mortgage teams since 2015, both in Los Angeles and in different client offices across the country. As a result, she is intimately familiar with the challenges origination teams face and has helped many teams optimize interactions to work more efficiently and effectively. Julie also leads the Leadership 360 Masters Site Visit program, facilitating bi-annual office visits to client offices. She excels in working with teams to optimize their performance.'
            ],
            expertise: ['Leadership', 'Personal Development', 'Mindset', 'Time and Task Management']
          }
        },
        'tyler-osby': {
          name: 'Tyler Osby',
          title: 'Faculty Mentor',
          image: 'assets/tyler-osby-headshot.png',
          initials: 'TO',
          youtubeId: 'wiDWdTX1n3Y',
          production2025: '$60.9M volume · 210 families served',
          bio: 'Tyler has personally helped more than 1,962 families across $422M in lifetime production, all while building a parallel reputation as one of the most systems-minded originators in the country. Through Osby Labs, he develops the technology stacks and automated workflows that top originators actually use.',
          specialty: 'Systems, technology, and scripting — turning the day-to-day execution of calls, follow-ups, and workflows into something that runs without an originator having to remember every step.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '2004' },
              { label: 'Current Role', value: 'Branch Manager and Certified Mortgage Planner, Fairway Independent Mortgage' },
              { label: 'Lifetime Production', value: '<span class="fp__nw">$422M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">1,962 Families Served</span>' }
            ],
            summary: 'With over 20 years of experience in the mortgage industry, Tyler Osby is passionate about showing other businesses and individuals how to build profitable businesses through effective marketing and the use of technology. His knowledge of marketing, technology, and everything financial, combined with his love for mentoring and public speaking, make him an ideal mentor and team member of the Loan Atlas faculty.',
            bio: [
              'With over two decades in the mortgage industry and over $422 million in origination volume, Tyler Osby’s vast experience and expertise in technology and marketing make him the perfect mentor for originators looking to take their businesses to the next level.',
              'Tyler is the Branch Manager and a Certified Mortgage Planner with the Tyler Osby Team at Fairway Independent Mortgage. In this capacity, Tyler has devoted his career to helping families find and secure their dream homes by providing affordable mortgage and refinance options quickly and with no surprises. At the moment, Tyler has helped over 1,962 families get into their dream homes, and he has plans to boost that number even higher. As a family man, Tyler is passionate about helping families find and move into the homes they deserve.',
              'Tyler is also the owner and founder of Osby Labs, a consulting and software company he created in 2009 that takes marketing strategies from conception to implementation using tested technology strategies. At Osby Labs, Tyler and his team teach business owners and individuals how to expand their current operations by implementing proven strategies and systems using technology to help them become better marketers and keep their pipeline filled with pre-disposed and pre-qualified clients.',
              'As part of his role at Osby Labs, Tyler travels all over the United States to speak to companies, associations, and other professional organizations about using technology to create highly leveraged and profitable businesses.',
              'Around the same time Tyler was getting Osby Labs up and running, his vast knowledge of the mortgage industry and personal finance earned him a weekly column at the trendy <em>Juice</em> magazine, a weekly publication owned by the <em>Des Moines Register</em>. The column “Personal and Mortgage Finance” focused on educating consumers to improve their financial IQs and help them become better-educated homeowners and home buyers.'
            ],
            expertise: ['Systems', 'Technology', 'Scripting', 'Business Development']
          }
        },
        'brent-hicks': {
          name: 'Brent Hicks',
          title: 'Faculty Mentor',
          image: 'assets/brent-hicks-headshot.png',
          initials: 'BH',
          youtubeId: 'W1u-X5dArWc',
          productionLabel: '',
          production2025: 'Brent has originated over $1.5 billion in personal production during his career as a loan originator.',
          bio: "Brent has personally originated more than $1.5B in loan volume, earned top-50-nationwide rankings, and now leads a division as one of the country's most respected mortgage executives. His path moved from elite individual production into building and recruiting teams that perform at the same level.",
          specialty: 'Leadership, team building, and recruiting — done at the highest level, first as an elite producer, then as a leader scaling teams that perform at the same level he did.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '1997' },
              { label: 'Current Role', value: 'Divisional President, Clear Modern Mortgage' },
              { label: 'Lifetime Production', value: '$1.5 Billion' }
            ],
            summary: 'With 25+ years of experience in the mortgage industry and over $1.5 billion in personal loan production, Brent Hicks is passionate about innovation, technology, and helping families get into the homes that they deserve so they can start to create generational wealth and explore additional investment opportunities.',
            bio: [
              'Brent is the Divisional President with Clear Modern Mortgage, where he has a proven track record of achieving exceptional results for families looking for real estate, whether it is their first home or their forever home. His core values of honesty and integrity are the foundation of his success. He also prioritizes providing customers with an innovative perspective while also providing his attention, exceptional service, and professional insights before, during, and after closing.',
              'Another source of Brent’s incredible success in the mortgage industry is that he is an industry leader best known for refining a series of systems and automated processes that helped revolutionize the origination business.',
              'Brent has been recognized by <em>Mortgage Originator Magazine</em> for seven years and has achieved their ranking as Top 50 Nationwide (including #3 Nationwide and #1 in Texas for FHA &amp; VA). He’s also been listed as a Top 50 Loan Originator by the <em>Scotsman Guide</em>.',
              'Before joining Clear Modern Mortgage, Brent served as Branch Manager and Senior Mortgage Originator at First Choice Loan Services and was the Owner and President of City Mortgage Group.',
              'In addition to being a high-performing mortgage professional, Brent is also the co-founder and CEO of EvolvHealth LLC, a company with a mission of helping people achieve their health and wellness goals.'
            ],
            expertise: ['Leadership', 'Team Building', 'Recruiting']
          }
        },
        'marc-bui': {
          name: 'Marc Bui',
          title: 'Faculty Mentor',
          image: 'assets/marc-bui-headshot.png',
          initials: 'MB',
          youtubeId: 'CsdqQu0XHaA',
          production2025: '$45.9M volume · 70 families served',
          bio: "Marc has personally originated $750M while building a 75,000+ Instagram audience that generates real loan volume. He's one of the few originators who has cracked social media as a primary lead source instead of a vanity channel.",
          specialty: 'Social media marketing, with deep authority on Instagram specifically — the difference between content that builds an audience and content that builds a pipeline, and how to do the latter while running a real origination business.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '1999' },
              { label: 'Current Role', value: 'Co-Founder &amp; Chief Financial Officer, Mamba Lending Capital Inc.' },
              { label: '2025 Production', value: '<span class="fp__nw">$45.9M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">70 Families Served</span>' }
            ],
            summary: 'With nearly 27 years of mortgage industry experience and a lifetime origination volume of more than $750 million, Marc Bui is passionate about helping families secure homes and educating the homebuying public on matters of personal finance through informative and entertaining content.',
            bio: [
              'Before founding Mamba Lending Capital, Marc was a Branch Manager at Thrive Lending Group at Arbor Financial Group, a nationally recognized lending team in Santa Ana, California. As Branch Manager, Marc devoted his time to helping countless families and first-time homebuyers find a place to call home to achieve financial freedom and generate wealth.',
              'Before assembling his team at Thrive Lending Group, Marc spent decades working for big-name financial institutions like Bank of America, the Loan Depot, and Fairway Independent Mortgage Corporation. As a Senior Loan Officer, Marc was able to hone his knowledge and expertise, which would later become the basis of his widely successful and influential Instagram personality.',
              'Recently, Marc’s Instagram presence has reached nearly 75,000 followers and continues to grow. Many people look to Marc for his creative, funny, and insightful content that addresses many of the real concerns that people have when it comes to mortgages, investment properties, and personal finance.',
              'Marc is not only a force to be reckoned with on Instagram, but he is a marketing wiz that is versed in many methods of reaching people through social media, email, and direct marketing. He has a unique gift for identifying the problem that most people have, finding the solution, and offering it in an easily digestible way to a wide range of people, from the first-time homebuyer to the seasoned real estate investor.'
            ],
            expertise: ['Social Media Marketing', 'Instagram']
          }
        },
        'trevor-carlson': {
          name: 'Trevor Carlson',
          title: 'Faculty Mentor',
          image: 'assets/trevor-carlson-headshot.png',
          initials: 'TC',
          youtubeId: 'F48bmBMJDiI',
          production2025: '$21M volume · 69 families served',
          bio: 'Trevor has helped more than 1,700 families across $400M+ in lifetime production, with deep expertise in the reverse mortgage market most originators never touch. He runs his business through a tightly engineered consumer-direct system.',
          specialty: 'Reverse mortgage, plus consumer-direct marketing and operational systems — adding reverse as a complementary product line to a traditional mortgage business, and running a high-volume direct-to-consumer model with discipline.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '2006' },
              { label: 'Current Role', value: 'President, Heritage Reverse Mortgage' },
              { label: '2025 Production', value: '<span class="fp__nw">$21M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">69 Families Served</span>' }
            ],
            summary: 'Trevor Carlson is on a mission to fix the retirement train wreck in America. He attributes his successes to being laser-focused on being the best at a few things vs. being good at everything. Trevor is fully committed to HECM Reverse Mortgages and loves utilizing this product to improve the lives of his clients, team, family, and community.',
            bio: [
              'With a lifetime origination volume of more than $400 million and nearly 20 years working in the mortgage industry, Trevor Carlson decided to share his knowledge and experience by becoming a Faculty Mentor with the Loan Atlas in 2023.',
              'For Trevor, the first few years of his career were extremely trying at times because of the Great Recession. Still, despite the challenges, Trevor has always found a way to thrive in the mortgage industry through hard work, integrity, and constantly seeking to learn and grow as a professional.',
              'Trevor is the President of Heritage Reverse Mortgage and lives with his family in St. George, Utah. Though he is experienced in most mortgage products, including VA, FHA, USDA, Conventional, and Jumbo loans, Trevor’s primary focus and expertise is with HECM Reverse Mortgages.',
              'Trevor’s mission is to be the Premier Reverse Mortgage Specialist in Southern Utah and beyond. He is driven by a desire to make life better for everyone he touches and loves, and he uses reverse mortgages to accomplish this for his customers and the people in his life.',
              'Although he is most focused on reverse mortgages as President of Heritage Reverse Mortgage, Trevor spent many years working at Patriot Home Mortgage as a National Sales Division Manager and at Academy Mortgage Corporation as a Sales Manager/Home Loan Professional. In these capacities, Trevor was able to hone his experience and become an influential leader overseeing teams of loan originators, processors, and telemarketers. He was also in charge of marketing, customer service, brand recognition, online branding, recruiting, and client retention, on top of being a top-producing originator himself.',
              'Trevor has an associate’s degree from Utah State University, a bachelor’s degree in Business Management from Southern Utah University, and a Master of Business Administration from the University of Phoenix.'
            ],
            expertise: ['Reverse Mortgage', 'Systems', 'Consumer Direct Marketing']
          }
        },
        'mark-robertson': {
          name: 'Mark Robertson',
          title: 'Faculty Mentor',
          image: 'assets/mark-robertson-headshot.png',
          initials: 'MR',
          youtubeId: 'AjnjsvWgMCg',
          production2025: '$65.9M volume · 76 families served',
          bio: 'Mark has originated more than $931M in lifetime production and has been ranked in the top 1% of originators by <em>Scotsman Guide</em>. He now leads a division at NEO while continuing to operate one of the strongest Realtor referral businesses in the country.',
          specialty: 'Realtor business development and the strategy that holds it together — operating a top 1% referral-based business, and building or rebuilding teams around the same model.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '2001' },
              { label: 'Current Role', value: 'Division President, NEO Home Loans' },
              { label: '2025 Production', value: '<span class="fp__nw">$65.9M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">76 Families Served</span>' }
            ],
            summary: 'With more than 25 years of experience in the mortgage industry, Mark Robertson is consistently ranked in the top 1% of loan originators by the <em>Scotsman Guide</em>. He credits his success to his extreme speed in implementing good ideas and his fun and energetic personality.',
            bio: [
              'Mark is a Division President and co-creator of NEO Home Loans, where he has worked toward changing the narrative around what is essential in the mortgage industry. His primary focus is empowering clients to make informed decisions about home ownership, debt management, and wealth creation. As more companies are looking to AI and automation to guide people through the mortgage process, Mark and his team are pushing back, providing personable and personalized service to every one of their clients.',
              'Mark has a lifetime origination volume of over $931 million and is consistently ranked in the top 1% of loan originators by the <em>Scotsman Guide</em>. As a coach and co-creator of Triibe Coaching, he worked directly with other mortgage professionals to help them develop strategies and remove barriers to identify paths that lead to success in their personal and professional lives. His fun and energetic personality brings contagious inspiration to each coaching session, and members look to Mark for guidance on decisiveness, team building, and authentic living.',
              'Because of his extensive experience in the mortgage industry and his many years of being an effective leader, mentor, and coach, and because he approaches every situation with a warm and approachable spirit, Mark Robertson has so much to offer as a Faculty Mentor and member of the Loan Atlas.'
            ],
            expertise: ['Strategy', 'Team Building', 'Realtor Business Development']
          }
        },
        'caleb-legrand': {
          name: 'Caleb LeGrand',
          title: 'Faculty Mentor',
          image: 'assets/caleb-legrand-headshot.png',
          initials: 'CL',
          youtubeId: 'SBjOcwAn2UM',
          production2025: '$69.7M volume · 200 families served',
          bio: 'Caleb has helped more than 5,017 families across $1.12B+ in lifetime production while building one of the most respected branch teams in the industry. His work is grounded in the day-to-day systems that make consistency possible.',
          specialty: 'The Perfect Loan Process, the System for Selling, and the builder business — installing the execution systems that take a top originator from solo producer to a team that runs without chaos.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '2006' },
              { label: 'Current Role', value: 'Branch Manager, CL Team at Luminate Home Loans' },
              { label: '2025 Production', value: '<span class="fp__nw">$69.7M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">200 Families Served</span>' }
            ],
            summary: 'Since switching over from accounting to the mortgage industry, Caleb LeGrand has provided more than 17 years of client-centric service, leading to him being one of the most productive loan originators in the industry. Caleb is a master of customer service, and his production numbers speak for themselves.',
            bio: [
              'Caleb is a graduate of Bob Jones University with a degree in Accounting. Caleb began his career as a practicing accountant for Deloitte and later Dixon-Hughes before entering mortgage banking in 2006. Mortgage banking and helping clients make informed decisions on their mortgages is not only Caleb’s profession but also his passion.',
              'As Branch Manager at CL Team at Luminate Home Loans, Caleb helps his clients reach their short and long-term wealth goals by offering unique insights to help them increase their liquidity, safety net, and rate of return while minimizing taxes and maximizing wealth. These unique insights help Caleb establish himself as a true debt manager in the lives of his clients that, in many ways, goes beyond a single mortgage and a single closing on a single property.',
              'His passion for the client has driven Caleb to unprecedented levels of success as to be named in the top 1% of producers in 2022 by the <em>Scotsman Guide</em>. Caleb’s client-centered approach has allowed him to help more than 5,017 families achieve the American Dream of home ownership while reaching more than $1.12 billion in loan origination volume.',
              'Caleb’s mastery of customer service, his incredible success in the mortgage industry, and his deep knowledge of financials make him a valuable contributor to the Loan Atlas in his capacity as Faculty Mentor.'
            ],
            expertise: ['Perfect Loan Process', 'Systems of Selling', 'Builder Business', 'Team Building']
          }
        },
        'holly-walther': {
          name: 'Holly Walther',
          title: 'Faculty Mentor',
          image: 'assets/holly-walther-headshot.png',
          initials: 'HW',
          youtubeId: 'TBqZZdETO8M',
          production2025: '$46.4M volume · 124 families served',
          bio: 'Holly has originated $1B in lifetime production and helped more than 5,000 families, all while raising a family and building a business that doesn’t run her life. Her authority comes from doing both at a level very few originators in the industry have managed.',
          specialty: "Work, life, and family balance — backed by real workflow systems. Holly is also one of the faculty's strongest voices on women empowerment in the industry, centered on building a high-producing business that doesn't consume the rest of an originator's life.",
          profile: {
            stats: [
              { label: 'Originating Since', value: '1998' },
              { label: 'Current Role', value: 'Branch Manager, Holly Walther Lending Team at Success Mortgage Partners, Inc.' },
              { label: '2025 Production', value: '<span class="fp__nw">$46.4M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">124 Families Served</span>' }
            ],
            summary: 'With more than 25 years of mortgage industry experience and over $1 billion in loan origination volume, Holly applies the same love and devotion that she has for her family to help other families achieve their dreams. For Holly, homeownership is not just a financial symbol or a way of accumulating wealth; it is the bedrock from where a family can grow.',
            // Bio condensed from Holly's personal website story (first person → third person).
            bio: [
              'Holly has a lifetime origination volume of $1 billion and has helped over 5,000 families. She has been the Top Originator at SMP for seven years and ranks in the Top 10 in MBAG. She is a multiple-year Platinum and Diamond recipient on <em>Atlanta Agent Magazine</em>’s Top Lender list since 2014, a Best of Cobb and Best of Perimeter recipient for the past five years, a <em>Scotsman Guide</em> Top Originator, and a multiple-time honoree on the <em>Scotsman Guide</em> Top Women Originators list.',
              'Family is at the center of everything Holly does — it is the reason she works and her constant motivation to do well. That same conviction shapes how she runs her business: she believes every loan has real people and real stories behind it. In a world where so many important decisions are made online and by algorithms, Holly has built her team on the promise of being there for clients, teaching them their options and advocating for them through the sea of red tape.',
              'As Branch Manager of the Holly Walther Lending Team at Success Mortgage Partners, Holly leads one of the top mortgage teams in the Southeast, backed by a 100% closing record on preapproved loans. Her team serves first-time buyers, new construction, multi-property purchasers, and real estate investors with a concierge-level service built on transparent communication, honesty, integrity, and a solution-based approach to every challenge in the lending process.',
              'Holly is deeply passionate about empowering women to find their voice, strength, and confidence and to take control of their financial futures. Over the next five years, her mission is to help more than 2,000 women across the Southeast achieve the dream of homeownership by providing the tools, education, and guidance they need to navigate the home-buying process with confidence.',
              'Her husband, a retired Fire Captain, spent 27 years in the fire service, much of it protecting the City of Johns Creek, an Atlanta suburb. Inspired by his selflessness, Holly is equally committed to helping those who protect, serve, and care for our country and communities achieve homeownership.'
            ],
            expertise: ['Work/Life/Family Balance', 'Women Empowerment', 'Workflow Processes']
          }
        },
        'kelly-marsh': {
          name: 'Kelly Marsh',
          title: 'Faculty Mentor',
          image: 'assets/kelly-marsh-headshot.png',
          initials: 'KM',
          youtubeId: 'eQdjTopvrek',
          production2025: '$36.9M volume · 54 families served',
          bio: 'Kelly has originated more than $1B in lifetime production and now leads at Cornerstone while hosting the <em>Think & Grow</em> podcast. Her business has always been built on a database that produces year after year.',
          specialty: 'Database nurturing and management, plus mindset and personal development — turning past clients and sphere of influence into a compounding production engine, and the leadership required to sustain it.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '1997' },
              { label: 'Current Role', value: 'Vice President &amp; Area Manager, The Kelly Marsh Team at Cornerstone Home Lending' },
              { label: 'Lifetime Production', value: 'Over $1 Billion' }
            ],
            summary: 'With nearly 30 years of experience in the mortgage industry, Kelly is the Area Manager for Cornerstone Home Lending’s branches in California and Nevada. Celebrated for closing over $1 billion in loans, Kelly has been featured in numerous national publications and industry podcasts.',
            bio: [
              'Born and raised in the community of Santa Barbara, which she now serves, Kelly is committed to helping her clients navigate the most complex financial transaction: a home mortgage. Kelly believes clients are clients for life and continues to nurture relationships beyond the closing of the loan. Her clients are referred from a network of local businesses, including financial planners, accountants, real estate agents, and satisfied past clients. She strongly believes in the power of clear communication with clients and, with this, has developed her own systems to originate a loan from start to finish.',
              'Kelly has nearly 30 years of experience in the mortgage industry and is recognized annually by <em>Scotsman Guide</em> for Most Closed Loans, Top Purchase and Refinance Volume, and Top Dollar Volume. Her industry experience and vast knowledge have also been featured in the <em>Santa Barbara News-Press</em>, <em>Santa Barbara Independent</em>, the trade journal <em>Origination News</em>, and other publications, and she hosts the <em>Think &amp; Grow</em> podcast. Additionally, Kelly regularly facilitates seminars for real estate professionals, looking to grasp how the way she has dedicated her life to fostering relationships and implementing efficient systems has contributed to her success.',
              'As Vice President of Cornerstone Home Lending, Kelly leads a team of highly skilled and experienced support staff and loan originators whom she meets with weekly to review their current pipeline and thoroughly improve and streamline their systems. The systems she has implemented in her business through the years have resulted in some of the best and brightest to come work with her, hoping to learn from her process improvement expertise and wanting to provide a customer experience that never disappoints.',
              'Kelly believes anything is possible with the right people on her team, and because of this, she joined the Loan Atlas team as a Faculty Mentor in 2024. As a Faculty Mentor at the Loan Atlas, Kelly shares her secrets to success and unique loan processing systems with a much wider audience of mortgage professionals eager to learn from one of the true masters.'
            ],
            expertise: ['Database Nurturing and Management', 'Leadership', 'Mindset and Personal Development']
          }
        },
        'jay-dacey': {
          name: 'Jay Dacey',
          title: 'Faculty Mentor',
          image: 'assets/jay-dacey-headshot.png',
          initials: 'JD',
          youtubeId: 'wpbW4SN-pzk',
          production2025: '$73.9M volume · 199 families served',
          bio: 'Jay has originated more than $500M in lifetime production and runs one of the most respected mortgage teams in the Twin Cities market. His business runs on database depth and a tightly engineered loan process.',
          specialty: 'Database management and the Perfect Loan Process, with deep specialization in first-time homebuyers and divorce-situation lending — serving clients in moments of major life transition.',
          profile: {
            photo: 'assets/jay-dacey-headshot-WIDE.png', // wider cutout for the popup; grid card keeps the original
            stats: [
              { label: 'Originating Since', value: '2003' },
              { label: 'Current Role', value: 'President, Jay Dacey Mortgage Team' },
              { label: '2025 Production', value: '<span class="fp__nw">$73.9M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">199 Families Served</span>' }
            ],
            summary: 'With 23 years of experience in the mortgage industry and over $500 million in loan origination volume, Jay brings his vast experience and expertise in database management and problem-solving to the Loan Atlas. Jay is also a Perfect Loan Process expert with plenty of knowledge to share from his experience working with teams and eliminating inefficiencies and barriers to success.',
            bio: [
              'Jay Dacey is a financial educator helping clients plan for, obtain, and manage the liability side of their balance sheets by integrating the proper mortgage instruments to maximize cash flow and minimize tax liability. He is a true debt manager who has helped countless clients on the path to generational wealth.',
              'After graduating from the University of Saint Thomas with a B.A. in Finance and Entrepreneurship, Jay started as a loan originator and quickly became a branch manager for Primary Residential Mortgage, one of the largest correspondent lenders in the country. This led to his next position as a mortgage advisor specializing in FHA and conventional home loans at Metropolitan Financial Mortgage Company, where he spent more than 11 years helping families manage their finances to preserve and grow their assets.',
              'In 2019, Jay started his own mortgage brokerage, The Jay Dacey Mortgage Team, which is currently licensed in MN, WI, and FL. With the philosophy of creating a great customer experience each and every time, Jay and his team have quickly risen to one of the largest independent mortgage brokerage firms in the state of Minnesota. Much of his success can be attributed to his ability to provide peace of mind for his clients by solving complex problems, maintaining proactive communications, and closing on time — every time.',
              'Because of all of his success, Jay has been named a top mortgage professional by the <em>Twin Cities Business Journal</em>/<em>MSP</em> magazine every year since 2014. He is also a frequent contributor to national media outlets such as CBS News, CNBC, and Yahoo Money for all things mortgage, credit, and real estate related.',
              'Jay’s greatest strengths are database management, solving complex problems, and implementing the Perfect Loan Process with his team. It is these strengths, combined with his wealth of knowledge and experience, that make him the perfect Faculty Mentor for the Loan Atlas.'
            ],
            expertise: ['Database Management', 'Perfect Loan Process', 'First Time Home Buyers and Divorce Situations']
          }
        },
        'steve-grossman': {
          name: 'Steve Grossman',
          title: 'Faculty Mentor',
          image: 'assets/steve-grossman-headshot.png',
          initials: 'SG',
          youtubeId: 'RoCT9M3r9Hs',
          production2025: '$52.9M volume · 90 families served',
          bio: 'Steve has originated more than $3B in residential loans, helped over 7,800 families, and has been ranked in the top 1% of originators every single year since 2001. Two decades of consistency at that level is a credential almost nobody in the industry holds.',
          specialty: 'Strategy and vision — the long view. Figuring out where a mortgage business is going and how to position for the next ten years, not the next ninety days.',
          profile: {
            photo: 'assets/steve-grossman-headshot-WIDE.png', // wider cutout for the popup; grid card keeps the original
            stats: [
              { label: 'Originating Since', value: '1991' },
              { label: 'Current Role', value: 'Vice President, NJ Lenders Corp' },
              { label: '2025 Production', value: '<span class="fp__nw">$52.9M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">95 Families Served</span>' }
            ],
            summary: 'With over 35 years in the residential mortgage industry, Steve Grossman is a driving factor behind the growth of NJ Lenders Corp. As an originator, Steve has closed over $3 billion in residential loans, assisted more than 7,800 families, and has been recognized in the Top 1% of Originators every year since 2001. Steve offers a wealth of industry experience in marketing, origination, capital markets, and all facets of operations.',
            bio: [
              'As Chief Strategic Officer at NJ Lenders Corp., Steve plays a pivotal role in managing the company’s 100+ member sales team, spearheading recruitment efforts, and guiding all aspects of NJ Lenders’ operations. Steve is nationally recognized for blending his experiences as a top originator and master networker while helping run a retail mortgage origination company with nearly 300 employees. A natural visionary and mentor, Steve runs a capital market mastermind group with some of the top secondary professionals in the country at the National and Secondary Mortgage Bankers conferences. Steve is also an active member of the Leadership 360 Performance Coaching program and the National and NJ MBA programs.',
              'Steve is dedicated to advancing the industry and fostering professional growth. He serves as a board member for Lenders One, Own Up, the Greater Bergen Realtor Association Foundation, and is a trustee for Youth Consultation Services. Steve is also a member of the Community Home Lenders of America (CHLA).',
              'Before his storied career, Steve earned his BA, BBA, and MBA at The George Washington University School of Business in Washington, DC. This extensive experience and ability to share his knowledge and vision with the next generation of mortgage professionals make Steve the ideal faculty mentor at the Loan Atlas, where he joined in 2024.'
            ],
            expertise: ['Strategist', 'Mentor', 'Networker']
          }
        },
        'katrinka-condie': {
          name: 'Katrinka Condie',
          title: 'Faculty Mentor',
          image: 'assets/katrinka-condie-headshot.png',
          initials: 'KC',
          youtubeId: 'S7NQYRyMICQ',
          production2025: '$56.9M volume · 102 families served',
          bio: 'Katrinka has originated more than $309M in lifetime production and helped over 755 families, while ranking in the top 1% of originators nationwide since her second year in the business. She is one of the most respected client-relationship operators in the industry.',
          specialty: "Building real relationships and lasting client connection — the work the rest of the industry has tried to automate away. Katrinka is also one of the faculty's strongest voices on women empowerment in mortgage.",
          profile: {
            photo: 'assets/katrinka-headshot-WIDE.png', // wider cutout for the popup; grid card keeps the original
            stats: [
              { label: 'Originating Since', value: '2017' },
              { label: 'Current Role', value: 'Producing Branch Manager, NEO Home Loans' },
              { label: '2025 Production', value: '<span class="fp__nw">$56.9M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">102 Families Served</span>' }
            ],
            summary: 'Katrinka has consistently ranked among the top 1% of mortgage bankers nationwide, hitting this achievement in only her 2nd year originating and every year since 2019. She has also been named a <em>Scotsman Guide</em> Top Woman Originator in each of those years. During her short time in the industry, her origination volume is over $309M serving 755+ families.',
            bio: [
              'Katrinka’s family is her driving force for motivation and growth every single day. Providing opportunities for both her kids and generations to come keeps her focused on her goals. With a deep love of finance, real estate investing and witnessing the doors it opens for families, she is passionate about every family realizing homeownership. She believes wholeheartedly that it IS the path to wealth and financial freedom.',
              'After nearly 10 years in the mortgage industry, Katrinka has developed a love of guiding clients and referral partners through the complex world of finance and mortgage. Her wealth of knowledge regarding credit, building deep connections quickly and the Perfect Loan Process implementation set her apart. Developing deep relationships and building trust quickly are in her genius zone and her primary success factor.',
              'Katrinka is a Producing Branch Manager at NEO Home Loans. Her background spans the credit repair industry prior to finding her true love in finance and mortgage. She specializes in working with medical professionals taking her back to her first love, medicine, where she trained through nursing school.',
              'In addition to Katrinka’s Certified Mortgage Planning Specialist (CMPS) and Certified Mortgage Advisor (CMA) designations, she is also co-creator of Women of NEO (WON), a women’s empowerment and growth group at her company.'
            ],
            expertise: ['Building Relationships &amp; Client Connection', 'Empowering Women', 'Perfect Loan Process']
          }
        },
        'michael-belfor': {
          name: 'Michael Belfor',
          title: 'Faculty Mentor',
          image: 'assets/michael-belfor-headshot.png',
          initials: 'MB',
          youtubeId: 'RPRE-ZKSNh0',
          production2025: '$46.6M volume · 89 families served',
          bio: "Michael has been originating since 2010 and ranked among the top 1% of mortgage originators nationwide for over a decade by <em>Scotsman Guide</em> and <em>Mortgage Executive Magazine</em>. He opened American Pacific Mortgage's first retail branch and its flagship Bay Area office, holds the Certified Mortgage Advisor (CMA) designation, and is the author of three books — <em>The Fed Made Simple</em>, <em>Crypto Bro</em>, and <em>Anchor</em>.",
          specialty: 'Advanced loan structuring and market literacy at a level very few originators operate at — building scalable production systems, applying AI-powered efficiency across the origination workflow, and creating content that turns market knowledge into authority.',
          profile: {
            photo: 'assets/michael-belfor-headshot-WIDE.png', // wider cutout for the popup; grid card keeps the original
            stats: [
              { label: 'Originating Since', value: '2010' },
              { label: 'Current Role', value: 'Branch Manager, American Pacific Mortgage' },
              { label: '2025 Production', value: '<span class="fp__nw">$49.8M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">89 Families Served</span>' }
            ],
            summary: 'Michael has been originating since 2010 and is widely respected for his ability to simplify complex loan strategies, coach agents on market literacy, and build scalable, repeatable production systems. He brings a clarity-first approach to growth, helping loan officers focus on practical frameworks, daily execution, and long-term success. Michael also teaches on AI-powered efficiency and content creation to help LOs serve clients better and expand their reach.',
            bio: [
              'Michael Belfor has spent more than fifteen years helping families, investors, and professionals navigate complex home financing decisions with clarity and confidence. Serving clients throughout Southern California, Northern California, and Hawaii, Michael is known for combining deep technical expertise with a relationship-first approach that prioritizes long-term outcomes over short-term transactions.',
              'In 2010, Michael aligned with American Pacific Mortgage and opened the company’s first retail branch and flagship Bay Area office, helping establish and grow APM’s retail presence in Northern California. More than fifteen years later, he continues to lead a consistently top-producing branch recognized for innovation, service, and results. For over a decade, Michael has been ranked among the Top 1% of Mortgage Originators nationwide by both <em>Scotsman Guide</em> and <em>Mortgage Executive Magazine</em>, reflecting both production excellence and trusted advisory work.',
              'Michael works extensively with first-time buyers, move-up buyers, self-employed borrowers, and real estate investors. He is especially known for his ability to structure loans in challenging scenarios involving complex income, market volatility, or long-term wealth planning. His process emphasizes education, transparency, and strategic thinking, allowing clients and partners to make informed decisions regardless of market conditions.',
              'Beyond mortgage banking, Michael is the author of several books on leadership, finance, and faith, including <em>The Fed Made Simple</em>, <em>Crypto Bro</em>, and <em>Anchor: Leadership Built on Wisdom, Not Hype</em>. Through his writing, teaching, and speaking, he helps professionals think clearly, lead well, and build sustainable success without chasing trends or shortcuts.',
              'Michael holds both a Bachelor of Science and a Master of Arts from Liberty University in Lynchburg, Virginia, and is a Certified Mortgage Advisor (CMA). He is deeply committed to mentorship and leadership development within the mortgage industry and his community. His service includes church ministry, counseling, international mission work, and long-standing support of organizations serving the homeless.',
              'Outside of work, Michael values faith, family, fitness, Brazilian Jiu-Jitsu, surfing, and mentoring others. He believes the best work in business and life happens when wisdom, integrity, and service come first.'
            ],
            expertise: ['Advanced Loan Structuring', 'Market Literacy', 'Scalable Systems', 'AI-Powered Efficiency', 'Content Creation']
          }
        },
        'becky-staples': {
          name: 'Becky Staples',
          title: 'Faculty Mentor',
          image: 'assets/becky-staples-headshot.png',
          initials: 'BS',
          youtubeId: 'LN317MG-V4s',
          production2025: '$84.3M volume · 201 families served',
          bio: 'Becky has spent nearly 20 years in the industry, funded $1B+ in career loan volume, and helped more than 3,600 families. She is ranked as a top-100 U.S. loan officer by volume.',
          specialty: 'The fundamentals — done at the highest level. Production systems and process control, developing new loan officers from the ground up, and delivering the kind of high-touch client experience that produces a billion dollars in volume one client at a time.',
          profile: {
            stats: [
              { label: 'Originating Since', value: '2006' },
              { label: 'Current Role', value: 'Vice President &amp; Loan Originator, Sun American Mortgage' },
              { label: '2025 Production', value: '<span class="fp__nw">$84.3M Volume</span> <span class="fp__sep">|</span> <span class="fp__nw">201 Families Served</span>' }
            ],
            summary: 'Becky has nearly 20 years of industry experience and more than $1 billion in career-funded loans. A top-100 U.S. loan officer by volume, she brings a disciplined, systems-driven approach to production. She joins the Loan Atlas faculty to help newer loan officers build sustainable success through fundamentals, structure, and consistent execution.',
            bio: [
              'Becky Staples is Vice President at Sun American Mortgage with nearly two decades of experience in the mortgage industry and over $1 billion in career-funded loans, helping more than 3,600 families achieve homeownership. Recognized as a Top-100 loan officer in the United States by volume, Becky’s success is the result of discipline, structure, and consistent execution.',
              'Raised in Utah as one of eight children, Becky learned the value of hard work and personal responsibility early in life. At just twelve years old, she took on her first paper route, an experience that shaped the work ethic, discipline, and consistency that continue to define her leadership and production today.',
              'Becky approaches lending as a mortgage advisor rather than simply a loan originator. Her business has been built on mastering fundamentals, maintaining strong process control, and delivering a high-touch, strategic client experience. As a direct lender, Sun American Mortgage handles underwriting, processing, and closing in-house, allowing Becky and her team to maintain a streamlined and highly accountable lending process.',
              'Known for her problem-solving mindset, Becky takes an active role in every transaction and brings thoughtful solutions to complex borrower scenarios. She leads with clarity, communication, and accountability, believing that long-term success is created by following proven systems and executing them consistently over time.',
              'Becky is excited to give back to newer loan officers navigating the early and middle stages of their careers. Having built her own success by listening to coaches, doing the work, and applying guidance with discipline, she is passionate about helping others see that the path to success is repeatable. With the right systems, mindset, and commitment, she believes sustainable growth is achievable for anyone willing to execute.'
            ],
            expertise: ['Production Systems', 'Process Control', 'Fundamentals', 'New LO Development', 'High-Touch Client Experience']
          }
        }
      };

      const modal = document.getElementById('facultyModal');
      const modalImg = document.getElementById('facultyModalImg');
      const modalPhoto = document.getElementById('facultyModalPhoto');
      const modalName = document.getElementById('facultyModalName');
      const modalTitle = document.getElementById('facultyModalTitle');
      const modalProduction = document.getElementById('facultyModalProduction');
      const modalProductionSection = document.getElementById('facultyModalProductionSection');
      const modalProductionLabel = document.getElementById('facultyModalProductionLabel');
      const modalBio = document.getElementById('facultyModalBio');
      const modalSpecialty = document.getElementById('facultyModalSpecialty');
      const modalSpecialtyLabel = document.getElementById('facultyModalSpecialtyLabel');
      const modalVideo = document.getElementById('facultyModalVideo');

      const VIDEO_PLACEHOLDER_HTML = `
        <div class="faculty-modal__video-content">
          <span class="faculty-modal__video-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7L8 5z"/></svg>
          </span>
          <span class="faculty-modal__video-caption">Video coming soon</span>
        </div>`;

      function escapeAttr(value) {
        return String(value).replace(/&/g, '&amp;').replace(/"/g, '&quot;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
      }

      let lastFocused = null;

      // ---- Faculty Profile popup (magazine layout) ----
      const fp = document.getElementById('facultyProfile');
      const fpScroll = document.getElementById('fpScroll');
      const fpVideo = document.getElementById('fpVideo');

      function openProfile(slug, data, originEl) {
        const p = data.profile;
        fp.classList.toggle('fp--big-photo', p.bigPhoto !== false);
        const cardImg = originEl && originEl.querySelector('.faculty-card__photo img');
        const img = document.getElementById('fpImg');
        const cardSrc = cardImg && cardImg.getAttribute('src');
        // profile.photo is a JS string, so the build doesn't rewrite its path — resolve it
        // against the card image's (build-rewritten) folder instead.
        const photoSrc = p.photo && (cardSrc ? cardSrc.replace(/[^/]+$/, '') + p.photo.split('/').pop() : p.photo);
        img.src = photoSrc || cardSrc || data.image;
        img.alt = data.name;

        const parts = data.name.split(' ');
        const first = parts.shift();
        fp.classList.toggle('fp--one-line', p.oneLineName !== false);
        document.getElementById('fpName').innerHTML = `${first}<br class="fp__br" /> <em>${parts.join(' ')}</em>`;
        document.getElementById('fpRole').textContent = data.title;
        document.getElementById('fpStats').innerHTML = (p.stats || [])
          .map((st) => `<div><dt>${st.label}</dt><dd>${st.value}</dd></div>`).join('');
        document.getElementById('fpBio').innerHTML = (p.summary ? `<div class="fp__summary">${p.summary}</div>` : '') + (p.bio || [])
          .map((para, i) => `<p>${para}</p>` + (i === 0 && p.pull ? `<blockquote class="fp__pull">“${p.pull}”</blockquote>` : ''))
          .join('');
        document.getElementById('fpExpTitle').textContent = `${first}'s Areas of Expertise`;
        document.getElementById('fpExp').innerHTML = (p.expertise || []).map((x) => `<li>${x}</li>`).join('');

        if (data.youtubeId) {
          const id = encodeURIComponent(data.youtubeId);
          fpVideo.innerHTML = `<div class="fp__vid"><iframe src="https://www.youtube-nocookie.com/embed/${id}?rel=0" title="Meet ${escapeAttr(data.name)}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>`;
        } else {
          fpVideo.innerHTML = '';
        }

        if (typeof fp.showModal === 'function') fp.showModal(); else fp.setAttribute('open', '');
        // Reset scroll AFTER opening — a closed <dialog> is display:none, so setting it before is ignored
        fpScroll.scrollTop = 0;
        requestAnimationFrame(() => { fpScroll.scrollTop = 0; });
        document.body.classList.add('faculty-modal-open');
        setHash(slug);
      }

      function closeProfile() {
        if (typeof fp.close === 'function') fp.close(); else fp.removeAttribute('open');
      }

      fp.querySelectorAll('[data-fp-close]').forEach((btn) => btn.addEventListener('click', closeProfile));
      fp.addEventListener('click', (event) => { if (event.target === fp) closeProfile(); });
      fp.addEventListener('close', () => {
        document.body.classList.remove('faculty-modal-open');
        fpVideo.innerHTML = '';
        fpScroll.scrollTop = 0;
        if (location.hash) setHash('');
        if (lastFocused && typeof lastFocused.focus === 'function') lastFocused.focus();
      });

      function openFaculty(slug, originEl) {
        const data = facultyData[slug];
        if (!data) return;
        lastFocused = originEl || document.activeElement;
        if (data.profile) { openProfile(slug, data, originEl); return; }

        // Prefer the card's already-resolved image src so paths stay correct
        // after the build rewrites asset URLs (the hardcoded data.image is not rewritten).
        const cardImg = originEl && originEl.querySelector('.faculty-card__photo img');
        modalImg.src = (cardImg && cardImg.getAttribute('src')) || data.image;
        modalImg.alt = data.name;
        modalPhoto.setAttribute('data-initials', data.initials || '');
        modalName.textContent = data.name;
        modalTitle.textContent = data.title;

        const firstName = data.name.split(' ')[0];
        modalSpecialtyLabel.textContent = `${firstName}'s Specialty`;

        if (data.productionHide) {
          modalProductionSection.hidden = true;
        } else {
          modalProductionSection.hidden = false;
          const label = data.productionLabel === undefined ? '2025 Production' : data.productionLabel;
          if (label) {
            modalProductionLabel.textContent = label;
            modalProductionLabel.hidden = false;
          } else {
            modalProductionLabel.hidden = true;
          }
          modalProduction.textContent = data.production2025;
        }

        modalBio.innerHTML = data.bio;
        modalSpecialty.innerHTML = data.specialty;

        if (data.youtubeId) {
          modalVideo.classList.add('faculty-modal__video--filled');
          modalVideo.innerHTML = `<iframe src="https://www.youtube-nocookie.com/embed/${encodeURIComponent(data.youtubeId)}" title="${escapeAttr(data.name)} — Faculty introduction" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
        } else {
          modalVideo.classList.remove('faculty-modal__video--filled');
          modalVideo.innerHTML = VIDEO_PLACEHOLDER_HTML;
        }

        if (typeof modal.showModal === 'function') {
          modal.showModal();
        } else {
          modal.setAttribute('open', '');
        }
        document.body.classList.add('faculty-modal-open');
        setHash(slug);
      }

      // Deep links: /faculty/#josh-mettle opens that member's modal.
      // replaceState keeps the URL shareable without stacking history entries or scrolling.
      function setHash(slug) {
        const url = location.pathname + location.search + (slug ? '#' + slug : '');
        history.replaceState(null, '', url);
      }

      function openFromHash() {
        const slug = decodeURIComponent(location.hash.slice(1));
        if (!slug || !facultyData[slug]) return;
        const card = document.querySelector(`.faculty-card[data-faculty="${CSS.escape(slug)}"]`);
        openFaculty(slug, card);
      }

      function closeFaculty() {
        if (typeof modal.close === 'function') {
          modal.close();
        } else {
          modal.removeAttribute('open');
        }
        document.body.classList.remove('faculty-modal-open');
        modalVideo.innerHTML = '';
        modalVideo.classList.remove('faculty-modal__video--filled');
        if (lastFocused && typeof lastFocused.focus === 'function') {
          lastFocused.focus();
        }
      }

      document.querySelectorAll('.faculty-card').forEach((card) => {
        card.addEventListener('click', () => openFaculty(card.dataset.faculty, card));
      });
      modal.querySelectorAll('[data-modal-close]').forEach((btn) => {
        btn.addEventListener('click', closeFaculty);
      });
      modal.addEventListener('click', (event) => {
        if (event.target === modal) closeFaculty();
      });
      modal.addEventListener('close', () => {
        document.body.classList.remove('faculty-modal-open');
        modalVideo.innerHTML = '';
        modalVideo.classList.remove('faculty-modal__video--filled');
        if (location.hash) setHash('');
      });

      window.addEventListener('hashchange', openFromHash);
      openFromHash();
    })();
  </script>
