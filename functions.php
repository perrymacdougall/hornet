<?php

if ( ! function_exists( 'hornet_setup' ) ) :
    function hornet_setup() {
        register_nav_menus(
            array(
                'Primary' => __( 'Header Menu', 'hornet' ),
                'Footer'  => __( 'Footer Menu', 'hornet' ),
                'Social'  => __( 'Social Links', 'hornet' )
            )
        );

        add_theme_support( 'custom-logo',
            array(
                'height'      => 190,
                'width'       => 190,
                'flex-height' => false,
                'flex-width'  => false
            )
        );

    }
endif;

add_action( 'after_setup_theme', 'hornet_setup' );

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts');
?>