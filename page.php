<?php get_header();
if (is_page(21)){ //портфолио
    include __DIR__ . '/parts/portfolio-grid.php';
}
if (is_page(58)){ //услуги
    include __DIR__ . '/parts/services.php';
}
if (is_page(60)){ //отзывы
    include __DIR__ . '/parts/testimonials.php';
}
if (is_page(91)){ //контакты
    include __DIR__ . '/parts/contact.php';
}
if (is_page(248)){ //записаться
    include __DIR__ . '/parts/massage.php';
}
get_footer();  ?>