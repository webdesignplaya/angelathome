<?php


// Load Divi Theme main styles and custom styles
function theme_styles(){
  wp_enqueue_style('styles', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('custom_style', get_bloginfo( 'stylesheet_directory' ) . '/app/build/css/main.min.css');
 }
add_action( 'wp_enqueue_scripts', 'theme_styles' );