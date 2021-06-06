<article class="post-item">
	<a class="entry-thumbnail" href="<?php the_permalink() ?>">
		<?php the_post_thumbnail( 'thumb-graphic' ) ?>

		<div class="tag">Free</div>
	</a>
	
	<div class="entry-content">
		<a href="<?php the_permalink() ?>">
			<h2 class="h4"><?php the_title() ?></h2>
		</a>
		
		<p><?= rwmb_meta( 'short_description' ) ?></p>
	</div>
</article>