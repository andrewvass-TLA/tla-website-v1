<?php
/**
 * home.php — the blog posts index (the page set as Settings → Reading →
 * "Posts page", slug `blog`, URL /blog/). NOT the site front page.
 * Source mockup: public/blog.html.
 *
 * Layout: dark masthead + category filter, a FEATURED hero (the newest
 * post on page 1), then a grid of the rest, with pagination.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = wp_get_document_title();
$tla_description = 'Strategy, scripts, and AI-driven systems to help loan originators grow.';

include get_stylesheet_directory() . '/tla/partials/blog-head.php';

$paged       = max( 1, (int) get_query_var( 'paged' ) );
$is_first    = ( 1 === $paged );
// On page 1 the first post becomes the hero, so the grid skips it.
$grid_offset = 0;
?>

  <!-- ===== Masthead ===== -->
  <section class="blog-masthead">
    <div class="container blog-masthead__inner">
      <p class="t-eyebrow">The Loan Atlas Blog</p>
      <h1 class="t-display">Insights for the modern loan originator</h1>
      <p class="t-body-lg">Strategy, scripts, and AI-driven systems to help you originate more loans, build a referable business, and reclaim your time.</p>
<?php tla_blog_category_filter(); ?>
    </div>
  </section>

<?php
// ===== Featured hero (page 1 only, newest post) =====
if ( $is_first && have_posts() ) :
	the_post(); // first post = hero
	$cats        = get_the_category();
	$primary_cat = ! empty( $cats ) ? $cats[0] : null;
	$grid_offset = 1; // grid below starts after the hero
?>
  <section class="section section--tight">
    <div class="container">
      <article class="blog-featured">
        <div class="blog-featured__media">
          <span class="blog-featured__badge">Featured</span>
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
          <p style="margin-top:24px;"><a class="btn btn--primary" href="<?php the_permalink(); ?>">Read the article</a></p>
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
<?php
      while ( have_posts() ) : the_post();
        tla_blog_card();
      endwhile;
?>
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

  <!-- ===== Newsletter ===== -->
  <section class="section" style="padding-top:0;">
    <div class="container">
      <div class="blog-newsletter">
        <p class="t-eyebrow" style="color:var(--brass-bright);">Stay sharp</p>
        <h2 class="t-headline-lg">Get the playbook in your inbox</h2>
        <p>Weekly strategies, scripts, and AI systems for originators who want to grow. No fluff.</p>
        <form class="blog-newsletter__form" onsubmit="return false;">
          <input type="email" placeholder="you@example.com" aria-label="Email address" />
          <button class="btn btn--brass" type="submit">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

<?php include get_stylesheet_directory() . '/tla/partials/blog-foot.php'; ?>
