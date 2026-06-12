<?php
/**
 * Body partial for /whats-inside/ (TLA Full HTML template).
 * Generated from public/whats-inside.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'What\'s Inside — The Loan Atlas';
$tla_description = 'Everything you need to stop flying blind and start running a predictable mortgage business. Five AI-powered systems, 200+ training modules, live coaching every week.';
$tla_active      = 'whats-inside';
?>
  <style>
    .wi-hero {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-top: calc(var(--header-h) + clamp(56px, 8vw, 96px));
      padding-bottom: clamp(56px, 8vw, 96px);
      position: relative;
      overflow: hidden;
    }
    .wi-hero__bg {
      position: absolute;
      top: 50%;
      right: -8%;
      width: 80%;
      min-width: 720px;
      height: auto;
      transform: translateY(-50%) rotate(-6deg);
      transform-origin: center center;
      pointer-events: none;
      z-index: 0;
    }
    .wi-hero__fade {
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
      .wi-hero__bg { display: none; }
      .wi-hero__fade { display: none; }
    }
    .wi-hero::before {
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
    .wi-hero::after {
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
    .wi-hero__copy {
      position: relative;
      z-index: 2;
      max-width: 52rem;
    }
    .wi-hero__title {
      font-family: var(--font-display);
      font-size: clamp(2.5rem, 1.7rem + 3.2vw, 4.25rem);
      line-height: 1.04;
      letter-spacing: -0.03em;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: var(--space-md);
    }
    .wi-hero__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c, #eac25a, #ffd56c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .wi-hero__sub {
      font-size: clamp(1rem, 0.9rem + 0.5vw, 1.1875rem);
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.68);
      max-width: 40rem;
      margin-bottom: var(--space-lg);
    }
    .wi-hero__actions {
      display: flex;
      flex-wrap: wrap;
      gap: var(--space-sm);
      align-items: center;
    }

    /* ── Featured tool sections (Financial Review + Business Planner) ── */
    .featured-tool {
      position: relative;
      background: #ffffff;
      padding-block: clamp(64px, 8vw, 112px);
      color: var(--on-surface);
      overflow: hidden;
    }
    .featured-tool::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(60% 50% at 80% 10%, rgba(234,194,90,0.06), transparent 70%);
      pointer-events: none;
    }
    .featured-tool > .container { position: relative; }
    .featured-tool__header {
      max-width: 60rem;
      margin: 0 auto var(--space-xl);
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-sm);
    }
    .featured-tool__title {
      font-family: var(--font-display);
      font-size: clamp(2.5rem, 1.6rem + 3.6vw, 4.5rem);
      font-weight: 800;
      color: var(--primary);
      letter-spacing: -0.03em;
      line-height: 1.05;
      margin: 0;
    }
    .featured-tool__deck {
      font-family: var(--font-display);
      font-size: clamp(1.375rem, 1rem + 1.4vw, 1.875rem);
      font-weight: 600;
      color: var(--on-surface);
      line-height: 1.25;
      letter-spacing: -0.02em;
      max-width: 36rem;
      margin: 0;
    }
    .featured-tool__split {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-lg);
      margin-bottom: var(--space-xl);
    }
    @media (min-width: 860px) {
      .featured-tool__split { grid-template-columns: 1fr 1fr; gap: var(--space-xl); align-items: start; }
    }
    .featured-tool__copy p {
      color: var(--on-surface-variant);
      line-height: 1.7;
      font-size: 1.0625rem;
      margin: 0 0 var(--space-md);
    }
    .featured-tool__copy p:last-child { margin-bottom: 0; }
    .featured-tool__list { margin: 0; }
    .featured-tool__screenshot {
      display: block;
      width: 100%;
      height: auto;
      border-radius: var(--radius-3xl);
      box-shadow: 0 24px 60px rgba(2, 28, 54, 0.16);
      border: 1px solid var(--outline-variant);
    }

    /* ── AI Business and Life Coaches (grid around centered phone image) ─ */
    .aicg-section {
      position: relative;
      background: linear-gradient(180deg, var(--background) 0%, var(--surface-container-lowest) 100%);
      color: var(--primary);
      padding-block: clamp(64px, 8vw, 120px);
      overflow: hidden;
    }
    .aicg-section::before,
    .aicg-section::after {
      content: "";
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      pointer-events: none;
      z-index: 0;
    }
    .aicg-section::before {
      top: 80px;
      left: 40px;
      width: 280px;
      height: 280px;
      background: rgba(201, 150, 28, 0.07);
    }
    .aicg-section::after {
      bottom: 80px;
      right: 40px;
      width: 340px;
      height: 340px;
      background: rgba(2, 28, 54, 0.05);
    }
    .aicg {
      position: relative;
      z-index: 1;
      max-width: var(--container-max);
      margin-inline: auto;
      padding-inline: var(--gutter);
    }
    .aicg__header {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      max-width: 48rem;
      margin: 0 auto var(--space-xl);
    }
    .aicg__title {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(2rem, 1.5rem + 2vw, 3rem);
      line-height: 1.1;
      color: var(--primary);
      margin: 0 0 var(--space-md);
      text-wrap: balance;
    }
    .aicg__rule {
      width: 96px;
      height: 3px;
      background: linear-gradient(90deg, var(--brass) 0%, var(--brass-bright) 100%);
      border-radius: var(--radius-full);
      margin-bottom: var(--space-md);
    }
    .aicg__lede {
      font-family: var(--font-body);
      font-size: 1.0625rem;
      line-height: 1.65;
      color: var(--on-surface-variant);
      max-width: 36rem;
      margin: 0;
      text-wrap: pretty;
    }
    .aicg__grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: clamp(24px, 3vw, 48px);
      align-items: center;
    }
    .aicg__col {
      display: flex;
      flex-direction: column;
      gap: var(--space-xl);
    }
    .aicg-coach {
      display: flex;
      flex-direction: column;
      gap: var(--space-xs);
      transition: transform 250ms ease;
    }
    .aicg-coach:hover { transform: translateY(-5px); }
    .aicg-coach__row {
      display: flex;
      align-items: center;
      gap: var(--space-sm);
    }
    .aicg-coach__icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      flex-shrink: 0;
      border-radius: var(--radius-lg);
      background: rgba(201, 150, 28, 0.10);
      color: var(--brass);
      transition: background-color 300ms ease;
    }
    .aicg-coach:hover .aicg-coach__icon { background: rgba(201, 150, 28, 0.18); }
    .aicg-coach__icon svg { width: 24px; height: 24px; }
    .aicg-coach__heading {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: 1.1875rem;
      line-height: 1.25;
      color: var(--primary);
      margin: 0;
      transition: color 300ms ease;
    }
    .aicg-coach:hover .aicg-coach__heading { color: var(--brass); }
    .aicg-coach__eyebrow {
      font-family: var(--font-body);
      font-weight: 600;
      font-size: 0.6875rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--brass);
      padding-left: calc(48px + var(--space-sm));
      margin-top: -4px;
    }
    .aicg-coach__desc {
      font-family: var(--font-body);
      font-size: 0.9375rem;
      line-height: 1.6;
      color: var(--on-surface-variant);
      padding-left: calc(48px + var(--space-sm));
      margin: 0;
      text-wrap: pretty;
    }
    .aicg__center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-block: var(--space-md);
    }
    .aicg__stage {
      position: relative;
      width: 100%;
      max-width: 320px;
    }
    .aicg__image-wrap {
      position: relative;
      border-radius: var(--radius-2xl);
      overflow: hidden;
      box-shadow: var(--shadow-xl);
      background: var(--surface-container-low);
      transition: transform 400ms ease;
    }
    .aicg__image-wrap:hover { transform: scale(1.02); }
    .aicg__image {
      display: block;
      width: 100%;
      height: auto;
      object-fit: cover;
    }
    .aicg__frame {
      position: absolute;
      inset: -12px;
      border-radius: calc(var(--radius-2xl) + 6px);
      background: linear-gradient(135deg, var(--brass) 0%, var(--brass-bright) 50%, #ffd56c 100%);
      opacity: 0.85;
      z-index: -1;
      -webkit-mask:
        linear-gradient(#000 0 0) content-box,
        linear-gradient(#000 0 0);
      mask:
        linear-gradient(#000 0 0) content-box,
        linear-gradient(#000 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      padding: 4px;
    }
    .aicg__blob {
      position: absolute;
      border-radius: 50%;
      pointer-events: none;
      z-index: -1;
    }
    .aicg__blob--tr {
      top: -28px;
      right: -36px;
      width: 80px;
      height: 80px;
      background: rgba(201, 150, 28, 0.12);
    }
    .aicg__blob--bl {
      bottom: -32px;
      left: -40px;
      width: 100px;
      height: 100px;
      background: rgba(2, 28, 54, 0.08);
    }
    .aicg__dot {
      position: absolute;
      border-radius: 50%;
      animation: aicg-float 3s ease-in-out infinite;
    }
    .aicg__dot--top {
      top: -28px;
      left: 50%;
      transform: translateX(-50%);
      width: 12px;
      height: 12px;
      background: var(--brass);
    }
    .aicg__dot--bottom {
      bottom: -32px;
      left: 50%;
      transform: translateX(-50%);
      width: 8px;
      height: 8px;
      background: var(--brass-bright);
      animation-delay: 0.7s;
    }
    @keyframes aicg-float {
      0%, 100% { transform: translate(-50%, 0); opacity: 0.55; }
      50%      { transform: translate(-50%, -10px); opacity: 1; }
    }
    @media (max-width: 960px) {
      .aicg__grid {
        grid-template-columns: 1fr 1fr;
        gap: var(--space-lg);
      }
      .aicg__center {
        grid-column: 1 / -1;
        order: -1;
        padding-block: var(--space-sm) var(--space-lg);
      }
      .aicg__stage { max-width: 360px; }
      .aicg__col { gap: var(--space-lg); }
    }
    @media (max-width: 560px) {
      .aicg__grid { grid-template-columns: 1fr; }
      .aicg__col { gap: var(--space-lg); }
      .aicg__stage { max-width: 100%; }
    }
    @media (prefers-reduced-motion: reduce) {
      .aicg__dot,
      .aicg__image-wrap,
      .aicg-coach,
      .aicg-coach__icon,
      .aicg-coach__heading {
        animation: none !important;
        transition: none !important;
      }
    }

    /* =====================================================================
       8 Disciplines — Training framework section
       ===================================================================== */
    .disc-section {
      background: var(--surface-container-low);
      padding-block: clamp(64px, 8vw, 112px);
      overflow: hidden;
    }
    .disc-section__inner {
      max-width: var(--container-max);
      margin-inline: auto;
      padding-inline: var(--gutter);
    }
    .disc-split {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-xl);
      align-items: center;
      margin-bottom: var(--space-xl);
    }
    @media (min-width: 960px) {
      .disc-split {
        grid-template-columns: minmax(320px, 5fr) minmax(0, 7fr);
        gap: clamp(32px, 4vw, 64px);
      }
    }
    .disc-copy__eyebrow {
      display: inline-block;
      font-family: var(--font-body);
      font-weight: 600;
      font-size: 0.75rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--brass);
      margin-bottom: var(--space-sm);
    }
    .disc-copy__title {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(2rem, 1.4rem + 2.4vw, 3.25rem);
      line-height: 1.08;
      letter-spacing: -0.025em;
      color: var(--primary);
      margin: 0 0 var(--space-md);
      text-wrap: balance;
    }
    .disc-copy__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .disc-copy__lede {
      font-family: var(--font-body);
      font-size: 1.0625rem;
      line-height: 1.7;
      color: var(--on-surface-variant);
      margin: 0 0 var(--space-lg);
      max-width: 36rem;
    }
    .disc-marquee {
      position: relative;
      height: clamp(480px, 56vw, 660px);
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-md);
      -webkit-mask-image: linear-gradient(180deg,
        transparent 0,
        #000 14%,
        #000 86%,
        transparent 100%);
              mask-image: linear-gradient(180deg,
        transparent 0,
        #000 14%,
        #000 86%,
        transparent 100%);
    }
    .disc-marquee__col {
      position: relative;
      overflow: hidden;
    }
    .disc-marquee__track {
      display: flex;
      flex-direction: column;
      gap: var(--space-md);
      animation: disc-scroll-up 80s linear infinite;
      will-change: transform;
    }
    .disc-marquee__col--down .disc-marquee__track {
      animation-name: disc-scroll-down;
    }
    @keyframes disc-scroll-up {
      from { transform: translateY(0); }
      to   { transform: translateY(-50%); }
    }
    @keyframes disc-scroll-down {
      from { transform: translateY(-50%); }
      to   { transform: translateY(0); }
    }
    .disc-thumb {
      position: relative;
      display: block;
      width: 100%;
      aspect-ratio: 16 / 9;
      border-radius: var(--radius-xl);
      overflow: hidden;
      border: 1px solid var(--outline-variant);
      box-shadow: var(--shadow);
      background: var(--surface-container-lowest);
      flex: 0 0 auto;
    }
    .disc-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .disc-clusters .discipline-cluster__label {
      font-size: 0.9375rem;
      font-weight: 800;
      letter-spacing: 0.16em;
    }
    .disc-clusters .discipline-cluster__label::before {
      width: 44px;
      height: 2px;
    }
    .disc-clusters .discipline-card__num {
      color: rgba(201, 150, 28, 0.55);
      font-size: 2.75rem;
    }
    .disc-clusters .quote-card {
      flex: none;
      width: 100%;
      max-width: none;
      margin: var(--space-lg) 0 0;
    }
    /* Block-level inline testimonial — used in section bodies */
    .quote-card--block {
      flex: none;
      width: 100%;
      max-width: none;
      margin: var(--space-xl) 0 0;
    }
    .quote-card--on-dark .quote-card__quote { color: rgba(255, 255, 255, 0.7); }
    .quote-card--on-dark .quote-card__name { color: #ffffff; }

    /* Community section — 2x2 grid of vertical YouTube Shorts */
    .wi-shorts {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-sm);
    }
    .wi-short {
      position: relative;
      aspect-ratio: 9 / 16;
      border-radius: var(--radius-xl);
      overflow: hidden;
      background: rgba(255, 255, 255, 0.04);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.32);
    }
    .wi-short iframe {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      border: 0;
      display: block;
    }
    @media (max-width: 520px) {
      .wi-shorts { gap: var(--space-xs); }
    }
    .disc-video {
      margin-top: var(--space-xl);
      cursor: default;
    }
    .disc-video::before { display: none; }
    .disc-video iframe {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      border: 0;
      display: block;
    }
    @media (prefers-reduced-motion: reduce) {
      .disc-marquee__track {
        animation: none !important;
      }
    }
    @media (max-width: 720px) {
      .disc-marquee {
        height: clamp(420px, 90vw, 520px);
      }
    }

    /* Coaching-card video placeholders: real imagery behind the overlay UI */
    .coaching-card__media .video-ph > img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* Coaching-cards as full-card links (gallery-card pattern) */
    a.coaching-card {
      text-decoration: none;
      color: inherit;
      isolation: isolate;
    }
    a.coaching-card:hover .coaching-card__arrow,
    a.coaching-card:focus-visible .coaching-card__arrow {
      color: var(--brass);
      border-color: rgba(201, 150, 28, 0.4);
    }
    .coaching-card__arrow {
      margin-top: auto;
      align-self: flex-start;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      border: 1px solid var(--outline-variant);
      background: var(--surface-container-lowest);
      color: var(--primary-container);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: color 200ms ease, border-color 200ms ease;
    }
    .coaching-card__arrow svg {
      width: 14px;
      height: 14px;
    }

    /* =====================================================================
       AI-Driven Financial Review — click-and-reveal showcase
       ===================================================================== */
    .frs-section {
      background: var(--surface);
      padding-block: clamp(64px, 8vw, 112px);
      overflow: hidden;
    }
    .frs-section + .frs-section { padding-top: 0; }
    .frs-section__inner {
      max-width: var(--container-max);
      margin-inline: auto;
      padding-inline: var(--gutter);
    }

    /* TOP BLOCK — copy + composite hero */
    .frs-hero__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-xl);
      align-items: center;
    }
    @media (min-width: 960px) {
      .frs-hero__grid {
        grid-template-columns: minmax(320px, 5fr) minmax(0, 7fr);
        gap: clamp(40px, 5vw, 80px);
      }
    }
    .frs-hero__copy .eyebrow { margin-bottom: var(--space-md); }
    .frs-hero__title {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(2.25rem, 1.6rem + 2.6vw, 3.25rem);
      line-height: 1.05;
      letter-spacing: -0.025em;
      color: var(--primary);
      margin: 0 0 var(--space-md);
      text-wrap: balance;
    }
    .frs-hero__title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .frs-hero__subhead {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: clamp(1.25rem, 1rem + 1vw, 1.625rem);
      line-height: 1.25;
      letter-spacing: -0.015em;
      color: var(--primary);
      margin: 0 0 var(--space-md);
    }
    .frs-hero__subhead em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .frs-hero__lede {
      font-family: var(--font-body);
      font-size: 1.0625rem;
      line-height: 1.7;
      color: var(--on-surface-variant);
      margin: 0;
      max-width: 36rem;
    }

    .frs-hero__metrics {
      position: relative;
      width: 100%;
      min-height: 560px;
      display: flex;
      align-items: center;
      justify-content: center;
      container-type: inline-size;
      isolation: isolate;
    }
    @media (min-width: 1180px) { .frs-hero__metrics { min-height: 620px; } }

    .frs-hero__metrics::before {
      content: '';
      position: absolute;
      inset: 9% 2% 8% 8%;
      border: 1px solid rgba(2, 28, 54, 0.08);
      border-radius: 22px;
      background:
        linear-gradient(90deg, rgba(2, 28, 54, 0.045) 1px, transparent 1px),
        linear-gradient(180deg, rgba(2, 28, 54, 0.045) 1px, transparent 1px);
      background-size: 34px 34px;
      -webkit-mask-image: linear-gradient(90deg, transparent, #000 16%, #000 84%, transparent);
      mask-image: linear-gradient(90deg, transparent, #000 16%, #000 84%, transparent);
      opacity: 0.8;
      z-index: -2;
    }

    .frs-hero__metrics::after {
      content: '';
      position: absolute;
      inset: 16% 10% 16% 14%;
      border-radius: 28px;
      background: rgba(255, 255, 255, 0.72);
      box-shadow: 0 32px 80px rgba(2, 28, 54, 0.12);
      z-index: -1;
      transform: rotate(-2deg);
    }

    .frs-metric-stack {
      width: min(100%, 650px);
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }

    .frs-metric-card {
      --metric-accent: #fcd34d;
      --metric-accent-2: #fbbf24;
      --metric-bg: #0e1422;
      --metric-card: #172033;
      --metric-card-2: #232d42;
      --metric-muted: #94a3b8;
      --metric-text: #ffffff;
      --metric-delay: 0ms;

      position: relative;
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(150px, 0.72fr);
      gap: clamp(16px, 4cqi, 28px);
      min-height: 172px;
      padding: clamp(18px, 4cqi, 30px);
      border-radius: 18px;
      background:
        linear-gradient(135deg, rgba(255, 255, 255, 0.06), transparent 36%),
        linear-gradient(180deg, #121a2a 0%, var(--metric-bg) 100%);
      color: var(--metric-text);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow:
        0 24px 52px rgba(2, 28, 54, 0.22),
        0 8px 18px rgba(2, 28, 54, 0.12);
      overflow: hidden;
      opacity: 0;
      animation: frsMetricEnter 760ms cubic-bezier(.2, .8, .2, 1) forwards;
      animation-delay: var(--metric-delay);
    }

    .frs-metric-card + .frs-metric-card { margin-top: -22px; }
    .frs-metric-card--income {
      z-index: 3;
      width: 88%;
      transform: translateX(3%) rotate(-1.2deg);
    }
    .frs-metric-card--loans {
      z-index: 2;
      width: 78%;
      margin-left: auto;
      transform: translateX(-1%) rotate(1.4deg);
    }
    .frs-metric-card--rate {
      z-index: 1;
      width: 90%;
      transform: translateX(8%) rotate(-0.4deg);
    }

    .frs-metric-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(110deg, transparent 18%, rgba(255,255,255,0.12) 42%, transparent 62%);
      transform: translateX(-120%);
      animation: frsMetricSheen 5.2s ease-in-out infinite;
      animation-delay: calc(var(--metric-delay) + 1000ms);
      pointer-events: none;
    }

    .frs-metric-card::after {
      content: '';
      position: absolute;
      inset: auto clamp(18px, 4cqi, 30px) 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(252, 211, 77, 0.52), transparent);
    }

    .frs-metric-card__main,
    .frs-metric-card__visual {
      position: relative;
      z-index: 1;
    }

    .frs-metric-card__topline {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 14px;
      color: var(--metric-muted);
      font-family: var(--font-body);
      font-size: 0.76rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .frs-metric-icon {
      width: 28px;
      height: 28px;
      border-radius: 8px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: rgba(252, 211, 77, 0.12);
      color: var(--metric-accent);
      box-shadow: inset 0 0 0 1px rgba(252, 211, 77, 0.2);
      flex-shrink: 0;
    }
    .frs-metric-icon svg { width: 16px; height: 16px; }

    .frs-metric-card__label {
      font-family: var(--font-display);
      font-size: clamp(1.05rem, 3cqi, 1.45rem);
      font-weight: 700;
      line-height: 1.1;
      letter-spacing: -0.01em;
      margin: 0 0 8px;
      color: #ffffff;
    }

    .frs-metric-card__value {
      font-family: var(--font-display);
      font-size: clamp(2.35rem, 8cqi, 4.25rem);
      font-weight: 800;
      line-height: 0.95;
      letter-spacing: -0.02em;
      margin: 0;
      color: var(--metric-accent);
      text-shadow: 0 0 24px rgba(252, 211, 77, 0.22);
      white-space: nowrap;
    }
    .frs-metric-card--rate .frs-metric-card__value {
      font-size: clamp(2rem, 6.5cqi, 3.6rem);
    }

    .frs-metric-card__meta {
      display: flex;
      flex-wrap: wrap;
      gap: 8px 14px;
      margin-top: 14px;
      font-family: var(--font-body);
      font-size: 0.82rem;
      color: var(--metric-muted);
    }
    .frs-metric-card__meta strong {
      color: #ffffff;
      font-weight: 700;
    }

    .frs-metric-track {
      height: 8px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.1);
      overflow: hidden;
      margin-top: 18px;
    }
    .frs-metric-track__fill {
      width: var(--metric-progress);
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, var(--metric-accent), var(--metric-accent-2));
      transform: scaleX(0);
      transform-origin: left;
      animation: frsMetricFill 1100ms cubic-bezier(.2, .8, .2, 1) forwards;
      animation-delay: calc(var(--metric-delay) + 520ms);
    }

    .frs-metric-spark {
      width: 100%;
      min-height: 110px;
      align-self: center;
    }
    .frs-metric-spark__area {
      fill: rgba(252, 211, 77, 0.09);
      opacity: 0;
      animation: frsSparkArea 900ms ease forwards;
      animation-delay: calc(var(--metric-delay) + 820ms);
    }
    .frs-metric-spark__line {
      fill: none;
      stroke: var(--metric-accent);
      stroke-width: 5;
      stroke-linecap: round;
      stroke-linejoin: round;
      stroke-dasharray: 420;
      stroke-dashoffset: 420;
      filter: drop-shadow(0 0 10px rgba(252, 211, 77, 0.34));
      animation: frsSparkDraw 1200ms cubic-bezier(.2, .8, .2, 1) forwards;
      animation-delay: calc(var(--metric-delay) + 520ms);
    }
    .frs-metric-spark__dot {
      fill: var(--metric-accent);
      opacity: 0;
      transform-origin: center;
      animation: frsDotPulse 1.8s ease-in-out infinite;
      animation-delay: calc(var(--metric-delay) + 1500ms);
    }

    .frs-loan-visual {
      align-self: center;
      display: grid;
      gap: 12px;
    }
    .frs-loan-tiles {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 8px;
    }
    .frs-loan-tile {
      aspect-ratio: 1;
      border-radius: 10px;
      background: var(--metric-card);
      border: 1px solid rgba(255, 255, 255, 0.08);
      display: flex;
      align-items: center;
      justify-content: center;
      color: rgba(255, 255, 255, 0.32);
      opacity: 0;
      transform: translateY(12px) scale(0.92);
      animation: frsLoanTileIn 520ms cubic-bezier(.2, .8, .2, 1) forwards;
      animation-delay: calc(var(--metric-delay) + (var(--tile-index) * 120ms) + 480ms);
    }
    .frs-loan-tile svg { width: 20px; height: 20px; }
    .frs-loan-tile--closed {
      background: rgba(252, 211, 77, 0.13);
      border-color: rgba(252, 211, 77, 0.45);
      color: var(--metric-accent);
      box-shadow: 0 0 0 1px rgba(252, 211, 77, 0.08), 0 12px 24px rgba(252, 211, 77, 0.08);
    }
    .frs-loan-caption {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      font-family: var(--font-body);
      font-size: 0.78rem;
      color: var(--metric-muted);
    }
    .frs-loan-caption strong {
      color: #ffffff;
      font-weight: 700;
    }

    .frs-rate-visual {
      align-self: center;
      display: grid;
      place-items: center;
    }
    .frs-rate-ring {
      position: relative;
      width: clamp(116px, 28cqi, 168px);
      aspect-ratio: 1;
      display: grid;
      place-items: center;
    }
    .frs-rate-ring svg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      transform: rotate(-90deg);
    }
    .frs-rate-ring__base {
      fill: none;
      stroke: rgba(255,255,255,0.1);
      stroke-width: 12;
    }
    .frs-rate-ring__value {
      fill: none;
      stroke: var(--metric-accent);
      stroke-width: 12;
      stroke-linecap: round;
      stroke-dasharray: 276;
      stroke-dashoffset: 276;
      filter: drop-shadow(0 0 10px rgba(252, 211, 77, 0.35));
      animation: frsRateRing 1200ms cubic-bezier(.2, .8, .2, 1) forwards;
      animation-delay: calc(var(--metric-delay) + 520ms);
    }
    .frs-rate-ring__center {
      width: 62%;
      aspect-ratio: 1;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: var(--metric-card);
      color: var(--metric-accent);
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.2rem, 4cqi, 1.85rem);
      box-shadow: inset 0 0 0 1px rgba(255,255,255,0.08);
    }
    .frs-rate-ring__badge {
      position: absolute;
      right: -6px;
      bottom: 15%;
      padding: 6px 9px;
      border-radius: 999px;
      background: #22c55e;
      color: #061018;
      font-family: var(--font-body);
      font-size: 0.72rem;
      font-weight: 800;
      box-shadow: 0 10px 22px rgba(34, 197, 94, 0.24);
      opacity: 0;
      transform: translateY(8px);
      animation: frsBadgeIn 520ms ease forwards, frsBadgePulse 2.2s ease-in-out infinite;
      animation-delay: calc(var(--metric-delay) + 1300ms), calc(var(--metric-delay) + 1900ms);
    }

    @keyframes frsMetricEnter {
      from { opacity: 0; transform: translateY(28px) scale(0.98); }
      to { opacity: 1; }
    }
    @keyframes frsMetricSheen {
      0%, 48% { transform: translateX(-120%); }
      68%, 100% { transform: translateX(120%); }
    }
    @keyframes frsMetricFill {
      to { transform: scaleX(1); }
    }
    @keyframes frsSparkDraw {
      to { stroke-dashoffset: 0; }
    }
    @keyframes frsSparkArea {
      to { opacity: 1; }
    }
    @keyframes frsDotPulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.55; transform: scale(1.45); }
    }
    @keyframes frsLoanTileIn {
      to { opacity: 1; transform: translateY(0) scale(1); }
    }
    @keyframes frsRateRing {
      to { stroke-dashoffset: 38; }
    }
    @keyframes frsBadgeIn {
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes frsBadgePulse {
      0%, 100% { transform: translateY(0) scale(1); }
      50% { transform: translateY(0) scale(1.06); }
    }

    @media (prefers-reduced-motion: reduce) {
      .frs-metric-card,
      .frs-metric-card::before,
      .frs-metric-track__fill,
      .frs-metric-spark__area,
      .frs-metric-spark__line,
      .frs-metric-spark__dot,
      .frs-loan-tile,
      .frs-rate-ring__value,
      .frs-rate-ring__badge {
        animation: none;
        opacity: 1;
        transform: none;
        stroke-dashoffset: 38;
      }
      .frs-metric-track__fill { transform: scaleX(1); }
      .frs-metric-spark__line { stroke-dashoffset: 0; }
    }

    @media (max-width: 720px) {
      .frs-hero__metrics {
        min-height: 0;
        padding-top: var(--space-xs);
      }
      .frs-hero__metrics::before,
      .frs-hero__metrics::after { display: none; }
      .frs-metric-stack {
        width: 100%;
        gap: var(--space-sm);
      }
      .frs-metric-card,
      .frs-metric-card--income,
      .frs-metric-card--loans,
      .frs-metric-card--rate {
        width: 100%;
        margin: 0;
        transform: none;
      }
      .frs-metric-card {
        grid-template-columns: 1fr;
        min-height: 0;
      }
      .frs-metric-spark { min-height: 92px; }
    }

    /* Business Planner screenshot — bare hero metrics (no gridded backdrop / tilted card) */
    .frs-hero__metrics--bare::before,
    .frs-hero__metrics--bare::after { content: none; }
    .bp-screenshot {
      display: block;
      width: 100%;
      max-width: 640px;
      height: auto;
    }

    /* BOTTOM BLOCK — accordion + dynamic stage */
    .frs-reveal__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--space-xl);
      align-items: start;
    }
    @media (min-width: 960px) {
      .frs-reveal__grid {
        grid-template-columns: minmax(0, 5fr) minmax(0, 7fr);
        gap: clamp(40px, 5vw, 72px);
      }
    }
    .frs-accordion {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: var(--space-sm);
    }
    .frs-item {
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-xl);
      overflow: hidden;
      transition: border-color 200ms ease, box-shadow 200ms ease;
    }
    .frs-item.is-open {
      border-color: var(--brass);
      box-shadow: 0 8px 24px rgba(2, 28, 54, 0.08);
    }
    .frs-item__header {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: var(--space-sm);
      padding: var(--space-md) var(--space-lg);
      background: transparent;
      border: 0;
      cursor: pointer;
      text-align: left;
      font-family: var(--font-display);
      font-weight: 600;
      font-size: 1.0625rem;
      color: var(--primary);
      letter-spacing: -0.01em;
    }
    .frs-item__header:focus-visible {
      outline: 2px solid var(--brass);
      outline-offset: -2px;
    }
    .frs-item__chevron {
      width: 12px;
      height: 12px;
      border-right: 2px solid var(--on-surface-variant);
      border-bottom: 2px solid var(--on-surface-variant);
      transform: rotate(45deg);
      transition: transform 220ms ease, border-color 220ms ease;
      flex-shrink: 0;
      margin-right: 4px;
    }
    .frs-item.is-open .frs-item__chevron {
      transform: rotate(-135deg);
      border-color: var(--brass);
    }
    .frs-item__panel {
      max-height: 0;
      overflow: hidden;
      opacity: 0;
      transition: max-height 320ms ease, opacity 220ms ease, padding 320ms ease;
      padding: 0 var(--space-lg);
    }
    .frs-item.is-open .frs-item__panel {
      max-height: 2000px;
      opacity: 1;
      padding: 0 var(--space-lg) var(--space-lg);
    }
    .frs-item__sub {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: 1rem;
      color: var(--brass);
      margin: 0 0 var(--space-xs);
      letter-spacing: -0.01em;
    }
    .frs-item__body {
      font-family: var(--font-body);
      font-size: 0.9375rem;
      line-height: 1.65;
      color: var(--on-surface-variant);
      margin: 0;
    }
    .frs-item__inline {
      display: none;
      margin-top: var(--space-md);
      container-type: inline-size;
    }
    @media (max-width: 959px) {
      .frs-item__inline { display: block; }
    }

    .frs-stage {
      position: sticky;
      top: calc(var(--header-h) + var(--space-md));
      container-type: inline-size;
    }
    @media (max-width: 959px) { .frs-stage { display: none; } }
    .frs-stage__panel {
      display: none;
      position: relative;
    }
    .frs-stage__panel.is-active { display: block; }

    /* TOOL — Financial Planning Assessment wizard */
    .frs-tool {
      --tool-bg: #0e1422;
      --tool-bar: #0a1018;
      --tool-card: #1a2233;
      --tool-card-2: #232b3d;
      --tool-card-3: #2a3344;
      --tool-border: rgba(255, 255, 255, 0.07);
      --tool-accent: #FCD34D;
      --tool-accent-2: #FBBF24;
      --tool-text: #ffffff;
      --tool-muted: #94a3b8;
      --tool-muted-2: #cbd5e1;
      --tool-positive: #22c55e;

      font-family: 'Inter', system-ui, sans-serif;
      background: var(--tool-bg);
      color: var(--tool-text);
      width: 100%;
      border-radius: 14px;
      overflow: hidden;
      box-shadow:
        0 24px 48px rgba(2, 28, 54, 0.18),
        0 6px 12px rgba(2, 28, 54, 0.10),
        0 0 0 1px rgba(255, 255, 255, 0.05);
      font-size: clamp(11px, 2.4cqi, 15px);
      line-height: 1.4;
      letter-spacing: 0;
      box-sizing: border-box;
    }
    .frs-stage .frs-tool { font-size: clamp(11px, 2.6cqi, 15px); }
    @media (max-width: 959px) {
      .frs-item__inline .frs-tool { font-size: clamp(11px, 3.4cqi, 14px); }
    }

    .frs-tool *, .frs-tool *::before, .frs-tool *::after { box-sizing: border-box; }
    .frs-tool p { margin: 0; }

    .frs-tool__topbar {
      display: flex;
      align-items: center;
      gap: 0.85em;
      padding: 0.9em 1.4em;
      background: var(--tool-bar);
      border-bottom: 1px solid var(--tool-border);
    }
    .frs-tool__topbar-icon {
      width: 1.9em;
      height: 1.9em;
      border-radius: 0.3em;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--tool-muted-2);
      flex-shrink: 0;
    }
    .frs-tool__topbar-icon svg { width: 1.4em; height: 1.4em; }
    .frs-tool__topbar-title {
      font-size: 1.05em;
      font-weight: 700;
      line-height: 1.15;
    }
    .frs-tool__topbar-subtitle {
      font-size: 0.72em;
      color: var(--tool-muted);
      margin-top: 0.15em;
    }
    .frs-tool__topbar-spacer { flex: 1; }
    .frs-tool__topbar-icon-btn {
      width: 1.5em;
      height: 1.5em;
      color: var(--tool-muted);
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    .frs-tool__topbar-icon-btn svg { width: 1em; height: 1em; }
    .frs-tool__topbar-avatar {
      width: 1.6em;
      height: 1.6em;
      border-radius: 50%;
      background: linear-gradient(135deg, #FBBF24, #c9961c);
      color: #0e1422;
      font-weight: 700;
      font-size: 0.7em;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .frs-tool__content {
      padding: 1.2em 1.6em 1.4em;
    }

    .frs-tool__breadcrumb {
      font-size: 0.75em;
      color: var(--tool-muted);
      margin-bottom: 0.9em;
    }
    .frs-tool__breadcrumb-sep { margin: 0 0.4em; opacity: 0.6; }
    .frs-tool__breadcrumb-active { color: var(--tool-accent); font-weight: 600; }

    .frs-tool__progress {
      background: var(--tool-card);
      border-radius: 0.5em;
      padding: 0.9em 1.1em;
      margin-bottom: 0.9em;
    }
    .frs-tool__progress-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.78em;
      font-weight: 600;
      margin-bottom: 0.55em;
    }
    .frs-tool__progress-pct { color: var(--tool-accent); }
    .frs-tool__progress-bar {
      height: 0.45em;
      background: rgba(255, 255, 255, 0.09);
      border-radius: 0.3em;
      overflow: hidden;
    }
    .frs-tool__progress-fill {
      height: 100%;
      background: var(--tool-accent);
      border-radius: 0.3em;
    }

    .frs-tool__panel {
      background: var(--tool-card);
      border-radius: 0.5em;
      padding: 1.2em 1.3em 1.2em;
    }
    .frs-tool__panel-title {
      font-size: 0.95em;
      font-weight: 700;
      margin: 0 0 1em;
      letter-spacing: -0.01em;
    }
    .frs-tool__panel-title--large {
      font-size: 1.1em;
      margin-bottom: 1.1em;
    }

    .frs-field { margin-bottom: 0.7em; }
    .frs-field__label {
      font-size: 0.65em;
      color: var(--tool-muted);
      margin-bottom: 0.35em;
      line-height: 1.3;
    }
    .frs-field__input {
      background: var(--tool-card-2);
      border: 1px solid transparent;
      border-radius: 0.4em;
      padding: 0.6em 0.85em;
      font-size: 0.82em;
      font-weight: 500;
      color: var(--tool-text);
      display: flex;
      align-items: center;
      gap: 0.35em;
      min-height: 2.1em;
    }
    .frs-field__suffix {
      color: var(--tool-muted);
      margin-left: auto;
      font-size: 0.9em;
    }
    .frs-field__prefix { color: var(--tool-muted); }
    .frs-field--highlight .frs-field__input {
      border: 1px dashed var(--tool-accent);
      color: var(--tool-accent);
      font-weight: 700;
      background: var(--tool-card-2);
    }

    .frs-tool__footer {
      display: flex;
      justify-content: space-between;
      gap: 0.7em;
      margin-top: 1em;
    }
    .frs-tool__btn {
      padding: 0.55em 1em;
      border-radius: 0.4em;
      font-size: 0.78em;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 0.35em;
      cursor: pointer;
      border: 0;
    }
    .frs-tool__btn--back {
      background: var(--tool-card-2);
      color: var(--tool-text);
    }
    .frs-tool__btn--next {
      background: var(--tool-accent);
      color: #0e1422;
    }
    .frs-tool__btn--save {
      background: var(--tool-accent);
      color: #0e1422;
    }

    .frs-panel-assumptions {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.6em 1em;
    }

    /* HOURLY RATE OF PAY — purpose-built calculation graphic
       (recreated for the web, not a screenshot copy). Reuses .frs-tool
       vars so it scales via the same container-query font sizing. */
    .hrop {
      display: grid;
      gap: 0.9em;
    }
    .hrop__eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 0.5em;
      font-size: 0.7em;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--tool-accent);
    }
    .hrop__eyebrow svg { width: 1.3em; height: 1.3em; }

    /* compact input chips that feed the calculation */
    .hrop__inputs {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 0.6em;
    }
    .hrop__chip {
      background: var(--tool-card-2);
      border: 1px solid var(--tool-border);
      border-radius: 0.55em;
      padding: 0.7em 0.8em;
    }
    .hrop__chip-label {
      font-size: 0.6em;
      line-height: 1.3;
      color: var(--tool-muted);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 0.4em;
    }
    .hrop__chip-value {
      font-family: var(--font-display);
      font-size: 1.15em;
      font-weight: 700;
      color: var(--tool-text);
    }
    .hrop__chip-value small {
      font-size: 0.6em;
      font-weight: 600;
      color: var(--tool-muted);
    }

    .hrop__flow {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.6em;
      color: var(--tool-muted);
      font-size: 0.66em;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }
    .hrop__flow::before,
    .hrop__flow::after {
      content: '';
      flex: 1;
      height: 1px;
      background: linear-gradient(90deg, transparent, var(--tool-border), transparent);
    }

    /* the two hero results — the numbers we want to stand out */
    .hrop__results {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.8em;
    }
    .hrop__result {
      position: relative;
      border-radius: 0.7em;
      padding: 2.4em 1.1em 1.2em;
      background:
        radial-gradient(120% 140% at 100% 0%, rgba(252, 211, 77, 0.10), transparent 60%),
        var(--tool-card);
      border: 1px solid var(--tool-border);
      overflow: hidden;
    }
    .hrop__result--feature {
      background:
        radial-gradient(120% 140% at 100% 0%, rgba(252, 211, 77, 0.22), transparent 62%),
        linear-gradient(160deg, #1f2740, var(--tool-card));
      border-color: rgba(252, 211, 77, 0.45);
      box-shadow: 0 0 0 1px rgba(252, 211, 77, 0.12), 0 16px 30px rgba(2, 28, 54, 0.28);
    }
    .hrop__result-label {
      font-size: 0.66em;
      font-weight: 600;
      line-height: 1.35;
      color: var(--tool-muted-2);
      margin-bottom: 0.5em;
    }
    .hrop__result-value {
      font-family: var(--font-display);
      font-weight: 800;
      line-height: 0.95;
      letter-spacing: -0.02em;
      color: var(--tool-text);
      font-size: 2.4em;
    }
    .hrop__result--feature .hrop__result-value {
      color: var(--tool-accent);
      text-shadow: 0 0 26px rgba(252, 211, 77, 0.3);
      font-size: 3em;
    }
    .hrop__result-value small {
      font-family: var(--font-body);
      font-size: 0.34em;
      font-weight: 700;
      letter-spacing: 0;
      color: var(--tool-muted);
      margin-left: 0.15em;
    }
    .hrop__result-foot {
      margin-top: 0.6em;
      font-size: 0.64em;
      color: var(--tool-muted);
    }
    .hrop__result-tag {
      position: absolute;
      top: 0.9em;
      right: 0.9em;
      font-size: 0.56em;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 0.35em 0.6em;
      border-radius: 999px;
      background: rgba(252, 211, 77, 0.16);
      color: var(--tool-accent);
    }
    @media (max-width: 420px) {
      .hrop__inputs { grid-template-columns: 1fr; }
    }

    /* ============================================================
       AI BUSINESS & LIFE PLANNER — bpl reveal block
       Elements also carry .frs-* classes, so structural styling is
       inherited. Below: only the deltas + the 4 bespoke graphics.
       ============================================================ */

    /* image-less hero: single column so no blank right gap */
    .frs-hero__grid--copy-only { grid-template-columns: 1fr; }
    @media (min-width: 960px) {
      .frs-hero__grid--copy-only { grid-template-columns: 1fr; }
      .frs-hero__grid--copy-only .frs-hero__lede { max-width: 52rem; }
    }

    /* step number badge in the accordion header title */
    .bpl-item__title { display: inline-flex; align-items: center; gap: 0.6em; }
    .bpl-step {
      flex-shrink: 0;
      width: 1.7em;
      height: 1.7em;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-body);
      font-size: 0.78em;
      font-weight: 700;
      color: var(--brass);
      background: rgba(201, 150, 28, 0.12);
      box-shadow: inset 0 0 0 1px rgba(201, 150, 28, 0.35);
    }
    .bpl-item.is-open .bpl-step {
      color: var(--primary);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      box-shadow: none;
    }

    /* ── Graphic 1 · Assessment (.bpa-*) ── */
    .bpa-qmeta {
      font-size: 0.66em;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--tool-muted);
      margin-bottom: 0.7em;
    }
    .bpa-question {
      font-family: var(--font-display);
      font-size: 1.05em;
      font-weight: 700;
      line-height: 1.3;
      color: var(--tool-text);
      margin-bottom: 1.2em;
    }
    .bpa-scale {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 0.5em;
      margin-bottom: 0.7em;
    }
    .bpa-dot {
      aspect-ratio: 1;
      border-radius: 0.5em;
      border: 1px solid var(--tool-border);
      background: var(--tool-card-2);
      color: var(--tool-muted-2);
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 0.95em;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: default;
    }
    .bpa-dot.is-selected {
      background: linear-gradient(135deg, var(--tool-accent), var(--tool-accent-2));
      color: #0e1422;
      border-color: transparent;
      box-shadow: 0 0 0 1px rgba(252, 211, 77, 0.4), 0 10px 22px rgba(252, 211, 77, 0.18);
    }
    .bpa-legend {
      display: flex;
      justify-content: space-between;
      font-size: 0.66em;
      color: var(--tool-muted);
    }

    /* ── Graphic 2 · Coach's Report + radar (.bpc-*) ── */
    .bpc-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.2em;
      align-items: center;
    }
    @container (min-width: 360px) {
      .bpc-grid { grid-template-columns: 1.05fr 1fr; }
    }
    .bpc-radar {
      background: var(--tool-card);
      border: 1px solid var(--tool-border);
      border-radius: 0.7em;
      padding: 0.8em;
    }
    .bpc-radar svg { width: 100%; height: auto; display: block; }
    .bpc-radar__grid polygon { fill: none; stroke: rgba(255, 255, 255, 0.10); stroke-width: 1; }
    .bpc-radar__spokes line { stroke: rgba(255, 255, 255, 0.08); stroke-width: 1; }
    .bpc-radar__area {
      fill: rgba(252, 211, 77, 0.18);
      stroke: var(--tool-accent);
      stroke-width: 2;
      stroke-linejoin: round;
      filter: drop-shadow(0 0 8px rgba(252, 211, 77, 0.25));
    }
    .bpc-radar__dots circle { fill: var(--tool-accent); stroke: #0e1422; stroke-width: 1; }
    .bpc-tag {
      display: inline-block;
      font-size: 0.62em;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #0e1422;
      background: linear-gradient(135deg, var(--tool-accent), var(--tool-accent-2));
      padding: 0.4em 0.7em;
      border-radius: 999px;
      margin-bottom: 0.8em;
    }
    .bpc-focus {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.6em;
      padding: 0.55em 0.7em;
      background: var(--tool-card-2);
      border: 1px solid var(--tool-border);
      border-radius: 0.5em;
      margin-bottom: 0.5em;
    }
    .bpc-focus__label { font-size: 0.78em; font-weight: 600; color: var(--tool-text); }
    .bpc-focus__chip {
      font-size: 0.72em;
      font-weight: 700;
      color: var(--tool-accent);
      white-space: nowrap;
    }
    .bpc-plan-label {
      font-size: 0.66em;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--tool-muted);
      margin: 1em 0 0.5em;
    }
    .bpc-plan {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: 0.5em;
    }
    .bpc-plan li {
      position: relative;
      padding-left: 1.1em;
      font-size: 0.76em;
      line-height: 1.45;
      color: var(--tool-muted-2);
    }
    .bpc-plan li::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0.5em;
      width: 0.4em;
      height: 0.4em;
      border-radius: 50%;
      background: var(--tool-accent);
    }

    /* ── Graphic 3 · Goals library (.bpg-*) ── */
    .bpg-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.6em;
      margin-bottom: 1em;
    }
    .bpg-stat {
      background: var(--tool-card);
      border: 1px solid var(--tool-border);
      border-radius: 0.55em;
      padding: 0.7em 0.6em;
      text-align: center;
    }
    .bpg-stat__num {
      display: block;
      font-family: var(--font-display);
      font-size: 1.3em;
      font-weight: 800;
      color: var(--tool-accent);
      line-height: 1;
    }
    .bpg-stat__label {
      display: block;
      margin-top: 0.35em;
      font-size: 0.62em;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: var(--tool-muted);
    }
    .bpg-list { display: grid; gap: 0.6em; }
    .bpg-goal {
      background: var(--tool-card);
      border: 1px solid var(--tool-border);
      border-radius: 0.6em;
      overflow: hidden;
    }
    .bpg-goal.is-open { border-color: rgba(252, 211, 77, 0.4); }
    .bpg-goal__head {
      display: flex;
      align-items: center;
      gap: 0.6em;
      padding: 0.75em 0.85em;
    }
    .bpg-goal__chev {
      flex-shrink: 0;
      width: 0.5em;
      height: 0.5em;
      border-right: 2px solid var(--tool-muted);
      border-bottom: 2px solid var(--tool-muted);
      transform: rotate(45deg);
    }
    .bpg-goal.is-open .bpg-goal__chev { transform: rotate(-135deg); border-color: var(--tool-accent); }
    .bpg-goal__title {
      flex: 1;
      font-size: 0.84em;
      font-weight: 600;
      color: var(--tool-text);
    }
    .bpg-tag {
      flex-shrink: 0;
      font-size: 0.62em;
      font-weight: 700;
      color: var(--tool-accent);
      background: rgba(252, 211, 77, 0.12);
      padding: 0.35em 0.6em;
      border-radius: 999px;
      white-space: nowrap;
    }
    .bpg-actions {
      list-style: none;
      margin: 0;
      padding: 0 0.85em 0.85em;
      display: grid;
      gap: 0.45em;
    }
    .bpg-action {
      display: flex;
      align-items: center;
      gap: 0.55em;
      padding: 0.55em 0.7em;
      background: var(--tool-card-2);
      border-radius: 0.45em;
      font-size: 0.76em;
      color: var(--tool-muted-2);
    }
    .bpg-action__icon {
      flex-shrink: 0;
      width: 1.4em;
      height: 1.4em;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: rgba(252, 211, 77, 0.14);
      color: var(--tool-accent);
    }
    .bpg-action__icon svg { width: 0.85em; height: 0.85em; }

    /* ── Graphic 4 · Reminders (.bpr-*) ── */
    .bpr-field-label,
    .bpr-freq__label {
      font-size: 0.66em;
      color: var(--tool-muted);
      margin-bottom: 0.4em;
    }
    .bpr-field {
      background: var(--tool-card-2);
      border: 1px solid var(--tool-border);
      border-radius: 0.5em;
      padding: 0.8em 0.9em;
      font-size: 0.82em;
      line-height: 1.4;
      color: var(--tool-text);
      margin-bottom: 1em;
    }
    .bpr-reminder {
      background: var(--tool-card-2);
      border: 1px solid var(--tool-border);
      border-radius: 0.6em;
      padding: 0.9em 1em 1em;
    }
    .bpr-reminder__head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.7em;
    }
    .bpr-reminder__title { font-size: 0.82em; font-weight: 700; color: var(--tool-text); }
    .bpr-reminder__on {
      font-size: 0.62em;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      color: var(--tool-positive);
      background: rgba(34, 197, 94, 0.14);
      padding: 0.3em 0.6em;
      border-radius: 999px;
    }
    .bpr-seg {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.3em;
      padding: 0.25em;
      background: rgba(0, 0, 0, 0.25);
      border-radius: 0.5em;
      margin-bottom: 0.8em;
    }
    .bpr-seg__btn {
      border: 0;
      border-radius: 0.4em;
      padding: 0.5em;
      font-size: 0.76em;
      font-weight: 600;
      color: var(--tool-muted-2);
      background: transparent;
      cursor: default;
    }
    .bpr-seg__btn.is-active {
      background: linear-gradient(135deg, var(--tool-accent), var(--tool-accent-2));
      color: #0e1422;
      font-weight: 700;
    }
    .bpr-freq {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.8em;
    }
    .bpr-freq__value { font-size: 0.8em; font-weight: 700; color: var(--tool-text); }
    .bpr-days { display: grid; grid-template-columns: repeat(7, 1fr); gap: 0.35em; }
    .bpr-day {
      aspect-ratio: 1;
      border-radius: 0.4em;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.72em;
      font-weight: 700;
      color: var(--tool-muted);
      background: var(--tool-card);
      border: 1px solid var(--tool-border);
    }
    .bpr-day.is-on {
      color: #0e1422;
      background: linear-gradient(135deg, var(--tool-accent), var(--tool-accent-2));
      border-color: transparent;
    }
    .bpr-footer { align-items: center; }
    .bpr-addgoal {
      display: inline-flex;
      align-items: center;
      gap: 0.5em;
      border: 1px dashed var(--tool-border);
      background: transparent;
      color: var(--tool-muted-2);
      padding: 0.5em 0.8em;
      border-radius: 0.4em;
      font-size: 0.76em;
      font-weight: 600;
      cursor: default;
    }
    .bpr-aiwriter {
      font-size: 0.85em;
      font-weight: 700;
      color: var(--tool-accent);
      background: rgba(252, 211, 77, 0.12);
      padding: 0.2em 0.5em;
      border-radius: 999px;
    }

    .frs-panel-breakeven__inputs {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1em;
      margin-bottom: 0.9em;
    }
    .frs-panel-breakeven__results {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 0.8em;
    }

    .frs-source {
      padding: 0.9em 0 0.6em;
      border-top: 1px solid var(--tool-border);
    }
    .frs-source:first-of-type { border-top: 0; padding-top: 0.3em; }
    .frs-source__header {
      display: flex;
      align-items: center;
      gap: 0.45em;
      font-size: 0.88em;
      font-weight: 700;
      margin-bottom: 0.65em;
    }
    .frs-source__icon {
      width: 1.1em;
      height: 1.1em;
      color: var(--tool-muted-2);
    }
    .frs-source__icon svg { width: 100%; height: 100%; }
    .frs-source__grid {
      display: grid;
      grid-template-columns: 1.4fr 0.9fr;
      gap: 0.6em 0.8em;
    }
    .frs-source__total {
      grid-column: 1 / -1;
    }
    .frs-source-totals {
      margin-top: 0.9em;
      padding: 1em 1.2em;
      border: 1px solid var(--tool-accent);
      border-radius: 0.5em;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.8em;
      text-align: center;
    }
    .frs-source-totals__label {
      font-size: 0.75em;
      color: var(--tool-muted-2);
      margin-bottom: 0.3em;
    }
    .frs-source-totals__value {
      font-size: 1.5em;
      font-weight: 700;
      color: var(--tool-accent);
      letter-spacing: -0.01em;
    }

    /* TOOL — Financial Modeling Tool dashboard */
    .frs-tool--modeling .frs-tool__content { padding: 1em 1.4em 1.2em; }
    .frs-tool--modeling .frs-tool__topbar-subtitle::before {
      content: '';
      display: inline-block;
      width: 0.55em;
      height: 0.55em;
      border-radius: 50%;
      background: var(--tool-accent);
      margin-right: 0.35em;
      vertical-align: middle;
    }

    .frs-modeling__toolbar {
      display: flex;
      align-items: center;
      gap: 0.6em;
      margin-bottom: 0.9em;
    }
    .frs-modeling__tabs {
      display: inline-flex;
      background: var(--tool-card);
      border-radius: 0.4em;
      padding: 0.2em;
    }
    .frs-modeling__tab {
      padding: 0.4em 0.9em;
      font-size: 0.74em;
      font-weight: 600;
      border-radius: 0.3em;
      color: var(--tool-muted-2);
    }
    .frs-modeling__tab--active {
      background: var(--tool-card-3);
      color: var(--tool-text);
    }
    .frs-modeling__toolbar-spacer { flex: 1; }
    .frs-modeling__btn {
      padding: 0.45em 0.85em;
      border-radius: 0.4em;
      font-size: 0.72em;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 0.3em;
    }
    .frs-modeling__btn--ghost {
      background: transparent;
      color: var(--tool-text);
      border: 1px solid var(--tool-border);
    }
    .frs-modeling__btn--primary {
      background: var(--tool-accent);
      color: #0e1422;
    }

    .frs-modeling__stats {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 0.6em;
      margin-bottom: 0.9em;
    }
    .frs-stat {
      background: var(--tool-card);
      border-radius: 0.5em;
      padding: 0.8em 0.95em;
      position: relative;
    }
    .frs-stat__label {
      font-size: 0.62em;
      color: var(--tool-muted);
      margin-bottom: 0.4em;
      letter-spacing: 0.02em;
    }
    .frs-stat__value {
      font-size: 1.3em;
      font-weight: 700;
      letter-spacing: -0.015em;
    }
    .frs-stat__progress {
      height: 0.25em;
      background: rgba(255,255,255,0.08);
      border-radius: 0.15em;
      margin-top: 0.5em;
      overflow: hidden;
    }
    .frs-stat__progress-fill {
      height: 100%;
      background: var(--tool-accent);
    }
    .frs-stat__target {
      position: absolute;
      bottom: 0.5em;
      right: 0.9em;
      font-size: 0.55em;
      color: var(--tool-muted);
    }

    .frs-modeling__body {
      display: grid;
      grid-template-columns: 1.7fr 1fr;
      gap: 0.8em;
    }
    .frs-activities {
      background: var(--tool-card);
      border-radius: 0.5em;
      padding: 0.85em 0.95em;
    }
    .frs-activities__title {
      font-size: 0.78em;
      font-weight: 700;
      margin-bottom: 0.55em;
    }
    .frs-activity {
      display: flex;
      align-items: center;
      gap: 0.5em;
      padding: 0.4em 0;
      border-top: 1px solid var(--tool-border);
    }
    .frs-activity:first-of-type { border-top: 0; }
    .frs-activity__avatar {
      width: 1.5em;
      height: 1.5em;
      border-radius: 0.3em;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.7em;
      font-weight: 700;
      color: #0e1422;
      flex-shrink: 0;
    }
    .frs-activity__avatar--a { background: #34d399; }
    .frs-activity__avatar--b { background: #60a5fa; }
    .frs-activity__avatar--c { background: #f472b6; }
    .frs-activity__avatar--d { background: #fbbf24; }
    .frs-activity__avatar--e { background: #a78bfa; }
    .frs-activity__avatar--f { background: #fb7185; }
    .frs-activity__name {
      font-size: 0.7em;
      font-weight: 600;
      line-height: 1.2;
    }
    .frs-activity__date {
      font-size: 0.55em;
      color: var(--tool-muted);
      margin-top: 0.1em;
    }
    .frs-activity__spacer { flex: 1; }
    .frs-activity__badge {
      font-size: 0.55em;
      font-weight: 700;
      padding: 0.25em 0.55em;
      border-radius: 0.25em;
      letter-spacing: 0.04em;
    }
    .frs-activity__badge--approved { background: rgba(52, 211, 153, 0.15); color: #34d399; }
    .frs-activity__badge--lead { background: rgba(252, 211, 77, 0.15); color: var(--tool-accent); }
    .frs-activity__badge--applied { background: rgba(252, 211, 77, 0.18); color: var(--tool-accent); }
    .frs-activity__badge--closed { background: rgba(148, 163, 184, 0.15); color: var(--tool-muted-2); }

    .frs-modeling__sidebar {
      display: flex;
      flex-direction: column;
      gap: 0.7em;
    }
    .frs-conv {
      background: var(--tool-card);
      border-radius: 0.5em;
      padding: 0.85em 0.95em;
    }
    .frs-conv__title {
      font-size: 0.72em;
      font-weight: 700;
      margin-bottom: 0.4em;
    }
    .frs-conv__big {
      font-size: 1.05em;
      font-weight: 700;
      color: var(--tool-accent);
      letter-spacing: -0.01em;
    }
    .frs-conv__big strong { font-weight: 700; }
    .frs-conv__sub {
      font-size: 0.6em;
      color: var(--tool-muted);
      margin-top: 0.25em;
    }
    .frs-distribution__row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.45em 0;
      border-top: 1px solid var(--tool-border);
      font-size: 0.72em;
    }
    .frs-distribution__row:first-of-type { border-top: 0; }
    .frs-distribution__label { color: var(--tool-muted-2); }
    .frs-distribution__value { font-weight: 700; }

    /* Callouts */
    .frs-callout {
      position: absolute;
      z-index: 5;
      display: flex;
      align-items: center;
      gap: 8px;
      pointer-events: none;
    }
    .frs-callout__pill {
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      color: #0e1422;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 0.8rem;
      letter-spacing: -0.005em;
      padding: 8px 14px;
      border-radius: 999px;
      box-shadow:
        0 6px 16px rgba(2, 28, 54, 0.35),
        0 0 0 2px rgba(252, 211, 77, 0.25);
      white-space: nowrap;
    }
    .frs-callout__line {
      width: 38px;
      height: 2px;
      background: var(--brass);
      box-shadow: 0 0 8px rgba(252, 211, 77, 0.6);
      position: relative;
    }
    .frs-callout__line::after {
      content: '';
      position: absolute;
      right: -2px;
      top: 50%;
      transform: translateY(-50%);
      width: 0;
      height: 0;
      border-left: 7px solid var(--brass);
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent;
    }
    .frs-callout--reverse {
      flex-direction: row-reverse;
    }
    .frs-callout--reverse .frs-callout__line::after {
      right: auto;
      left: -2px;
      border-left: 0;
      border-right: 7px solid var(--brass);
    }
    @media (max-width: 1120px) {
      .frs-callout__pill { font-size: 0.7rem; padding: 6px 10px; }
      .frs-callout__line { width: 24px; }
    }
    @media (max-width: 959px) {
      .frs-callout { display: none; }
    }

    .frs-callout--hourly {
      top: 73%;
      right: -8px;
      transform: translateX(60%);
    }
    .frs-callout--breakeven {
      bottom: 19%;
      right: -8px;
      transform: translateX(60%);
    }
    .frs-callout--sources {
      bottom: 11%;
      left: 50%;
      transform: translate(-50%, 60%);
      flex-direction: column;
      gap: 4px;
    }
    .frs-callout--sources .frs-callout__line {
      width: 2px;
      height: 22px;
    }
    .frs-callout--sources .frs-callout__line::after {
      right: 50%;
      top: -2px;
      transform: translateX(50%);
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-bottom: 7px solid var(--brass);
      border-top: 0;
    }
    .frs-callout--live {
      top: 38%;
      right: -8px;
      transform: translateX(60%);
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main">

    <!-- ============================================================
         HERO
         ============================================================ -->
    <section class="wi-hero">
      <img class="wi-hero__bg" src="<?php echo TLA_BASE; ?>/assets/dashboard.png" alt="" aria-hidden="true" />
      <div class="wi-hero__fade" aria-hidden="true"></div>
      <div class="container">
        <div class="wi-hero__copy">
          <h1 class="wi-hero__title" data-hero-step="2">Everything you need to stop flying blind and start running a <em>predictable</em> mortgage business.</h1>
          <p class="wi-hero__sub" data-hero-step="3">Five AI-powered systems. 200+ training modules. Live coaching every week. Scripts and templates for every high-leverage conversation.</p>
          <div class="wi-hero__actions" data-hero-step="4">
            <a class="btn btn--gold btn--lg" href="/join/">Start Your Transformation
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a class="btn btn--ghost-on-dark btn--lg" href="/consultation/">Book Your Free Coaching Call</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         STATS BAR
         ============================================================ -->
    <div class="stats-bar">
      <div class="container">
        <div class="stats-bar__grid" data-reveal-stagger="100">
          <div class="stats-bar__item">
            <span class="stats-bar__num" data-countup="5" data-countup-commas="false">5</span>
            <span class="stats-bar__label">AI-Powered Systems</span>
          </div>
          <div class="stats-bar__item">
            <span class="stats-bar__num" data-countup="200" data-countup-suffix="+" data-countup-commas="false">200+</span>
            <span class="stats-bar__label">Training Modules</span>
          </div>
          <div class="stats-bar__item">
            <span class="stats-bar__num" data-countup="18" data-countup-commas="false">18</span>
            <span class="stats-bar__label">Experienced Coaches</span>
          </div>
          <div class="stats-bar__item">
            <span class="stats-bar__num">Weekly</span>
            <span class="stats-bar__label">Live Coaching</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
         AI FINANCIAL REVIEW — click-and-reveal showcase
         ============================================================ -->
    <section class="frs-section">
      <div class="frs-section__inner">
        <div class="frs-hero__grid">

          <div class="frs-hero__copy">
            <h2 class="frs-hero__title">AI-Driven Financial Review Tool</h2>
            <p class="frs-hero__subhead">Build your year <em>by the numbers</em>.</p>
            <p class="frs-hero__lede">Most loan originators set an income goal and hope. The AI-Driven Financial Review replaces hope with math. Tell it what you want to earn, how many hours you want to work, and how many weeks you want off. It builds the entire financial picture of your business — what your time is worth, how many loans you need, and exactly where every one of them has to come from.</p>
          </div>

          <!-- Crafted metric-card graphics retired to mockups/financial-review-metric-cards.html -->
          <div class="frs-hero__metrics frs-hero__metrics--bare" aria-hidden="true">
            <img class="bp-screenshot" src="<?php echo TLA_BASE; ?>/assets/loan-officer-business-planning.png" alt="Loan officer reviewing their business plan with the AI-Driven Financial Review" />
          </div>
        </div>
      </div>
    </section>

    <section class="frs-section">
      <div class="frs-section__inner">
        <div class="frs-reveal__grid">

          <ol class="frs-accordion">

            <li class="frs-item is-open" data-frs-item="1">
              <button class="frs-item__header" type="button" aria-expanded="true" aria-controls="frs-panel-1">
                <span class="frs-item__title">Hourly Rate of Pay Calculator</span>
                <span class="frs-item__chevron" aria-hidden="true"></span>
              </button>
              <div id="frs-panel-1" class="frs-item__panel" role="region">
                <p class="frs-item__sub">Know what every hour of your time is worth.</p>
                <p class="frs-item__body">The planner takes your income goal, your working hours, and your vacation weeks and shows you your true hourly rate of pay. The moment you see that number, you stop spending hours on tasks you should be paying someone else to do.</p>
                <div class="frs-item__inline" data-tool="assumptions"></div>
              </div>
            </li>

            <li class="frs-item" data-frs-item="2">
              <button class="frs-item__header" type="button" aria-expanded="false" aria-controls="frs-panel-2">
                <span class="frs-item__title">Break-Even Loan Calculator</span>
                <span class="frs-item__chevron" aria-hidden="true"></span>
              </button>
              <div id="frs-panel-2" class="frs-item__panel" role="region">
                <p class="frs-item__sub">The most important number in your business.</p>
                <p class="frs-item__body">Enter your expenses and tax bracket. The planner shows you the exact number of loans you have to close every month just to break even. Most originators have never run this number. Once you do, every decision gets easier.</p>
                <div class="frs-item__inline" data-tool="breakeven"></div>
              </div>
            </li>

            <li class="frs-item" data-frs-item="3">
              <button class="frs-item__header" type="button" aria-expanded="false" aria-controls="frs-panel-3">
                <span class="frs-item__title">Lead Source Mapping</span>
                <span class="frs-item__chevron" aria-hidden="true"></span>
              </button>
              <div id="frs-panel-3" class="frs-item__panel" role="region">
                <p class="frs-item__sub">Every loan, mapped to its source.</p>
                <p class="frs-item__body">The planner reverse-engineers your year — past database, referral partners, consumer direct marketing. It tells you how many leads you need from each source, and the conversion rate you have to hit on each, to land your income goal.</p>
                <div class="frs-item__inline" data-tool="sources"></div>
              </div>
            </li>

            <li class="frs-item" data-frs-item="4">
              <button class="frs-item__header" type="button" aria-expanded="false" aria-controls="frs-panel-4">
                <span class="frs-item__title">Live Performance Tracking</span>
                <span class="frs-item__chevron" aria-hidden="true"></span>
              </button>
              <div id="frs-panel-4" class="frs-item__panel" role="region">
                <p class="frs-item__sub">Always know if you're on pace.</p>
                <p class="frs-item__body">Every lead, every loan, every closed deal feeds your numbers in real time. Your batting average. Your income. Your hourly rate. Updating live — so you can adjust before the year gets away from you, not after.</p>
                <div class="frs-item__inline" data-tool="modeling"></div>
              </div>
            </li>

          </ol>

          <div class="frs-stage" aria-live="polite">

            <div class="frs-stage__panel is-active" data-frs-panel="1" data-tool="assumptions">
              <!-- Redesigned graphic carries its own "Your number" emphasis; external callout removed. -->
            </div>

            <div class="frs-stage__panel" data-frs-panel="2" data-tool="breakeven">
              <span class="frs-callout frs-callout--breakeven">
                <span class="frs-callout__line"></span>
                <span class="frs-callout__pill">Loans to break even</span>
              </span>
            </div>

            <div class="frs-stage__panel" data-frs-panel="3" data-tool="sources">
              <span class="frs-callout frs-callout--sources">
                <span class="frs-callout__pill">Your year, mapped to its sources</span>
                <span class="frs-callout__line"></span>
              </span>
            </div>

            <div class="frs-stage__panel" data-frs-panel="4" data-tool="modeling">
              <span class="frs-callout frs-callout--live">
                <span class="frs-callout__line"></span>
                <span class="frs-callout__pill">Your batting average — live</span>
              </span>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Tool templates for AI Financial Review showcase -->
    <template id="tpl-tool-assumptions">
      <div class="frs-tool">
        <div class="frs-tool__topbar">
          <span class="frs-tool__topbar-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
          </span>
          <div>
            <p class="frs-tool__topbar-title">Hourly Rate of Pay</p>
            <p class="frs-tool__topbar-subtitle">What every hour of your time is worth</p>
          </div>
        </div>
        <div class="frs-tool__content">
          <div class="hrop">

            <span class="hrop__eyebrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V5"/><path d="M4 19h16"/><path d="m7 15 4-4 3 3 5-7"/></svg>
              Your assumptions
            </span>

            <div class="hrop__inputs">
              <div class="hrop__chip">
                <p class="hrop__chip-label">Desired annual income</p>
                <p class="hrop__chip-value">$400,000</p>
              </div>
              <div class="hrop__chip">
                <p class="hrop__chip-label">Hours per week</p>
                <p class="hrop__chip-value">45 <small>hrs</small></p>
              </div>
              <div class="hrop__chip">
                <p class="hrop__chip-label">Vacation weeks</p>
                <p class="hrop__chip-value">3 <small>wks</small></p>
              </div>
            </div>

            <div class="hrop__flow">The math</div>

            <div class="hrop__results">
              <div class="hrop__result">
                <p class="hrop__result-label">Weeks you’ll work this year</p>
                <p class="hrop__result-value">49 <small>weeks</small></p>
                <p class="hrop__result-foot">52 weeks − 3 vacation</p>
              </div>
              <div class="hrop__result hrop__result--feature">
                <span class="hrop__result-tag">Your number</span>
                <p class="hrop__result-label">Your true hourly rate of pay</p>
                <p class="hrop__result-value">$181<small>/hr</small></p>
                <p class="hrop__result-foot">$400K ÷ 49 wks ÷ 45 hrs</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </template>

    <template id="tpl-tool-breakeven">
      <div class="frs-tool">
        <div class="frs-tool__topbar">
          <span class="frs-tool__topbar-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="3" width="12" height="18" rx="2"/><path d="M9 3v2h6V3"/><path d="M9 11h6M9 15h4"/></svg>
          </span>
          <div>
            <p class="frs-tool__topbar-title">Financial Planning Assessment</p>
            <p class="frs-tool__topbar-subtitle">Build your financial roadmap</p>
          </div>
        </div>
        <div class="frs-tool__content">
          <p class="frs-tool__breadcrumb">Financial Planning <span class="frs-tool__breadcrumb-sep">›</span><span class="frs-tool__breadcrumb-active">Assessment</span></p>
          <div class="frs-tool__progress">
            <div class="frs-tool__progress-row">
              <span>Step 3 of 6: Step #1: Break-Even</span>
              <span class="frs-tool__progress-pct">50%</span>
            </div>
            <div class="frs-tool__progress-bar"><div class="frs-tool__progress-fill" style="width:50%"></div></div>
          </div>
          <div class="frs-tool__panel">
            <h3 class="frs-tool__panel-title frs-tool__panel-title--large">Step #1: How many loans do I need to cover my expenses?</h3>
            <div class="frs-panel-breakeven__inputs">
              <div class="frs-field"><p class="frs-field__label">Current Monthly Expenses (Personal &amp; Business)</p><div class="frs-field__input"><span class="frs-field__prefix">$</span>15000</div></div>
              <div class="frs-field"><p class="frs-field__label">Current Tax Bracket (Federal &amp; State Combined)</p><div class="frs-field__input">32<span class="frs-field__suffix">%</span></div></div>
            </div>
            <div class="frs-panel-breakeven__results">
              <div class="frs-field frs-field--highlight"><p class="frs-field__label">Gross Before-Tax Income Needed (Monthly)</p><div class="frs-field__input">$22,059</div></div>
              <div class="frs-field frs-field--highlight"><p class="frs-field__label">Annual Income Needed To Break Even</p><div class="frs-field__input">$264,706</div></div>
              <div class="frs-field frs-field--highlight"><p class="frs-field__label">Loans Needed per Month to Break-Even</p><div class="frs-field__input">5.51</div></div>
            </div>
          </div>
          <div class="frs-tool__footer">
            <button class="frs-tool__btn frs-tool__btn--back">‹ Back</button>
            <button class="frs-tool__btn frs-tool__btn--next">Next ›</button>
          </div>
        </div>
      </div>
    </template>

    <template id="tpl-tool-sources">
      <div class="frs-tool">
        <div class="frs-tool__topbar">
          <span class="frs-tool__topbar-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="3" width="12" height="18" rx="2"/><path d="M9 3v2h6V3"/><path d="M9 11h6M9 15h4"/></svg>
          </span>
          <div>
            <p class="frs-tool__topbar-title">Financial Planning Assessment</p>
            <p class="frs-tool__topbar-subtitle">Build your financial roadmap</p>
          </div>
        </div>
        <div class="frs-tool__content">
          <p class="frs-tool__breadcrumb">Financial Planning <span class="frs-tool__breadcrumb-sep">›</span><span class="frs-tool__breadcrumb-active">Assessment</span></p>
          <div class="frs-tool__progress">
            <div class="frs-tool__progress-row">
              <span>Step 4 of 6: Step #2: Business Sources</span>
              <span class="frs-tool__progress-pct">67%</span>
            </div>
            <div class="frs-tool__progress-bar"><div class="frs-tool__progress-fill" style="width:67%"></div></div>
          </div>
          <div class="frs-tool__panel">
            <h3 class="frs-tool__panel-title frs-tool__panel-title--large">Step #2: Where is this business going to come from?</h3>

            <div class="frs-source">
              <div class="frs-source__header">
                <span class="frs-source__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 19c0-3 3-5 6-5s6 2 6 5"/><path d="M14 19c0-2.2 2-3.5 4-3.5s3 1.3 3 3"/></svg></span>
                (1) Client Database
              </div>
              <div class="frs-source__grid">
                <div class="frs-field"><p class="frs-field__label">current number of people in my database</p><div class="frs-field__input">789</div></div>
                <div class="frs-field"><p class="frs-field__label">closing ratio on past clients</p><div class="frs-field__input">10<span class="frs-field__suffix">%</span></div></div>
                <div class="frs-field frs-source__total frs-field--highlight"><p class="frs-field__label">Annual Loans from Database</p><div class="frs-field__input">34.94</div></div>
              </div>
            </div>

            <div class="frs-source">
              <div class="frs-source__header">
                <span class="frs-source__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
                (2) Strategic Partners
              </div>
              <div class="frs-source__grid">
                <div class="frs-field"><p class="frs-field__label">number of active referral partners</p><div class="frs-field__input">12</div></div>
                <div class="frs-field"><p class="frs-field__label">avg loans referred per partner</p><div class="frs-field__input">2.25</div></div>
                <div class="frs-field frs-source__total frs-field--highlight"><p class="frs-field__label">Annual Loans from Partners</p><div class="frs-field__input">13.50</div></div>
              </div>
            </div>

            <div class="frs-source">
              <div class="frs-source__header">
                <span class="frs-source__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5"/></svg></span>
                (3) Consumer Direct
              </div>
              <div class="frs-source__grid">
                <div class="frs-field"><p class="frs-field__label">annual leads from marketing</p><div class="frs-field__input">300</div></div>
                <div class="frs-field"><p class="frs-field__label">closing ratio on marketing leads</p><div class="frs-field__input">10<span class="frs-field__suffix">%</span></div></div>
                <div class="frs-field frs-source__total frs-field--highlight"><p class="frs-field__label">Annual Loans from CD</p><div class="frs-field__input">30.00</div></div>
              </div>
            </div>

            <div class="frs-source-totals">
              <div>
                <p class="frs-source-totals__label">Total Annual Loans:</p>
                <p class="frs-source-totals__value">78.44</p>
              </div>
              <div>
                <p class="frs-source-totals__label">Total Monthly Loans:</p>
                <p class="frs-source-totals__value">6.54</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>

    <template id="tpl-tool-modeling">
      <div class="frs-tool frs-tool--modeling">
        <div class="frs-tool__topbar">
          <span class="frs-tool__topbar-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/><path d="M8 14l2 2 5-5"/></svg>
          </span>
          <div>
            <p class="frs-tool__topbar-title">Financial Modeling Tool</p>
            <p class="frs-tool__topbar-subtitle">At-a-glance</p>
          </div>
          <span class="frs-tool__topbar-spacer"></span>
          <span class="frs-tool__topbar-icon-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg></span>
          <span class="frs-tool__topbar-avatar">A</span>
        </div>
        <div class="frs-tool__content">
          <div class="frs-modeling__toolbar">
            <div class="frs-modeling__tabs">
              <span class="frs-modeling__tab frs-modeling__tab--active">Monthly</span>
              <span class="frs-modeling__tab">Yearly</span>
            </div>
            <span class="frs-modeling__toolbar-spacer"></span>
            <span class="frs-modeling__btn frs-modeling__btn--ghost">+ New Lead</span>
            <span class="frs-modeling__btn frs-modeling__btn--primary">+ New Closed Loan</span>
          </div>
          <div class="frs-modeling__stats">
            <div class="frs-stat">
              <p class="frs-stat__label">Total Monthly Income</p>
              <p class="frs-stat__value">$16,750</p>
              <div class="frs-stat__progress"><div class="frs-stat__progress-fill" style="width:82%"></div></div>
              <span class="frs-stat__target">Target: $20,333</span>
            </div>
            <div class="frs-stat">
              <p class="frs-stat__label">Loans This Month</p>
              <p class="frs-stat__value">2</p>
              <div class="frs-stat__progress"><div class="frs-stat__progress-fill" style="width:100%"></div></div>
              <span class="frs-stat__target">Target: 1</span>
            </div>
            <div class="frs-stat">
              <p class="frs-stat__label">Hourly Rate This Month</p>
              <p class="frs-stat__value">$3,045/hr</p>
              <div class="frs-stat__progress"><div class="frs-stat__progress-fill" style="width:100%"></div></div>
              <span class="frs-stat__target">Target: $850/hr</span>
            </div>
          </div>
          <div class="frs-modeling__body">
            <div class="frs-activities">
              <p class="frs-activities__title">Recent Activities</p>
              <div class="frs-activity">
                <span class="frs-activity__avatar frs-activity__avatar--a">M</span>
                <div>
                  <p class="frs-activity__name">Mikayla Nielsen Approved</p>
                  <p class="frs-activity__date">April · Thursday, 2026</p>
                </div>
                <span class="frs-activity__spacer"></span>
                <span class="frs-activity__badge frs-activity__badge--approved">APPROVED</span>
              </div>
              <div class="frs-activity">
                <span class="frs-activity__avatar frs-activity__avatar--d">T</span>
                <div>
                  <p class="frs-activity__name">New lead: Tyler Browning</p>
                  <p class="frs-activity__date">April · Thursday, 2026</p>
                </div>
                <span class="frs-activity__spacer"></span>
                <span class="frs-activity__badge frs-activity__badge--lead">LEAD</span>
              </div>
              <div class="frs-activity">
                <span class="frs-activity__avatar frs-activity__avatar--b">J</span>
                <div>
                  <p class="frs-activity__name">New lead: Jason Trawick</p>
                  <p class="frs-activity__date">April · Thursday, 2026</p>
                </div>
                <span class="frs-activity__spacer"></span>
                <span class="frs-activity__badge frs-activity__badge--lead">LEAD</span>
              </div>
              <div class="frs-activity">
                <span class="frs-activity__avatar frs-activity__avatar--c">A</span>
                <div>
                  <p class="frs-activity__name">Alicia Dane Applied</p>
                  <p class="frs-activity__date">April · Thursday, 2026</p>
                </div>
                <span class="frs-activity__spacer"></span>
                <span class="frs-activity__badge frs-activity__badge--applied">APPLIED</span>
              </div>
              <div class="frs-activity">
                <span class="frs-activity__avatar frs-activity__avatar--e">J</span>
                <div>
                  <p class="frs-activity__name">New closed loan for Jordan Pace</p>
                  <p class="frs-activity__date">April · Thursday, 2026</p>
                </div>
                <span class="frs-activity__spacer"></span>
                <span class="frs-activity__badge frs-activity__badge--closed">CLOSED</span>
              </div>
              <div class="frs-activity">
                <span class="frs-activity__avatar frs-activity__avatar--f">S</span>
                <div>
                  <p class="frs-activity__name">New closed loan for Shane Pippin</p>
                  <p class="frs-activity__date">April · Thursday, 2026</p>
                </div>
                <span class="frs-activity__spacer"></span>
                <span class="frs-activity__badge frs-activity__badge--closed">CLOSED</span>
              </div>
            </div>
            <div class="frs-modeling__sidebar">
              <div class="frs-conv">
                <p class="frs-conv__title">Conversion Average</p>
                <p class="frs-conv__big"><strong>4 Closed</strong> / 11 Leads</p>
                <p class="frs-conv__sub">Up from last month by one prior data</p>
              </div>
              <div class="frs-conv">
                <p class="frs-conv__title">Loan Generation Distribution (Live)</p>
                <div class="frs-distribution__row"><span class="frs-distribution__label">Closed Loans</span><span class="frs-distribution__value">4</span></div>
                <div class="frs-distribution__row"><span class="frs-distribution__label">Loans In Progress</span><span class="frs-distribution__value">2</span></div>
                <div class="frs-distribution__row"><span class="frs-distribution__label">Warm Leads</span><span class="frs-distribution__value">3</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>

    <!-- ============================================================
         AI BUSINESS & LIFE PLANNER — hero copy
         ============================================================ -->
    <section class="frs-section">
      <div class="frs-section__inner">
        <div class="frs-hero__grid frs-hero__grid--copy-only">

          <div class="frs-hero__copy">
            <span class="eyebrow"><span class="eyebrow__text">AI Business Planning</span></span>
            <h2 class="frs-hero__title">Turn self-awareness into a year you actually <em>run</em>.</h2>
            <p class="frs-hero__subhead">No more <em>Monday morning paralysis</em>.</p>
            <p class="frs-hero__lede">Most loan officers know what they should be doing. They just never have a clear plan for the week in front of them. This tool fixes that. It diagnoses your business across the eight disciplines of origination mastery, turns it into a personalized coach&rsquo;s report, and builds a working plan &mdash; real goals, real action items &mdash; that tells you exactly what to work on today, this week, this quarter.</p>
          </div>

        </div>
      </div>
    </section>

    <!-- ============================================================
         AI BUSINESS & LIFE PLANNER — click-to-reveal (Assess → Diagnose → Plan → Execute)
         Scoped .bpl-* namespace; styling reuses .frs-* classes.
         ============================================================ -->
    <section class="frs-section">
      <div class="frs-section__inner">
        <div class="bpl-reveal__grid frs-reveal__grid">

          <ol class="bpl-accordion frs-accordion">

            <li class="bpl-item frs-item is-open" data-bpl-item="1">
              <button class="bpl-item__header frs-item__header" type="button" aria-expanded="true" aria-controls="bpl-panel-1">
                <span class="bpl-item__title frs-item__title"><span class="bpl-step">1</span>Business Assessment</span>
                <span class="bpl-item__chevron frs-item__chevron" aria-hidden="true"></span>
              </button>
              <div id="bpl-panel-1" class="bpl-item__panel frs-item__panel" role="region">
                <p class="bpl-item__sub frs-item__sub">See your entire business clearly — for the first time.</p>
                <p class="bpl-item__body frs-item__body">A 40-question diagnostic across the eight disciplines of origination mastery — sales, marketing, time management, team leadership, and more. You rate yourself one to five. Ten minutes later, you have the most honest picture of your business you&rsquo;ve ever seen.</p>
                <div class="bpl-item__inline frs-item__inline" data-bpl-tool="assess"></div>
              </div>
            </li>

            <li class="bpl-item frs-item" data-bpl-item="2">
              <button class="bpl-item__header frs-item__header" type="button" aria-expanded="false" aria-controls="bpl-panel-2">
                <span class="bpl-item__title frs-item__title"><span class="bpl-step">2</span>AI Coach&rsquo;s Report</span>
                <span class="bpl-item__chevron frs-item__chevron" aria-hidden="true"></span>
              </button>
              <div id="bpl-panel-2" class="bpl-item__panel frs-item__panel" role="region">
                <p class="bpl-item__sub frs-item__sub">Your personalized roadmap, generated by AI.</p>
                <p class="bpl-item__body frs-item__body">The moment you finish your assessment, AI builds you a personal coach&rsquo;s report. Your strengths. Your blind spots. The exact areas where focus will move the needle most. Not generic advice — your business, your gaps, your roadmap.</p>
                <div class="bpl-item__inline frs-item__inline" data-bpl-tool="coach"></div>
              </div>
            </li>

            <li class="bpl-item frs-item" data-bpl-item="3">
              <button class="bpl-item__header frs-item__header" type="button" aria-expanded="false" aria-controls="bpl-panel-3">
                <span class="bpl-item__title frs-item__title"><span class="bpl-step">3</span>Goals &amp; Action Items Library</span>
                <span class="bpl-item__chevron frs-item__chevron" aria-hidden="true"></span>
              </button>
              <div id="bpl-panel-3" class="bpl-item__panel frs-item__panel" role="region">
                <p class="bpl-item__sub frs-item__sub">The playbook the top producers actually run.</p>
                <p class="bpl-item__body frs-item__body">86 professionally written SMART goals. Over 950 action items. All organized by the eight disciplines and built from fifteen years of Tim Braheem coaching top producers. The AI surfaces the goals most relevant to your results — you decide which ones become your plan.</p>
                <div class="bpl-item__inline frs-item__inline" data-bpl-tool="goals"></div>
              </div>
            </li>

            <li class="bpl-item frs-item" data-bpl-item="4">
              <button class="bpl-item__header frs-item__header" type="button" aria-expanded="false" aria-controls="bpl-panel-4">
                <span class="bpl-item__title frs-item__title"><span class="bpl-step">4</span>Custom Goals &amp; Automated Reminders</span>
                <span class="bpl-item__chevron frs-item__chevron" aria-hidden="true"></span>
              </button>
              <div id="bpl-panel-4" class="bpl-item__panel frs-item__panel" role="region">
                <p class="bpl-item__sub frs-item__sub">Make the plan yours — and make it stick.</p>
                <p class="bpl-item__body frs-item__body">Edit any action item. Delete the ones that don&rsquo;t fit. Or write your own — the AI Goal Writer helps you build custom goals tailored to your business. Then set your reminders: daily, weekly, or any rhythm that fits your week. Because the originators who win are the ones with the best follow-through.</p>
                <div class="bpl-item__inline frs-item__inline" data-bpl-tool="remind"></div>
              </div>
            </li>

          </ol>

          <div class="bpl-stage frs-stage" aria-live="polite">
            <div class="bpl-stage__panel frs-stage__panel is-active" data-bpl-panel="1" data-bpl-tool="assess"></div>
            <div class="bpl-stage__panel frs-stage__panel" data-bpl-panel="2" data-bpl-tool="coach"></div>
            <div class="bpl-stage__panel frs-stage__panel" data-bpl-panel="3" data-bpl-tool="goals"></div>
            <div class="bpl-stage__panel frs-stage__panel" data-bpl-panel="4" data-bpl-tool="remind"></div>
          </div>

        </div>
      </div>
    </section>

    <!-- Tool templates for AI Business & Life Planner showcase -->
    <template id="tpl-bpl-assess">
      <div class="frs-tool">
        <div class="frs-tool__topbar">
          <span class="frs-tool__topbar-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 3v2h6V3"/><path d="m9 12 2 2 4-4"/></svg>
          </span>
          <div>
            <p class="frs-tool__topbar-title">Business Assessment</p>
            <p class="frs-tool__topbar-subtitle">Rate yourself, 1 to 5</p>
          </div>
        </div>
        <div class="frs-tool__content">
          <div class="frs-tool__progress">
            <div class="frs-tool__progress-row">
              <span>Step 1 of 8: Essential Knowledge</span>
              <span class="frs-tool__progress-pct">13%</span>
            </div>
            <div class="frs-tool__progress-bar"><div class="frs-tool__progress-fill" style="width:13%"></div></div>
          </div>
          <div class="frs-tool__panel">
            <p class="bpa-qmeta">Question 4 of 40</p>
            <p class="bpa-question">I am an expert on how financial markets and economic factors affect interest rates.</p>
            <div class="bpa-scale">
              <button class="bpa-dot" type="button" tabindex="-1">1</button>
              <button class="bpa-dot" type="button" tabindex="-1">2</button>
              <button class="bpa-dot" type="button" tabindex="-1">3</button>
              <button class="bpa-dot is-selected" type="button" tabindex="-1">4</button>
              <button class="bpa-dot" type="button" tabindex="-1">5</button>
            </div>
            <div class="bpa-legend">
              <span>Strongly disagree</span>
              <span>Strongly agree</span>
            </div>
          </div>
          <div class="frs-tool__footer">
            <button class="frs-tool__btn frs-tool__btn--back">‹ Back</button>
            <button class="frs-tool__btn frs-tool__btn--next">Next ›</button>
          </div>
        </div>
      </div>
    </template>

    <template id="tpl-bpl-coach">
      <div class="frs-tool">
        <div class="frs-tool__topbar">
          <span class="frs-tool__topbar-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v2"/><path d="M5.5 6.5 7 8"/><path d="M3 13h2"/><path d="M19 13h2"/><path d="M18.5 6.5 17 8"/><rect x="7" y="9" width="10" height="9" rx="2.5"/><path d="M10 13v1"/><path d="M14 13v1"/><path d="M9 21h6"/></svg>
          </span>
          <div>
            <p class="frs-tool__topbar-title">AI Coach&rsquo;s Report</p>
            <p class="frs-tool__topbar-subtitle">Your strengths and focus areas</p>
          </div>
        </div>
        <div class="frs-tool__content">
          <div class="bpc-grid">
            <div class="bpc-radar">
              <svg viewBox="0 0 220 220" role="img" aria-label="Wheel of Life radar chart across eight disciplines">
                <g class="bpc-radar__grid">
                  <polygon points="110,30 166.6,53.4 190,110 166.6,166.6 110,190 53.4,166.6 30,110 53.4,53.4"/>
                  <polygon points="110,50 151.7,68.3 170,110 151.7,151.7 110,170 68.3,151.7 50,110 68.3,68.3"/>
                  <polygon points="110,70 136.9,83.1 150,110 136.9,136.9 110,150 83.1,136.9 70,110 83.1,83.1"/>
                  <polygon points="110,90 122.1,97.9 130,110 122.1,122.1 110,130 97.9,122.1 90,110 97.9,97.9"/>
                </g>
                <g class="bpc-radar__spokes">
                  <line x1="110" y1="110" x2="110" y2="30"/>
                  <line x1="110" y1="110" x2="166.6" y2="53.4"/>
                  <line x1="110" y1="110" x2="190" y2="110"/>
                  <line x1="110" y1="110" x2="166.6" y2="166.6"/>
                  <line x1="110" y1="110" x2="110" y2="190"/>
                  <line x1="110" y1="110" x2="53.4" y2="166.6"/>
                  <line x1="110" y1="110" x2="30" y2="110"/>
                  <line x1="110" y1="110" x2="53.4" y2="53.4"/>
                </g>
                <!-- data polygon: per-axis radius from center (max 80). N, NE, E, SE, S, SW, W, NW -->
                <polygon class="bpc-radar__area" points="110,62 150.3,69.7 168,110 144.5,144.5 110,158 75.1,144.9 58,110 75.1,75.1"/>
                <g class="bpc-radar__dots">
                  <circle cx="110" cy="62" r="3.2"/>
                  <circle cx="150.3" cy="69.7" r="3.2"/>
                  <circle cx="168" cy="110" r="3.2"/>
                  <circle cx="144.5" cy="144.5" r="3.2"/>
                  <circle cx="110" cy="158" r="3.2"/>
                  <circle cx="75.1" cy="144.9" r="3.2"/>
                  <circle cx="58" cy="110" r="3.2"/>
                  <circle cx="75.1" cy="75.1" r="3.2"/>
                </g>
              </svg>
            </div>
            <div class="bpc-narrative">
              <span class="bpc-tag">Focus Areas</span>
              <div class="bpc-focus">
                <span class="bpc-focus__label">Time Management</span>
                <span class="bpc-focus__chip">11 / 25</span>
              </div>
              <div class="bpc-focus">
                <span class="bpc-focus__label">Legacy &amp; Freedom</span>
                <span class="bpc-focus__chip">13 / 25</span>
              </div>
              <p class="bpc-plan-label">Action Plan</p>
              <ul class="bpc-plan">
                <li>Protect two deep-work blocks each week before the calendar fills.</li>
                <li>Define the one-year vision that the weekly plan ladders up to.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </template>

    <template id="tpl-bpl-goals">
      <div class="frs-tool">
        <div class="frs-tool__topbar">
          <span class="frs-tool__topbar-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg>
          </span>
          <div>
            <p class="frs-tool__topbar-title">My Plan</p>
            <p class="frs-tool__topbar-subtitle">Goals &amp; action items</p>
          </div>
        </div>
        <div class="frs-tool__content">
          <p class="frs-tool__breadcrumb">My Plan <span class="frs-tool__breadcrumb-sep">›</span><span class="frs-tool__breadcrumb-active">Goals &amp; Actions</span></p>
          <div class="bpg-stats">
            <div class="bpg-stat"><span class="bpg-stat__num">86</span><span class="bpg-stat__label">Goals</span></div>
            <div class="bpg-stat"><span class="bpg-stat__num">950+</span><span class="bpg-stat__label">Actions</span></div>
            <div class="bpg-stat"><span class="bpg-stat__num">8</span><span class="bpg-stat__label">Disciplines</span></div>
          </div>
          <div class="bpg-list">
            <div class="bpg-goal is-open">
              <div class="bpg-goal__head">
                <span class="bpg-goal__chev" aria-hidden="true"></span>
                <span class="bpg-goal__title">Build a weekly database touch system</span>
                <span class="bpg-tag">Time Management</span>
              </div>
              <ul class="bpg-actions">
                <li class="bpg-action"><span class="bpg-action__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>Call 10 past clients every week</li>
                <li class="bpg-action"><span class="bpg-action__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>Send a market-update note monthly</li>
                <li class="bpg-action"><span class="bpg-action__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>Tag every contact by referral potential</li>
              </ul>
            </div>
            <div class="bpg-goal">
              <div class="bpg-goal__head">
                <span class="bpg-goal__chev" aria-hidden="true"></span>
                <span class="bpg-goal__title">Run a structured weekly team huddle</span>
                <span class="bpg-tag">Team &amp; Leadership</span>
              </div>
            </div>
            <div class="bpg-goal">
              <div class="bpg-goal__head">
                <span class="bpg-goal__chev" aria-hidden="true"></span>
                <span class="bpg-goal__title">Protect a daily morning routine</span>
                <span class="bpg-tag">Mindset &amp; Health</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>

    <template id="tpl-bpl-remind">
      <div class="frs-tool">
        <div class="frs-tool__topbar">
          <span class="frs-tool__topbar-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
          </span>
          <div>
            <p class="frs-tool__topbar-title">Edit Action</p>
            <p class="frs-tool__topbar-subtitle">Make it yours</p>
          </div>
        </div>
        <div class="frs-tool__content">
          <div class="frs-tool__panel">
            <p class="bpr-field-label">Action</p>
            <div class="bpr-field">Block 90 minutes every morning for revenue-generating activity.</div>

            <div class="bpr-reminder">
              <div class="bpr-reminder__head">
                <span class="bpr-reminder__title">Reminder</span>
                <span class="bpr-reminder__on">On</span>
              </div>
              <div class="bpr-seg">
                <button class="bpr-seg__btn is-active" type="button" tabindex="-1">Ongoing</button>
                <button class="bpr-seg__btn" type="button" tabindex="-1">Per Week</button>
              </div>
              <div class="bpr-freq">
                <span class="bpr-freq__label">Frequency</span>
                <span class="bpr-freq__value">7× per week</span>
              </div>
              <div class="bpr-days">
                <span class="bpr-day is-on">M</span>
                <span class="bpr-day is-on">T</span>
                <span class="bpr-day is-on">W</span>
                <span class="bpr-day is-on">T</span>
                <span class="bpr-day is-on">F</span>
                <span class="bpr-day is-on">S</span>
                <span class="bpr-day is-on">S</span>
              </div>
            </div>
          </div>
          <div class="frs-tool__footer bpr-footer">
            <button class="bpr-addgoal" type="button" tabindex="-1">+ Add Custom Goal <span class="bpr-aiwriter">AI Goal Writer</span></button>
            <button class="frs-tool__btn frs-tool__btn--next">Save</button>
          </div>
        </div>
      </div>
    </template>

    <!-- ============================================================
         AI BUSINESS AND LIFE COACHES — grid around centered phone image
         ============================================================ -->
    <section class="aicg-section">
      <div class="aicg">

        <div class="aicg__header" data-reveal="up">
          <h2 class="aicg__title">Seven specialized AI coaches — available the moment you need them.</h2>
          <div class="aicg__rule" aria-hidden="true"></div>
          <p class="aicg__lede">Built on <span data-countup="25" data-countup-suffix="+" data-countup-commas="false">25+</span> years of origination at the highest level. Every script, every framework, every system that separates the top 1% from everyone else — available whenever the work calls for it.</p>
        </div>

        <div class="aicg__grid">

          <!-- LEFT COLUMN -->
          <div class="aicg__col aicg__col--left">

            <article class="aicg-coach" data-reveal="up">
              <div class="aicg-coach__row">
                <div class="aicg-coach__icon" aria-hidden="true">
                  <!-- lucide: message-square-quote -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M8 12a2 2 0 0 0 2-2V8H8"/><path d="M14 12a2 2 0 0 0 2-2V8h-2"/></svg>
                </div>
                <h3 class="aicg-coach__heading">Sales &amp; Scripting Coach</h3>
              </div>
              <span class="aicg-coach__eyebrow">Close the hard conversations</span>
              <p class="aicg-coach__desc">Like having Tim Braheem available at 10pm on a Tuesday. Paste a difficult message, prep for a hard conversation, or upload a call recording and get specific coaching on what to do differently.</p>
            </article>

            <article class="aicg-coach" data-reveal="up">
              <div class="aicg-coach__row">
                <div class="aicg-coach__icon" aria-hidden="true">
                  <!-- lucide: book-open -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                </div>
                <h3 class="aicg-coach__heading">Content Coach</h3>
              </div>
              <span class="aicg-coach__eyebrow">Find the fix, fast</span>
              <p class="aicg-coach__desc">Tell it what's happening in your business right now and it finds the exact training — across 200+ modules, masterclasses, and Office Hours sessions — that fixes it.</p>
            </article>

            <article class="aicg-coach" data-reveal="up">
              <div class="aicg-coach__row">
                <div class="aicg-coach__icon" aria-hidden="true">
                  <!-- lucide: activity -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3 class="aicg-coach__heading">Health, Mindset &amp; Vitality Coach</h3>
              </div>
              <span class="aicg-coach__eyebrow">Perform under pressure</span>
              <p class="aicg-coach__desc">Daily support for the internal state everything else runs on. Reset before high-stakes conversations, work through doubt and overwhelm, and build the consistency that makes everything else sustainable.</p>
            </article>

          </div>

          <!-- CENTER IMAGE -->
          <div class="aicg__center" data-reveal="up">
            <div class="aicg__stage">
              <div class="aicg__frame" aria-hidden="true"></div>
              <div class="aicg__blob aicg__blob--tr" aria-hidden="true"></div>
              <div class="aicg__blob aicg__blob--bl" aria-hidden="true"></div>
              <div class="aicg__dot aicg__dot--top" aria-hidden="true"></div>
              <div class="aicg__dot aicg__dot--bottom" aria-hidden="true"></div>
              <div class="aicg__image-wrap">
                <img class="aicg__image" src="<?php echo TLA_BASE; ?>/assets/sales-coach-phone.png" alt="AI Sales &amp; Scripting Coach on mobile" />
              </div>
            </div>
          </div>

          <!-- RIGHT COLUMN -->
          <div class="aicg__col aicg__col--right">

            <article class="aicg-coach" data-reveal="up">
              <div class="aicg-coach__row">
                <div class="aicg-coach__icon" aria-hidden="true">
                  <!-- lucide: compass -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
                </div>
                <h3 class="aicg-coach__heading">Strategic Thought Partner</h3>
              </div>
              <span class="aicg-coach__eyebrow">Decide with conviction</span>
              <p class="aicg-coach__desc">A second brain for the decisions that don't fit on a checklist. Should you hire? Change companies? Restructure your team? Walk into a hard decision with someone to think it through with.</p>
            </article>

            <article class="aicg-coach" data-reveal="up">
              <div class="aicg-coach__row">
                <div class="aicg-coach__icon" aria-hidden="true">
                  <!-- lucide: trending-up -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                </div>
                <h3 class="aicg-coach__heading">Performance Coach</h3>
              </div>
              <span class="aicg-coach__eyebrow">Hit the goals you set</span>
              <p class="aicg-coach__desc">Daily and weekly accountability tuned to your actual goals — not a generic productivity framework. Reviews what you said you'd do, what you actually did, and what's getting in the way.</p>
            </article>

            <article class="aicg-coach" data-reveal="up">
              <div class="aicg-coach__row">
                <div class="aicg-coach__icon" aria-hidden="true">
                  <!-- lucide: handshake -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/><path d="m21 3 1 11h-2"/><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/><path d="M3 4h8"/></svg>
                </div>
                <h3 class="aicg-coach__heading">Realtor &amp; Partner Coach</h3>
              </div>
              <span class="aicg-coach__eyebrow">Turn partners into pipeline</span>
              <p class="aicg-coach__desc">Strategy and scripting for the relationships that drive most of your business. Prep partner meetings, draft outreach, handle the awkward conversations, and build a referral base that compounds.</p>
            </article>

          </div>

        </div>
      </div>
    </section>


    <!-- ============================================================
         TRAINING FRAMEWORK
         ============================================================ -->
    <section class="disc-section">
      <div class="disc-section__inner">

        <div class="disc-split">

          <!-- LEFT: heading + body -->
          <div class="disc-copy" data-reveal="up">
            <span class="disc-copy__eyebrow">The Training Framework</span>
            <h2 class="disc-copy__title">Built upon the <em>8 Disciplines</em> of Mortgage Origination Mastery.</h2>
            <p class="disc-copy__lede">Nobody taught you how to run a mortgage business. They taught you how to originate loans. The 8 Disciplines cover what's actually required to do both — so you're building something that compounds instead of grinding through a job that resets every Monday.</p>
          </div>

          <!-- RIGHT: vertical marquee of module thumbnails -->
          <div class="disc-marquee" aria-hidden="true">
            <div class="disc-marquee__col disc-marquee__col--up">
              <div class="disc-marquee__track">
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/connect-with-target-agents-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/Minimizing-Taxes-Maximizing-Investments-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/fixed-adjustable-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/handling-a-negative-review-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/peak-performance-rituals-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/experiencing-your-genius-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/reverse%20mortgages-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/turning-clients-into-advocates-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/ultimate-business-planning-tool-module-thumbnail.jpg" alt="" /></div>
                <!-- duplicate set for seamless loop -->
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/connect-with-target-agents-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/Minimizing-Taxes-Maximizing-Investments-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/fixed-adjustable-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/handling-a-negative-review-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/peak-performance-rituals-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/experiencing-your-genius-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/reverse%20mortgages-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/turning-clients-into-advocates-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/ultimate-business-planning-tool-module-thumbnail.jpg" alt="" /></div>
              </div>
            </div>

            <div class="disc-marquee__col disc-marquee__col--down">
              <div class="disc-marquee__track">
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/female-empowerment-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/email-optimization-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/gratitude-calls-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/handling-objections-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/employee-reviews-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/the-process-for-creating-content-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/presenting-new-lead-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/take-care-of-your-epople-module-thumbnail.png" alt="" /></div>
                <!-- duplicate set for seamless loop -->
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/female-empowerment-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/email-optimization-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/gratitude-calls-module-thumbnail.jpg" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/handling-objections-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/employee-reviews-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/the-process-for-creating-content-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/presenting-new-lead-module-thumbnail.png" alt="" /></div>
                <div class="disc-thumb"><img src="<?php echo TLA_BASE; ?>/assets/take-care-of-your-epople-module-thumbnail.png" alt="" /></div>
              </div>
            </div>
          </div>

        </div><!-- /disc-split -->

        <!-- Discipline clusters -->
        <div class="disc-clusters">

          <!-- Cluster 1: Business disciplines -->
          <div class="discipline-cluster">
            <span class="discipline-cluster__label">Business Disciplines</span>
            <div class="discipline-cluster__grid discipline-cluster__grid--5col">

              <div class="discipline-card">
                <span class="discipline-card__num">01</span>
                <h3 class="discipline-card__title">Essential Product Knowledge</h3>
                <p class="discipline-card__desc">Stop competing on rate. Become the expert in the room — on products, economics, mortgage math, and client psychology — so your advice commands trust instead of comparison.</p>
              </div>

              <div class="discipline-card">
                <span class="discipline-card__num">02</span>
                <h3 class="discipline-card__title">A System for Selling</h3>
                <p class="discipline-card__desc">A structured, repeatable sales framework built around the Pre-Purchase Consultation. Every conversation moves from rate-shopping to committed client — predictably, not by feel.</p>
              </div>

              <div class="discipline-card">
                <span class="discipline-card__num">03</span>
                <h3 class="discipline-card__title">Marketing Mastery</h3>
                <p class="discipline-card__desc">Stop waiting for the phone to ring. Build a consistent message, a real referral strategy, and a presence that brings opportunities to you instead of making you chase them.</p>
              </div>

              <div class="discipline-card">
                <span class="discipline-card__num">04</span>
                <h3 class="discipline-card__title">Team Building &amp; Leadership</h3>
                <p class="discipline-card__desc">Stop trying to do everything yourself. Learn exactly when and who to hire, how to delegate without things falling apart, and how to build a team that doesn't need you to function.</p>
              </div>

              <div class="discipline-card">
                <span class="discipline-card__num">05</span>
                <h3 class="discipline-card__title">Systems of Customer Service</h3>
                <p class="discipline-card__desc">Home of the Perfect Loan Process. A repeatable, proactive client experience that reduces stress, prevents surprises, and turns every closing into the starting point for the next loan.</p>
              </div>

            </div>

            <!-- Inline testimonial quote (homepage quote-card style) -->
            <figure class="quote-card">
              <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
              <blockquote class="quote-card__quote">If you did nothing else but go through the System for Selling module &mdash; it&rsquo;ll change your career and your life.</blockquote>
              <figcaption class="quote-card__attr">
                <div class="quote-card__name">Jim Juergens</div>
                <div class="quote-card__org">NEO Home Loans</div>
              </figcaption>
            </figure>
          </div>

          <!-- Cluster 2: Personal disciplines -->
          <div class="discipline-cluster">
            <span class="discipline-cluster__label">Personal Disciplines</span>
            <div class="discipline-cluster__grid discipline-cluster__grid--3col">

              <div class="discipline-card">
                <span class="discipline-card__num">06</span>
                <h3 class="discipline-card__title">Legacy &amp; Freedom</h3>
                <p class="discipline-card__desc">Design the life you actually want — not just a career you drift through. Vision, wealth beyond commissions, succession thinking, and building a business that serves the life you're trying to live.</p>
              </div>

              <div class="discipline-card">
                <span class="discipline-card__num">07</span>
                <h3 class="discipline-card__title">Mindset, Health &amp; Personal Development</h3>
                <p class="discipline-card__desc">The problems you think are external — leads, conversion, the market — are often internal. This discipline addresses what's actually underneath: fear, self-doubt, emotional reactivity, and the energy that everything else runs on.</p>
              </div>

              <div class="discipline-card">
                <span class="discipline-card__num">08</span>
                <h3 class="discipline-card__title">Time &amp; Task Management</h3>
                <p class="discipline-card__desc">Stop letting the day control you. Build planning systems that run from annual goals to daily priorities — so your best hours go to the work that actually moves your business forward.</p>
              </div>

            </div>
          </div>

        </div>

        <!-- Full-width intro video -->
        <div class="video-ph video-ph--wide disc-video">
          <iframe
            src="https://player.vimeo.com/video/885102725?title=0&byline=0&portrait=0"
            title="Introduction to the 8 Disciplines of Origination Mastery"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen></iframe>
        </div>

      </div>
    </section>

    <!-- ============================================================
         LIVE COACHING
         ============================================================ -->
    <section class="section bg-white">
      <div class="container">

        <div data-reveal="up" style="margin-bottom: var(--space-xl);">
          <span class="eyebrow"><span class="eyebrow__text">Live Coaching</span></span>
          <h2 class="section-heading" style="margin-bottom: var(--space-md);">You're never more than a week away from your next live coaching session.</h2>
          <p class="t-body-lg t-muted">Most programs give you content and leave you alone with it. Inside The Loan Atlas, there's always a live session happening — always a coach available, always a room of originators working through the same problems you are. That's how learning becomes execution.</p>
        </div>

        <div class="coaching-grid" data-reveal-stagger="120">

          <!-- Masterclasses -->
          <a class="coaching-card" href="/events/">
            <div class="coaching-card__media">
              <div class="video-ph" style="aspect-ratio: auto; width: 100%; height: 100%; border-radius: 0; box-shadow: none; border: none;">
                <img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-masterclass.jpg" alt="" />
              </div>
            </div>
            <div class="coaching-card__body">
              <span class="coaching-card__type">Masterclasses</span>
              <h3 class="coaching-card__title">60–90 minute deep dives on the systems that move your business.</h3>
              <p class="coaching-card__desc">Led by Atlas faculty. The System for Selling, Strike Rate Strategy, Realtor attraction, AI productivity, market economics — with slides, worksheets, and live Q&amp;A. This is where you get the framework.</p>
              <span class="coaching-card__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </span>
            </div>
          </a>

          <!-- Office Hours -->
          <a class="coaching-card" href="/events/">
            <div class="coaching-card__media">
              <div class="video-ph" style="aspect-ratio: auto; width: 100%; height: 100%; border-radius: 0; box-shadow: none; border: none;">
                <img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-office-hours.jpg" alt="" />
              </div>
            </div>
            <div class="coaching-card__body">
              <span class="coaching-card__type">Office Hours</span>
              <h3 class="coaching-card__title">Bring a real problem. Get coached on it live.</h3>
              <p class="coaching-card__desc">A pricing scenario you can't figure out, a Realtor relationship going sideways, a deal about to fall apart, a week that's gotten away from you. This is where learning becomes action — week after week, not once in a blue moon.</p>
              <span class="coaching-card__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </span>
            </div>
          </a>

          <!-- Talk to Tim -->
          <a class="coaching-card" href="/events/">
            <div class="coaching-card__media">
              <div class="video-ph" style="aspect-ratio: auto; width: 100%; height: 100%; border-radius: 0; box-shadow: none; border: none;">
                <img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-talk-to-tim.jpg" alt="" />
              </div>
            </div>
            <div class="coaching-card__body">
              <span class="coaching-card__type">Talk to Tim LIVE</span>
              <h3 class="coaching-card__title">Monthly sessions directly with Tim Braheem.</h3>
              <p class="coaching-card__desc">These go deeper than tactics — into the mindset, the identity, the fear, and the emotional patterns that are actually driving your results. If you've ever wondered why you keep producing at the same level despite knowing what to do, this is the session.</p>
              <span class="coaching-card__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </span>
            </div>
          </a>

          <!-- AI Labs & Workshops -->
          <a class="coaching-card" href="/events/">
            <div class="coaching-card__media">
              <div class="video-ph" style="aspect-ratio: auto; width: 100%; height: 100%; border-radius: 0; box-shadow: none; border: none;">
                <img src="<?php echo TLA_BASE; ?>/assets/what%27s-inside-ai-labs.jpg" alt="" />
              </div>
            </div>
            <div class="coaching-card__body">
              <span class="coaching-card__type">AI Labs &amp; Workshops</span>
              <h3 class="coaching-card__title">Hands-on implementation. Leave with something installed, not just understood.</h3>
              <p class="coaching-card__desc">Planning Intensives, PPC Workshops, AI Bootcamps, Realtor Attraction Challenges. Multi-session structures with worksheets, scripts, and accountability built in.</p>
              <span class="coaching-card__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </span>
            </div>
          </a>

        </div><!-- /coaching-grid -->

        <!-- Testimonial -->
        <figure class="quote-card quote-card--block">
          <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
          <blockquote class="quote-card__quote">Being able to sit in on Office Hours and live group coaching is worth the price of membership itself.</blockquote>
          <figcaption class="quote-card__attr">
            <div class="quote-card__name">Gabe Garza</div>
            <div class="quote-card__org">The Mortgage Brokers</div>
          </figcaption>
        </figure>

      </div>
    </section>

    <!-- ============================================================
         SCRIPTS, PRESENTATIONS & TEMPLATES
         ============================================================ -->
    <section class="section bg-surface-low">
      <div class="container">

        <div data-reveal="up" style="margin-bottom: var(--space-xl);">
          <span class="eyebrow"><span class="eyebrow__text">Scripts, Presentations &amp; Templates</span></span>
          <h2 class="section-heading" style="margin-bottom: var(--space-md);">Stop starting from scratch on every conversation.</h2>
          <p class="t-body-lg t-muted">You've been to the conference, taken the notes, and then sat down on Monday morning with no idea how to actually use any of it. Everything inside The Loan Atlas is built to close that gap. The scripts, the presentations, the templates — they're already done. You install them, make them yours, and run.</p>
        </div>

        <div class="templates-grid" data-reveal-stagger="70">

          <div class="template-item">
            <div class="template-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </div>
            <div>
              <p class="template-item__title">Sales Scripts &amp; Conversation Frameworks</p>
              <p class="template-item__desc">Word-for-word scripts for every high-leverage conversation — discovery calls, objection handling, rate-shopper responses, referral partner meetings.</p>
            </div>
          </div>

          <div class="template-item">
            <div class="template-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
            </div>
            <div>
              <p class="template-item__title">Perfect Loan Process Templates</p>
              <p class="template-item__desc">Every touchpoint in the PLP — baton pass scripts, milestone communication templates, closing scripts, and post-closing follow-up sequences.</p>
            </div>
          </div>

          <div class="template-item">
            <div class="template-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
            </div>
            <div>
              <p class="template-item__title">Realtor &amp; Partner Presentations</p>
              <p class="template-item__desc">Done-for-you presentations — the Bulletproof Buyer, the Real Estate Professional of the Future, the NAR Settlement briefing. Show up prepared, not improvised.</p>
            </div>
          </div>

          <div class="template-item">
            <div class="template-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div>
              <p class="template-item__title">Marketing Templates</p>
              <p class="template-item__desc">Content frameworks, email sequences, and social structures built around what actually builds trust with clients and referral partners.</p>
            </div>
          </div>

          <div class="template-item">
            <div class="template-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <div>
              <p class="template-item__title">Leadership &amp; Team Building Tools</p>
              <p class="template-item__desc">Role definitions, delegation systems, onboarding frameworks. Finally know what each person on your team is supposed to be doing and how to hold them to it.</p>
            </div>
          </div>

          <div class="template-item">
            <div class="template-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            </div>
            <div>
              <p class="template-item__title">Business Planning Tools</p>
              <p class="template-item__desc">Annual planning worksheets, 13-week sprint templates, pipeline trackers. Connect your goals to your calendar so the weeks stop disappearing without production to show for them.</p>
            </div>
          </div>

          <div class="template-item">
            <div class="template-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg>
            </div>
            <div>
              <p class="template-item__title">Mindset &amp; Personal Development Tools</p>
              <p class="template-item__desc">Journaling frameworks, energy management practices, and reframing exercises drawn from Tim Braheem's coaching methodology and Discipline 7.</p>
            </div>
          </div>

          <div class="template-item">
            <div class="template-item__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
            </div>
            <div>
              <p class="template-item__title">AI Prompt Libraries &amp; Workflows</p>
              <p class="template-item__desc">Swipe files, automation frameworks, and proven prompts built specifically for mortgage origination — not repurposed from generic productivity content.</p>
            </div>
          </div>

        </div><!-- /templates-grid -->

        <!-- Testimonial -->
        <figure class="quote-card quote-card--block">
          <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
          <blockquote class="quote-card__quote">I took one of Tim&rsquo;s scripts and executed it with a borrower. We never even talked about interest rates &mdash; and I got a commitment that they wanted to work with us.</blockquote>
          <figcaption class="quote-card__attr">
            <div class="quote-card__name">Loan Atlas Member</div>
          </figcaption>
        </figure>

      </div>
    </section>

    <!-- ============================================================
         THE COMMUNITY — dark section
         ============================================================ -->
    <section class="wi-community section">
      <div class="container" style="position: relative; z-index: 1;">

        <div style="display: grid; gap: var(--space-xl); align-items: center;" class="grid" id="community-grid">
          <div data-reveal="left">
            <span class="eyebrow"><span class="eyebrow__text">A Live Community of Active Producers</span></span>
            <h2 class="t-headline-lg" style="color: var(--on-primary); margin-bottom: var(--space-md);">Instantly grow your network — and stop making every decision in isolation.</h2>
            <p class="t-body-lg" style="color: rgba(255,255,255,0.68); margin-bottom: var(--space-lg);">Most coaching platforms give you content, calls, and tools — and then leave you to figure it out alone. Inside The Loan Atlas community, you're alongside top producers, mid-career operators, newer loan officers, and team leaders all working through the same frameworks in real time.</p>
            <p class="t-body-lg" style="color: rgba(255,255,255,0.68); margin-bottom: var(--space-lg);">Tactical questions get real answers from people who've been in that exact situation. Implementation wins get shared. Difficult weeks get honest conversation instead of polished performance. You stop making every decision in isolation — and you start moving faster because the people around you are moving too.</p>

            <figure class="quote-card quote-card--block quote-card--on-dark">
              <span class="quote-card__mark" aria-hidden="true">&ldquo;</span>
              <blockquote class="quote-card__quote">It&rsquo;s so easy to feel alone in this business. This community of top-tier professionals experiencing the same successes and failures has gone so far in helping me grow my business.</blockquote>
              <figcaption class="quote-card__attr">
                <div class="quote-card__name">Scott DiGregorio</div>
                <div class="quote-card__org">NEO Home Loans</div>
              </figcaption>
            </figure>
          </div>

          <div data-reveal="right">
            <!-- Community member shorts — 2x2 grid of vertical YouTube Shorts -->
            <div class="wi-shorts">
              <div class="wi-short">
                <iframe
                  src="https://www.youtube-nocookie.com/embed/zYkmIPAMqEg?rel=0&modestbranding=1"
                  title="Loan Atlas community member short"
                  loading="lazy"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen></iframe>
              </div>
              <div class="wi-short">
                <iframe
                  src="https://www.youtube-nocookie.com/embed/F_k9DEPencs?rel=0&modestbranding=1"
                  title="Loan Atlas community member short"
                  loading="lazy"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen></iframe>
              </div>
              <div class="wi-short">
                <iframe
                  src="https://www.youtube-nocookie.com/embed/R_QfiRUNdpA?rel=0&modestbranding=1"
                  title="Loan Atlas community member short"
                  loading="lazy"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen></iframe>
              </div>
              <div class="wi-short">
                <iframe
                  src="https://www.youtube-nocookie.com/embed/SpskLjnp-lc?rel=0&modestbranding=1"
                  title="Loan Atlas community member short"
                  loading="lazy"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen></iframe>
              </div>
            </div>
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
            Stop Guessing. <em>Start Running Your Business Like a System.</em>
          </h2>
          <p class="close-section__sub">
            If you're tired of inconsistent months, done starting every week from scratch, and ready to operate
            the way the best originators in this country operate — <strong>this is the system that makes that happen.</strong>
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

  <script>
    /* Community section: two-column on wide screens */
    const grid = document.getElementById('community-grid');
    if (grid && window.matchMedia('(min-width: 960px)').matches) {
      grid.style.gridTemplateColumns = '1fr 1fr';
    }
    window.matchMedia('(min-width: 960px)').addEventListener('change', e => {
      if (grid) grid.style.gridTemplateColumns = e.matches ? '1fr 1fr' : '1fr';
    });
  </script>

  <script>
    /* AI Financial Review showcase — render tool templates, count-up hero metrics, accordion + stage swap */
    (function () {
      document.querySelectorAll('[data-tool]').forEach(function (slot) {
        var key = slot.getAttribute('data-tool');
        var tpl = document.getElementById('tpl-tool-' + key);
        if (!tpl) return;
        slot.appendChild(tpl.content.cloneNode(true));
      });

      document.querySelectorAll('[data-frs-count]').forEach(function (el) {
        var target = Number(el.getAttribute('data-frs-count'));
        var prefix = el.getAttribute('data-frs-prefix') || '';
        var suffix = el.getAttribute('data-frs-suffix') || '';
        var decimals = Number(el.getAttribute('data-frs-decimals') || 0);
        var duration = 1200;
        var startTime = null;

        function format(value) {
          var rounded = decimals ? value.toFixed(decimals) : Math.round(value).toLocaleString('en-US');
          el.textContent = prefix + rounded + suffix;
        }

        format(0);

        requestAnimationFrame(function step(timestamp) {
          if (!startTime) startTime = timestamp;
          var progress = Math.min((timestamp - startTime) / duration, 1);
          var eased = 1 - Math.pow(1 - progress, 3);
          format(target * eased);
          if (progress < 1) requestAnimationFrame(step);
        });
      });

      // Scope to the Financial Review grid only — the Business Planner block reuses
      // .frs-* classes for styling but is driven by its own scoped IIFE below.
      var frsRoot = document.querySelector('.frs-reveal__grid:not(.bpl-reveal__grid)');
      var items = frsRoot ? Array.prototype.slice.call(frsRoot.querySelectorAll('.frs-item')) : [];
      var stagePanels = frsRoot ? Array.prototype.slice.call(frsRoot.querySelectorAll('.frs-stage__panel')) : [];

      function openItem(target) {
        var targetIndex = target.getAttribute('data-frs-item');
        items.forEach(function (item) {
          var isTarget = item === target;
          item.classList.toggle('is-open', isTarget);
          item.querySelector('.frs-item__header').setAttribute('aria-expanded', isTarget ? 'true' : 'false');
        });
        stagePanels.forEach(function (panel) {
          panel.classList.toggle('is-active', panel.getAttribute('data-frs-panel') === targetIndex);
        });
      }

      items.forEach(function (item, idx) {
        var header = item.querySelector('.frs-item__header');
        header.addEventListener('click', function () {
          if (item.classList.contains('is-open')) return;
          openItem(item);
        });
        header.addEventListener('keydown', function (e) {
          if (e.key === 'ArrowDown') {
            e.preventDefault();
            items[(idx + 1) % items.length].querySelector('.frs-item__header').focus();
          } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            items[(idx - 1 + items.length) % items.length].querySelector('.frs-item__header').focus();
          }
        });
      });
    })();
  </script>

  <script>
    /* AI Business & Life Planner showcase — scoped to .bpl-reveal__grid so it never touches the Financial Review block */
    (function () {
      var root = document.querySelector('.bpl-reveal__grid');
      if (!root) return;

      root.querySelectorAll('[data-bpl-tool]').forEach(function (slot) {
        var key = slot.getAttribute('data-bpl-tool');
        var tpl = document.getElementById('tpl-bpl-' + key);
        if (tpl) slot.appendChild(tpl.content.cloneNode(true));
      });

      var items = Array.prototype.slice.call(root.querySelectorAll('.bpl-item'));
      var stagePanels = Array.prototype.slice.call(root.querySelectorAll('.bpl-stage__panel'));

      function openItem(target) {
        var idx = target.getAttribute('data-bpl-item');
        items.forEach(function (item) {
          var isTarget = item === target;
          item.classList.toggle('is-open', isTarget);
          item.querySelector('.bpl-item__header').setAttribute('aria-expanded', isTarget ? 'true' : 'false');
        });
        stagePanels.forEach(function (panel) {
          panel.classList.toggle('is-active', panel.getAttribute('data-bpl-panel') === idx);
        });
      }

      items.forEach(function (item, i) {
        var header = item.querySelector('.bpl-item__header');
        header.addEventListener('click', function () {
          if (item.classList.contains('is-open')) return;
          openItem(item);
        });
        header.addEventListener('keydown', function (e) {
          if (e.key === 'ArrowDown') {
            e.preventDefault();
            items[(i + 1) % items.length].querySelector('.bpl-item__header').focus();
          } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            items[(i - 1 + items.length) % items.length].querySelector('.bpl-item__header').focus();
          }
        });
      });
    })();
  </script>

