<?php
show_admin_bar( false );
add_theme_support( 'post-thumbnails' );
foreach ( glob( plugin_dir_path( __FILE__ ) . "classes/*.php" ) as $file ) {
  include_once $file;
}
foreach ( glob( plugin_dir_path( __FILE__ ) . "objects/*.php" ) as $file ) {
  include_once $file;
}
foreach ( glob( plugin_dir_path( __FILE__ ) . "functions/*.php" ) as $file ) {
  include_once $file;
}
// Enqueue Styles & Scripts
add_action( 'wp_enqueue_scripts', function(){
  // styles
  wp_enqueue_style('material-icons-font', '//fonts.googleapis.com/css?family=Open+Sans:400,700');
  wp_enqueue_style('open-sans-font', '//fonts.googleapis.com/icon?family=Material+Icons');
  wp_enqueue_style('font-awesome',  get_template_directory_uri(). '/assets/fonts/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style('theme-stylesheet', get_stylesheet_uri());
  // scripts
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.min.js',array(),'',false);
  wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(),'', false );
});

add_filter('acf/settings/save_json', function($path){
  // update path
  $path = get_stylesheet_directory() . '/acfs/json';
  // return
  return $path;
});

add_filter('acf/settings/load_json', function($paths){
  // remove original path (optional)
  unset($paths[0]);
  // append path
  $paths[] = get_stylesheet_directory() . '/acfs/json';
  // return
  return $paths;
});

add_filter( 'excerpt_more', function($excerpt){
  return '...';
});

?>
