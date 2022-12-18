<?php get_header(); ?>


<?php get_template_part('templates/breadcrumb');?>

<main role="main" archive.php>

    <?php
    wp_reset_query();
    if ( have_posts() ) {

        while ( have_posts() ) {
            the_post();

            get_template_part('templates/post','content');
        }

        // Previous/next page navigation.

    } else {
        echo 'No post found.';
    }
    ?>
</main>

<?php get_footer(); ?>