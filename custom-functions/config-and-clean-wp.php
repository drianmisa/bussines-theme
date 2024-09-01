<?php

/*-----------------------------------------------------------------------------------*/
/* FLUSH PERMALINKS 
/* Activate only when needed
/*-----------------------------------------------------------------------------------*/
//flush_rewrite_rules( false );
/*-----------------------------------------------------------------------------------*/
/* REMOVE COMMENTS SECTION ON ADMIN
/*-----------------------------------------------------------------------------------*/
add_action('admin_init', 'my_remove_admin_menus');
function my_remove_admin_menus()
{
	remove_menu_page('edit-comments.php');
}


/*-----------------------------------------------------------------------------------*/
/* 	Logotipo y titulo
/*-----------------------------------------------------------------------------------*/

// Función para agregar la sección y control del logo al Personalizador
function logo_sitio_setup()
{
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'logo_sitio_setup');


// SSoporte para titulo
add_theme_support('title-tag');


/*-----------------------------------------------------------------------------------*/
/* 	Activar menu witget
/*-----------------------------------------------------------------------------------*/
function mytheme_widgets_init()
{
	register_sidebar(array(
		'name'          => __('Sidebar', 'bussinesAdr'),
		'id'            => 'sidebar-1',
		'description'   => __('Add widgets here to appear in your sidebar.', 'bussinesAdr'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'mytheme_widgets_init');

/*-----------------------------------------------------------------------------------*/
/* 	Limpieza en WP_HEAD()
/*-----------------------------------------------------------------------------------*/
remove_action('wp_head', 'rsd_link'); //Links for Flickr
remove_action('wp_head', 'wlwmanifest_link'); //Prints windows live writer xml
remove_action('wp_head', 'wp_generator');  //Prints WP Version
remove_action('wp_head', 'start_post_rel_link'); //Prints related links
remove_action('wp_head', 'index_rel_link'); //Prints related links
remove_action('wp_head', 'adjacent_posts_rel_link'); //Prints related links
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);    //removes short links

// Remover wp emogi
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
//Desabilitar RSS
function itsme_disable_feed()
{
	wp_die(__('No feed available, please visit the <a href="' . esc_url(home_url('/')) . '">homepage</a>!'));
}
add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

// Desabilitar el bloque de guttemberg
add_action('wp_print_styles', 'wps_deregister_styles', 100);
function wps_deregister_styles()
{
	wp_dequeue_style('wp-block-library');
}
// Remover wp head rest api 
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'rel_canonical');
//Remover migracion JQuery 
function remove_jquery_migrate($scripts)
{
	if (! is_admin() && isset($scripts->registered['jquery'])) {
		$script = $scripts->registered['jquery'];
		if ($script->deps) {
			$script->deps = array_diff($script->deps, array('jquery-migrate'));
		}
	}
}
add_action('wp_default_scripts', 'remove_jquery_migrate');

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails');

/*-----------------------------------------------------------------------------------*/
/*	Registra menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus(
	array(
		'primary'	=>	__('Primary Menu', 'bussinesAdr'),
		'secondary' => __('secondary Menu', 'bussinesAdr'),
	)
);

/*-----------------------------------------------------------------------------------*/
/* Stilos y scripst
/*-----------------------------------------------------------------------------------*/
// remover wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js($src){
	if (strpos($src, 'ver='))
		$src = remove_query_arg('ver', $src);
	return $src;
}

add_filter('style_loader_src', 'vc_remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'vc_remove_wp_ver_css_js', 9999);


function template_scripts(){
	// Enqueue the theme stylesheet
	wp_enqueue_style('style', get_stylesheet_uri());

	// Enqueue custom CSS file
	wp_enqueue_style('template-css', get_template_directory_uri() . '/src/css/template.css');

	// Enqueue custom JavaScript file
	wp_enqueue_script('app-js', get_stylesheet_directory_uri() . '/src/min-js/app.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'template_scripts');