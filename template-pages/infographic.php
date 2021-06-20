<?php
/**
 * Template Name: Infographic
 */
get_header();

get_template_part( 'template-parts/layout' );
?>

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