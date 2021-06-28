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

						Blog - <a href="<?= get_category_link( $cats[0]->term_id ) ?>">
							<?= $cats[0]->name ?>
						</a>

						<?php endif; ?>
					</div>
				</div>

				<div class="col-6">
					<img style="max-height:360px;object-fit:contain" src="<?= rwmb_meta( 'banner', null, get_queried_object_id() )['sizes'][ 'thumb-50' ]['url'] ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="single-post-content">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<?php the_content() ?>
			</div>

			<div class="col-4">
				<?php get_template_part( 'template-parts/content', 'sidebar' ) ?>
			</div>
		</div>
	</div>
</section>

<section class="related-post">
	<div class="container">
		<h3 class="h2">Related posts</h3>
		<div class="row">
			<?php
			$related = new WP_Query( [
				'post_type'      => 'post',
				'posts_per_page' => 3,
				'orderby'        => 'rand',
				'post__not_in'   => $sticky,
				'category__in'   => [ get_the_category( get_queried_object_id() )[0]->term_id ]
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
