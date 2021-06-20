<section class="home-reason page-block">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?= rwmb_meta( 'reason_title', null, get_queried_object_id() ) ?>
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
					<div class="icon-wrapper">
						<img style="width:<?= $i['width'] ?>px;height:<?= $i['height'] ?>px" src="<?= wp_get_attachment_url( $i['icon'] ) ?>">
					</div>

					<p class="h4 bold"><?= $i['title'] ?></p>
					<p><?= $i['description'] ?></p>
				</div>

				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<section class="page-block">
	<div class="container">
		<div class="home-reason__cta dflex flex-column aic">
			<div style="color:#fff;margin-bottom:60px;">
				<?= rwmb_meta( 'reason_contact', null, get_queried_object_id() ) ?>
			</div>

			<a class="button-3"
				href="<?= rwmb_meta( 'reason_contact_url', null, get_queried_object_id() ) ?>">
				<?= rwmb_meta( 'reason_contact_text', null, get_queried_object_id() ) ?>
			</a>
		</div>
	</div>
</section>