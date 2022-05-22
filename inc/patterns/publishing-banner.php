<?php
return [
    'title'      => __( 'Publishing Banner', 'my-first-block' ),
    'categories' => [ 'publishing_banner' ],
    'blockTypes' => [ 'core/publishing/banner' ],
    'content'    => '
                    <!-- wp:group {"align":"full","gradient":"pale-ocean","layout":{"inherit":true}} -->
                    <div class="wp-block-group alignfull has-pale-ocean-gradient-background has-background"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
                    <div class="wp-block-group"><!-- wp:group {"layout":{"inherit":false}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                    <div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
                    <h2>Aliquam finibus leo et arcu placerat, ac efficitur felis egestas.</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <p>Fusce orci odio, rutrum sed fermentum sed, feugiat eget orci. Curabitur placerat eu lacus et imperdiet. Donec viverra, lacus vel porta sollicitudin, nisi orci scelerisque lectus, at sagittis nisi ligula eu risus.</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph -->
                    <p>Cras dapibus turpis id eros consectetur lobortis. Nunc aliquet, metus sed egestas dictum, quam ex posuere odio, at consequat risus nulla a augue. Integer nec sollicitudin neque, rutrum lobortis lorem. Proin lacinia tincidunt laoreet. Nunc tristique massa in orci egestas, eu pellentesque nulla imperdiet. Duis nisl purus, pretium eget metus ultrices, tempus consectetur risus.</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":66,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                    <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="https://test.local/wp-content/uploads/2022/05/cool-girl-drawing-ideas-12.jpeg" alt="" class="wp-image-66"/></figure></div>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:spacer {"height":"30px"} -->
                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group -->
                ',
];