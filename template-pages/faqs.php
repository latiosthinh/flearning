<?php
/**
 * Template name: Faqs
 */
get_header();
?>

<section class="faqs-banner">
	<div class="container">
		<div class="row">
			<div class="col-6 faqs-banner__content">
				<h1 class="h1">
				Frequently <br>
				Asked Questions
				</h1>
				<p>Have more question? Contact us to discover futher.</p>
			</div>

			<div class="col-6">
				<img src="<?= NOVUS_IMG . '/faq.gif' ?>">
			</div>
		</div>
	</div>
</section>

<section class="faqs-list">
	<div class="container">
		<div class="row accordions">
		<?php
		$blocks = rwmb_meta( 'faq_block', null, get_queried_object_id() );
		foreach ( $blocks as $b ) :
		?>

			<div class="col-12">
				<div class="faq-block">
					<h2 class="control"><?= $b[ 'title' ] ?></h2>
					<div class="panel">
						<?= $b[ 'detail' ] ?>
					</div>
				</div>
			</div>

		<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_footer();