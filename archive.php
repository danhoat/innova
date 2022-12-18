<?php get_header(); ?>


<?php get_template_part('templates/breadcrumb');?>

<main role="main" >

    <?php
    wp_reset_query();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('templates/post','excerpt');
        }

    } else {
        echo 'No post found.';
    }
    ?>
</main>

<?php get_footer(); ?>