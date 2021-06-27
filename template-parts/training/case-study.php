<section class="train-case-study">
	<div class="container">
		<div class="row">
			<div class="col-12 tac">
				<h2>
				Explore case studies for <br> Coporate training
				</h2>
			</div>
		</div>

		<?php
		$cs = new WP_Query( [
			'post_type'      => 'case-study',
			'posts_per_page' => 3,
			'tax_query'      => [
				[
					'taxonomy' => 'case-study-category',
					'field' => 'slug',
					'terms' => [ 'medical-healthcare-animation-videos' ]
				]
			]
		] );
		
		while ( $cs->have_posts() ) : $cs->the_post();
		?>

		<div class="row item">
			<div class="col-6">
				<h3 class="h4"><?= rwmb_meta( 'big_title', null, get_the_ID() ) ?></h3>
				<div class="excerpt">
					<?= rwmb_meta( 'short_description' ) ?>
				</div>
				<a href="<?= get_permalink() ?>" class="button-3">Detail Case Study</a>
			</div>

			<div class="col-6 video">
				<img class="image" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>">
				<button class="play" data-video="<?= rwmb_meta( 'video_url', null, get_queried_object_id() ) ?>">
					<img src="<?= NOVUS_IMG . '/play-2.svg' ?>">
				</button>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>