<?php

// enqueue all stylesheets and script files
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

// register menus
add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus([
        'navbar_menu' => 'Navbar Menu',
    ]);
}

// misc theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// accent color in customizer
add_action('customize_register', 'accent_color_picker');

function accent_color_picker($wp_customize)
{
    // Add Section
    $wp_customize->add_section('accent_link_color_section', [
        'title' => 'Accent & Link Colors',
        'description' =>
            'Link color and accent color for header underlines and navbars.',
        // study bookmarked link on WP hooks!
        // 'priority' => '40',
    ]);

    // Add Settings
    $wp_customize->add_setting('accent_color', [
        'default' => '#0000FF',
    ]);

    $wp_customize->add_setting('link_color', [
        'default' => '#0000FF',
    ]);

    // Add Controls
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'accent_color', [
            'label' => 'Accent Color',
            'section' => 'accent_link_color_section',
            'settings' => 'accent_color',
        ])
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'link_color', [
            'label' => 'Link Color',
            'section' => 'accent_link_color_section',
            'settings' => 'link_color',
        ])
    );
}
