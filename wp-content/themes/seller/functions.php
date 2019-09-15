<?php
/*
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/framework/customizer/_init.php';

/**
 *  Theme functions
 */
require get_template_directory() . '/framework/theme-functions.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom CSS
 */
require get_template_directory() . '/inc/css-mods.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';