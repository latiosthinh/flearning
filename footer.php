<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novus
 */

?>

	<section class="footer-contact">
		<div class="container">
			<div class="row">
				<div class="col-6 footer-contact__info">
					<p class="h2 bold">Don’t know where to start?</p>
					<p class="h2 orange bold">Get a quick quote!</p>

					<p>Leave your contact information and we will be in touch <span class="orange">within 24h!</span></p>

					<div class="info">
						<a href="mailto:sales@flearningstudio.com">
							<img src="<?= NOVUS_IMG . '/email.svg' ?>" alt="mail">
							sales@flearningstudio.com
						</a>

						<a href="tel:+84945591708">
							<img src="<?= NOVUS_IMG . '/phone.svg' ?>" alt="phone">
							(+84) 94 559 1708
						</a>

						<a>
							<img src="<?= NOVUS_IMG . '/location.svg' ?>" alt="location">
							Hanoi, Vietnam
						</a>
					</div>
				</div>

				<div class="col-6">
					<?= do_shortcode( '[contact-form-7 id="20" title="Contact"]' ) ?>
				</div>
			</div>
		</div>
	</section>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<h1 class="h2">F.Learning<br>Studio.</h1>
					<p>Tailor-made animation services</p>
				</div>
				
				<div class="col-6">
					<?php wp_nav_menu( ['menu' => 'footer'] ); ?>

					<div class="dflex jcsb">
						<div class="social">
							<a href="" target="_blank">
								<img src="<?= NOVUS_IMG . '/facebook.svg' ?>" alt="facebook">
							</a>

							<a href="" target="_blank">
								<img src="<?= NOVUS_IMG . '/linkedin.svg' ?>" alt="linkedin">
							</a>

							<a href="" target="_blank">
								<img src="<?= NOVUS_IMG . '/twitter.svg' ?>" alt="twitter">
							</a>
						</div>

						<div class="menu-term dflex aic jcsb flex-wrap">
							<p class="site-info">&copy; F.Learning <?= date( 'Y' ) ?></p>

							<a href="#">Terms</a>
							<a href="#">Privacy</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</main>

<?php wp_footer(); ?>

<section class="blob-wrapper">
	<div class="blob blob-1"></div>
	<div class="blob blob-2"></div>
	<div class="blob blob-3"></div>
	<div class="blob blob-4"></div>
	<div class="blob blob-5"></div>
	<div class="blob blob-6"></div>
	<div class="blob blob-7"></div>
	<div class="blob blob-8"></div>
	<div class="blob blob-9"></div>
	<div class="blob blob-10"></div>
	<div class="blob blob-11"></div>
	<div class="blob blob-12"></div>
	<div class="blob blob-13"></div>
	<div class="blob blob-14"></div>
</section>

<div class="popup"></div>
<div class="popup-bg popup-close"></div>

</body>
</html>
