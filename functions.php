<?php


// Adicionar arquivos javascript necessários
function js_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', NULL, FALSE);
  wp_enqueue_script('theme-script', get_template_directory_uri().'/js/scripts.js', 'jquery', NULL, TRUE);
}    
  
add_action('init', 'js_scripts');

//Adiciionar feeds automaticamente ao <head>
add_theme_support( 'automatic-feed-links' );

//Adicionar suporte a HTML5 nos formulários
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );

//Adicionar suporte a thumbnails
add_theme_support( 'post-thumbnails' );

//Adicionar suporte a menus
add_theme_support('menus');