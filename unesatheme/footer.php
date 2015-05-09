<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
</div><!-- #page -->
<footer id="colophon" role="contentinfo">

    <div class="footer-inner">
    	<div class="footer-top"><div class="footer_corner"><a href="#page">Top</a></div></div>
        <div class="footerwidget">
        <div class="firstwidget"><?php dynamic_sidebar('firstfooter'); ?></div>

            <div class="secondwidget"><?php dynamic_sidebar('secondfooter'); ?></div>
            
            <div class="thirdwidget"><?php dynamic_sidebar('thirdfooter'); ?></div>
        </div>
       <div class="clear"></div> 
    </div>	
        
       <!-- <div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div>--><!-- .site-info -->
  <div class="footer-bottom">
  	<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" height="50" width="53"  /> <span>Copyright 2013 Unesa.org.au - Website By <a href="http://curvewebstudio.com.au/" target="_blank">Curvewebstudio.com.au</a></span>
  </div>      
</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			|| location.hostname == this.hostname) {

			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
			   if (target.length) {
				 jQuery('html,body').animate({
					 scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});
</script>
</body>
</html>