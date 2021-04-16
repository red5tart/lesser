<!--конкретный пост определяется по ID-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!--выводим картинку, контент поста, сайдбар и комменты для конкретного поста-->
  <!--инфа в пределах контейнера-->
  <div class="container">
    <?php  //вывод заголовка
      //если мы на стрнице поста
      if ( is_singular() ) : {   //то...
        //выводим заголовок в теге h1
        ?>
        
          <h1 class="post-title"> <?php the_title();?></h1>
        <?php
      }
      else : {
        //иначе - заголовок в теге h2 и ссылку на пост
        the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '"    rel="bookmark">', '</a></h2>' );
      }
      endif; 
    ?>
  <div class="row">
    <div class="post-wrapper-content">
      <div class="post-picture">
        <img src="<?php 
          if ( has_post_thumbnail() ) {
              echo get_the_post_thumbnail_url();
          }
          else {
              echo get_template_directory_uri().'/assets/images/img-default.png';
          }
          ?>"class="post-picture-thumb"> 
      </div><!--/.post-picture-->
      <div class="post-content">
        <?php the_content();?>
      </div> <!-- /.post-content -->
    </div><!--/.post-wrapper-content-->

    <div class="post-wrapper-menu">

      <div class="post-wrapper-sideline">
        <h2>Категории</h2>
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
    </div> <!-- /.post-wrapper-menu -->
  </div><!--/.row-->
  </div><!--/.container-->
</article>