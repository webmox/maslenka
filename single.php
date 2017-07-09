<?php

 $post = $wp_query->post;
 if(is_single()){
	$cat = get_the_category($post->ID);
	$cat_parent = $cat[0]->category_parent;
	$cat = get_category($cat_parent);
	//echo $cat->term_id;
	
}

  if (in_category('4') or in_category(10)){
      include(TEMPLATEPATH.'/single-service.php');
  }else if($cat->term_id == 4){
      include(TEMPLATEPATH.'/single-service.php');
  }
  else {
      include(TEMPLATEPATH.'/single-default.php');
  }
  
?>
