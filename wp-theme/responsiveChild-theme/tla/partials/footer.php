<?php
/**
 * Shared site footer for TLA Full HTML pages.
 * Edit footer links HERE once — every page that includes this updates.
 * Requires TLA_BASE to be defined (the template defines it).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
  <!-- Shared site footer -->
  <footer class="site-footer">
    <div class="site-footer__inner">
      <div class="site-footer__top">
        <a href="/" class="brand">
          <img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-color.png" alt="The Loan Atlas" class="brand__logo" />
        </a>
        <nav class="site-footer__links" aria-label="Footer">
          <a class="site-footer__link" href="/whats-inside/">Loan Originators</a>
          <a class="site-footer__link" href="/enterprise/">Enterprise</a>
          <a class="site-footer__link" href="/join/">Pricing</a>
          <a class="site-footer__link" href="/consultation/">Book Your Coaching Session</a>
        </nav>
      </div>
      <div class="site-footer__bottom">
        <p>© 2026 The Loan Atlas. Guiding Originators to Peak Performance.</p>
        <nav class="site-footer__links">
          <a class="site-footer__link" href="#">Privacy Policy</a>
          <a class="site-footer__link" href="#">Terms of Service</a>
          <a class="site-footer__link" href="#">Accessibility</a>
          <a class="site-footer__link" href="#">Contact</a>
        </nav>
      </div>
    </div>
  </footer>
