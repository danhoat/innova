<?php

function innova_post_thumbnail(){
	echo get_innova_post_thumbnail();

}
function get_innova_post_thumbnail(){
	return has_post_thumbnail() ? get_the_post_thumbnail() : '<img src="'.INNOVA_IMG_URL.'/thumbnail.png">';
}
function innova_custom_logo(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

	if( $image ){

		echo '<img src="'.$image[0].'">';
	}else{
		echo '<img src="'.INNOVA_IMG_URL.'/logo.jpg">';
	}
}

function get_innova_option(){
	$options = get_option("innova_theme_options");
	$default = array(
		'head_line' 		=> 'Công TY Bắc Nam Trung',
		'about_us' 			=> '',
		'image_slider_1' 	=> INNOVA_IMG_URL.'/slider.jpg?v='.rand(),
		'image_slider_2' 	=> INNOVA_IMG_URL.'/slider.jpg?v='.rand(),
		'image_slider_3' 	=> INNOVA_IMG_URL.'/slider.jpg?v='.rand(),
	);
	$result = wp_parse_args($options, $default);
	return (object) $result;
}