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
  wp_enqueue_style('fredoka-one-font', '/fonts.googleapis.com/css?family=Fredoka+One');
  wp_enqueue_style('open-sans-font', '//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800itali');
  wp_enqueue_style('map-icons',  get_template_directory_uri(). '/assets/fonts/map-icons/css/map-icons.min.css');
  wp_enqueue_style('icomoon',  get_template_directory_uri(). '/assets/fonts/icomoon/style.css');
  wp_enqueue_style('bxslider',  get_template_directory_uri(). '/assets/js/plugins/jquery.bxslider/jquery.bxslider.css');
  wp_enqueue_style('mCustomScrollbar',  get_template_directory_uri(). '/assets/js/plugins/jquery.customscroll/jquery.mCustomScrollbar.min.css');
  wp_enqueue_style('fancybox',  get_template_directory_uri(). '/assets/js/plugins/jquery.fancybox/jquery.fancybox.css');
  wp_enqueue_style('owl-carousel',  get_template_directory_uri(). '/assets/js/plugins/jquery.owlcarousel/owl.carousel.css');
  wp_enqueue_style('owl-theme',  get_template_directory_uri(). '/assets/js/plugins/jquery.owlcarousel/owl.theme.css');
  wp_enqueue_style('theme-stylesheet', get_stylesheet_uri());
  wp_enqueue_style('theme-color',  get_template_directory_uri(). '/assets/colors/green.css');
  // scripts
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/libs/modernizr.js', array(),'', false );

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/libs/jquery.1.11.3.min.js',array(),'',true);
  wp_enqueue_script('google', get_template_directory_uri() . '/assets/js/libs/googlemapsapi.js',array(),'',true);
  wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/assets/js/plugins/jquery.mousewheel-3.0.6.pack.js', array('jquery'),'', true );
  wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/assets/js/plugins/imagesloaded.pkgd.min.js', array('jquery'),'', true );
  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/plugins/isotope.pkgd.min.js', array('jquery'),'', true );
  wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/plugins/jquery.appear.min.js', array('jquery'),'', true );
  wp_enqueue_script( 'one-page-nav', get_template_directory_uri() . '/assets/js/plugins/jquery.onepagenav.min.js', array('jquery'),'', true );
  wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/assets/js/plugins/jquery.bxslider/jquery.bxslider.min.js', array('jquery'),'', true );
  wp_enqueue_script( 'mCustomScrolBar', get_template_directory_uri('jquery') . '/assets/js/plugins/jquery.customscroll/jquery.mCustomScrollbar.concat.min.js', array('jquery'),'', true );
  wp_enqueue_script( 'media-player', get_template_directory_uri() . '/assets/js/plugins/jquery.mediaelement/mediaelement-and-player.min.js', array('jquery'),'', true );
  wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/plugins/jquery.fancybox/jquery.fancybox.pack.js', array('jquery'),'', true );
  wp_enqueue_script( 'fancybox-media', get_template_directory_uri() . '/assets/js/plugins/jquery.fancybox/helpers/jquery.fancybox-media.js', array('jquery'),'', true );
  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/plugins/jquery.owlcarousel/owl.carousel.min.js', array('jquery'),'', true );
  wp_enqueue_script( 'theme-options', get_template_directory_uri() . '/assets/js/options.js', array('jquery'),'', true );
  wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/site.js', array('jquery'),'', true );
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
