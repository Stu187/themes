<?php
/**
 * Template Name: Clubs and Societies
 *
 */


get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						//comments_template();
					}
				endwhile;
			?>

			<div class="csgridcontainer">
				<a href="#"> <div class="csgrid">
					<p id="grid1"></p><h2 class="two-line">UNE Women's Society</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid2"></p><h2 class="three-line">UNE Law Student's Society</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid3"></p><h2 class="four-line">Gender + Sexuality Minorities Alliance</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid4"></p><h2 class="one-line">Townies</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid5"></p><h2 class="two-line">AIA Buddy Program</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid6"></p><h2 class="three-line">UNE Mature Student's Association</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid7"></p><h2 class="one-line">Mums @ UNE</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid8"></p><h2 class="one-line">Enactus</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid9"></p><h2 class="two-line">UNE Farming Futures</h2>
				</div> </a>
				<a href="#"> <div class="csgrid">
					<p id="grid10"></p><h2 class="four-line">UNE International Student's Association</h2>
				</div> </a>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
