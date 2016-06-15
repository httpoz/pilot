<?php

namespace Pilot;

$examples = new PilotPostType();
$examples->create( [
	'post_type_name' => 'example_cpt', // unique name for registering your custom post type
	'post_type'      => 'example', // what you will call the custom post type
	'singular'       => 'certificate', // the singular string (used in dashboard labels)
	'plural'         => 'certificates', // the plural string (used in dashboard labels)
] );