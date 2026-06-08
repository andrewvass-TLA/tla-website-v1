<?php
/*
 * Template Name: TLA Full HTML
 *
 * Renders a hand-coded Loan Atlas marketing page as a complete, standalone
 * HTML document with NO parent-theme header/footer/sidebar. The page body
 * lives in tla/pages/<slug>.php, selected by the WordPress page slug.
 *
 * Shared CSS/JS/images live under tla/ in this child theme and are referenced
 * via TLA_BASE so paths resolve no matter what URL the page is published at.
 *
 * A partial sets $tla_title / $tla_description at the very top (plain PHP,
 * before any markup), then prints its body. We capture the body with output
 * buffering so the head vars are available before we render <head>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Absolute URL to the tla/ asset root, e.g.
// https://www.theloanatlas.com/wp-content/themes/responsiveChild-theme/tla
if ( ! defined( 'TLA_BASE' ) ) {
	define( 'TLA_BASE', get_stylesheet_directory_uri() . '/tla' );
}

// Resolve the body partial from the page slug.
$tla_slug    = get_post_field( 'post_name', get_queried_object_id() );
$tla_partial = get_stylesheet_directory() . '/tla/pages/' . $tla_slug . '.php';

if ( ! file_exists( $tla_partial ) ) {
	status_header( 404 );
	$tla_partial = get_stylesheet_directory() . '/tla/pages/_missing.php';
}

// Include once: capture the body markup, and let the partial set head vars.
$tla_title       = '';
$tla_description = '';
$tla_image       = ''; // optional per-page social card; falls back to the shared default
ob_start();
include $tla_partial;
$tla_body = ob_get_clean();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<?php
  // Resolve social-card fields with sensible site-wide fallbacks.
  $tla_og_title = $tla_title ? $tla_title : wp_get_document_title();
  $tla_og_image = ! empty( $tla_image )
    ? $tla_image
    : TLA_BASE . '/assets/tla-og-card.png'; // shared default card (1200x630)
  $tla_og_url   = get_permalink( get_queried_object_id() );
  if ( ! $tla_og_url ) { $tla_og_url = home_url( '/' ); } // fallback (e.g. 404)
?>
  <title><?php echo esc_html( $tla_og_title ); ?></title>
<?php if ( $tla_description ) : ?>
  <meta name="description" content="<?php echo esc_attr( $tla_description ); ?>" />
<?php endif; ?>

  <!-- Open Graph / Facebook / LinkedIn / iMessage / Slack -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo esc_url( $tla_og_url ); ?>" />
  <meta property="og:title" content="<?php echo esc_attr( $tla_og_title ); ?>" />
<?php if ( $tla_description ) : ?>
  <meta property="og:description" content="<?php echo esc_attr( $tla_description ); ?>" />
<?php endif; ?>
  <meta property="og:image" content="<?php echo esc_url( $tla_og_image ); ?>" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:site_name" content="The Loan Atlas" />

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo esc_attr( $tla_og_title ); ?>" />
<?php if ( $tla_description ) : ?>
  <meta name="twitter:description" content="<?php echo esc_attr( $tla_description ); ?>" />
<?php endif; ?>
  <meta name="twitter:image" content="<?php echo esc_url( $tla_og_image ); ?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=Antonio:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo esc_url( TLA_BASE ); ?>/css/styles.css?v=3" />
  <link rel="stylesheet" href="<?php echo esc_url( TLA_BASE ); ?>/css/chrome.css?v=3" />
<?php wp_head(); // lets SEO / analytics plugins inject into <head> ?>
</head>

<body <?php body_class(); ?>>
<?php echo $tla_body; // already-built page markup ?>

  <script src="<?php echo esc_url( TLA_BASE ); ?>/js/nav.js"></script>
  <script src="<?php echo esc_url( TLA_BASE ); ?>/js/animations.js" defer></script>
<?php wp_footer(); // lets plugins inject before </body> ?>
</body>

</html>
