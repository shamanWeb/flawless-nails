</div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <nav class="bottom-menu col-md-6 col-xs-12">
                <div class="section-head col-12">
                    <h3>Навигация</h3>
                </div>
                <ul>
                    <?php include __DIR__ . '/parts/main-menu.php'; ?>
                    <li class="menu-item">
                        <a href="<?php echo get_permalink(248); ?>" title="Записаться">Записаться</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo get_permalink(275); ?>" title="Политика конфеденциальности">Политика конфеденциальности</a>
                    </li>
                </ul>
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

<?php include __DIR__ . '/parts/footer-js.php'; ?>
<style type="text/css">
    html{
        display:unset;
    }
</style>
</body>

</html>