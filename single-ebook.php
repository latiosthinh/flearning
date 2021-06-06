<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package novus
 */

get_header();
?>

<section class="single-ebook-banner">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<p class="orange ttu">NEW BOOK</p>

				<h1 class="h2"><?= get_the_title() ?></h1>
			</div>

			<div class="col-5 image">
				<img src="<?= rwmb_meta( 'cover', null, get_queried_object_id() )[ 'full_url' ] ?>">
			</div>
		</div>
	</div>
</section>

<section class="single-ebook-content">
	<div class="container">
		<h3 class="h2">What’s inside</h3>
		<div class="row">
			<div class="col-5 image">
				<img src="<?= rwmb_meta( 'table_content', null, get_queried_object_id() )[ 'full_url' ] ?>">
			</div>

			<div class="col-7">
				<?php the_content() ?>
			</div>
		</div>
	</div>
</section>

<section class="single-ebook-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="h2 orange">This ebook will be sent to <br> your inbox</h3>
			</div>

			<div class="col-6">
				<?= do_shortcode( '[contact-form-7 id="178" title="Download ebook"]' ) ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer( 'no-contact' );
