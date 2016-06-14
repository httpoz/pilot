<?php
/**
 * Case: When WordPress displays your content on the page it will run it through a
 * number of different filters wptexturize and wpautop. I want to disable that for formatting reasons
 * in the shortcodes included in this theme.
 *
 * Reference: https://paulund.co.uk/remove-line-breaks-in-shortcodes
 *
 * You can disable this functionality in the dictionary if it is undesired.
 */

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop', 99 );
add_filter( 'the_content', 'shortcode_unautop', 100 );