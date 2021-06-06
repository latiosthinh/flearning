<section class="education-banner">
	<div class="container">
		<div class="row">
			<div class="col-5">
				<img class="doodle" src="<?= NOVUS_IMG . '/doodle.png' ?>">

				<h1 class="h1">
					Make<br>
					Education<br>
					<span class="orange">Great Again</span>
				</h1>

				<p>with accessible and inspiring education animation</p>
			</div>

			<div class="col-7 video">
				<img src="<?= rwmb_meta( 'banner', null, get_queried_object_id() )['full_url'] ?>">
				<button class="play" data-video="<?= rwmb_meta( 'video_url', null, get_queried_object_id() ) ?>">
					<img src="<?= NOVUS_IMG . '/play-2.svg' ?>">
				</button>
			</div>
		</div>
	</div>
</section>