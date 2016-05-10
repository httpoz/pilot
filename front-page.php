<?php 
/**
 * Site front page
 *
**/
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
