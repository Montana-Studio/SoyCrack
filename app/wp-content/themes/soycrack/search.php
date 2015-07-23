<?php get_header(); ?>

<main role="main" class="all-content" style="padding-top:60px;border:none;">
	
	<section class="wrapper-index">

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('postes'); ?>>
					<main class="post-content">
						<div class="audiovisual">
							<?php echo get_the_content('',FALSE,''); ?>
						</div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

					<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
					<?php endif; ?>

							<small class="cat_date"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'destacados' and $category->cat_name != 'galeria') {echo $category->name ;}} ?> / <?php the_date(); ?></small>

							<h2><?php the_title(); ?></h2>

							<small class="view_commen"><?php echo getPostViews(get_the_ID()); ?> / <?php comments_number(); ?></small>

						</a>
						<ul class="share_btns">
							<li>
								<a href="#" data-type="facebook" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="SoyCrack" class="prettySocial">
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
		<!-- /section -->

		<?php get_sidebar(); ?>
		
	</main>



<?php get_footer(); ?>
