<?php get_header('post');?>
  <main class="site-main">
    <?php
    //запускаем цикл WordPress и проверяем наличие постов
    //если пост есть
		while ( have_posts() ) :
      //выводим все его содержимое
			the_post();

      //находим шаблон для вывода поста в папке template-parts, файл content.php
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // Конец цикла while Wordpress
		?>
  </main>
<?php get_footer();?>