<?php

function assets_enqueuer(){
  wp_enqueue_style('Standard_Stylesheet',get_template_directory_uri().'/style.css');
  wp_enqueue_style('Bootstrap css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_script('Bootstrap JS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
  wp_enqueue_script('Bootstrap Bundle JS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts','assets_enqueuer');

 ?>
