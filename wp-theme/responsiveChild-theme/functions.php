<?php
/**
 * Responsive Child Theme — functions.php
 *
 * Safe to activate: loads the parent "Responsive" theme's stylesheet first,
 * then the child's, so the live site keeps its existing appearance. Elementor
 * and all parent-theme behavior continue to work because this is a standard
 * child theme of "responsive" (declared via `Template: responsive` in style.css).
 *
 * The custom "TLA Full HTML" pages (tla-fullhtml-template.php) render their own
 * standalone markup and link their own CSS/JS via TLA_BASE, so the enqueues
 * below don't affect them — they're here only to keep the rest of the WordPress
 * site (blog, shop, normal pages) looking exactly as it does today.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'tla_child_enqueue_styles' );
function tla_child_enqueue_styles() {
	// Parent theme stylesheet.
	wp_enqueue_style(
		'responsive-parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( get_template() )->get( 'Version' )
	);

	// Child theme stylesheet, loaded after the parent so it can override.
	wp_enqueue_style(
		'responsive-child-style',
		get_stylesheet_uri(),
		array( 'responsive-parent-style' ),
		wp_get_theme()->get( 'Version' )
	);
}
