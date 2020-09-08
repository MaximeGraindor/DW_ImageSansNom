<?php

    register_nav_menu('main', 'Le mneu de naviguation principal');

    function isn_get_menu($location){
        $newArray = [];


        $locations = get_nav_menu_locations();
        $id = $locations[$location];
        $menu = wp_get_nav_menu_items($id);

        foreach($menu as $value => $object) {
            $item = new stdClass();
            $item->label = $object->title;
            $item->url = $object->url;

            $newArray[] = $item;
        }
        return $newArray;
    }