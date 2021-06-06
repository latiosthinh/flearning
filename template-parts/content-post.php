<article class="post-item">
	<a class="entry-thumbnail" href="<?php the_permalink() ?>">
		<?php the_post_thumbnail( 'thumb-graphic' ) ?>
	</a>
	
	<div class="entry-info">
		<span><?= get_the_date() ?></span>
		<?php
		$cats = get_the_category();
		if ( ! empty( $cats ) ) :
		?>

		<a class="orange" href="<?= get_category_link( $cats[0]->term_id ) ?>">
			<img src="<?= NOVUS_IMG . '/tag.svg' ?>">
			<?= $cats[0]->name ?>
		</a>

		<?php endif; ?>
	</div>

	<div class="entry-content">
		<a href="<?php the_permalink() ?>">
			<h2 class="h4"><?php the_title() ?></h2>
		</a>
		
		<p><?= rwmb_meta( 'short_description' ) ?></p>
	</div>
</article>