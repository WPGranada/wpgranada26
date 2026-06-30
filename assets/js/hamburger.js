document.addEventListener('DOMContentLoaded', function () {
	var btn = document.querySelector('.site-header__hamburger');
	var nav = document.querySelector('.site-header__right');
	if (!btn || !nav) return;

	btn.addEventListener('click', function () {
		var open = nav.classList.toggle('is-open');
		btn.setAttribute('aria-expanded', String(open));
		btn.classList.toggle('is-active', open);
	});

	document.addEventListener('click', function (e) {
		if (!e.target.closest('.site-header')) {
			nav.classList.remove('is-open');
			btn.setAttribute('aria-expanded', 'false');
			btn.classList.remove('is-active');
		}
	});
});
