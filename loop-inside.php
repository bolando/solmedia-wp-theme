<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<div class="wrap-img">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('a_home'); ?>
			</a>
		<?php endif; ?>
	</div>
	<div class="wrap-info">
		<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		<div class="date"><?php echo get_the_date(); ?></div>
		<div class="text"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">[+]</a></div>
	</div>
</div>