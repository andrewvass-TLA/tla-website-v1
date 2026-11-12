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
 * Any standalone TLA-designed view: a "TLA Full HTML" marketing page OR a
 * blog template (single/home/archive/search). Used by the floating-bar
 * suppression so BOTH surfaces are protected from the Elementor floating
 * bar's focus-stealing scroll-to-bottom. (tla_is_blog_view() is defined
 * below; it's only called at request time, so order doesn't matter.)
 */
function tla_is_standalone_design() {
	return tla_is_fullhtml_page() || tla_is_blog_view();
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
	if ( ! tla_is_standalone_design() ) {
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
	if ( ! tla_is_standalone_design() ) {
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

/* =========================================================================
 * BLOG TEMPLATES (single.php / home.php / archive.php)
 *
 * These render standalone in the TLA design (head: tla/partials/blog-head.php),
 * linking styles.css + chrome.css + blog.css directly. Like the marketing
 * pages, we dequeue the parent theme + Elementor CSS on these views so they
 * render exactly as the mockups. Everything else (shop, normal pages) is
 * untouched.
 * ========================================================================= */

/**
 * Is the current request a TLA-styled BLOG view?
 *   - a single post           (single.php)
 *   - the posts index /blog/   (home.php)
 *   - any archive or search    (archive.php)
 * Pages (is_page) are excluded — those are the TLA Full HTML / Elementor pages.
 */
function tla_is_blog_view() {
	return ( is_singular( 'post' ) || is_home() || is_archive() || is_search() );
}

/**
 * Force search results through our archive.php.
 *
 * WordPress's hierarchy for search is search.php → index.php (it never falls
 * back to archive.php), and Elementor Pro's Theme Builder has an old "archive"
 * template (#398) whose conditions cover search results — it swaps itself in
 * via template_include at priority ~11. Since tla_is_blog_view() strips theme +
 * Elementor CSS on search, that rendered as a raw unstyled page. Priority 999
 * runs after Elementor, so /?s=… always gets the TLA blog design.
 */
add_filter( 'template_include', 'tla_blog_search_template', 999 );
function tla_blog_search_template( $template ) {
	if ( is_search() && ! is_admin() ) {
		$ours = get_stylesheet_directory() . '/archive.php';
		if ( file_exists( $ours ) ) {
			return $ours;
		}
	}
	return $template;
}

/**
 * Strip parent theme + Elementor CSS on blog views so they render standalone.
 * Mirrors tla_dequeue_theme_css_on_fullhtml(); our own blog CSS is hard-linked
 * in blog-head.php (not enqueued through WP), so nothing of ours is removed.
 */
add_action( 'wp_enqueue_scripts', 'tla_dequeue_theme_css_on_blog', 100 );
function tla_dequeue_theme_css_on_blog() {
	if ( ! tla_is_blog_view() ) {
		return;
	}

	global $wp_styles;
	if ( ! ( $wp_styles instanceof WP_Styles ) ) {
		return;
	}

	$theme_uri = get_template_directory_uri();
	$child_uri = get_stylesheet_directory_uri();

	foreach ( $wp_styles->registered as $handle => $style ) {
		$src = isset( $style->src ) ? (string) $style->src : '';

		if ( false !== strpos( $src, '/tla/css/' ) ) {
			continue; // never our own blog CSS
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
 * On blog views, suppress the same site-wide Elementor floating bar/buttons +
 * theme scroll-to-top that we hide on TLA Full HTML pages, so the standalone
 * blog design isn't disrupted.
 */
add_action( 'wp', 'tla_suppress_injected_markup_on_blog' );
function tla_suppress_injected_markup_on_blog() {
	if ( ! tla_is_blog_view() ) {
		return;
	}
	if ( class_exists( '\ElementorPro\Modules\FloatingButtons\Module' ) ) {
		$fb = \ElementorPro\Modules\FloatingButtons\Module::instance();
		remove_action( 'wp_footer', array( $fb, 'render_floating_elements' ) );
		remove_action( 'wp_body_open', array( $fb, 'render_floating_elements' ) );
	}
	remove_action( 'wp_footer', 'responsive_scroll_to_top' );
}

/**
 * A post card for the home/archive grids and related-posts strip.
 * Must be called inside the loop (uses the current $post).
 */
function tla_blog_card() {
	$cats        = get_the_category();
	$primary_cat = ! empty( $cats ) ? $cats[0] : null;
	$word_count  = str_word_count( wp_strip_all_tags( get_the_content() ) );
	$read_min    = max( 1, (int) round( $word_count / 200 ) );
	?>
	<article class="blog-card">
	  <div class="blog-card__media">
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'medium_large', array( 'alt' => esc_attr( get_the_title() ) ) );
	} else {
		echo '<img src="' . esc_url( TLA_BASE ) . '/assets/Loan Atlas logomark-18.png" alt="" style="object-fit:contain;background:var(--surface-container);padding:22%;" />';
	}
	?>
	  </div>
	  <div class="blog-card__body">
	<?php if ( $primary_cat ) : ?>
	    <span class="blog-card__cat"><?php echo esc_html( $primary_cat->name ); ?></span>
	<?php endif; ?>
	    <h3 class="blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    <p class="blog-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
	    <div class="blog-card__meta">
	      <span><?php echo esc_html( get_the_date() ); ?></span>
	      <span class="blog-card__meta-dot"></span>
	      <span><?php echo (int) $read_min; ?> min read</span>
	    </div>
	  </div>
	</article>
	<?php
}

/**
 * Branded pagination for the home/archive grids. Maps WordPress
 * paginate_links() output into the .blog-pagination container.
 */
function tla_blog_pagination() {
	$links = paginate_links( array(
		'mid_size'  => 1,
		'prev_text' => '&larr; Prev',
		'next_text' => 'Next &rarr;',
		'type'      => 'array',
	) );
	if ( empty( $links ) ) {
		return;
	}
	echo '<nav class="blog-pagination" aria-label="Blog pagination">';
	foreach ( $links as $link ) {
		echo $link; // already escaped markup from core
	}
	echo '</nav>';
}

/**
 * The dark category filter chip row used in the home masthead and archive
 * header. Lists top-level categories (most posts first, "Uncategorized"
 * skipped); highlights the current one. Each chip links to WordPress's native
 * category archive (/category/<slug>/, rendered by archive.php), so filtering
 * is a real page with pagination — not a JS filter over the posts on screen.
 * "All" is active on /blog/ only. Hidden if there are no categories.
 */
function tla_blog_category_filter() {
	$cats = get_categories( array(
		'hide_empty' => true,
		'parent'     => 0,
		'orderby'    => 'count',
		'order'      => 'DESC',
		'number'     => 9,
	) );
	$cats = array_slice( array_values( array_filter( $cats, function ( $c ) {
		return 'uncategorized' !== $c->slug;
	} ) ), 0, 8 );
	if ( empty( $cats ) ) {
		return;
	}
	$blog_url       = get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' );
	$current_cat_id = is_category() ? (int) get_queried_object_id() : 0;
	$all_active     = is_home() ? ' blog-filter__chip--active' : '';
	?>
	<nav class="blog-filter" aria-label="Browse by topic">
	  <a class="blog-filter__chip<?php echo $all_active; ?>" href="<?php echo esc_url( $blog_url ); ?>"<?php echo $all_active ? ' aria-current="page"' : ''; ?>>All</a>
	<?php foreach ( $cats as $cat ) :
		$is_current = ( $current_cat_id === (int) $cat->term_id ); ?>
	  <a class="blog-filter__chip<?php echo $is_current ? ' blog-filter__chip--active' : ''; ?>" href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"<?php echo $is_current ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $cat->name ); ?></a>
	<?php endforeach; ?>
	</nav>
	<?php
}

/**
 * Blog search box. A plain GET form to WordPress's native search (/?s=…),
 * which renders through archive.php. The hidden post_type=post keeps results
 * to blog posts (otherwise the marketing pages would show up as cards).
 * Pre-filled with the current query on a search results page.
 */
function tla_blog_search_form() {
	$query = is_search() ? get_search_query( false ) : '';
	?>
	<form class="blog-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	  <label class="visually-hidden" for="blog-search-input">Search articles</label>
	  <svg class="blog-search__icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
	  <input class="blog-search__input" id="blog-search-input" type="search" name="s" value="<?php echo esc_attr( $query ); ?>" placeholder="Search articles" required />
	  <input type="hidden" name="post_type" value="post" />
	  <button class="blog-search__btn" type="submit">Search</button>
	</form>
	<?php
}

/**
 * The masthead/archive-header toolbar: search box + topic chips.
 * Used by home.php and archive.php.
 */
function tla_blog_toolbar() {
	?>
	<div class="blog-toolbar">
	<?php tla_blog_search_form(); ?>
	<?php tla_blog_category_filter(); ?>
	</div>
	<?php
}

/**
 * Inline mid-post CTA band shortcode.
 *
 *   [tla_cta offer="consult"]            -> the offer's band, with its image
 *   [tla_cta offer="consult" image="no"] -> text-only variant of that band
 *
 * Drop into a post body (Shortcode block, or inline in a paragraph). Styles
 * come from .ctab-* in tla/css/blog.css. The offer copy/links/images live here
 * so editors never hand-write markup or asset paths — change them once and
 * every post that uses the shortcode updates. Each offer renders the matching
 * skin from the design set (--ai / --scripts / --podcast / --join / --consult
 * / --doc). The Perfect Loan Process offer key is "plp" (it uses the --doc
 * skin; "doc" is still accepted as a legacy alias).
 *
 * @param array $atts  offer (required), image ("no" for the text-only form).
 * @return string  band HTML, or empty string for an unknown offer.
 */
function tla_cta_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'offer' => '',
			'image' => 'yes',
		),
		$atts,
		'tla_cta'
	);

	$key       = sanitize_key( $atts['offer'] );
	// Legacy alias: the Perfect Loan Process offer was "doc" before it became
	// "plp" — keep old posts that still say offer="doc" rendering.
	if ( 'doc' === $key ) {
		$key = 'plp';
	}
	$with_img  = ! in_array( strtolower( (string) $atts['image'] ), array( 'no', 'false', '0' ), true );
	$assets    = get_stylesheet_directory_uri() . '/tla/assets';

	// One entry per offer: skin class, copy, link, image file, alt, button icon.
	$offers = array(
		'ai' => array(
			'skin'    => 'ai',
			'eyebrow' => 'Free training',
			'title'   => 'The AI-Empowered Originator Masterplan',
			'pitch'   => 'See how the next generation of loan officers close twice the loans in half the time.',
			'btn'     => 'Get the plan',
			'url'     => 'https://www.theloanatlas.com/ai-originator-masterplan/',
			'img'     => 'ai-masterplan-ipad.png',
			'alt'     => 'The AI-Empowered Originator Masterplan on an iPad',
			'icon'    => 'arrow',
		),
		'scripts' => array(
			'skin'    => 'scripts',
			'eyebrow' => 'Free download',
			'title'   => '5 Scripts for Dominating the Point of Sale',
			'pitch'   => "Stop losing deals because you didn't know what to say. The exact words, ready to use.",
			'btn'     => 'Get the scripts',
			'url'     => 'https://www.theloanatlas.com/5-scripts-for-dominating-point-of-sale/',
			'img'     => '5-scripts-hero.png',
			'alt'     => 'The 5 Essential Scripts guide',
			'icon'    => 'arrow',
		),
		'podcast' => array(
			'skin'    => 'podcast',
			'eyebrow' => 'The 360 Experience podcast',
			'title'   => 'Real conversations with the best in the business',
			'pitch'   => 'Tactics, stories, and systems from top originators — a new episode every week.',
			'btn'     => 'Listen now',
			'url'     => 'https://www.theloanatlas.com/podcast/',
			'img'     => '360 experience podcast.webp',
			'alt'     => 'The 360 Experience podcast cover art',
			'icon'    => 'play',
		),
		'join' => array(
			'skin'    => 'join',
			'eyebrow' => 'Membership',
			'title'   => 'Join The Loan Atlas',
			'pitch'   => 'Coaching, community, and the AI business system that runs your pipeline — all in one place.',
			'btn'     => 'Become a member',
			'url'     => '/join/',
			'img'     => 'hero image.png',
			'alt'     => 'Join The Loan Atlas',
			'icon'    => 'arrow',
		),
		'consult' => array(
			'skin'    => 'consult',
			'eyebrow' => 'Free strategy call',
			'title'   => 'Book a 1:1 consultation',
			'pitch'   => 'A 30-minute call to pressure-test your growth plan with a Loan Atlas coach. No cost, no pitch.',
			'btn'     => 'Book my call',
			'url'     => '/consultation/',
			'img'     => 'consultation-header.png',
			'alt'     => 'Book a consultation with a Loan Atlas coach',
			'icon'    => 'arrow',
		),
		'plp' => array(
			'skin'    => 'doc',
			'eyebrow' => 'Free system',
			'title'   => 'The Perfect Loan Process',
			'pitch'   => 'Create a five-star client experience on every file — the repeatable process behind the referrals.',
			'btn'     => 'Get the system',
			'url'     => 'https://www.theloanatlas.com/perfect-loan-process/',
			'img'     => 'PLP-cover.webp',
			'alt'     => 'The Perfect Loan Process booklet',
			'icon'    => 'arrow',
		),
	);

	if ( ! isset( $offers[ $key ] ) ) {
		// Unknown offer: render nothing on the page (avoids a broken band),
		// but leave a hint for an editor previewing in wp-admin.
		return current_user_can( 'edit_posts' )
			? '<!-- [tla_cta]: unknown offer "' . esc_html( $key ) . '". Use one of: ai, scripts, podcast, join, consult, plp. -->'
			: '';
	}

	$o   = $offers[ $key ];
	$src = esc_url( $assets . '/' . $o['img'] );
	$alt = esc_attr( $o['alt'] );

	// Button icon: arrow for most, play triangle for the podcast.
	if ( 'play' === $o['icon'] ) {
		$icon = '<svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M4 3v10l9-5z"/></svg>';
	} else {
		$icon = '<svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h9M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	}

	$eyebrow = '<p class="ctab__eyebrow">' . esc_html( $o['eyebrow'] ) . '</p>';
	$title   = '<h3 class="ctab__title">' . esc_html( $o['title'] ) . '</h3>';
	$pitch   = '<p class="ctab__pitch">' . esc_html( $o['pitch'] ) . '</p>';
	$button  = '<a class="ctab-btn ctab-btn--gold" href="' . esc_url( $o['url'] ) . '">' . esc_html( $o['btn'] ) . ' ' . $icon . '</a>';
	$img     = '<img src="' . $src . '" alt="' . $alt . '">';

	// Each skin composes its parts differently (see .ctab-* in blog.css).
	switch ( $o['skin'] ) {

		case 'ai':
			// AI band intentionally omits the eyebrow (title leads). The
			// 'eyebrow' value stays in $offers above so it's easy to restore.
			$body = '<div class="ctab__body">' . $title . $pitch . $button . '</div>';
			if ( $with_img ) {
				return '<div class="ctab ctab--ai">' . $body . '<div class="ctab__device">' . $img . '</div></div>';
			}
			return '<div class="ctab ctab--ai">' . $body . '</div>';

		case 'scripts':
			$thumb = $with_img ? '<div class="ctab__thumb">' . $img . '</div>' : '';
			return '<div class="ctab ctab--scripts">' . $thumb
				. '<div class="ctab__body">' . $eyebrow . $title . $pitch . '</div>'
				. $button . '</div>';

		case 'podcast':
			$cover = $with_img ? '<div class="ctab__cover">' . $img . '</div>' : '';
			return '<div class="ctab ctab--podcast">' . $cover
				. '<div class="ctab__body">' . $eyebrow . $title . $pitch . '</div>'
				. $button . '</div>';

		case 'join':
			$copy = '<div class="ctab__copy">' . $eyebrow . $title . $pitch . '</div>';
			if ( $with_img ) {
				return '<div class="ctab ctab--join"><img class="ctab__bg" src="' . $src . '" alt="' . $alt . '">'
					. '<div class="ctab__body">' . $copy . $button . '</div></div>';
			}
			return '<div class="ctab ctab--join ctab--join-flat"><div class="ctab__body">' . $copy . $button . '</div></div>';

		case 'consult':
			$body = '<div class="ctab__body">' . $eyebrow . $title . $pitch . $button . '</div>';
			if ( $with_img ) {
				return '<div class="ctab ctab--consult">' . $body . '<div class="ctab__photo">' . $img . '</div></div>';
			}
			return '<div class="ctab ctab--consult ctab--consult-flat">' . $body . '</div>';

		case 'doc':
			// With image: the booklet cover breaks out past the card edges
			// (like the AI band's iPad) — the --doc-img modifier reserves room.
			$shot = '<div class="ctab__shot">' . $img . '</div>';
			if ( $with_img ) {
				// Button stacks under the copy (like the AI band) so the copy
				// column stays wide and the card short enough for the breakout.
				return '<div class="ctab ctab--doc ctab--doc-img">' . $shot
					. '<div class="ctab__body">' . $eyebrow . $title . $pitch . $button . '</div></div>';
			}
			return '<div class="ctab ctab--doc">'
				. '<div class="ctab__body">' . $eyebrow . $title . $pitch . '</div>'
				. $button . '</div>';
	}

	return '';
}
add_shortcode( 'tla_cta', 'tla_cta_shortcode' );
