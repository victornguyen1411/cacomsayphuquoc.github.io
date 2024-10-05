<?php
/**
 * Good Wine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Good Wine
 * @since 1.0
 */


if (! function_exists('good_wine_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since 1.0
     *
     * @return void
     */
    function good_wine_support() {

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );
        add_theme_support('align-wide');

        // Enqueue editor styles.
        add_editor_style( 'style.css' );

    }
endif;
add_action( 'after_setup_theme', 'good_wine_support' );

// Enqueue Styles
require_once get_template_directory() . '/inc/theme-enqueue.php';

// Block Styles
require_once get_template_directory() . '/inc/block-styles.php';