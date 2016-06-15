<?php get_header(); ?>

<div class="container"><!-- OR container-fluid for full width grid -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-md-12">
            <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
    <?php endwhile; endif; ?>

</div>

<?php get_footer();

