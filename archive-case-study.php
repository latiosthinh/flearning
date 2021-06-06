<?php
get_header();
?>

<section class="cs-banner">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1 class="h1">Simple Motion <br> Powerful Knowledge</h1>
				<a href="#" class="button-1">Explore Case Studies</a>
			</div>

			<div class="col-6">
				<img src="<?= NOVUS_IMG . '/blog-banner.png' ?>">
			</div>
		</div>
	</div>
</section>

<section class="cs-intro">
	<div class="container">
		<div class="col-12 tac">
			<h2 class="h1">
			Explore Our Online Educational <br> Animation Examples
			</h2>

			<p>Get a feel for our style and capabilities from our portfolio, choose your favorite, <br> and make your investment success with us!</p>
		</div>
	</div>
</section>

<section class="cs-term">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="h2">Animated Learning Videos</h3>
				<p>Bring new exciting experiences to your learners. Check out our project for preschool, <br> K-12 students, and Higher Education.</p>
			</div>

			<?php
			$cs1 = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => -1,
				'tax_query'      => [
					[
						'taxonomy' => 'case-study-category',
						'field'    => 'slug',
						'terms'    => [ 'animated-learning-videos' ]
					]
				]
			] );

			while ( $cs1->have_posts() ) : $cs1->the_post();
			?>

			<div class="col-4 item tac">
				<div class="video">
					<img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>">
					<button class="play" data-video="<?= rwmb_meta( 'video_url', null, get_queried_object_id() ) ?>">
						<img src="<?= NOVUS_IMG . '/play-2.svg' ?>">
					</button>
				</div>
				<a href="<?= get_permalink() ?>"><?= get_the_title() ?></a>
			</div>

			<?php endwhile; ?>
		</div>
	</div>
</section>

<section class="cs-term">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="h2">Medical & Healthcare Animation Videos</h3>
				<p>Heathcare animation videos are the best for visualizing content.</p>
			</div>

			<?php
			$cs1 = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => -1,
				'tax_query'      => [
					[
						'taxonomy' => 'case-study-category',
						'field'    => 'slug',
						'terms'    => [ 'medical-healthcare-animation-videos' ]
					]
				]
			] );

			while ( $cs1->have_posts() ) : $cs1->the_post();
			?>

			<div class="col-4 item tac">
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

<section class="cs-term">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="h2">Corporate Training Animation Videos</h3>
				<p>Improve learning outcomes with animation training videos.</p>
			</div>

			<?php
			$cs1 = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => -1,
				'tax_query'      => [
					[
						'taxonomy' => 'case-study-category',
						'field'    => 'slug',
						'terms'    => [ 'corporate-training-animation-videos' ]
					]
				]
			] );

			while ( $cs1->have_posts() ) : $cs1->the_post();
			?>

			<div class="col-4 item tac">
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

<?php
get_footer();