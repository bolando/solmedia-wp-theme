<section id="tlo" <?php if (has_post_thumbnail()):?>style="background-image: url('<?php the_post_thumbnail_url();?>');" <?php endif;?>>
	<div class="container">
		<div class="ramka">
			<h1><?php if (is_category()) {echo single_cat_title();} elseif (is_archive()) {post_type_archive_title();} elseif (is_tag()) {echo single_tag_title();} else {the_title();}; ?></h1>
			<section id="breadcrumbs">
				<?php if (function_exists('yoast_breadcrumb')) {yoast_breadcrumb();}?>
			</section>
		</div>
	</div>
</section>