<button
  class="btn btn-secondary skill-icon"
  onclick="scrollToDocs()"
>
  <img
    src="<?php echo get_stylesheet_directory_uri(); ?>/images/language-logos/<?php echo $args[
    'fileName'
]; ?>.png"
    alt="<?php echo $args['displayName']; ?> icon"
  />
      <?php echo $args['displayName']; ?>
</button>
