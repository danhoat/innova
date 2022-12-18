<?php

function innova_post_thumbnail(){
	if( has_post_thumbnail() ){
		the_post_thumbnail();
	} else {
		echo '<img src="'.INNOVA_IMG_URL.'/thumbnail.jpg">';
	}

}