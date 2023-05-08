<?php
function my_scripts() {
	wp_enqueue_style( 'bt-styles', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '3.7' );
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

//no comments
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
//pagination
add_action('init', 'solmedia_pagination'); 
function solmedia_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
//excerpt
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
function alx_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'alx_excerpt_more' );