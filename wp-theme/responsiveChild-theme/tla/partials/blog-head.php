<?php
/**
 * Shared <head> + opening <body> + site header for BLOG templates
 * (home.php, single.php, archive.php). Mirrors the head of
 * tla-fullhtml-template.php but for posts/archives that go through the
 * normal WP hierarchy.
 *
 * Loads styles.css + chrome.css + blog.css. The parent-theme/Elementor CSS
 * is dequeued for blog views in functions.php (tla_is_blog_view), so these
 * pages render standalone exactly like the marketing pages.
 *
 * The including template may set, BEFORE including this file:
 *   $tla_title       — <title> (defaults to wp_get_document_title())
 *   $tla_description — meta description (optional)
 *   $tla_image       — social card (defaults to featured image, then site default)
 *
 * Requires TLA_BASE.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! defined( 'TLA_BASE' ) ) {
	define( 'TLA_BASE', get_stylesheet_directory_uri() . '/tla' );
}

$tla_title       = isset( $tla_title ) && $tla_title ? $tla_title : wp_get_document_title();
$tla_description = isset( $tla_description ) ? $tla_description : '';
$tla_og_image    = ! empty( $tla_image ) ? $tla_image : ( TLA_BASE . '/assets/tla-og-card.png' );
$tla_og_url      = is_singular() ? get_permalink() : home_url( add_query_arg( array(), $GLOBALS['wp']->request ) );

$tla_css_dir  = get_stylesheet_directory() . '/tla/css';
$tla_styles_v = @filemtime( "$tla_css_dir/styles.css" ) ?: 3;
$tla_chrome_v = @filemtime( "$tla_css_dir/chrome.css" ) ?: 3;
$tla_blog_v   = @filemtime( "$tla_css_dir/blog.css" ) ?: 3;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo esc_html( $tla_title ); ?></title>
<?php if ( $tla_description ) : ?>
  <meta name="description" content="<?php echo esc_attr( $tla_description ); ?>" />
<?php endif; ?>

  <meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>" />
  <meta property="og:url" content="<?php echo esc_url( $tla_og_url ); ?>" />
  <meta property="og:title" content="<?php echo esc_attr( $tla_title ); ?>" />
<?php if ( $tla_description ) : ?>
  <meta property="og:description" content="<?php echo esc_attr( $tla_description ); ?>" />
<?php endif; ?>
  <meta property="og:image" content="<?php echo esc_url( $tla_og_image ); ?>" />
  <meta property="og:site_name" content="The Loan Atlas" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="<?php echo esc_url( $tla_og_image ); ?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=Antonio:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo esc_url( TLA_BASE ); ?>/css/styles.css?v=<?php echo $tla_styles_v; ?>" />
  <link rel="stylesheet" href="<?php echo esc_url( TLA_BASE ); ?>/css/chrome.css?v=<?php echo $tla_chrome_v; ?>" />
  <link rel="stylesheet" href="<?php echo esc_url( TLA_BASE ); ?>/css/blog.css?v=<?php echo $tla_blog_v; ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>
