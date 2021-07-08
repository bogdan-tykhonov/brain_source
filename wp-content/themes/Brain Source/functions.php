<?php

add_action( 'wp_enqueue_scripts', 'brain_source_enqueue_style' );
 
function brain_source_enqueue_style() {
 
	// CSS
	if(is_home() || is_page(10)){
		wp_enqueue_style( 
			'main_css', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/main.min.css',  // URL стиля
			array(), // без зависимостей
		);
		wp_enqueue_style( 
			'slick', // идентификатор стиля
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',  // URL стиля
			array(), // без зависимостей
		);
	};


	if(is_page(5)){
		wp_enqueue_style( 
			'achivement', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/achivement.min.css',   // URL стиля
			array(), // без зависимостей
		);
	};	

	if(is_page(7)){
		wp_enqueue_style( 
			'contacts', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/contacts.min.css',   // URL стиля
			array(), // без зависимостей
		);
	};
	

	if(get_post_type() == 'post'){
		wp_enqueue_style( 
			'news-single', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/news-single.min.css',   // URL стиля
			array(), // без зависимостей
		);
	};

	if(is_page(12)){
		wp_enqueue_style( 
			'news', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/news.min.css',   // URL стиля
			array(), // без зависимостей
		);
	};

	if(is_page(14)){
		wp_enqueue_style( 
			'partners', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/partners.min.css',   // URL стиля
			array(), // без зависимостей
		);
	};

	if(get_post_type() == 'services'){
		wp_enqueue_style( 
			'services', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/services.min.css',   // URL стиля
			array(), // без зависимостей
		);
	};

	if(is_page_template('single-vacancy.php')){
		wp_enqueue_style( 
			'vacancy-single', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/vacancy-single.min.css',   // URL стиля
			array(), // без зависимостей
		);
	};	

	if(is_page(18)){
		wp_enqueue_style( 
			'vacancy', // идентификатор стиля
			get_stylesheet_directory_uri() . '/dist/assets/css/vacancy.min.css',   // URL стиля
			array(), // без зависимостей
		);
	};
	// JavaScript
	// wp_enqueue_script( 
	// 	'misha_js', // идентификатор скрипта
	// 	get_stylesheet_directory_uri() . '/js/misha.js', // URL скрипта
	// 	array( 'jquery' ), // зависимости от других скриптов
	// 	time(), // версия каждую секунду разная, чтоб не кэшировать во время разработки 
	// 	true // true - в футере, false – в хедере
	// );

};

    add_action( 'wp_enqueue_scripts', 'brain_source_enqueue_script' );

    function brain_source_enqueue_script(){
        wp_enqueue_script( 
            'bundle', // идентификатор скрипта
            get_stylesheet_directory_uri() . '/dist/bundle.js', // URL скрипта
            array( ), // зависимости от других скриптов
            time(), // версия каждую секунду разная, чтоб не кэшировать во время разработки 
            true // true - в футере, false – в хедере
	    );

        wp_enqueue_script( 
            'alpine', // идентификатор скрипта
            'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js', // URL скрипта
            array('bundle'), // зависимости от других скриптов
            time(), // версия каждую секунду разная, чтоб не кэшировать во время разработки 
            true // true - в футере, false – в хедере
	    );
    };

	function my_excerpt_length($length){
		return 12;
	};

	add_filter('excerpt_length', 'my_excerpt_length');

	require('inc/functions/post_types.php');

?>
 
