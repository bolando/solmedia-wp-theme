<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php if (!is_front_page()):?>
	<?php get_template_part('h1');?>
<?php endif;?>
	<main role="main" <?php $classes = get_body_class(); if (!in_array('kingcomposer',$classes)):?> class="container" <?php endif;?>>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
	</main>
		<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>