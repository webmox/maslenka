<?php 

if(is_category(12)){
	include(TEMPLATEPATH.'/category-akcsii.php');
}else if(is_category(11)){
	include(TEMPLATEPATH.'/category-reviews.php');
}else if(4){
	include(TEMPLATEPATH.'/category-services.php');
}else{
	include(TEMPLATEPATH.'/category-default.php');
}


?>