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
      if( has_custom_logo() && is_front_page() ) {
        //случай, когда главная и есть логотип (лого берем, ссылка не нужна)
        echo '<div class="logo">' . get_custom_logo() . '<span class="logo-name">' . get_bloginfo( 'name' ) . '</span></div>';
      } elseif ( ! has_custom_logo() && is_front_page() ) {
        //случай, когда главная и нет лого (вместо лого svg, ссылка не нужна)
        echo '<div class="logo">'?>
        <svg class="icon why-card-pic" width="28" height="28" fill=#1FB57B>
          <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#energy"></use>
        </svg>
        <?php echo '<span class="logo-name">' . get_bloginfo( 'name' ) . '</span></div>';
      } elseif ( has_custom_logo() && ! is_front_page() ) {
        //случай, когда не главная и есть лого (лого берем, а дальше ссылка на имя сайта - на лого она и так должна быть)
        echo '<div class="logo">' . get_custom_logo()?><span class="logo-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span></div>
        <?php
        
      } else {
        //случай, когда ни того, ни другого (вместо лого svg, потом имя сайта, все вместе обернуто в ссылку)
          ?>
          <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <svg class="icon why-card-pic" width="28" height="28" fill=#1FB57B>
              <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#energy"></use>
            </svg>
          <?php echo '<span class="logo-name">' . get_bloginfo( 'name' ) . '</span></a></div>';
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