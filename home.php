<?php
/*
Template Name: Основная 

*/
?>

<?php get_header( );?>
<main>
  <div class="container">
    <div class="hero">
      <h1 class="hero-title">Курс на социально-ориентированный национальный проект связывает нас с нашим прошлым</h1>  
    <ul class="article-grid">
      <?php		
        global $post;
        //формируем запрос в базу данных
        $query = new WP_Query( [
          //получаем семь постов
          'posts_per_page' => 4,
          //'category__not_in' => 32,
        ] );
        //проверяем,есть ли посты
        if ( $query->have_posts() ) {
          //создаем переменную-счетчик постов
          $cnt = 0;
          //пока посты есть, выводим их
          while ( $query->have_posts() ) {
            $query->the_post();
            //и увеличиваем счетчик постов
            $cnt++;
            switch ($cnt) {
              //выводим первый пост
              case '1':
                ?>
                  <li class="article-grid-item article-grid-item-1">
                    <div class="article-grid-desc">
                      <a href="<?php echo the_permalink()?>" class="article-grid-permalink">
                        <h3 class="article-grid-title"><?php echo mb_strimwidth(get_the_title(), 0, 30, '...');?></h3>
                      </a>
                      <?php 
                        foreach (get_the_category() as $category) {
                          printf(
                            '<a href="%s" class="category-link %s">%s</a>', 
                            esc_url( get_category_link( $category ) ) , 
                            esc_html( $category -> slug ),
                            esc_html( $category -> name )
                          );
                        }
                      ?>
                    </div>
                    <img src="<?php if( has_post_thumbnail() ) {
                      echo get_the_post_thumbnail_url( null, 'medium_large');
                    }
                    else {
                      echo get_template_directory_uri().'/assets/images/img-default.png';
                    }?>" alt="" class="article-grid-thumb">
                  </li>
                <?php
                break;

              //выводим второй пост
              case '2': 
                ?>
                  <li class="article-grid-item article-grid-item-2">
                    <div class="article-grid-desc">
                      <a href="<?php echo the_permalink()?>" class="article-grid-permalink">
                        <h3 class="article-grid-title"><?php echo mb_strimwidth(get_the_title(), 0, 30, '...');?></h3>
                      </a>
                      <?php 
                        foreach (get_the_category() as $category) {
                          printf(
                            '<a href="%s" class="category-link %s">%s</a>', 
                            esc_url( get_category_link( $category ) ) , 
                            esc_html( $category -> slug ),
                            esc_html( $category -> name )
                          );
                        }
                      ?>
                    </div>
                    <img src="<?php if( has_post_thumbnail() ) {
                      echo get_the_post_thumbnail_url( null, 'medium_large');
                    }
                    else {
                      echo get_template_directory_uri().'/assets/images/img-default.png';
                    }?>" alt="" class="article-grid-thumb">
                  </li>
                <?php 
                break;  
            
              //выводим остальные посты
              default:
                ?>
                  <li class="article-grid-item article-grid-item-default">
                    <div class="article-grid-desc">
                      <a href="<?php echo the_permalink()?>" class="article-grid-permalink">
                        <h3 class="article-grid-title"><?php echo mb_strimwidth(get_the_title(), 0, 30, '...');?></h3>
                      </a>
                      <?php 
                        foreach (get_the_category() as $category) {
                          printf(
                            '<a href="%s" class="category-link %s">%s</a>', 
                            esc_url( get_category_link( $category ) ) , 
                            esc_html( $category -> slug ),
                            esc_html( $category -> name )
                          );
                        }
                      ?>
                    </div>
                    <img src="<?php if( has_post_thumbnail() ) {
                      echo get_the_post_thumbnail_url( null, 'medium_large');
                    }
                    else {
                      echo get_template_directory_uri().'/assets/images/img-default.png';
                    }?>" alt="" class="article-grid-thumb">
                  </li>
                <?php 
                break;
            }
            ?>
            <!-- Вывода постов, функции цикла: the_title() и т.д. -->
            <?php 
          }
        } else {
        // Постов не найдено
        }

        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </ul>
    <!-- /.article-grid - конец плиточной раскладки -->
    </div><!-- /.hero -->
  </div><!-- /.container -->

  <section class="teal">
  <div class="container">
    <div class="why-wrapper">
      <h2 class="why-title">Почему мы?</h2>
      <p class="why-text"><?php the_field('under_title');?></p>
    </div>
    <ul class="why-cards-wrapper">

      <li class="why-card why-card-1">
        <div class="why-card-icon-container">
          <svg class="why-card-icon" width="40" height="40" fill=#ffffff>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#graph"></use>
          </svg>
        </div>
        <h3 class="why-card-title">Финансы наглядно</h3>
        <p class="why-card-text"><?php the_field('left');?></p>
      </li>

      <li class="why-card why-card-2">
        <div class="why-card-icon-container">
          <svg class="why-card-icon" width="40" height="40" fill=#ffffff>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#heart"></use>
          </svg>
        </div>      
        <h3 class="why-card-title">Усердие и трудолюбие</h3>
        <p class="why-card-text"><?php the_field('middle');?></p>
      </li>

      <li class="why-card why-card-3">
        <div class="why-card-icon-container">
          <svg class="why-card-icon" width="40" height="40" fill=#ffffff>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#key"></use>
          </svg>
        </div>
        <h3 class="why-card-title">Помощь и поддержка</h3>
        <p class="why-card-text"><?php the_field('right');?></p>
      </li>
    </ul>
  </div><!-- /.container -->
  </section>

<section class="blog-section-wrapper">
  <h2>Блог</h2>
  <ul class="blog-posts-list">
    <?php 
      //объявляем глобальную переменную
      global $post;
  
      $myposts = get_posts([
        'numberposts' => 3,  
        'orderby' => 'date', 
        'order' => 'DESC',
        'category_name' => 'blog', 
      ]); 
      //проверяем, есть ли посты
      if( $myposts ){ 
        //если есть, запускаем цикл 
        foreach( $myposts as $post ){
        setup_postdata( $post ); 
        ?>
      <!-- Выводим записи -->
      <li class="blog-section-item">
        <a class="blog-section-permalink" href="<?php echo get_the_permalink(); ?>">
          <h4 class="blog-section-title"><?php echo wp_trim_words(get_the_title(), 6, '...'); ?></h4>
        </a>
        <img src="<?php 
        if( has_post_thumbnail() ) {
            echo get_the_post_thumbnail_url( null, 'medium_large');
          }
          else {
            echo get_template_directory_uri().'/assets/images/img-default.png';
          }
        ?>" alt="">
        <p class="blog-section-text"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
        <a href="<?php echo get_the_permalink(); ?>" class="blog-section-more">Читать далее</a>
      </li>
      <?php 
        }
      } else {
        ?><p>Постов нет</p><?php
      }
    wp_reset_postdata(); // Сбрасываем $post
    ?>
  </ul>
</section><!-- /.blog-section-wrapper -->

<section class="reviews">
  <div class="reviews-wrapper">
    <h2 class="reviews-title">Отзывы</h2>
    <p class="reviews-text"><?php the_field('under_reviews_title');?></p>
  </div>
  <ul class="posts-list">
    <?php 
      //объявляем глобальную переменную
      global $post;
  
      $myposts = get_posts([
        'numberposts' => 2,  
        'post_type' => 'review',
        'orderby' => 'rand', 
      ]); 
      //проверяем, есть ли посты
      if( $myposts ){ 
        //если есть, запускаем цикл 
        foreach( $myposts as $post ){
        setup_postdata( $post ); 
        ?>
      <!-- Выводим записи -->
      <li class="review-section-item">
        <div class="review-section-text"><?php the_content(); ?></div>
        <div class="review-section-author"><?php the_author(); ?></div>
      </li>
      <?php 
        }
      } else {
        ?><p>Постов нет</p><?php
      }
    wp_reset_postdata(); // Сбрасываем $post
    ?>
  </ul>
</section><!-- /.reviews -->


</main>
<?php get_footer(); ?>