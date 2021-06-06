<section class="process-step">
	<div class="container">
		<div class="row">
			<div class="col-12 tac">
				<h2 class="h2">
				Our strong process actualize <br>
				your expectations
				</h2>
			</div>
		</div>

		<?php $process = rwmb_meta( 'process', null, get_queried_object_id() ); ?>
		<div class="row">
			<div class="col-12 tab-nav">
				<?php
				$title_i = 0;
				foreach ( $process as $p ) :
					$title_i += 1;
				?>

				<button class="h4 <?= $title_i == 1 ? 'active' : '' ?>" data-tab="tab-<?= $title_i ?>"><?= $p[ 'title' ] ?></button>

				<?php endforeach; ?>
			</div>
		</div>

		<?php
		$tab_i = 0;
		foreach ( $process as $p ) :
			$tab_i += 1;
		?>
		<div class="row tab-panel <?= $tab_i == 1 ? 'active' : '' ?>" data-tab="tab-<?= $tab_i ?>">
			<?php
			$items = $p[ 'content' ];
			$ii = 0;

			foreach ( $items as $e ) :
			?>
			<div class="col-4">
				<div class="item">
					<img src="<?= wp_get_attachment_url( $e[ 'image' ] ) ?>">

					<span class="number"><?= ++ $ii ?></span>

					<div class="content">
						<?= $e[ 'detail' ] ?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endforeach; ?>
	</div>
</section>