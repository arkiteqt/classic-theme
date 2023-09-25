<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themobidevco
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<?php wp_head(); ?>
</head>

<body>
  <nav class="nav">
    <header class="header">
      <div class="container">
        <div class="header__logo">
          <a href="<?php echo home_url();?>" class="header__logo-link"><img class="header__logo-image" src="<?php echo get_template_directory_uri() . '/assets/img/logo-mobile.png';?>" alt="The MobiDevCo. Logo"/></a>
        </div>
        <button class="header__menu-btn jsToggleMenu"><!-- MENU ICON --></button>
      </div>
    </header>
    <ul class="nav-menu">
      <li class="nav-menu-item"><a href="#" class="nav-menu-item-link">About</a></li>
      <li class="nav-menu-item"><a href="#" class="nav-menu-item-link">Services</a></li>
      <li class="nav-menu-item"><a href="#" class="nav-menu-item-link">Projects</a></li>
      <li class="nav-menu-item"><a href="#" class="nav-menu-item-link">Blog</a></li>
      <li class="nav-menu-item"><a href="#" class="nav-menu-item-link">Contact</a></li>
    </ul>
  </nav>
