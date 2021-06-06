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

						<div class="menu-term dflex aic jcsb">
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

</body>
</html>
