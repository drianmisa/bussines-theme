<?php

// Registrar el Custom Post Type
function abautus_post_type() {
    $labels = [
        'name'               => 'Abautus',
        'singular_name'      => 'Abautus',
        'menu_name'          => 'Abautus',
        'name_admin_bar'     => 'Abautus',
        'add_new'            => 'Añadir Nuevo',
        'add_new_item'       => 'Añadir Nuevo Abautus',
        'edit_item'          => 'Editar Abautus',
        'new_item'           => 'Nuevo Abautus',
        'view_item'          => 'Ver Abautus',
        'search_items'       => 'Buscar Abautus',
        'not_found'          => 'No se encontraron Abautus',
        'not_found_in_trash' => 'No se encontraron Abautus en la papelera',
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

    register_post_type('abautus', $args);
}
add_action('init', 'abautus_post_type');

// Agregar meta boxes al Custom Post Type
function add_abautus_meta_boxes() {
    add_meta_box(
        'abautus_meta_box',                // ID del meta box
        'Campos Personalizados',           // Título del meta box
        'render_abautus_meta_box',         // Callback para mostrar el contenido
        'abautus',                         // Pantalla en la que se mostrará el meta box
        'normal',                          // Contexto (normal, side, advanced)
        'high'                             // Prioridad
    );
}
add_action('add_meta_boxes', 'add_abautus_meta_boxes');

// Renderizar el contenido del meta box
function render_abautus_meta_box($post) {
    // Usar nonce para seguridad
    wp_nonce_field('abautus_meta_box_nonce', 'abautus_meta_box_nonce_field');

    // Obtener los valores actuales de los campos
    $button_text1 = get_post_meta($post->ID, '_button_text1', true);
    $button_url1 = get_post_meta($post->ID, '_button_url1', true);
    ?>

    <p>
        <label for="button_text1">Nombre del Botón 1:</label>
        <input type="text" id="button_text1" name="button_text1" value="<?php echo esc_attr($button_text1); ?>" />
    </p>
    <p>
        <label for="button_url1">URL del Botón 1:</label>
        <input type="text" id="button_url1" name="button_url1" value="<?php echo esc_url($button_url1); ?>" />
    </p>

    <?php
}

// Guardar los valores de los campos personalizados
function save_abautus_meta_box_data($post_id) {
    // Verificar nonce
    if (!isset($_POST['abautus_meta_box_nonce_field']) || !wp_verify_nonce($_POST['abautus_meta_box_nonce_field'], 'abautus_meta_box_nonce')) {
        return;
    }

    // Verificar si el usuario tiene permisos
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Guardar los datos de los campos
    if (isset($_POST['button_text1'])) {
        update_post_meta($post_id, '_button_text1', sanitize_text_field($_POST['button_text1']));
    }
    if (isset($_POST['button_url1'])) {
        update_post_meta($post_id, '_button_url1', esc_url_raw($_POST['button_url1']));
    }
}
add_action('save_post', 'save_abautus_meta_box_data');
