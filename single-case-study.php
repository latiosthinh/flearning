<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package novus
 */

get_header();
?>

<section class="single-post-banner">
	<div class="container">
		<div class="row">
			<div class="single-post-banner__content dflex flex-wrap aic"
				style="background-color:<?= rwmb_meta( 'banner_color', null, get_queried_object_id() ) ?>">
				<div class="col-6">
					<h1><?php the_title(); ?></h1>

					<div class="entry-info">
						<span><?= get_the_date() ?> |</span>

						<?php
						$cats = get_the_category();
						if ( ! empty( $cats ) ) :
						?>

						Case study - <a href="<?= get_category_link( $cats[0]->term_id ) ?>">
							<?= $cats[0]->name ?>
						</a>

						<?php endif; ?>
					</div>
				</div>

				<div class="col-6">
					<img style="max-height:360px" src="<?= rwmb_meta( 'banner', null, get_queried_object_id() )['sizes'][ 'thumb-50' ]['url'] ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="single-post-content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content() ?>
			</div>
		</div>
	</div>
</section>

<section class="related-post">
	<div class="container">
		<h3 class="h2">Related case studies</h3>
		<div class="row">
			<?php
			$related = new WP_Query( [
				'post_type'      => 'case-study',
				'posts_per_page' => 3,
				'orderby'        => 'rand',
				'post__not_in'   => [ get_queried_object_id() ]
			] );

			while ( $related->have_posts() ) :
				$related->the_post();
			?>
			
			<div class="col-4">
				<?php get_template_part( 'template-parts/content', 'post' ); ?>
			</div>

			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php
get_footer();
