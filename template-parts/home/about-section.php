<!-- About Section-->
 <?php 
   $args = array(
        'post_type'      => 'abautus', 
        'posts_per_page' => 1,         
        'orderby'       => 'DESC'     
    );

    $query = new WP_Query($args);

    if($query -> have_posts()) :
        while($query -> have_posts()) : $query -> the_post();
        $button_text1 = get_post_meta($post->ID, '_button_text1', true);
        $button_url1 = get_post_meta($post->ID, '_button_url1', true);
 ;?>
    <section class="w3l-about py-5" id="about">
        <div class="container py-md-5 py-2">
            <div class="row w3l-row">
                <div class="col-lg-6 w3l-image pe-lg-5 mb-lg-0 mb-md-5 mb-4">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" class="img-fluid">
                </div>
                <div class="col-lg-6 w3l-about-info px-lg-4 align-center">
                    <?php the_content() ;?>
                    <div class="w3l-btn">
                        <a href="<?php echo esc_url($button_url1);?>" class="btn btn-style btn-secondary mt-lg-5 mt-4 me-2"><?php echo esc_html($button_text1)  ;?>  </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;
        wp_reset_postdata();
        endif;
        ?>
    <!-- //About Section-->