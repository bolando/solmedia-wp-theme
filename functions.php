<?php
function my_scripts() {
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/custom.js', array(), filemtime( get_stylesheet_directory() . '/js/custom.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

//Add thumbnail, automatic feed links and title tag support
add_theme_support( 'post-thumbnails' );
add_image_size( 'a_home', 350, 220, array( 'center', 'center') );

//rejestracja widgetu
register_sidebar( array(
		'name'          => 'right',
		'id'            => 'right',
		'before_widget' => '<div class="my-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );

// Rejestracja menu
    register_nav_menus(
	array(
	    'mainmenu' => 'Top navigation',
		'footermenu' => 'Footer navigation'
	));