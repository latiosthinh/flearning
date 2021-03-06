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

				<button id="search-control" class="b0" name="search-control">
					<svg width="21" height="21" viewBox="0 0 21 21" fill="#474747">
						<path d="M20.6656 18.5392L16.889 14.7449C18.1075 13.1807 18.7686 11.249 18.7662 9.26049C18.7662 7.48954 18.245 5.75836 17.2686 4.28587C16.2922 2.81337 14.9044 1.6657 13.2807 0.98799C11.657 0.310276 9.87031 0.132955 8.14659 0.478451C6.42287 0.823947 4.83953 1.67674 3.5968 2.92899C2.35407 4.18125 1.50776 5.77671 1.16489 7.51364C0.822018 9.25056 0.997991 11.0509 1.67055 12.6871C2.34312 14.3232 3.48206 15.7217 4.94336 16.7056C6.40466 17.6894 8.12268 18.2146 9.88017 18.2146C11.8536 18.2171 13.7705 17.5508 15.3229 16.323L19.0883 20.1285C19.1916 20.2334 19.3144 20.3167 19.4498 20.3735C19.5851 20.4303 19.7303 20.4596 19.8769 20.4596C20.0236 20.4596 20.1688 20.4303 20.3041 20.3735C20.4395 20.3167 20.5623 20.2334 20.6656 20.1285C20.7697 20.0245 20.8523 19.9007 20.9087 19.7643C20.9651 19.6279 20.9941 19.4816 20.9941 19.3339C20.9941 19.1861 20.9651 19.0398 20.9087 18.9034C20.8523 18.767 20.7697 18.6432 20.6656 18.5392ZM3.21565 9.26049C3.21565 7.93228 3.60652 6.63389 4.33882 5.52952C5.07113 4.42515 6.11199 3.5644 7.32977 3.05612C8.54755 2.54783 9.88756 2.41484 11.1804 2.67396C12.4731 2.93308 13.6606 3.57268 14.5927 4.51187C15.5247 5.45106 16.1595 6.64766 16.4166 7.95035C16.6738 9.25305 16.5418 10.6033 16.0374 11.8304C15.533 13.0575 14.6788 14.1064 13.5828 14.8443C12.4868 15.5822 11.1983 15.9761 9.88017 15.9761C8.11263 15.9761 6.41748 15.2685 5.16764 14.0091C3.9178 12.7497 3.21565 11.0416 3.21565 9.26049Z" />
					</svg>
				</button>
			</div>

			<button id="nav-control">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>