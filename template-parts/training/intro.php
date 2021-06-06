<section class="train-intro">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h2 class="h2">
				Why choose animation for <br> training video production?
				</h2>

				<img class="image" src="<?= rwmb_meta( 'image', null, get_queried_object_id() )[ 'full_url' ] ?>">
			</div>

			<div class="col-6">
			<?php
			$intro = rwmb_meta( 'intro', null, get_queried_object_id() );

			foreach ( $intro as $i ) :
			?>

				<div class="item">
					<img src="<?= wp_get_attachment_url( $i[ 'icon' ] ) ?>">

					<div class="content">
						<?= $i[ 'description' ] ?>
					</div>
				</div>

			<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>