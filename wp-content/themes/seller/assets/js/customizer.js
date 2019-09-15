/**
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

    //Fonts
    wp.customize( 'seller_title_font', function( value ) {
        value.bind( function( to ) {
            $( '.site-title-font, h1, h2, h3, .section-title, #top-menu a, #site-navigation a' ).css( 'font-family', to );
        } );
    } );
    wp.customize( 'seller_body_font', function( value ) {
        value.bind( function( to ) {
            $( 'body' ).css( 'font-family', to );
        } );
    } );


    wp.customize('seller_hide_title_tagline', function( value ) {
        value.bind(function( to ) {
            $('#text-title-desc').toggle();
        });
    });
    
    // Header text color.
    //Colors
    wp.customize( 'seller_site_titlecolor', function( value ) {
        value.bind( function( to ) {
            $( '.site-title a' ).css( 'color', to );
        } );
    } );
    wp.customize( 'seller_header_desccolor', function( value ) {
        value.bind( function( to ) {
            $( '.site-description' ).css( 'color', to );
        } );
    } );

	wp.customize( 'seller_hide_topbar', function( value ) {
		value.bind( function ( to ) {
			if ( to == true ) {
                $('#email-phone').css( 'display', 'none' );
            } else {
                $('#email-phone').css( 'display', 'inline-block' );
            }
		});
	});

	wp.customize( 'seller_hide_title_tagline', function( value ) {
		value.bind( function ( to ) {
			$('#text-title-desc').toggle();
		});
	});

	//top-bar
    wp.customize( 'seller_email', function( value ) {
        value.bind( function ( to ) {
            $('#email a').text( to );
        });
    });

    wp.customize( 'seller_phone', function( value ) {
        value.bind( function ( to ) {
            $('#phone a').text( to );
        });
    });

    //Social Icons
    wp.customize( 'seller_social_1', function( value ) {
        value.bind( function( to ) {
            var ClassNew	=	'fa fa-' + to;
            jQuery('#social-icons' ).find( 'i:eq(0)' ).attr( 'class', ClassNew );
        });
    });

    wp.customize( 'seller_social_2', function( value ) {
        value.bind( function( to ) {
            var ClassNew	=	'fa fa-' + to;
            jQuery('#social-icons' ).find( 'i:eq(1)' ).attr( 'class', ClassNew );
        });
    });

    wp.customize( 'seller_social_3', function( value ) {
        value.bind( function( to ) {
            var ClassNew	=	'fa fa-' + to;
            jQuery('#social-icons' ).find( 'i:eq(2)' ).attr( 'class', ClassNew );
        });
    });

    wp.customize( 'seller_social_4', function( value ) {
        value.bind( function( to ) {
            var ClassNew	=	'fa fa-' + to;
            jQuery('#social-icons' ).find( 'i:eq(3)' ).attr( 'class', ClassNew );
        });
    });

    wp.customize( 'seller_social_5', function( value ) {
        value.bind( function( to ) {
            var ClassNew	=	'fa fa-' + to;
            jQuery('#social-icons' ).find( 'i:eq(4)' ).attr( 'class', ClassNew );
        });
    });

    wp.customize( 'seller_social_6', function( value ) {
        value.bind( function( to ) {
            var ClassNew	=	'fa fa-' + to;
            jQuery('#social-icons' ).find( 'i:eq(5)' ).attr( 'class', ClassNew );
        });
    });
    
    wp.customize( 'seller_social_7', function( value ) {
        value.bind( function( to ) {
            var ClassNew	=	'fa fa-' + to;
            jQuery('#social-icons' ).find( 'i:eq(6)' ).attr( 'class', ClassNew );
        });
    });

    //Showcase
    wp.customize( 'seller_main_showcase_enable', function( value ) {
    	value.bind( function ( to ) {
    		$('#showcase').toggle();
    		// if ( to == true ) {
             //    $( '#showcase' ).css( {
             //        'display' : 'none',
             //    });
           	// } else {
             //    $( '#showcase' ).css( {
             //        'display' : 'block',
             //    });
           	// }
    	});
    });

    //Footer Text
    wp.customize( 'seller_footer_text', function( value ) {
        value.bind( function( to ) {
            $( '.sep' ).text( to );
        });
    });
    wp.customize( 'seller_fc_line_disable', function(value) {
        value.bind(function(to) {
            $('.credit-line').toggle();
        });
    } );


} )( jQuery );
