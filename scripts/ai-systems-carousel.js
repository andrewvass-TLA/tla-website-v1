(function () {
  const root = document.querySelector('[data-aisc]');
  if (!root) return;

  const interval = parseInt(root.dataset.interval, 10) || 5000;
  const card = root.querySelector('.aisc__card');
  const slides = Array.from(root.querySelectorAll('.aisc__slide'));
  const visuals = Array.from(root.querySelectorAll('.aisc__stage > [data-step]'));
  const steps = Array.from(root.querySelectorAll('.aisc__step'));
  const total = slides.length;

  const checkSVG = '<svg class="aisc__step-check" viewBox="0 0 256 256" fill="currentColor" aria-hidden="true"><path d="m229.66 77.66-128 128a8 8 0 0 1-11.32 0l-56-56a8 8 0 0 1 11.32-11.32L96 188.69 218.34 66.34a8 8 0 0 1 11.32 11.32Z"/></svg>';

  let current = 0;
  let timer = null;
  let paused = false;
  let visible = false;

  function setStep(next) {
    if (next === current) return;
    current = ((next % total) + total) % total;

    slides.forEach((el, i) => el.classList.toggle('is-active', i === current));
    visuals.forEach((el) => {
      const step = parseInt(el.dataset.step, 10);
      el.classList.toggle('is-active', step === current);
    });

    const activeSlide = slides[current];
    const layout = activeSlide ? activeSlide.dataset.layout : '';
    if (card) {
      card.classList.toggle('is-stacked', layout === 'stacked' || layout === 'chat');
      card.classList.toggle('is-chat', layout === 'chat');
    }

    steps.forEach((el, i) => {
      const isActive = i === current;
      const isComplete = i < current;
      el.classList.toggle('is-active', isActive);
      el.classList.toggle('is-complete', isComplete);
      if (isActive) {
        el.setAttribute('aria-current', 'step');
      } else {
        el.removeAttribute('aria-current');
      }
      const bubble = el.querySelector('.aisc__step-bubble');
      if (!bubble) return;
      if (isComplete) {
        bubble.innerHTML = checkSVG;
      } else {
        bubble.textContent = String(i + 1);
      }
    });

    const activePill = steps[current];
    if (activePill) {
      activePill.style.animation = 'none';
      activePill.offsetHeight;
      activePill.style.animation = '';
    }
  }

  function startTimer() {
    stopTimer();
    if (paused || !visible) return;
    timer = window.setTimeout(() => setStep(current + 1), interval);
  }

  function stopTimer() {
    if (timer) {
      window.clearTimeout(timer);
      timer = null;
    }
  }

  const observer = new MutationObserver(startTimer);
  slides.forEach(s => observer.observe(s, { attributes: true, attributeFilter: ['class'] }));

  steps.forEach(btn => {
    btn.addEventListener('click', () => {
      const next = parseInt(btn.dataset.step, 10);
      if (!Number.isNaN(next)) setStep(next);
    });
  });

  root.addEventListener('mouseenter', () => { paused = true; stopTimer(); });
  root.addEventListener('mouseleave', () => { paused = false; startTimer(); });
  root.addEventListener('focusin', () => { paused = true; stopTimer(); });
  root.addEventListener('focusout', () => { paused = false; startTimer(); });

  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        visible = entry.isIntersecting;
        if (visible) startTimer(); else stopTimer();
        chatDemos.forEach(d => d.sync());
      });
    }, { threshold: 0.25 });
    io.observe(root);
  } else {
    visible = true;
    startTimer();
  }

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function createChatDemo(el) {
    const step = parseInt(el.dataset.step, 10);
    const messages = (el.dataset.messages || '').split('|').map(s => s.trim()).filter(Boolean);
    const typedEl = el.querySelector('.aisc__chatdemo-typed');
    let msgIdx = 0;
    let charIdx = 0;
    let mode = 'typing';
    let timeoutId = null;
    let running = false;

    function clearTimer() {
      if (timeoutId) { window.clearTimeout(timeoutId); timeoutId = null; }
    }

    function schedule(ms, fn) {
      clearTimer();
      if (!running) return;
      timeoutId = window.setTimeout(() => { timeoutId = null; if (running) fn(); }, ms);
    }

    function tick() {
      if (!messages.length) return;
      const msg = messages[msgIdx];
      if (mode === 'typing') {
        charIdx++;
        typedEl.textContent = msg.slice(0, charIdx);
        if (charIdx >= msg.length) {
          mode = 'pause';
          schedule(1500, tick);
        } else {
          const jitter = 32 + Math.random() * 26;
          schedule(jitter, tick);
        }
      } else if (mode === 'pause') {
        mode = 'erasing';
        schedule(14, tick);
      } else if (mode === 'erasing') {
        charIdx--;
        typedEl.textContent = msg.slice(0, Math.max(0, charIdx));
        if (charIdx <= 0) {
          charIdx = 0;
          mode = 'gap';
          schedule(350, tick);
        } else {
          schedule(14, tick);
        }
      } else if (mode === 'gap') {
        msgIdx = (msgIdx + 1) % messages.length;
        mode = 'typing';
        schedule(50, tick);
      }
    }

    function start() {
      if (running) return;
      running = true;
      charIdx = 0;
      mode = 'typing';
      typedEl.textContent = '';
      if (reduceMotion) {
        typedEl.textContent = messages[msgIdx] || '';
        return;
      }
      schedule(120, tick);
    }

    function stop() {
      running = false;
      clearTimer();
      typedEl.textContent = '';
    }

    function sync() {
      const isActive = el.classList.contains('is-active') && visible;
      if (isActive) start(); else stop();
    }

    return { step, sync, start, stop };
  }

  const chatDemos = Array.from(root.querySelectorAll('.aisc__chatdemo')).map(createChatDemo);

  const visualObserver = new MutationObserver(() => chatDemos.forEach(d => d.sync()));
  visuals.forEach(v => visualObserver.observe(v, { attributes: true, attributeFilter: ['class'] }));

  chatDemos.forEach(d => d.sync());
})();
