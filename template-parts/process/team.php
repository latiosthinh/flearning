<section class="process-team">
	<div class="container">
		<div class="row">
			<div class="col-12 tac">
				<h2 class="h2">Meet our great team</h2>
			</div>

			<?php
			$team = rwmb_meta( 'team', null, get_queried_object_id() );

			foreach ( $team as $t ) :
			?>

			<div class="col-3">
				<div class="item">
					<img src="<?= wp_get_attachment_image_src( $t[ 'image' ], 'thumb-team' )[0] ?>">
					<h4><?= $t[ 'name' ] ?></h4>
					<p><?= $t[ 'position' ] ?></p>
				</div>
			</div>

			<?php endforeach; ?>
		</div>
	</div>
</section>