<!doctype html>
<html>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<body>
 
<main>
    <section>
   <?php get_template_part('loop'); ?>
    </section>
</main>
<?php get_footer(); ?>
</body>
</html>