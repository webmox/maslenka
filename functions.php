<?php
function print_array($arr){
        echo "<pre>";
                print_r($arr);
        echo "</pre>";
}

//include(TEMPLATEPATH.'/inc/theme-options.php');


function my_load_scripts(){
  wp_enqueue_style(' bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_style('bxslider-css', get_template_directory_uri().'/css/jquery.bxslider.css');
  wp_enqueue_style('owl.carousel', get_template_directory_uri().'/css/owl.carousel.css');
  wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
  wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome/css/font-awesome.css');
  wp_enqueue_style('style', get_template_directory_uri().'/style.css');

  wp_enqueue_script('myjquery', get_template_directory_uri().'/js/jquery-1.11.3.js');
  wp_enqueue_script('jquery.bxslider', get_template_directory_uri().'/js/jquery.bxslider.js');
  wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js');
  wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js');
  wp_enqueue_script('jwplayer', get_template_directory_uri().'/js/jwplayer.js');
  wp_enqueue_script('myfunctions', get_template_directory_uri().'/js/functions.js');
}

add_action('wp_enqueue_scripts', 'my_load_scripts');

/*-----------добавляем поддержку миниатюр------------*/
add_theme_support('post-thumbnails');

add_theme_support('category-thumbnails');

/*----регистрация меню в самом верху сайта---------*/
register_nav_menu('header-top-menu', 'top-menu');

/*----регистрация для футаре---------*/
//register_nav_menu('menu-footer', 'footer-menu');


function add_custom_sizes() {
    add_image_size('img-srvice', 220, 160, true);
    add_image_size('slide_img', 1920, 450, true);
    add_image_size('thumb-gallery', 340, 220, true);
    add_image_size('reviews-min', 125, 125, true);
    add_image_size('post-acsii', 425, 425, true);
    add_image_size('gallery-min', 280, 200, true);
}

add_action('after_setup_theme','add_custom_sizes');

/*----------------------добавляем цитату для страниц---------------*/
function add_excerpt_page(){
    add_post_type_support( 'page', 'excerpt' );
}
add_action('init', 'add_excerpt_page');



/*-------------------------sidebar-------------------------------*/
register_sidebar(array(
        'name' => "Сайдбар",
        'id' => 'sidebar',
        'description' => 'Этот виджет будет показан в категории услуг',
        'class'=>'list-page',
        'before_title' => '<h2 class="title">',
        'after_title' => "</h2>\n",
        'before_widget' => '<div class="widget-block">',
        'after_widget' => "</div>")
);


/*///////////обрезаем заголовки в верхнем слайдере//////////*/
function title_chars($count, $t) {
  $title = get_the_title();
  if (mb_strlen($title) > $count)
  $title = mb_substr($title,0,$count);
  else $t = ''; echo $title . $t;
}

/*//////////////////////////////////////////////*/
function limit_words($str, $limit)
{
  $words = explode(' ', $str, ($limit + 1));
  if(count($words) > $limit) {
  array_pop($words);
  return implode(' ', $words)."..."; } else {
  return implode(' ', $words); }
}

/*//////////////////////paginations////////////////////////*/

function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '«'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '»'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}

?>