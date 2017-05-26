<?php
/**
 * Register various scripts and styles used for this theme
 */
function ppcourses_setup_scripts_styles() {
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ppcourses_setup_scripts_styles' );

