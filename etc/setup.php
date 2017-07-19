<?php
    /**
     * Theme setup
     */

    if (!function_exists('pilot_setup')) {

        function pilot_setup()
        {
            /**
             * Bootstrap Nav Walker
             * https://github.com/twittem/wp-bootstrap-navwalker
             */
            require_once('wp-bootstrap-navwalker.php');


            /**
             *
             * Add all functionality in the library folder and use the dictionary file
             */
            locate_template(['app/start.php'], true, true);


            add_theme_support('post_formats', ['aside']);
            add_theme_support('automatic-feed-links');
            add_theme_support('post-thumbnails');
            add_theme_support('page-attributes');
            add_theme_support('custom-fields');

            // 		Register navigation menus
            register_nav_menus([
              'primary' => __('Primary Navigation', 'pilot'),
              'footer'  => __('Footer Navigation', 'pilot'),
            ]);
        }
    }

    add_action('after_setup_theme', 'pilot_setup');

    /**
     * Register Styles and Scripts
     */

    function pilot_assets()
    {
        wp_enqueue_style('pilot_css', get_stylesheet_uri());
        wp_enqueue_script('jquery');
        wp_enqueue_script('pilot_js', scripts_dir . 'app.js', null, null,
          true);
    }

    add_action('wp_enqueue_scripts', 'pilot_assets');

    /**
     * Register admin dashboard styles and scripts
     */
    function pilot_admin_scripts()
    {
        wp_enqueue_style('pilot_wp_admin_css',
          get_template_directory_uri() . 'public/css/dashboard.css');
    }

    add_action('admin_enqueue_scripts', 'pilot_admin_scripts');
