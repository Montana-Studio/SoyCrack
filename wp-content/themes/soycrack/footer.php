			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<div class="search-content oculto">
			<div class="close">
				<svg viewBox="0 0 24.707 24.707">
					<use xlink:href="#svg_icon_cerrar2" />
				</svg>
			</div>
			
			<?php get_template_part('searchform'); ?>

		</div>
		
		<script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="<?php echo get_template_directory_uri(); ?>/js/whatsapp-button.js";h.appendChild(s);}</script>
		
		<?php wp_footer(); ?>
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/swipe.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettySocial.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main2.js"></script>
<script>
jQuery(document).ready(function($){
function comparisonImageResizer() {
var $width=$(".post-body").width();
var $curHeight=window.comparisonImageHeight;//$("#comparison").height();
if ($width<738)
{
$("#comparison").css({"width":$width+"px","height":$width/738*$curHeight+"px"});
}
}

if($("#comparison").length != 0) {
moveDivisor();
window.comparisonImageHeight=$("#comparison").height();
comparisonImageResizer();
}

$(window).resize(function() {
if($("#comparison").length != 0) {
comparisonImageResizer();
}
});
});
</script>

		<!-- intersitial_SOYCRACK_ALL out-of-page -->
		<div id='div-gpt-ad-1424965564276-0-oop'>
		<script type='text/javascript'>
		googletag.display('div-gpt-ad-1424965564276-0-oop');
		</script>
		</div>
	</body>
</html>
