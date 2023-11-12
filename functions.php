<?php
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


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . 'swiper/swiper.css', array() );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {
    wp_enqueue_script( 'scripts-simpleparallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js' );
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/swiper/swiper.js', array(), '9.2', true );
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/script.js', array(), '1.0', false );
}

function add_defer_attribute($tag, $handle) {
    if ( 'scripts' !== $handle )
      return $tag;
    return str_replace( ' src', ' defer="defer" src', $tag );
  }
  
  add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);


