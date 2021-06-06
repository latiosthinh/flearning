<section class="health-info">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="h2 tac">
				We are proud to be your <br>
				reliable partner
				</h2>
			</div>

			<?php
			$info = rwmb_meta( 'info', null, get_queried_object_id() );

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