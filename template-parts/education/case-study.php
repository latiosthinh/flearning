<section class="education-case-study">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="ttu orange">EXPLORE CASE STUDIES</p>
				<h3 class="h2">
				Why use animation to make learning <br>
				more meaningful?
				</h3>
			</div>
		</div>

		<div class="row items">
			<div class="col-6">
			<?php
			$cs = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => 2,
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

				<div class="accordions">
					<h3 class="h3 control">
						<?= get_the_title() ?>
						<img src="<?= NOVUS_IMG . '/right.svg' ?>">
					</h3>
					<div class="panel">
						<?= rwmb_meta( 'short_description' ) ?>
						<div>
							<a href="<?= get_permalink() ?>" class="button-3">Detail Case Study</a>
						</div>
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>
			</div>

			<div class="col-6">
			<?php
			$cs2 = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => 1,
				'tax_query'      => [
					[
						'taxonomy' => 'case-study-category',
						'field' => 'slug',
						'terms' => [ 'medical-healthcare-animation-videos' ]
					]
				]
			] );
			
			while ( $cs2->have_posts() ) : $cs2->the_post();
			?>
				<div class="video">
					<img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>">
					<button class="play" data-video="<?= rwmb_meta( 'video_url', null, get_queried_object_id() ) ?>">
						<img src="<?= NOVUS_IMG . '/play-1.png' ?>" style="width:56px;height:56px;">
					</button>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>