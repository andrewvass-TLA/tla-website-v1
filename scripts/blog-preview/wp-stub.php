<?php
/**
 * wp-stub.php — run the REAL WordPress blog templates locally with real PHP.
 *
 *   php scripts/blog-preview/wp-stub.php <home|single|archive>   (prints HTML)
 *
 * Normally invoked by scripts/preview-blog.js (`npm run preview:blog`), which
 * writes wp-theme/_preview-tpl-<view>.html.
 *
 * How it works: this file fakes just enough of WordPress (the template tags,
 * the post loop, WP_Query, conditionals, shortcodes) for the blog templates to
 * run, feeds them the sample posts in fixtures.php, and then includes the real
 * theme functions.php + the real template. Every line of PHP in home.php,
 * single.php, archive.php, blog-head.php, blog-foot.php, header.php, footer.php
 * and the tla_* helpers actually executes, so the output is the markup the live
 * site would produce for those posts.
 *
 * Not modeled: the database, plugins, the parent theme, wp_head()/wp_footer()
 * output (the theme dequeues parent CSS on blog views anyway). If a template
 * starts calling a WordPress function that isn't stubbed here, PHP fails with
 * "Call to undefined function …" — add a stub below.
 */

error_reporting( E_ALL );
ini_set( 'display_errors', 'stderr' );

$view = $argv[1] ?? 'home';
if ( ! in_array( $view, array( 'home', 'single', 'archive', 'search' ), true ) ) {
	fwrite( STDERR, "Unknown view '$view' (use home, single, archive or search)\n" );
	exit( 1 );
}

define( 'ABSPATH', __DIR__ . '/' );

$ROOT  = dirname( __DIR__, 2 );
$THEME = $ROOT . '/wp-theme/responsiveChild-theme';

// Asset URLs are relative to wp-theme/, where the preview HTML files are written.
define( 'TLA_PREVIEW_URI', 'responsiveChild-theme' );
define( 'TLA_PREVIEW_HOME', 'https://www.theloanatlas.com' );

// Links between the three previews, so you can click around them.
define( 'TLA_PREVIEW_HOME_FILE', '_preview-tpl-home.html' );
define( 'TLA_PREVIEW_SINGLE_FILE', '_preview-tpl-single.html' );
define( 'TLA_PREVIEW_ARCHIVE_FILE', '_preview-tpl-archive.html' );
define( 'TLA_PREVIEW_SEARCH', 'referral scripts' );

require __DIR__ . '/fixtures.php'; // $TLA_POSTS, $TLA_CATEGORIES, $TLA_TAGS

// ---------------------------------------------------------------------------
// Query state: the main loop + the current $post.
// ---------------------------------------------------------------------------
class TLA_Preview_Query {
	public $posts;
	public $current = -1;
	public $found_posts;
	public $post_count;

	public function __construct( array $posts, $found = null ) {
		$this->posts       = array_values( $posts );
		$this->post_count  = count( $this->posts );
		$this->found_posts = $found ?? $this->post_count;
	}
	public function have_posts() { return $this->current + 1 < $this->post_count; }
	public function the_post() {
		$this->current++;
		$GLOBALS['post'] = $this->posts[ $this->current ];
	}
}

// Secondary queries (single.php's "Additional Resources").
class WP_Query extends TLA_Preview_Query {
	public function __construct( $args = array() ) {
		$exclude  = $args['post__not_in'] ?? array();
		$per_page = $args['posts_per_page'] ?? 10;
		$posts    = array_filter( $GLOBALS['TLA_POSTS'], fn( $p ) => ! in_array( $p->ID, $exclude, true ) );
		parent::__construct( array_slice( $posts, 0, $per_page ) );
	}
	public function the_post() {
		$GLOBALS['tla_main_post'] = $GLOBALS['tla_main_post'] ?? ( $GLOBALS['post'] ?? null );
		parent::the_post();
	}
}

// What each view's main query holds.
switch ( $view ) {
	case 'single':
		$wp_query = new TLA_Preview_Query( array( $TLA_POSTS[0] ) );
		break;
	case 'archive':
		// Category archive for the first category.
		$tla_archive_cat = $TLA_CATEGORIES[0];
		$wp_query        = new TLA_Preview_Query(
			array_filter( $TLA_POSTS, fn( $p ) => $p->cats[0] === $tla_archive_cat->term_id ),
			12
		);
		break;
	case 'search':
		// Search results for TLA_PREVIEW_SEARCH (rendered by archive.php, as live).
		$wp_query = new TLA_Preview_Query( array_slice( $TLA_POSTS, 0, 5 ), 5 );
		break;
	default:
		// Page 1 of /blog/: 7 posts (1 featured + 6 in the grid), 3 pages total.
		$wp_query = new TLA_Preview_Query( array_slice( $TLA_POSTS, 0, 7 ), 21 );
}
$GLOBALS['wp_query'] = $wp_query;
$GLOBALS['wp']       = (object) array( 'request' => 'single' === $view ? '' : 'blog' );

function tla_p() { return $GLOBALS['post'] ?? $GLOBALS['TLA_POSTS'][0]; }

// ---------------------------------------------------------------------------
// Hooks / setup — accepted and ignored (except shortcodes).
// ---------------------------------------------------------------------------
$GLOBALS['tla_shortcodes'] = array();
function add_action() { return true; }
function add_filter() { return true; }
function remove_action() { return true; }
function remove_filter() { return true; }
function add_shortcode( $tag, $cb ) { $GLOBALS['tla_shortcodes'][ $tag ] = $cb; }
function wp_enqueue_style() {}
function wp_dequeue_style() {}
function wp_deregister_style() {}
function wp_enqueue_script() {}
function wp_dequeue_script() {}
function wp_head() {}
function wp_footer() {}
function current_user_can() { return false; }
function language_attributes() { echo 'lang="en-US"'; }
function bloginfo( $show = '' ) { echo 'charset' === $show ? 'UTF-8' : 'The Loan Atlas'; }
function body_class() {
	$classes = array( 'single' => 'single single-post', 'archive' => 'archive category', 'search' => 'search search-results', 'home' => 'blog' );
	echo 'class="' . $classes[ $GLOBALS['view'] ] . '"';
}

// ---------------------------------------------------------------------------
// Paths, URLs, options
// ---------------------------------------------------------------------------
function get_stylesheet_directory() { return $GLOBALS['THEME']; }
function get_stylesheet_directory_uri() { return TLA_PREVIEW_URI; }
function get_template_directory_uri() { return TLA_PREVIEW_URI; }
function get_stylesheet_uri() { return TLA_PREVIEW_URI . '/style.css'; }
function home_url( $path = '' ) { return TLA_PREVIEW_HOME . '/' . ltrim( $path, '/' ); }
function add_query_arg( $args = array(), $url = '' ) { return $url; }
function get_option( $name ) { return 'page_for_posts' === $name ? 'blog' : ''; }
function get_query_var( $var ) { return 'paged' === $var ? 1 : ''; }
function get_queried_object_id() { return 'archive' === $GLOBALS['view'] ? $GLOBALS['tla_archive_cat']->term_id : 0; }
function wp_get_document_title() {
	switch ( $GLOBALS['view'] ) {
		case 'single':  return tla_p()->title . ' – The Loan Atlas';
		case 'archive': return $GLOBALS['tla_archive_cat']->name . ' – The Loan Atlas';
		case 'search':  return 'Search results for “' . TLA_PREVIEW_SEARCH . '” – The Loan Atlas';
		default:        return 'Atlas Insight – The Loan Atlas';
	}
}

// ---------------------------------------------------------------------------
// Conditionals
// ---------------------------------------------------------------------------
function is_singular() { return 'single' === $GLOBALS['view']; }
function is_single() { return 'single' === $GLOBALS['view']; }
function is_home() { return 'home' === $GLOBALS['view']; }
function is_archive() { return 'archive' === $GLOBALS['view']; }
function is_category() { return 'archive' === $GLOBALS['view']; }
function is_tag() { return false; }
function is_author() { return false; }
function is_date() { return false; }
function is_search() { return 'search' === $GLOBALS['view']; }
function is_page() { return false; }
function is_front_page() { return false; }
function is_admin() { return false; }

// ---------------------------------------------------------------------------
// The loop
// ---------------------------------------------------------------------------
function have_posts() { return $GLOBALS['wp_query']->have_posts(); }
function the_post() { $GLOBALS['wp_query']->the_post(); }
function wp_reset_postdata() {
	if ( array_key_exists( 'tla_main_post', $GLOBALS ) ) {
		$GLOBALS['post'] = $GLOBALS['tla_main_post'];
		unset( $GLOBALS['tla_main_post'] );
	}
}

// ---------------------------------------------------------------------------
// Post template tags
// ---------------------------------------------------------------------------
function get_the_ID() { return tla_p()->ID; }
function get_the_title() { return tla_p()->title; }
function the_title() { echo get_the_title(); }
function get_permalink( $id = null ) {
	if ( 'blog' === $id ) {
		return TLA_PREVIEW_HOME_FILE; // the posts page (/blog/)
	}
	return TLA_PREVIEW_SINGLE_FILE;
}
function the_permalink() { echo esc_url( get_permalink() ); }
function get_the_author() { return tla_p()->author; }
function the_author() { echo get_the_author(); }
function get_the_date() { return tla_p()->date; }
function has_excerpt() { return '' !== tla_p()->excerpt; }
function get_the_excerpt() { return tla_p()->excerpt; }
function get_the_content() { return tla_p()->content; }
function the_content() { echo do_shortcode( get_the_content() ); }

function has_post_thumbnail() { return '' !== tla_p()->thumb; }
function get_the_post_thumbnail_url( $id = null, $size = '' ) {
	return has_post_thumbnail() ? TLA_PREVIEW_URI . '/tla/assets/' . tla_p()->thumb : false;
}
function the_post_thumbnail( $size = '', $attr = array() ) {
	if ( ! has_post_thumbnail() ) {
		return;
	}
	$alt = $attr['alt'] ?? '';
	echo '<img src="' . esc_url( get_the_post_thumbnail_url() ) . '" class="attachment-' . esc_attr( $size ) . ' wp-post-image" alt="' . $alt . '" decoding="async" />';
}

// ---------------------------------------------------------------------------
// Categories, tags, archives
// ---------------------------------------------------------------------------
function tla_cat( $id ) {
	foreach ( $GLOBALS['TLA_CATEGORIES'] as $c ) {
		if ( $c->term_id === $id ) {
			return $c;
		}
	}
	return null;
}
function get_the_category() { return array_map( 'tla_cat', tla_p()->cats ); }
function get_categories( $args = array() ) {
	return array_slice( $GLOBALS['TLA_CATEGORIES'], 0, $args['number'] ?? 99 );
}
function get_category_link( $id ) { return TLA_PREVIEW_ARCHIVE_FILE; }
function get_the_tags() {
	$tags = array_values( array_filter( $GLOBALS['TLA_TAGS'], fn( $t ) => in_array( $t->term_id, tla_p()->tags, true ) ) );
	return $tags ?: false;
}
function get_tag_link( $id ) { return TLA_PREVIEW_ARCHIVE_FILE; }
function single_cat_title( $prefix = '', $display = true ) {
	$name = $GLOBALS['tla_archive_cat']->name;
	if ( $display ) { echo $prefix . $name; return; }
	return $prefix . $name;
}
function single_tag_title( $prefix = '', $display = true ) { return single_cat_title( $prefix, $display ); }
function get_the_archive_title() { return is_archive() ? 'Category: ' . $GLOBALS['tla_archive_cat']->name : 'Archives'; }
function get_the_archive_description() { return '<p>' . $GLOBALS['tla_archive_cat']->description . '</p>'; }
function get_search_query( $escaped = true ) { return is_search() ? ( $escaped ? esc_attr( TLA_PREVIEW_SEARCH ) : TLA_PREVIEW_SEARCH ) : ''; }

function paginate_links( $args = array() ) {
	$total = (int) ceil( $GLOBALS['wp_query']->found_posts / 7 );
	if ( $total < 2 ) {
		return array();
	}
	$links = array( '<span aria-current="page" class="page-numbers current">1</span>' );
	for ( $i = 2; $i <= min( $total, 3 ); $i++ ) {
		$links[] = '<a class="page-numbers" href="#">' . $i . '</a>';
	}
	if ( $total > 4 ) {
		$links[] = '<span class="page-numbers dots">&hellip;</span>';
		$links[] = '<a class="page-numbers" href="#">' . $total . '</a>';
	}
	$links[] = '<a class="next page-numbers" href="#">' . ( $args['next_text'] ?? 'Next &raquo;' ) . '</a>';
	return $links;
}

// ---------------------------------------------------------------------------
// Formatting / escaping
// ---------------------------------------------------------------------------
function esc_html( $s ) { return htmlspecialchars( (string) $s, ENT_QUOTES, 'UTF-8', false ); }
function esc_attr( $s ) { return htmlspecialchars( (string) $s, ENT_QUOTES, 'UTF-8', false ); }
function esc_url( $s ) { return htmlspecialchars( (string) $s, ENT_QUOTES, 'UTF-8', false ); }
function sanitize_key( $s ) { return preg_replace( '/[^a-z0-9_\-]/', '', strtolower( (string) $s ) ); }
function wp_strip_all_tags( $s ) { return trim( strip_tags( preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', (string) $s ) ) ); }
function wp_trim_words( $text, $num = 55, $more = '&hellip;' ) {
	$words = preg_split( '/\s+/', wp_strip_all_tags( $text ), -1, PREG_SPLIT_NO_EMPTY );
	return count( $words ) > $num ? implode( ' ', array_slice( $words, 0, $num ) ) . $more : implode( ' ', $words );
}
function _n( $single, $plural, $n ) { return 1 === (int) $n ? $single : $plural; }
function __( $s ) { return $s; }

// ---------------------------------------------------------------------------
// Shortcodes (so [tla_cta …] in post content renders through the real helper)
// ---------------------------------------------------------------------------
function shortcode_atts( $pairs, $atts, $shortcode = '' ) {
	$atts = (array) $atts;
	$out  = array();
	foreach ( $pairs as $name => $default ) {
		$out[ $name ] = array_key_exists( $name, $atts ) ? $atts[ $name ] : $default;
	}
	return $out;
}
function do_shortcode( $content ) {
	return preg_replace_callback( '/\[([a-z_]+)((?:\s+[a-z_]+="[^"]*")*)\s*\]/i', function ( $m ) {
		$cb = $GLOBALS['tla_shortcodes'][ $m[1] ] ?? null;
		if ( ! $cb ) {
			return $m[0];
		}
		preg_match_all( '/([a-z_]+)="([^"]*)"/i', $m[2], $pairs, PREG_SET_ORDER );
		$atts = array();
		foreach ( $pairs as $p ) {
			$atts[ strtolower( $p[1] ) ] = $p[2];
		}
		return call_user_func( $cb, $atts, '', $m[1] );
	}, $content );
}

// ---------------------------------------------------------------------------
// Run the real theme.
// ---------------------------------------------------------------------------
require $THEME . '/functions.php';
require $THEME . '/' . ( 'search' === $view ? 'archive' : $view ) . '.php';
