<?php get_header(); ?>


<?php get_template_part('templates/breadcrumb');?>
<?php if(is_tax() ){ ?>
    <section class="description">
        <?php echo term_description();?>
    </section>
<?php }?>

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