<?php get_header(); ?>
<header class="project-header">
    <h2><?php the_title(); ?></h2>
</header>
<?php get_template_part('templates/template', 'navbar'); ?>
<main id="page-content" class="container">
    <?php the_content(); ?>
</main>
<?php get_footer();
?>
