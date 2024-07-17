<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * 商品カスタム投稿タイプの登録
 * 
 * @param void
 * @return void
 */
function create_product_post_type()
{
	$labels = array(
		'name' => '商品',
		'singular_name' => '商品',
		'menu_name' => '商品',
		'add_new' => '新規',
		'add_new_item' => '新規追加商品',
		'new_item' => '新規商品',
		'edit_item' => '商品編集',
		'view_item' => '商品詳細',
		'all_items' => 'すべての商品',
		'search_items' => '商品検索',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => '商品'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
	);
	register_post_type('product', $args);
}
add_action('init', 'create_product_post_type');

/**
 * 分類
 * 
 * @param void
 * @return void
 */
function create_category_post_type()
{
	$labels = array(
		'name' => '分類',
		'singular_name' => '分類',
		'menu_name' => '分類',
		'add_new' => '新規',
		'add_new_item' => '追加された分類',
		'new_item' => '新規分類',
		'edit_item' => '分類編集',
		'view_item' => '分類詳細',
		'all_items' => 'すべての分類',
		'search_items' => '分類検索',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => '分類'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
	);
	register_post_type('category', $args);
}
add_action('init', 'create_category_post_type');

/**
 * 本
 * 
 * @param void
 * @return void
 */
function create_book_post_type()
{
	$labels = array(
		'name' => '本',
		'singular_name' => '本',
		'menu_name' => '本',
		'add_new' => '新規',
		'add_new_item' => '追加された本',
		'new_item' => '新規本',
		'edit_item' => '本編集',
		'view_item' => '本詳細',
		'all_items' => 'すべての本',
		'search_items' => '本検索',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => '本'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 7,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
	);
	register_post_type('book', $args);
}
add_action('init', 'create_book_post_type');