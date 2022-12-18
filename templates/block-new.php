 <!-- START THE FEATURETTES -->
<section >
  <div class="container">
        <div class="text-center top-section-1">
            <h2>
                <a href="/tin-tuc.htm">TIN TỨC SỰ KIỆN</a>
            </h2>
        </div>
         <hr class="featurette-divider">

        <?php

        $img = INNOVA_URL."/images/project2.jpg";
        ?>
        <div id="newcarouSel" class="carousel carousel-dark slide newcarouSel" data-bs-ride="carousel">

          <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row">
                      <?php a_new_col();?>
                      <?php a_new_col();?>
                     <?php  a_new_col();?>
                   </div>
                </div>
                <div class="carousel-item " data-bs-interval="10000">
                     <div class="row">
                      <?php a_new_col();?>
                      <?php a_new_col();?>
                     <?php  a_new_col();?>
                   </div>
                </div>


          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#newcarouSel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#newcarouSel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
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