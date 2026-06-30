<?php
/**
 * Shared site header / navigation for TLA Full HTML pages.
 *
 * Edit nav links HERE once — every page that includes this partial updates.
 *
 * The including page may set $tla_active to one of:
 *   'whats-inside' | 'enterprise' | 'faculty' | 'events' | 'join'
 * to highlight the matching top-level nav link. Unknown/empty = nothing highlighted.
 *
 * Requires TLA_BASE to be defined (the template defines it).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_active = isset( $tla_active ) ? $tla_active : '';

// Helper: emit the active class when $key matches the current page.
$tla_is = function ( $key ) use ( $tla_active ) {
	return $tla_active === $key ? ' mobile-nav__link--active' : '';
};
?>
  <!-- Shared site header -->
  <header class="site-header">
    <div class="site-header__inner">
      <a href="/" class="brand" aria-label="The Loan Atlas — home">
        <img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-gold.png" alt="The Loan Atlas" class="brand__logo" />
      </a>
      <nav class="nav" aria-label="Primary">
        <a class="nav__link<?php echo $tla_active === 'whats-inside' ? ' nav__link--active' : ''; ?>" href="/whats-inside/">Loan Originators</a>
        <a class="nav__link<?php echo $tla_active === 'enterprise' ? ' nav__link--active' : ''; ?>" href="/enterprise/">Enterprise</a>
        <a class="nav__link<?php echo $tla_active === 'faculty' ? ' nav__link--active' : ''; ?>" href="/faculty/">Faculty</a>
        <a class="nav__link<?php echo $tla_active === 'events' ? ' nav__link--active' : ''; ?>" href="/live-events/">Live Events</a>
        <a class="nav__link<?php echo $tla_active === 'join' ? ' nav__link--active' : ''; ?>" href="/join/">Pricing</a>
        <div class="nav__dropdown">
          <button type="button" class="nav__dropdown-toggle" aria-haspopup="true" aria-expanded="false">
            Resources
            <svg class="nav__dropdown-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="nav__dropdown-menu" role="menu">
            <a class="nav__dropdown-item" href="https://www.theloanatlas.com/blog/" role="menuitem">Blog</a>
            <a class="nav__dropdown-item" href="https://go.theloanatlas.com/perfect-loan-process" target="_blank" rel="noopener" role="menuitem">Perfect Loan Process</a>
            <a class="nav__dropdown-item" href="https://www.theloanatlas.com/5-scripts-for-dominating-point-of-sale/" role="menuitem">Sales Scripts</a>
            <a class="nav__dropdown-item" href="https://go.theloanatlas.com/refinance-masterplan" target="_blank" rel="noopener" role="menuitem">Refinance Masterplan</a>
            <a class="nav__dropdown-item" href="https://www.theloanatlas.com/ai-originator-masterplan/" role="menuitem">AI-Empowered Originator Masterplan</a>
            <a class="nav__dropdown-item" href="https://www.theloanatlas.com/podcast-revamp/" target="_blank" rel="noopener" role="menuitem">The 360 Experience</a>
            <a class="nav__dropdown-item" href="/contact/" role="menuitem">Contact Us</a>
          </div>
        </div>
      </nav>
      <div class="site-header__actions">
        <a class="site-header__login" href="https://members.theloanatlas.com/login/">Login</a>
        <button class="nav-toggle" aria-label="Open navigation" aria-expanded="false" aria-controls="mobile-nav">
          <span class="nav-toggle__line"></span>
          <span class="nav-toggle__line"></span>
          <span class="nav-toggle__line"></span>
        </button>
        <a class="btn btn--primary btn--header" href="/join/"><span class="btn__short">Join Atlas</span><span class="btn__full">Join The Loan Atlas</span></a>
      </div>
    </div>
    <div class="mobile-nav" id="mobile-nav">
      <a class="mobile-nav__link<?php echo $tla_is( 'whats-inside' ); ?>" href="/whats-inside/">Loan Originators</a>
      <a class="mobile-nav__link<?php echo $tla_is( 'enterprise' ); ?>" href="/enterprise/">Enterprise</a>
      <a class="mobile-nav__link<?php echo $tla_is( 'faculty' ); ?>" href="/faculty/">Faculty</a>
      <a class="mobile-nav__link<?php echo $tla_is( 'events' ); ?>" href="/live-events/">Live Events</a>
      <a class="mobile-nav__link<?php echo $tla_is( 'join' ); ?>" href="/join/">Pricing</a>
      <p class="mobile-nav__group-label">Resources</p>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://www.theloanatlas.com/blog/">Blog</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://go.theloanatlas.com/perfect-loan-process" target="_blank" rel="noopener">Perfect Loan Process</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://www.theloanatlas.com/5-scripts-for-dominating-point-of-sale/">Sales Scripts</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://go.theloanatlas.com/refinance-masterplan" target="_blank" rel="noopener">Refinance Masterplan</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://www.theloanatlas.com/ai-originator-masterplan/">AI-Empowered Originator Masterplan</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://www.theloanatlas.com/podcast-revamp/" target="_blank" rel="noopener">The 360 Experience</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="/contact/">Contact Us</a>
      <a class="mobile-nav__link" href="https://members.theloanatlas.com/login/">Login</a>
      <a class="btn btn--primary btn--header mobile-nav__cta" href="/join/">Join The Loan Atlas</a>
    </div>
  </header>
