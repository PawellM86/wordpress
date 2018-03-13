<?php
define( 'ASSETS_URL', get_template_directory_uri(). '/assets/' );//apsirasom konstanta ir nurodom,kad uzeitu i folder assets

function adding_styles_to_my_theme() {
  //add css styles
  wp_enqueue_style( 'main', ASSETS_URL .'css/main.css', array(), false ); //priskiriame kad prisijungti prie styliu css
  wp_enqueue_style( 'font-awesome', ASSETS_URL .'css/font-awesome.min.css', array(), false );
  //add javascript files
  wp_enqueue_script( 'breakpoint', ASSETS_URL .'js/breakpoints.min.js', array(), false );
  wp_enqueue_script( 'browser', ASSETS_URL .'/js/browser.min.js', array(), false );
  wp_enqueue_script( 'main_js', ASSETS_URL .'/js/main.js', array('jquery'), false );
  wp_enqueue_script( 'utilities', ASSETS_URL .'/js/util.js', array('jquery'), false );

}
add_action( 'wp_enqueue_scripts','adding_styles_to_my_theme' );//iskvieciame funkcija adding_styles_to_my_theme()

//pasliepiam admin bar
function hide_admin_bar() {
  return show_admin_bar( false );
}
add_action('init','hide_admin_bar');

//adding theme support
function my_theme_supports(){
  add_theme_support('menus');
  add_theme_support('custom-logo');
}
add_action('init','my_theme_supports');

//registruojame meniu, kad galima butu sukurti is wordpress
function register_theme_menus() {

	register_nav_menus(array(
        'pagrindinis-menu' => __( 'pagrindinis-menu' )
    ));
}
add_action( 'init', 'register_theme_menus' );
