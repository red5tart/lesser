<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesser</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
  <div class="container">
    <div class="header-wrapper">
      <div class="logo-wrapper">
      <?php 
        if( has_custom_logo() ){
          echo '<div class="logo">' . get_custom_logo() . '<span class="logo-name">' . get_bloginfo( 'name' ) . '</span></div>';
        } else {
          echo '<span class="logo-name">' . get_bloginfo( 'name' ) . '</span>';
        }
      ?>
      </div>
      <!-- /.logo-wrapper -->

      <?php 
        wp_nav_menu( [
          'theme_location'  => 'header_menu',
          'container'       => 'nav', 
          'container_class' => 'header-nav', 
          'menu_class'      => 'header-menu', 
          'echo'            => true,
        ] );
      ?>
    </div>
    <!-- /.header-wrapper -->
  </div>
</header>