<?php

namespace Pilot;


class PilotPostType
{

    public function __construct($post_type)
    {
        $this->post_type = $post_type;
    }

    private $options;

    public function create($options)
    {
        $options['post_type_name'] = function () use ($options) {
            $labels = array(
                'name' => _x(ucfirst($options['plural']), 'post type general name', 'pilot'),
                'singular_name' => _x(ucfirst($options['singular']), 'post type singular name', 'pilot'),
                'menu_name' => _x(ucfirst($options['plural']), 'admin menu', 'pilot'),
                'name_admin_bar' => _x(ucfirst($options['plural']), 'add new on admin bar', 'pilot'),
                'add_new' => _x('Add New', $options['post_type'], 'pilot'),
                'add_new_item' => __('Add ' . ucfirst($options['singular']), 'pilot'),
                'new_item' => __('New ' . ucfirst($options['singular']), 'pilot'),
                'edit_item' => __('Edit ' . ucfirst($options['singular']), 'pilot'),
                'view_item' => __('View ' . ucfirst($options['singular']), 'pilot'),
                'all_items' => __('All ' . ucfirst($options['plural']), 'pilot'),
                'search_items' => __('Search ' . ucfirst($options['plural']), 'pilot'),
                'not_found' => __('No ' . ucfirst($options['plural']) . ' found.', 'pilot'),
                'not_found_in_trash' => __('No ' . ucfirst($options['plural']) . ' found in Trash.', 'pilot'),
                'parent_item_colon' => '',
            );
            $args = array(
                'labels' => $labels,
                'has_archive' => $options['has_archive'] ?: true,
                'public' => $options['public'] ?: true,
                'publicly_queryable' => $options['publicly_queryable'] ?: true,
                'capability_type' => $options['capability_type'] ?: 'post',
                'menu_icon' => $options['menu_icon'] ?: 'dashicons-menu',
                'query_var' => $options['query_var'] ?: true,
                'show_in_menu' => $options['show_in_menu'] ?: true,
                'show_ui' => $options['show_ui'] ?: true,
                'supports' => $options['supports'] ?: ['title', 'editor', 'thumbnail'],
                'exclude_from_search' => $options['exclude_from_search'] ?: false,
            );
            register_post_type($this->post_type, $args);
            flush_rewrite_rules();
        };

        return add_action('init', $options['post_type_name']());
    }

    public function categories($options)
    {

        $build = function () use ($options) {
            register_taxonomy(
                $options['taxonomy'],
                $this->post_type,
                array(
                    'hierarchical' => $options['hierarchical'] ?: TRUE,
                    'label' => $options['label'] ?: 'Categories',
                    'query_var' => $options['query_var'] ?: TRUE,
                    'rewrite' => $options['rewrite'] ?: TRUE)
            );
        };
        add_action('init', $build(), 0);
    }
}