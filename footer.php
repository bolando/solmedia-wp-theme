<?php echo apply_filters('the_content', get_page('23')->post_content); ?> 
<section id="stopka">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">© <?php bloginfo('name'); ?> <?php echo date('Y');?></div>
			<div class="col-xs-6"> 
				<div class="pull-right">
					Wdrożenie: <a target="_blank" href="https://solmedia.pl">solmedia.pl</a>
				</div>
			</div>
		</div>
	</div>
</section>
 </body>
 <?php wp_footer(); ?>
</html>