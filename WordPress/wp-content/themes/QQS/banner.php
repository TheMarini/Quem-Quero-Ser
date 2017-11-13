<?php
    $imgPath = get_bloginfo('template_url') . '/assets/img/Index/banner/';  //relative path
    $dir = str_replace('\\', '/', __DIR__) . '/assets/img/Index/banner/';   //gets 'banner' directory
    $files = array_values(array_diff(scandir($dir), array('.', '..')));     //gets files from 'banner' directory
?>
