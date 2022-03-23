<?php
$tags = get_the_tags(get_the_ID());
if ($tags): ?>
<small class="tags">tags:
    <?php for ($i = 0; $i < count($tags); $i++): ?>
        <a href="<?php echo get_tag_link($tags[$i]); ?>"><?php echo $tags[$i]
    ->name; ?></a><?php echo $i < count($tags) - 1 ? ", " : "";endfor; ?>
</small>
<?php endif;
?>
