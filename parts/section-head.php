<div class="section-head col-12">
    <?php if (is_page() ){ ?>
    <h1><?php the_title(); ?></h1>
    <?php } else { 
                if (is_home() && $cat_id > 0 ){ ?>
    <h2><?php echo get_cat_name( $cat_id ); ?></h2>
    <?php } else { ?>
    <h2><?php the_title(); ?></h2>
    <?php
                }
        }
        ?>
</div>