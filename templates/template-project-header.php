<?php
include dirname(__DIR__) . '/projects-info.php';
if (!is_tag()) {
    $project_info = $projects_info[$args['name']];
}
?>

<header class="project-header">
    <h2><?php echo (is_tag() ? "tag: " : "") . $args['name']; ?></h2>
    <?php if (!is_tag()): ?>
    <section class="docs-links">
        <a href="https://fern.haus/<?php echo $project_info[
            'rel_url'
        ]; ?>" class="btn btn-secondary docs-link" target="_blank" rel="noreferrer">View Project</a>
        <a href="https://github.com/alecjf/<?php echo $project_info[
            'github_repo'
        ]; ?>" class="btn btn-secondary docs-link" target="_blank" rel="noreferrer">GitHub</a>
        <?php if (!is_category()): ?>
        <a href="<?php echo get_category_link(
            $args['category']
        ); ?>" class="btn btn-secondary docs-link">More Docs</a>
        <?php endif; ?>
    </section>
    <?php endif; ?>
</header>
