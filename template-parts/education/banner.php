<section class="education-banner">
	<div class="container">
		<?php
		$banner = rwmb_meta( 'layout', null, get_queried_object_id() );

		foreach ( $banner as $b ) :
		?>
		<div class="row">
			<div class="col-5">
				<!-- <img class="doodle" src="<?= NOVUS_IMG . '/doodle.png' ?>"> -->

				<?= $b[ 'layout_content' ] ?>
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
		
		<?php endforeach; ?>
	</div>
</section>

