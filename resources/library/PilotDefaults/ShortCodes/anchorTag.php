<?php
/**
 * Usage: [anchor id="contactForm"]
 * Attribute ID:
 */
function anchor_shortcode( $attributes ) {
	$atts = shortcode_atts( [
		'id' => 'javascript:void(0)',
	], $attributes );

	return '<div id="' . $atts['id'] . '"></div>';
}

add_shortcode( 'anchor', 'anchor_shortcode' );