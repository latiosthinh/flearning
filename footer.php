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

	<?php
	if ( '1' == rwmb_meta( 'footer_form', null, get_queried_object_id() ) || is_archive() || is_home() ) {
		get_template_part( 'template-parts/footer-contact' );
	}
	?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<h1 class="h2">F.Learning<br>Studio</h1>
					<p>Tailor-made animation services</p>

					<div class="social">
						<a href="" target="_blank">
							<img width="40" height="40" src="<?= NOVUS_IMG . '/facebook.svg' ?>" alt="facebook">
						</a>

						<a href="" target="_blank">
							<img width="40" height="40" src="<?= NOVUS_IMG . '/linkedin.svg' ?>" alt="linkedin">
						</a>

						<a href="" target="_blank">
							<img width="40" height="40" src="<?= NOVUS_IMG . '/twitter.svg' ?>" alt="twitter">
						</a>
					</div>					
				</div>
				
				<div class="col-9">
					<?php wp_nav_menu( ['menu' => 'footer'] ); ?>

					<div class="menu-term dflex aic flex-wrap">
						<p class="site-info">&copy; F.Learning <?= date( 'Y' ) ?></p>
						<a href="#">Terms</a>
						<a href="#">Privacy</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

</main>

<?php wp_footer(); ?>

<section class="blob-wrapper"></section>

<div class="popup"></div>
<div class="popup-bg popup-close"></div>

</body>
</html>