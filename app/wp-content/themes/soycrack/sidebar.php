<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<div class="sidebar-newsletter-sc">
		<h2>Newsletter</h2>
		<div class="form-news">
			<?php echo do_shortcode('[newsletter_signup_form id=0]' ); ?>
		</div>
	</div>

	<?php // get_template_part('searchform'); ?>
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
