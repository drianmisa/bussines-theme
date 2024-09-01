<?php 
   $args = array(
        'post_type'      => 'Banner',
        'posts_per_page' => 1,
        'orderby'        => 'date',  
        'order'          => 'DESC'   
    );

    $query = new WP_Query($args);

    if($query-> have_posts()) :
        while($query -> have_posts()) : $query -> the_post();
        $button_text1 = get_post_meta($post->ID, '_button_text1', true);
        $button_url1 = get_post_meta($post->ID, '_button_url1', true);
        $button_text2 = get_post_meta($post->ID, '_button_text2', true);
        $button_url2 = get_post_meta($post->ID, '_button_url2', true);
?>

<!-- banner section -->
<section id="home" class="w3l-banner py-5" style="background: url(<?php echo the_post_thumbnail_url() ?>) no-repeat center;">
    <div class="container py-lg-5 py-md-4">
        <div class="py-lg-5 py-4">
            <div class="banner-info-grid">
             
                <?php 
                        the_content();                    
                ?>
                <a class="btn btn-secondary btn-style mt-5 me-2" href="<?php echo $button_url1;?>"> <?php echo $button_text1;?></a>
                <a class="btn btn-style transparent-btn mt-5" href="<?php echo $button_url2;?>"> <?php echo $button_text2;?> </a>
            </div>
                <?php endwhile;     
                    wp_reset_postdata(); 
                    endif;
                ?>
        </div>
    </div>
</section>
<!-- //banner section -->