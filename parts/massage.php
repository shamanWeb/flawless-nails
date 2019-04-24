<section id="massage" class="animated invisible">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="msg">
                    <a class="whatsapp" href="https://wa.me/79204258450"><i class="icon-whatsapp"></i></a>
                    <a class="vkontakte" href="https://vk.me/fawlessnails"><i class="icon-vkontakte"></i></a>
                    <?php $post = get_post(79); setup_postdata($post); ?>
                    <a class="phone" href="tel:<?php echo get_field('+tel', $post); ?>"><i class="icon-phone"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>