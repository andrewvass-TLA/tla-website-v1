<?php
/**
 * single.php — a single blog post, rendered in the TLA blog design.
 * Source mockup: public/blog-post.html.
 *
 * Two-column layout: a wide white content card (the_content styled via
 * .tla-article) + a sticky sidebar (header image, jump-to TOC, resources).
 * Applies automatically to EVERY single post once this theme is active.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

the_post();

// --- Head vars ----------------------------------------------------------
$tla_title       = wp_get_document_title();
$tla_description = has_excerpt() ? wp_strip_all_tags( get_the_excerpt() ) : '';
if ( has_post_thumbnail() ) {
	$tla_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
}

// --- Derived display data ----------------------------------------------
$cats        = get_the_category();
$primary_cat = ! empty( $cats ) ? $cats[0] : null;
$author_name = get_the_author();
$word_count  = str_word_count( wp_strip_all_tags( get_the_content() ) );
$read_min    = max( 1, (int) round( $word_count / 200 ) );

include get_stylesheet_directory() . '/tla/partials/blog-head.php';
?>

  <div class="blog-progress" id="blogProgress"></div>

  <!-- ===== Post header (dark band; featured image revealed at right) ===== -->
<?php
  // The featured image is dynamic, so set it via an inline custom property and
  // add --has-image (the fade layer) only when the post actually has one.
  $hero_img   = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'large' ) : '';
  $head_class = $hero_img ? ' blog-post-head--has-image' : '';
  $head_style = $hero_img ? ' style="--blog-hero-img: url(\'' . esc_url( $hero_img ) . '\');"' : '';
?>
  <header class="blog-post-head<?php echo $head_class; ?>"<?php echo $head_style; ?>>
    <div class="blog-post-head__inner">
<?php $blog_url = get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ); ?>
      <nav class="blog-crumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( $blog_url ); ?>">Articles and Resources</a>
<?php if ( $primary_cat ) : ?>
        <span class="blog-crumbs__sep" aria-hidden="true">&rsaquo;</span>
        <a href="<?php echo esc_url( get_category_link( $primary_cat->term_id ) ); ?>"><?php echo esc_html( $primary_cat->name ); ?></a>
<?php endif; ?>
      </nav>
      <h1><?php the_title(); ?></h1>
<?php if ( has_excerpt() ) : ?>
      <p class="blog-post-head__dek"><?php echo esc_html( get_the_excerpt() ); ?></p>
<?php endif; ?>
      <div class="blog-post-head__meta">
        <span class="blog-post-head__avatar"><img src="<?php echo esc_url( TLA_BASE ); ?>/assets/Loan Atlas logomark-18.png" alt="The Loan Atlas" /></span>
        <span class="blog-post-head__byline"><strong><?php echo esc_html( $author_name ); ?></strong></span>
        <span class="blog-post-head__meta-dot"></span>
        <span><?php echo esc_html( get_the_date() ); ?></span>
        <span class="blog-post-head__meta-dot"></span>
        <span><?php echo (int) $read_min; ?> min read</span>
      </div>
    </div>
  </header>

  <!-- ===== Two-column shell (pulled up over the dark band) ===== -->
  <div class="blog-post-shell">
    <div class="blog-post-grid">

      <!-- LEFT: white content card -->
      <main class="blog-post-card">

        <!-- Mobile-only collapsible TOC (populated by JS) -->
        <details class="blog-toc-mobile">
          <summary>On this page
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </summary>
          <ul class="blog-toc" id="tocMobile"></ul>
        </details>

        <article class="tla-article" id="articleBody">
          <?php the_content(); ?>
        </article>

        <!-- Tags + share -->
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
          <div class="blog-share" id="blogShare">
            <span class="blog-share__label">Share</span>
            <a class="blog-share__btn" data-share="linkedin" href="#" target="_blank" rel="noopener" aria-label="Share on LinkedIn">
              <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.55V9h3.57v11.45zM22.22 0H1.77C.8 0 0 .78 0 1.74v20.52C0 23.22.8 24 1.77 24h20.45c.98 0 1.78-.78 1.78-1.74V1.74C24 .78 23.2 0 22.22 0z"/></svg>
            </a>
            <a class="blog-share__btn" data-share="facebook" href="#" target="_blank" rel="noopener" aria-label="Share on Facebook">
              <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07c0 6.02 4.39 11.01 10.13 11.93v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.69.24 2.69.24v2.97h-1.52c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.08 24 18.09 24 12.07z"/></svg>
            </a>
            <a class="blog-share__btn" data-share="twitter" href="#" target="_blank" rel="noopener" aria-label="Share on X">
              <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
            <a class="blog-share__btn" data-share="email" href="#" aria-label="Share by email">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-10 5L2 7"></path></svg>
            </a>
            <button type="button" class="blog-share__btn" data-share="copy" aria-label="Copy link">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
            </button>
          </div>
        </div>
      </main>

      <!-- RIGHT: sticky sidebar (featured image now lives in the hero) -->
      <aside class="blog-sidebar">
        <!-- TOC (desktop; populated by JS) -->
        <div class="blog-side-card blog-side-toc">
          <div class="blog-side-card__pad">
            <p class="blog-side-card__title">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
              On this page
            </p>
            <ul class="blog-toc" id="tocDesktop"></ul>
          </div>
        </div>

        <!-- Additional resources: latest posts overall -->
<?php
        $resources = new WP_Query( array(
          'post__not_in'        => array( get_the_ID() ),
          'posts_per_page'      => 4,
          'ignore_sticky_posts' => true,
          'no_found_rows'       => true,
        ) );
        if ( $resources->have_posts() ) : ?>
        <div class="blog-side-card">
          <div class="blog-side-card__pad">
            <p class="blog-side-card__title">Additional Resources</p>
<?php   while ( $resources->have_posts() ) : $resources->the_post();
          $rcats = get_the_category();
          $rcat  = ! empty( $rcats ) ? $rcats[0]->name : '';
?>
            <div class="blog-resource">
              <a class="blog-resource__thumb" href="<?php the_permalink(); ?>">
<?php       if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail', array( 'alt' => esc_attr( get_the_title() ) ) ); }
            else { echo '<img src="' . esc_url( TLA_BASE ) . '/assets/Loan Atlas logomark-18.png" alt="" style="object-fit:contain;background:var(--surface-container);padding:18%;" />'; } ?>
              </a>
              <div>
<?php       if ( $rcat ) : ?><span class="blog-resource__cat"><?php echo esc_html( $rcat ); ?></span><?php endif; ?>
                <p class="blog-resource__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              </div>
            </div>
<?php   endwhile; wp_reset_postdata(); ?>
          </div>
        </div>
<?php   endif; ?>
      </aside>

    </div>
  </div>

  <script src="<?php echo esc_url( TLA_BASE ); ?>/js/blog.js" defer></script>

<?php include get_stylesheet_directory() . '/tla/partials/blog-foot.php'; ?>
