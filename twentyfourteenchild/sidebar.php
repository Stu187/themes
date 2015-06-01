<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	<div class="unesa-sidebar"></div>
		<div class="unesa-sidebar-text"></div>
	<h4>Proudly Powering:</h4>
	<div class="nucleus-sidebar">
		<a target="_blank" href="http://www.nucleus.org.au"><div class="nucleus-logo"></div></a>
	</div>
	<div class="tune-sidebar">
		<a target="_blank" href="http://www.tunefm.net"><div class="tune-logo"></div></a>
	</div>
	<div class="uni4me-sidebar">
		<a target="_blank" href="http://www.uni4me.com.au"><div class="uni4me-logo"></div></a>
	</div>
</div>







	<!-- Disable Sidebar  -->
	<!-- <?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?> -->
</div><!-- #secondary -->
