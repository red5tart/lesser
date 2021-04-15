<?php 
//Добавление расширенных возможностей
if ( ! function_exists( 'lesser_theme_setup' ) ) :
  function lesser_theme_setup() {

    // Добавление тега title 
		add_theme_support( 'title-tag' );

		//Добавление миниатюр
		add_theme_support( 'post-thumbnails', array( 'post', 'blog', 'page' ) );// Для записей post, blog и page
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

		add_action( 'init', 'register_post_types' );
		function register_post_types(){
			register_post_type( 'review', [
				'label'  => null,
				'labels' => [
					'name'               => 'Отзывы', // основное название для типа записи
					'singular_name'      => 'Отзыв', // название для одной записи этого типа
					'add_new'            => 'Добавить отзыв', // для добавления новой записи
					'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
					'new_item'           => 'Новый отзыв', // текст новой записи
					'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
					'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Отзывы', // название меню
				],
				'description'         => 'Раздел отзывов довольных клиентов',
				'public'              => true,
				// 'publicly_queryable'  => null, // зависит от public
				// 'exclude_from_search' => null, // зависит от public
				// 'show_ui'             => null, // зависит от public
				// 'show_in_nav_menus'   => null, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				// 'show_in_admin_bar'   => null, // зависит от show_in_menu
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 7,
				'menu_icon'           => 'dashicons-editor-quote',
				'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => [ 'title', 'author', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => [],
				'has_archive'         => true,
				'rewrite'             => true,
				'query_var'           => true,
			] );

			register_post_type( 'blog', [
				'label'  => null,
				'labels' => [
					'name'               => 'Записи блога', // основное название для типа записи
					'singular_name'      => 'Запись блога', // название для одной записи этого типа
					'add_new'            => 'Добавить запись блога', // для добавления новой записи
					'add_new_item'       => 'Добавление записи блога', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование записи блога', // для редактирования типа записи
					'new_item'           => 'Новая запись блога', // текст новой записи
					'view_item'          => 'Смотреть запись блога', // для просмотра записи этого типа.
					'search_items'       => 'Искать запись блога', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Записи блога', // название меню
				],
				'description'         => 'Раздел записей блога',
				'public'              => true,
				// 'publicly_queryable'  => null, // зависит от public
				// 'exclude_from_search' => null, // зависит от public
				// 'show_ui'             => null, // зависит от public
				// 'show_in_nav_menus'   => null, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				// 'show_in_admin_bar'   => null, // зависит от show_in_menu
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 6,
				'menu_icon'           => 'dashicons-edit-large',
				'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => [ 'title', 'author', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => ['category'],
				'has_archive'         => true,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}
		
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
