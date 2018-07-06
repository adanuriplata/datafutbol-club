<?php
//Load Styles
function datafutbol_load_styles() {
  wp_register_style('style', get_stylesheet_uri());
  wp_enqueue_style( 'style');
  wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'datafutbol_load_styles');


function datafutbol_setup(){
  //image support
    add_theme_support('post-thumbnails');

  add_image_size( 'small-thumbnail-2', 720, 720, true );
  add_image_size( 'small-thumbnail-3', 280, 120, true );
  add_image_size( 'small-thumbnail-1', 254, 140, true );
	add_image_size( 'square-thumbnail', 80, 80, true );
	add_image_size( 'banner-image', 1024, 1024, true );
}
add_action( 'after_setup_theme' ,'datafutbol_setup');


/*
* Customize excerpt
*/ 

//lenght
function custom_excerpt_length() {
	return 18;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );

///text finally
function datafutbol_excerpt_custom_finally($more) {
return '...';
}

add_filter('excerpt_more', 'datafutbol_excerpt_custom_finally');

/*
* Add custom logo support
*/
add_theme_support( 'custom-logo' );


//creacion de menus
function dataFutbol_menus(){
  register_nav_menus( array(
    'header-menu' => __('Header Menu', 'datafutbol'),
    'social-menu' => __('Social Menu', 'datafutbol'),
    'footer-menu' => __('Footer Menu', 'datafutbol'),
    'keywords-menu' => __('keywords Menu', 'datafutbol')
  ));
}

add_action('init', 'dataFutbol_menus');

// widgets
function  datafutbol_widgets(){
  register_sidebar(
    array(
      'name' => 'side-bar',
      'id' => 'sidebar1',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-item__title">',
      'after_title' => '</h3>',
    )
  );
}

add_action('widgets_init', 'datafutbol_widgets');
