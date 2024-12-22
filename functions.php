<?php
// Load theme styles
function mtdev_enqueue_styles() {
    wp_enqueue_style('mtdev-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mtdev_enqueue_styles');

// Theme setup
function mtdev_theme_setup() {
    add_theme_support('title-tag'); // Dynamic title support
    add_theme_support('wp-block-styles'); // Block editor compatibility
    add_theme_support('block-template-parts'); // FSE templates support
    add_theme_support('post-thumbnails'); // Featured images
}
add_action('after_setup_theme', 'mtdev_theme_setup');

// functions.php
function mtdev_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mtdev-blocks'), // El nombre que usarás en wp_nav_menu
    ));
}
add_action('after_setup_theme', 'mtdev_register_menus');


