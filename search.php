<?php get_header(); ?>


<?php get_template_part('templates/breadcrumb');?>

<div class="container">
    <?php $search =  get_search_query();
    echo '<p class=" clearfix "> Kết quả cho từ khóa "<i>'.$search.'</i></p>';
    ?>
</div>
<main role="main"  class="archive">

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
        echo 'No post found.';
    }
    ?>
</main>

<?php get_footer(); ?>