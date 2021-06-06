<?php
/**
 * Template Name: Infographic
 */
get_header();
?>

<section class="graphic-banner">
	<div class="container">
		<div class="row">
			<div class="col-6 graphic-banner__content">
				<h1 class="h1">
				E-Learning <br> Infographics
				</h1>

				<p>Infographics, Checklists, Guides about eLearning and educational animation! </p>
			</div>

			<div class="col-6">
				<img src="<?= rwmb_meta( 'banner', null, get_queried_object_id() )[ 'full_url' ] ?>">
			</div>
		</div>
	</div>
</section>

<section class="graphic-items">
	<div class="container">
		<div class="row">
			<?php
			$graphics = rwmb_meta( 'graphic', [ 'size' => 'thumb-graphic' ] );
			$total = count( $graphics );
			$rows = ceil( $total / 3 );
			$i = 0;
			?>

			<div class="col-4">
			<?php
			foreach ( $graphics as $g ) :
				$i += 1;

				if ( $i < $total + 1 ) :
					if ( $i % $rows != 0 ) :
			?>
					<a href="<?= $g[ 'full_url' ] ?>" target="blank">
						<img src="<?= $g[ 'full_url' ] ?>">
					</a>
			<?php
					else : ?>
					<a href="<?= $g[ 'full_url' ] ?>" target="blank">
						<img src="<?= $g[ 'full_url' ] ?>">
					</a>
			</div>
			<div class="col-4">
			<?php
					endif;
				else : ?>
			</div>

			<?php
				endif;
			endforeach; ?>
		</div>
	</div>
</section>



<?php
get_footer();