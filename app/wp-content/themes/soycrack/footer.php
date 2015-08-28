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

		<div class="bg-newsletter"></div>
		<div class="newsletter-new-suscribe"> 
			<div class="content-popups animation-pop">

				<?php $my_query = new WP_Query( '&posts_per_page=1' ); ?>

				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="close-button">
							<i class="fa fa-times"></i>
						</div>
						<h3><?php the_field('encabezado_popups'); ?></h3>
						<h2><?php the_title(); ?></h2> 
						<div class="body-popups">

							<div class="box-popups box-arrow">
								<svg viewBox="0 0 322.094 165.000">
									<g id="content_arrow_pop">
										<polygon opacity="0.8" fill="#18BB9B" points="0,3 0,170.974 265.531,170.974 315.141,80.75 315.506,80.75 315.323,80.27 
											315.506,79.789 315.141,79.789 265.531,3.457 "/>
									</g>
								</svg>
								<div class="box-text-arrow">
									<h4><?php the_field('titulo_explicativo'); ?></h4>
									<h5><?php the_field('texto_explicativo'); ?></h5>
									<div class="social-newsl">
										<div class="follow-text"><?php the_field('txt_social_intro'); ?></div>
										<ul>
											<li><a href="https://www.facebook.com/soycrackcl"><i class="fa fa-facebook"></i></a></li>
											<li><a href="https://twitter.com/soycrackcl"><i class="fa fa-twitter"></i></a></li>
											<li><a href="https://instagram.com/soycrackcl"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="box-popups box-form">
								<div><?php echo do_shortcode('[newsletter_signup_form id=0]'); ?></div>
							</div>

						</div>

					</article>
					
				<?php endwhile; ?>
			</div>
			<div class="newsletter-footer">
				<div class="content-poweredby">
					<div class="powered-txt">Powered By</div>
					<div class="logo-powered">
						<a href="http://mediatrends.cl/">
							<svg viewBox="0 0 792 656.856">
								<use xlink:href="#mediatrends-logo" />
							</svg>
						</a>
					</div>
				</div>
			</div>
			
		</div>
		
		<script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="<?php echo get_template_directory_uri(); ?>/js/whatsapp-button.js";h.appendChild(s);}</script>
		
		<?php wp_footer(); ?>
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/swipe.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettySocial.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main2.js"></script>

	</body>
</html>
