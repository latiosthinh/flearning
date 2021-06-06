<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package novus
 */

get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
?>

<?= novus_breadcrumbs(); ?>

<div class="container page-content">
	<?php the_content(); ?>
</div>

<?php endwhile; ?>
<?php
get_footer();
