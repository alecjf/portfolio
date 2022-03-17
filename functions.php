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
