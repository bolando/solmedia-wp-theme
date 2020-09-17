<?php get_header(); ?>
	<main role="main" class="container">
		<!-- <div class="breadcrumbs">
			<?php //the_breadcrumb(); ?>
		</div> -->
		<section>
			<div class="row">
			<div class="col-md-9">

				<h1><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="date-tags">
								<span class="date"><?php echo get_the_date(); ?></span>
								<span class="tags"><?php echo the_tags(); ?></span>
							</div>
					<?php the_content(); ?>
				</article>

			<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'right' ); ?>
			</div>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
