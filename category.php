<?php
get_header();
$obj = is_single()
    ? get_the_category(get_queried_object()->ID)[0]
    : get_queried_object();
get_template_part('templates/template', 'project-header', [
    'name' => $obj->name,
    'category' => $obj->term_id,
]);
get_template_part('templates/template', 'navbar');
?>
<div id="project-category" class="container">
    <section id="category-posts">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <article>
                    <?php if (is_single()): ?>
                        <h3 class="title-link single-title">
                            <?php the_title(); ?>
                        </h3>
                        <p class="date"><?php echo get_the_date(); ?></p>
                    <?php else: ?>
                        <h3 class="title-link">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                    <?php endif; ?>
                    <a class="linked-thumbnail <?php echo is_single()
                        ? 'single-post-thumb'
                        : ''; ?>" href="<?php the_permalink(); ?>" style="<?php echo is_single()
    ? 'float: none; margin: 0;'
    : ''; ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <?php
                    if (!is_single()): ?>
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <?php endif;
                    the_content("...read more");
                    get_template_part('templates/template', 'tag-links');
                    ?>
                </article>
                <hr />
            <?php
            endwhile;
        else:
             ?>
            <article>
                <p style="text-align: center;">
                    Sorry, there are no posts to display!
                </p>
            </article>
        <?php
        endif; ?>
    </section>
    <div id="pagination">
        <div id="previous-page">
            <?php previous_posts_link('<< newer'); ?>
        </div>
        <div id="next-page">
            <?php next_posts_link('older >>'); ?>
        </div>
    </div>
</div>
<?php get_footer();
