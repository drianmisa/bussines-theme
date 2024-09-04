<?php
define('template', 1.0);

/***********************************************************************************
 **************** 	COMPONENTE DE FUNCIONES PERSONALIZADAS
 ***********************************************************************************/
// Configuracion, limpieza y estilos del wp
include(get_template_directory() . '/custom-functions/config-and-clean-wp.php');

// Optimizacion del codigo de wordpress
include(get_template_directory() . '/custom-functions/optimize-code.php');

// Creacion de paginas automaticamente
include(get_template_directory() . '/custom-functions/create-auto-pages.php');

// Creacion menus dentro del administrador
include(get_template_directory() . '/custom-functions/menus-admin.php');


/***********************************************************************************
 **************** 	   CUSTOM POST TYPE
 ***********************************************************************************/
// Banner post type
include(get_template_directory() . '/custom-post-type/home/custom-post-banner.php');
include(get_template_directory() . '/custom-post-type/home/abautus.php');
include(get_template_directory() . '/custom-post-type/home/services.php');
include(get_template_directory() . '/custom-post-type/home/counter.php');
include(get_template_directory() . '/custom-post-type/home/way.php');
include(get_template_directory() . '/custom-post-type/home/testimonials.php');

