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

	// Trigger the team logo visibility animation.
	function team_logos() {
		var window_height = $( window ).height();

		$( ".details--school" ).each( function() {
			var $element = $( this ),
				element = this.getBoundingClientRect();

			if ( element.top <= window_height ) {
				$element.addClass( "animated" );
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
		window.requestAnimationFrame( team_logos );

		if ( !$footer_hero.hasClass( "start-animation" ) ) {
			window.requestAnimationFrame( footer_hero );
		}
	} );
}( jQuery, window ) );
