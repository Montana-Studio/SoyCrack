			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
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

	</body>
</html>
