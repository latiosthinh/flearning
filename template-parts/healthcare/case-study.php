<section class="health-case-study">
	<div class="container">
		<div class="row">
			<div class="col-12 tac">
				<p class="ttu orange">EXPLORE CASE STUDIES</p>
				<h2>
				Why use animated videos for <br>
				healthcare business?
				</h2>
			</div>
		</div>

		<?php
		$cs = new WP_Query( [
			'post_type'      => 'case-study',
			'posts_per_page' => 4,
			'tax_query'      => [
				[
					'taxonomy' => 'case-study-category',
					'field' => 'slug',
					'terms' => [ 'medical-healthcare-animation-videos' ]
				]
			]
		] );
		
		$i = 0;
		while ( $cs->have_posts() ) : $cs->the_post();
		$i += 1;
		?>

		<div class="row item">
			<div class="col-5">
				<h3 class="h4"><?= rwmb_meta( 'big_title', null, get_the_ID() ) ?></h3>
				<div class="excerpt">
					<?= rwmb_meta( 'short_description' ) ?>
				</div>
				<a href="<?= get_permalink() ?>" class="button-1">Detail Case Study</a>
			</div>

			<div class="col-7">
				<img class="image" src="<?= rwmb_meta( 'image', null, get_the_ID() )['full_url'] ?>">

				<div class="box">
					<p><?= get_the_title() ?></p>
					<a href="#" class="dflex aic">
						<img src="<?= NOVUS_IMG . '/play-3.svg' ?>">
						Watch Video
					</a>
				</div>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>