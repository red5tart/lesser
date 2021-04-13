<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- шапка поста -->
	<header class="entry-header <?php echo get_post_type();?>-header" style="background: linear-gradient(0deg, rgba(38, 45, 51, 0.75), rgba(38, 45, 51, 0.75)), url(
    <?php 
      if( has_post_thumbnail() ) {
          echo get_the_post_thumbnail_url();
        }
        else {
          echo get_template_directory_uri().'/assets/images/img-default.png';
        }
      ?>
  );">
    <div class="container">
      <div class="post-header-wrapper">
        <div class="post-title-wrapper">
          <?php
          // проверяем, точно ли мы на странице поста
          if ( is_singular() ) :
            the_title( '<h1 class="post-title">', '</h1>' );
          else :
            the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;?>
        </div>
        <!-- /.post-title-wrapper -->
      </div>
      <!-- /.post-header-wrapper -->
      </div>
    <!-- /.container -->
	</header><!-- .entry-header -->

  <div class="container">
    <!-- Содержимое поста -->
    <div class="post-content">
      <?php
      // выводим содержимое
      the_content(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'uni-example' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          wp_kses_post( get_the_title() )
        )
      );

      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . esc_html__( 'Страницы:', 'uni-theme' ),
          'after'  => '</div>',
        )
      );
      ?>
    </div><!-- .post-content -->
    <!-- Подвал поста -->
  </div><!-- /.container -->
</article> 