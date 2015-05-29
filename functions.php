<?php
if ( function_exists( 'add_theme_support' ) ):
  add_theme_support( 'menus' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
endif;

if ( function_exists('register_sidebars') ):
  register_sidebar(array(
    'name'=>'Sidebar',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>'
  ));
  register_sidebar(array(
    'name'=>'Header Top',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>'
  ));
  register_sidebar(array(
    'name'=>'Header Bottom',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>'
  ));
endif;

add_editor_style( 'editor-style.css' );

function my_init_method() {
  if (is_admin() == false ):
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js');
    wp_enqueue_script( 'jquery' );
  endif;
}
add_action('init', 'my_init_method');

// Wordpress adds a top margin for the admin bar
// This sadly makes the page scroll incorrectly because of height 100%
// We disable this styling and instead add padding with border-box
function pad_admin_bar() {
  echo '
    <style type="text/css">
      html {
        padding-top: 28px !important;
        box-sizing: border-box;
      }
    </style>';
}
function my_admin_bar_init() {
  remove_action('wp_head', '_admin_bar_bump_cb');
  add_action( 'wp_head', 'pad_admin_bar' );
}
add_action('admin_bar_init', 'my_admin_bar_init');

/* vim: set ts=2 sw=2 : */
?>
