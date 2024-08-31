<?php
// Incluir el encabezado
get_header();
?>
<?php include(get_template_directory() . "/comp/shared/banner.php"); ?>

<div class="wrap">
    <div class="contein-single-post">
        <div>
            <?php if (have_posts()) : ?>
                <h1 class="page-title">
                    <?php printf(__('Resultados de búsqueda para: %s', 'your-theme-textdomain'), '<span>' . get_search_query() . '</span>'); ?>
                </h1>
                <div class="grid-archive">
                    <?php
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'search');
                    endwhile; ?>
                </div>


            <?php
                // Navegación
                the_posts_navigation();

            else :

                include(get_template_directory() . "/comp/404/err-404.php");

            endif;
            ?>
        </div>

        <div class="sidebar-archive">
            <div>
                <?php include(get_template_directory() . "/comp/header/form-busqueda.php"); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php include(get_template_directory() . "/comp/shared/banner.php"); ?>

<?php
get_footer();
?>