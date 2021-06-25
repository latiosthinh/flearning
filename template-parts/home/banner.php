<section class="home-banner page-block">
	<div class="container">
		<div class="row">

			<div class="col-5">
				<?= rwmb_meta( 'banner_title', null, get_queried_object_id() ) ?>

				<div class="cta">
					<a href="<?= rwmb_meta( 'banner_button_url', null, get_queried_object_id() ) ?>" class="button-1">
						<?= rwmb_meta( 'banner_button_text', null, get_queried_object_id() ) ?>
					</a>
				</div>

				<p class="scroll dflex aic">
					<img width="40" height="40" src="<?= NOVUS_IMG . '/scrolldown.svg' ?>" alt="scroll-down">
					Scroll down to explore more
				</p>
			</div>

			<div class="col-7 video">
				<?php $video = rwmb_meta( 'banner_video', null, get_queried_object_id() ); ?>
				<img src="<?= rwmb_meta( 'banner', null, get_queried_object_id() )[ 'full_url' ] ?>">
				<button class="play popup-open" data-popup="<?= $video ?>">
					<img src="<?= NOVUS_IMG . '/play-1.png' ?>" style="width:56px;height:56px;">
				</button>
			</div>
		</div>
	</div>
</section>