<section id="services">
<?php $cat_id = 3; ?>
    <div class="container">
        <div class="row grid">
            <?php include __DIR__ . '/section-head.php'; ?>
            <?php 
            query_posts("cat=$cat_id&posts_per_page=88");
            while (have_posts()) : the_post(); 
            $image = get_field('img');
            $image = $image['sizes']['medium']; 
            ?>   
            <div class="grid-item col-lg-3 col-md-6 col-sm-6 animated invisible">
                <div class="icon">
                    <a href="<?php echo get_permalink( $post);?>" title="Подробней">
                        <img src="<?php echo $image; ?>" alt="<?php the_title();?>" title="Подробней">
                    </a>
                </div>
                <div class="details">
                    <h3><?php the_title(); ?></h3>
                    <h4 class="desc"><?php echo get_field('desc'); ?></h4>
                    <p><?php echo get_field('price'); ?></p>
                </div>
            </div>
            <?php 
            endwhile; 
            wp_reset_query();
            $cat_id = 0;
            ?>
        </div>
    </div>
</section>