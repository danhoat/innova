<?php

function get_video_silder_html(){
    ob_start();
    $video_url1 = INNOVA_IMG_URL.'/Tropical.mp4';
    $video_url2 = INNOVA_IMG_URL.'/forest.mp4';
    $video_url3 = INNOVA_IMG_URL.'/Agua-natural.mp4';
    ?>
   <div id="videoCarousel" class="carousel carousel-dark slide videoCarousel" data-bs-ride="carousel">

         <div class="carousel-indicators">
            <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">
             <div class="carousel-item active">
              <video class="img-fluid" autoplay loop muted>
                <source src="<?php echo $video_url1;?>" type="video/mp4" />
              </video>
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                  Nulla vitae elit libero, a pharetra augue mollis interdum.
                </p>
              </div>
            </div>

            <div class="carousel-item ">
              <video class="img-fluid" autoplay loop muted>
                <source src="<?php echo $video_url2;?>" type="video/mp4" />
              </video>
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                  Nulla vitae elit libero, a pharetra augue mollis interdum.
                </p>
              </div>
            </div>
              <div class="carousel-item ">
              <video class="img-fluid" autoplay loop muted>
                <source src="<?php echo $video_url3;?>" type="video/mp4" />
              </video>
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                  Nulla vitae elit libero, a pharetra augue mollis interdum.
                </p>
              </div>
            </div>




         </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>

    <?php
    $html = ob_get_contents();
    ob_end_clean();

    return $html;
}



function video_slider_show( $atts ) {

  $atts = shortcode_atts( array(
    'type' => 'prosperity',
  ), $atts, 'bartag' );

  $type = $atts['type'];

  return get_video_silder_html();


}
add_shortcode( 'video_slider', 'video_slider_show' );
function add_custom_slider_js(){?>

<script type="text/javascript">

    var myCarousel = document.querySelector('#videoCarousel')
    //    item: 4,
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false,
        item: 3
    });
    console.log("carousel: ", carousel);

</script>
<?php }
add_action('wp_footer','add_custom_slider_js', 999);