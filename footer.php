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
                    <p>Копирование материалов сайта запрещено <?php echo get_bloginfo(); ?> ©
                        <? echo current_time('Y'); ?>
                    </p>
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

<!--
<script src='<?php echo get_template_directory_uri(); ?>/plugins/jquery.scrollSpeed.js'></script>
-->

<? if (is_page(21)){?>
<script src='<?php echo get_template_directory_uri(); ?>/plugins/instafeed.min.js'></script>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
var feed = new Instafeed({
    get: 'user',
    userId: '11225119141',
    accessToken: '11225119141.1677ed0.cdb74ca58f3f46f5aa513e5a1a45469e', // https://instagram.pixelunion.net/ тут получить 
    limit: 50,
    resolution: 'low_resolution',   //thumbnail (default) - 150x150
                                    //low_resolution - 306x306
                                    //standard_resolution - 612x612
    template: '<a href="{{link}}"><img src="{{image}}" /></a>',
    filter: function(image) {
        return image.tags.indexOf('flawlessnailsvrn') >= 0;
    },
    success: function() {
        $('#instafeed').css('height', 'auto');
        setTimeout(function() {
            $('.imgload').hide();
            $('#instafeed').addClass('fadeIn');
        }, 300);
    }
});
setTimeout(function() {
        if ($('#instafeed').length) {
            feed.run();
        }
    }, 50);
});
</script>
<? }?>

<? if (is_home()){?>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
    if ($('.map').length > 0) {
        setTimeout(function() {
            var f = document.querySelectorAll('iframe')[0];
            f.src = 'https://yandex.ru/map-widget/v1/?um=constructor%3A4a9a4a6868b57d28895418a64b0ad7be75d3af90521d8488e7c28a498d4a0202&amp;source=constructor';
        }, 7);
    }
    
});
</script>
<? }?>


<noscript>
    <div><img src="https://mc.yandex.ru/watch/52908865" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<?php wp_footer(); ?>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
document.addEventListener("DOMContentLoaded", function(event) {
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
});
</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>

</html>