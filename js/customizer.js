/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );


	// Hero Section
	
	wp.customize('webnwell_hero_button_bgColor', function(value){
		value.bind(function(newvalue){
			$(".hero_btn").css("background-color",newvalue);
		})
	});
	wp.customize('webnwell_hero_button_textColor', function(value){
		value.bind(function(newvalue){
			$(".hero_btn").css("color",newvalue);
		})
	});
	wp.customize('webnwell_hero_button_hover_bgColor', function(value){
		value.bind(function(newvalue){
			$(".hero_btn:hover").css("background-color",newvalue);
		})
	});
	wp.customize('webnwell_hero_button_hover_textColor', function(value){
		value.bind(function(newvalue){
			$(".hero_btn:hover").css("color",newvalue);
		})
	});
	
	wp.customize('text_setting', function(value){
		value.bind(function(newvalue){
			$("#service-default").html(newvalue);
		})
	});


	/**
	 * CTA
	 */

	wp.customize('webnwell_cta_button_bgColor', function(value){
		value.bind(function(newvalue){
			$(".btn_CTA").css("background-color",newvalue);
		})
	});
	wp.customize('webnwell_cta_button_textColor', function(value){
		value.bind(function(newvalue){
			$(".btn_CTA").css("color",newvalue);
		})
	});
	wp.customize('webnwell_cta_button_hover_bgColor', function(value){
		value.bind(function(newvalue){
			$(".btn_CTA:hover").css("background-color",newvalue);
		})
	});
	wp.customize('webnwell_cta_button_hover_textColor', function(value){
		value.bind(function(newvalue){
			$(".btn_CTA:hover").css("color",newvalue);
		})
	});


	/**
	 * Choose Us
	 */
	wp.customize('choose_repeater_setting', function(value){
		value.bind(function(newvalue){
			$(".chooseUs-list-item").html(newvalue);
		})
	});

	
	

}( jQuery ) );
