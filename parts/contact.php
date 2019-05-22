<section id="contacts" class="animated invisible">
    <?php $post = get_post(79); setup_postdata($post); ?>
    <?php 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
    ?>
    <div class="container">
        <div class="row">
            <?php include __DIR__ . '/section-head.php'; ?>
            <?php  if (is_page(91)){ ?>
            <div class="goto-zapis col-sm-6 col-12">
                <a class="button" href="<?php echo get_permalink(248); ?>">Записаться</a>
            </div>
            <?php } ?>
            <div class="text-block col-lg-6 col-md-12 col-xs-12">
                <div class="inner-content">
                    <div class="text">
                        <?php the_content(); ?>
                        <a href="tel:<?php echo get_field('+tel', $post); ?>">
                            <?php echo get_field('tel', $post); ?>
                        </a>
                    </div>
                    <?php 
                    echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo()  . '">';
                    ?>
                </div>
            </div>
            <div class="map-block col-lg-6 col-md-12 col-xs-12">
                <div id="map"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Ymap.png');">
                    <iframe src="" frameborder="0" title="Как нас найти"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>