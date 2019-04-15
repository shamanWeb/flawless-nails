</div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <nav class="bottom-menu col-md-6 col-xs-12">
                <div class="section-head col-12">
                    <h3>Навигация</h3>
                </div>
                <?php include __DIR__ . '/parts/main-menu.php'; ?>
            </nav>
            <div class="logo col-md-6 col-xs-12">
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'thumbnail' );
                ?>
                <a href="<?php echo get_home_url(); ?>" title="На главную">
                    <?php 
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo()  . '" >';
                        ?>
                    <h3><?php echo get_bloginfo(); ?></h3>
                    <p>Копирование материалов сайта запрещено <?php echo get_bloginfo(); ?> © <? echo current_time('Y'); ?></p>
                </a>
            </div>
        </div>
    </div>
    <div class="console-container"><span id="text"></span>
        <div class="console-underscore" id="console">&#95;</div>
    </div>
    <div id="btn-up">
        <i class="icon-up-big"></i>
    </div>
</footer>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugins/fancybox/jquery.fancybox.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugins/animate.min.css" />
<script src='<?php echo get_template_directory_uri(); ?>/plugins/jquery.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/plugins/jquery-easing.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/plugins/jquery.scrollSpeed.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/plugins/instafeed.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/plugins/fancybox/jquery.fancybox.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/plugins/jquery.viewportchecker.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/scripts.js'></script>
<noscript><div><img src="https://mc.yandex.ru/watch/52908865" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<?php wp_footer(); ?>
<?php
echo '<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700|Dancing+Script:400|Montserrat:400,700&amp;subset=cyrillic" rel="stylesheet">';
?>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function() {
    var widget_id = 'LT0JB6ZOEA';
    var d = document;
    var w = window;

    function l() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//code.jivosite.com/script/widget/' + widget_id;
        var ss = document.getElementsByTagName('script')[0];
        ss.parentNode.insertBefore(s, ss);
    }
    if (d.readyState == 'complete') {
        l();
    } else {
        if (w.attachEvent) {
            w.attachEvent('onload', l);
        } else {
            w.addEventListener('load', l, false);
        }
    }
})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>

</html>