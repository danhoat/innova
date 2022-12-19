<?php

$args =  array(
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'category__not_in' => 12
);
$query = new WP_Query($args);
$html = '';
if($query->have_posts() ){
    $i = 0;
    $html ='<div class="carousel-item active"> <div class="row">';
    while($query->have_posts() ){

        $query->the_post();


        if( $i %3 == 0 && $i >0)
           $html.='<div class="carousel-item "> <div class="row">';

        $html .='<div class="col-4"><a href="'.get_permalink().'">'.get_innova_post_thumbnail().'</a>';
        $html.='<div class="item-caption d-none d-md-block">';
        $html.='<h5><a href="'.get_permalink().'">'.get_the_title().'</a></h5>';
        $html.='<p>'.get_the_excerpt().'</p>';
        $html.='</div></div>';


        if( $i %3 == 2 || $i == $query->found_posts )
            $html.='</div></div>';
        $i++;
    }
}
?>
<section class="news">
  <div class="container">
        <div class="text-center top-section-1">
            <h2>
                <a href="/tin-tuc.htm">TIN TỨC SỰ KIỆN</a>
            </h2>
        </div>
         <hr class="featurette-divider">
        <div id="newcarouSel" class="carousel carousel-dark slide newcarouSel" data-bs-ride="carousel">

          <div class="carousel-inner">
             <?php echo $html;?>
          </div>
          <?php if($query->found_posts > 3) {?>
              <button class="carousel-control-prev" type="button" data-bs-target="#newcarouSel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#newcarouSel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          <?php } ?>
        </div>
        <script type="text/javascript">
            // (function($){
            //     $( document ).ready(function() {
                    // const carousel = new bootstrap.Carousel('#newcarouSel');
                    var myCarousel = document.querySelector('#newcarouSel')
                    //    item: 4,
                    var carousel = new bootstrap.Carousel(myCarousel, {
                        interval: 2000,
                        wrap: false,
                        item: 3
                    });
                    console.log("carousel: ", carousel);

            //     });
            //     console.log('ready');

            // });
        </script>
      </div>
</section>