<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'enfant-style-animations', get_stylesheet_directory_uri() . '/css/animations.css' );
    wp_enqueue_style(
        'swiper-css',
        get_stylesheet_directory_uri() . '/node_modules/swiper/swiper-bundle.min.css',
        array(), // ou ['jquery'] si tu l’utilises
        null,
    );
}

function theme_child_enqueue_scripts() {
    wp_enqueue_script(
        'app',
        get_stylesheet_directory_uri() . '/js/app.js',
        array('swiper-js'), // ou ['jquery'] si tu l’utilises
        '1.0',
        true // pour le charger dans le footer
    );
    wp_enqueue_script(
        'swiper-js',
        get_stylesheet_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js',
        array(), // ou ['jquery'] si tu l’utilises
        '11.2.6',
        true // pour le charger dans le footer
    );
    wp_enqueue_script(
        'skrollr',
        'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js',
        array(), // pas de dépendances
        '0.6.30',
        true // charger dans le footer
    );
    // initialisation automatique
    wp_add_inline_script('skrollr', 'skrollr.init();');
}
add_action('wp_enqueue_scripts', 'theme_child_enqueue_scripts');

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}