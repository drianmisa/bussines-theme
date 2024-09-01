<?php
get_header();

if (!empty(get_the_content())) {
    the_content();
} else {
    include(get_template_directory() . "/template-parts/home/home.php");
}

get_footer();
