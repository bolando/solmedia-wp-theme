<?php get_header(); ?>
<?php get_template_part('h1');?>         
<section id="category">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="flex">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
							<div class="wrap-img">
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail('a_home', array( 'class' => 'img-responsive' ) ); ?>
									</a>
								<?php endif; ?>
							</div>
							<div class="wrap-info">
								<a href="<?php the_permalink(); ?>"><?php the_title('<h3 class="title sc-font">','</h3>'); ?></a>
								<div class="date"><?php echo get_the_date(); ?></div>
								<div class="text"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">[+]</a></div>
							</div>
						</div>
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