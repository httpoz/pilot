<?php
/* Display Image from the_post_thumbnail or the first image of a post else display a default Image
* Chose the size from "thumbnail", "medium", "large", "full" or your own defined size using filters.
* USAGE: <?php echo pilot_image(); ?>
*/
function pilot_image( $size = 'full' ) {
	if ( has_post_thumbnail() ) {
		$image_id  = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src( $image_id, $size );
		$image_url = $image_url[0];
	} else {
		global $post, $posts;
		$image_url = '';
		ob_start();
		ob_end_clean();
		$output    = preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
		$image_url = $matches [1] [0];

		//Defines a default image
		if ( empty( $image_url ) ) {
			$image_url = get_stylesheet_directory_uri() . 'screenshot.png';
		}
	}

	return $image_url;
}