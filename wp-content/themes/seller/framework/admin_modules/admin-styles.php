<?php
/**
 * Enqueue Scripts for Admin
 */
function seller_custom_wp_admin_style() {
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/frameworks/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'seller-admin_css', get_template_directory_uri() . '/assets/css/admin.css' );
}
add_action( 'customize_controls_print_styles', 'seller_custom_wp_admin_style' );