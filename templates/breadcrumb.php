<?php
$title= '';
if( is_tax() ){
    $title = single_term_title('', false);
} else{
    if( ! empty( single_post_title( '', false ) ) )
    $title = single_post_title();
}
?>
<div class="banner">
    <div class="sub-banner">
    <div class="link-page">
        <div class="container text-center">
<?php if ( !is_home() && ! is_front_page()   ) : ?>
    <header class="page-header alignwide">
        <h1 class="page-title"><?php echo $title; ?></h1>
    </header><!-- .page-header -->
<?php endif; ?>

            <nav class="breadcrumb">
                <a href="/" title="Trang chủ" class="breadcrumb-item">Trang chủ</a>
                <a class="breadcrumb-item active" href="http://mhdi10.vn/linh-vuc-kinh-doanh.htm" title="Lĩnh vực kinh doanh"><?php echo $title; ?></a>
            </nav>
        </div>
    </div>
</div>
</div>