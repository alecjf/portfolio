<a
  class="btn btn-secondary skill-icon"
  href="<?php echo get_tag_link(
      get_term_by('slug', $args['file_name'], 'post_tag')
  ); ?>"
>
  <img
    src="<?php echo get_stylesheet_directory_uri(); ?>/images/language-logos/<?php echo $args[
    'file_name'
]; ?>.png"
    alt="<?php echo $args['display_name']; ?> icon"
  />
      <?php echo $args['display_name']; ?>
</a>
