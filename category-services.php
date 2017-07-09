<?php get_header(); ?>
		<div class="main-content">
				<?php $catID = get_query_var('cat');  ?>
				<div class="content-text section">
					<div class="container">
						<h1 class="title-page"><?php echo get_cat_name($catID); ?></h1>
						
						<div class="list-services">
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="service-item">
								<div class="img-block">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('gallery-min'); ?>
										<span class="read_btn"><span class="text-btn">Узнать больше</span></span>
									</a>
								</div>
								<h4 class="title-service"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</div>
							<?php endwhile ?>
							<?php endif ?>
						</div>

					</div>
				</div>

		</div><!--end main-content-->
<?php get_footer(); ?>