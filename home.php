<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Blog</h1>
                <hr>
				<?php if ( have_posts() ): ?>
					<?php while ( have_posts() ) {
						the_post();
						get_template_part( 'templates/post', 'snippet' );
					}
					?>
				<?php else: ?>
                    <h2>We could not find any posts...</h2>
                    <a href="<?php echo site_url( '/' ); ?>" class="btn btn-default">Back to home</a>
				<?php endif; ?>
            </div>
            <div class="col-sm-12">
                <hr>
                <ul class="pager">
                    <li class="previous"><?php previous_posts_link('Newer Posts'); ?></li>
                    <li class="next"><?php next_posts_link('Older posts'); ?></li>
                </ul>
            </div>
        </div>
    </div>

<?php get_footer();