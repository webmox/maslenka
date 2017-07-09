<?php get_header(); ?>
		<div class="main-content">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="content-text section">
					<div class="container">
						<h1 class="title-page"><?php the_title(); ?></h1>
						<div class="text"><?php the_content(); ?></div>
					</div>
				</div>
			<?php endwhile ?>
			<?php endif ?>

		</div><!--end main-content-->
<?php get_footer(); ?>