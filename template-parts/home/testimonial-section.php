 <!--/testimonials-->
 <section class="w3l-clients py-5" id="testimonials">
    <div class="container py-sm-5 py-2">
        <div class="text-center mb-sm-5 mb-4">
            <h6 class="w3l-title-small mb-2">Testimonios</h6>
            <h3 class="w3l-title-main mb-2">Lo que la gente dice sobre nosotros</h3>
        </div>
        <div class="w3-testimonial-grids align-items-center pt-md-4">
            <div class="w3-testimonial-content-top">
                <div id="owl-demo1" class="owl-carousel owl-theme">
                <?php $args = array(
                                'post_type'=> 'testimonials',
                                'posts_per_page'=> 5,
                                'orderby'=> 'DESC',
                            ) ;
                            $query = new WP_Query($args);
                            if($query -> have_posts()):
                                while($query -> have_posts()):
                                    $query -> the_post();
                                   
                        ?>
                    <div class="item">
                   
                        <div class="testimonial-content">
                            <div class="test-img">
                                <?php
                                     $fhoto = get_the_post_thumbnail_url();
                                    if(!empty($fhoto)):?>
                                    <img src="<?php echo esc_url($fhoto)  ;?>" class="img-fluid" alt="client-img">
                                <?php else:?>
                                    <img src="<?php echo get_template_directory_uri() ;?>/assets/compress-images/images-min/user.jpeg" class="img-fluid" alt="client-img">
                                <?php endif ;?>
                            </div>
                            <div class="testimonial">
                               <?php the_content() ;?>
                            </div>
                        </div>
                      
                    </div>
                    <?php endwhile ;
                             wp_reset_postdata();
                                endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonials -->