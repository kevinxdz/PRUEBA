<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 1/10/2018
 * Time: 3:48 PM
 */


function seller_custom_css_mods() {

    $custom_css = "";

    //CSS Begins


    if (is_front_page()) :
        $custom_css .= ".header-title { border: none; }";
    endif;


    if ( get_theme_mod('seller_hide_topbar', true) ) :
        $custom_css .=  "#email-phone { display: none; }";
    endif;

    if ( get_theme_mod('seller_site_titlecolor') ) :
        $custom_css .=  "#masthead .site-title a { color: ".get_theme_mod('seller_site_titlecolor', '#e10d0d')."; }";
    endif;

    if ( get_theme_mod('seller_header_desccolor','#3a3a3a') ) :
        $custom_css .= "#masthead h2.site-description { color: ".esc_html(get_theme_mod('seller_header_desccolor','#3a3a3a'))."; }";
    endif;


    if ( get_theme_mod('seller_title_font') ) :
        //var_dump(get_theme_mod('seller_title_font'));
        $custom_css .= ".site-title,.header-title.title-font,h1,h2,.section-title { font-family: ".esc_html(get_theme_mod('seller_title_font','Helvetica'))."; }";
    endif;

    if ( get_theme_mod('seller_body_font') ) :
        $custom_css .= "body { font-family: ".esc_html(get_theme_mod('seller_body_font','Droid Sans'))."; }";
    endif;
    

    // Page header title
    if( get_theme_mod('seller_page_title_set')=='style1'):
        $custom_css .= ".header-title { background: #A1CAE0;
                        border: solid 3px #fff;
                        box-shadow: 5px 10px 1px #888888;
                        color: #fff;}";
    endif;

    //hide custom logo
    if( get_theme_mod('seller_hide_title_tagline')):
        $custom_css .= "#text-title-desc { display: none; }";
    endif;

    if ( get_theme_mod('seller_disable_footer_menu') ) :
        $custom_css .= "#site-navigation { display:none;}";
    endif;

    wp_add_inline_style( 'seller-theme-structure', wp_strip_all_tags($custom_css) );



}

add_action('wp_enqueue_scripts', 'seller_custom_css_mods');