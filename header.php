<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'novus' ); ?></a>

	<header id="masthead" class="site-header" style="<?= is_user_logged_in() ? 'margin-top:32px' : '' ?>">
		<div class="container">
			<?= the_custom_logo(); ?>

			<?php wp_nav_menu( ['menu' => 'menu-1'] ); ?>

			<div class="menu-right">
				<a class="grey" href="<?= get_permalink( get_page_by_path( 'faq' ) ) ?>">FAQs</a>

				<a class="button-3 font-brandon" href="<?= get_permalink( get_page_by_path( 'contact' ) ) ?>">Contact us</a>
			</div>

			<button id="nav-control">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>