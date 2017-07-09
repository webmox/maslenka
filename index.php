<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
</head>
<?php wp_head(); ?>
<body>
	
	<div class="layout">
		<div class="header">
			<div class="main-header">
				<div class="container">
					<div class="address-header pull-left">
						<p> 
							<span>Киев</span>
							<span>ул. Глубочицкая, 101</span>
							<span>ул. Полярная, 19 б.</span>
						</p>
					</div>
					<div class="phones-header pull-right">
						<p>
							<span><a href="tel:044 338 08 48">+380 044 338 08 48</a></span>
							<span><a href="tel:095 257 11 88">+380 095 257 11 88</a></span>
							<span><a href="tel:093 328 92 85">+380 093 328 92 85</a></span>
						</p>
						<a href="#" class="btn-style">Записаться</a>
					</div>
					<div class="logo-block">
						<a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
						<p class="time-work">
							Работаем с 09:00 - 20:00<br/>Без выходных
						</p>
					</div>
				</div>
			</div><!--end main-header-->
			<div class="main-menu">
				<div class="container">
					<?php
						$args = array(
								  'theme_location'  => 'header-top-menu',
								  'menu_class'      => 'header-menu',
								  'container'       => '',
								  'before'          => '',
								  'after'           => '',
								  'link_before'     => '',
								  'link_after'      => ''
								);
						wp_nav_menu( $args );
					?>
					
					<div class="form-search-block">
						<a href="#" class="link-get-form">Поиск</a>
						<div class="search-form">
							<form method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
								<input type="text" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
							</form>
						</div>
					</div><!--end form-search-block-->

				</div>
			</div><!--end main-menu-->
		</div><!--end header-->
		<div class="main-content">

			<div class="section services">
				<div class="container">
					
					<h2 class="title-section">Топ 5 услуг этого проекта</h2>
					<?php 
					
					$top_services = new WP_Query(array('post_type'=>'post', 'cat'=>4, 'posts_per_page'=>5));

				    ?>
					
					<?php if($top_services->have_posts()){ ?>
					<div class="list-services">
						<?php while($top_services->have_posts()){  $top_services->the_post(); ?>

							<div class="item">
								<div class="block-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-srvice'); ?></a></div>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>

						<?php } ?>
					</div><!--end list-->
					<?php } ?>

				</div>
			</div><!--end  services--> 


			<div class="section services">
				<div class="container">
					
					<h2 class="title-section">Марки машин которые обслуживаем</h2>
					<?php 
					
					$top_services = new WP_Query(array('post_type'=>'post', 'cat'=>4, 'posts_per_page'=>5));

				    ?>
					
					<?php if($top_services->have_posts()){ ?>
					<div class="list-services">
						<?php while($top_services->have_posts()){  $top_services->the_post(); ?>

							<div class="item">
								<div class="block-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-srvice'); ?></a></div>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>

						<?php } ?>
					</div><!--end list-->
					<?php } ?>

				</div>
			</div><!--end  services--> 

		</div><!--end main-content-->
		<div class="footer"></div><!--end footer-->
	</div><!--end layout-->

	<?php wp_footer(); ?>
</body>
</html>