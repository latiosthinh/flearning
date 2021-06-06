<section class="home-banner">
	<div class="container">
		<div class="row">
			<div class="col-5">
				<p class="orange ttu font-sans">EXPERT IN ANIMATION</p>

				<h2 class="h1">
					Empower<br>
					Any Projects <br>
					With Animation.
				</h2>

				<p>We create tailor-made products which delight our customers</p>

				<div class="cta">
					<a href="#" class="button-1">Talk to our experts</a>
					<a href="#" class="button-2">Get freebies</a>
				</div>

				<p class="scroll dflex aic">
					<img src="<?= NOVUS_IMG . '/scrolldown.svg' ?>" alt="scroll-down">
					Scroll down to explore more
				</p>
			</div>

			<div class="col-7 video">
				<img src="<?= rwmb_meta( 'banner', null, get_queried_object_id() )[ 'full_url' ] ?>">
				<button class="play" data-video="<?= rwmb_meta( 'video_url', null, get_queried_object_id() ) ?>">
					<img src="<?= NOVUS_IMG . '/play-1.svg' ?>">
				</button>
			</div>
		</div>
	</div>
</section>