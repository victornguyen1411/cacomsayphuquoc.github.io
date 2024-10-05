<?php
/**
 * Good Wine registers a theme styles and scripts
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Good Wine
 * @since 1.0
 */

// Registers a theme styles and scripts for front-end
if ( ! function_exists( 'good_wine' ) ) :
    function good_wine() {
        // Register theme stylesheet.
        wp_enqueue_style('good-wine-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
    }
endif;
add_action( 'wp_enqueue_scripts', 'good_wine' );

// Registers a theme styles and scripts for admin area
function good_wine_enqueue_admin_editor_style() {
    wp_enqueue_style('good-wine-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
}
add_action( 'admin_enqueue_scripts', 'good_wine_enqueue_admin_editor_style' );
