<?php if (!is_front_page()) {
    get_template_part('templates/template', 'footer');
} ?>
<script>
    const d = new Date(),
        elem = document.getElementById("copyright-year");
    elem && (elem.innerText += d.getFullYear());
</script>
<?php wp_footer(); ?>
</body>
</html>
