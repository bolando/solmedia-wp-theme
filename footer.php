<?php //echo apply_filters('the_content', get_page('20')->post_content); ?>
<section id="stopkaBig">
	<div class="container">
		 <div class="row">
			<div class="col-md-3"  id="footer1">
				<img id="logoDol" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
				
			</div>
			<div class="col-md-3" id="footer2">
			</div>
			<div class="col-md-3"  id="footer3">
			</div>
			<div class="col-md-3" id="footer4">
				
			</div>
		 </div>
	</div>
</section>
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