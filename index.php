<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package novus
 */

get_header();
?>

<section class="blogs-banner">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1>Gain more usefull <br> information</h1>
				<p>The lastest updates about eLearning and <br> the application of animated videos in education.</p>
			</div>
			<div class="col-6">
				<img src="<?= NOVUS_IMG . '/blog-banner.png' ?>">
			</div>
		</div>
	</div>
</section>

<section class="blogs-list">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h2 class="h2">Featured post</h2>
				<?php
				$sticky = get_option('sticky_posts');
				if ( ! empty( $sticky ) ) :
					$features = new WP_Query( [
						'post_type'      => 'post',
						'post__in'       => $sticky,
						'posts_per_page' => 1
					] );

					while ( $features->have_posts() ) :
						$features->the_post();

						get_template_part( 'template-parts/content', 'sticky' );
					endwhile;
				endif;
				?>

				<h2 class="h2">Recent posts</h2>
				<div class="row">
					<?php
					while ( have_posts() ) :
						the_post();

						if ( ! in_array( get_the_ID(), $sticky ) ) :
					?>

					<div class="col-6">
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

			<div class="col-4">
				<?php get_template_part( 'template-parts/content', 'sidebar' ) ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
