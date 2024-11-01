<?php
add_action( 'after_setup_theme', 'theme_slug_setup' );

function theme_slug_setup() {
	add_theme_support( 'wp-block-styles' );
}

add_action( 'wp_enqueue_scripts', 'lemonade_enqueue_styles' );

function lemonade_enqueue_styles() {
    wp_enqueue_style(
		'lemonade-style', 
		get_stylesheet_uri()
	);

    wp_enqueue_style( 
        'lemonade-main',
        get_parent_theme_file_uri( 'assets/css/lemonade.css' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        'all'
    );

    
    wp_enqueue_style( 
        'main-tailwind',
        get_parent_theme_file_uri( 'assets/css/main-tailwind.css' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        'all'
    );
}