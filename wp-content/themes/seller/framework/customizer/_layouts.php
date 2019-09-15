<?php
function seller_customize_register_layouts( $wp_customize ) {

    //seller layout
    $wp_customize->add_panel( 'seller_design_panel', array(
        'priority'       => 3,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Design & Layout','seller'),
    ) );

    //Blog Layout
    $wp_customize->add_section(
        'seller_design_options',
        array(
            'title'     => __('Blog Layout','seller'),
            'priority'  => 0,
            'panel'     => 'seller_design_panel'
        )
    );

    $wp_customize->add_setting(
        'seller_blog_layout',
        array(
            'default'       => 'grid',
            'sanitize_callback' => 'seller_sanitize_blog_layout'
        )
    );

    function seller_sanitize_blog_layout( $input ) {
        if ( in_array($input, array('grid','grid2','grid3') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control(
        'seller_blog_layout',array(
            'label' => __('Select Layout','seller'),
            'settings' => 'seller_blog_layout',
            'section'  => 'seller_design_options',
            'type' => 'select',
            'choices' => array(
                'grid' => __('Basic Blog Layout','seller'),
                'grid2' => __('Grid - 2 Column', 'seller'),
                'grid3' => __('Grid - 3 Column', 'seller')
            )
        )
    );

    //sidebar style end

    $wp_customize->add_section(
        'seller_sidebar_options',
        array(
            'title'     => __('Sidebar Layout','seller'),
            'priority'  => 0,
            'panel'     => 'seller_design_panel'
        )
    );

    $wp_customize->add_setting(
        'seller_disable_sidebar',
        array( 'sanitize_callback' => 'seller_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'seller_disable_sidebar', array(
            'settings' => 'seller_disable_sidebar',
            'label'    => __( 'Disable Sidebar Everywhere.','seller' ),
            'section'  => 'seller_sidebar_options',
            'type'     => 'checkbox',
            'default'  => false
        )
    );

    $wp_customize->add_setting(
        'seller_disable_sidebar_home',
        array( 'sanitize_callback' => 'seller_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'seller_disable_sidebar_home', array(
            'settings' => 'seller_disable_sidebar_home',
            'label'    => __( 'Disable Sidebar on Home/Blog.','seller' ),
            'section'  => 'seller_sidebar_options',
            'type'     => 'checkbox',
            'active_callback' => 'seller_show_sidebar_options',
            'default'  => false
        )
    );

    $wp_customize->add_setting(
        'seller_disable_sidebar_front',
        array( 'sanitize_callback' => 'seller_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'seller_disable_sidebar_front', array(
            'settings' => 'seller_disable_sidebar_front',
            'label'    => __( 'Disable Sidebar on Front Page.','seller' ),
            'section'  => 'seller_sidebar_options',
            'type'     => 'checkbox',
            'active_callback' => 'seller_show_sidebar_options',
            'default'  => false
        )
    );


    $wp_customize->add_setting(
        'seller_sidebar_width',
        array(
            'default' => 4,
            'sanitize_callback' => 'seller_sanitize_positive_number' )
    );

    $wp_customize->add_control(
        'seller_sidebar_width', array(
            'settings' => 'seller_sidebar_width',
            'label'    => __( 'Sidebar Width','seller' ),
            'description' => __('Min: 25%, Default: 33%, Max: 40%','seller'),
            'section'  => 'seller_sidebar_options',
            'type'     => 'range',
            'active_callback' => 'seller_show_sidebar_options',
            'input_attrs' => array(
                'min'   => 3,
                'max'   => 5,
                'step'  => 1,
                'class' => 'sidebar-width-range',
                'style' => 'color: #0a0',
            ),
        )
    );

    /* Active Callback Function */
    function seller_show_sidebar_options($control) {

        $option = $control->manager->get_setting('seller_disable_sidebar');
        return $option->value() == false ;

    }

    //Custom Footer Text
    $wp_customize-> add_section(
        'seller_custom_footer',
        array(
            'title'			=> __('Custom Footer Settings','seller'),
            'priority'		=> 11,
            'panel'			=> 'seller_design_panel'
        )
    );

    $wp_customize->add_setting(
        'seller_fc_line_disable',
        array(
            'sanitize_callback' => 'seller_sanitize_checkbox',
            'transport' => 'postMessage'
        )
    );

    $wp_customize->add_control(
        'seller_fc_line_disable',
        array(
            'settings' => 'seller_fc_line_disable',
            'section'   => 'seller_custom_footer',
            'label'     => __('Disable Footer Credit Line', 'seller'),
            'type'  =>   'checkbox'
        )
    );

    $wp_customize->add_setting(
        'seller_footer_text',
        array(
            'default'		=> '',
            'sanitize_callback'	=> 'sanitize_text_field',
            'transport'     => 'postMessage'
        )
    );

    $wp_customize->add_control(
        'seller_footer_text',
        array(
            'section' => 'seller_custom_footer',
            'description'	=> __('Enter your Own Copyright Text.','seller'),
            'settings' => 'seller_footer_text',
            'type' => 'text'
        )
    );


    $wp_customize->add_section(
        'seller_page_title_sec',
        array(
            'title'     => __('Page Title Design','seller'),
            'priority'  => 0,
            'panel'     => 'seller_design_panel'
        )
    );

    $wp_customize->add_setting(
        'seller_page_title_set',
        array( 'sanitize_callback' => 'seller_sanitize_page_title_layout' ,'default' => 'default')
    );

    function seller_sanitize_page_title_layout( $input ) {
        if ( in_array($input, array('default','style1') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control(
        'seller_page_title_set',array(
            'label' => __('Select Design','seller'),
            'settings' => 'seller_page_title_set',
            'section'  => 'seller_page_title_sec',
            'type' => 'select',
            'choices' => array(
                'default' => __('Default','seller'),
                'style1' => __('style 1', 'seller'),
            )
        )
    );


}
add_action( 'customize_register', 'seller_customize_register_layouts' );