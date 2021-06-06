<section class="process-team">
	<div class="container">
		<div class="row">
			<div class="col-12 tac">
				<h2 class="h2">Meet our great team</h2>
			</div>

			<?php
			$team = rwmb_meta( 'team', null, get_queried_object_id() );

			foreach ( $team as $t ) :
			?>

			<div class="col-3">
				<div class="item">
					<img src="<?= wp_get_attachment_url( $t[ 'image' ], 'full' ) ?>">
					<h4><?= $t[ 'name' ] ?></h4>
					<p><?= $t[ 'position' ] ?></p>
				</div>
			</div>

			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="process-contact">
	<div class="container">
		<div class="content tac">
			<img src="<?= NOVUS_IMG . '/hand.png' ?>">
			<h2 class="h1">Interesting in creating an <br> animated video?</h2>

			<a class="button-3" href="<?= get_permalink( get_page_by_path( 'contact' ) ) ?>">Contact us</a>
		</div>
	</div>
</section>