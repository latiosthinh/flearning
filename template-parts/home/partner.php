<section class="home-partner">
	<div class="container">
		<p class="tac">Our hundred partners around the world</p>

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