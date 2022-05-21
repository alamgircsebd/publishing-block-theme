<?php

function my_first_block_patterns_regsitry() {
    $my_patterns_category = array(
        'my_block_content' => array( 'label' => __( 'Main Content', 'my-block-theme' ) ),
    );

    foreach( $my_patterns_category as $name => $properties ) {
        if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
            register_block_pattern_category( $name, $properties );
        }
    }

    $block_patterns = [
        'my-test-patterns',
    ];

    foreach( $block_patterns as $block_pattern ) {
        $block_pattern_url = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

        register_block_pattern(
            'my-block-theme/' . $block_pattern ,
            require $block_pattern_url
        );
    }

}
add_action( 'init', 'my_first_block_patterns_regsitry' );