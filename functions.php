<?php 

function load_stylesheets(){

 wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
 wp_enqueue_style('main');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
 wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets'); 



function load_js(){

  wp_deregister_script('jquery');
wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '',1, true);
  wp_enqueue_script('jquery');

// wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', '',1, true);
//   wp_enqueue_script('popper');
// LOADED POPPER.JS WITH BOOTSTRAP.BUNDLE.MIN.JS

  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', '',1, true);
  wp_enqueue_script('bootstrap');

   wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', '',1, true);
  wp_enqueue_script('slick');

    wp_register_script('map',  'https://maps.api.2gis.ru/2.0/loader.js?pkg=full', null,null, true);
  wp_enqueue_script('map');

   wp_register_script('main.js', get_template_directory_uri() . '/js/main.js', '',1, true);
  wp_enqueue_script('main.js');
}
add_action('wp_enqueue_scripts','load_js');