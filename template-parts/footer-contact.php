<section class="footer-contact">
	<div class="container">
		<div class="row">
			<div class="col-6 footer-contact__info">
				<p class="h2 bold">Don’t know where to start?</p>
				<p class="h2 orange bold">Get a quick quote!</p>

				<p>Leave your contact information and we will be in touch <span class="orange">within 24h!</span></p>

				<div class="info">
					<?php
					$infos = rwmb_meta( 'contact_info', ['object_type' => 'setting'], 'novus-settings' );
					
					foreach( $infos as $i ) :
					?>
					<a href="<?= $i['url'] ?>">
						<img width="40" height="40" src="<?= wp_get_attachment_url( $i['icon'] ) ?>">
						<?= $i['text'] ?>
					</a>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="col-6">
				<?= do_shortcode( '[contact-form-7 id="20" title="Contact"]' ) ?>
			</div>
		</div>
	</div>
</section>