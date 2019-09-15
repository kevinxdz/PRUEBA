<?php
function seller_customize_register_header( $wp_customize ) {
    //Replace Header Text Color with, separate colors for Title and Description
    //Override seller_site_titlecolor
    $wp_customize->remove_control('display_header_text');

    //header panel
    $wp_customize->add_panel( 'seller_header_panel', array(
        'priority'       => 2,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Header Settings','seller'),
    ) );

    //Logo Settings
    $wp_customize->add_section( 'title_tagline' , array(
        'title'      => __( 'Title, Tagline & Logo', 'seller' ),
        'priority'   => 30,
        'panel'      => 'seller_header_panel'
    ) );

    $wp_customize->add_setting( 'seller_logo' , array(
        'default'     => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'seller_logo',
            array(
                'label' => __('Upload Logo','seller'),
                'section' => 'title_tagline',
                'settings' => 'seller_logo',
                'priority' => 5,
            )
        )
    );

    $wp_customize->add_section( 'seller_header' , array(
        'title'      => __( 'Top Bar Settings', 'seller' ),
        'priority'   => 30,
        'panel'      => 'seller_header_panel'

    ) );

    $wp_customize->add_setting(
        'seller_hide_topbar',
        array(
            'sanitize_callback'  =>  'seller_sanitize_checkbox',
            'transport'     => 'postMessage'
        )
    );

    $wp_customize->add_control(
        'seller_hide_topbar', array(
            'settings' => 'seller_hide_topbar',
            'label'    => __( 'Hide Email & Phone', 'seller' ),
            'section'  => 'seller_header',
            'type'     => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'seller_email',
        array(
            'default'		=> '',
            'sanitize_callback'	=> 'sanitize_text_field',
            'transport'     => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'seller_email',
        array(
            'label' => __('Enter your Email here.','seller'),
            'section' => 'seller_header',
            'settings' => 'seller_email',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'seller_phone',
        array(
            'default'		=> '',
            'sanitize_callback'	=> 'sanitize_text_field',
            'transport'     => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'seller_phone',
        array(
            'label' => __('Enter your Phone No. here. ','seller'),
            'section' => 'seller_header',
            'settings' => 'seller_phone',
            'type' => 'text',
        )
    );

    //Settings For Logo Area

    $wp_customize->add_setting(
        'seller_hide_title_tagline',
        array(
            'sanitize_callback'  =>  'seller_sanitize_checkbox',
            'default'   =>  false,
            'transport' => 'postMessage'
        )
    );

    $wp_customize->add_control(
        'seller_hide_title_tagline', array(
            'settings' => 'seller_hide_title_tagline',
            'label'    => __( 'Hide Title and Tagline.', 'seller' ),
            'section'  => 'title_tagline',
            'type'     => 'checkbox',
        )
    );

    function seller_title_visible( $control ) {
        $option = $control->manager->get_setting('seller_hide_title_tagline');
        return $option->value() == false ;
    }
}
add_action( 'customize_register', 'seller_customize_register_header' );