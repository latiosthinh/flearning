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
		add_image_size( 'thumb-graphic', 420, 500, true );
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
	
	// wp_enqueue_style( 'novus-choice', 'https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css', [], NOVUS_VERSION );
	wp_enqueue_style( 'novus-style', get_stylesheet_uri(), [], NOVUS_VERSION );

	// wp_enqueue_script( 'novus-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', [], NOVUS_VERSION, true );
	// wp_enqueue_script( 'novus-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', [], NOVUS_VERSION, true );

	wp_enqueue_script( 'novus-splide', NOVUS_JS . '/splide.js', [], NOVUS_VERSION, true );

	// wp_enqueue_script( 'novus-wow', NOVUS_JS . '/wow.js', [], NOVUS_VERSION, true );
	wp_enqueue_script( 'novus-script', NOVUS_JS . '/script.js', [ 'jquery' ], NOVUS_VERSION, true );

	wp_localize_script( 'novus-script', 'php_data', [
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
