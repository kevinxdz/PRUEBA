<?php
function seller_customize_register_skins( $wp_customize ) {
    $wp_customize->remove_setting('header_textcolor');
    $wp_customize->add_setting('seller_site_titlecolor', array(
        'default'     => '#3a85ae',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'     => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'seller_site_titlecolor', array(
            'label' => __('Site Title Color','seller'),
            'section' => 'colors',
            'settings' => 'seller_site_titlecolor',
            'type' => 'color'
        ) )
    );

    $wp_customize->add_setting('seller_header_desccolor', array(
        'default'     => '#3a3a3a',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'     => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'seller_header_desccolor', array(
            'label' => __('Site Tagline Color','seller'),
            'section' => 'colors',
            'settings' => 'seller_header_desccolor',
            'type' => 'color'
        ) )
    );
    
    //Select the Default Theme Skin
    $wp_customize->add_setting(
        'seller_skins',
        array(
            'default'	=> 'default',
            'sanitize_callback' => 'seller_sanitize_skin',
            'transport'	=> 'refresh'
        )
    );

    //Select the Default Theme Skin
    function seller_sanitize_skin($input)
    {
        if (in_array($input, array('default', 'affair', 'green','coral')))
            return $input;
        else
            return '';
    }

    if(!function_exists('seller_skin_array')){
        function seller_skin_array(){
            return array(
                '#3A85AE' => 'default',
                '#6C5B7B' => 'affair',
                '#237A57' => 'green',
                '#bc1f00' => 'coral',
            );
        }
    }

    $seller_skin_array = seller_skin_array();


    $wp_customize->add_control(
        new Seller_Skin_Chooser(
            $wp_customize,
            'seller_skins',
            array(
                'settings'		=> 'seller_skins',
                'section'		=> 'colors',
                'label'			=> __( 'Select Skins', 'seller' ),
                'type'			=> 'skins',
                'choices'		=> $seller_skin_array,
            )
        )
    );
}
add_action( 'customize_register', 'seller_customize_register_skins' );