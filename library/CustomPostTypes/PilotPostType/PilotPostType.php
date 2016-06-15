<?php

namespace Pilot;


class PilotPostType {

	public static function create( $spec ) {
		$spec['post_type_name'] = function () use ( $spec ) {
			$labels = array(
				'name'               => _x( $spec['plural'], 'post type general name', 'pilot' ),
				'singular_name'      => _x( $spec['singular'], 'post type singular name', 'pilot' ),
				'menu_name'          => _x( $spec['plural'], 'admin menu', 'pilot' ),
				'name_admin_bar'     => _x( $spec['plural'], 'add new on admin bar', 'pilot' ),
				'add_new'            => _x( 'Add New', 'posttype', 'pilot' ),
				'add_new_item'       => __( 'Add ' . $spec['singular'], 'pilot' ),
				'new_item'           => __( 'New ' . $spec['singular'], 'pilot' ),
				'edit_item'          => __( 'Edit ' . $spec['singular'], 'pilot' ),
				'view_item'          => __( 'View ' . $spec['singular'], 'pilot' ),
				'all_items'          => __( 'All ' . $spec['plural'], 'pilot' ),
				'search_items'       => __( 'Search ' . $spec['plural'], 'pilot' ),
				'not_found'          => __( 'No ' . $spec['plural'] . ' found.', 'pilot' ),
				'not_found_in_trash' => __( 'No ' . $spec['plural'] . ' found in Trash.', 'pilot' ),
				'parent_item_colon'  => '',
				);
			$args   = array(
				'labels'              => $labels,
				'has_archive'         => $spec['has_archive'] ?: true,
				'public'              => $spec['public'] ?: true,
				'publicly_queryable'  => $spec['publicly_queryable'] ?: true,
				'capability_type'     => $spec['capability_type'] ?: 'post',
				'menu_icon'           => $spec['menu_icon'] ?: 'dashicons-menu',
				'query_var'           => $spec['query_var'] ?: true,
				'show_in_menu'        => $spec['show_in_menu'] ?: true,
				'show_ui'             => $spec['show_ui'] ?: true,
				'supports'            => $spec['supports'] ?: [ 'title', 'editor', 'thumbnail' ],
				'exclude_from_search' => $spec['exclude_from_search'] ?: false,
				);
			register_post_type( $spec['post_type'], $args );
			flush_rewrite_rules();
		};

		return add_action( 'init', $spec['post_type_name']() );
	}

}