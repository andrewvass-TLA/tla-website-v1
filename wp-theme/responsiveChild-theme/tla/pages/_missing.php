<?php
/**
 * Fallback body when a page uses the "TLA Full HTML" template but no matching
 * tla/pages/<slug>.php partial exists. Shown with a 404 status.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title = 'Page not found — The Loan Atlas';
?>
<main style="min-height:60vh;display:flex;align-items:center;justify-content:center;font-family:Inter,system-ui,sans-serif;text-align:center;padding:2rem;">
  <div>
    <h1 style="font-family:Manrope,sans-serif;color:#021c36;">This page isn’t ready yet</h1>
    <p style="color:#475569;">No content partial was found for this URL. <a href="/" style="color:#c9961c;">Return home</a>.</p>
  </div>
</main>
