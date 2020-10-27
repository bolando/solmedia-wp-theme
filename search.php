<?php get_header(); ?>

	<main role="main" class="container">
		<section>
			<h3>Wyniki wyszukiwania: <span class="search-highlight"><?php echo get_search_query(); ?></span></h3>
			<p>&nbsp;</p>
			<ol>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php search_title_highlight(); ?></a></li>
				<?php //search_content_highlight(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
			</ol>
		</section>
	</main>

<?php get_footer(); ?> 