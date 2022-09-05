<?php 
/*
* Template Name: Tours Page
*/
get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>
            <div class="grid-wrap">
                <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

                    <h2 class="page_title"><span><?php the_title(); ?></span></h2>
                    <?php the_content(); ?>

                    <!-- article -->
                    <?php $args = array(
                        'post_type'     => 'my_tours',
                        'posts_per_page'    => -1,
                        'orderby'       => 'title',
                        'order'         => 'ASC'
                    ); ?>

                    <?php $tours = new Wp_Query($args); while($tours->have_posts()) : $tours->the_post(); ?>
                    
                    <div class="grid1-2">
                        <ul class="tours-arcive">
                            <li>
                                <div class="featured-tour">
                                    <?php the_post_thumbnail(); ?>
                                    <a class="more-info" href="<?php the_permalink();?>">more info</a>
                                </div>
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <?php
                                
                                $format = 'd F, Y';
                                // tours starting date
                                $starting_date = strtotime(get_field('tours_starting_date'));
                                $starting_date = date_i18n( $format, $starting_date );
                                // tours endign date
                                $ending_date = strtotime(get_field('tours_ending _date'));
                                $ending_date = date_i18n( $format, $ending_date );?>

                                    <!-- price and date  -->
                                <div class="date-price">
                                        <p class="date"><?php echo $starting_date .' - '. $ending_date; ?></p>
                                        <p class="price"><?php the_field('price'); ?></p>
                                </div><!-- /price and date  -->

                                <div class="sort_description">
                                        <?php the_field('small_description'); ?>
                                </div>

                            </li>
                        </ul>
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>

                    <!-- /article -->

                <?php endwhile; ?>

                <?php else : ?>

                    <!-- article -->
                    <article>

                        <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>
                    <!-- /article -->

                <?php endif; ?>
            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
