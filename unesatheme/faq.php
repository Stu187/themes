<?php
/*Template name: FAQ Page Template
*/
?>
<?php get_header();?>
<script type="text/javascript">
/* Accordion
================================================== */
jQuery(document).ready(function(){
	
	jQuery("ul.pa-accordion li").each(function(){
		jQuery(this).children(".accordion-content").css('height', function() { 
			return jQuery(this).height(); 
		});
		
		if (jQuery(this).index() > 0) {
			jQuery(this).children(".accordion-content").css('display','none');
		} else {
			jQuery(this).addClass('active').find(".accordion-head-sign").html("&minus;");
			jQuery(this).siblings("li").find(".accordion-head-sign").html("&#43;");
		}
		
		jQuery(this).children(".accordion-head").bind("click", function() {
			jQuery(this).parent().addClass(function() {
				if (jQuery(this).hasClass("active")) return "";
				return "active";
			});
			jQuery(this).siblings(".accordion-content").slideDown();
			jQuery(this).parent().find(".accordion-head-sign").html("&minus;");
			jQuery(this).parent().siblings("li").children(".accordion-content").slideUp();
			jQuery(this).parent().siblings("li").removeClass("active");
			jQuery(this).parent().siblings("li").find(".accordion-head-sign").html("&#43;");
		});
	});
});
	

/* Toggle
================================================== */
jQuery(document).ready(function(){
		
	jQuery("ul.pa-toggle li").each(function(){
		jQuery(this).children(".toggle-content").css('height', function() { 
			return jQuery(this).height(); 
		});
		
		jQuery(this).children(".toggle-content").css('display','none');
		jQuery(this).find(".toggle-head-sign").html("&#43;");
		
		jQuery(this).children(".toggle-head").bind("click", function() {
		
			if (jQuery(this).parent().hasClass("active")) jQuery(this).parent().removeClass("active");
			else jQuery(this).parent().addClass("active");
			
			jQuery(this).find(".toggle-head-sign").html(function() {
				if (jQuery(this).parent().parent().hasClass("active")) return "&minus;";
				else return "&#43;";
			});
			jQuery(this).siblings(".toggle-content").slideToggle();
		});
	});
	
	jQuery("ul.pa-toggle").find(".toggle-content.active").siblings(".toggle-head").trigger('click');
});
</script>
<div class="faq-page">
<?php while ( have_posts()) : the_post(); ?>
	<div class="title"><?php the_title();?></div>
	<div class="content"><?php the_content();?></div>
<?php endwhile;?>
</div>
<?php get_footer();?>