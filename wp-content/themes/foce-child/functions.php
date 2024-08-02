<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/sass/style.css' );
}

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

function charger_scripts_theme_enfant() {
    
    wp_enqueue_script('foce-child-theme-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
    wp_localize_script('foce-child-theme-js', 'theme', array(
        'theme_directory' => get_stylesheet_directory_uri()
    ));
} 

    add_action('wp_enqueue_scripts', 'charger_scripts_theme_enfant');

    function enqueue_swiper_assets() {
        // Inclure le fichier CSS de Swiper.js
        wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.css');
    
        // Inclure le fichier JavaScript de Swiper.js
        wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js');
    }
    add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');

    function child_theme_scripts() {
        // Inclure Skrollr.js
        wp_enqueue_script(
            'skrollr', get_stylesheet_directory_uri() . '/assets/js/skrollr.min.js', array(), '0.6.30', true 
        );
    }
    add_action('wp_enqueue_scripts', 'child_theme_scripts');
    