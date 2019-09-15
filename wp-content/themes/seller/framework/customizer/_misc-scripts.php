<?php
//upgrade
function seller_customize_register_misc( $wp_customize ) {
    $wp_customize->add_section(
        'seller_sec_upgrade',
        array(
            'title'     => __('Important Links','seller'),
            'priority'  => 1,
        )
    );

    $wp_customize->add_setting(
        'seller_important_links',
        array( 'sanitize_callback' => 'esc_textarea' )
    );

    $wp_customize->add_control(
        new Seller_WP_Customize_Upgrade_Control(
            $wp_customize,
            'seller_important_links',
            array(
                'settings'		=> 'seller_important_links',
                'section'		=> 'seller_sec_upgrade',
                'description'	=> '<a class="seller-important-links" href="https://inkhive.com/contact-us/" target="_blank">'.__('InkHive Support Forum', 'seller').'</a>
                                    <a class="seller-important-links" href="https://demo.inkhive.com/seller-plus/" target="_blank">'.__('Seller Live Demo', 'seller').'</a>
                                    <a class="seller-important-links" href="https://www.facebook.com/inkhivethemes/" target="_blank">'.__('We Love Our Facebook Fans', 'seller').'</a>
                                    <a class="seller-important-links" href="https://wordpress.org/support/theme/seller/reviews" target="_blank">'.__('Review Us', 'seller').'</a>'
            )
        )
    );

}
add_action( 'customize_register', 'seller_customize_register_misc' );