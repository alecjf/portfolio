<?php
get_header();
include_once 'projects-info.php';

function get_page_content($slug)
{
    $page = get_posts([
        'name' => $slug,
        'post_type' => 'page',
    ]);
    if ($page) {
        echo $page[0]->post_content;
    }
}
?>

<div id="front-page">
  <section id="landing">
    <div class="container">
      <h1 id="my-name">Alec Fernandes</h1>
      <div class="row" id="site-sections">
        <button class="site-section" onClick="scrollToPortfolio()">
          Portfolio
        </button>
        <a class="site-section" href="https://fern.haus/blog" target="_blank" rel="noreferrer">Blog</a>
      </div>
    </div>
  </section>
  <?php get_template_part('templates/template', 'navbar'); ?>
  <section id="portfolio">
    <div class="container">
      <div class="row" id="skills-row">
        <div class="col-md-6" id="skills-text">
          <h1>Skills</h1>
          <?php get_page_content('skills'); ?>
        </div>
        <div class="col-md-6" id="skills-btns">
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
            foreach ($icons as $file_name => $display_name) {
                get_template_part('templates/template', 'skill-icon', [
                    'file_name' => $file_name,
                    'display_name' => $display_name,
                ]);
            }
            ?>
        </div>
      </div>
      <?php function get_project_ids($cat_name)
      {
          return array_filter(
              explode("/", get_category_children(get_cat_id($cat_name)))
          );
      } ?>
      <h1 id="web-apps-header">Web Apps</h1>
      <div id="web-apps">
        <div class="row project-links">
            <?php foreach (get_project_ids("Web Apps") as $id) {
                $project = get_category($id);
                get_template_part('templates/template', 'project-card', [
                    'project_info' => $projects_info[$project->name],
                    'name' => $project->name,
                    'description' => $project->description,
                ]);
            } ?>
        </div>
      </div>
      <h1 id="client-sites-header">Websites</h1>
      <div id="client-sites">
        <div class="row project-links">
            <?php foreach (get_project_ids("Websites") as $id) {
                $project = get_category($id);
                get_template_part('templates/template', 'project-card', [
                    'project_info' => $projects_info[$project->name],
                    'name' => $project->name,
                    'description' => $project->description,
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
                <?php get_page_content('graphic-design'); ?>
            </div>
            <div id="gallery" class="col-md-8">
                <?php
                $gallery_files = [
                    'gallery (1).gif',
                    'gallery (2).gif',
                    'gallery (1).jpg',
                    'gallery (6).png',
                    'gallery (2).png',
                    'gallery (4).png',
                    'gallery (5).png',
                    'gallery (1).png',
                    'gallery (7).png',
                    'gallery (8).png',
                    'fern-haus-site-logo.png',
                ];
                foreach ($gallery_files as $file) {
                    get_template_part(
                        'templates/template',
                        'linked-gallery-image',
                        ['file_name' => $file]
                    );
                }
                ?>
            </div>
        </div>
    </div>
  </section>
  <section id="docs">
    <div class="container">
      <h1>Documentation</h1>
      <?php
      $projects_ids = array_merge(
          get_project_ids("Web Apps"),
          get_project_ids("Websites")
      );
      foreach ($projects_ids as $id) {
          get_template_part('templates/template', 'project-docs', [
              'project_info' => $projects_info[get_category($id)->name],
          ]);
      }
      ?>
    </div>
  </section>
  <?php get_template_part('templates/template', 'footer'); ?>
    </div>
    <?php get_footer();
