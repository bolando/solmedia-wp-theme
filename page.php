<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php if (!is_front_page()):?>
	<section id="tlo">
		<div class="container">
			<div class="ramka">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</section>
<?php endif;?>
	<main role="main" class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
	</main>
		<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>