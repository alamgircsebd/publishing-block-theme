<?php
return [
    'title'      => __( 'My Test Block Pattern', 'my-first-block' ),
    'categories' => [ 'my_block_content' ],
    'blockTypes' => [ 'core/template/footer' ],
    'content'    => '
        <!-- wp:heading  -->
            <h2>This is Test Block Pattern</h2>
        <!-- /wp:heading  -->
        <!-- wp:paragraph  -->
            <p>This is test block pattern paragraph!</p>
        <!-- /wp:paragraph  -->
    ',
];