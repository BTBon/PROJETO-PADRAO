<?php


// Adicionar arquivos javascript necessários
function js_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', NULL, FALSE);
  wp_enqueue_script('theme-script', get_template_directory_uri().'/js/scripts.js', 'jquery', NULL, TRUE);
}    
  
add_action('wp_enqueue_scripts', 'js_scripts');

// Adicionar arquivos css necessários
function css_files() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', NULL, FALSE);
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css', NULL, FALSE);
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css', 'fonts'), FALSE, 'screen');
}

add_action('wp_enqueue_scripts', 'css_files');


//Adiciionar feeds automaticamente ao <head>
add_theme_support( 'automatic-feed-links' );

//Adicionar suporte a HTML5 nos formulários
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );

//Adicionar suporte a thumbnails
add_theme_support( 'post-thumbnails' );

//Adicionar suporte a menus
add_theme_support('menus');