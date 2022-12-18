<?php get_header(); ?>
<?php  // get_template_part('slider');?>
    <main role="main">

    <?php
    if ( have_posts() ) {

        // Load posts loop.
        while ( have_posts() ) {
            the_post();

            the_content();
        }
    }
    ?>
  </main>

<?php get_footer(); ?>