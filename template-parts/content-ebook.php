<article class="post-item">
	<a class="entry-thumbnail" href="<?php the_permalink() ?>" style="background-color:<?= rwmb_meta( 'bg_color', null, get_the_ID() ) ?: '#5766C3' ?>">
		<?php the_post_thumbnail( 'full' ) ?>

		<div class="tag">Free</div>
	</a>
	
	<div class="entry-content">
		<a href="<?php the_permalink() ?>">
			<h2 class="h4"><?php the_title() ?></h2>
		</a>
		
		<p><?= rwmb_meta( 'short_description' ) ?></p>
	</div>
</article>