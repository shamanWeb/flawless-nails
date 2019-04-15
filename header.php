<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="preconnect" href="//s.w.org" crossorigin>
    <link rel="preconnect" href="//fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="//ajax.googleapis.com" crossorigin>
    <link rel="preconnect" href="//google-analytics.com" crossorigin>
    <link rel="preconnect" href="//mc.yandex.ru" crossorigin>
    <link rel="preconnect" href="//yandex.ru" crossorigin>
    <link rel="preconnect" href="//code.jivosite.com" crossorigin>
    <link rel="preconnect" href="//telemetry.jivosite.com" crossorigin>
    <link rel="preconnect" href="//cdn-cis.jivosite.com" crossorigin>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(52908865, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136703267-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-136703267-1');
    </script>

    <link rel="stylesheet" media="all"
        href="<?php echo get_template_directory_uri(); ?>/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/fonts/css/fontello.css" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <?php wp_head(); ?>
    <meta property="vk:image" content="<?php echo wp_get_attachment_url(179); ?>" />
    <script type='application/ld+json'>
    {
        "@context": "http://www.schema.org",
        "@type": "NailSalon",
        "name": "Flawless Nails",
        "url": "https://flawless-nails.ru/",
        "logo": "https://flawless-nails.ru/wp-content/uploads/2019/02/cropped-logo-1-150x150.png",
        "image": "https://flawless-nails.ru/wp-content/uploads/2019/02/cropped-logo-1-150x150.png",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Спортивная набережная 23",
            "addressLocality": "Воронеж",
            "postalCode": "394007",
            "addressCountry": "Россия"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+79204258450",
            "contactType": "reservations"
        }
    }
    </script>
</head>
<body>
    <div id="preloader">
        <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'thumbnail' );
        ?>
        <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo get_bloginfo(); ?>" title="Идёт загрузка">
        <div id="loader">
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="menu-wrap row">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>" title="На главную">
                        <?php 
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo()  . '" >';
                        ?>
                        <h2><?php echo get_bloginfo(); ?></h2>
                    </a>
                </div>
                <div class="main-menu">
                    <?php include __DIR__ . '/parts/main-menu.php'; ?>
                    <div class="socials socials-top">
                        <?php $post = get_post(79); setup_postdata($post); ?>
                        <a href="tel:<?php echo get_field('+tel', $post); ?> " aria-label="Телефон">
                            <i class="icon-phone"></i>
                        </a>
                        <a href="https://www.instagram.com/flawlessnails_vrn" aria-label="Instagram">
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="https://vk.com/fawlessnails" aria-label="В контакте">
                            <i class="icon-vkontakte"></i>
                        </a>
                    </div>
                </div>
                <div id="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </div>
    </header>
    <div class="main">
        <?php
    if (!is_home()){
        wp_reset_postdata();
    ?>
        <div class="fix-head"></div>
        <?php
    }
    ?>