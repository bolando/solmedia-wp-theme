<?php get_header(); ?>
<?php get_template_part('h1');?>         
<section id="category">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="flex">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<?php get_template_part('loop-inside');?>
						<?php endwhile; ?>
						<div class="pagination">
							<?php solmedia_pagination(); ?>
						</div>
					<?php endif; ?>  
				</div>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'right' ); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?> 