<?php get_header(); ?>

<h2><?php single_cat_title(); ?></h2>
<p><?php echo category_description(); ?></p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_title(); ?>
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p class="text-center">
		<?php _e('No posts in this category.'); ?>
	</p>

<?php endif; ?>
</div>
<div class="navigation">
	<div class="left"><?php previous_posts_link( 'Newer' ); ?></div>
	<div class="right"><?php next_posts_link( 'Older', '' ); ?></div>
</div>

<?php get_footer(); ?>