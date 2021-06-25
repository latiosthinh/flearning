<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package novus
 */

get_header();

$type = rwmb_meta( 'horizontal', null, get_queried_object_id() );
?>

<section class="single-ebook-banner">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<p class="orange ttu">E-BOOK</p>

				<h1 class="h2"><?= get_the_title() ?></h1>

				<?= do_shortcode( rwmb_meta( 'shortcode', null, get_queried_object_id() ) ) ?>
			</div>

			<div class="col-5 image">
				<img src="<?= '0' === $type ? rwmb_meta( 'cover', null, get_queried_object_id() )[ 'sizes' ]['thumb-ebokk']['url'] : rwmb_meta( 'cover', null, get_queried_object_id() )[ 'sizes' ]['thumb-ebokk-h']['url'] ?>">
			</div>
		</div>
	</div>
</section>

<section class="single-ebook-content">
	<div class="container">
		<h3 class="h2">What’s inside</h3>
		<div class="row">
			<div class="col-5 image">
				<div class="splide book-content-slider">
					<div class="splide__track">
						<div class="splide__list">
						<?php
						$images = rwmb_meta( 'table_content', [ 'size' => 'thumbnail' ] );

						foreach ( $images as $image ) :
						?>
						<div class="splide__slide">
							<img src="<?= '0' === $type ? $image[ 'sizes' ]['thumb-ebokk']['url'] : $image[ 'sizes' ]['thumb-ebokk-h']['url'] ?>">
						</div>
						<?php endforeach; ?>
						</div>
					</div>
					
					<div class="splide__arrows">
						<button class="splide__arrow splide__arrow--prev">
							<img src="<?= NOVUS_IMG . '/left.svg' ?>">
						</button>
						<button class="splide__arrow splide__arrow--next">
							<img src="<?= NOVUS_IMG . '/right.svg' ?>">
						</button>
					</div>
				</div>
			</div>

			<div class="col-7">
				<?php the_content() ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
