<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package novus
 */

get_header();
?>

<main id="primary" class="site-main container">

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title">
			<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Search Results for: %s', 'novus' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
	</header><!-- .page-header -->

	<section class="blogs-list page-block">
		<div class="container">
			<div class="row">
				<?php
				while ( have_posts() ) :
					the_post();

					if ( ! in_array( get_the_ID(), $sticky ) ) :
				?>

				<div class="col-4">
					<?php get_template_part( 'template-parts/content', 'post' ); ?>
				</div>

				<?php
					endif;
				endwhile;

				the_posts_pagination( [
					'screen_reader_text' => ' ',
				] );
				?>
			</div>
		</div>
	</section>

<?php
else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->

<?php
get_footer();