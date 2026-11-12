<?php
/**
 * Sample content for the blog preview (see wp-stub.php). Edit freely — this is
 * preview-only data and never ships.
 *
 *   thumb  — file in wp-theme/responsiveChild-theme/tla/assets/, or '' to show
 *            the template's "no featured image" fallback.
 *   read   — target read time in minutes (body is padded to read*200 words so
 *            tla_blog_card()'s real word-count math lands on it).
 *   Post 1 is the featured post on /blog/ and the post shown by single.php.
 */

$TLA_CATEGORIES = array(
	(object) array( 'term_id' => 1, 'name' => 'AI & Systems', 'slug' => 'ai-systems', 'description' => 'Practical AI workflows and systems that help originators do more with less.' ),
	(object) array( 'term_id' => 2, 'name' => 'Lead Generation', 'slug' => 'lead-generation', 'description' => 'Proven ways to fill your pipeline with warm referrals.' ),
	(object) array( 'term_id' => 3, 'name' => 'Sales & Scripts', 'slug' => 'sales-scripts', 'description' => 'Word-for-word language for every stage of the loan.' ),
	(object) array( 'term_id' => 4, 'name' => 'Mindset', 'slug' => 'mindset', 'description' => 'The habits and mental models of top producers.' ),
	(object) array( 'term_id' => 5, 'name' => 'Market Trends', 'slug' => 'market-trends', 'description' => 'What the rate environment means for your business.' ),
);

$TLA_TAGS = array(
	(object) array( 'term_id' => 101, 'name' => 'AI' ),
	(object) array( 'term_id' => 102, 'name' => 'Pipeline' ),
	(object) array( 'term_id' => 103, 'name' => 'Systems' ),
);

// The full single-post body: one of every element the WordPress editor emits,
// plus the [tla_cta] shortcode bands, so .tla-article / .ctab-* CSS can be
// checked in full.
$tla_sample_img   = TLA_PREVIEW_URI . '/tla/assets/TLA Blog Image.png';
$tla_sample_img_2 = TLA_PREVIEW_URI . '/tla/assets/ai-masterplan-ipad.png';
$tla_kitchen_sink = <<<HTML
<p>This is a standard introductory paragraph. It carries the opening idea of the
post and shows the base <strong>body copy</strong> treatment, an
<a href="#">inline link</a>, and how comfortably a full line measure reads inside
the white content card. WordPress emits paragraphs exactly like this.</p>

<h2 id="a-section-heading">An H2 section heading</h2>
<p>H2 introduces a major section and is what the on-this-page table of contents is
built from. The paragraph beneath returns to normal body rhythm.</p>

<h3 class="wp-block-heading">An H3 subheading (gold gradient)</h3>
<p>H3 nests under an H2 and renders as the deep-gold gradient text. Use it for the
sub-points within a section.</p>

<h3 class="wp-block-heading"><strong>An H3 the editor bolded (should still be gold)</strong></h3>
<p>Editors often bold a whole heading. Live posts do this a lot, so it must render
the same as a plain H3.</p>

<h3 class="wp-block-heading"><em>An italic H3 (should still be gold)</em></h3>
<p>Same check for italics.</p>

<h4>An H4 label</h4>
<p>H4 is the smallest heading the editor should reach for — a compact uppercase
label above a tight block of copy.</p>

<p>Below is a <strong>bulleted list</strong> for unordered points:</p>
<ul>
  <li>First unordered item with a brass marker.</li>
  <li>Second item — lists wrap and indent cleanly.</li>
  <li>Third item to show vertical rhythm between rows.</li>
</ul>

<p>And a <strong>numbered list</strong> for ordered steps:</p>
<ol>
  <li>First step in a sequence.</li>
  <li>Second step, with a bold brass numeral.</li>
  <li>Third step to close the sequence.</li>
</ol>

[tla_cta offer="ai"]

<blockquote><p>This is a block quote — a pulled-out, italic line for a key insight or
a customer's words. It sits indented with a brass left rule.</p></blockquote>

<div class="tla-callout"><p><strong>Callout box.</strong> A boxed aside for a tip,
warning, or key takeaway. It uses the <code>.tla-callout</code> class — the surface
panel with a brass left border.</p></div>

<hr>

<h2 id="media-examples">Media: images and video</h2>
<p>A full-width inline image with rounded corners and a soft shadow:</p>
<img src="{$tla_sample_img_2}" alt="Sample inline image">

<p>The same image inside a <code>&lt;figure&gt;</code> with a caption:</p>
<figure>
  <img src="{$tla_sample_img}" alt="Sample figure image">
  <figcaption>Figure caption — centered, muted, smaller than body copy.</figcaption>
</figure>

<p>An embedded video (YouTube oEmbed renders as this block on the live site):</p>
<figure class="wp-block-embed wp-block-embed-youtube">
  <div class="wp-block-embed__wrapper">
    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Sample embedded video" allowfullscreen loading="lazy"></iframe>
  </div>
  <figcaption>An embedded video keeps a responsive 16:9 frame inside the card.</figcaption>
</figure>

<hr>

<h2 id="cta-bands">CTA bands</h2>
<p>Every <code>[tla_cta]</code> offer, rendered by the real shortcode in functions.php:</p>

[tla_cta offer="scripts"]

[tla_cta offer="plp"]

[tla_cta offer="podcast"]

[tla_cta offer="join"]

[tla_cta offer="consult"]

<h2 id="inline-formatting">Inline formatting &amp; code</h2>
<p>Run-of-text can carry <strong>bold</strong>, <em>italic</em>, an
<a href="#">inline link</a>, and inline <code>code</code> snippets. A fenced code
block looks like this:</p>
<pre><code>function greet(name) {
  return `Welcome to The Loan Atlas, \${name}!`;
}</code></pre>

<p>A closing paragraph wraps up the sample so the last-child spacing rule can be
verified at the bottom of the article body.</p>
HTML;

$tla_post_rows = array(
	// title, cat id, date, read min, thumb, excerpt
	array( 'The AI-Empowered Originator: building a predictable pipeline in 2026', 1, 'November 10, 2026', 8, 'TLA Blog Image.png',
		"The originators winning right now aren't working harder — they've built systems that compound. Here's the framework our top performers use." ),
	array( '5 referral scripts that fill your calendar without cold calling', 2, 'November 3, 2026', 6, '5-scripts-hero.png',
		'Word-for-word language to turn past clients and agents into a steady stream of warm introductions.' ),
	array( 'What the 2026 rate environment means for your refi strategy', 5, 'October 27, 2026', 5, 'hero image.png',
		"How to position refinances now so you're first in line when the window opens." ),
	array( 'The peak-performance habits of $100M originators', 4, 'October 20, 2026', 7, '',
		'The daily routines and mental models that separate the top 1% from everyone else.' ),
	array( 'Automating your post-close follow-up with AI', 1, 'October 13, 2026', 4, 'ai-masterplan-ipad.png',
		'Set up a follow-up sequence once and let it nurture every borrower into a referral source.' ),
	array( 'Turning your CRM into a referral machine', 2, 'October 6, 2026', 5, 'TLA Blog Image.png',
		"Most originators sit on a goldmine of past clients. Here's how to systematically mine it." ),
	array( 'The pre-approval conversation that wins the listing agent', 3, 'September 29, 2026', 6, 'scripts-presentation-templates.png',
		'What to say in the first five minutes so agents send you every buyer they meet.' ),
	array( 'Why your follow-up stops at day three (and how to fix it)', 3, 'September 22, 2026', 5, '5-scripts-hero.png',
		'Most leads go cold from silence, not rejection. A simple cadence that keeps you top of mind.' ),
);

$TLA_POSTS = array();
foreach ( $tla_post_rows as $i => $r ) {
	$TLA_POSTS[] = (object) array(
		'ID'      => 1000 + $i,
		'title'   => $r[0],
		'cats'    => array( $r[1] ),
		'tags'    => array( 101, 102, 103 ),
		'author'  => 'The Loan Atlas',
		'date'    => $r[2],
		'thumb'   => $r[4],
		'excerpt' => $r[5],
		'content' => 0 === $i ? $tla_kitchen_sink : str_repeat( 'Sample body copy for the read-time estimate. ', (int) ( $r[3] * 200 / 7 ) ),
	);
}
unset( $tla_post_rows, $i, $r );
