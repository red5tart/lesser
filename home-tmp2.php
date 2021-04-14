<?php get_header( );?>

<main>
  <div class="container">
    <div class="hero">
      <h1 class="hero-title">Курс на социально-ориентированный национальный проект связывает бла-бла-бла</h1>
      <!-- начало мозаики 4х постов -->
      <?php 
        //объявляем глобальную переменную
        global $post;

        $myposts = get_posts([ 
          'numberposts' => 4, 
        ]); 
        //проверяем, есть ли посты 
        if( $myposts ){ 
        //если есть, запускаем цикл 
        foreach( $myposts as $post ){ setup_postdata( $post ); ?>
        <!-- Выводим записи -->
        <img src="<?php the_post_thumbnail_url('medium_large') ?>" alt="" class="post-thumb"
        /><!-- картинка -->
        <h2 class="post-title"><?php echo mb_strimwidth(get_the_title(), 0, 60, '...'); ?></h2>
        <div class="post-short">
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
        <?php 
          }
        } else {
          // Постов не найдено
        ?>
        <p>Постов нет</p>
        <?php
          }

          wp_reset_postdata(); // Сбрасываем $post
        ?>

    </div><!-- /.hero -->

      <h2 class="why-title">Почему мы?</h2>
      <?php the_field('why-text');?> 
      <ul class="">
        <li class="why-card">
          <svg class="icon why-card-pic" width="50" height="50" fill=#626262>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#graph"></use>
          </svg>
          <h3 class="why-card-title">Финансы наглядно</h3>
          <p class="why-card-text">Пингвин, несмотря на то, что в воскресенье некоторые станции метро закрыты,  надкусывает органический мир. Низменность, несмотря на внешние воздействия, однородно просветляет бамбуковый медведь панда. Ксерофитный кустарник иллюстрирует особый вид куниц, а в вечернее время в кабаре Алказар или кабаре Тифани можно увидеть красочное представление.</p>
        </li>
        <li class="why-card">
          <svg class="icon why-card-pic" width="50" height="50" fill=#626262>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#heart"></use>
          </svg>
          <h3 class="why-card-title">Усердие и трудолюбие</h3>
          <p class="why-card-text">Пингвин, несмотря на то, что в воскресенье некоторые станции метро закрыты,  надкусывает органический мир. Низменность, несмотря на внешние воздействия, однородно просветляет бамбуковый медведь панда. Ксерофитный кустарник иллюстрирует особый вид куниц, а в вечернее время в кабаре Алказар или кабаре Тифани можно увидеть красочное представление.</p>
        </li>
        <li class="why-card">
          <svg class="icon why-card-pic" width="50" height="50" fill=#626262>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#key"></use>
          </svg>
          <h3 class="why-card-title">Помощь и поддержка</h3>
          <p class="why-card-text">Пингвин, несмотря на то, что в воскресенье некоторые станции метро закрыты,  надкусывает органический мир. Низменность, несмотря на внешние воздействия, однородно просветляет бамбуковый медведь панда. Ксерофитный кустарник иллюстрирует особый вид куниц, а в вечернее время в кабаре Алказар или кабаре Тифани можно увидеть красочное представление.</p>
        </li>
      </ul>
  </div><!-- /.container -->
  
</main>
<?php get_footer(); ?>