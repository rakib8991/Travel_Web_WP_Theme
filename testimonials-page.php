<?php
/*
* Template Name: Testimonials Page
*/

get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="testimonial">

		<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h2 class="page_title"><span><?php the_title() ?></span></h2>

				<div class="testimonial_page_content">
                    <?php the_content(); ?>
                </div>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

            <!-- Testimonials  -->
            <?php
            
            $args = array(
                'post_type'     => 'tb_testimonial',
                'posts_per_page'    => -1,
                'orderby'       => 'title',
                'order'         => 'ASC'
            ); ?>
            <ul>

            
            <?php
            $testimonial = new WP_Query($args); while( $testimonial->have_posts()) : $testimonial->the_post();
            ?>

            <li>
                <h2><?php the_title(); ?></h2>
                <div class="testimonial_content">
                    <?php the_content(); ?>
                    <div class="testimonial_user_info">
                        <p><?php the_field('testimonials_name'); ?></p>
                        <p><?php the_field('testimonials_location'); ?></p>
                    </div>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>
            
            </ul><!-- /Testimonials  -->
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
