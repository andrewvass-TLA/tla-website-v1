<?php
/**
 * archive.php — category / tag / author / date archives AND search results,
 * rendered in the TLA blog design. Source mockup: public/blog-archive.html.
 *
 * WordPress falls category.php/tag.php/author.php/date.php/search.php back to
 * this file, so one template covers every term-based listing.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title = wp_get_document_title();
include get_stylesheet_directory() . '/tla/partials/blog-head.php';

// --- Resolve the header label (kicker) + term name (h1) -----------------
$kicker = 'Archive';
$term   = wp_strip_all_tags( get_the_archive_title() );
if ( is_category() )      { $kicker = 'Category'; $term = single_cat_title( '', false ); }
elseif ( is_tag() )       { $kicker = 'Tag';      $term = single_tag_title( '', false ); }
elseif ( is_author() )    { $kicker = 'Author';   $term = get_the_author(); }
elseif ( is_search() )    { $kicker = 'Search results for'; $term = get_search_query(); }
elseif ( is_date() )      { $kicker = 'Archive';  $term = wp_strip_all_tags( get_the_archive_title() ); }

$desc      = is_search() ? '' : wp_strip_all_tags( get_the_archive_description() );
$count     = (int) ( $GLOBALS['wp_query']->found_posts ?? 0 );
$blog_url  = get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' );
?>

  <!-- ===== Archive header ===== -->
  <header class="blog-archive-head">
    <div class="container blog-archive-head__inner">
      <a class="blog-crumb" href="<?php echo esc_url( $blog_url ); ?>">&larr; Atlas Insight</a>
      <span class="blog-archive-head__kicker"><?php echo esc_html( $kicker ); ?></span>
      <div class="blog-archive-head__row">
        <div class="blog-archive-head__main">
          <h1><?php echo esc_html( $term ); ?></h1>
        </div>
<?php if ( $desc ) : ?>
        <div class="blog-archive-head__divider" aria-hidden="true"></div>
        <p class="blog-archive-head__desc"><?php echo esc_html( $desc ); ?></p>
<?php endif; ?>
      </div>
<?php tla_blog_category_filter(); ?>
    </div>
  </header>

  <!-- ===== Card grid (the loop) ===== -->
  <section class="section">
    <div class="container">
<?php if ( have_posts() ) : ?>
      <p class="blog-archive-count"><span><?php echo (int) $count; ?></span> <?php echo esc_html( _n( 'article', 'articles', $count ) ); ?></p>
      <div class="blog-grid">
<?php while ( have_posts() ) : the_post(); tla_blog_card(); endwhile; ?>
      </div>
<?php tla_blog_pagination(); ?>
<?php else : ?>
      <div class="blog-empty">
        <h2>Nothing here yet</h2>
        <p><?php echo is_search() ? 'No articles matched your search. Try a different term.' : 'No articles in this section yet — check back soon.'; ?></p>
        <a class="btn btn--primary" href="<?php echo esc_url( $blog_url ); ?>">Back to the blog</a>
      </div>
<?php endif; ?>
    </div>
  </section>

<?php include get_stylesheet_directory() . '/tla/partials/blog-foot.php'; ?>
