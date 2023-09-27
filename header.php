<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="theme-color-07cb79 theme-skin-light">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <?php wp_head(); ?>
  </head>
  <body class="home header-has-img loading">
    <div class="mobile-nav">
      <button class="btn-mobile mobile-nav-close"><i class="rsicon rsicon-close"></i></button>
      <div class="mobile-nav-inner">
          <nav id="mobile-nav" class="nav">
              <ul class="clearfix">
                  <li><a href="#about">About</a></li>
                  <li><a href="#skills">Skills</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#experience">Experience</a></li>
                  <li><a href="#references">References</a></li>
                  <li>
                      <a href="category.html">Blog</a>
                      <ul>
                          <li><a href="single-image.html">Image Post</a></li>
                          <li><a href="single-slider.html">Slider Post</a></li>
                          <li><a href="single-video.html">Video Post</a></li>
                          <li><a href="single-audio.html">Audio Post</a></li>
                          <li><a href="single-vimeo.html">Vimeo Post</a></li>
                          <li><a href="single-youtube.html">Youtube Post</a></li>
                          <li><a href="single-dailymotion.html">Dailymotion Post</a></li>
                          <li><a href="single.html">Without Media Post</a></li>
                          <li><a href="typography.html">Typography Page</a></li>
                          <li><a href="404.html">404 Page</a></li>
                      </ul>
                  </li>
                  <li><a href="#calendar">Calendar <span></span></a></li>
                  <li><a href="#contact">Contact <span></span></a></li>
              </ul>
          </nav>
      </div>
  </div>
  <!-- .mobile-nav -->
  <?php get_sidebar();?>

  <div class="wrapper">
      <header class="header">
          <div class="head-bg" styl
          e="background-image: url('img/uploads/rs-cover.jpg')"></div>
      
          <div class="head-bar">
              <div class="head-bar-inner">
                  <div class="row">
                      <div class="col-sm-3 col-xs-6">
                          <a class="logo" href="<?php echo home_url();?>"><span>RS</span>card</a>
                          <!-- <a class="head-logo" href=""><img src="img/rs-logo.png" alt="RScard"/></a> -->
                      </div>
      
                      <div class="col-sm-9 col-xs-6">
                          <div class="nav-wrap">
                              <nav id="nav" class="nav">
                                  <ul class="clearfix">
                                      <li><a href="#about">About</a></li>
                                      <li><a href="#skills">Skills</a></li>
                                      <li><a href="#portfolio">Portfolio</a></li>
                                      <li><a href="#experience">Experience</a></li>
                                      <li><a href="#references">References</a></li>
                                      <li>
                                          <a href="category.html">Blog</a>
                                          <ul>
                                              <li><a href="single-image.html">Image Post</a></li>
                                              <li><a href="single-slider.html">Slider Post</a></li>
                                              <li><a href="single-video.html">Video Post</a></li>
                                              <li><a href="single-audio.html">Audio Post</a></li>
                                              <li><a href="single-vimeo.html">Vimeo Post</a></li>
                                              <li><a href="single-youtube.html">Youtube Post</a></li>
                                              <li><a href="single-dailymotion.html">Dailymotion Post</a></li>
                                              <li><a href="single.html">Without Media Post</a></li>
                                              <li><a href="typography.html">Typography Page</a></li>
                                              <li><a href="404.html">404 Page</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="#calendar">Calendar <span></span></a></li>
                                      <li><a href="#contact">Contact <span></span></a></li>
                                  </ul>
                              </nav>
      
                              <button class="btn-mobile btn-mobile-nav">Menu</button>
                              <button class="btn-sidebar btn-sidebar-open"><i class="rsicon rsicon-menu"></i></button>
                          </div>
                          <!-- .nav-wrap -->
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!-- .header -->