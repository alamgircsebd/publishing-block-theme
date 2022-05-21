<?php
/**
 * Publishing Block Theme Functions.
 * 
 * @package publishing
 * 
 * @since 0.0.1
 */

function publishing_block_theme_setups() {
    // Support added wp block styles
    add_theme_support( 'wp-block-styles' );

    // Added editor style
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'publishing_block_theme_setups' );

/**
 * Enqueue styles.
 * 
 * @package publishing
 * 
 * @since 0.0.1
 *
 * @return void
 */
function publishing_block_themes_styles() {
    // Register theme stylesheet.
    $theme_version  = wp_get_theme()->get( 'Version' );
    $version_string = is_string( $theme_version ) ? $theme_version : false;

    wp_register_style(
        'publishing-block-theme-style',
        get_template_directory_uri() . '/style.css',
        array(),
        time()
    );

    // Enqueue theme stylesheet.
    wp_enqueue_style( 'publishing-block-theme-style' );

}
add_action( 'wp_enqueue_scripts', 'publishing_block_themes_styles' );

// Require block patterns.
require get_template_directory() . '/inc/block-patterns.php';