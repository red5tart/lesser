<?php 
//Добавление расширенных возможностей
if ( ! function_exists( 'lesser_theme_setup' ) ) :
  function lesser_theme_setup() {

    // Добавление тега title 
		add_theme_support( 'title-tag' );

		//Добавление миниатюр
		add_theme_support( 'post-thumbnails', array( 'post' ) );// Только для post
		
		// Добавление пользовательского логотипа
		add_theme_support( 'custom-logo', [
			'width'       => 27,
			'flex-height' => true,
			'header-text' => 'Lesser Logo',
			'unlink-homepage-logo' => true, // WP 5.5
		] );

    // Регистрация меню
    register_nav_menus( [
      'header_menu' => 'Меню в шапке',
			'footer_menu' => 'Меню в подвале',
			'post-side_menu' => 'Меню в сайдбаре поста',
		] );
		
  }
endif;
add_action( 'after_setup_theme', 'lesser_theme_setup' );

/**
 * Register widget area / подключение сайдбара
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lesser_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар на странице поста', 'lesser-theme' ),
			'id'            => 'post-sidebar',
			'description'   => esc_html__( 'Добавьте виджеты сюда', 'lesser-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lesser_theme_widgets_init' );

// правильный способ подключить стили и скрипты
function enqueue_lesser_style() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'lesser-theme-style', get_template_directory_uri() . '/assets/css/lesser-theme.css', 'style', time());
	wp_enqueue_style( 'Playfair-Display', 'https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
	wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
}
add_action( 'wp_enqueue_scripts', 'enqueue_lesser_style' );

## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'large',
		'1536x1536',
		'2048x2048',
	] );
}
