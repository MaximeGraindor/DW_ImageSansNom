<?php

    function isn_extractString($string){
        $extract = substr($string, strpos($string, '=') + 1 );
        return $extract;
    }

    function path($path){
        return get_template_directory_uri() . $path;
    }

function isn_get_title($separator = '-', $displayTitleLeft = true) {
    $separator = ' ' . $separator . ' ';

    $title = trim(wp_title('', false, 'right'));

    if(!$title) {
        return get_bloginfo('name');
    }

    if($displayTitleLeft) {
        return $title . $separator . get_bloginfo('name');
    } else {
        return get_bloginfo('name') . $separator . $title;
    }
}