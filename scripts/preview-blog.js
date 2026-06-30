#!/usr/bin/env node
/*
 * preview-blog.js — render the WordPress BLOG templates (home.php, single.php,
 * archive.php) to static HTML for local eyeballing, WITHOUT a PHP/WP install.
 *
 * Why this exists: the live blog is NOT a public/*.html mockup — it is driven
 * by these PHP templates + tla/css/blog.css + the tla_blog_* helpers in
 * functions.php. scripts/preview-pages.sh only covers the fullhtml partials,
 * so blog template changes had no local preview and shipped unverified.
 *
 * How it works: there's no PHP here, so we can't execute the templates. Instead
 * we run a tiny shim that understands the SPECIFIC PHP patterns these templates
 * use — WordPress template tags (the_title, the_permalink, …), the
 * `while ( have_posts() ) : the_post();` loop, `if/endif`, and the tla_blog_*
 * helpers — and drives them with a small set of FIXTURE posts. The static HTML
 * between the PHP tags is the REAL template markup, and we link the REAL theme
 * blog.css + inline the REAL header/footer partials, so markup/CSS regressions
 * surface exactly as they would on the live site.
 *
 * It does NOT validate PHP syntax or real WP behavior (no DB, no real loop) —
 * it's a visual/structure check, the blog-template analogue of the existing
 * _preview-*.html files. Treat a clean render here the same way: necessary, not
 * sufficient; still sanity-check the live page after deploy.
 *
 * Usage:  node scripts/preview-blog.js            # renders all three
 *         node scripts/preview-blog.js home       # just one
 * Output: wp-theme/_preview-tpl-<template>.html   (gitignored, like the others)
 */
'use strict';
const fs = require('fs');
const path = require('path');

const ROOT = path.resolve(__dirname, '..');
const THEME = path.join(ROOT, 'wp-theme', 'responsiveChild-theme');
const TLA_BASE = 'responsiveChild-theme/tla'; // relative to wp-theme/ (served root)

// ---- Fixture data: a handful of fake posts so the loop has something to show.
const FIXTURE_POSTS = [
  { title: 'The AI-Empowered Originator: building a predictable pipeline in 2026',
    cat: 'AI & Systems', author: 'Andrew Vass', date: 'June 18, 2026', read: 8,
    excerpt: "The originators winning right now aren't working harder — they've built systems that compound. Here's the framework our top performers use." },
  { title: '5 referral scripts that fill your calendar without cold calling',
    cat: 'Lead Generation', author: 'Andrew Vass', date: 'June 12, 2026', read: 6,
    excerpt: 'Word-for-word language to turn past clients and agents into a steady stream of warm introductions.' },
  { title: 'What the 2026 rate environment means for your refi strategy',
    cat: 'Market Trends', author: 'Andrew Vass', date: 'June 6, 2026', read: 5,
    excerpt: "How to position refinances now so you're first in line when the window opens." },
  { title: 'The peak-performance habits of $100M originators',
    cat: 'Mindset', author: 'Andrew Vass', date: 'May 29, 2026', read: 7,
    excerpt: 'The daily routines and mental models that separate the top 1% from everyone else.' },
  { title: 'Automating your post-close follow-up with AI',
    cat: 'AI & Systems', author: 'Andrew Vass', date: 'May 22, 2026', read: 4,
    excerpt: 'Set up a follow-up sequence once and let it nurture every borrower into a referral source.' },
  { title: 'Turning your CRM into a referral machine',
    cat: 'Lead Generation', author: 'Andrew Vass', date: 'May 8, 2026', read: 5,
    excerpt: "Most originators sit on a goldmine of past clients. Here's how to systematically mine it." },
];
const SAMPLE_IMG = `${TLA_BASE}/assets/TLA Blog Image.png`;
const SAMPLE_IMG_2 = `${TLA_BASE}/assets/ai-masterplan-ipad.png`;

// ---- Kitchen-sink article body: ONE of every content element the WordPress
//      editor can emit, so single.php's .tla-article CSS can be eyeballed in
//      full. Mirrors the_content() output (raw block HTML). Preview-only.
const SAMPLE_ARTICLE = `
<p>This is a standard introductory paragraph. It carries the opening idea of the
post and shows the base <strong>body copy</strong> treatment, an
<a href="#">inline link</a>, and how comfortably a full line measure reads inside
the white content card. WordPress emits paragraphs exactly like this.</p>

<h2 id="a-section-heading">An H2 section heading</h2>
<p>H2 introduces a major section and is what the on-this-page table of contents is
built from. The paragraph beneath returns to normal body rhythm.</p>

<h3>An H3 subheading (gold gradient)</h3>
<p>H3 nests under an H2 and renders as the deep-gold gradient text. Use it for the
sub-points within a section.</p>

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

<blockquote><p>This is a block quote — a pulled-out, italic line for a key insight or
a customer's words. It sits indented with a brass left rule.</p></blockquote>

<div class="tla-callout"><p><strong>Callout box.</strong> A boxed aside for a tip,
warning, or key takeaway. It uses the <code>.tla-callout</code> class — the surface
panel with a brass left border.</p></div>

<hr>

<h2 id="media-examples">Media: images and video</h2>
<p>A full-width inline image with rounded corners and a soft shadow:</p>
<img src="${SAMPLE_IMG_2}" alt="Sample inline image">

<p>The same image inside a <code>&lt;figure&gt;</code> with a caption:</p>
<figure>
  <img src="${SAMPLE_IMG}" alt="Sample figure image">
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

<h2 id="inline-formatting">Inline formatting & code</h2>
<p>Run-of-text can carry <strong>bold</strong>, <em>italic</em>, an
<a href="#">inline link</a>, and inline <code>code</code> snippets. A fenced code
block looks like this:</p>
<pre><code>function greet(name) {
  return \`Welcome to The Loan Atlas, \${name}!\`;
}</code></pre>

<p>A closing paragraph wraps up the sample so the last-child spacing rule can be
verified at the bottom of the article body.</p>
`;

// ---- A minimal "current post" cursor the template tags read from.
let CURSOR = -1;
const cur = () => FIXTURE_POSTS[CURSOR] || FIXTURE_POSTS[0];

// ---- WP/helper shims. Each returns the same MARKUP the real function prints.
//      `the_*` echo; `get_the_*` return a string. We approximate read-time the
//      same way tla_blog_card does (words / 200).
const esc = (s) => String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');

function tla_blog_card() {
  const p = cur();
  return `\t<article class="blog-card">
\t  <div class="blog-card__media"><img src="${SAMPLE_IMG}" alt=""></div>
\t  <div class="blog-card__body">
\t    <span class="blog-card__cat">${esc(p.cat)}</span>
\t    <h3 class="blog-card__title"><a href="#">${esc(p.title)}</a></h3>
\t    <p class="blog-card__excerpt">${esc(p.excerpt)}</p>
\t    <div class="blog-card__meta"><span>${esc(p.date)}</span><span class="blog-card__meta-dot"></span><span>${p.read} min read</span></div>
\t  </div>
\t</article>`;
}

function tla_blog_category_filter() {
  const cats = ['AI & Systems', 'Lead Generation', 'Sales & Scripts', 'Mindset', 'Market Trends'];
  return `<div class="blog-filter">
  <a class="blog-filter__chip blog-filter__chip--active" href="#">All</a>
  ${cats.map((c) => `<a class="blog-filter__chip" href="#">${esc(c)}</a>`).join('\n  ')}
</div>`;
}

function tla_blog_pagination() {
  return `<nav class="blog-pagination" aria-label="Blog pagination"><span class="is-current">1</span><a href="#">2</a><a href="#">3</a><span class="page-numbers dots">…</span><a href="#">Next →</a></nav>`;
}

// Render a single template by interpreting its PHP patterns against the fixtures.
function renderTemplate(name) {
  const file = path.join(THEME, `${name}.php`);
  let src = fs.readFileSync(file, 'utf8');

  // Strip everything from the top of the file through the line that includes
  // blog-head.php (head + setup vars) — the doc wrapper supplies <head>. Then
  // drop the blog-foot.php include (wrapper supplies scripts).
  const headIdx = src.search(/blog-head\.php/);
  if (headIdx !== -1) src = src.slice(src.indexOf('?>', headIdx) + 2);
  src = src.replace(/<\?php\s*include[^\n]*blog-foot\.php[^\n]*;\s*\?>/g, '');

  // single.php sets the hero featured image via PHP ($head_class + $head_style).
  // Reproduce that here so the preview shows the thumbnail in the dark header
  // band (this is the block immediately before the <header> tag).
  src = src.replace(/<\?php\s*\n?\s*\/\/ The featured image is dynamic[\s\S]*?\?>/,
    `<?php /* preview: hero image injected below */ ?>`);
  src = src.replace(
    /class="blog-post-head<\?php echo \$head_class; \?>"<\?php echo \$head_style; \?>/,
    `class="blog-post-head blog-post-head--has-image" style="--blog-hero-img: url('${SAMPLE_IMG}');"`);

  // the_content() -> the kitchen-sink sample article (single.php only).
  src = src.replace(/<\?php the_content\(\); \?>/g, SAMPLE_ARTICLE);

  // Featured image conditional FIRST (before the generic else/endif rules below,
  // which would otherwise eat its else-branch). Collapse to a sample image.
  src = src.replace(/<\?php if \( has_post_thumbnail\(\) \) :[\s\S]*?<\?php endif; \?>/g, `<img src="${SAMPLE_IMG}" alt="">`);

  // Grid presence conditional: `if ( have_posts() ) : … else : <empty> endif;`
  // We always have fixture posts, so keep the TRUE branch, drop the else body.
  src = src.replace(/<\?php if \( have_posts\(\) \) : \?>/g, '');
  src = src.replace(/<\?php else : \?>[\s\S]*?(?=<\?php endif; \?>)/g, '');

  // Expand the post loop: `<?php while ( have_posts() ) : the_post(); tla_blog_card(); endwhile; ?>`
  src = src.replace(/<\?php\s*while \( have_posts\(\) \) : the_post\(\); tla_blog_card\(\); endwhile; \?>/g, () => {
    let out = '';
    for (let i = 0; i < FIXTURE_POSTS.length; i++) { CURSOR = i; out += tla_blog_card() + '\n'; }
    return out;
  });

  // Featured hero: `if ( $is_first && have_posts() ) : the_post(); … endif;`
  // We keep the inner markup and bind tags to the FIRST fixture post.
  src = src.replace(/<\?php\s*\/\/ Featured hero[\s\S]*?\?>/, () => { CURSOR = 0; return ''; });
  src = src.replace(/<\?php endif; \?>/g, '');

  // Helper calls that emit blocks.
  src = src.replace(/<\?php tla_blog_category_filter\(\); \?>/g, tla_blog_category_filter());
  src = src.replace(/<\?php tla_blog_pagination\(\); \?>/g, tla_blog_pagination());

  // Inline template tags (echo vs short-if). Bind to CURSOR (featured = post 0).
  const P = () => cur();
  src = src
    .replace(/<\?php the_permalink\(\); \?>/g, '#')
    .replace(/<\?php the_title\(\); \?>/g, () => esc(P().title))
    .replace(/<\?php the_author\(\); \?>/g, () => esc(P().author))
    .replace(/<\?php echo esc_html\( get_the_date\(\) \); \?>/g, () => esc(P().date))
    .replace(/<\?php echo esc_html\( wp_trim_words\( get_the_excerpt\(\), \d+ \) \); \?>/g, () => esc(P().excerpt))
    .replace(/<\?php echo esc_url\( TLA_BASE \); \?>/g, TLA_BASE);

  // Featured category span (the `if ( $primary_cat )` line) -> show post 0's cat.
  CURSOR = 0;
  src = src.replace(/<\?php if \( \$primary_cat \) : \?>\s*<span class="blog-featured__cat">[\s\S]*?<\/span>\s*/,
    `<span class="blog-featured__cat">${esc(FIXTURE_POSTS[0].cat)}</span>\n`);

  src = src.replace(/<\?php echo \$is_first \? '([^']*)' : '([^']*)'; \?>/g, '$1');

  // Any remaining PHP we didn't model -> drop (and report, so we notice drift).
  const leftover = src.match(/<\?php[\s\S]*?\?>/g);
  if (leftover) {
    console.warn(`  [${name}] ${leftover.length} unmodeled PHP block(s) stripped — preview may differ from live:`);
    leftover.slice(0, 5).forEach((b) => console.warn('    ' + b.replace(/\s+/g, ' ').slice(0, 90)));
  }
  src = src.replace(/<\?php[\s\S]*?\?>/g, '');
  return src;
}

// Inline a partial's static markup (strip its PHP), for header/footer.
function inlinePartial(rel) {
  const p = path.join(THEME, rel);
  if (!fs.existsSync(p)) return '';
  return fs.readFileSync(p, 'utf8')
    // Resolve asset-base echoes before stripping the rest of the PHP, so logos resolve.
    .replace(/<\?php echo esc_url\( TLA_BASE \); \?>/g, TLA_BASE)
    .replace(/<\?php echo TLA_BASE; \?>/g, TLA_BASE)
    .replace(/<\?php[\s\S]*?\?>/g, '')
    .replace(/\$tla_active[^;]*;?/g, '');
}

function buildDoc(name) {
  const header = inlinePartial('tla/partials/header.php');
  const footer = inlinePartial('tla/partials/footer.php');
  const body = renderTemplate(name);
  return `<!doctype html><html lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>PREVIEW (template) — ${name}.php</title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=Antonio:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="${TLA_BASE}/css/styles.css">
<link rel="stylesheet" href="${TLA_BASE}/css/chrome.css">
<link rel="stylesheet" href="${TLA_BASE}/css/blog.css">
</head><body>
${header}
${body}
${footer}
<script src="${TLA_BASE}/js/nav.js"></script>
</body></html>`;
}

const targets = process.argv[2] ? [process.argv[2]] : ['home', 'single', 'archive'];
for (const name of targets) {
  if (!fs.existsSync(path.join(THEME, `${name}.php`))) { console.warn(`skip (missing): ${name}.php`); continue; }
  const out = path.join(ROOT, 'wp-theme', `_preview-tpl-${name}.html`);
  fs.writeFileSync(out, buildDoc(name));
  console.log(`built ${path.relative(ROOT, out)}`);
}
