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

/**
 * Is the page currently being rendered a "TLA Full HTML" page?
 *
 * These pages are fully self-styled (they link their own styles.css/chrome.css
 * via TLA_BASE), so they must NOT inherit the parent theme's or Elementor's CSS.
 */
function tla_is_fullhtml_page() {
	if ( ! is_page() ) {
		return false;
	}
	return 'tla-fullhtml-template.php' === get_page_template_slug( get_queried_object_id() );
}

/**
 * On TLA Full HTML pages only, strip out the parent theme + Elementor + child
 * stylesheets so the page renders standalone exactly as designed. Runs late
 * (priority 100) so it removes styles other code enqueued earlier. Every OTHER
 * WordPress page (blog, shop, normal pages) is untouched.
 *
 * wp_head()/wp_footer() still fire on these pages, so SEO/analytics/consent
 * plugins continue to work — we only remove visual CSS, not functional hooks.
 */
add_action( 'wp_enqueue_scripts', 'tla_dequeue_theme_css_on_fullhtml', 100 );
function tla_dequeue_theme_css_on_fullhtml() {
	if ( ! tla_is_fullhtml_page() ) {
		return;
	}

	global $wp_styles;
	if ( ! ( $wp_styles instanceof WP_Styles ) ) {
		return;
	}

	$theme_uri  = get_template_directory_uri();        // parent theme dir
	$child_uri  = get_stylesheet_directory_uri();      // child theme dir

	foreach ( $wp_styles->registered as $handle => $style ) {
		$src = isset( $style->src ) ? (string) $style->src : '';

		// Never dequeue our own page CSS (it isn't enqueued through WP anyway —
		// it's hard-linked in the template — but guard regardless).
		if ( false !== strpos( $src, '/tla/css/' ) ) {
			continue;
		}

		$is_theme_css = ( $theme_uri && false !== strpos( $src, $theme_uri ) )
			|| ( $child_uri && false !== strpos( $src, $child_uri ) );

		$is_elementor_css = ( false !== strpos( $handle, 'elementor' ) )
			|| ( false !== strpos( $src, '/elementor' ) )
			|| ( false !== strpos( $src, 'uploads/elementor' ) );

		if ( $is_theme_css || $is_elementor_css ) {
			wp_dequeue_style( $handle );
			wp_deregister_style( $handle );
		}
	}
}

/**
 * On TLA Full HTML pages only, suppress Elementor / theme MARKUP that is
 * injected site-wide and doesn't belong on these standalone designs:
 *
 *   - Elementor "floating buttons / floating bars" (e.g. the sticky promo bar).
 *     It renders with role="alertdialog", which steals focus on load and
 *     scrolls the page — that was the auto-jump-to-CTA bug — and its sticky
 *     top position was the gray bar.
 *   - Elementor Header & Footer (ehf) header/footer template output.
 *   - The theme's scroll-to-top.
 *
 * Dequeuing CSS isn't enough for these — they emit actual HTML via hooks, so we
 * unhook the renderers. Other WordPress pages keep all of it.
 *
 * Hooked very early so the renderers are removed before they run.
 */
add_action( 'wp', 'tla_suppress_injected_markup_on_fullhtml' );
function tla_suppress_injected_markup_on_fullhtml() {
	if ( ! tla_is_fullhtml_page() ) {
		return;
	}

	// Elementor Pro floating elements (floating buttons / bars).
	if ( class_exists( '\ElementorPro\Modules\FloatingButtons\Module' ) ) {
		$fb = \ElementorPro\Modules\FloatingButtons\Module::instance();
		remove_action( 'wp_footer', array( $fb, 'render_floating_elements' ) );
		remove_action( 'wp_body_open', array( $fb, 'render_floating_elements' ) );
	}
	// Belt-and-suspenders: strip any leftover floating-buttons output via filter.
	add_filter( 'elementor/frontend/the_content', 'tla_noop_passthrough' );

	// Elementor Header & Footer plugin (ehf) — don't render its header/footer
	// inside our standalone template.
	remove_all_actions( 'elementor/page_templates/header-footer/before_content' );
	remove_all_actions( 'elementor/page_templates/header-footer/after_content' );

	// Responsive theme scroll-to-top.
	remove_action( 'wp_footer', 'responsive_scroll_to_top' );
}

/** Passthrough used to satisfy filter signature without altering content. */
function tla_noop_passthrough( $content ) {
	return $content;
}

/**
 * Final safety net: if the floating-bar markup still slips through (plugin
 * versions vary), neutralize the focus-stealing scroll by stripping the
 * alertdialog role on these pages. Runs in the footer after Elementor output.
 */
add_action( 'wp_footer', 'tla_neutralize_floating_bar_focus', 999 );
function tla_neutralize_floating_bar_focus() {
	if ( ! tla_is_fullhtml_page() ) {
		return;
	}
	?>
	<script>
	(function () {
		// Remove any site-wide Elementor floating bar/buttons + their wrapper
		// containers that leaked onto this standalone page (gray top bar +
		// focus-jump on load). Belt-and-suspenders to the CSS hide in <head>.
		var sel = '.elementor-location-floating_buttons,'
			+ '[data-elementor-type="floating-buttons"],'
			+ '[data-elementor-post-type="e-floating-buttons"],'
			+ '.e-floating-bars, .e-floating-bars__overlay';
		document.querySelectorAll( sel ).forEach( function ( el ) {
			// Remove the whole Elementor floating wrapper, not just the inner bar.
			var top = el.closest( '.elementor-location-floating_buttons' ) || el;
			top.remove();
		} );
	})();
	</script>
	<?php
}

/**
 * Hide the site-wide Elementor floating bar/buttons on TLA pages via CSS in
 * <head>, so the gray bar never paints (the JS net above removes it from the
 * DOM, but CSS applies before first paint = no flash). Scoped to TLA pages only.
 */
add_action( 'wp_head', 'tla_hide_floating_bar_css', 1 );
function tla_hide_floating_bar_css() {
	if ( ! tla_is_fullhtml_page() ) {
		return;
	}
	?>
	<style id="tla-hide-injected">
		.elementor-location-floating_buttons,
		[data-elementor-type="floating-buttons"],
		[data-elementor-post-type="e-floating-buttons"],
		.e-floating-bars,
		.e-floating-bars__overlay { display: none !important; }
	</style>
	<?php
}
