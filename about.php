<?php
/*
Template Name: О нас 
Template Post Type: page

*/
?>


<?php get_header( );?>
<div class="container">
  <h1><?php the_title(); ?></h1><!-- заголовок  -->
  <div class="flex-wrapper"><!-- флекс-обертка -->
    <div class="about-left"><!-- левая колонка -->

    <img width="320" src="<?php the_post_thumbnail_url('medium_large') ?>" alt="" class="pic-in-text"
      /><!-- картинка -->
    <?php the_content(); ?><!-- содержимое страницы -->
    </div><!-- /.about-left -->
    <div class="about-right">
      <div class="about-right-text-wrapper">
        <?php 
        if ( ! is_active_sidebar( 'about-sidebar' ) ) {
          return;
        }
        ?>
        <aside class="">
          <?php dynamic_sidebar( 'about-sidebar' ); ?>
        </aside>
        
      </div><!-- /.about-right-text-wrapper -->
    </div><!-- /.about-right -->
  </div><!-- /.флекс-обертка -->

</div><!-- /.container -->

<?php get_footer(); ?>