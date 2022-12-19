<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="<?php echo INNOVA_IMG_URL;?>/favicon.jpg">

    <title><?php wp_title(); ?></title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@400;500;700&family=Dancing+Script:wght@400;500&family=K2D&family=Roboto&display=swap" rel="stylesheet">

    <link href="<?php echo get_stylesheet_uri();?>?ver=<?php echo rand();?>" rel="stylesheet">
    <link href="<?php echo INNOVA_URL;?>/mobile.css?ver=<?php echo rand();?>" rel="stylesheet">
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>

  <header><?php get_template_part('templates/nav'); ?></header>

