<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
        
        	<div class="fservices">
            	<div class="fservices-box">
                	<div class="fservices-box-left">
                    	<img src="http://localhost/unesa/wp-content/uploads/2013/10/first-icon1.png"/>
                    </div>
                    <div class="fservices-box-right">
                    	<h2>Studying in Armidale <span>Multifunction tiled fantastic expirience</span></h2>
                        <div class="pcon">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae arcu in tellus congue laoreet. Morbi quis leo urna, at consequat leo.</div>
                        <a class="rmopre" href="#">read more</a>
                    </div>
                </div>
                
                <div class="fservices-box" style="float:right;">
                	<div class="fservices-box-left">
                    	<img src="http://localhost/unesa/wp-content/uploads/2013/10/sec-icon1.png"/>
                    </div>
                    <div class="fservices-box-right">
                    	<h2>Working in Armidale<span>Designed with care to pixel Perfection</span></h2>
                        <div class="pcon">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae arcu in tellus congue laoreet. Morbi quis leo urna, at consequat leo.</div>
                        <a class="rmopre" href="#">read more</a>
                        
                    </div>
                </div>
                
                <div class="fservices-box">
                	<div class="fservices-box-left">
                    	<img src="http://localhost/unesa/wp-content/uploads/2013/10/third-icon1.png"/>
                    </div>
                    <div class="fservices-box-right">
                    	<h2>Living in Armidale <span>Dedicated support for your question</span></h2>
                        <div class="pcon">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae arcu in tellus congue laoreet. Morbi quis leo urna, at consequat leo.</div>
                        <a class="rmopre" href="#">read more</a>
                    </div>
                </div>
                
                <div class="fservices-box" style="float:right;">
                	<div class="fservices-box-left">
                    	<img src="http://localhost/unesa/wp-content/uploads/2013/10/fourth-icon1.png"/>
                    </div>
                    <div class="fservices-box-right">
                    	<h2>Support<br/><span>Design to cover range of options</span></h2>
                        <div class="pcon">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae arcu in tellus congue laoreet. Morbi quis leo urna, at consequat leo.</div>
                        <a class="rmopre" href="#">read more</a>
                    </div>
                </div>
                
                
                <div class="ginvolve">
                	<h2>Get Involved</h2>
                    
                    <div class="ginvolve-grp" style="margin-left:0px;">
                    	<h2>The Nucleus </h2>
                    	<div class="grp-pic">
                        	<img src="<?php echo get_template_directory_uri(); ?>/images/nucleus-01.png"/>
                            <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-pointer.png"/></a></span>
                        </div>
                    	
                    </div>
                    
                    <div class="ginvolve-grp">
                    	<h2>The Stro </h2>
                    	<div class="grp-pic">
                        	<img src="<?php echo get_template_directory_uri(); ?>/images/stro-01.png"/>
                            <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-pointer.png"/></a></span>
                        </div>
                    	
                    </div>
                    
                    <div class="ginvolve-grp">
                    	<h2>Tune FM</h2>
                    	<div class="grp-pic">
                        	<img src="<?php echo get_template_directory_uri(); ?>/images/tune-fm-01.png"/>
                            <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-pointer.png"/></a></span>
                        </div>
                    	
                    </div>
                    
                    
                </div>
                
                <!--<div class="fservices-box">
                	<div class="fservices-box-left">
                    	<img src="http://localhost/unesa/wp-content/uploads/2013/10/sec-icon.png"/>
                    </div>
                    <div class="fservices-box-right"></div>
                </div>
                
                <div class="fservices-box">
                	<div class="fservices-box-left">
                    	<img src="http://localhost/unesa/wp-content/uploads/2013/10/third-icon.png"/>
                    </div>
                    <div class="fservices-box-right"></div>
                </div>
                
                <div class="fservices-box">
                	<div class="fservices-box-left">
                    	<img src="http://localhost/unesa/wp-content/uploads/2013/10/fourth-icon.png"/>
                    </div>
                    <div class="fservices-box-right"></div>
                </div>-->
                
                
            </div>
        

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>