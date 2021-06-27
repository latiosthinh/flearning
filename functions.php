<?php
/**
 * novus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package novus
 */

if ( ! defined( 'NOVUS_VERSION' ) ) {
	define( 'NOVUS_VERSION', '1.0.0' );
	define( 'NOVUS_IMG', get_template_directory_uri() . '/images' );
	define( 'NOVUS_JS', get_template_directory_uri() . '/js' );
	define( 'NOVUS_ASSETS', get_template_directory_uri() . '/assets' );
}

if ( ! function_exists( 'novus_setup' ) ) :
	function novus_setup() {
		load_theme_textdomain( 'novus', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'wp-block-styles' );

		register_nav_menus( [ 'menu-1' => esc_html__( 'Primary', 'novus' )] );
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'novus_custom_background_args',
				[
					'default-color' => 'ffffff',
					'default-image' => '',
				]
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			[
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			]
		);
		
		add_image_size( 'thumb-250', 250, 200, true );
		add_image_size( 'big-slider', 1100, 620, true );
		add_image_size( 'thumb-graphic', 420, 500, true );
		add_image_size( 'thumb-post', 420, 370, true );
		add_image_size( 'thumb-video', 430, 250, true );
		add_image_size( 'thumb-testimonial', 100, 100, true );
		add_image_size( 'thumb-partner', 200, 200, true );
		add_image_size( 'thumb-team', 315, 442, true );
		add_image_size( 'thumb-50', 670, 442, true );
		add_image_size( 'thumb-ebbok', 470, 670, true );
	}
endif;
add_action( 'after_setup_theme', 'novus_setup' );

function novus_widgets_init() {
	register_sidebar(
		[
			'name'          => esc_html__( 'Sidebar', 'novus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'novus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
}
add_action( 'widgets_init', 'novus_widgets_init' );

function novus_scripts() {
	// Dequeue
	wp_deregister_script( 'heartbeat' );
	wp_deregister_script( 'wp-polyfill' );

	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' );
	wp_dequeue_style( 'contact-form-7' );
	
	wp_enqueue_style( 'novus-style', get_stylesheet_uri(), [], NOVUS_VERSION );
	wp_enqueue_script( 'novus-script', NOVUS_JS . '/script.js', [], NOVUS_VERSION, true );

	if ( is_singular( 'page' ) ) {
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );
	}

	wp_localize_script( 'novus-script', 'php_data', [
		'base_url' => site_url(),
		'IMG'      => NOVUS_IMG,
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'nonce'    => wp_create_nonce( 'ajax-nonce' )
	]);
}
add_action( 'wp_enqueue_scripts', 'novus_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/metabox.php';
require get_template_directory() . '/inc/compress.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'wp_ajax_novus_get_posts', 'novus_get_posts' );
add_action( 'wp_ajax_nopriv_novus_get_posts', 'novus_get_posts' );
function novus_get_posts() {
	$nonce = $_POST[ 'nonce' ];

	if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) ) {
		wp_die( 'Nonce value cannot be verified.' );
	}

	if ( isset( $_REQUEST ) ) {
		$posts = new WP_Query( [
			'post_type'      => 'post',
			'posts_per_page' => 4,
			'offset'         => $_REQUEST[ 'offset' ],
		] );

		if ( $posts->have_posts() ) :
			while ( $posts->have_posts() ) : $posts->the_post();
				echo get_template_part( 'template-parts/post' );
			endwhile;
		else :
			echo '<p>No posts found!!</p>';
		endif;
	}

	wp_die();
}

add_action( 'pre_get_posts', 'gem_post_type_archive' );
function gem_post_type_archive( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( is_post_type_archive( 'ebook' ) ) {
		$query->set( 'posts_per_page', 6 );
	}

	// if ( get_queried_object()->name === 'case-study' ) {
	// 	$query->set( 'posts_per_page', 6 );
	// }

	// if ( is_post_type_archive( 'post' ) ) {
	// 	$query->set( 'posts_per_page', 6 );
	// }
}

// Customize mce editor font sizes
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
	function wpex_mce_text_sizes( $initArray ){
		$initArray['fontsize_formats'] = "9px 10px 12px 13px 14px 16px 18px 21px 24px 28px 32px 36px";
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

function novus_hide_plugin() {
	global $wp_list_table;

	$hidearr = [
		'tinymce-advanced/tinymce-advanced.php',
		'svg-support/svg-support.php'
	];

	$plugins = $wp_list_table->items;

	foreach ( $plugins as $key => $val ) {
		if ( in_array( $key,$hidearr ) ) {
			unset($wp_list_table->items[$key]);
		}
	}
}
add_action( 'pre_current_active_plugins', 'novus_hide_plugin' );

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	// add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

add_filter( 'script_loader_tag', 'novus_defer_scripts', 10, 3 );
function novus_defer_scripts( $tag, $handle, $src ) {
	$defer_scripts = [
		'novus-splide',
		'novus-script'
	];

	if ( in_array( $handle, $defer_scripts ) ) {
		return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}
	
	return $tag;
}