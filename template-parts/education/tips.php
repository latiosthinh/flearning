<section class="education-tips">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<p class="ttu orange">F.LEARNING’S TIPS</p>
				<h2 class="h3">
				How a good educational<br>
				animation looks like?
				</h2>

				<a href="#" class="button-1">See our examples</a>
			</div>

			<div class="col-8">
				<div class="row">
					<?php
					$tips = rwmb_meta( 'tips', null, get_queried_object_id() );
					foreach ( $tips as $t ) :
					?>

					<div class="col-6">
						<div class="item dflex aic jcsb">
							<img src="<?= wp_get_attachment_url( $t[ 'icon' ] ) ?>">
							<p class="h4"><?= $t[ 'description' ] ?></p>
						</div>
					</div>

					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>