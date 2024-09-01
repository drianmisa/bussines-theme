<!-- Why Choose Us Section-->
<section class="w3l-whychooseus py-5" id="about1">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row align-items-center">
            <div class="col-lg-7 pe-lg-5 align-center">
                <h6 class="w3l-title-small mb-2">¿Por qué elegirnos?</h6>
                <h3 class="w3l-title-main mb-2">Las características creativas que ofrecemos a nuestros clientes:</h3>
                <p class="mt-3">Lorem ipsum viverra feugiat. Pellentesque libero ut justo, ultrices in ligula. Semper at. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="row two-grids mt-5">
                <?php
                    $args = array(
                        'post_type' => 'way',
                        'posts_per_page' => 4,
                        'orderby' => 'DESC',

                    );
                    $query = new WP_Query($args);

                    if($query -> have_posts()):
                        while($query -> have_posts()):
                            $query -> the_post();
                            $thumbnail = the_post_thumbnail_url();
                ;?>
                    <div class="col-sm-6 grids_info d-flex">
                    <?php if(!empty($thumbnail)): ?>
                                <img src="<?php echo esc_url($thumbnail) ;?>" alt="Servicios realizados con exito">
                            <?php else:?>
                                <i class="fas fa-chalkboard-teacher"></i>
                            <?php endif; ?>
                        <div class="detail ms-3">
                            <h4 class="w3l-subtitle"><?php echo esc_html(the_title()) ;?></h4>
                            <?php  the_content();?>
                        </div>
                    </div>
                    <?php endwhile; 
                        wp_reset_postdata();
                        endif;
                ?>
                </div>
            </div>
            <div class="col-lg-5 mt-lg-0 mt-5 position-relative">
                <img src="<?php echo get_template_directory_uri() ;?>/assets/compress-images/images-min/about1.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- //Why Choose Us Section-->