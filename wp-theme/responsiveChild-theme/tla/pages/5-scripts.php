<?php
/**
 * Body partial for /5-scripts/ (TLA Full HTML template).
 * Generated from public/5-scripts.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = '5 Essential Scripts for Dominating the Point of Sale | Free Download from The Loan Atlas';
$tla_description = 'Free word-for-word scripts for the 5 objections that kill mortgage deals at the point of sale — rate shopping, rate-drop fear, market timing, the stall, and Rocket/Zillow — plus the coaching notes that make them work.';
$tla_active      = '';
?>

<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main s5">

    <!-- ───────────────────────── HERO ───────────────────────── -->
    <section class="s5-hero" aria-labelledby="s5-hero-heading">
      <div class="s5-hero__bg" aria-hidden="true"></div>
      <div class="container s5-hero__grid">

        <!-- Left: the pitch -->
        <div class="s5-hero__copy">
          <span class="s5-eyebrow">Free Download · For Loan Officers</span>
          <h1 id="s5-hero-heading" class="s5-hero__title">
            The 5 Essential Scripts for <span class="s5-grad">Dominating the Point of Sale</span>
          </h1>
          <p class="s5-hero__sub">
            You can keep getting thrown off at the point of sale. Or you can get intentional about
            it. Every fumbled objection is <strong>a deal that didn't have to die</strong> — these
            free scripts make sure you're never caught flat-footed again.
          </p>

          <div class="s5-hero__actions">
            <a class="btn btn--gold btn--lg" href="#get-the-scripts" data-scroll-to-form>Get the free scripts</a>
          </div>
          <p class="s5-hero__trust">
            Instant access · No cost · Word-for-word scripts with coaching notes.
          </p>
        </div>

        <!-- Right: hero imagery — loan officer meeting a client, with the 5
             objections floating over the photo as call-out cards. -->
        <div class="s5-hero__stage" aria-label="The 5 objections answered inside the scripts">
          <div class="s5-hero__glow" aria-hidden="true"></div>
          <img class="s5-hero__photo" src="<?php echo TLA_BASE; ?>/assets/5-scripts-hero.png"
            alt="A loan officer on the phone with a client" loading="eager"
            width="720" height="540" />

          <ul class="s5-hero__cards">
            <li class="s5-hero__card">
              <span class="s5-hero__card-q" aria-hidden="true">“</span>
              Can you beat my credit union?
            </li>
            <li class="s5-hero__card">
              <span class="s5-hero__card-q" aria-hidden="true">“</span>
              What if rates drop right after we lock?
            </li>
            <li class="s5-hero__card">
              <span class="s5-hero__card-q" aria-hidden="true">“</span>
              Is now even the right time?
            </li>
            <li class="s5-hero__card">
              <span class="s5-hero__card-q" aria-hidden="true">“</span>
              Can I think about it and get back to you?
            </li>
            <li class="s5-hero__card">
              <span class="s5-hero__card-q" aria-hidden="true">“</span>
              How are you different from Rocket?
            </li>
          </ul>
        </div>

      </div>
    </section>

    <!-- ──────────── FULL-WIDTH LEAD-CAPTURE BAND ──────────── -->
    <div class="s5-formband">
      <div class="container">
        <div class="s5-formcard" id="get-the-scripts">
          <div class="s5-formcard__intro">
            <span class="s5-formcard__badge">Instant access · Free</span>
            <h2 class="s5-formcard__title">Get the 5 scripts — free</h2>
            <p class="s5-formcard__sub">
              Fill out the form and we'll send the complete scripts instantly — word-for-word
              messaging plus the coaching notes that make them work.
            </p>
            <ul class="s5-formcard__points">
              <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> Delivered instantly</li>
              <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> Word-for-word scripts</li>
              <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> Coaching notes included</li>
            </ul>
          </div>

          <div class="s5-formcard__formwrap">
            <!--
              ───────────────────────────────────────────────────────────────
              LEAD-CAPTURE FORM — LeadConnector (GoHighLevel) embed.
              TODO: replace PLACEHOLDER_FORM_ID below with the real form/survey
              widget ID from LeadConnector (same platform as the booking iframes
              on consultation.html and the form on ai-originator-masterplan.html). The
              form_embed.js include is at the bottom of this file. Until the real
              ID is in, this renders a GHL "form not found" frame — that is expected.
              ───────────────────────────────────────────────────────────────
            -->
            <div class="s5-formcard__embed">
              <iframe
                src="https://api.leadconnectorhq.com/widget/form/PLACEHOLDER_FORM_ID"
                class="s5-formcard__iframe"
                title="Get the 5 Essential Scripts for Dominating the Point of Sale"
                scrolling="no"
                id="s5-leadform"></iframe>
            </div>
            <p class="s5-formcard__fineprint">No spam. We respect your inbox — unsubscribe anytime.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ──────────────────── WHAT'S INSIDE ──────────────────── -->
    <section class="s5-scripts" aria-labelledby="s5-scripts-heading">
      <div class="container">
        <header class="s5-secthead" data-reveal="up">
          <span class="s5-eyebrow s5-eyebrow--brass">What's Inside</span>
          <h2 id="s5-scripts-heading" class="s5-secthead__title">
            The 5 objections that kill deals — <span class="s5-grad">answered</span>.
          </h2>
          <p class="s5-secthead__sub">
            Clear, calm, confident responses to the moments that decide loans at the point of
            sale — each with coaching notes that break down why the move works.
          </p>
        </header>

        <div class="s5-scriptgrid" data-reveal="up">
          <article class="s5-script">
            <span class="s5-script__num">01</span>
            <h3 class="s5-script__q">“What rate can you offer? Can you beat my credit union?”</h3>
            <p class="s5-script__a">Reclaim control before the conversation turns into a race to the bottom.</p>
          </article>

          <article class="s5-script">
            <span class="s5-script__num">02</span>
            <h3 class="s5-script__q">“What if rates go down right after we lock?”</h3>
            <p class="s5-script__a">Turn rate anxiety into a trust-building moment — without overpromising.</p>
          </article>

          <article class="s5-script">
            <span class="s5-script__num">03</span>
            <h3 class="s5-script__q">“I don't know if now is the right time with the market.”</h3>
            <p class="s5-script__a">Move them from market timing to personal clarity — and a clear next step.</p>
          </article>

          <article class="s5-script">
            <span class="s5-script__num">04</span>
            <h3 class="s5-script__q">“Can I think about it and get back to you?”</h3>
            <p class="s5-script__a">Unpack the hesitation, restore confidence, and keep the deal alive.</p>
          </article>

          <article class="s5-script">
            <span class="s5-script__num">05</span>
            <h3 class="s5-script__q">“How are you different from Rocket or Zillow?”</h3>
            <p class="s5-script__a">Earn the right to differentiate before you answer — so it actually lands.</p>
          </article>

          <article class="s5-script s5-script--cta">
            <span class="s5-script__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M12 19V5" /><polyline points="5 12 12 5 19 12" /></svg>
            </span>
            <h3 class="s5-script__q">All five, free.</h3>
            <p class="s5-script__a">Word-for-word scripts plus coaching notes, delivered to your inbox in seconds.</p>
            <a class="s5-script__link" href="#get-the-scripts" data-scroll-to-form>Get the free scripts →</a>
          </article>
        </div>
      </div>
    </section>

    <!-- ──────────────────── WHY IT MATTERS ──────────────────── -->
    <section class="s5-why" aria-labelledby="s5-why-heading">
      <div class="container s5-why__inner" data-reveal="up">
        <span class="s5-eyebrow s5-eyebrow--brass">Why This Matters</span>
        <p class="s5-why__lead">
          Most loan officers are reacting to their clients in real time. A borrower pushes back on
          the rate. Someone says they want to wait. Another one compares you to Rocket. And in that
          split second — without a plan — whatever comes out is whatever comes out.
        </p>
        <p class="s5-why__lead">
          Getting intentional means having the right language <em>before</em> you need it.
        </p>
        <blockquote id="s5-why-heading" class="s5-why__quote">
          The worst time to think about what you're going to say is the moment you need to say it.
        </blockquote>
        <a class="btn btn--gold btn--lg" href="#get-the-scripts" data-scroll-to-form>Get the free scripts</a>
      </div>
    </section>

    <!-- ──────────── THE LOAN ATLAS — FLOATING PITCH CALLOUT ──────────── -->
    <section class="s5-pitch-outer" aria-labelledby="s5-pitch-heading">
      <div class="container">
        <div class="s5-pitchcard" data-reveal="up">
          <div class="s5-pitchcard__body">
            <span class="s5-pitchcard__eyebrow">From The Loan Atlas</span>
            <h2 id="s5-pitch-heading" class="s5-pitchcard__title">
              These scripts are a taste of what <span class="s5-grad">The Loan Atlas</span> builds with you.
            </h2>
            <p class="s5-pitchcard__lead">
              Winning at the point of sale isn't one set of scripts — it's a system. The Loan Atlas
              gives you the AI sales coach, live training, and community that sharpen every
              conversation that decides a loan, deal after deal.
            </p>

            <ul class="s5-pitchcard__feats">
              <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> An AI sales &amp; scripting coach trained on your niche</li>
              <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> Live weekly coaching &amp; masterclasses</li>
              <li><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg> A private community of top originators</li>
            </ul>

            <div class="s5-pitchcard__actions" role="group" aria-label="Get started">
              <a class="btn btn--gold btn--lg" href="#get-the-scripts" data-scroll-to-form>Get the free scripts</a>
              <a class="s5-pitchcard__textlink" href="/membership/">or explore The Loan Atlas →</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <!-- LeadConnector form embed runtime (resizes the iframe form) -->
  <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
  <!-- Smooth-scroll every CTA down/up to the lead-capture form -->
  <script>
    document.querySelectorAll('[data-scroll-to-form]').forEach(function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        var target = document.getElementById('get-the-scripts');
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'center' });
      });
    });
  </script>
