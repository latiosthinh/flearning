<div class="sidebar">
	<?php get_search_form() ?>

	<h4>Favorite post</h4>
	<?php
	$sticky = get_option('sticky_posts');

	$args_favs = [
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'orderby'        => 'rand',
		'post__not_in'   => $sticky,
	];

	if ( category_exists( 'favorite' ) ) {
		$args_favs[ 'category_name' ] = 'favorite';
	}

	$favs = new WP_Query( $args_favs );

	while ( $favs->have_posts() ) :
		$favs->the_post();

		get_template_part( 'template-parts/content', 'post-sidebar' );
	endwhile;
	?>

	<h4>Trending now</h4>
	<?php
	$args_trend = [
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'orderby'        => 'rand',
		'post__not_in'   => $sticky,
	];

	if ( category_exists( 'trending' ) ) {
		$args_trend[ 'category_name' ] = 'trending';
	}

	$trends = new WP_Query( $args_trend );

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
		<?php
		$shortcode = rwmb_meta( 'sidebar_shortcode', ['object_type' => 'setting'], 'novus-settings' );
		echo do_shortcode($shortcode );
		?>
	</div>
</div>