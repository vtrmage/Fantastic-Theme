<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <?php wp_head();?>
    <meta charset="utf-8">
    <title><?php wp_title();  ?></title>
  </head>
  <body>

    <!-- NAVBAR START-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Comstock</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <?php
        wp_nav_menu( array(
          'theme_location' => 'navBar_menu',
          'container'  => 'div',
          'container_class'   => "collapse navbar-collapse",
          'container_id'   => "navbarSupportedContent",
          'menu_class' => "navbar-nav mr-auto comstock-nav", // UL
        ));
      ?>      
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
