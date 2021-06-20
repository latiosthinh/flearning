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

$banner_id = get_page_by_path( 'archive-banner' )->ID;

$blocks = rwmb_meta( 'layout', null, $banner_id );

foreach ( $blocks as $b ) :
	if ( 'blog' === $b['style'] ) :
?>
<section class="page-block" style="background-image:url(<?= wp_get_attachment_url( $b[ 'layout_background' ], 'full' ) ?>)">
	<div class="container">
		<div class="row">
			<div class="col-5">
				<?= $b[ 'layout_content' ] ?>

				<?php if ( $b['layout_button'] ) : ?>
				<div class="dflex jcc button-list">
					<?php foreach ( $b['layout_button'] as $button ) : ?>
						<?php if ( $button['is_video'] ) : ?>

						<a class="button-3 popup-open" class="popup-open" data-popup="<?= $button['button_url'] ?>">
							<img src="<?= NOVUS_IMG . '/play-4.svg' ?>">
							<?= $button['button_text'] ?>
						</a>

						<?php else : ?>

						<a class="button-3" href="<?= $button['button_url'] ?>">
							<?= $button['button_text'] ?>
						</a>

						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>

			<div class="col-7 video">
				<img src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>">

				<?php if ( $b[ 'layout_video' ] ) : ?>
				<button class="play popup-open" data-popup="<?= $b[ 'layout_video' ]; ?>">
					<img src="<?= NOVUS_IMG . '/play-2.svg' ?>">
				</button>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php
	endif;
endforeach;
?>

<section class="blogs-list page-block">
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
