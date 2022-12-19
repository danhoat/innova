<?php

global $innova_option;
$img_1 = $innova_option->image_slider_1;
$img_2 = $innova_option->image_slider_2;
$img_3 = $innova_option->image_slider_3;
$show_label = false;
?>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?php echo $img_1;?>" class="d-block w-100" height="630" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <?php if( $show_label ){?>
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        <?php } ?>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?php echo $img_2;?>"  class="d-block w-100" alt="..." height="630">
      <div class="carousel-caption d-none d-md-block">
        <?php if( $show_label ){?>
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      <?php } ?>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $img_3;?>" class="d-block w-100" alt="..." height="630">
      <div class="carousel-caption d-none d-md-block">
          <?php if( $show_label ){?>
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      <?php } ?>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>