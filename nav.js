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
