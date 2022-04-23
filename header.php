<!doctype html>
<html <?php language_attributes();?>>
 <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php if (!is_front_page()) { wp_title(''); echo " » ";}; ?><?php bloginfo('name'); ?> <?php if (is_front_page()) { echo " » "; bloginfo('description');};?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
	<?php wp_head(); ?><link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">        
 </head>
<body <?php body_class(); ?>>
<section id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-9">
				<a href="<?php echo esc_url(home_url('/'));?>"><img id="logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo"></a> 
			</div>
			<div class="col-md-8 col-xs-3">
				<nav class="nav" role="navigation">
					<div class="pull-right">
						<?php wp_nav_menu( array( 'theme_location' => 'mainmenu','menu_class' => 'nav nav-pills' ) ); ?>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>
<div class="odstep"></div>