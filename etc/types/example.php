<?php

namespace Pilot;

$example = new PilotPostType('example');
$example->create( [
	'post_type_name' => 'example_cpt', // unique name for registering your custom post type
	'singular'       => 'Example', // the singular string (used in dashboard labels)
	'plural'         => 'Examples', // the plural string (used in dashboard labels)
] );
$example->categories([
    'taxonomy' => 'examples-category',
    'label' => 'Examples Categories'
]);

include 'example-meta.php';