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