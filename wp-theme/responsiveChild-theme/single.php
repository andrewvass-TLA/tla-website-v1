<?php
/**
 * single.php — a single blog post, rendered in the TLA blog design.
 * Source mockup: public/blog-post.html.
 *
 * Applies automatically to EVERY single post once this theme is active.
 * Content comes from the post itself (title, content, featured image,
 * category, author) — nothing is hand-coded per post.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

the_post(); // set up $post for this single view

// --- Head vars ----------------------------------------------------------
$tla_title       = wp_get_document_title();
$tla_description = has_excerpt() ? wp_strip_all_tags( get_the_excerpt() ) : '';
if ( has_post_thumbnail() ) {
	$tla_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
}

// --- Derived display data ----------------------------------------------
$cats        = get_the_category();
$primary_cat = ! empty( $cats ) ? $cats[0] : null;
$author_id   = get_the_author_meta( 'ID' );
$author_name = get_the_author();
$author_url  = get_author_posts_url( $author_id );
$author_bio  = get_the_author_meta( 'description' );

// Read time from the content word count (~200 wpm).
$word_count = str_word_count( wp_strip_all_tags( get_the_content() ) );
$read_min   = max( 1, (int) round( $word_count / 200 ) );

// Author initials for the avatar fallback.
$initials = '';
foreach ( preg_split( '/\s+/', trim( $author_name ) ) as $part ) {
	if ( $part !== '' ) { $initials .= strtoupper( $part[0] ); }
}
$initials = substr( $initials, 0, 2 );

include get_stylesheet_directory() . '/tla/partials/blog-head.php';
?>

  <div class="blog-progress" id="blogProgress"></div>

  <!-- ===== Post header ===== -->
  <header class="blog-post-head">
    <div class="container blog-post-head__inner">
<?php if ( $primary_cat ) : ?>
      <p><a href="<?php echo esc_url( get_category_link( $primary_cat->term_id ) ); ?>" class="blog-post-head__cat" style="text-decoration:none;">&larr; <?php echo esc_html( $primary_cat->name ); ?></a></p>
<?php endif; ?>
      <h1><?php the_title(); ?></h1>
<?php if ( has_excerpt() ) : ?>
      <p class="blog-post-head__dek"><?php echo esc_html( get_the_excerpt() ); ?></p>
<?php endif; ?>
      <div class="blog-post-head__meta">
        <span class="blog-post-head__avatar"><?php
          $av = get_avatar( $author_id, 88, '', $author_name, array( 'class' => '' ) );
          echo $av ? $av : esc_html( $initials );
        ?></span>
        <span class="blog-post-head__byline"><strong><?php echo esc_html( $author_name ); ?></strong></span>
        <span class="blog-post-head__meta-dot"></span>
        <span><?php echo esc_html( get_the_date() ); ?></span>
        <span class="blog-post-head__meta-dot"></span>
        <span><?php echo (int) $read_min; ?> min read</span>
      </div>
    </div>
  </header>

<?php if ( has_post_thumbnail() ) : ?>
  <!-- ===== Hero image ===== -->
  <div class="blog-post-hero">
    <?php the_post_thumbnail( 'large', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
  </div>
<?php endif; ?>

  <!-- ===== Article body (the_content) ===== -->
  <article class="section blog-post-layout">
    <div class="tla-article">
      <?php the_content(); ?>
    </div>
  </article>

  <!-- ===== Tags + share ===== -->
  <div class="blog-post-foot">
    <div class="blog-tags">
<?php
      $tags = get_the_tags();
      if ( $tags ) {
        foreach ( $tags as $tag ) {
          printf( '<a class="blog-tag" href="%s">%s</a>', esc_url( get_tag_link( $tag->term_id ) ), esc_html( $tag->name ) );
        }
      }
?>
    </div>
  </div>

<?php if ( $author_name ) : ?>
  <!-- ===== Author card ===== -->
  <div class="blog-author">
    <div class="blog-author__inner">
      <span class="blog-author__avatar"><?php
        $av = get_avatar( $author_id, 128, '', $author_name, array( 'class' => '' ) );
        echo $av ? $av : esc_html( $initials );
      ?></span>
      <div>
        <div class="blog-author__name"><a href="<?php echo esc_url( $author_url ); ?>" style="text-decoration:none;color:inherit;"><?php echo esc_html( $author_name ); ?></a></div>
<?php if ( $author_bio ) : ?>
        <p class="blog-author__bio"><?php echo esc_html( $author_bio ); ?></p>
<?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php
// ===== Related posts: same primary category, newest, excluding this post =====
if ( $primary_cat ) :
	$related = new WP_Query( array(
		'category__in'        => array( $primary_cat->term_id ),
		'post__not_in'        => array( get_the_ID() ),
		'posts_per_page'      => 3,
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	) );
	if ( $related->have_posts() ) : ?>
  <section class="section blog-related">
    <div class="container" style="max-width:64rem;">
      <h2 class="t-headline-lg">Keep reading</h2>
      <div class="blog-related__grid">
<?php while ( $related->have_posts() ) : $related->the_post(); ?>
        <article class="blog-card">
          <a class="blog-card__media" href="<?php the_permalink(); ?>">
<?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'medium_large', array( 'alt' => esc_attr( get_the_title() ) ) );
      else : ?><img src="<?php echo esc_url( TLA_BASE ); ?>/assets/Loan Atlas logomark-18.png" alt="" style="object-fit:contain;background:var(--surface-container);padding:22%;" /><?php endif; ?>
          </a>
          <div class="blog-card__body">
            <span class="blog-card__cat"><?php echo esc_html( $primary_cat->name ); ?></span>
            <h3 class="blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div>
        </article>
<?php endwhile; ?>
      </div>
    </div>
  </section>
<?php
	endif;
	wp_reset_postdata();
endif;
?>

  <script>
    (function () {
      var bar = document.getElementById('blogProgress');
      var article = document.querySelector('.blog-post-layout');
      if (!bar || !article) return;
      function update() {
        var rect = article.getBoundingClientRect();
        var total = article.offsetHeight - window.innerHeight;
        var scrolled = Math.min(Math.max(-rect.top, 0), total);
        bar.style.width = total > 0 ? (scrolled / total * 100) + '%' : '0%';
      }
      window.addEventListener('scroll', update, { passive: true });
      window.addEventListener('resize', update);
      update();
    })();
  </script>

<?php include get_stylesheet_directory() . '/tla/partials/blog-foot.php'; ?>
