<section class="home-intro page-block">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?= rwmb_meta( 'intro_title', null, get_queried_object_id() ); ?>
			</div>

			<?php
			$intros = rwmb_meta( 'intro', null, get_queried_object_id() );
			foreach ( $intros as $intro ) :
			?>

			<div class="col-4">
				<div class="intro-content">
					<img src="<?= wp_get_attachment_url( $intro['icon'] ) ?>">

					<h3 class="h4"><?= $intro['title'] ?></h3>
					<p><?= $intro['description'] ?></p>

					<a class="button-2" href="<?= $intro[url] ?>">Find out more</a>
				</div>
			</div>

			<?php endforeach; ?>
		</div>
	</div>
</section>