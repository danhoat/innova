<?php
$categories = get_terms('danh-muc', array(
    //'post_type'     => array('du-an', 'product'),
    'hide_empty'    => false,
    'fields'        => 'all',
    'exclude'       => 1,
));

?>


<div class="container welcome">
   <section class="welcome">
    <div class="text-center top-section-1">
        <strong>Chào mừng đến với</strong>
        <h2>Công Ty Bắc Trung Nam</h2>
        <div style="text-align: center;">
            Với khẩu hiệu "1 ý chí, 10 thành công", tập thể<strong> Công ty&nbsp;Cổ phần Đầu tư Xây dựng và Thương mại MHDI 10</strong> đang nỗ lực không ngừng tìm kiếm cơ hội trong các lĩnh vực "Đầu tư xây dựng - Thi công xây lắp - Kinh doanh, thương mại - Tư vấn, khảo sát, thiết kế" khai thác mọi tiềm năng để trở thành một Công ty đi đầu trong lĩnh vực xây dựng.</div>
        <div style="text-align: center;">
            &nbsp;</div>
        <br>
        <div>
            <p style="margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;">
                &nbsp;</p>
        </div>
        <br>

    </div>

    <ul class="inner">
        <?php  foreach($categories as $term){ ?>
        <?php du_an_html($term);?>
        <?php } ?>
        </ul>
    </section>
</div>