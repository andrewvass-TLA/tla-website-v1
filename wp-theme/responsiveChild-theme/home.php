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
      <h1><em>Articles and Resources</em> for Mortgage Originators</h1>
<?php tla_blog_category_filter(); ?>
    </div>
  </section>

  <!-- ===== Featured + Latest grid + resource rail ===== -->
  <section class="section section--tight">
    <div class="container container--wide-blog">
     <div class="blog-layout">

      <!-- LEFT: featured post + section head + 3-up article grid -->
      <div class="blog-layout__main">
<?php
// Featured hero (page 1 only, newest post).
if ( $is_first && have_posts() ) :
	the_post();
	$cats        = get_the_category();
	$primary_cat = ! empty( $cats ) ? $cats[0] : null;
?>
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
        </div>
      </article>
<?php endif; ?>

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
      </div><!-- /.blog-layout__main -->

      <!-- RIGHT: free-resources rail (sticky promos) -->
      <aside class="res-rail" aria-label="Free resources">
        <div class="res-rail__header">
          <p class="res-rail__eyebrow">Free Resources</p>
          <h2 class="res-rail__heading">Tools to grow your business</h2>
        </div>

        <!-- 1 · AI Masterplan -->
        <a class="res-card res-card--ai" href="https://www.theloanatlas.com/ai-originator-masterplan/">
          <div class="res-card__shot"><img src="<?php echo esc_url( TLA_BASE ); ?>/assets/ai-masterplan-ipad.png" alt="The AI-Empowered Originator Masterplan on an iPad" /></div>
          <div class="res-card__pad">
            <p class="res-card__eyebrow">Close twice the loans in half the time</p>
            <h3 class="res-card__title">The AI-Empowered Originator Masterplan</h3>
            <p class="res-card__pitch">How the next generation of advisors close twice the loans in half the time.</p>
            <span class="res-card__cta">Get the plan
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>

        <!-- 2 · 5 Scripts -->
        <a class="res-card res-card--photo" href="https://www.theloanatlas.com/5-scripts-for-dominating-point-of-sale/">
          <img class="res-card__img" src="<?php echo esc_url( TLA_BASE ); ?>/assets/5-scripts-hero.png" alt="Loan officer on the phone closing a deal" />
          <div class="res-card__pad">
            <p class="res-card__eyebrow">Handle objections effortlessly</p>
            <h3 class="res-card__title">5 Essential Scripts for Dominating the Point of Sale</h3>
            <p class="res-card__pitch">Word-for-word language to win the deal at the table.</p>
            <span class="res-card__cta">Get the scripts
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>

        <!-- 3 · Perfect Loan Process -->
        <a class="res-card res-card--doc" href="https://go.theloanatlas.com/perfect-loan-process">
          <div class="res-card__shot"><img src="<?php echo esc_url( TLA_BASE ); ?>/assets/perfect-loan-process.png" alt="The Perfect Loan Process framework pages" /></div>
          <div class="res-card__pad">
            <p class="res-card__eyebrow">Generate consistent referrals</p>
            <h3 class="res-card__title">The Perfect Loan Process</h3>
            <p class="res-card__pitch">The 72-step framework behind the most consistent, referral-generating originators.</p>
            <span class="res-card__cta">Get the system
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </a>

        <!-- 4 · The 360 Experience podcast -->
        <a class="res-card res-card--podcast" href="https://www.theloanatlas.com/podcast/">
          <img class="res-card__art" src="<?php echo esc_url( TLA_BASE ); ?>/assets/360 experience podcast.webp" alt="The 360 Experience podcast" />
          <div class="res-card__pad">
            <span class="res-card__btn">
              <svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              Listen Now
            </span>
          </div>
        </a>
      </aside>

     </div><!-- /.blog-layout -->
    </div>
  </section>

<?php include get_stylesheet_directory() . '/tla/partials/blog-foot.php'; ?>
