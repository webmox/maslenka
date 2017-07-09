<?php get_header(); ?>
		<div class="main-content">
	
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="content-text section">
					<div class="container">
						<h1 class="title-page"><?php the_title(); ?></h1>
						
						<?php $gallery = get_field('gallery'); ?>
						<?php //print_array($gallery); ?>

						<?php if($gallery){ ?>
							<div class="gallery-list">
								<?php foreach($gallery as $photo){ ?>
								<?php   $img = wp_get_attachment_image($photo['gallery_img']['id'], 'gallery-min'); ?>
									<div class="item-photo">
										<div class="photo">
											<a href="<?php echo  $photo['gallery_img']['url']; ?>" rel="group"><?php echo  $img; ?></a>
										</div>
										<h4 class="title-photo"><?php echo $photo['title_photo']; ?> </h4>
									</div>
								<?php } ?>

								<div class="btn-block"><a href="<?php the_permalink(); ?>" class="btn-style">Подгрузить еще</a></div>
							</div>
						<?php } ?>

					</div>
				</div>
			<?php endwhile ?>
			<?php endif ?>

		</div><!--end main-content-->
<?php get_footer(); ?>