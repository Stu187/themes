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
				<a href="https://www.facebook.com/groups/359740764124471/"> <div class="csgrid">
					<p id="grid1"></p><h2 class="two-line">UNE Women's Society</h2>
				</div> </a>
				<a href="http://unelss.org/"> <div class="csgrid">
					<p id="grid2"></p><h2 class="three-line">UNE Law <br>Student's <br>Society</h2>
				</div> </a>
				<a href="https://www.facebook.com/groups/gaygsma/"> <div class="csgrid">
					<p id="grid3"></p><h2 class="four-line">Gender + Sexuality Minorities <br>Alliance</h2>
				</div> </a>
				<a href="https://www.facebook.com/groups/52835898061"> <div class="csgrid">
					<p id="grid4"></p><h2 class="one-line">Townies</h2>
				</div> </a>
				<a href="https://www.facebook.com/AIABuddyProgram"> <div class="csgrid">
					<p id="grid5"></p><h2 class="two-line">AIA Buddy <br>Program</h2>
				</div> </a>
				<a href="https://www.facebook.com/pages/UNE-Mature-Students-Association-MSA/703008683058541"> <div class="csgrid">
					<p id="grid6"></p><h2 class="three-line">UNE Mature Student's Association</h2>
				</div> </a>
				<a href="https://www.facebook.com/mum.une.5"> <div class="csgrid">
					<p id="grid7"></p><h2 class="one-line">Mums @ UNE</h2>
				</div> </a>
				<a href="https://www.facebook.com/uneenactus"> <div class="csgrid">
					<p id="grid8"></p><h2 class="one-line">Enactus</h2>
				</div> </a>
				<a href="https://www.facebook.com/FarmingFutures"> <div class="csgrid">
					<p id="grid9"></p><h2 class="two-line">UNE Farming Futures</h2>
				</div> </a>
				<a href="https://www.facebook.com/ISAofUNE" target="_blank"> <div class="csgrid">
					<p id="grid10"></p><h2 class="four-line">UNE International Student's Association</h2>
				</div> </a>
				<a href="https://www.facebook.com/groups/UNEarchaeologysociety/" target="_blank"> <div class="csgrid">
					<p id="grid11"></p><h2 class="two-line">UNE Archaeology Society</h2>
				</div> </a>

				<!-- Call for missing clubs -->
				<p id="callout">
					If you run a Club or Society and don't see it listed above,
					<a href="mailto:unesawebmaster@gmail.com">let us know</a>!
				</p>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
