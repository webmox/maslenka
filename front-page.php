<?php get_header(); ?>
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


			<div class="section models">
				<div class="container">
					
					<h2 class="title-section">Марки машин которые обслуживаем</h2>
					<?php 
					
				 		if(have_posts()){
				 			while(have_posts()){ the_post();
				 				$models = get_field('model_cars');
				 				$slider = get_field('slider');
				 				$why_left_coll = get_field('why-left');
				 				$why_right_coll = get_field('why-right');
				 				$video_link = get_field('video_link');
				 			}
				 		}

				 		//print_array($models);

				    ?>
					<?php if($models){ ?>
				    <div class="table-models">
				    	<div class="wrap_rows">
				    		<?php foreach($models as $model){ ?>
				    			<div class="item-model"><?php echo $model['add_model']; ?></div>
				    		<?php } ?>
				    	</div>
				    </div>
				    <?php } ?>

				    <div class="btn_block">
				    	<a href="<?php echo get_category_link(4); ?>" class="btn-style">Все услуги</a>
				    </div>

				</div>
			</div><!--end  services--> 


			<div class="section slider-section">
					<?php if($slider){ ?>
					<div class="home-slider">
						<?php foreach($slider as $slide_img){ ?>
							<div class="item">
								<?php $img = wp_get_attachment_image($slide_img['img_slide']['id'], 'slide_img'); ?>
								<div class="slide_item">
									<a href="<?php $slide_img['link_slide']; ?>"><?php echo $img; ?></a>
									<?php if($slide_img['text_slide']){ ?>
									<div class="wrap_content">
										<div class="container">
											<div class="descript_block">
												<?php echo $slide_img['text_slide']; ?>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div><!--end slider-section-->


			<div class="section why-recomend">
				<div class="container">
					<h2 class="title-section">Почему нас рекомендують</h2>

					<div class="list-recomend">
						<div class="row">
							<div class="col-md-6">
								<?php if($why_left_coll){ ?>
								<div class="left_col">
									<ul class="items-recomend">
										<?php foreach($why_left_coll as $item){ ?>
											<li class='left_item'><?php echo  $item['text-item']; ?></li>
										<?php } ?>
									</ul>
								</div>
								<?php } ?>
							</div>
							<div class="col-md-6">
								<?php if($why_right_coll){  //print_array($why_right_coll); ?>
								<div class="right_col">
									<ul class="items-recomend">
										<?php foreach($why_right_coll as $item){ ?>
											<li class="right_item" style="background:url('<?php echo $item['img_icon']; ?>') no-repeat left center;"><?php echo $item['text-item-2'] ?></li>
										<?php } ?>
									</ul>
								</div>
								<?php } ?>
							</div>
						</div>
					</div><!--end list-recomend-->


					<div class="recomend-dop-info">
						<div class="row">
							<div class="col-sm-4">
								<?php $gallery = new WP_Query(array('post_type'=>'page', 'page_id'=>45)); ?>
								<?php while($gallery->have_posts()){ 
										$gallery->the_post(); 
										$gallery_photos = get_field('gallery'); 
								    } 
								    ?>

								<?php if($gallery_photos){ ?>
									<div class="wrap-gallery">
										<h3>Галерея</h3>
										<div class="gallery">
											<?php foreach($gallery_photos as $gallery_photo){ ?>
												<?php  $img = wp_get_attachment_image($gallery_photo['gallery_img']['id'], 'thumb-gallery'); ?>
												<div class="item"><a href="<?php echo $gallery_photo['gallery_img']['url'] ?>" rel="group"><?php echo $img; ?></a></div>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="col-sm-4">
								<div class="wrap-video-player">
									<h3>Web камера</h3>
									<div class="web-player">

									<script type="text/javascript">

										$(document).ready(function(){
											jwplayer('player_vidio').setup({
												file:"<?php echo $video_link; ?>",
												width:"100%",
												height:"420px",	
												controls:true,
												autostart:false,
												mute:false,
												stretching:"uniform"											
											});
										});
									
									</script>

										<div id="player_vidio">video</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="wrap-reviews">
									<?php $reviews = new WP_Query(array('post_type'=>'post', 'cat'=>11)) ?>
									<h3><?php echo get_cat_name(11); ?></h3>
									<div class="reviews">
										<div class="revicews-list">
											<?php if($reviews->have_posts()) : while($reviews->have_posts()) : $reviews->the_post(); ?>
												<div class="item">
													<div class="img_block"><?php the_post_thumbnail('reviews-min'); ?></div>
													<div class="text_block">
														<div class="text"><?php echo limit_words(get_the_excerpt(), 20) ?></div>
														<div class="name-people"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
													</div>
												</div>
											<?php endwhile ?>
											<?php endif ?>
										</div>
									</div>

									<div class="wrap-btn"><a href="<?php echo get_category_link(11); ?>" class="btn-style">Все отзывы</a></div>
								</div>
							</div>
						</div>
					</div><!--end recomend-dop-info-->

				</div>

			</div><!--end why-recomend-->

		</div><!--end main-content-->
<?php get_footer(); ?>