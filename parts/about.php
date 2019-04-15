<section id="about">
    <?php 
    $post = get_post(71); setup_postdata($post);
    $image = get_field('img');
    $image = $image['sizes']['large']; 
    ?>
    <div class="container">
        <div class="row">
        <?php include __DIR__ . '/section-head.php'; ?>
            <div class="text-block col-lg-6 col-md-12 col-xs-12">
                <div class="inner-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="img-block col-lg-6 col-md-12 col-xs-12 animated invisible">
                <img src="<?php echo $image; ?>" alt="Мастер маникюра" title="Фото">
            </div>
        </div>
    </div>
</section>