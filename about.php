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

    <h2>
    <img width="320" src="<?php the_post_thumbnail_url('medium_large') ?>" alt="" class="pic-in-text"
      /><!-- картинка -->
    <?php the_field('about_text_title');?></h2><!-- подзаголовок -->    
    <p class="about-text"><?php the_content(); ?></p><!-- содержимое страницы -->
    </div><!-- /.about-left -->
    <div class="about-right">
      <div class="about-right-text-wrapper">
        <h2><?php the_field('about_text_title_right');?></h2>
        <p class="about-right-text">Текст виджета тут будет </p>   
      </div><!-- /.about-right-text-wrapper -->
    </div><!-- /.about-right -->
  </div><!-- /.флекс-обертка -->

</div><!-- /.container -->

<?php get_footer(); ?>