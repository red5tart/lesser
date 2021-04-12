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
          // лого берем, а дальше ссылка на имя сайта - на лого она и так должна быть
          echo '<div class="post-logo">' . get_custom_logo()?><span class="post-logo-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span></div>
          <?php
        } else {
          // вместо лого svg, потом имя сайта, все вместе обернуто в ссылку
          ?>
          <div class="post-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <svg class="icon post-logo-pic" width="16" height="16" fill=#626262>
              <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#energy"></use>
            </svg>
          <?php echo '<span class="post-logo-name">' . get_bloginfo( 'name' ) . '</span></a></div>';
        }     
        ?>
      </div><!-- /.logo-wrapper -->

      <?php 
        wp_nav_menu( [
          'theme_location'  => 'header_menu',
          'container'       => 'nav', 
          'container_class' => 'header-nav', 
          'menu_class'      => 'post-header-menu', 
          'echo'            => true,

        ] );
      ?>
    </div>
    <!-- /.header-wrapper -->
  </div>
</header>