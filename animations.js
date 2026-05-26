(function () {
  'use strict';

  var prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function markRevealed(el) {
    el.classList.add('is-revealed');
  }

  function setupStaggers() {
    var parents = document.querySelectorAll('[data-reveal-stagger]');
    parents.forEach(function (parent) {
      var step = parseInt(parent.getAttribute('data-reveal-stagger'), 10);
      if (!step || isNaN(step)) step = 80;
      var max = 600;
      var children = parent.children;
      for (var i = 0; i < children.length; i++) {
        var child = children[i];
        if (!child.hasAttribute('data-reveal')) {
          child.setAttribute('data-reveal', 'up');
        }
        var delay = Math.min(i * step, max);
        child.style.setProperty('--reveal-delay', delay + 'ms');
      }
    });
  }

  function setupRevealObserver() {
    var targets = document.querySelectorAll('[data-reveal]');
    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
      targets.forEach(markRevealed);
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          markRevealed(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -8% 0px'
    });

    targets.forEach(function (el) { observer.observe(el); });
  }

  function setupHeroEntrance() {
    requestAnimationFrame(function () {
      document.body.classList.add('is-loaded');
    });
  }

  function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
  }

  function formatNumber(value, decimals, useCommas) {
    var fixed = value.toFixed(decimals);
    if (!useCommas) return fixed;
    var parts = fixed.split('.');
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    return parts.join('.');
  }

  function runCountUp(el) {
    var target = parseFloat(el.getAttribute('data-countup'));
    if (isNaN(target)) return;
    var prefix = el.getAttribute('data-countup-prefix') || '';
    var suffix = el.getAttribute('data-countup-suffix') || '';
    var duration = parseInt(el.getAttribute('data-countup-duration'), 10) || 1400;
    var raw = el.getAttribute('data-countup');
    var decimals = raw.indexOf('.') >= 0 ? raw.split('.')[1].length : 0;
    var useCommas = el.getAttribute('data-countup-commas') !== 'false';
    var start = performance.now();

    function tick(now) {
      var t = Math.min((now - start) / duration, 1);
      var eased = easeOutCubic(t);
      var current = target * eased;
      el.textContent = prefix + formatNumber(current, decimals, useCommas) + suffix;
      if (t < 1) {
        requestAnimationFrame(tick);
      } else {
        el.textContent = prefix + formatNumber(target, decimals, useCommas) + suffix;
      }
    }

    requestAnimationFrame(tick);
  }

  function setupCountUps() {
    var targets = document.querySelectorAll('[data-countup]');
    if (!targets.length) return;

    targets.forEach(function (el) {
      var target = parseFloat(el.getAttribute('data-countup'));
      var prefix = el.getAttribute('data-countup-prefix') || '';
      var suffix = el.getAttribute('data-countup-suffix') || '';
      var raw = el.getAttribute('data-countup');
      var decimals = raw.indexOf('.') >= 0 ? raw.split('.')[1].length : 0;
      var useCommas = el.getAttribute('data-countup-commas') !== 'false';
      el.textContent = prefix + formatNumber(prefersReducedMotion ? target : 0, decimals, useCommas) + suffix;
    });

    if (prefersReducedMotion || !('IntersectionObserver' in window)) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          runCountUp(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    targets.forEach(function (el) { observer.observe(el); });
  }

  function init() {
    setupStaggers();
    setupRevealObserver();
    setupHeroEntrance();
    setupCountUps();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
