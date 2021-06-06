<section class="education-video">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?= rwmb_meta( 'video_detail', null, get_queried_object_id() ); ?>
			</div>

			<?php
			$cs3 = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => 6,
				'tax_query'      => [
					[
						'taxonomy' => 'case-study-category',
						'field' => 'slug',
						'terms' => [ 'medical-healthcare-animation-videos' ]
					]
				]
			] );
			
			while ( $cs3->have_posts() ) : $cs3->the_post();
			?>
			<div class="col-4 item">
				<div class="video">
					<img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>">
					<button class="play" data-video="<?= rwmb_meta( 'video_url', null, get_queried_object_id() ) ?>">
						<img src="<?= NOVUS_IMG . '/play-2.svg' ?>">
					</button>
				</div>
				<p><?= get_the_title() ?></p>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>