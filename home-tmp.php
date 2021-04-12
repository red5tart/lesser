<?php get_header( );?>
<main>
  <div class="container">
    <div class="hero">
      <h1 class="hero-title">Курс на социально-ориентированный национальный проект (на самом деле home.php)</h1>  
      <ul class="article-grid">
        <?php		
        global $post;

        $query = new WP_Query( [
          'posts_per_page' => 4,
/*           'orderby'        => 'date',
          'order'          => 'DESC', */
        ] );

        if ( $query->have_posts() ) {
          $cnt = 0;
          while ( $query->have_posts() ) {
            $query->the_post();
            $cnt++;
            echo $cnt;
            switch ($cnt) {
              case '1' :
                ?> 
                  <li class="article-grid-item">  
                    <a href="<?php echo get_?>" class="article-grid-permalink"></a>
                  </li>
                <?php
                break;
              case '2' :
                ?> <?php
                break;
              default:
                ?> <?php
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
    </div>
    <!-- /.hero -->
  </div>
</main>
<?php get_footer(); ?>