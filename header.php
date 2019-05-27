<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FFF"/>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favico_16.png" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="preconnect" href="//s.w.org" crossorigin>
    <link rel="preconnect" href="//yandex.ru" crossorigin>
    <!--
    <link rel="stylesheet" media="all"
        href="<?php echo get_template_directory_uri(); ?>/plugins/bootstrap/css/bootstrap-optimize.css" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/fonts/css/fontello.css" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />
-->
    <meta property="vk:image" content="<?php echo wp_get_attachment_url(179); ?>" />
    <style type="text/css">
    html{
        display:none;
    }
    #preloader {
	background-color: @color_0;
	width: 100%;
	height: 100%;
    position: fixed;
	z-index: 1010;

    } 
    #preloader img{
		width: 92px;
		height: auto;
		text-align: center;
		position: absolute;
		top: 50%;
        left: 50%;
        margin-top: -46px;
        margin-left: -46px;
        text-transform: uppercase;
        animation: logo-pulce 1s linear infinite;
      }
    </style>

    <?php if (is_page(248)){ ?>
    <style type="text/css">
    .main {
        overflow: hidden;
    }

    .main:before {
        content: "";
        position: absolute;
        top: 50px;
        left: 25%;
        width: 100%;
        height: 100%;
        opacity: 0.1;
        z-index: -1;
        background-image: url(/logo.svg);
        background-size: cover;
    }

    .socials-top {
        display: none;
    }

    .header .logo a h2 {
        display: block;
    }
    </style>
    <?php } ?>
    <?php wp_head(); ?>
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

    gtag('config', 'UA-136703267-1', {
        'optimize_id': 'GTM-TK333X4'
    });
    </script>
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
                    <ul>
                        <?php include __DIR__ . '/parts/main-menu.php'; ?>
                    </ul>
                    <div class="socials socials-top">
                        <?php $post = get_post(79); setup_postdata($post); $tel=get_field('tel', $post);?>
                        <a class="ajax-tel-mini" href="tel:" aria-label="Телефон" title="Телефон" rel="nofollow">
                            <i class="icon-phone"></i>
                        </a>
                        <!-- <a href="tel:<?php //echo telToHref ($tel); ?> " aria-label="Телефон" title="Телефон">
                            <i class="icon-phone"></i>
                        </a> -->
                        <a href="https://www.instagram.com/flawlessnails_vrn" aria-label="Instagram" title="instagram">
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="https://vk.com/fawlessnails" aria-label="В контакте" title="В контакте">
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