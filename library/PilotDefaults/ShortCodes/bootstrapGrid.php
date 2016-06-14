<?php

/**
 * Usage:
 * [row][/row]
 */
function row_shortcode( $atts, $content = null ) {
	return '<div class="row">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'row', 'row_shortcode' );

/**
 * Usage:
 * [column size="col-sm-6 col-md-4"][/column]
 */
function column_shortcode( $attributes, $content = null ) {
	$atts = shortcode_atts( [
		'size' => 'col-sm-12'
	], $attributes );

	return '<div class="' . $atts['size'] . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'columns', 'column_shortcode' );