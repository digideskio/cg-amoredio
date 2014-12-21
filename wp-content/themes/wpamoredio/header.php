<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Amoredio
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="stylesheet"href="<?php bloginfo( 'stylesheet_url' ); ?>">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid max-width">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-fw fa-bars text-white"></i>
            </button>
            <a class="navbar-brand visible-xs" href="<?php bloginfo('url'); ?>">
                <?php bloginfo('name'); ?>
            </a>
          </div>

          <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
      </div>
  </nav>  
<!-- 
<?php if ( get_header_image() ) : ?>
  <div id="site-header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
    </a>
  </div>
<?php endif; ?>
 -->
<!--  <header id="masthead" class="site-header" role="banner">
    <div class="header-main">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

      <div class="search-toggle">
        <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
      </div>

      <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
        <button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
        <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
      </nav>
    </div>

    <div id="search-container" class="search-box-wrapper hide">
      <div class="search-box">
        <?php get_search_form(); ?>
      </div>
    </div>
  </header> #masthead -->

  <div id="main" class="site-main">
