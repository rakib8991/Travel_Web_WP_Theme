<?php 
/*
* Template Name: About Us
*/
get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>
		<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<h2 class="page_title"><?php the_title(); ?></h2>
			<!-- grid wrap  -->
			<div class="grid-wrap">
				<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>
					<?php the_content(); ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->

				<!-- about us images  -->
				<div class="about-us-images grid1-3">
					<?php if(get_field('image_1')) :?>
						<div class="photo">
							<?php $image_1 = get_field('image_1'); ?>
							<?php echo wp_get_attachment_image( $image_1, 'medium', false, array('class'=>'polored') ); ?>
						</div>
					<?php endif; ?>

					<?php if(get_field('image_2')) : ?>
						<div class="photo">
							<?php $image_2 = get_field('image_2'); ?>
							<?php echo wp_get_attachment_image($image_2,'medium',false,array('class'=>'polored')); ?>
						</div>
					<?php endif; ?>

				</div>
			</div><!-- /grid wrap  -->
		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
