<?php

function pilot_admin_scripts(){
	wp_enqueue_style('pilot_wp_admin_css', get_template_directory_uri() . '/public/css/dashboard.css');
}
add_action('admin_enqueue_scripts', 'pilot_admin_scripts');