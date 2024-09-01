<!-- Services Section -->
<section class="about-section py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-heading-w3 mx-auto text-center mb-sm-5 mb-4 pb-xl-4">
            <h3 class="w3l-title-main">Ofrecemos todo tipo de servicios de TI que garantizan tu éxito</h3>
        </div>
        <div class="row justify-content-center">
            <?php  
                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 3,
                    'orderby' => 'DESC'
                );
                $query = new WP_Query($args);
                if($query -> have_posts()) :
                    while($query -> have_posts()) : 
                        $query -> the_post();
                        $thumbnail = the_post_thumbnail_url();
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="about-single">
                    <div class="about-icon mb-4">
                        <?php if(!empty($thumbnail)): ?>
                            <img src="<?php echo  esc_url($thumbnail);?>" alt="<?php echo  esc_html(the_title());?>" srcset="">
                        <?php else: ?>
                            <i class="fas fa-chalkboard"></i>
                        <?php endif; ?>
                    </div>
                    <div class="about-content">
                        <h5 class="mb-3"><?php echo esc_html(the_title()) ;?></h5>
                        <?php the_content();?>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
                    wp_reset_postdata();
                endif;
            ;?>
        </div>
    </div>
</section>
<!-- //Services Section -->