<?php
/**
 * Shared site header / navigation for TLA Full HTML pages.
 *
 * Edit nav links HERE once — every page that includes this partial updates.
 *
 * The including page may set $tla_active to one of:
 *   'whats-inside' | 'faculty' | 'pricing' | 'businesses' | 'individuals'
 * to highlight the current item. Unknown/empty = nothing highlighted.
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
        <div class="nav__dropdown<?php echo in_array( $tla_active, array( 'whats-inside', 'faculty' ), true ) ? ' nav__dropdown--active' : ''; ?>">
          <button type="button" class="nav__dropdown-toggle" aria-haspopup="true" aria-expanded="false">
            Platform
            <svg class="nav__dropdown-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="nav__dropdown-menu" role="menu">
            <a class="nav__dropdown-item" href="/whats-inside/" role="menuitem">What's Inside</a>
            <a class="nav__dropdown-item" href="/faculty/" role="menuitem">Faculty</a>
            <a class="nav__dropdown-item" href="https://www.theloanatlas.com/evergreen-ai-tool-planner/" target="_blank" rel="noopener" role="menuitem">AI Business &amp; Life Planner</a>
            <a class="nav__dropdown-item" href="#" role="menuitem">Platinum Marketing</a>
          </div>
        </div>
        <div class="nav__dropdown<?php echo in_array( $tla_active, array( 'join', 'enterprise', 'membership' ), true ) ? ' nav__dropdown--active' : ''; ?>">
          <button type="button" class="nav__dropdown-toggle" aria-haspopup="true" aria-expanded="false">
            Membership
            <svg class="nav__dropdown-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="nav__dropdown-menu" role="menu">
            <a class="nav__dropdown-item" href="/join/" role="menuitem">Pricing</a>
            <a class="nav__dropdown-item" href="/enterprise/" role="menuitem">Corporate Sales</a>
            <a class="nav__dropdown-item" href="/membership/" role="menuitem">Individual Sales</a>
          </div>
        </div>
        <div class="nav__dropdown">
          <button type="button" class="nav__dropdown-toggle" aria-haspopup="true" aria-expanded="false">
            Resources
            <svg class="nav__dropdown-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="nav__dropdown-menu" role="menu">
            <a class="nav__dropdown-item" href="https://go.theloanatlas.com/perfect-loan-process" target="_blank" rel="noopener" role="menuitem">Perfect Loan Process</a>
            <a class="nav__dropdown-item" href="https://go.theloanatlas.com/5-essential-scripts" target="_blank" rel="noopener" role="menuitem">Success Scripts</a>
            <a class="nav__dropdown-item" href="https://go.theloanatlas.com/refinance-masterplan" target="_blank" rel="noopener" role="menuitem">Refinance Masterplan</a>
            <a class="nav__dropdown-item" href="https://go.theloanatlas.com/ai-empowered-originator-masterplan" target="_blank" rel="noopener" role="menuitem">AI-Empowered Originator Masterplan</a>
            <a class="nav__dropdown-item" href="https://www.theloanatlas.com/blog/" target="_blank" rel="noopener" role="menuitem">Blog</a>
            <a class="nav__dropdown-item" href="https://www.theloanatlas.com/podcast-revamp/" target="_blank" rel="noopener" role="menuitem">The 360 Experience</a>
          </div>
        </div>
      </nav>
      <div class="site-header__actions">
        <a class="site-header__login" href="#">Login</a>
        <button class="nav-toggle" aria-label="Open navigation" aria-expanded="false" aria-controls="mobile-nav">
          <span class="nav-toggle__line"></span>
          <span class="nav-toggle__line"></span>
          <span class="nav-toggle__line"></span>
        </button>
        <a class="btn btn--primary btn--header" href="/join/"><span class="btn__short">Join Atlas</span><span class="btn__full">Join The Loan Atlas</span></a>
      </div>
    </div>
    <div class="mobile-nav" id="mobile-nav">
      <p class="mobile-nav__group-label">Platform</p>
      <a class="mobile-nav__link mobile-nav__sublink<?php echo $tla_is( 'whats-inside' ); ?>" href="/whats-inside/">What's Inside</a>
      <a class="mobile-nav__link mobile-nav__sublink<?php echo $tla_is( 'faculty' ); ?>" href="/faculty/">Faculty</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://www.theloanatlas.com/evergreen-ai-tool-planner/" target="_blank" rel="noopener">AI Business &amp; Life Planner</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="#">Platinum Marketing</a>
      <p class="mobile-nav__group-label">Membership</p>
      <a class="mobile-nav__link mobile-nav__sublink<?php echo $tla_is( 'join' ); ?>" href="/join/">Pricing</a>
      <a class="mobile-nav__link mobile-nav__sublink<?php echo $tla_is( 'enterprise' ); ?>" href="/enterprise/">Corporate Sales</a>
      <a class="mobile-nav__link mobile-nav__sublink<?php echo $tla_is( 'membership' ); ?>" href="/membership/">Individual Sales</a>
      <p class="mobile-nav__group-label">Resources</p>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://go.theloanatlas.com/perfect-loan-process" target="_blank" rel="noopener">Perfect Loan Process</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://go.theloanatlas.com/5-essential-scripts" target="_blank" rel="noopener">Success Scripts</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://go.theloanatlas.com/refinance-masterplan" target="_blank" rel="noopener">Refinance Masterplan</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://go.theloanatlas.com/ai-empowered-originator-masterplan" target="_blank" rel="noopener">AI-Empowered Originator Masterplan</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://www.theloanatlas.com/blog/" target="_blank" rel="noopener">Blog</a>
      <a class="mobile-nav__link mobile-nav__sublink" href="https://www.theloanatlas.com/podcast-revamp/" target="_blank" rel="noopener">The 360 Experience</a>
      <a class="mobile-nav__link" href="#">Login</a>
      <a class="btn btn--primary btn--header mobile-nav__cta" href="/join/">Join The Loan Atlas</a>
    </div>
  </header>
