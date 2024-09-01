<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- google-fonts -->
        <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->

    <?php wp_head(); ?>
</head>
<header>
    <?php include get_template_directory() . '/template-parts/header/header-section.php' ;?> 
</header>

<body <?php body_class(); ?>>