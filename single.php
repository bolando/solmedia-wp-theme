<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post();
$id =  $wp_query->post->ID; ?>
	<section id="tlo">
		<div class="container">
			<div class="ramka">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</section>
	<main role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="date"><?php echo get_the_date(); ?></div>
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