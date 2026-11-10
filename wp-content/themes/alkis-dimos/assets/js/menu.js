/**
 * Alkis Dimos – menu: οι υποκατηγορίες (π.χ. Gallery) ανοίγουν μόνο με κλικ.
 * Το WordPress ανοίγει όλα τα υπομενού μαζί με το menu· εδώ τα κρατάμε κλειστά
 * και τα ανοίγουμε/κλείνουμε εμείς όταν ο χρήστης πατήσει την κατηγορία.
 */
( function () {
	var OPEN = 'ad-sub-open';

	function toggles( root ) {
		return ( root || document ).querySelectorAll( '.ad-menu .wp-block-navigation-submenu__toggle' );
	}

	function setState( button, open ) {
		var item = button.closest( '.wp-block-navigation-item' );
		if ( item ) {
			item.classList.toggle( OPEN, open );
		}
		button.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
	}

	function closeAll() {
		toggles().forEach( function ( b ) {
			setState( b, false );
		} );
	}

	// Πριν φτάσει το κλικ στο WordPress: εμείς ανοίγουμε/κλείνουμε την κατηγορία.
	document.addEventListener( 'click', function ( e ) {
		var button = e.target.closest && e.target.closest( '.ad-menu .wp-block-navigation-submenu__toggle' );
		if ( button ) {
			e.preventDefault();
			e.stopImmediatePropagation();
			var item = button.closest( '.wp-block-navigation-item' );
			setState( button, ! ( item && item.classList.contains( OPEN ) ) );
			return;
		}
		// Όταν ανοίγει ή κλείνει το menu, όλες οι κατηγορίες ξεκινούν κλειστές.
		if ( e.target.closest && e.target.closest( '.ad-menu .wp-block-navigation__responsive-container-open, .ad-menu .wp-block-navigation__responsive-container-close' ) ) {
			setTimeout( closeAll, 0 );
		}
	}, true );

	// Το WordPress ξαναγράφει το aria-expanded· το επαναφέρουμε στη δική μας κατάσταση.
	var observer = new MutationObserver( function ( mutations ) {
		mutations.forEach( function ( m ) {
			var b = m.target;
			var item = b.closest( '.wp-block-navigation-item' );
			var want = item && item.classList.contains( OPEN ) ? 'true' : 'false';
			if ( b.getAttribute( 'aria-expanded' ) !== want ) {
				b.setAttribute( 'aria-expanded', want );
			}
		} );
	} );

	function init() {
		toggles().forEach( function ( b ) {
			setState( b, false );
			observer.observe( b, { attributes: true, attributeFilter: [ 'aria-expanded' ] } );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
