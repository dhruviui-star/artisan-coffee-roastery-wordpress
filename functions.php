<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function artisan_coffee_setup() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'artisan-coffee' ),
        )
    );
}

add_action( 'after_setup_theme', 'artisan_coffee_setup' );


function artisan_coffee_assets() {

    wp_enqueue_style(
        'artisan-coffee-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
}

add_action( 'wp_enqueue_scripts', 'artisan_coffee_assets' );