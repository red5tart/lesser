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
      <?php // ID постоянной страницы, которая указана как главная страница сайта
      echo get_option('page_on_front');
      if( is_front_page() ){
        echo "Это главная страница";
      }
      else {
        echo "это не главная страница";
      }
      ?>
      <!-- начало мозаики 4х постов -->
      <ul class="article-grid">
        <?php		
        global $post;
        //формируем запрос в базу данных
        $query = new WP_Query( [
          //получаем 4 поста
          'posts_per_page' => 4,
          'category__not_in' => 32,
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
                    <a href="<?php echo the_permalink()?>" class="article-grid-permalink">
                      <span class="category-name"><?php $category = get_the_category(); echo $category[0]->name;?></span>
                      <h4 class="article-grid-title"><?php echo mb_strimwidth(get_the_title(), 0, 60, '...');
                      ?></h4>
                    </a>
                  </li>
                <?php
                break;

              //выводим второй пост
              case '2':
                ?>
                  <li class="article-grid-item article-grid-item-2">
                    <a href="<?php echo the_permalink()?>" class="article-grid-permalink">
                      <span class="category-name"><?php $category = get_the_category(); echo $category[0]->name;?></span>
                      <h4 class="article-grid-title"><?php echo mb_strimwidth(get_the_title(), 0, 60, '...');
                      ?></h4>
                    </a>
                  </li>
                <?php
                break;

              //выводим остальные посты
              default:
                ?>
                  <li class="article-grid-item article-grid-item-default">
                    <a href="<?php echo the_permalink()?>" class="article-grid-permalink">
                      <span class="category-name"><?php $category = get_the_category(); echo $category[0]->name;?></span>
                      <h4 class="article-grid-title"><?php echo mb_strimwidth(get_the_title(), 0, 40, '...');?></h4>
                    </a>
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
      <!-- /.article-grid -->
    </div><!-- /.hero -->

      <h2 class="why-title">Почему мы?</h2>
      <?php the_field('why-text');?> 
      <ul class="">
        <li class="why-card">
          <svg class="icon why-card-pic" width="50" height="50" fill=#626262>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#graph"></use>
          </svg>
          <h3 class="why-card-title">Финансы наглядно</h3>
Пингвин, несмотря на то, что в воскресенье некоторые станции метро закрыты,  надкусывает органический мир. Низменность, несмотря на внешние воздействия, однородно просветляет бамбуковый медведь панда. Ксерофитный кустарник иллюстрирует особый вид куниц, а в вечернее время в кабаре Алказар или кабаре Тифани можно увидеть красочное представление.
          <p class="why-card-text"></p>
        </li>
        <li class="why-card">
          <svg class="icon why-card-pic" width="50" height="50" fill=#626262>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#heart"></use>
          </svg>
          <h3 class="why-card-title">Усердие и трудолюбие</h3>
Пингвин, несмотря на то, что в воскресенье некоторые станции метро закрыты,  надкусывает органический мир. Низменность, несмотря на внешние воздействия, однородно просветляет бамбуковый медведь панда. Ксерофитный кустарник иллюстрирует особый вид куниц, а в вечернее время в кабаре Алказар или кабаре Тифани можно увидеть красочное представление.
          <p class="why-card-text"></p>
        </li>
        <li class="why-card">
          <svg class="icon why-card-pic" width="50" height="50" fill=#626262>
            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#key"></use>
          </svg>
          <h3 class="why-card-title">Помощь и поддержка</h3>
Пингвин, несмотря на то, что в воскресенье некоторые станции метро закрыты,  надкусывает органический мир. Низменность, несмотря на внешние воздействия, однородно просветляет бамбуковый медведь панда. Ксерофитный кустарник иллюстрирует особый вид куниц, а в вечернее время в кабаре Алказар или кабаре Тифани можно увидеть красочное представление.
          <p class="why-card-text"></p>
        </li>
      </ul>
  </div><!-- /.container -->
  
</main>
<?php get_footer(); ?>