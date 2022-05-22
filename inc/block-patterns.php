<?php

/**
 * Register publishing patterns
 * 
 * @package publishing
 * 
 * @since 0.0.1
 *
 * @return void
 */
function publishing_patterns_regsitry() {
    $patterns_category = array(
        'publishing_banner' => array( 'label' => __( 'Publishing Banners', 'publishing' ) ),
    );

    foreach ( $patterns_category as $name => $properties ) {
        if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
            register_block_pattern_category( $name, $properties );
        }
    }

    $block_patterns = [
        'publishing-banner',
    ];

    foreach( $block_patterns as $block_pattern ) {
        $block_pattern_url = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

        register_block_pattern(
            'publishing-block-theme/' . $block_pattern ,
            require $block_pattern_url
        );
    }
}
add_action( 'init', 'publishing_patterns_regsitry' );