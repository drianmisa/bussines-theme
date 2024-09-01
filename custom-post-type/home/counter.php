<?php

// Registrar el Custom Post Type
function Counter_post_type() {
    $labels = [
        'name'               => 'Counter',
        'singular_name'      => 'Counter',
        'menu_name'          => 'Counter',
        'name_admin_bar'     => 'Counter',
        'add_new'            => 'Añadir Nuevo',
        'add_new_item'       => 'Añadir Nuevo Counter',
        'edit_item'          => 'Editar Counter',
        'new_item'           => 'Nuevo Counter',
        'view_item'          => 'Ver Counter',
        'search_items'       => 'Buscar Counter',
        'not_found'          => 'No se encontraron Counter',
        'not_found_in_trash' => 'No se encontraron Counter en la papelera',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => 'home_menu',
        'query_var'          => true,
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'thumbnail'],
    ];

    register_post_type('Counter', $args);
}
add_action('init', 'Counter_post_type');

