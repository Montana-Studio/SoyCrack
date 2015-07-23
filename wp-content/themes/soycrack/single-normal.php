<?php /*
* WP Post Template:  Normal Template
*/ ?>

<?php get_header(); ?>

<?php setPostViews(get_the_ID()); ?>
	<main role="main"  class="wrapper-inner">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('wrapper-normal-post'); ?>>

			<div class="imagen-single">

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>
				<!-- /post thumbnail -->
				<small class="meta-inner-post">Autor: <?php the_author_posts_link(); ?> / <?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?> / <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></small>
			</div>
			
			<div class="content">
				<h2><?php the_title(); ?></h2>
				
				<small><?php the_time('j · m · Y'); ?> / <?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?></small>
				
				<div class="parrafo">
					<?php the_content(); // Dynamic Content ?>
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
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
				</div>

				<small class="meta-bottom-post"><?php echo getPostViews(get_the_ID()); ?> / <?php comments_number('No hay comentarios','1 Comentarios', '% Comentarios'); ?></small>
			</div>


			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php //  comments_template(); ?>

		</article>
		<!-- /article -->
			<?php comments_template(); ?>
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

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
					<ul class="share_btns">
						<li>
							<a href="#" data-type="facebook" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" class="prettySocial">
								<svg viewBox="0 0 32 30">
									<use xlink:href="#svg_btnfb-min" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#" data-type="twitter" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" class="prettySocial">
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

<?php get_footer(); ?>
