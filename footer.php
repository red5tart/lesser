  <footer class="footer_menu">
    <div class="container">
      <div class="row-wrapper">
        <div class="about">
          <h3 class="about-title">О нас</h3>
          <p class="about-text"><?php echo get_field('o_nas', 84);?></p>
        </div>
        <div class="portfolio">
          <h3 class="portfolio-title">Портфолио</h3>
          <?php 
            wp_nav_menu( [
              'theme_location'  => 'footer_menu',
              'container'       => 'div', 
              'container_class' => 'footer-menu-wrapper', 
              'menu_class'      => 'footer-menu', 
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ] );
          ?>
        </div>
        <div class="social">
          <h3 class="social-title">Мы в соц сетях</h3>
          <ul class="social-wrapper">
            <?php if( get_field('tg', 84) ) : ?>
              <li class="social-item">
              <a href="<?php echo the_field('tg', 84); ?>" class="">  
              <svg class="icon why-card-pic" width="18" height="18" >
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#telegram"></use>
              </svg>                 
              Телеграм</a></li>
            <?php endif; 

            if( get_field('vk', 84) ) : ?>
              <li class="social-item">
              <a href="<?php echo the_field('vk', 84); ?>" class="">  
              <svg class="icon why-card-pic" width="18" height="18" >
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#vkontakte"></use>
              </svg>                 
              ВКонтакте</a></li>
            <?php endif;

            if( get_field('tw', 84) ) : ?>
              <li class="social-item">
              <a href="<?php echo the_field('tw', 84); ?>" class="">  
              <svg class="icon why-card-pic" width="18" height="18" >
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#twitter"></use>
              </svg>                 
              Твиттер</a></li>
            <?php endif;

            if( get_field('fb', 84) ) : ?>
              <li class="social-item">
              <a href="<?php echo the_field('fb', 84); ?>" class="">  
              <svg class="icon why-card-pic" width="18" height="18" >
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#facebook"></use>
              </svg>                 
              Фейсбук</a></li>
            <?php endif;
            
            if( get_field('ig', 84) ) : ?>
              <li class="social-item">
              <a href="<?php echo the_field('ig', 84); ?>" class="">  
              <svg class="icon why-card-pic" width="18" height="18" >
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#instagram"></use>
              </svg>                 
              Инстаграм</a></li>
            <?php endif;

            if( get_field('yt', 84) ) : ?>
              <li class="social-item">
              <a href="<?php echo the_field('yt', 84); ?>" class="">  
              <svg class="icon why-card-pic" width="18" height="18" >
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#key"></use>
              </svg>                 
              YouTube</a></li>
            <?php endif;?>

          </ul><!-- /.social-wrapper -->
        </div><!-- /.social -->
      </div><!-- /.row-wrapper -->
      <div class="bottom">
        <span>© <?php echo current_time('Y'); ?> Все права защищены. Выполнила с </span>
        <svg class="icon why-card-pic" width="22" height="22" fill=#626262>
          <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#heart-filled"></use>
        </svg>
        <span> Пенелопа Кошмарик</span>
      </div><!-- /.bottom -->
    </div><!-- /.container -->
  </footer>
  <?php wp_footer();?>
</body>
</html>