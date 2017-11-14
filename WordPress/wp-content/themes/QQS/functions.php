<?php
    add_theme_support('post-thumbnails');   //Posts thumbnails

    //Custom excerpt
    function get_excerpt($excerpt, $length, $more_char = '...'){
        return mb_strimwidth($excerpt, 0, $length, $more_char);
    }
?>
