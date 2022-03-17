<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Alec Fernandes</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="front-page">
      <section id="landing">
        <div class="container">
          <h1 id="my-name">Alec Fernandes</h1>
          <div class="row" id="site-sections">
            <button class="site-section" onClick="scrollToPortfolio()">
              Portfolio
            </button>
            <a href="./blog" type="button" class="site-section">Blog</a>
          </div>
        </div>
      </section>
      <nav id="navbar">NAVBAR</nav>
      <section id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h1>Skills</h1>
              <p>
                I am a web developer who is proficient in the following
                languages and frameworks:
              </p>
            </div>
            <div class="col-md-8" id="skills">
                <?php
                $icons = [
                    'javascript' => 'JavaScript',
                    'react' => 'React',
                    'wordpress' => 'WordPress',
                    'firebase' => 'Firebase',
                    'bootstrap' => 'Bootstrap',
                    'html' => 'HTML',
                    'css' => 'CSS',
                    'sass' => 'Sass',
                    'php' => 'PHP',
                ];
                foreach ($icons as $fileName => $displayName) {
                    get_template_part('templates/template', 'skill-icon', [
                        'fileName' => $fileName,
                        'displayName' => $displayName,
                    ]);
                }
                ?>
            </div>
          </div>
          <?php
          $webapps = [
              'Door 2 Dharma' => [
                  'image_url' => 'php.png',
                  'rel_url' => 'projects/d2d',
                  'description' =>
                      'A suite of web apps with games and interactive study guides about Buddhist concepts.',
              ],
              'Fern Haus Tarot' => [
                  'image_url' => 'php.png',
                  'rel_url' => 'projects/tarot',
                  'description' =>
                      'Sign up and save your daily tarot readings. Accounts are managed using Firebase.',
              ],
              'I-Ching' => [
                  'image_url' => 'php.png',
                  'rel_url' => 'projects/i-ching',
                  'description' =>
                      'Cast the ancient lines and view them displayed beautifully with CSS.',
              ],
              'Workout Timer' => [
                  'image_url' => 'php.png',
                  'rel_url' => 'projects/workout',
                  'description' =>
                      'Stay focused with this JavaScript workout timer.',
              ],
          ];
          $websites = [
              'Ascend Tree Service' => [
                  'image_url' => 'php.png',
                  'rel_url' => 'projects/ascend',
                  'description' =>
                      'A website redesign and new content for a Bay Area landscaping company.',
              ],
              'The Back Burner' => [
                  'image_url' => 'php.png',
                  'rel_url' => 'blog',
                  'description' =>
                      'My blog, custom themed and powered by WordPress.',
              ],
          ];
          ?>
          <h1 id="web-apps-header">Web Apps</h1>
          <div id="web-apps">
            <div class="row project-links">
                <?php foreach ($webapps as $name => $info) {
                    get_template_part('templates/template', 'project-card', [
                        'name' => $name,
                        'info' => $info,
                    ]);
                } ?>
            </div>
          </div>
          <h1 id="client-sites-header">Websites</h1>
          <div id="client-sites">
            <div class="row project-links">
                <?php foreach ($websites as $name => $info) {
                    get_template_part('templates/template', 'project-card', [
                        'name' => $name,
                        'info' => $info,
                    ]);
                } ?>
            </div>
          </div>
          <button
            class="btn btn-primary"
            id="view-docs"
            onclick="scrollToDocs()"
          >
            Projects Documentation
          </button>
        </div>
      </section>
      <section id="graphic-design">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Graphic Design</h1>
                    <p>My work blah blah blah...</p>
                </div>
                <div id="gallery" class="col-md-8">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (1).gif" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (2).gif" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (1).jpg" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (6).png" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (2).png" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (4).png" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (5).png" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (1).png" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (7).png" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/gallery (8).png" alt="" />
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic-design/fern-haus-site-logo.png" alt="" />
                </div>
            </div>
        </div>
      </section>
      <section id="docs">
        <div class="container">
          <h1>Documentation</h1>
        </div>
      </section>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
