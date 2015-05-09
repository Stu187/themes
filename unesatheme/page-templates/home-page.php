<?php
/**
 * Template Name: Home Page Template
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

get_header('home'); ?>

    <div id="primary" class="full-width">
        <div id="content" role="main">
 <div class="clear"></div>
        <div class="entry-content">
            <?php the_content()?>

        </div>
        <div class="clear"></div>
            <div class="fservices">
                <?php
				 
				 $loop = new WP_Query( array(
                    'category_name' => '',
                    'post_type' => 'home_post', /* edit this line */
                    'orderby' => 'date',
                    'showposts' => '4',
                    'order' => 'DESC' ) );
                ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="fservices-box">
                    <div class="fservices-box-left">
                        <?php
                        if(has_post_thumbnail())
                        {
                            $image_id = get_post_thumbnail_id();
                            $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
                            $url = $image_url['0'];
                            ?>
                            <a href="<?php the_field('page_link');//echo get_permalink(); ?>"><img src="<?php echo $url; ?>" /></a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="fservices-box-right">
                        <a href="<?php the_field('page_link');//echo get_permalink(); ?>">
                            <h2><?php the_title();?><br><span><?php the_field('sub-title'); ?></span></h2>
                        </a>
                        <div class="pcon"><?php the_content();?></div>
                        <a class="rmopre" href="<?php the_field('page_link');//echo get_permalink(); ?>">read more</a>
                    </div>
                </div>
                <?php
                
                endwhile;
				
				 ?>
            </div>

            <div class="fservices">
                <div class="ginvolve">
                        <h2>Get Involved</h2>

                    <?php
                    $loop = new WP_Query( array(
                        'category_name' => '',
                        'post_type' => 'fm', /* edit this line */
                        'orderby' => 'date',
                        'showposts' => '10',
                        'order' => 'DESC' ) );
                    ?>
                    <?php $j=1; while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="ginvolve-grp" <?php if($j==1)echo "style=''"?>>
                       <h2><?php the_title();?></h2>
                        <div class="grp-pic">
                            <?php
                            if(has_post_thumbnail())
                            {
                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id,'medium', true);
                                $url = $image_url['0'];
                                ?>
                                <img alt="" src="<?php echo $url; ?>" data-mce-src="<?php echo $url; ?>">
                            <?php
                            }
                            ?>
                            <span><a href="<?php the_field('page_link');//echo get_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-pointer.png"/></a></span>
                        </div>
                       
<?php the_field('sub-title'); ?>
                    </div>
                    <?php $j++;endwhile; ?>
                </div>
            </div>

        <div class="upcoming-events" style="overflow:hidden;margin-top:10px;margin-bottom:25px;">    
		<div style="display:inline;">
            <div  class="ginvolve" style="float:left;width:400px;padding:10px;font-family:vollkornregular;margin-left:35px;">
				<h2>Upcoming Events</h2>
                <div style="background:#f9f9f9">
                
					<?php
						$events_url=get_site_url().'/events/event';
						$events=eo_get_events(); //echo "<pre>";print_r($events);
						if($events){ ?>
                        <ul>
                        <?php
						
						foreach($events as $event ){
							$post_id =$event->ID;
							$event_url=get_permalink($post_id);
						?><li>
                    <div class="event-lists"> 
							<a href="<?php echo $event_url?>"><?php echo get_the_post_thumbnail($post_id,'thumbnail');?></a>
							<b>
								<a href="<?php echo $event_url?>">
									<?php echo $event->post_title;?>
								</a>
							</b>
							
							<?php
								echo '<p>'.$event->post_excerpt.'</p>';
								echo '<b>'.$event->StartDate.' - '.$event->StartTime.'</b>';
							?>
							
							<br>
							<a href="<?php echo $event_url?>" >Read More</a>
					</div></li>
                    
                   <?php 
				 
				   
				   }?>
                   </ul>
                   <?php } ?>
                <a class="rmopre" href="<?php echo $events_url?>">View All Events</a>
                <div class="clear"></div>
                </div>
               
            </div>
		</div>
		<div class="ginvolve" style="width:300px;padding:10px;font-family:vollkornregular;float:right;margin-right:70px;margin-bottom:40px;">
			<h2>Calendar</h2>
                <?php  echo do_shortcode('[eo_calendar]')//echo EM_Calendar::output(array('full'=>0, 'long_events'=>1));?>
        </div>
</div>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>