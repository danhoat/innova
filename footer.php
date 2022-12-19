

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<footer id="footer">
    <div class="container">
      <?php wp_footer(); ?>

        <div class="row">
            <div class="col-12 col-lg-6 left">
                <!-- nav footer -->

                <div class="nav-footer">

                    <div class="block">
                        <strong class="header-f">Giới thiệu </strong>
                        <strong class="header-f">Tin tức</strong>
                        <strong class="header-f">Liên Hệ</strong>
                        <strong class="header-f">Thư viện ảnh &amp; video</strong>

                    </div>
                    <div class="block">
                        <strong class="header-f">Lĩnh vực kinh doanh</strong>
                        <ul>

                            <?php $categories = get_terms('danh-muc', array(
                                'hide_empty'    => false,
                                'fields'        => 'all',
                                'exclude'       => 1,
                                'number'    => 5,
                            ));
                            if($categories && !is_wp_error($categories)){
                                foreach($categories as $term){
                                    ?>
                                    <li>
                                       <a title="Dự án đầu tư" href="<?php echo get_term_link($term);?>"><?php echo $term->name;?></a>
                                    </li>
                                    <?php
                                }
                            } ?>
                        </ul>
                     </div>

                </div>

            </div>

            <div class="col-12 col-lg-6 right">

                <strong class="header-f">CÔNG TY CỔ PHẦN XÂY DỰNG BẮC NAM TRUNG</strong>
                <div class="contact-f">
                    <p>
                        <img src="<?php echo INNOVA_IMG_URL;?>/marker.png" alt="">
                        <span> Địa chỉ: 29/18 Đường B3, Phường Tây Thạnh, Quận Tân Phú, TP.HCM<br /> &nbsp;&nbsp;&nbsp; &nbsp; Mã số thuế: 0305482968</span>
                    </p>

                    <p>
                        <img src="<?php echo INNOVA_IMG_URL;?>/phone.png" alt="">
                        <span>Điện thoại:028.6681.9797  Fax: 028.6681.9797  </span>
                    </p>
                    <p>
                        <img src="<?php echo INNOVA_IMG_URL;?>/email.png" alt="">
                        <span>Email: bacnamtrung08@gmail.com</span>
                    </p>
                    <p>
                        <img src="<?php echo INNOVA_IMG_URL;?>/website.png" alt="">
                        <span>Website: bacnamtrung.com</span>
                    </p>
                </div>

                <div class="maps">
                        <a href="#" data-toggle="modal" data-target="#modal-map">
                            <span>Bản đồ chỉ dẫn</span>
                            <img src="css/icons/map.png" alt="">
                        </a>
                </div>

                <div class="sociat">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="google + ">
                        <i class="fa-brands fa-google-plus-g"></i>
                    </a>
                    <a href="Twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="pinterest">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <!-- copyright -->

</footer>

    </main>
  </body>
</html>
