<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name='robots' content='noindex,follow' />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="google-site-verification" content="Ip3v7tAIvr-zM6SrN7IQusvQg-TgeBJmeskZRntv1NI" />

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.min.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu_cornerbox_nested.css">
		

		<?php wp_head(); ?>

        <!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51156134-5', 'auto');
		  ga('send', 'pageview');

		</script>

		<script type='text/javascript'>
		(function() {
		var useSSL = 'https:' == document.location.protocol;
		var src = (useSSL ? 'https:' : 'http:') +
		'//www.googletagservices.com/tag/js/gpt.js';
		document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
		})();
		</script>

		<script type='text/javascript'>
		googletag.defineOutOfPageSlot('/92947493/intersitial_SOYCRACK_ALL', 'div-gpt-ad-1424965564276-0-oop').addService(googletag.pubads());
		googletag.pubads().enableSyncRendering();
		googletag.enableServices();
		</script>
		<script>
			jQuery(document).ready(function($){
				$(window).load(function(){
					$('#div-gpt-ad-1424965564276-0-oop').fadeIn();
				});
			});
		</script>
	</head>

	<body <?php body_class(); ?>>
		
		<?php include (TEMPLATEPATH . '/svg_icons.php'); ?>
		
		<div style="position:fixed;bottom:0;margin:0 auto;left:0;right:0;z-index:999;width:320px;">
			<script src="//www.googletagservices.com/tag/js/gpt.js">
			googletag.pubads().definePassback('/92947493/320x50_SOYCRACK', [320, 50]).display();
			</script>
		</div>

		<!-- intersitial_SOYCRACK_ALL out-of-page -->
		<div id='div-gpt-ad-1424965564276-0-oop' style="display:none;">
		<script type='text/javascript'>
		googletag.display('div-gpt-ad-1424965564276-0-oop');
		</script>
		</div>

		<header class="scroll-view nav-down">
			
			<main class="tools">

				<div class="btn-menu"><i class="fa fa-navicon"></i></div>

			</main>

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<svg viewBox="0 0 227.167 46.645">
						<use xlink:href="#svg_logosc2" />
					</svg>
				</a>
			</div>
			<!-- /logo -->

			<nav class="nav" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>

			<ul class="social">
				<li><a href="http://www.facebook.com/soycrackcl" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="http://www.twitter.com/soycrackcl" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="http://www.instagram.com/soycrackcl" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li class="btn_search"><i class="fa fa-search"></i></li>
			</ul>

		</header>

		<div class="menu-wrap" data-level="1">
			<div class="menu-lateral">
				<header class="menu-side">
					<a href="<?php echo home_url(); ?>">
						<svg viewBox="0 0 227.167 46.645" class="logo-menu-side">
							<use xlink:href="#svg_logosc2" />
						</svg>
					</a>
					<div id="close-button">
						<svg viewBox="0 0 24.707 24.707">
							<use xlink:href="#svg_icon_cerrar" />
						</svg>
					</div>
				</header>
				<nav>
					
					<ul>
						
						<span class="menu-mobile-lateral">
							<?php
								wp_list_pages('title_li&exclude=9,11'); 
							?>
						</span>

						<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( '¿Que es SoyCrack?' ) ) ); ?>">¿Que es Soy Crack?</a></li>
						<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contacto' ) ) ); ?>">Contacto</a></li>

					</ul>

				</nav>
				<footer class="bottom-side">
					<ul>
						<li><a href="http://www.facebook.com/soycrackcl" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/soycrackcl" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://www.instagram.com/soycrackcl" target="_blank"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</footer>
			</div>
		</div>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
					
					<main class="tools">

						<div class="btn-menu" id="open-button"><i class="fa fa-navicon"></i></div>
						
						<a href="<?php echo home_url(); ?>">
							<svg viewBox="0 0 227.167 46.645" class="logo_mobile-norm">
								<use xlink:href="#svg_logosc2" />
							</svg>
						</a>

						<ul class="social">
							<li><a href="http://www.facebook.com/soycrackcl" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://www.twitter.com/soycrackcl" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://www.instagram.com/soycrackcl" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li class="btn_search"><i class="fa fa-search"></i></li>
						</ul>

					</main>

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<svg viewBox="0 0 142.391 171.523" class="logo-nomr">
								<use xlink:href="#svg_logosc" />
							</svg>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
			</header>
			<!-- /header -->
