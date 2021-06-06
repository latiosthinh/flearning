<section class="train-reason health-info">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="h2 tac">
				Why Choose F.Learning Studio’s <br>
				Animated Video Production Services?
				</h2>
			</div>

			<?php
			$info = rwmb_meta( 'reason', null, get_queried_object_id() );

			foreach ( $info as $i ) :
			?>

			<div class="col-4">
				<div class="item">
					<img src="<?= wp_get_attachment_url( $i[ 'icon' ] ) ?>">

					<div class="content">
						<?= $i[ 'description' ] ?>
					</div>
				</div>
			</div>

			<?php endforeach; ?>
		</div>
	</div>
</section>