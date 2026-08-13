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

    wp_enqueue_script(
        'artisan-coffee-roast-selector',
        get_template_directory_uri() . '/assets/js/roast-selector.js',
        array(),
        '1.0.0',
        true
    );

    wp_enqueue_script(
    'artisan-coffee-mobile-menu',
    get_template_directory_uri() . '/assets/js/mobile-menu.js',
    array(),
    '1.0.0',
    true
);
}

add_action( 'wp_enqueue_scripts', 'artisan_coffee_assets' );