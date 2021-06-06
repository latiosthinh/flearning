<section class="home-benefit">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="h2 bold">
				Key benifits of <br>
				using animation video
				</p>
			</div>

			<?php
			$benefits = rwmb_meta( 'benefit', null, get_queried_object_id() );
			foreach ( $benefits as $b ) :
			?>

			<?php if ( $b['image'] ) : ?>
			<div class="col-8">
				<div class="item">
					<div class="row">
						<div class="col-6">
							<img class="icon" src="<?= wp_get_attachment_url( $b['icon'] ) ?>">

							<h3 class="h4"><?= $b['title'] ?></h3>
							<p><?= $b['description'] ?></p>
						</div>

						<div class="col-6 image">
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

<section class="home-video">
	<div class="container">
		<div class="row">
			<div class="col-12 dflex jcsb">
				<p class="h2 bold">
				Check out our <br>
				newest animation
				</p>
				
				<a href="<?= home_url( '/case-studies' ) ?>">
					<img src="<?= NOVUS_IMG . '/eye.svg' ?>">
					All case studies
				</a>
			</div>
		</div>

		<div class="video-slider splide">
			<div class="splide__arrows">
				<button class="splide__arrow splide__arrow--prev">
					<img src="<?= NOVUS_IMG . '/left.svg' ?>" alt="prev">
				</button>
				<button class="splide__arrow splide__arrow--next">
					<img src="<?= NOVUS_IMG . '/right.svg' ?>" alt="prev">
				</button>
			</div>
			<div class="splide__track">
				<div class="splide__list">
					<?php
					$video_imgs = rwmb_meta( 'video_img', null, get_queried_object_id() );

					foreach ( $video_imgs as $vi ) :
					?>
					
					<div class="splide__slide">
						<div class="item">
							<?php if ( $vi['url'] ) : ?>
								<video muted autoplay loop src="<?= $vi['url'] ?>"></video>
							<?php else : ?>
								<img src="<?= wp_get_attachment_url( $vi['img'] ) ?>" alt="">
							<?php endif; ?>
						</div>
					</div>

					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>