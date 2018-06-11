<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <!-- fons -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700,900" rel="stylesheet"> 

    <title>La Cantonada</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="container-fluid fixed-top color-menu-q">

      <nav class="navbar navbar-expand-lg navbar-dark container">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">link</a>
              </li>

            </ul>
          -->
            <!-- buscar
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            -->
          <!-- menu en WP -->
          <?php 
          
          wp_nav_menu( array(
            'theme_location' => 'superior',
            'container'      => 'div',
            'container_class'=> 'collapse navbar-collapse',
            'container_id'   => 'navbarSupportedContent',
            'items_wrap'     => '<ul class="navbar-nav ml-auto">%3$s</ul>',
            'menu_class'     => 'nav-item'
          ) );

           ?>


      </div>

          <!-- end menu WP -->



      </nav>

    </div>

    <!-- end navbar -->