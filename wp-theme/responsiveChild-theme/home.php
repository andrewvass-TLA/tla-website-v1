<?php
/**
 * home.php — the blog posts index (the page set as Settings → Reading →
 * "Posts page", slug `blog`, URL /blog/). NOT the site front page.
 * Source mockup: public/blog.html.
 *
 * Dark masthead (eyebrow + headline + category filter) → FEATURED hero
 * (newest post on page 1) → grid of the rest → pagination.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = wp_get_document_title();
$tla_description = 'Strategy, scripts, and AI-driven systems to help loan originators grow.';

include get_stylesheet_directory() . '/tla/partials/blog-head.php';

$paged    = max( 1, (int) get_query_var( 'paged' ) );
$is_first = ( 1 === $paged );
?>

  <!-- ===== Masthead (with category filter) ===== -->
  <section class="blog-masthead">
    <div class="container blog-masthead__inner">
      <span class="eyebrow"><span class="eyebrow__text">The Loan Atlas Blog</span></span>
      <h1><em>Articles and Resources</em> for Mortgage Originators</h1>
<?php tla_blog_category_filter(); ?>
    </div>
  </section>

<?php
// ===== Featured hero (page 1 only, newest post) =====
if ( $is_first && have_posts() ) :
	the_post();
	$cats        = get_the_category();
	$primary_cat = ! empty( $cats ) ? $cats[0] : null;
?>
  <section class="section section--tight">
    <div class="container">
      <article class="blog-featured">
        <div class="blog-featured__media">
<?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large', array( 'alt' => esc_attr( get_the_title() ) ) );
      else : ?><img src="<?php echo esc_url( TLA_BASE ); ?>/assets/Loan Atlas logo-color.png" alt="" style="object-fit:contain;background:var(--surface-container);padding:18%;" /><?php endif; ?>
        </div>
        <div class="blog-featured__body">
<?php if ( $primary_cat ) : ?>          <span class="blog-featured__cat"><?php echo esc_html( $primary_cat->name ); ?></span>
<?php endif; ?>
          <h2 class="blog-featured__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="blog-featured__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40 ) ); ?></p>
          <div class="blog-card__meta">
            <span><?php the_author(); ?></span><span class="blog-card__meta-dot"></span>
            <span><?php echo esc_html( get_the_date() ); ?></span>
          </div>
          <p style="margin-top:24px;"><a class="btn btn--primary btn--lg" href="<?php the_permalink(); ?>">Read</a></p>
        </div>
      </article>
    </div>
  </section>
<?php endif; ?>

  <!-- ===== Latest grid ===== -->
  <section class="section" style="padding-top:0;">
    <div class="container">
      <div class="blog-section-head">
        <h2 class="t-headline-lg"><?php echo $is_first ? 'Latest articles' : 'More articles'; ?></h2>
      </div>
<?php if ( have_posts() ) : ?>
      <div class="blog-grid">
<?php while ( have_posts() ) : the_post(); tla_blog_card(); endwhile; ?>
      </div>
<?php tla_blog_pagination(); ?>
<?php else : ?>
      <div class="blog-empty">
        <h2>No articles yet</h2>
        <p>New insights are on the way — check back soon.</p>
      </div>
<?php endif; ?>
    </div>
  </section>

<?php include get_stylesheet_directory() . '/tla/partials/blog-foot.php'; ?>
