<?php 

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// Подключение скриптов и стилей
function theme_name_scripts() {
	//	wp_enqueue_style( 'style-css', get_stylesheet_uri() );


    // <link rel="stylesheet" href="/styles/style.css">
    // <link rel="stylesheet" href="/styles/reset.css">
    // <link rel="preconnect" href="https://fonts.googleapis.com">
    // <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    // <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Lora:wght@400;500&display=swap" rel="stylesheet"> 

	wp_enqueue_style( 'gstatic', "https://fonts.gstatic.com" );
	wp_enqueue_style( 'fonts-css', "https://fonts.googleapis.com/css2?family=Gloock&family=Lora:wght@400;500&display=swap");
	wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css' );


	// <script src="/scripts/script.js"></script>
	// <script src="/scripts/post.js"></script>
	// <script src="/scripts/theme.js"></script>

	wp_deregister_script('jquery');
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/script.js', array(), 'null', true );
	wp_enqueue_script( 'post-js', get_template_directory_uri() . '/assets/js/post.js', array(), 'null', true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/theme.js', array(), 'null', true );
}


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');







add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}


add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}


// add_action('init' , function(){
// 	$args = array(
// 		'public' => true,
// 		'label' => 'Обо мне'
// 	);

// 	register_post_type('about', $args);

// })


add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'post_type_name', [
		'label'  => null,
		'labels' => [
			'name'               => 'Какой-либо плюс', // основное название для типа записи
			'singular_name'      => 'Какой-либо плюс', // название для одной записи этого типа
			'add_new'            => 'Добавить Какой-либо плюс', // для добавления новой записи
			'add_new_item'       => 'Добавление ____', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование ____', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
			'search_items'       => 'Искать ____', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Я', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

?>




