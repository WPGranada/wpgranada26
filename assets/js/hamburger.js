( function () {
	'use strict';

	function initMobileNav() {
		var overlay = document.getElementById( 'wpgranada-mobile-overlay' );
		if ( ! overlay ) { return; }

		var btn = document.querySelector( '.site-header__hamburger' );
		if ( ! btn ) { return; }

		var closeBtn = overlay.querySelector( '.wpgranada-mobile-overlay__close' );

		function openMenu() {
			overlay.classList.add( 'is-open' );
			overlay.setAttribute( 'aria-hidden', 'false' );
			btn.setAttribute( 'aria-expanded', 'true' );
			document.body.style.overflow = 'hidden';
		}

		function closeMenu() {
			overlay.classList.remove( 'is-open' );
			overlay.setAttribute( 'aria-hidden', 'true' );
			btn.setAttribute( 'aria-expanded', 'false' );
			document.body.style.overflow = '';
		}

		btn.addEventListener( 'click', openMenu );

		if ( closeBtn ) {
			closeBtn.addEventListener( 'click', closeMenu );
		}

		overlay.addEventListener( 'click', function ( e ) {
			if ( e.target === overlay ) { closeMenu(); }
		} );

		document.addEventListener( 'keydown', function ( e ) {
			if ( 'Escape' === e.key ) { closeMenu(); }
		} );

		window.addEventListener( 'resize', function () {
			if ( window.innerWidth > 781 ) { closeMenu(); }
		} );
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', initMobileNav );
	} else {
		initMobileNav();
	}
} )();
