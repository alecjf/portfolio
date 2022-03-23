<?php

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

function load_styles_and_scripts()
{
    wp_enqueue_style(
        'bootstrap_style',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'main_style',
        get_stylesheet_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'front_page_style',
        get_stylesheet_directory_uri() . '/css/front-page.css'
    );

    wp_enqueue_style(
        'navbar_style',
        get_stylesheet_directory_uri() . '/css/navbar.css'
    );

    wp_enqueue_style(
        'project_header_style',
        get_stylesheet_directory_uri() . '/css/project-header.css'
    );

    wp_enqueue_style(
        'project_docs_style',
        get_stylesheet_directory_uri() . '/css/project-docs.css'
    );

    wp_enqueue_style(
        'category_style',
        get_stylesheet_directory_uri() . '/css/category.css'
    );

    wp_enqueue_script(
        'main_script',
        get_stylesheet_directory_uri() . '/scripts.js',
        [],
        "1.0",
        true // loads in footer
    );

    wp_enqueue_script(
        "bootstrap_script",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js",
        [],
        "5.1.3",
        true // loads in footer
    );
}

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus([
        'navbar_menu' => 'Navbar Menu',
    ]);
}

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
