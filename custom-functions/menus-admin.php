<?php
function custom_admin_menu() {
    // Añadir un menú principal
    add_menu_page(
        'Home',        // Título de la página
        'Home',      // Título en el menú
        'manage_options',         // Capacidad requerida
        'home_menu',       // Slug del menú
        'custom_menu_page',      // Función que muestra el contenido
        4                        
    );

    //  // Añadir un submenú
    //  add_submenu_page(
    //      'custom-menu-slug',       // Slug del menú principal
    //      'Submenú 1',              // Título de la página
    //      'Submenú 1',              // Título en el submenú
    //      'manage_options',         // Capacidad requerida
    //      'custom-submenu-slug',    // Slug del submenú
    //      'custom_submenu_page'     // Función que muestra el contenido
    //  );
}
add_action('admin_menu', 'custom_admin_menu');







