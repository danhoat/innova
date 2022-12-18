<?php get_header(); ?>


<?php get_template_part('templates/breadcrumb');?>

    <main role="main" tax.php>

    <?php
    if ( have_posts() ) {

        // Load posts loop.
        while ( have_posts() ) {
            the_post();
            get_template_part('templates/post','excerpt');
            the_content();
        }
    }
    ?>
  </main>

<?php get_footer(); ?>