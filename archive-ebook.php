<?php
get_header();

$banner_id = get_page_by_path( 'archive-banner' )->ID;

$blocks = rwmb_meta( 'layout', null, $banner_id );

foreach ( $blocks as $b ) :
	if ( 'ebook' === $b['style'] ) :
?>
<section class="page-block">
	<div class="container">
		<div class="block-style-9 clw dflex flex-wrap aic" style="background-color:<?= $b['banner_color'] ?>">
			<div class="col-6">
				<?= $b[ 'layout_content' ]; ?>
			</div>

			<div class="col-6">
				<img style="max-height:400px;object-fit:contain" src="<?= wp_get_attachment_url( $b[ 'layout_image' ], 'full' ) ?>">
			</div>
		</div>
	</div>
</section>
<?php
	endif;
endforeach;
?>

<section class="ebook-list page-block">
	<div class="container">
		<div class="row">
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