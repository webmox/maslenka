<?php get_header(); ?>
		<div class="main-content">
				<?php $catID = get_query_var('cat');  ?>
				<div class="content-text section">
					<div class="container">
						<h1 class="title-page"><?php echo get_cat_name($catID); ?></h1>
						
						<div class="list-posts list-reviews-posts">
							<div class="row">
								<?php if(have_posts()) : while(have_posts())  : the_post(); ?>
									<div class="col-sm-6">
										<div class="post clearfix">
											<a href="<?php  the_permalink(); ?>"><?php the_post_thumbnail('reviews-min'); ?></a>
											<h2 class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="text-excerpt"><?php echo limit_words(get_the_excerpt(), 15); ?></div>
											<div class="btn-block"><a href="<?php the_permalink(); ?>" class="read-more">читать >></a></div>
										</div>
									</div>
								<?php endwhile ?>
								<?php endif ?>
							</div>	
						</div><!--end list-posts-->

					</div>
				</div>

		</div><!--end main-content-->
<?php get_footer(); ?>