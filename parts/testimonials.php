<section id="testimonials">
    <div class="container">
        <div class="row">
            <?php include __DIR__ . '/section-head.php'; ?> 
            <div class="send-feedback col-6">
                <a class="button"  data-fancybox data-src="#hidden-content" href="javascript:;">Оставить отзыв</a>
            </div>
            <?php echo do_shortcode('[testimonial_view id="1"]'); ?>   
        </div>  
    </div>  

        
<div style="display: none;" id="hidden-content">
	<h3>Вы прекрасны!</h3>
    <?php echo do_shortcode('[testimonial_view id="2"]'); ?>   
</div>                                            
</section>