document.addEventListener('DOMContentLoaded', function () {
	var toggle = document.querySelector('.nav-toggle');
	var nav = document.getElementById('site-navigation');

	if (!toggle || !nav) {
		return;
	}

	toggle.addEventListener('click', function () {
		var open = document.body.classList.toggle('nav-open');
		toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
	});

	nav.addEventListener('click', function (event) {
		if (event.target.closest('a')) {
			document.body.classList.remove('nav-open');
			toggle.setAttribute('aria-expanded', 'false');
		}
	});
});
