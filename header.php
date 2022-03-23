<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php wp_head(); ?>
  </head>
  <body class="<?php echo is_front_page() ? 'front' : ''; ?>">
    <?php if (!is_front_page()): ?>
        <h1 id="banner">
            <a href="<?php echo get_home_url(); ?>" style="display: block;">
            Alec Fernandes</a>
        </h1>
    <?php endif;
?>
