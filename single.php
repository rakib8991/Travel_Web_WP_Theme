<?php get_header(); ?>
	
	<main role="main" aria-label="Content">
	<!-- section -->
	<section>

	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="grid-wrap">
				<div class="grid1-3">
				<div class="post_arcive_details">
						<!-- post details -->
						<p class="date">
							<strong><?php esc_html_e( 'Published Date:', 'html5blank' ); ?></strong> 
							<time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
								<?php the_date(); ?> <?php the_time(); ?>
							</time>
						</p>
						<p class="author"><strong><?php esc_html_e( 'Published by:', 'html5blank' ); ?></strong> <?php the_author_posts_link(); ?></p>
						<p><strong><?php _e( 'Category: ', 'themename' ); ?></strong><?php the_category(', '); ?> </p>
						<!-- /post details -->
						<p class="shear">shear:</p>
						<!-- Go to www.addthis.com/dashboard to customize your tools -->
						<div class="addthis_inline_share_toolbox_kwux"></div>
						
					</div>
				</div>
				<div class="grid2-3">
					<!-- post title -->
					<h2 class="page_title"><span><?php the_title(); ?></span></h2>
					<!-- /post title -->
					<?php the_content(); // Dynamic Content. ?>
					<?php comments_template(); ?>
				</div>
			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else : ?>

		<!-- article -->
		<article>

			<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
