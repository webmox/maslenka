<?php get_header(); ?>
		<div class="main-content">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="content-text section single-service">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="sidebar">
									<?php if(dynamic_sidebar('sidebar')){} ?>
								</div>
							</div>
							<div class="col-md-8">
								<div class="content">
									<h1 class="title-page"><?php the_title(); ?></h1>
									<div class="text"><?php the_content(); ?></div>
									<div class="service-info">
										<?php $price = get_field('price'); ?>
										<?php $time = get_field('min-time'); ?>
										<div class="row">
											<div class="col-sm-4">
												<div class="block_price">
													<p>Цена <br/> минимальная</p>
													<p class="price"><?php echo $price; ?></p>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="block_time">
													<p>Время на работу</p>
													<p class="time"><?php echo $time; ?></p>
													<p class="info-time">Если не возникло проблем во время работы*</p>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="block_bnt">
													<a href="#order_service" class="btn-style order-service">Записаться</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			<?php endwhile ?>
			<?php endif ?>

		</div><!--end main-content-->
<?php get_footer(); ?>