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
    $img = 'https://dulichhoangnguyen.com/upload/images/mua%20xuan%20NZ.jpg';
     $img1 = "https://static1.cafeland.vn/cafelandnew/hinh-anh/2022/12/17/186/image-20221217104751-1.jpeg";
     $img2 = "https://anvietland.vn/wp-content/uploads/2021/05/202010-helios-quy-hoach-phan-khu-1024x593.jpg";
     $img3 = "https://img.dothi.net/2021/12/17/Z9BcC3fq/du-an-khu-do-thi-77c8.jpg";
     $img = INNOVA_IMG_URL.'/HasThumb.jpg';
     ?>
   <div id="<?php echo $id;?>" class="collapse <?php echo $show;?> " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion-ph">
    <div class="card-body slick-initialized slick-slider"><div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);"><div class="inner slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide40" style="width: 1200px;">
                <article class="item-01">
                    <div class="khungAnh">
                         <a class="khungAnhCrop" href="http://mhdi10.vn/du-an-khu-nha-o-gia-dinh-quan-doi-tai-khu-dtm-nam-ho-linh-dam.htm" tabindex="0">
                            <img alt="Dự án Khu nhà ở gia đình quân đội tại khu ĐTM Nam hồ Linh Đàm" class="tall" src="<?php echo $img; ?>">
                        </a>
                    </div>
                    <h3>
                          <a href="http://mhdi10.vn/du-an-khu-nha-o-gia-dinh-quan-doi-tai-khu-dtm-nam-ho-linh-dam.htm" title="Dự án Khu nhà ở gia đình quân đội tại khu ĐTM Nam hồ Linh Đàm" tabindex="0">Dự án Khu nhà ở gia đình quân đội tại khu ĐTM Nam hồ Linh Đàm</a>
                    </h3>
                </article>
                <article class="item-01">
                    <div class="khungAnh">
                         <a class="khungAnhCrop" href="http://mhdi10.vn/du-an-cai-tao-khu-tap-the-quan-doi-bac-nghia-tan-ha-noi.htm" tabindex="0">
                     <img alt="Dự án cải tạo khu tập thể quân đội Bắc Nghĩa Tân, Hà Nội" class="wide" src="<?php echo $img;?>">
                        </a>
                    </div>
                    <h3>
                          <a href="http://mhdi10.vn/du-an-cai-tao-khu-tap-the-quan-doi-bac-nghia-tan-ha-noi.htm" title="Dự án cải tạo khu tập thể quân đội Bắc Nghĩa Tân, Hà Nội" tabindex="0">Dự án cải tạo khu tập thể quân đội Bắc Nghĩa Tân, Hà Nội</a>
                    </h3>
                </article>
                <article class="item-01">
                    <div class="khungAnh">
                         <a class="khungAnhCrop" href="http://mhdi10.vn/du-an-khu-dan-cu-va-dich-vu-thuong-mai-da-chuc-nang-an-phu-thua-thien-hue.htm" tabindex="0">
                     <img alt="Dự án Khu dân cư và dịch vụ thương mại đa chức năng An Phú, Thừa Thiên Huế" class="wide" src="http://mhdi10.vn/pic/Customer/downloa_636519657050685075_HasThumb_Thumb.jpg">
                        </a>
                    </div>
                    <h3>
                          <a href="http://mhdi10.vn/du-an-khu-dan-cu-va-dich-vu-thuong-mai-da-chuc-nang-an-phu-thua-thien-hue.htm" title="Dự án Khu dân cư và dịch vụ thương mại đa chức năng An Phú, Thừa Thiên Huế" tabindex="0">Dự án Khu dân cư và dịch vụ thương mại đa chức năng An Phú, Thừa Thiên Huế</a>
                    </h3>
                </article>
                <article class="item-01">
                    <div class="khungAnh">
                         <a class="khungAnhCrop" href="http://mhdi10.vn/du-an-cong-trinh-hon-hop-co-quan-van-phong-dich-vu-thuong-mai-tai-quan-cau-giay-ha-noi.htm" tabindex="0">
            <img alt="Dự án Công trình hỗn hợp Cơ quan - Văn phòng - Dịch vụ thương mại tại quận Cầu Giấy, Hà Nội" class="tall" src="http://mhdi10.vn/pic/Customer/CT4-Phoi-_636519655179358041_HasThumb.jpg">
                        </a>
                    </div>
                    <h3>
                          <a href="http://mhdi10.vn/du-an-cong-trinh-hon-hop-co-quan-van-phong-dich-vu-thuong-mai-tai-quan-cau-giay-ha-noi.htm" title="Dự án Công trình hỗn hợp Cơ quan - Văn phòng - Dịch vụ thương mại tại quận Cầu Giấy, Hà Nội" tabindex="0">Dự án Công trình hỗn hợp Cơ quan - Văn phòng - Dịch vụ thương mại tại quận Cầu Giấy, Hà Nội</a>
                    </h3>
                </article> </div></div></div></div>
            </div>
<?php }