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
				<h3>Na skróty</h3>
				<?php wp_nav_menu( array( 'theme_location' => 'mainmenu','menu_class' => 'nav' ) ); ?>
			</div>
		 </div>
	</div>
</section>
<section id="stopka">
	<div class="container">
		<div class="row">
			<div class="col-md-6">© <?php echo date('Y');?></div>
			<div class="col-md-6"> 
				<div class="pull-right">
					Wdrożenie: Solmedia.pl
				</div>
			</div>
		</div>
	</div>
</section>
 </body>
 <?php wp_footer(); ?>
</html>