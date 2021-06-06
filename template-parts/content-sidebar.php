<div class="sidebar">
	<?php get_search_form() ?>

	<h4>Favorite post</h4>
	<?php
	$favs = new WP_Query( [
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'orderby'        => 'rand',
		'post__not_in'   => $sticky
	] );

	while ( $favs->have_posts() ) :
		$favs->the_post();

		get_template_part( 'template-parts/content', 'post-sidebar' );
	endwhile;
	?>

	<h4>Trending now</h4>
	<?php
	$trends = new WP_Query( [
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'orderby'        => 'rand',
		'post__not_in'   => $sticky
	] );

	while ( $trends->have_posts() ) :
		$trends->the_post();

		get_template_part( 'template-parts/content', 'post-sidebar' );
	endwhile;
	?>

	<h4>Categories</h4>
	<?php
	$cats = get_categories();
	foreach ( $cats as $c ) :
	?>

		<a class="category" href="<?= get_category_link( $c->term_id ) ?>"><?= $c->name ?></a>

	<?php endforeach; ?>

	<div class="ebook-download">
		<img src="<?= NOVUS_IMG . '/ebook-download.jpg' ?>">
		<a href="<?= get_post_type_archive_link( 'ebook' ) ?>" class="button-3">Download now</a>
	</div>
</div>