<section class="home-benefit page-block">
	<div class="container">
		<div class="row">
			<div class="col-12" style="margin-bottom:60px">
				<?= rwmb_meta( 'benefit_title', null, get_queried_object_id() ) ?>
			</div>

			<?php
			$benefits = rwmb_meta( 'benefit', null, get_queried_object_id() );
			foreach ( $benefits as $b ) :
			?>

			<?php if ( $b['image'] ) : ?>
			<div class="col-8">
				<div class="item">
					<div class="row">
						<div class="col-7">
							<img class="icon" src="<?= wp_get_attachment_url( $b['icon'] ) ?>">

							<h3 class="h4"><?= $b['title'] ?></h3>
							<p><?= $b['description'] ?></p>
						</div>

						<div class="col-5 image">
							<img src="<?= wp_get_attachment_url( $b['image'] ) ?>">
						</div>
					</div>
				</div>
			</div>
			<?php else : ?>
			<div class="col-4">
				<div class="item">
					<img class="icon" src="<?= wp_get_attachment_url( $b['icon'] ) ?>">

					<h3 class="h4"><?= $b['title'] ?></h3>
					<p><?= $b['description'] ?></p>
				</div>
			</div>
			<?php endif; ?>

			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="home-video page-block">
	<div class="container">
		<div class="row">
			<div class="col-12 dflex jcsb">
				<p class="h2 bold">
				Check out our <br>
				newest animation
				</p>

				<a href="<?= get_permalink( get_page_by_path( 'our-works' )->ID ) ?>">
					<img width="30" height="20" src="<?= NOVUS_IMG . '/eye.svg' ?>">
					Our works
				</a>
			</div>
		</div>

		<?php $video_imgs = rwmb_meta( 'video_img', null, get_queried_object_id() ); ?>

		<div class="video-slider splide">
			<div class="splide__arrows">
				<button class="splide__arrow splide__arrow--prev">
					<img width="27" height="27" src="<?= NOVUS_IMG . '/left.svg' ?>" alt="prev">
				</button>
				<button class="splide__arrow splide__arrow--next">
					<img width="27" height="27" src="<?= NOVUS_IMG . '/right.svg' ?>" alt="prev">
				</button>
			</div>
			<div class="splide__track">
				<div class="splide__list">
					<?php foreach ( $video_imgs as $vi ) : ?>
					
					<div class="splide__slide">
						<div class="item video">
							<img src="<?= wp_get_attachment_image_src( $vi['img'], 'big-slider')[0] ?>">

							<button class="play popup-open" data-popup="<?= $vi['url'] ?>">
								<img src="<?= NOVUS_IMG . '/play-1.png' ?>" style="width:56px;height:56px;">
							</button>
						</div>
					</div>

					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>