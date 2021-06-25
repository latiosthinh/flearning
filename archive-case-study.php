<?php
get_header();
get_header();

$banner_id = get_page_by_path( 'archive-banner' )->ID;

$blocks = rwmb_meta( 'layout', null, $banner_id );

foreach ( $blocks as $b ) :
	if ( 'casestudy' === $b['style'] ) :
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

<section class="blogs-list page-block">
	<div class="container">
		<div class="row">
			<?php
			while ( have_posts() ) :
				the_post();

				if ( ! in_array( get_the_ID(), $sticky ) ) :
			?>

			<div class="col-4">
				<?php get_template_part( 'template-parts/content', 'post' ); ?>
			</div>

			<?php
				endif;
			endwhile;

			the_posts_pagination( [
				'screen_reader_text' => ' ',
			] );
			?>
		</div>
	</div>
</section>

<?php
get_footer();