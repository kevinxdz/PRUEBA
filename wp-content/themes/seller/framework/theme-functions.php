<?php
/*
 * @package seller, Copyright Rohit Tripathi, rohitink.com
 * This file contains Custom Theme Related Functions.
 */
//Import Admin Modules
require get_template_directory() . '/framework/admin_modules/register-styles.php';
require get_template_directory() . '/framework/admin_modules/register-widgets.php';
require get_template_directory() . '/framework/admin_modules/pagination.php';
require get_template_directory() . '/framework/admin_modules/theme-setup.php';
require get_template_directory() . '/framework/admin_modules/admin-styles.php';


/*
** Function to check if Sidebar is enabled on Current Page 
*/

function seller_load_sidebar() {
    $load_sidebar = true;
    if ( get_theme_mod('seller_disable_sidebar') ) :
        $load_sidebar = false;
    elseif( get_theme_mod('seller_disable_sidebar_home') && is_home() )	:
        $load_sidebar = false;
    elseif( get_theme_mod('seller_disable_sidebar_front') && is_front_page() ) :
        $load_sidebar = false;
    endif;

    return  $load_sidebar;
}


/*
** Function to Get Theme Layout 
*/
function seller_get_blog_layout(){
    $ldir = 'framework/layouts/content';
    if (get_theme_mod('seller_blog_layout') ) :
        get_template_part( $ldir , get_theme_mod('seller_blog_layout') );
    else :
        get_template_part( $ldir ,'grid');
    endif;
}
add_action('seller_blog_layout', 'seller_get_blog_layout');



/*
**	Determining Sidebar and Primary Width
*/
function seller_primary_class() {
    $sw = esc_html(get_theme_mod('seller_sidebar_width',4));
    $class = "col-md-".(12-$sw);

    if ( !seller_load_sidebar() )
        $class = "col-md-12";

    echo $class;
}
add_action('seller_primary-width', 'seller_primary_class');

function seller_secondary_class() {
    $sw = esc_html(get_theme_mod('seller_sidebar_width',4));
    $class = "col-md-".$sw;

    echo $class;
}
add_action('seller_secondary-width', 'seller_secondary_class');

if (class_exists('woocommerce')) {
    /**
     * Set Default Thumbnail Sizes for Woo Commerce Product Pages, on Theme Activation
     */
    global $pagenow;
    if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) 			add_action( 'init', 'seller_woocommerce_image_dimensions', 1 );
    /**
     * Define image sizes
     */
    function seller_woocommerce_image_dimensions() {
        $catalog = array(
            'width' 	=> '600',	// px
            'height'	=> '600',	// px
            'crop'		=> 1 		// true
        );
        $single = array(
            'width' 	=> '600',	// px
            'height'	=> '600',	// px
            'crop'		=> 1 		// true
        );
        $thumbnail = array(
            'width' 	=> '250',	// px
            'height'	=> '250',	// px
            'crop'		=> 0 		// false
        );
        // Image sizes
        update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
        update_option( 'shop_single_image_size', $single ); 		// Single product image
        update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
    }
}