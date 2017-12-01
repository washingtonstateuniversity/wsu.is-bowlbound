( function( $, window ) {

	"use strict";

	var $footer_hero = $( "#footer-hero" );

	// Scrolls to the top of the page.
	$( ".back-to-top" ).on( "click", function( e ) {
		e.preventDefault();

		$( "html, body" ).animate( {
			scrollTop: 0
		}, 400 );
	} );

	// Slides up and fades content in.
	function slide_up_fade_in() {
		var window_height = $( window ).height();

		$( ".animate > *:not(animated)" ).each( function() {
			var $element = $( this ),
				element = this.getBoundingClientRect();

			if ( element.top <= window_height ) {
				$element.addClass( "animated" );
			}
		} );
	}

	// Just in case a visitor loads or refreshes the
	// page with an animating section in the viewport.
	slide_up_fade_in();

	// Handles the parallax effect.
	function parallax() {
		var offset = ( ( 989 < $( window ).width() ) && $( "body" ).hasClass( "admin-bar" ) ) ? 96 : 64;

		$( ".parallax" ).each( function() {
			var	$element = $( this ).find( ".animated" ),
				$section = $( this ).closest( "section" ),
				section = $section[ 0 ].getBoundingClientRect(),
				top_value = -1.25 * ( section.top - offset );

			if ( offset > section.top && offset * 2.5 < section.bottom - $element.height() ) {
				$element.css( "top", top_value + "px" );
			}
		} );
	}

	// Triggers the footer hero animation.
	function footer_hero() {
		var footer_hero = $footer_hero[ 0 ].getBoundingClientRect();

		if ( footer_hero.bottom <= $( window ).height() ) {
			$footer_hero.addClass( "start-animation" );
		}
	}

	$( window ).scroll( function() {
		window.requestAnimationFrame( slide_up_fade_in );

		if ( 693 < $( window ).width() ) {
			window.requestAnimationFrame( parallax );
		}

		if ( !$footer_hero.hasClass( "start-animation" ) ) {
			window.requestAnimationFrame( footer_hero );
		}
	} );
}( jQuery, window ) );
