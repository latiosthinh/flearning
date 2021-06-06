<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package novus
 */

get_header();
?>

<?php if ( have_posts() ) : ?>

<header class="page-header">
	<div class="container">
	<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="archive-description">', '</div>' );
	?>
	</div>
</header><!-- .page-header -->

<section class="blogs-list">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<div class="row">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'post' );
					endwhile;

					the_posts_pagination( [
						'screen_reader_text' => ' ',
					] );
					?>
				</div>
			</div>

			<div class="col-4">
				<div class="sidebar">
					<?php get_search_form() ?>

					<h4>Favorite post</h4>
					<?php
					$favs = new WP_Query( [
						'post_type'      => 'post',
						'posts_per_page' => 3,
						'orderby'        => 'rand',
						'post__not_in'   => $sticky
					] );

					while ( $favs->have_posts() ) :
						$favs->the_post();

						get_template_part( 'template-parts/content', 'post-sidebar' );
					endwhile;
					?>

					<h4>Trending now</h4>
					<?php
					$trends = new WP_Query( [
						'post_type'      => 'post',
						'posts_per_page' => 3,
						'orderby'        => 'rand',
						'post__not_in'   => $sticky
					] );

					while ( $trends->have_posts() ) :
						$trends->the_post();

						get_template_part( 'template-parts/content', 'post-sidebar' );
					endwhile;
					?>

					<h4>Categories</h4>
					<?php
					$cats = get_categories();
					foreach ( $cats as $c ) :
					?>

						<a class="category" href="<?= get_category_link( $c->term_id ) ?>"><?= $c->name ?></a>

					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
else :

	get_template_part( 'template-parts/content', 'none' );

endif; ?>
<?php
get_footer();
