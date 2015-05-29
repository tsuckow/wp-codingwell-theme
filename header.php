<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        if( ! is_home() ):
          wp_title( '|', true, 'right' );
        endif;
        bloginfo( 'name' );
  ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href='//fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="center">
      <div id="header_background">
        <div id="header">
          <a href="<?php echo home_url( '/' ); ?>" id="hlogo"><img src="//staticwell.com/images/codingwell/logo"><?php bloginfo( 'name' ); ?></a>
          <div id="headertop"><?php dynamic_sidebar( 'Header Top' ); ?></div>
          <div id="headerbottom"><?php dynamic_sidebar( 'Header Bottom' ); ?></div>
          <?php
            // Uncomment to show menu
            //wp_nav_menu( array( 'menu' => 'Main' ) );
          ?>
        </div>
      </div>
  <!-- body div.center -->
<!-- vim: set ts=2 sw=2: -->
