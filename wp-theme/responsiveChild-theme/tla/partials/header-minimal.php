<?php
/**
 * Minimal landing-page header for TLA Full HTML pages.
 *
 * Logo only — no nav, buttons, login, or mobile menu. Used on conversion
 * landing pages (e.g. the Mastermind page) via the <!-- TLA_HEADER_MINIMAL -->
 * sentinel in the source HTML, so visitors have no off-ramp off the page.
 *
 * Requires TLA_BASE to be defined (the template defines it).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
  <!-- Minimal landing-page header (logo only) -->
  <header class="site-header site-header--minimal">
    <div class="site-header__inner">
      <span class="brand" aria-label="The Loan Atlas">
        <img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-gold.png" alt="The Loan Atlas" class="brand__logo" />
      </span>
    </div>
  </header>
