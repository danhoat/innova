<?php get_header(); ?>
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