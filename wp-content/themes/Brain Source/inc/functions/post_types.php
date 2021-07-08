<?php
add_action( 'init', 'register_post_types_vacancy' );

	function register_post_types_vacancy(){
		register_post_type( 'vacancy', [
			'label'  => "Вакансии",
			'labels' => [
				'name' => 'Вакансии',
				'singular_name' => 'Вакансию',
				'add_new' => 'Добавить вакансию',
				'add_new_item' => 'Добавить новую вакансию', 
				'edit_item' => 'Редактировать вакансию',
				'new_item' => 'Новая вакансия',
				'all_items' => 'Все вакансии',
				'view_item' => 'Просмотр вакансии на сайте',
				'search_items' => 'Искать вакансию',
				'not_found' =>  'Вакансии не найдено',
				'not_found_in_trash' => 'В корзине нет вакансии',
				'menu_name' => 'Вакансии' 
			],
			'description'         => 'Вакансии',
			'public'              => true,
			'publicly_queryable'  => true, 
			'show_ui'             => true,
			'show_in_nav_menus'   => true, 
			'show_in_menu'        => true, 
			'show_in_admin_bar'   => true, 
			 'menu_position'       => 3,
			 'menu_icon'           => 'dashicons-admin-users',
			 'supports'            => [ 'title', 'editor', ], 
		] );
	};

	add_action( 'init', 'register_post_types_services' );

	function register_post_types_services(){
		register_post_type( 'services', [
			'label'  => "Услуги",
			'labels' => [
				'name' => 'Услуги',
				'singular_name' => 'Услугу',
				'add_new' => 'Добавить услугу',
				'add_new_item' => 'Добавить новую услугу', 
				'edit_item' => 'Редактировать услугу',
				'new_item' => 'Новая услуга',
				'all_items' => 'Все услуги',
				'view_item' => 'Просмотр услуги на сайте',
				'search_items' => 'Искать услугу',
				'not_found' =>  'Услугу не найдено',
				'not_found_in_trash' => 'В корзине нет услуги',
				'menu_name' => 'Услуги' 
			],
			'description'         => 'Услугу',
			'public'              => true,
			'publicly_queryable'  => true, 
			'show_ui'             => true,
			'show_in_nav_menus'   => true, 
			'show_in_menu'        => true, 
			'show_in_admin_bar'   => true, 
			'show_in_rest' => true,
			 'menu_position'       => 4,
			 'menu_icon'           => 'dashicons-store',
			 'supports'            => [ 'title', 'editor'], 
		] );
	};

    add_action( 'init', 'register_post_types_slider' );

	function register_post_types_slider(){
		register_post_type( 'slider', [
			'label'  => "Слайдер",
			'labels' => [
				'name' => 'Слайдер',
				'singular_name' => 'Слайдер',
				'add_new' => 'Добавить слайд',
				'add_new_item' => 'Добавить новый слайд', 
				'edit_item' => 'Редактировать слайд',
				'new_item' => 'Новый слайд',
				'all_items' => 'Все слайды',
				'view_item' => 'Просмотр слайда на сайте',
				'search_items' => 'Искать слайд',
				'not_found' =>  'Слайда не найдено',
				'not_found_in_trash' => 'В корзине нет слайда',
				'menu_name' => 'Слайдер' 
			],
			'description'         => 'Услугу',
			'public'              => true,
			'publicly_queryable'  => true, 
			'show_ui'             => true,
			'show_in_nav_menus'   => true, 
			'show_in_menu'        => true, 
			'show_in_admin_bar'   => true, 
			'show_in_rest' => true,
			 'menu_position'       => 5,
			 'menu_icon'           => 'dashicons-images-alt2',
			 'supports'            => [ 'title', 'editor'], 
		] );
	};

    add_action( 'init', 'register_post_types_contacts' );

	function register_post_types_contacts(){
		register_post_type( 'contacts', [
			'label'  => "Контакты",
			'labels' => [
				'name' => 'Контакты',
				'singular_name' => 'Контакт',
				'add_new' => 'Добавить контакт',
				'add_new_item' => 'Добавить новый контакт', 
				'edit_item' => 'Редактировать контакт',
				'new_item' => 'Новый контакт',
				'all_items' => 'Все контакты',
				'view_item' => 'Просмотр контакта на сайте',
				'search_items' => 'Искать контакт',
				'not_found' =>  'Контакта не найдено',
				'not_found_in_trash' => 'В корзине нет контактов',
				'menu_name' => 'Контакты' 
			],
			'description'         => 'Контакты',
			'public'              => true,
			'publicly_queryable'  => true, 
			'show_ui'             => true,
			'show_in_nav_menus'   => true, 
            'taxonomies' => array('contacts_taxonomy'),
			'show_in_menu'        => true, 
			'show_in_admin_bar'   => true, 
			'show_in_rest' => true,
			 'menu_position'       => 6,
			 'menu_icon'           => 'dashicons-admin-multisite',
			 'supports'            => [ 'title', 'editor'], 
		] );
	};

    add_action( 'init', 'register_post_types_achievments' );

	function register_post_types_achievments(){
		register_post_type( 'achievments', [
			'label'  => "Достижения",
			'labels' => [
				'name' => 'Достижения',
				'singular_name' => 'Достижение',
				'add_new' => 'Добавить достижение',
				'add_new_item' => 'Добавить новое достижение', 
				'edit_item' => 'Редактировать достижение',
				'new_item' => 'Новый достижение',
				'all_items' => 'Все достижения',
				'view_item' => 'Просмотр достижения на сайте',
				'search_items' => 'Искать достижение',
				'not_found' =>  'Достижение не найдено',
				'not_found_in_trash' => 'В корзине нет достижений',
				'menu_name' => 'Достижения' 
			],
			'description'         => 'Достижения',
			'public'              => true,
			'publicly_queryable'  => true, 
			'show_ui'             => true,
			'show_in_nav_menus'   => true, 
			'show_in_menu'        => true, 
			'show_in_admin_bar'   => true, 
			'show_in_rest' => true,
			 'menu_position'       => 7,
			 'menu_icon'           => 'dashicons-flag',
			 'supports'            => [ 'title', 'editor'], 
		] );
	};

    add_action( 'init', 'create_taxonomy' );
    function create_taxonomy(){
	register_taxonomy( 'contacts_taxonomy', [ 'contacts' ], [
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Страна',
			'singular_name'     => 'Страна',
			'search_items'      => 'Искать страну',
			'all_items'         => 'Все страны',
			'view_item '        => 'Просмотреть страну',
			'parent_item'       => 'Родительская страна',
			'parent_item_colon' => 'Родительская страна:',
			'edit_item'         => 'Изменить страну',
			'update_item'       => 'Изменить страну',
			'add_new_item'      => 'Добавить новую',
			'new_item_name'     => 'Новое название',
			'menu_name'         => 'Страна',
		],
		'description'           => '', 
		'public'                => true,
		 'show_in_nav_menus'     => true, 
		 'show_ui'               => true,
		 'show_in_menu'          => true,
		 'show_in_quick_edit'    => true, 
		'hierarchical'          => false,
		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null, 
		'show_admin_column'     => false, 
		'show_in_rest'          => null, 
		'rest_base'             => true, 

	] );
};

add_action( 'init', 'register_post_types_partners' );

	function register_post_types_partners(){
		register_post_type( 'partners', [
			'label'  => "Партнеры",
			'labels' => [
				'name' => 'Партнеры',
				'singular_name' => 'Партнер',
				'add_new' => 'Добавить партнера',
				'add_new_item' => 'Добавить нового партнера', 
				'edit_item' => 'Редактировать партнера',
				'new_item' => 'Новый партнер',
				'all_items' => 'Все партнеры',
				'view_item' => 'Просмотр партнера на сайте',
				'search_items' => 'Искать партнера',
				'not_found' =>  'Партнер не найден',
				'not_found_in_trash' => 'В корзине нет партнерор',
				'menu_name' => 'Партнеры' 
			],
			'description'         => 'Партнеры',
			'public'              => true,
			'publicly_queryable'  => true, 
			'show_ui'             => true,
			'show_in_nav_menus'   => true, 
			'show_in_menu'        => true, 
			'show_in_admin_bar'   => true, 
			'show_in_rest' => true,
			 'menu_position'       => 8,
			 'menu_icon'           => 'dashicons-businessperson',
			 'supports'            => [ 'title', 'editor'], 
		] );
	};
?>