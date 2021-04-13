<?php get_header('post');?>

<div class="container">
<div class="left">
  <?php
  // запускаем цикл wordpress, проверяем, есть ли посты
  while ( have_posts() ) :
    // если пост есть, выводим содержимое
    the_post( );
    // находим шаблон для вывода поста в папке template_parts
    get_template_part( 'template-parts/content', get_post_type() );

  endwhile; // Конец цикла WP
  ?>
</div>
<div class="right">
<?php 
  wp_nav_menu( [
          'theme_location'  => 'post-side_menu',
          'container'       => 'nav', 
          'container_class' => 'post-side-nav', 
          'menu_class'      => 'post-side-menu', 
          'echo'            => true,
        ] );
?>
</div>

</div>

<?php
get_sidebar();
get_footer( );?>