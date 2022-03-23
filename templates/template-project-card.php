<div class="col-md-4">
    <a href="https://fern.haus/<?php echo $args['project_info'][
        'rel_url'
    ]; ?>"  target="_blank" rel="noreferrer">
      <div class="card">
        <img
          class="card-img-top"
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/language-logos/<?php echo $args[
    'project_info'
]['image_url']; ?>"
          alt="<?php echo $args['name'] . ' project banner'; ?>"
        />
        <div class="card-body">
          <h2><?php echo $args['name']; ?></h2>
          <p class="card-text">
              <?php echo $args['description']; ?>
          </p>
          <button class="btn btn-secondary">View Project</button>
        </div>
      </div>
    </a>
</div>
