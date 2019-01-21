<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body id="page-top">
  <?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
  <!-- Navbar -->
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="#1" class="nav__link c-blue">
                Inicio
              </a>
            </li>
            <li class="nav__item">
              <a href="#2" class="nav__link c-yellow scrolly">
                Acerca de
              </a>
            </li>
            <li class="nav__item">
              <a href="#3" class="nav__link c-red">
                Cursos
              </a>
            </li>
            <li class="nav__item">
              <a href="#4" class="nav__link c-green">
                Contacto
              </a>
            </li>
          </ul>
        </nav>

  <?php
    if ( current_user_can( 'administrator' ) ) {
      echo '<div style="text-align: center">Eres el administrador</div>';
    } else {
      echo '<div style="text-align: center">Hola Muggle</div>';
    }
  ?>
