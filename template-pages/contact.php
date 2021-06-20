<?php
/**
 * Template Name: Contact
 */
get_header();

the_content();
?>

<section class="contact-banner">
	<div class="container">
		<div class="row">
			<div class="col-5">
				<h1 class="h1">
				Your connection to <br>
				F.Learning
				</h1>

				<p>
				We’re here to help and answer any question you might have. <br>
				We look forward to hearing from you.
				</p>
			</div>

			<div class="col-7">
				<img src="<?= rwmb_meta( 'banner', null, get_queried_object_id() )[ 'full_url' ] ?>">
			</div>
		</div>
	</div>
</section>

<section class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12 tac">
				<h2 class="h2">Ready to made your lesson animated?</h2>
				<p>Help us work out your quote ASAP by filling out this 10-question form!</p>
			</div>
		</div>

		<?= do_shortcode( rwmb_meta( 'form', null, get_queried_object_id() ) ) ?>
	</div>
</section>

<?php
get_footer();