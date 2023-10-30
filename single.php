<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post();?>
<?php get_template_part('h1');?>
	<main role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if (get_post_type() == 'post'):?>
							<div class="date"><?php echo get_the_date(); ?></div>
						<?php endif;?>
						<?php the_content(); ?>
					</article>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'right' ); ?>
				</div>
			</div>
		</div>
	</main>
		<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>