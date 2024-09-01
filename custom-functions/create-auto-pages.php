<?php

    function create_default_pages() {
        $pages = [
            'Nosotros' => null,
            'Servicios' => null,
            'Contacto' => null,
            'Inicio' => null,
        ];

        $page_ids = [];

        foreach ($pages as $title => $content) {
            // Verifica si la página ya existe
            $page_exists = get_page_by_title($title);

            // Si no existe, crea la página
            if (!$page_exists) {
                $page_id = wp_insert_post([
                    'post_title'   => $title,
                    'post_content' => $content,
                    'post_status'  => 'publish',
                    'post_type'    => 'page',
                ]);

                // Guarda el ID de la página creada
                $page_ids[$title] = $page_id;
            } else {
                // Guarda el ID de la página existente
                $page_ids[$title] = $page_exists->ID;
            }
        }

        // Configura la página "Inicio" como la página de inicio estática
        if (!empty($page_ids['Inicio'])) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $page_ids['Inicio']);
        }
    }

    // Hook para ejecutar la función después de la activación del tema
    add_action('after_setup_theme', 'create_default_pages');
