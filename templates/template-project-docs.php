<?php
// interesting how $id works here without being in the dependency array...
$name = get_category($id)->name; ?>

<article class="project-docs">
    <?php get_template_part('templates/template', 'project-header', [
        'name' => $name,
        'category' => $id,
    ]); ?>
    <section>
        <?php
        $custom_args = [
            'posts_per_page' => 1,
            'cat' => $id,
        ];
        $q = new WP_Query($custom_args);
        if ($q->have_posts()) {
            while ($q->have_posts()):
                $q->the_post(); ?>
                <div class="latest-post-title">
                    <small>Latest Post:</small>
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="latest-content"><?php
                the_content();
                get_template_part('templates/template', 'tag-links');
                ?></div>
            <?php
            endwhile;
            wp_reset_postdata();
        } else {
            echo "<div class='latest-content'><p>No posts for " . $name . "</p></div>";
        }
        ?>
    </section>
</article>
<hr />
