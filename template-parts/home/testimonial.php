<section class="home-testimonial page-block">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="orange ttu">Testimonials</p>
				<h3 class="h2">
					What clients say <br> about us
				</h3>
			</div>

			<img src="<?= NOVUS_IMG . '/feedback.svg' ?>">

			<?php
			$feedback = rwmb_meta( 'testimonial', null, get_queried_object_id() );
			$ii = 0;
			foreach ( $feedback as $f ) :
			?>

			<div class="col-4">
				<div class="item <?= 'item-' . ++$ii ?>">
					<div class="avatar">
						<img width="100" height="106" src="<?= NOVUS_IMG . '/feedback-bg.svg' ?>" class="bg">
						<img src="<?= wp_get_attachment_image_src( $f['avatar'], 'thumb-testimonial')[0]; ?>">
					</div>

					<div class="message">
						<p class="taj"><?= $f['message'] ?></p>
						<p class="bold tac"><?= $f['name'] ?></p>
						<p class="tac"><?= $f['position'] ?></p>
					</div>
				</div>
			</div>

			<?php endforeach; ?>
		</div>
	</div>
</section>