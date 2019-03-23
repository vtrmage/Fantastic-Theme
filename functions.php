<?php

function assets_enqueuer(){
  wp_enqueue_style('Standard_Stylesheet',get_template_directory_uri().'/style.css');
  wp_enqueue_style('Bootstrap css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_script('Bootstrap JS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
  wp_enqueue_script('Bootstrap Bundle JS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js');
  wp_enqueue_script('Bootstrap popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
  wp_enqueue_script('Bootstrap Jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
}
add_action( 'wp_enqueue_scripts','assets_enqueuer');

// CREATING DYNAMIC NAVBAR
function navbar(){
  register_nav_menus( array(
    "navBar_menu"   => __("Navbar Menu"),
    "dropdown"      => __("dropdown Menu")
  ));
  // THIS ADD THE TITLE ON THE THE TOP OF THE BROWSER
  add_theme_support("title-tag");
};
add_action('init', 'navbar');

 ?>
