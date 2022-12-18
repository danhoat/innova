<?php get_header(); ?>
<?php get_template_part('slider');?>
    <main role="main">

    <?php  get_template_part('about-us'); ?>
    <?php  get_template_part('project-highlight'); ?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <?php  get_template_part('templates/block','new'); ?>

    <?php
    the_post();
    the_content();
    ?>
  </main>

<?php get_footer(); ?>