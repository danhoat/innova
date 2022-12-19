<?php
$title  = '';
$sub1    = '';

if( is_tax() ){
    $title = single_term_title('', false);
} else {
    if( ! empty( single_post_title( '', false ) ) ){
        $title = single_post_title('', false );
    }
    if( is_singular('du-an') ){

        $tax    = get_the_terms($post,'danh-muc');
        if( $tax && !is_wp_error($tax) ){
            $tax = $tax[0];

            $sub1 = '<a class="breadcrumb-item" href="'.get_term_link($tax).'"> '.$tax->name.'</a>';
        }
    }
    if ( is_post_type_archive() ) {
        $title = post_type_archive_title('', false);
    }
    if( is_search() ){
        $title = "Tìm kiếm";
    }

}
?>
<div class="banner">
    <div class="sub-banner">
    <div class="link-page">
        <div class="container text-center">

            <header class="page-header alignwide">
                <h1 class="page-title"><?php echo $title; ?></h1>
            </header><!-- .page-header -->

            <nav class="breadcrumb">
                    <a href="/" title="Trang chủ" class="breadcrumb-item">Trang chủ</a> <?php echo $sub1;?>
                    <a class="breadcrumb-item active" href="#" title="Lĩnh vực kinh doanh"><?php echo $title; ?></a>
            </nav>
        </div>
    </div>
</div>
</div>