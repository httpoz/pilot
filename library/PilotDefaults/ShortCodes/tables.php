<?php
/**
 * Usage:
 * [table class="table table-striped table-bordered"]
 *   [table-head]
 *     [th]Name[/th]
 *   [/table-head]
 *   [tr]
 *     [td][/td]
 *   [/tr]
 * [/table]
 */
function table_shortcode( $attributes, $content = null ) {
    $atts = shortcode_atts( [
        'class' => 'table table-striped table-bordered',
    ], $attributes );

    return '<table class="' . $atts['class'] . '">' . do_shortcode($content) . '</table>';
}

add_shortcode( 'table', 'table_shortcode' );

function table_head_shortcode( $attributes, $content = null ) {

    return '<thead><tr>' . do_shortcode($content) . '</tr></thead>';
}

add_shortcode( 'table-head', 'table_head_shortcode' );

function table_head_column_shortcode( $attributes, $content = null ) {

    return '<th>' . do_shortcode($content) . '</th>';
}

add_shortcode( 'th', 'table_head_column_shortcode' );

function table_row_shortcode( $attributes, $content = null ) {

    return '<tr>' . do_shortcode($content) . '</tr>';
}

add_shortcode( 'tr', 'table_row_shortcode' );

function table_column_shortcode( $attributes, $content = null ) {

    return '<td>' . do_shortcode($content) . '</td>';
}

add_shortcode( 'td', 'table_column_shortcode' );