<?php

// Registrar el Custom Post Type
function way_post_type() {
    $labels = [
        'name'               => 'way',
        'singular_name'      => 'way',
        'menu_name'          => 'way',
        'name_admin_bar'     => 'way',
        'add_new'            => 'Añadir Nuevo',
        'add_new_item'       => 'Añadir Nuevo way',
        'edit_item'          => 'Editar way',
        'new_item'           => 'Nuevo way',
        'view_item'          => 'Ver way',
        'search_items'       => 'Buscar way',
        'not_found'          => 'No se encontraron way',
        'not_found_in_trash' => 'No se encontraron way en la papelera',
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

    register_post_type('way', $args);
}
add_action('init', 'way_post_type');

