<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package novus
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title" style="text-align:center"><?php esc_html_e( '404. Page Not found!', 'novus' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p style="text-align:center;margin:1em 0 5em;"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'novus' ); ?></p>

						<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
        </div>
	</main><!-- #main -->

<?php
get_footer();
