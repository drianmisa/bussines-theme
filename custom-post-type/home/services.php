<?php

// Registrar el Custom Post Type
function service_post_type() {
    $labels = [
        'name'               => 'service',
        'singular_name'      => 'service',
        'menu_name'          => 'service',
        'name_admin_bar'     => 'service',
        'add_new'            => 'Añadir Nuevo',
        'add_new_item'       => 'Añadir Nuevo service',
        'edit_item'          => 'Editar service',
        'new_item'           => 'Nuevo service',
        'view_item'          => 'Ver service',
        'search_items'       => 'Buscar service',
        'not_found'          => 'No se encontraron service',
        'not_found_in_trash' => 'No se encontraron service en la papelera',
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
        'supports'           => ['title', 'editor'],
    ];

    register_post_type('service', $args);
}
add_action('init', 'service_post_type');

