<?php
/**
 * Body partial for /contact/ (TLA Full HTML template).
 * Generated from public/contact.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Contact Us — The Loan Atlas';
$tla_description = 'Get in touch with The Loan Atlas. Send us a message and our team will get back to you — or book a free coaching session.';
$tla_active      = '';
?>
  <style>
    /* ── Contact: two-panel card (form left, info panel right) ── */
    .contact-shell {
      display: grid;
      grid-template-columns: 1.35fr 0.85fr;
      background: var(--surface-container-lowest);
      border: 1px solid var(--outline-variant);
      border-radius: var(--radius-3xl);
      box-shadow: var(--shadow-xl);
      overflow: hidden;
    }

    @media (max-width: 860px) {
      .contact-shell {
        grid-template-columns: 1fr;
      }
    }

    /* left: form */
    .contact-form-panel {
      padding: clamp(28px, 4vw, 48px);
    }

    .contact-form-panel__intro {
      margin-bottom: var(--space-md);
    }

    .contact-form-panel__iframe {
      display: block;
      width: 100%;
      min-height: 620px;
      border: none;
      overflow: hidden;
    }

    /* right: navy info panel */
    .contact-info-panel {
      position: relative;
      overflow: hidden;
      background: linear-gradient(160deg, #021c36 0%, #0a1628 55%, #060e1c 100%);
      color: var(--on-primary);
      padding: clamp(32px, 4vw, 48px);
      display: flex;
      flex-direction: column;
      gap: var(--space-lg);
    }

    /* soft brass glow accent in the panel */
    .contact-info-panel::before {
      content: '';
      position: absolute;
      top: -90px;
      right: -60px;
      width: 320px;
      height: 320px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.16), transparent);
      filter: blur(50px);
      pointer-events: none;
    }

    .contact-info-panel>* {
      position: relative;
      z-index: 1;
    }

    .contact-info-panel__heading {
      color: var(--on-primary);
    }

    .contact-info-panel__lead {
      color: rgba(255, 255, 255, 0.72);
      margin: 6px 0 0;
    }

    .contact-info-item {
      display: flex;
      align-items: center;
      gap: var(--space-sm);
    }

    .contact-info-item__icon {
      flex-shrink: 0;
      display: grid;
      place-items: center;
      width: 44px;
      height: 44px;
      border-radius: var(--radius-lg, 0.75rem);
      color: var(--primary);
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      box-shadow: 0 6px 18px rgba(201, 150, 28, 0.28);
    }

    .contact-info-item__icon svg {
      width: 20px;
      height: 20px;
    }

    .contact-info-item__label {
      display: block;
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--brass-bright, #eac25a);
      margin-bottom: 2px;
    }

    .contact-info-item__value {
      font-family: var(--font-display);
      font-size: 1.0625rem;
      font-weight: 600;
      color: #fff;
      text-decoration: none;
      word-break: break-word;
    }

    .contact-info-item__value:hover {
      color: var(--brass-bright, #eac25a);
    }

    .contact-info-panel__divider {
      height: 1px;
      background: rgba(255, 255, 255, 0.12);
      margin: var(--space-xs) 0;
    }

    .contact-info-panel__social-label {
      display: block;
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--brass-bright, #eac25a);
      margin-bottom: var(--space-sm);
    }

    .contact-social {
      display: flex;
      gap: var(--space-sm);
    }

    .contact-social__link {
      display: grid;
      place-items: center;
      width: 42px;
      height: 42px;
      border-radius: var(--radius-full);
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(234, 194, 90, 0.3);
      color: rgba(255, 255, 255, 0.85);
      transition: color 180ms ease, border-color 180ms ease, background 180ms ease, transform 180ms ease;
    }

    .contact-social__link:hover {
      color: var(--primary);
      border-color: transparent;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      transform: translateY(-2px);
    }

    .contact-social__link svg {
      width: 19px;
      height: 19px;
    }

    /* bottom of panel: closing-CTA treatment (mirrors .close-section-action) */
    .contact-info-panel__cta {
      margin-top: auto;
    }

    .contact-info-panel__cta-eyebrow {
      display: block;
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--brass-bright, #eac25a);
      margin-bottom: var(--space-xs);
    }

    .contact-info-panel__cta-title {
      font-family: var(--font-display);
      font-size: clamp(1.375rem, 1.2rem + 0.8vw, 1.75rem);
      line-height: 1.1;
      letter-spacing: -0.02em;
      font-weight: 800;
      color: #fff;
      margin: 0 0 var(--space-md);
    }

    .contact-info-panel__cta-title em {
      font-style: normal;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .contact-cta-action {
      position: relative;
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: var(--space-md);
      padding: clamp(18px, 2vw, 24px) clamp(20px, 2.4vw, 28px);
      border-radius: var(--radius-2xl);
      text-decoration: none;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      color: var(--primary);
      box-shadow:
        0 14px 40px rgba(201, 150, 28, 0.35),
        inset 0 1px 0 rgba(255, 255, 255, 0.45);
      transition: transform 160ms ease, box-shadow 200ms ease, background 200ms ease;
    }

    .contact-cta-action:hover {
      transform: translateY(-2px);
      background: linear-gradient(135deg, #b3841a 0%, #d6ae47 50%, #f6c95c 100%);
      box-shadow:
        0 18px 50px rgba(201, 150, 28, 0.45),
        inset 0 1px 0 rgba(255, 255, 255, 0.5);
    }

    .contact-cta-action__label {
      font-family: var(--font-display);
      font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);
      font-weight: 700;
      letter-spacing: -0.01em;
      line-height: 1.2;
    }

    .contact-cta-action__hint {
      display: block;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 500;
      line-height: 1.5;
      margin-top: 6px;
      opacity: 0.78;
    }

    .contact-cta-action__arrow {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      flex-shrink: 0;
      background: rgba(2, 28, 54, 0.12);
      color: var(--primary);
      transition: transform 200ms ease;
    }

    .contact-cta-action__arrow svg {
      width: 18px;
      height: 18px;
    }

    .contact-cta-action:hover .contact-cta-action__arrow {
      transform: translateX(4px);
    }
  </style>


  <?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main">

    <!-- ── Contact ── -->
    <section class="section">
      <div class="container">

        <div class="contact-shell">

          <!-- Left: form -->
          <div class="contact-form-panel">
            <div class="contact-form-panel__intro">
              <span class="eyebrow"><span class="eyebrow__text">Have A Question?</span></span>
              <h1 class="t-display" style="margin-top: var(--space-sm);">Get In Touch</h1>
              <p class="t-body-lg t-muted" style="margin-top: var(--space-sm);">
                Questions about membership, coaching, or working with The Loan Atlas? Send us a message and our team
                will get back to you — typically within one business day.
              </p>
            </div>
            <iframe src="https://api.leadconnectorhq.com/widget/form/E4wA5ElJqvqxUwrRSSnh"
              class="contact-form-panel__iframe" style="width:100%;height:100%;border:none;border-radius:4px"
              id="inline-E4wA5ElJqvqxUwrRSSnh" data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow"
              data-trigger-value="" data-activation-type="alwaysActivated" data-activation-value=""
              data-deactivation-type="neverDeactivate" data-deactivation-value=""
              data-form-name="05. Website Contact Form" data-height="undefined"
              data-layout-iframe-id="inline-E4wA5ElJqvqxUwrRSSnh" data-form-id="E4wA5ElJqvqxUwrRSSnh"
              title="05. Website Contact Form"></iframe>
          </div>

          <!-- Right: navy info panel -->
          <aside class="contact-info-panel">
            <div>
              <h2 class="t-headline-md contact-info-panel__heading">Reach Us Directly</h2>
              <p class="t-body contact-info-panel__lead">Prefer email or social? Here's where to find us.</p>
            </div>

            <div class="contact-info-item">
              <span class="contact-info-item__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect x="2" y="4" width="20" height="16" rx="2" />
                  <path d="m22 7-10 6L2 7" />
                </svg>
              </span>
              <span>
                <span class="contact-info-item__label">Email Us</span>
                <a class="contact-info-item__value"
                  href="mailto:clientcare@theloanatlas.com">clientcare@theloanatlas.com</a>
              </span>
            </div>

            <div class="contact-info-panel__divider"></div>

            <div>
              <span class="contact-info-panel__social-label">Follow Along</span>
              <nav class="contact-social" aria-label="The Loan Atlas on social media">
                <a class="contact-social__link" href="https://www.youtube.com/@LoanAtlas" target="_blank" rel="noopener"
                  aria-label="YouTube">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path
                      d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31.3 31.3 0 0 0 0 12a31.3 31.3 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31.3 31.3 0 0 0 24 12a31.3 31.3 0 0 0-.5-5.8zM9.6 15.6V8.4l6.2 3.6-6.2 3.6z" />
                  </svg>
                </a>
                <a class="contact-social__link" href="https://www.linkedin.com/company/theloanatlas/" target="_blank"
                  rel="noopener" aria-label="LinkedIn">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path
                      d="M20.45 20.45h-3.55v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.55V9h3.57v11.45zM22.22 0H1.77C.8 0 0 .78 0 1.74v20.52C0 23.22.8 24 1.77 24h20.45c.98 0 1.78-.78 1.78-1.74V1.74C24 .78 23.2 0 22.22 0z" />
                  </svg>
                </a>
                <a class="contact-social__link" href="https://www.instagram.com/theloanatlas/" target="_blank"
                  rel="noopener" aria-label="Instagram">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path
                      d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.7 3.7 0 0 1-1.38-.9 3.7 3.7 0 0 1-.9-1.38c-.16-.42-.36-1.06-.41-2.23-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63a5.86 5.86 0 0 0-2.13 1.38A5.86 5.86 0 0 0 .63 4.14C.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.72 1.46 1.38 2.13.67.66 1.34 1.07 2.13 1.38.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56a5.86 5.86 0 0 0 2.13-1.38 5.86 5.86 0 0 0 1.38-2.13c.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91a5.86 5.86 0 0 0-1.38-2.13A5.86 5.86 0 0 0 19.86.63c-.76-.3-1.64-.5-2.91-.56C15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.41-10.85a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z" />
                  </svg>
                </a>
                <a class="contact-social__link" href="https://www.facebook.com/theloanatlas" target="_blank"
                  rel="noopener" aria-label="Facebook">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path
                      d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07c0 6.02 4.39 11.01 10.13 11.93v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.69.24 2.69.24v2.97h-1.52c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.08 24 18.09 24 12.07z" />
                  </svg>
                </a>
              </nav>
            </div>

            <div class="contact-info-panel__cta">
              <div class="contact-info-panel__divider" style="margin-bottom: var(--space-lg);"></div>
              <span class="contact-info-panel__cta-eyebrow">Prefer to Speak With Someone?</span>
              <h3 class="contact-info-panel__cta-title">Book a Free <em>Coaching Session</em></h3>
              <a class="contact-cta-action" href="/consultation/">
                <span>
                  <span class="contact-cta-action__label">Book Your Coaching Session</span>
                  <span class="contact-cta-action__hint">60 minutes · No cost · No obligation</span>
                </span>
                <span class="contact-cta-action__arrow" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <polyline points="13 6 19 12 13 18" />
                  </svg>
                </span>
              </a>
            </div>
          </aside>

        </div>
      </div>
    </section>

  </main>

  <?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script src="https://link.msgsndr.com/js/form_embed.js"></script>
