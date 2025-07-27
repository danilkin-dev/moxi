function metricsInit(ymIdentifier) {

  document.addEventListener('click', function (event) {
    const target = event.target;

    if (target.closest('[data-click-goal]')) {
      let goal = target.closest('[data-click-goal]').getAttribute('data-click-goal');

      if (goal && ym) ym(ymIdentifier, 'reachGoal', goal);
      if (goal && typeof gtag !== "undefined") gtag('event', 'click', { 'event_category': 'button', 'event_label': goal });
    }

  });

  document.addEventListener('fetchit:success', (event) => {
    const { response, form } = event.detail;

    if (form.getAttribute('data-submit-goal')) {
      let goal = form.getAttribute('data-submit-goal');

      if (goal && ym) ym(ymIdentifier, 'reachGoal', goal);
      if (goal && typeof gtag !== "undefined") gtag('event', 'submit', { 'event_category': 'button', 'event_label': goal });
    }
  });

  miniShop2.Callbacks.add('Order.submit.response.success', 'cart_add', function (status) {
    if (ym) ym(ymIdentifier, 'reachGoal', 'order_send');
    if (typeof gtag !== "undefined") gtag('event', 'submit', { 'event_category': 'button', 'event_label': 'order_send' });
  });
};
