<?php
/**
 * Enqueue scripts and styles.
 */
function seller_scripts() {

    //Load Default Stylesheet
    wp_enqueue_style( 'seller-style', get_stylesheet_uri(),array(),12325 );

    //Load Font Awesome CSS
    wp_enqueue_style('font-awesome', get_template_directory_uri()."/assets/frameworks/font-awesome/css/font-awesome.min.css");

    //Google Fonts
    wp_enqueue_style('seller-title-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", esc_html(get_theme_mod('seller_title_font', 'Helvetica')) ).':100,300,400,700' );

    wp_enqueue_style('seller-body-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", esc_html(get_theme_mod('seller_body_font', 'Droid Sans')) ).':100,300,400,700' );
    //Load Bootstrap CSS
    wp_enqueue_style('bootstrap-style',get_template_directory_uri()."/assets/frameworks/bootstrap/css/bootstrap.min.css");

    //Load BxSlider CSS
    wp_enqueue_style('bxslider-style',get_template_directory_uri()."/assets/css/bxslider.css");

    //hover css
    wp_enqueue_style( 'hover-style', get_template_directory_uri() . '/assets/css/hover.min.css' );
    //Load Theme Structure File. Contains Orientation of the Theme.

    wp_enqueue_style( 'seller-theme-structure', get_template_directory_uri() . '/assets/theme-styles/css/'.get_theme_mod('seller_skins', 'default').'.css',array(),12388 );

    //Load Tooltipster Plugin Style and Skin
    wp_enqueue_style('tooltipster-style', get_template_directory_uri()."/assets/css/tooltipster.css");
    wp_enqueue_style('tooltipster-skin', get_template_directory_uri()."/assets/css/tooltipster-shadow.css");

    //Load Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri()."/assets/frameworks/bootstrap/js/bootstrap.min.js", array('jquery'));

    //Load Bx Slider Js
    wp_enqueue_script('bxslider-js', get_template_directory_uri()."/assets/js/bxslider.min.js", array('jquery'));

    //Tooltipster JS
    wp_enqueue_script('tooltipster-js', get_template_directory_uri()."/assets/js/tooltipster.js", array('jquery'));

    //Load Theme Specific JS
    wp_enqueue_script('custom-js', get_template_directory_uri()."/assets/js/custom.js", array('jquery','hoverIntent'), array(),12121);


    //Load Navigation js. This is Responsible for Converting the Main Menu into Responsive, when the browser width is switched.
    wp_enqueue_script( 'seller-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

    //Comes with _s Framework.
    wp_enqueue_script( 'seller-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

    //For the Default WordPress Comment's Reply System
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'seller_scripts' );