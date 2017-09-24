<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baastel
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php
		get_template_part( 'template-parts/content', 'contact-us' );
		?>

		<div class="footer-info">
			Designed by 8omm
			| 
			Copyright BAASTEL 2017
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
