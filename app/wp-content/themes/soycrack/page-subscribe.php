<?php /*Template name: exito-suscripcion  */ ?>
<?php get_header(); ?>

<!-- CONFIRMACION EXITOSA -->

<div class="content-sc-news">
	<div class="image-contet-sc-nw" style="background:url('<?php echo get_template_directory_uri(); ?>/img/bg-pages-newsletter.jpg?>');">
		<div class="logotipe-port">
			<!-- logo -->
				<div class="logo"> 
					<a href="<?php echo home_url(); ?>">
						<svg viewBox="0 0 142.391 150" class="logo-nomr">
							<use xlink:href="#svg_logosc-news" />
						</svg>
					</a>
				</div>
				<div class="newsletter-title">Newsletter</div>
			<!-- /logo -->
		</div>

	</div>
	<div class="content-news-txt">
		<h1>SUSCRIPCIÓN REALIZADA CON EXITO</h1>
		<h2>pronto recibiras todas las noticias de soy crack en tu correo</h2>
	</div>

</div>


<!--DESTACADO CONTENT-->
<ul class="content-destacado">
	
	<?php $query = new WP_Query('posts_per_page=2&category_name=destacados'); ?>

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


		<li id="post-<?php the_ID(); ?>" <?php post_class('destacados'); ?>>
			<main class="post-content">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

					<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
					<?php endif; ?>

					<h2>
						<?php if (strlen($post->post_title) > 32) {
							echo substr(the_title($before = '', $after = '', FALSE), 0, 20) . '...'; } else {
							the_title();
						} ?>
					</h2>
					<small class="cat_date"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?> / <?php the_time('M, j'); ?></small>

				</a>
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<ul class="share_btns">
					<li>
						<a href="" data-type="facebook" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" data-media="<?php echo $feat_image;?>" class="prettySocial">
							<svg viewBox="0 0 32 30">
								<use xlink:href="#svg_btnfb-min" />
							</svg>
						</a>
					</li>
					<li>
						<a href="" data-type="twitter" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" class="prettySocial">
							<svg viewBox="0 0 32 30">
								<use xlink:href="#svg_btntw-min" />
							</svg>
						</a>
					</li>
				</ul>
			</main>
		</li>

	<?php endwhile;
	wp_reset_postdata();
	else: ?>
		<p>No hay post.</p>
	<?php endif; ?>

</ul>

<!--CONTENT WRAP-->
<main role="main" class="all-content">
	
	<section class="wrapper-index">

			<?php  $query = new WP_Query('posts_per_page=10&category_name=destacados'); ?>

			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php //if (have_posts()): while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('postes'); ?>>
					<main class="post-content">
						<div class="agua-logo">
							
							<svg viewBox="0 0 227.167 46.645" class="logo_mobile-norm">
								<use xlink:href="#svg_logosc2" />
							</svg>
							
						</div>
						<div class="audiovisual">
							<?php echo get_the_content('<div class="more-hide">',FALSE,'</div>'); ?>
						</div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

					<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
					<?php endif; ?>

							<small class="cat_date"><spam class="wrap-cat_name"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?></spam> / <?php the_time('M, j'); ?></small>

							<h2><?php the_title(); ?></h2>

							<small class="view_commen"><?php echo getPostViews(get_the_ID()); ?> / <?php comments_number(); ?></small>

						</a>
						<ul class="share_btns">
							<li>
								<a href="#" data-type="facebook" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" data-media="<?php echo $feat_image;?>" class="prettySocial">
									<svg viewBox="0 0 94 30">
										<use xlink:href="#svg_btnfb" />
									</svg>
								</a>
							</li>
							<li>
								<a href="#" data-type="twitter" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" class="prettySocial">
									<svg viewBox="0 0 94 30">
										<use xlink:href="#svg_btntw" />
									</svg>
								</a>
							</li>
							<li class="wtapp-btn">
								<a href="whatsapp://send" data-text="vía:soycrack.futbol - <?php the_title_attribute(); ?>" data-href="<?php the_permalink() ?>" class="wa_btn wa_btn_m" style="display:none">Compartir</a>
							</li>
						</ul>
					</main>
				</article>

			<?php /* endwhile;
			wp_reset_postdata();
			else: ?>
				<p>No hay post.</p>
			<?php endif; */?>
			
			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>
					<p>No hay post.</p>
				</article>
				<!-- /article -->

			<?php endif; ?>

			<?php get_template_part('pagination'); ?>

	</section>

	<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
