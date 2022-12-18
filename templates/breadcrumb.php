<?php
$title= '';
if( is_tax() ){
    $title = single_term_title('', false);
}
?>
<div class="banner">
    <div class="sub-banner">
    <div class="link-page">
        <div class="container text-center">
            <h1 class="heading-title"> <?php echo $title;?></h1>
            <nav class="breadcrumb">
                <a href="/" title="Trang chủ" class="breadcrumb-item">Trang chủ</a>
                <a class="breadcrumb-item active" href="http://mhdi10.vn/linh-vuc-kinh-doanh.htm" title="Lĩnh vực kinh doanh"><?php echo $title; ?></a>
            </nav>
        </div>
    </div>
</div>
</div>