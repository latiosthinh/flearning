<section class="health-banner">
	<div class="container">
		<div class="row">
			<div class="col-5 left">
				<h1>
					<span class="orange">Stand Out</span><br>
					Your Healthcare
					Business
				</h1>
				<p>with accessible and inspiring animated videos.</p>

				<div class="cta dflex aic">
					<a href="#" class="button-1">Get free sample</a>
					<a href="#" class="button-4">
						<img src="<?= NOVUS_IMG . '/play-4.svg' ?>">
						Watch Reel
					</a>
				</div>
			</div>

			<div class="col-7 image">
				<img src="<?= rwmb_meta( 'banner', null, get_queried_object_id() )[ 'full_url' ] ?>">
			</div>

			<div class="col-12">
				<div class="content">
					<p>WHAT WE HELP</p>
					<h2>Medical explainer video & <br> healthcare animation</h2>

					<div class="row">
						<?php
						$content = rwmb_meta( 'banner_content', null, get_queried_object_id() );

						foreach ( $content as $c ) :
						?>

							<div class="col"><?= $c ?></div>

						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>