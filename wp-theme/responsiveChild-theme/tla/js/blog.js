/* The Loan Atlas — single blog post behaviors.
 * Source: public/blog-post.html inline script.
 * Builds the jump-to TOC from H2s, scrollspy highlight, reading-progress bar,
 * and wires the social share buttons. Loaded with `defer`, so the DOM is ready.
 */
(function () {
  var article = document.getElementById('articleBody');
  if (!article) return;

  /* 1) Build the TOC from H2s; give each an id; mirror into desktop + mobile. */
  var heads = article.querySelectorAll('h2');
  var tocDesktop = document.getElementById('tocDesktop');
  var tocMobile = document.getElementById('tocMobile');
  var links = [];
  heads.forEach(function (h, i) {
    if (!h.id) {
      h.id = 'section-' + (i + 1) + '-' + h.textContent.trim().toLowerCase()
        .replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '').slice(0, 40);
    }
    ['d', 'm'].forEach(function (which) {
      var target = which === 'd' ? tocDesktop : tocMobile;
      if (!target) return;
      var li = document.createElement('li');
      var a = document.createElement('a');
      a.href = '#' + h.id;
      a.textContent = h.textContent;
      a.dataset.target = h.id;
      li.appendChild(a);
      target.appendChild(li);
      if (which === 'd') links.push(a);
    });
  });
  /* No H2s → hide the TOC cards entirely. */
  if (!heads.length) {
    document.querySelectorAll('.blog-side-toc, .blog-toc-mobile').forEach(function (el) { el.style.display = 'none'; });
  }

  /* 2) Scrollspy — highlight the current section in the desktop TOC. */
  function onScroll() {
    var pos = window.scrollY + 120;
    var current = null;
    heads.forEach(function (h) { if (h.offsetTop <= pos) current = h.id; });
    links.forEach(function (a) { a.classList.toggle('is-active', a.dataset.target === current); });
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* 3) Reading-progress bar. */
  var bar = document.getElementById('blogProgress');
  function progress() {
    var rect = article.getBoundingClientRect();
    var total = article.offsetHeight - window.innerHeight;
    var scrolled = Math.min(Math.max(-rect.top, 0), total);
    if (bar) bar.style.width = total > 0 ? (scrolled / total * 100) + '%' : '0%';
  }
  window.addEventListener('scroll', progress, { passive: true });
  window.addEventListener('resize', progress);
  progress();

  /* 4) Social share buttons — build URLs from the current page + title. */
  var share = document.getElementById('blogShare');
  if (share) {
    var url = encodeURIComponent(window.location.href);
    var title = encodeURIComponent(document.title.replace(/\s*[—|-]\s*The Loan Atlas.*$/i, '').trim());
    var targets = {
      linkedin: 'https://www.linkedin.com/sharing/share-offsite/?url=' + url,
      facebook: 'https://www.facebook.com/sharer/sharer.php?u=' + url,
      twitter:  'https://twitter.com/intent/tweet?url=' + url + '&text=' + title,
      email:    'mailto:?subject=' + title + '&body=' + url
    };
    share.querySelectorAll('[data-share]').forEach(function (el) {
      var kind = el.dataset.share;
      if (targets[kind]) { el.setAttribute('href', targets[kind]); }
    });
    var copyBtn = share.querySelector('[data-share="copy"]');
    if (copyBtn) {
      copyBtn.addEventListener('click', function () {
        var done = function () {
          copyBtn.classList.add('blog-share__btn--copied');
          setTimeout(function () { copyBtn.classList.remove('blog-share__btn--copied'); }, 1600);
        };
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(window.location.href).then(done, done);
        } else {
          var t = document.createElement('textarea');
          t.value = window.location.href; document.body.appendChild(t); t.select();
          try { document.execCommand('copy'); } catch (e) {}
          document.body.removeChild(t); done();
        }
      });
    }
  }
})();
