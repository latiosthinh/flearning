<?php
/**
 * Template name: Faqs
 */
get_header();

get_template_part( 'template-parts/layout' );
?>

<section class="faqs-list">
	<div class="container">
		<div class="row accordions">
		<?php
		$blocks = rwmb_meta( 'faq_block', null, get_queried_object_id() );
		foreach ( $blocks as $b ) :
		?>

			<div class="col-12">
				<div class="faq-block">
					<h4 class="control"><?= $b[ 'title' ] ?></h4>
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