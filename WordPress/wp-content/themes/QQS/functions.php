<?php
    add_theme_support('post-thumbnails'); //Thumbnail do tema

    function wpdocs_custom_excerpt_length( $length ) {
        return 40;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>
