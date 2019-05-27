<?php
    //отключаем стили гутенберг
    add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
    function wps_deregister_styles() {
        if (!is_admin()) {
        wp_dequeue_style( 'wp-block-library' );
        }
    }
    //заменяем jquery
	add_action('wp_enqueue_scripts', 'my_update_jquery');
	function my_update_jquery () {
		if ( !is_admin() ) { 
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() .'/plugins/jquery.min.js', false, false, false);
		wp_enqueue_script('jquery');
		}
	}
    //подключаем скрипты
    add_action( 'get_footer', 'add_my_scripts');
	function add_my_scripts(){
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/plugins/jquery-easing.js', array('jquery'), null, true);
    wp_enqueue_script('viewportchecker', get_template_directory_uri() . '/plugins/jquery.viewportchecker.min.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script('my-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
    }
    //подключаем стили в футер
    add_action( 'get_footer', 'add_my_styles' );
    function add_my_styles() {
        wp_enqueue_style( 'fontello', get_template_directory_uri() . '/fonts/css/fontello.css' );
        wp_enqueue_style( 'bootstrap-optimize', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap-optimize.css' );
        wp_enqueue_style( 'fancybox_plus_animate', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
        //wp_enqueue_style( 'animate', get_template_directory_uri() . '/plugins/animate.min.css' );
    };

    // закрытие страниц пагинации от индексирования
    add_action( 'wp_head', 'art_noindex_paged', 2 );
    function art_noindex_paged() {
        if ( is_paged() ) {
            echo '<meta name="robots" content="noindex,nofollow">';
        }
    }

    // добавляем noindex и nofollow, если 404
    add_action('wp_head', 'my_404_noindex', 3);
    function my_404_noindex () {
        if (is_404()) {
            echo "".'<meta name="robots" content="noindex,nofollow" />'."\n";
        }
    }
    
    //миниатюры поста вкл
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 9999 );

    //лого темы вкл
    add_theme_support( 'custom-logo' );

    // кастом лого для логина
    add_action('login_head', 'my_custom_login_logo'); 
    function my_custom_login_logo() { 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'medium' );
        echo '<style type="text/css"> 
        body{background-color: #FFF;}
        h1 a { 
        background-image:url(' . esc_url( $custom_logo_url ) . ') !important;
        background-color: #FFF;
        width: 140px!important;
        height: 140px!important;
        background-size: 100%!important;
        } 
        </style>'; 
    } 

    // кастом лого сайта для админки
    add_action('admin_head', 'custom_admin_logo'); 
    function custom_admin_logo() { 
        echo '<style type="text/css"> 
        #wp-admin-bar-site-name > a.ab-item:before { 
        content: "" !important;
        background-image: url('.get_site_icon_url(32).') !important;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        width: 22px!important;
        height: 22px!important;
        background-size: 80%;
        } 
        @media (max-width:782px) {
            #wp-admin-bar-site-name > a.ab-item:before { 
                width: 32px!important;
                height: 32px!important;
                background-size: 100%; 
            }
        } 
        </style>'; 
    } 

    // надпись в хеде админки
    add_action('wp_before_admin_bar_render', 'wp_admin_bar_new_link');
    function wp_admin_bar_new_link() {  
        global $wp_admin_bar;  
        $wp_admin_bar->add_menu(array(  
        'id' => 'wp-admin-bar-new-link',  'title' => __('Связаться с разработчиком'),  'href' => 'mailto:putincev@adm-lab.pro'  
        ));  
}  

// преобразуем телефон для ссылки
function telToHref ($string) {
    $table = array(
        '('=>'', ')'=>'', '-'=>'', ' '=>'',
    );
    $string = strtr($string, $table);
    $first = "+7";
    $string = substr_replace($string, $first, 0, 1);
    return $string;
}