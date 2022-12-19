<?php

function innova_post_thumbnail(){
	if( has_post_thumbnail() ){
		the_post_thumbnail();
	} else {
		echo '<img src="'.INNOVA_IMG_URL.'/thumbnail.jpg">';
	}

}
function get_innova_post_thumbnail(){
	return has_post_thumbnail() ? get_the_post_thumbnail() : '<img src="'.INNOVA_IMG_URL.'/thumbnail.jpg">';
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