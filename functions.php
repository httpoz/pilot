<?php

// Define Constants
define('theme_root', get_stylesheet_directory_uri());
define('images', theme_root . '/public/img/');
define('scripts', theme_root . '/public/js/');

// Theme setup
if(!function_exists('pilot_setup')){
  function pilot_setup(){

    // bootstrap nav Walker
    require_once('wp_bootstrap_navwalker.php');

    // add all functionality in library folder and use the router file as a reference file
    require_once( 'resources/library/dictionary.php' );

    // add support for post formats (NB: may be moved to library for a modular setup - future case)
    add_theme_support('post_formats', ['aside']);
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('page-attributes');
    add_theme_support('custom-fields');

    // Register navigation menus
    register_nav_menus([
      'primary' => __('Primary Navigation', 'pilot'),
      'footer' => __('Footer Navigation', 'pilot')
    ]);

  }
}
add_action('after_setup_theme', 'pilot_setup');

// Register Styles and Scripts
function pilot_assets(){
  wp_enqueue_style('pilot_css', get_stylesheet_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('pilot_js', scripts . 'app.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'pilot_assets');

add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance of attachments plugin
