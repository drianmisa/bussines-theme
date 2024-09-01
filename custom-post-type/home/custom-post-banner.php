<?php
   function banner_post_type() {
    $labels = [
        'name'               => 'Banner',
        'singular_name'      => 'head',
        'menu_name'          => 'Banner',
        'name_admin_bar'     => 'head',
        'add_new'            => 'Añadir Nuevo',
        'add_new_item'       => 'Añadir Nuevo head',
        'new_item'           => 'Nuevo head',
        'edit_item'          => 'Editar head',
        'view_item'          => 'Ver head',
        'all_items'          => 'Baner hero',
        'search_items'       => 'Buscar Banner',
        'not_found'          => 'No se encontraron Banner',
        'not_found_in_trash' => 'No se encontraron Banner en la papelera',
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

        register_post_type('Banner', $args);
    }
    add_action('init', 'banner_post_type');

// Hook para agregar los campos personalizados en el admin
add_action('add_meta_boxes', 'add_banner_meta_boxes');

function add_banner_meta_boxes() {
    add_meta_box(
        'banner_meta_box',      // ID del meta box
        'Campos Personalizados', // Título del meta box
        'render_banner_meta_box', // Callback para mostrar el contenido
        'Banner',                // Pantalla en la que se mostrará el meta box
        'normal',                // Contexto (normal, side, advanced)
        'high'                   // Prioridad
    );
}

// Renderizar el contenido del meta box
function render_banner_meta_box($post) {
    // Usar nonce para seguridad
    wp_nonce_field('banner_meta_box_nonce', 'banner_meta_box_nonce_field');

    // Obtener los valores actuales de los campos
    $button_text1 = get_post_meta($post->ID, '_button_text1', true);
    $button_url1 = get_post_meta($post->ID, '_button_url1', true);
    $button_text2 = get_post_meta($post->ID, '_button_text2', true);
    $button_url2 = get_post_meta($post->ID, '_button_url2', true);
   
    ?>

    <p>
        <label for="button_text">Nombre del Botón 1:</label>
        <input type="text" id="button_text1" name="button_text1" value="<?php echo esc_attr($button_text1); ?>" />
    </p>
    <p>
        <label for="button_url">URL del Botón1:</label>
        <input type="text" id="button_url1" name="button_url1" value="<?php echo esc_attr($button_url1); ?>" />
    </p>

    <p>
        <label for="button_text">Nombre del Botón 2:</label>
        <input type="text" id="button_text2" name="button_text2" value="<?php echo esc_attr($button_text2); ?>" />
    </p>
    <p>
        <label for="button_url">URL del Botón 2:</label>
        <input type="text" id="button_url2" name="button_url2" value="<?php echo esc_attr($button_url2); ?>" />
    </p>
   
    <?php
}

// Guardar los valores de los campos personalizados
add_action('save_post', 'save_banner_meta_box_data');

function save_banner_meta_box_data($post_id) {
    // Verificar nonce
    if (!isset($_POST['banner_meta_box_nonce_field']) || !wp_verify_nonce($_POST['banner_meta_box_nonce_field'], 'banner_meta_box_nonce')) {
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
    if (isset($_POST['button_text2'])) {
        update_post_meta($post_id, '_button_text2', sanitize_text_field($_POST['button_text2']));
    }
    if (isset($_POST['button_url2'])) {
        update_post_meta($post_id, '_button_url2', esc_url_raw($_POST['button_url2']));
    }

}








