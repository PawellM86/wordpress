<?php
define('ASSETS_URL', get_template_directory_uri().'/assets');

function adding_style_to_my_theme() {
  wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() .'/bootstrap/css/bootstrap.min.css', array(), true );
  wp_enqueue_style('style', ASSETS_URL.'/css/style.css',array(),false);
  wp_enqueue_style('font-awesome', ASSETS_URL.'/css/font-awesome.min.css',array(),false);
  wp_enqueue_script('breakpoints', ASSETS_URL.'/js/breakpoints.min.js',array(),false);
  wp_enqueue_script('browsers', ASSETS_URL.'/js/browsers.min.js',array(),false);
  wp_enqueue_script('mainas', ASSETS_URL.'/js/main.min.js',array('jquery'),false);
  wp_enqueue_script('util', ASSETS_URL.'/js/util.min.js',array('jquery'),false);
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() .'/bootstrap/js/bootstrap.min.js', array('jquery'), true );
  wp_enqueue_script('myScript', ASSETS_URL.'/js/myScript.js',array('jquery'),false);
}
 add_action('wp_enqueue_scripts','adding_style_to_my_theme');

 //hiddin admin dar
function admin_bar(){
  show_admin_bar(false);
}
add_action('init','admin_bar');

//adding theme support
function my_theme_supports() {
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}
add_action('init',my_theme_supports );

// registring menus position
function my_theme_menus() {
	register_nav_menus(array(
        'pagrindinis-menu' => __( 'pagrindinis-menu' ),
        'new-arrivals-menu' => __( 'new-arrivals-menu' )
    ));
}
add_action( 'init', 'my_theme_menus' );

//adding widgets
function my_widget() {
	register_sidebar( array(
		'name'          => 'Top left menu widget',
		'id'            => 'home_top_left',
		'before_widget' => '<div class = "top-widget">',
		'after_widget'  => '</div>'
	) );
}
add_action( 'widgets_init', 'my_widget' );
//
// function change_submenu_class($menu) {
//   $menu = preg_replace('/ class="sub-menu"/','/ class="myclass" /',$menu);
//   return $menu;
// }
// add_filter('wp_nav_menu','change_submenu_class');
