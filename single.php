<?php get_header(); ?>

<div class="container">

    <?php if ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-sm-12">
            <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                <hr />
                  <?php comments_template(); ?>
            </div>
        </div>
    <?php endif; ?>

</div>

<?php get_footer();
