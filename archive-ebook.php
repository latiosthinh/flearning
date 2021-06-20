<?php
get_header();

$banner_id = get_page_by_path( 'archive-banner' )->ID;

$blocks = rwmb_meta( 'layout', null, $banner_id );

foreach ( $blocks as $b ) :
	if ( 'ebook' === $b['style'] ) :
?>
<section class="page-block" style="background-image:url(<?= wp_get_attachment_url( $b[ 'layout_background' ], 'full' ) ?>)">
	<div class="container">
		<div class="row">
			<div class="col-5">
				<?= $b[ 'layout_content' ] ?>

				<?php if ( $b['layout_button'] ) : ?>
				<div class="dflex jcc button-list">
					<?php foreach ( $b['layout_button'] as $button ) : ?>
						<?php if ( $button['is_video'] ) : ?>

						<a class="button-3 popup-open" class="popup-open" data-popup="<?= $button['button_url'] ?>">
							<img src="<?= NOVUS_IMG . '/play-4.svg' ?>">
							<?= $button['button_text'] ?>
						</a>

						<?php else : ?>

						<a class="button-3" href="<?= $button['button_url'] ?>">
							<?= $button['button_text'] ?>
						</a>

						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>

			<div class="col-7 video">
				<img src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>">

				<?php if ( $b[ 'layout_video' ] ) : ?>
				<button class="play popup-open" data-popup="<?= $b[ 'layout_video' ]; ?>">
					<img src="<?= NOVUS_IMG . '/play-2.svg' ?>">
				</button>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php
	endif;
endforeach;
?>

<section class="cs-list">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="h2">Featured case studies</h2>

				<p>Hand-picked case study that may help</p>
			</div>

			<?php
			$cs = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => 3,
			] );
			?>
			<div class="col-12">
				<div class="splide ebook-slider">
					<div class="splide__track">
						<div class="splide__list">
							<?php while ( $cs->have_posts() ) : $cs->the_post(); ?>
							<article class="splide__slide">
								<a href="<?= get_permalink() ?>" class="entry-thumbnail">
									<?php the_post_thumbnail( 'full' ) ?>
								</a>
								<div class="entry-content">
									<h3><?= get_the_title() ?></h3>
									<?= rwmb_meta( 'short_description', null, get_the_ID() ) ?>

									<a class="button-4" href="<?= get_permalink() ?>">Find out how</a>
								</div>
							</article>
							<?php endwhile; ?>
						</div>
					</div>

					<div class="splide__arrows">
						<button class="splide__arrow splide__arrow--prev" aria-label="Go to last slide" aria-controls="splide01-track">
							<img src="<?= NOVUS_IMG . '/left-grey.svg' ?>">
						</button>
						<button class="splide__arrow splide__arrow--next" aria-label="Next slide" aria-controls="splide01-track">
							<img src="<?= NOVUS_IMG . '/right-grey.svg' ?>">
						</button>
					</div>
				</div>
			</div>

			<?php
			$cs2 = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => 3,
				'offset'         => 3,
			] );
			
			while ( $cs->have_posts() ) : $cs->the_post(); ?>
			<div class="col-4">
				<article class="cs-normal">
					<a href="<?= get_permalink() ?>" class="entry-thumbnail">
						<?php the_post_thumbnail( 'thumb-graph' ) ?>
					</a>
					<div class="entry-content">
						<h3><?= get_the_title() ?></h3>
						<p><?= get_the_excerpt() ?></p>

						<a class="button-4" href="<?= get_permalink() ?>">Find out how</a>
					</div>
				</article>
			</div>
			<?php endwhile; ?>
		</div>
		<hr>
	</div>
</section>

<section class="ebook-list">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="h2">Free EBooks</h2>
			</div>

			<div class="col-8">
				<div class="row">
					<?php
					while ( have_posts() ) :
						the_post();
					?>

					<div class="col-6">
						<?php get_template_part( 'template-parts/content', 'ebook' ); ?>
					</div>

					<?php
					endwhile;

					the_posts_pagination( [
						'screen_reader_text' => ' ',
					] );
					?>
				</div>
			</div>

			<div class="col-4">
				<div class="sidebar">
					<h4>Categories</h4>
					<?php
					$terms = get_terms( [
						'taxonomy' => 'ebook-category'
					] );

					foreach ( $terms as $t ) : 
					?>

					<a class="category" href="<?= get_term_link( $t->term_id, 'ebook-category' ) ?>"><?= $t->name ?></a>

					<?php endforeach; ?>

					<div class="news-letter">
						<h4>Sign up for newest eBook from F.Learning Publication .</h4>
						<p>The email update is a weekly summary of the most popular and usefull eBook from F.Learning Publication. We curate the best, so you can stay continually informed and inspired.</p>

						<?= do_shortcode( '[contact-form-7 id="177" title="New Ebook"]' ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();