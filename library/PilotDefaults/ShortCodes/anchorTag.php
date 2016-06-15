<?php
/**
 * Usage: [anchor id="contactForm"]
 * Attribute ID:
 */
function anchor_shortcode( $attributes ) {
	$atts = shortcode_atts( [
		'id' => 'javascript:void(0)',
	], $attributes );

	return '<a href="#' . $atts['id'] . '"></a>';
}

add_shortcode( 'anchor', 'anchor_shortcode' );