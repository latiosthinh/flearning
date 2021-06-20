<section class="home-partner page-block">
	<div class="container">
		<h3 class="tac"><?= rwmb_meta( 'partner_title', null, get_queried_object_id() ) ?></h3>

		<div class="splide partner-slider">
			<div class="splide__track">
				<div class="splide__list">
					<?php
					$partners = rwmb_meta( 'image_advanced_tagr3b0nwfk', null, get_queried_object_id() );

					foreach ( $partners as $p ) :
					?>
						<div class="splide__slide">
							<img src="<?= $p[ 'full_url' ] ?>">
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>