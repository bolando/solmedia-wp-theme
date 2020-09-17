<!doctype html>
<html <?php language_attributes();?>>
 <head>
  <meta charset="<?php bloginfo('charset'); ?>">
 <title><?php bloginfo('name'); ?> » <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="YES" />
	<?php wp_head(); ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&subset=latin-ext" rel="stylesheet">
        <link href="/wp-content/themes/solmedia/img/favicon.png" rel="shortcut icon" />
 </head>
<body <?php body_class(); ?>>
<section id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="<?php echo esc_url(home_url('/'));?>"><img id="logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo"></a> 
			</div>
			<div class="col-md-8">
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
<!--section id="slider">
	<?php $id =  $wp_query->post->ID; 
	switch($id) {
		case '66': echo '<img src="/wp-content/themes/solmedia/img/banery/baner1a.jpg" class="img-responsive" alt="">';
			break;
		
		default: echo '<img src="/wp-content/themes/solmedia/img/fotka.jpg" class="img-responsive" alt="">';
	}
	?>
</section-->