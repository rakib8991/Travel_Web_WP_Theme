<?php get_header();?>

<section class="home-tours">
    <h2 class="page_title"><span>Up Coming Tours</span></h2>
    <ul class="upcoming-tours grid-wrap">
        <?php
        $args = array(
            'post_type'     => 'my_tours',
            'posts_per_page'    => 3,
            'orderby'       => 'menu_order',
            'order'         => 'ASC'
        );
        $upcoming_tours = new Wp_Query($args); while($upcoming_tours->have_posts()) : $upcoming_tours->the_post();
        ?>
        <li class="grid1-3">
            <div class="tour-cntent">
                <?php the_post_thumbnail(); ?>
                <a class="more-info" href="<?php the_permalink(); ?>">more info</a>
                <div class="title-date">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php
                    
                    $format = 'd F, Y';
                    // tours starting date
                    $starting_date = strtotime(get_field('tours_starting_date'));
                    $starting_date = date_i18n( $format, $starting_date );
                    // tours endign date
                    $ending_date = strtotime(get_field('tours_ending _date'));
                    $ending_date = date_i18n( $format, $ending_date );?>

                    <p class="date"><?php echo $starting_date .' - '. $ending_date; ?></p>
                </div>
            </div>
        </li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
</section>
<div class="travle-tips-testimonials grid-wrap">

        <section class="travle-tips grid2-3">
            <h2 class="page_title"><span>Tour Tips From Our Blog</span></h2>
            <ul>
                <?php 
                $args = array(
                    'posts_per_page'    => 2,
                    'order'             => "ASC"
                );
                $travle_tips = new Wp_Query($args); while($travle_tips->have_posts()) : $travle_tips->the_post();
                ?>
                    <li class="grid-wrap">
                        <div class="post-wrap">
                            <div class="post_img grid1-3">
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <div class="post_content grid2-3">
                                <p><?php the_excerpt('20'); ?></p>
                                <a class="view-more" href="<?php the_permalink(); ?>">View more..</a>
                            </div>
                        </div>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </section>
        <section class="testimonials-home grid1-3">
            <h2 class="page_title"><span>testimonials</span></h2>
            <ul>
                <?php 
                $args = array(
                    'post_type'     => 'tb_testimonial',
                    'posts_per_page'    => 2,
                    'order'         => 'ASC',
                    'orderby'       => 'title'
                );
                $test_home = new Wp_Query($args); while($test_home->have_posts()) : $test_home->the_post();
                ?>
                <li>
                    <div class="test-home">
                        <p><?php the_content(); ?></p>
                        <p class="test_name"><?php the_field('testimonials_name') ?></p>
                        <p class="test_location"><?php the_field('testimonials_location') ?></p>
                    </div>
                </li>

                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </section>

</div>

<?php get_footer(); ?>