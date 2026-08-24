(function () {
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.querySelector('.mobile-nav');
  if (!toggle || !nav) return;

  function close() {
    nav.classList.remove('is-open');
    toggle.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
  }

  toggle.addEventListener('click', function () {
    var opening = !nav.classList.contains('is-open');
    if (opening) {
      nav.classList.add('is-open');
      toggle.classList.add('is-open');
      toggle.setAttribute('aria-expanded', 'true');
    } else {
      close();
    }
  });

  nav.querySelectorAll('a').forEach(function (a) {
    a.addEventListener('click', close);
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') close();
  });
})();

/* V2 dropdown toggle */
(function () {
  var dropdowns = document.querySelectorAll('.nav__dropdown');
  if (!dropdowns.length) return;

  function closeAll() {
    dropdowns.forEach(function (d) {
      d.setAttribute('data-open', 'false');
      var btn = d.querySelector('.nav__dropdown-toggle');
      if (btn) btn.setAttribute('aria-expanded', 'false');
    });
  }

  dropdowns.forEach(function (drop) {
    var btn = drop.querySelector('.nav__dropdown-toggle');
    if (!btn) return;
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      var isOpen = drop.getAttribute('data-open') === 'true';
      closeAll();
      if (!isOpen) {
        drop.setAttribute('data-open', 'true');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  document.addEventListener('click', function (e) {
    var inside = false;
    dropdowns.forEach(function (d) { if (d.contains(e.target)) inside = true; });
    if (!inside) closeAll();
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeAll();
  });
})();

/* V2 hosts cards horizontal scroller */
(function () {
  document.querySelectorAll('.hosts').forEach(function (section) {
    var scroller = section.querySelector('.host-cards');
    var prev = section.querySelector('[data-dir="prev"]');
    var next = section.querySelector('[data-dir="next"]');
    if (!scroller || !prev || !next) return;

    function stepWidth() {
      var card = scroller.querySelector('.host-card');
      if (!card) return scroller.clientWidth * 0.8;
      var styles = getComputedStyle(scroller);
      var gap = parseFloat(styles.columnGap || styles.gap || '0');
      return card.getBoundingClientRect().width + gap;
    }

    function update() {
      var atStart = scroller.scrollLeft <= 4;
      var atEnd = scroller.scrollLeft + scroller.clientWidth >= scroller.scrollWidth - 4;
      prev.disabled = atStart;
      next.disabled = atEnd;
    }

    prev.addEventListener('click', function () {
      scroller.scrollBy({ left: -stepWidth(), behavior: 'smooth' });
    });
    next.addEventListener('click', function () {
      scroller.scrollBy({ left: stepWidth(), behavior: 'smooth' });
    });
    scroller.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
    update();
  });
})();

/* V2 path-finder state toggle */
(function () {
  var btn = document.getElementById('show-path-cta');
  if (!btn) return;
  var panel = btn.closest('.path-finder');
  if (!panel) return;
  var initial = panel.querySelector('[data-state="initial"]');
  var result = panel.querySelector('[data-state="result"]');
  btn.addEventListener('click', function () {
    if (initial) initial.hidden = true;
    if (result) {
      result.hidden = false;
      result.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  });
})();

/* V2 tabbed AI Tools showcase */
(function () {
  document.querySelectorAll('.wi2-tabs').forEach(function (tabs) {
    var pills = tabs.querySelectorAll('.wi2-tabs__pill');
    var panels = tabs.querySelectorAll('.wi2-tabs__panel');
    pills.forEach(function (pill, i) {
      pill.addEventListener('click', function () {
        pills.forEach(function (p) {
          p.classList.remove('wi2-tabs__pill--active');
          p.setAttribute('aria-selected', 'false');
        });
        panels.forEach(function (p) { p.classList.remove('wi2-tabs__panel--active'); });
        pill.classList.add('wi2-tabs__pill--active');
        pill.setAttribute('aria-selected', 'true');
        if (panels[i]) panels[i].classList.add('wi2-tabs__panel--active');
      });
    });
  });
})();

/* Training course page: sticky section nav (scroll-spy + collapsed state).
   Guarded on [data-trn-nav], so this is a no-op on every other page. */
(function () {
  var nav = document.querySelector('[data-trn-nav]');
  if (!nav) return;

  var tabs = Array.prototype.slice.call(nav.querySelectorAll('.trn-nav__tab'));
  if (!tabs.length) return;

  /* Pair each tab with the section it points at, dropping any dead anchors. */
  var pairs = tabs
    .map(function (tab) {
      var id = (tab.getAttribute('href') || '').replace(/^#/, '');
      var section = id ? document.getElementById(id) : null;
      return section ? { tab: tab, section: section } : null;
    })
    .filter(Boolean);
  if (!pairs.length) return;

  function setActive(tab) {
    pairs.forEach(function (p) {
      p.tab.classList.toggle('is-active', p.tab === tab);
    });
  }

  /* --- Collapsed state: reveal title + Enroll once the hero is behind us.
     Uses a sentinel above the nav rather than watching the nav itself, since a
     sticky element never stops intersecting its own scroll root. */
  var sentinel = document.querySelector('[data-trn-nav-sentinel]');
  if (sentinel && 'IntersectionObserver' in window) {
    new IntersectionObserver(
      function (entries) {
        nav.classList.toggle('is-stuck', !entries[0].isIntersecting);
      },
      { threshold: 0 }
    ).observe(sentinel);
  } else {
    nav.classList.add('is-stuck');
  }

  /* --- Scroll-spy. Highlight the last section whose top has passed the
     bottom edge of the header + nav. Recomputed on scroll (rAF-throttled)
     rather than via per-section observers, so short trailing sections and
     fast scrolls can't leave two tabs lit or none at all. */
  var ticking = false;

  /* The spy line must sit at, or just below, where an anchor jump parks a
     section — otherwise the section you just clicked is still "below the line"
     and the previous tab stays lit. Sections carry
     scroll-margin-top: calc(header + nav + 24px) in trainings.css, so read that
     computed value straight off the element rather than re-deriving it here.
     Falls back to measuring the two sticky bars if it is somehow unset. */
  function offset() {
    var sm = parseFloat(getComputedStyle(pairs[0].section).scrollMarginTop);
    if (sm && !isNaN(sm)) return sm + 2;
    var headerEl = document.querySelector('.site-header');
    return (headerEl ? headerEl.offsetHeight : 72) + nav.offsetHeight + 26;
  }

  function sync() {
    ticking = false;
    var line = offset();
    /* Default to the first tab so the rail is never blank while the reader is
       still above the first section. */
    var current = pairs[0].tab;

    for (var i = 0; i < pairs.length; i++) {
      if (pairs[i].section.getBoundingClientRect().top - line <= 0) {
        current = pairs[i].tab;
      }
    }

    /* At the very bottom the last section may never cross the line (it can be
       shorter than the viewport), so pin the final tab. */
    if (window.innerHeight + window.scrollY >= document.body.scrollHeight - 2) {
      current = pairs[pairs.length - 1].tab;
    }

    setActive(current);
  }

  function onScroll() {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(sync);
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll);
  sync();

  /* No click handler on purpose. The smooth scroll triggered by the anchor
     runs sync() as it goes, so the highlight follows the scroll and lands on
     the clicked section — one source of truth, no fighting between a click
     handler and the spy. CSS scroll-margin-top clears the header + nav, and
     html{scroll-behavior:smooth} is already global. */
})();
