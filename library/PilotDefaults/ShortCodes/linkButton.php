<?php
/**
 * Usage: [button page="contact" class="btn-custom" blank="true"]Go here[/button]
 * Attribute Class: btn is added by default. Just add any other classes.
 * Attribute Page: add external url or page slug if link is internal.
 * Attribute Blank: If you want the button to load in new window, value should be true. Else ommit this attribute entirely.
 */
function button_shortcode( $attributes, $content = null ) {
	$atts = shortcode_atts( [
		'class' => 'btn-default',
		'page' => '#',
		'blank' => ''
	], $attributes );

	if ($atts['blank'] == 'true') {
		$target = 'target="_blank"';
	} else {
		$target = null;
	}

	return '<a href="' . $atts['page'] . '" ' . $target . ' class="btn ' . $atts['class'] . '">' . do_shortcode($content) . '</a>';
}

add_shortcode( 'button', 'button_shortcode' );