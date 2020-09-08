<?php

register_post_type('book', [
    'label' => 'Livres',
    'labels' => [
        'name' => 'Livres',
        'singular_name' => 'Livre',
        'add_new' => 'Ajouter un livre',
        'add_new_item' => 'Ajouter un nouveau livre',
    ],
    'description' => 'Les livres de notre bibliothèque',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-book',
    'supports' => ['title','editor','thumbnail','excerpt'],
]);

register_post_type('exposition', [
    'label' => 'Expositions',
    'labels' => [
        'name' => 'Expositions',
        'singular_name' => 'Exposition',
        'add_new' => 'Ajouter une exsposition',
        'add_new_item' => 'Ajouter une nouvelle exposition',
    ],
    'description' => 'Les expositions',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-layout',
    'supports' => ['title','editor','thumbnail','excerpt'],
]);