<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php
    $accent_color = get_theme_mod('accent_color');
    $link_color = get_theme_mod('link_color');
    ?>
    <style>
        :root{
            --underline: underline solid <?php echo $accent_color; ?> 5px;
        }
        a:not(.btn):not(#landing a):not(#navbar a):not(#banner a) {
            color: <?php echo $link_color; ?> !important;
        }
        #banner a {
            text-decoration: var(--underline) !important;
        }
        .btn-primary {
            background-color: <?php echo $accent_color; ?> !important;
            border: none !important;
        }
        .card h2 {
            transition: 1s;
        }
        .card:hover h2, #landing .site-section, #navbar {
            background-color: <?php echo $accent_color; ?> !important;
            color: white !important;
        }
        h1:not(.card-body h1) {
            text-decoration: var(--underline);
        }
        #navbar a:hover, #navbar button:hover, #navbar .highlighted {
            color: <?php echo $accent_color; ?> !important;
        }
    </style>
    <?php wp_head(); ?>
  </head>
  <body class="<?php echo is_front_page() ? 'front' : ''; ?>">
    <?php if (!is_front_page()): ?>
        <div id="banner" style="background-image: url(<?php echo get_stylesheet_directory_uri() .
            '/images/section-bg/landing.png'; ?>);">
            <div class="bg-dimmer-layer">
                <h1>
                    <a href="<?php echo get_home_url(); ?>" style="display: block;">
                    Alec Fernandes</a>
                </h1>
            </div>
        </div>
    <?php endif;
?>
