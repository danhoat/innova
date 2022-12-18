<?php

function a_new_col(){
  $img = 'https://dulichhoangnguyen.com/upload/images/mua%20xuan%20NZ.jpg';

  ?>

<div class="col"><img src="<?php echo $img;?>" class="d-block w-100" height="330" alt="...">
    <div class="item-caption d-none d-md-block">
      <h5>First slide label</h5>
      <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.

  </p>
    </div>
  </div>
  <?php }

  function a_tab_project($id = "collapse1-ph", $show = ""){


    $args = array(
                        'post_type' => 'du-an',
                        'post_status' => 'publish',
                    );

    $the_query = new WP_Query($args);

    $img = 'https://dulichhoangnguyen.com/upload/images/mua%20xuan%20NZ.jpg';
    $img1 = "https://static1.cafeland.vn/cafelandnew/hinh-anh/2022/12/17/186/image-20221217104751-1.jpeg";
    $img2 = "https://anvietland.vn/wp-content/uploads/2021/05/202010-helios-quy-hoach-phan-khu-1024x593.jpg";
    $img3 = "https://img.dothi.net/2021/12/17/Z9BcC3fq/du-an-khu-do-thi-77c8.jpg";
    $img = INNOVA_IMG_URL.'/HasThumb.jpg';
     ?>
   <div id="<?php echo $id;?>" class="collapse <?php echo $show;?> " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion-ph">
        <div class="card-body slick-initialized slick-slider"><div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
        <div class="inner slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide40" style="width: 1200px;">

            <?php

            while($the_query->have_posts() ){
                $the_query->the_post(); ?>

                <article class="item-01">
                    <div class="khungAnh">
                         <a class="khungAnhCrop" href="<?php the_permalink();?>" tabindex="0">
                           <?php innova_post_thumbnail();?>
                        </a>
                    </div>
                    <h3>
                          <a href="<?php the_permalink();?>" title="<?php the_title();?>" tabindex="0"><?php the_title();?></a>
                    </h3>
                </article>
                <?php
            }
            ?>

            </div>
             </div>
         </div>
     </div>
</div>
<?php }

function du_an_html($term){
    $img_url = "https://media.vneconomy.vn/images/upload/2022/10/27/16-6boxaydungbaibonhieuthutuchanhchinh2021654.jpg";
     if( function_exists('z_taxonomy_image_url') ){
        $img_url_cs=  z_taxonomy_image_url($term->term_id);
        if( ! empty($img_url_cs) ) $img_url = $img_url_cs;
    }

    ?>
    <li class="item">
        <div class="img">
            <div class="khungAnh">
                <span class="khungAnhCrop">
                   <img alt="<?php echo $term->name;?>" src="<?php echo $img_url;?>" class="wide">
                </span>
            </div>
        </div>
        <h3>
            <a title="Dự án đầu tư" href="<?php echo get_term_link($term);?>"><?php echo $term->name;?></a>
        </h3>
    </li>
    <?php
}