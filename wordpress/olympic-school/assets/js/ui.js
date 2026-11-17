document.addEventListener('DOMContentLoaded', () => {
  for (const [selector, target] of [['.menu-toggle', '#primary-nav'], ['.sidebar-toggle', '#app-sidebar']]) {
    const button = document.querySelector(selector);
    const panel = document.querySelector(target);
    if (!button || !panel) continue;
    button.addEventListener('click', () => {
      const open = panel.classList.toggle('is-open');
      button.setAttribute('aria-expanded', String(open));
    });
    panel.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => {
      panel.classList.remove('is-open');
      button.setAttribute('aria-expanded', 'false');
    }));
  }
  document.querySelectorAll('.answer-option').forEach((option) => {
    option.addEventListener('click', () => {
      document.querySelectorAll('.answer-option').forEach((item) => item.setAttribute('aria-pressed', 'false'));
      option.setAttribute('aria-pressed', 'true');
    });
  });
});
