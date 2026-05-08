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
