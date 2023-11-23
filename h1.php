<section id="tlo" <?php if (is_singular() && has_post_thumbnail()):?>style="background-image: url('<?php the_post_thumbnail_url();?>');" <?php endif;?>>
	<div class="container">
		<div class="ramka">
			<h1><?php if (is_home()) {echo 'Aktualności';} elseif (is_search()) {echo 'Wyniki wyszukiwania';} elseif (is_category()) {echo single_cat_title();} elseif (is_post_type_archive()) {post_type_archive_title();} elseif (is_tax()) { echo single_term_title('', false);} elseif (is_archive()) { the_archive_title();} elseif (is_tag()) {echo single_tag_title();} else {the_title();}; ?></h1>
			<div id="breadcrumbs">
				<?php if (function_exists('yoast_breadcrumb')) {yoast_breadcrumb();}?>
			</div>
		</div>
	</div>
</section>