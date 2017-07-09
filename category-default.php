<?php get_header(); ?>
		<div class="main-content">
				<?php $catID = get_query_var('cat');  ?>
				<div class="content-text section">
					<div class="container">
						<h1 class="title-page"><?php echo get_cat_name($catID); ?></h1>
						
						<div class="list-posts">
							<?php if(have_posts()) : while(have_posts())  : the_post(); ?>
								<div class="post clearfix">
									<a href="<?php  the_permalink(); ?>"><?php the_post_thumbnail('post-acsii'); ?></a>
									<h2 class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="read-more btn-style">Узанть больше</a>
								</div>
							<?php endwhile ?>
							<?php endif ?>
						</div><!--end list-posts-->

					</div>
				</div>

		</div><!--end main-content-->
<?php get_footer(); ?>