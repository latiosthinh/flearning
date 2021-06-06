<section class="home-reason">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="h2 bold">Reasons people<br>count on us</p>
			</div>

			<div class="col-6 image">
				<img src="<?= rwmb_meta( 'reason_image', null, get_queried_object_id() )[ 'full_url' ] ?>">
			</div>

			<div class="col-6">
				<?php
				$items = rwmb_meta( 'reason', null, get_queried_object_id() );

				foreach ( $items as $i ) :
				?>

				<div class="item">
					<img src="<?= wp_get_attachment_url( $i['icon'] ) ?>">

					<p class="h4 bold"><?= $i['title'] ?></p>
					<p><?= $i['description'] ?></p>
				</div>

				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="home-reason__cta dflex flex-column aic">
			<p class="h1 clw bold tac">
			Want to empower your project? <br>
			Start within 24 hours!
			</p>

			<a class="button-3" href="<?= home_url( '/contact' ) ?>">Get in touch</a>
		</div>
	</div>
</section>