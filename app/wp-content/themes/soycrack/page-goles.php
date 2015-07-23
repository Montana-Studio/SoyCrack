<?php /*Template name: Goles */ ?>

<?php get_header(); ?>

<!--CONTENT WRAP-->
<main role="main" class="all-content" style="padding-top:60px;border:none;">
	
	<section class="wrapper-index">
			
			<?php 

				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts('category_name=goles&posts_per_page=3&paged=' . $paged);
			
			?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

							<small class="cat_date"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?> / <?php the_date(); ?></small>

							<h2><?php the_title(); ?></h2>

							<small class="view_commen"><?php echo getPostViews(get_the_ID()); ?> / <?php comments_number(); ?></small>

						</a>
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
						</ul>
					</main>
				</article>

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