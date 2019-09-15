<?php

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function seller_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Sidebar', 'seller' ), /* Primary Sidebar for Everywhere else */
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title site-title-font">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'seller' ), /* Primary Sidebar for Everywhere else */
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title site-title-font">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'seller' ), /* Primary Sidebar for Everywhere else */
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title site-title-font">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'seller' ), /* Primary Sidebar for Everywhere else */
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title site-title-font">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'seller' ), /* Primary Sidebar for Everywhere else */
        'id'            => 'footer-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title site-title-font">',
        'after_title'   => '</h3>',
    ) );


}
add_action( 'widgets_init', 'seller_widgets_init' );