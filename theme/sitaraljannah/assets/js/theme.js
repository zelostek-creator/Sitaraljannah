/**
 * Sitar al Jannah front-end behaviour:
 *  - shadow on the sticky header once the page scrolls
 *  - fade-in of sections marked .sj-reveal
 *  - newsletter form feedback (wire it to your email provider via the
 *    `sitaraljannah:newsletter` event or by giving the form an action URL)
 */
( function () {
	'use strict';

	var header = document.querySelector( '.sj-header' );
	if ( header ) {
		var onScroll = function () {
			header.classList.toggle( 'is-scrolled', window.scrollY > 8 );
		};
		window.addEventListener( 'scroll', onScroll, { passive: true } );
		onScroll();
	}

	var reveals = document.querySelectorAll( '.sj-reveal' );
	if ( reveals.length ) {
		if ( 'IntersectionObserver' in window ) {
			var observer = new IntersectionObserver(
				function ( entries ) {
					entries.forEach( function ( entry ) {
						if ( entry.isIntersecting ) {
							entry.target.classList.add( 'is-visible' );
							observer.unobserve( entry.target );
						}
					} );
				},
				{ rootMargin: '0px 0px -10% 0px' }
			);
			reveals.forEach( function ( el ) {
				observer.observe( el );
			} );
		} else {
			reveals.forEach( function ( el ) {
				el.classList.add( 'is-visible' );
			} );
		}
	}

	document.querySelectorAll( '.sj-newsletter-form' ).forEach( function ( form ) {
		if ( form.getAttribute( 'action' ) ) {
			return; // A real provider endpoint is configured; let it submit.
		}
		form.addEventListener( 'submit', function ( event ) {
			event.preventDefault();
			var input = form.querySelector( 'input[type="email"]' );
			var message = form.parentNode.querySelector( '.sj-newsletter-message' );
			if ( ! input || ! input.checkValidity() ) {
				if ( message ) {
					message.textContent = 'Please enter a valid email address.';
				}
				return;
			}
			document.dispatchEvent(
				new CustomEvent( 'sitaraljannah:newsletter', { detail: { email: input.value } } )
			);
			if ( message ) {
				message.textContent = 'JazakAllahu khayran — you are on the list.';
			}
			form.reset();
		} );
	} );
} )();
