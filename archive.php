<?php get_header(); ?>


<?php get_template_part('templates/breadcrumb');?>

<main role="main" >

    <?php
    wp_reset_query();
    if ( have_posts() ) {
       // echo '<div class= "row">';
        while ( have_posts() ) {
            the_post();
            get_template_part('templates/post','excerpt');
        }
        //echo '</div>';

    } else {
        echo 'Chưa có bài viết.';
    }
    ?>
</main>

<?php get_footer(); ?>