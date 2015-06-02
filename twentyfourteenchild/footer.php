<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">

				<!-- Disabled wordpress footer text -->
					<!-- <?php do_action( 'twentyfourteen_credits' ); ?>
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a> -->

				<!-- Custom footer text -->
					<p>&copy <?php echo date('Y'); ?> <a href="mailto:unesa@une.edu.au">UNESA</a> | Website Design by
						<a href="mailto:stu.j.horsfield@gmail.com">Stu Horsfield</a>
					</p>


			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
