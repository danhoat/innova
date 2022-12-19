<?php
/**
 * Template Name: Tuyen Dung
 */

?>
<?php get_header(); ?>


<?php get_template_part('templates/breadcrumb');?>

<main role="main" class="archive" >

    <?php
    wp_reset_query();
    $args =  array('post_type' => 'post','post_status' => 'publish', 'category__in' => 12);
    $query = new WP_Query($args);


    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part('templates/post','excerpt');
        }

    } else {
        echo 'No post found.';
    }
    wp_reset_query();
    ?>
</main>

<?php get_footer(); ?>