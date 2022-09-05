<?php get_header(); ?>

	<main role="main" aria-label="Content">
	<!-- section -->
	<section>

	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

        <!-- post title -->
        <h2 class="page_title"><span><?php the_title(); ?></span></h2>
        <!-- /post title -->

        <div class="grid-wrap">
            <!-- article -->
            <article class="grid2-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
                    <?php the_post_thumbnail(); // Fullsize image for the single post. ?>
                <?php endif; ?>
                <!-- /post thumbnail -->

                <!-- post details -->
                <?php
                $format = 'd F, Y';
                //starting selector
                $starting_date = strtotime(get_field('tours_starting_date'));
                $starting_date = date_i18n( $format, $starting_date );
                //ending date selector
                $ending_date = strtotime(get_field( 'tours_ending _date' ));
                $ending_date = date_i18n( $format, $ending_date );
                
                
                ?>
                <div class="post-details">
                    <p><strong>Starting and Endgin Date: </strong><?php echo $starting_date .' - '. $ending_date; ?></p>
                    <p><strong>Location for Departure: </strong><?php the_field('location'); ?></p>
                    <p><strong>Available Seats: </strong><?php the_field('avable_sets'); ?></p>
                    <p><strong>Price: </strong><?php the_field('price'); ?></p>
                </div>
                <!-- /post details -->

                <!-- tours content  -->
                <div class="tours-content">
                    <h2 class="page_title"><span>Travel Itinerary</span></h2>
                    <?php the_field('tour_description'); ?>
                </div><!-- /trous content  -->

            </article>
            <!-- /article -->
            <aside class="grid1-3 tour-gallery">  
                <h3>Gallery</h3>
                <div class="tour-gallery-content">
                    <?php the_content(); ?>
                </div>
            </aside>
        </div>

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
