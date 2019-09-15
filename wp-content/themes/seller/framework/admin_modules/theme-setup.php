<?php
/**
 * Seller functions and definitions
 *
 * @package Seller
 */


if ( ! function_exists( 'seller_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function seller_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        load_theme_textdomain( 'seller', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        //Guttenberg fullscreen content
        add_theme_support( 'align-wide' );

        add_theme_support('title-tag');

        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 640; /* pixels */
        }

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'seller' ),
            'footer' => __( 'Footer Menu', 'seller' ),
        ) );

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ) );

        // Setup the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'seller_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Enable support for HTML5 markup.
        add_theme_support( 'html5', array(
            'comment-list',
            'search-form',
            'comment-form',
            'gallery',
        ) );

        //Register custom thumbnail sizes
        add_image_size('grid',350,350,true); //For the Grid layout
        add_image_size('grid2',430,292,true); //For the Grid2 layout
        add_image_size('grid3',400,275,true); //For the Grid3 layout

        add_theme_support('woocommerce');
        add_theme_support( 'wc-product-gallery-lightbox' );

    }
endif; // seller_setup
add_action( 'after_setup_theme', 'seller_setup' );