<?php get_header(); 
            $image = get_field('img');
            $image = $image['sizes']['thumbnail']; 

?>

<main class="single">
    <div class="container">
    <img id="single-icon" src="<?php echo $image; ?>" alt="<?php the_title();?> <?php echo get_field('desc');?>">
            <?php the_content(); ?>

    </div>
</main>
<?php get_footer(); ?>