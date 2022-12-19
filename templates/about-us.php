<?php
global $innova_option;
$head_line  = $innova_option->head_line;
$about_us   = $innova_option->about_us;

$categories = get_terms('danh-muc', array(
    //'post_type'     => array('du-an', 'product'),
    'hide_empty'    => false,
    'fields'        => 'all',
    'exclude'       => 1,
));

?>

<div class="container welcome">
   <section class="welcome">
    <div class="text-center top-section-1">
        <strong>Chào mừng đến với</strong>
        <h2><?php echo $head_line;?></h2>
        <div style="text-align: center;">
           <?php echo $about_us;?></div>
        <div style="text-align: center;">
            &nbsp;</div>
        <br>
        <div>
            <p style="margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;">
                &nbsp;</p>
        </div>
        <br>

    </div>

    <ul class="inner">
        <?php  foreach($categories as $term){ ?>
        <?php du_an_html($term);?>
        <?php } ?>
        </ul>
    </section>
</div>