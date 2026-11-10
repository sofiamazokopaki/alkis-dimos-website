/**
 * Alkis Dimos – εφέ στο scroll.
 * Τα στοιχεία της σελίδας «ανεβαίνουν» απαλά όταν μπαίνουν στην οθόνη.
 * Χωρίς JavaScript ή με «λιγότερη κίνηση» όλα φαίνονται κανονικά.
 */
( function () {
	var root = document.documentElement;
	var reduce = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	// Κεφαλίδα: σκιά όταν κάνουμε scroll.
	var header = document.querySelector( '.wp-site-blocks > :first-child' );
	if ( header ) {
		var onScroll = function () {
			header.classList.toggle( 'is-scrolled', window.scrollY > 10 );
		};
		window.addEventListener( 'scroll', onScroll, { passive: true } );
		onScroll();
	}

	if ( reduce || ! ( 'IntersectionObserver' in window ) ) {
		return;
	}

	var main = document.querySelector( 'main' ) || document.body;
	var selector = [
		'h1', 'h2', 'h3', 'p', '.wp-block-buttons', '.wp-block-image', '.wp-block-embed',
		'.wp-block-list', '.wp-block-post-featured-image', '.wp-block-cover.ad-tile', '.wpcf7'
	].join( ',' );

	// Το hero έχει δικό του εφέ φόρτωσης· δεν το αγγίζουμε.
	var skip = '.ad-hero, .ad-parallax--hero, header, footer, .wp-block-navigation';

	var items = Array.prototype.filter.call( main.querySelectorAll( selector ), function ( el ) {
		if ( el.closest( skip ) ) {
			return false;
		}
		// Όχι στοιχεία μέσα σε άλλο στοιχείο που ήδη κινείται (π.χ. εικόνα μέσα σε gallery item).
		var parent = el.parentElement && el.parentElement.closest( selector );
		return ! ( parent && main.contains( parent ) && ! parent.closest( skip ) );
	} );

	items.forEach( function ( el ) {
		var delay = 0;
		var column = el.closest( '.wp-block-column' );
		if ( column && column.parentElement ) {
			delay = Array.prototype.indexOf.call( column.parentElement.children, column ) * 0.12;
		}
		if ( el.parentElement && el.parentElement.classList.contains( 'wp-block-gallery' ) ) {
			delay = Array.prototype.indexOf.call( el.parentElement.children, el ) * 0.08;
		}
		el.style.setProperty( '--ad-delay', Math.min( delay, 0.6 ) + 's' );
		el.classList.add( 'ad-reveal' );
	} );

	root.classList.add( 'ad-js' );

	var io = new IntersectionObserver( function ( entries ) {
		entries.forEach( function ( entry ) {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'is-visible' );
				io.unobserve( entry.target );
			}
		} );
	}, { rootMargin: '0px 0px -8% 0px', threshold: 0.12 } );

	items.forEach( function ( el ) {
		io.observe( el );
	} );
} )();
