<section id="we-work">
    <?php $post = get_post(24); setup_postdata($post);?>
    <div class="container">
        <div class="row grid">
            <?php include __DIR__ . '/section-head.php'; ?>
            <div class="grid-item col-lg-4 col-md-12 col-xs-12 animated invisible">
                <div class="inner-content">
                    <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                    echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo()  . '">';
                    ?>
                    <h3><?php echo get_field('b1', $post); ?></h3>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-12 col-xs-12 animated invisible">
                <div class="inner-content">
                    <?php 
                    echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo()  . '">';
                    ?>
                    <h3><?php echo get_field('b2', $post); ?></h3>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-12 col-xs-12 animated invisible">
                <div class="inner-content">
                    <?php 
                    echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo()  . '">';
                    ?>
                    <h3><?php echo get_field('b3', $post); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>