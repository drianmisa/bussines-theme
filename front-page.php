<?php
get_header();

if (!empty(get_the_content())) {
    the_content();
} else {
    
}

get_footer();

