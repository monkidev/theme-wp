<?php

add_action('after_setup_theme', 'monkidev_theme_setup');
function monkidev_theme_setup()
{
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(1568, 9999);
    add_theme_support('title-tag');
    register_nav_menus([
        'primary' => 'Primary'
    ]);
}

add_action('wp_enqueue_scripts', 'monkidev_theme_scripts');
function monkidev_theme_scripts()
{
    wp_enqueue_style('monkidev-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('monkidev-aos-style', get_template_directory_uri() . "/assets/aos/aos.css", array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('monkidev-style', get_template_directory_uri() . "/style.css", array(), wp_get_theme()->get('Version'));

    wp_enqueue_script('monkidev-script', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('monkidev-feather-script', get_template_directory_uri() . "/assets/js/feather.min.js", array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('monkidev-aos-script', get_template_directory_uri() . "/assets/aos/aos.js", array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('monkidev-script-2', get_template_directory_uri() . "/assets/js/after-scripts.js", array('jquery'), wp_get_theme()->get('Version'), true);
}
