<?php

// Registrar el Custom Post Type
function testimonials_post_type() {
    $labels = [
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonials',
        'menu_name'          => 'Testimonials',
        'name_admin_bar'     => 'Testimonials',
        'add_new'            => 'Añadir Nuevo',
        'add_new_item'       => 'Añadir Nuevo Testimonials',
        'edit_item'          => 'Editar Testimonials',
        'new_item'           => 'Nuevo Testimonials',
        'view_item'          => 'Ver Testimonials',
        'search_items'       => 'Buscar Testimonials',
        'not_found'          => 'No se encontraron Testimonials',
        'not_found_in_trash' => 'No se encontraron Testimonials en la papelera',
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

    register_post_type('Testimonials', $args);
}
add_action('init', 'testimonials_post_type');

