<!-- Stats Section-->
<section class="w3l-stats-section py-5" id="stats">
    <div class="container py-lg-5 py-md-4 py-3">
        <div class="w3l-stats-inner-inf py-lg-4">
            <div class="row stats-con">
                <?php
                    $args = array(
                        'post_type' => 'counter',
                        'posts_per_page' => 4,
                        'orderby' => 'DESC',

                    );
                    $query = new WP_Query($args);

                    if($query -> have_posts()):
                        while($query -> have_posts()):
                            $query -> the_post();
                            $thumbnail = the_post_thumbnail_url();
                ;?>
                <div class="col-lg-3 col-6 stats_info counter_grid">
                    <div class="d-flex">
                            <?php if(!empty($thumbnail)): ?>
                                <img src="<?php echo esc_url($thumbnail) ;?>" alt="Servicios realizados con exito">
                            <?php else:?>
                                <i class="fas fa-chalkboard-teacher"></i>
                            <?php endif; ?>

                      
                        <p class="counter"> <?php echo esc_html(the_title()) ;?> </p>
                    </div>
                    <?php the_content(); ?>
                </div>
                <?php endwhile; 
                        wp_reset_postdata();
                        endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- //Stats Section-->
