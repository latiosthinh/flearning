<section class="process-find-out">
	<div class="container">
		<div class="row">
			<div class="col-12 tac">
				<h2 class="h2">Find out about us</h2>
			</div>
		</div>

		<?php
		$findout = rwmb_meta( 'findout', null, get_queried_object_id() );

		foreach ( $findout as $f ) :
		?>

		<div class="row content">
			<div class="col-6">
				<?= $f[ 'detail' ] ?>
			</div>

			<div class="col-6">
				<img src="<?= wp_get_attachment_image_src( $f[ 'image' ], 'thumb-50' )[0] ?>">
			</div>
		</div>

		<?php endforeach; ?>
	</div>
</section>