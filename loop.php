<?php 
	$i = 0;
if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="arcive_single_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="gird-wrap">
			<?php if($i == 0){?>
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
					<div class="arcive_thumbnail">
						<a class="arcive_post_image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( 'blog_post_image_size' ); // Declare pixel size you need inside the array. ?>
						</a>
					</div>
				<?php endif; ?>
				<!-- /post thumbnail -->	
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
					</div>
				</div>
				<div class="grid2-3">
					<div class="post_arcive_content">
						<!-- post title -->
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h3>
						<!-- /post title -->
						<?php the_excerpt(); // post little content ?>
					</div>
				</div>
				<?php edit_post_link(); ?>

			<?php }else{ ?>

				<div class="grid1-3">
					<div class="post_arcive_details">
						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
							<div class="arcive_thumbnail">
								<a class="arcive_post_image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail( 'blog_post_image_size' ); // Declare pixel size you need inside the array. ?>
								</a>
							</div>
						<?php endif; ?>
						<!-- /post thumbnail -->	
					</div>
				</div>
				<div class="grid2-3">
					<div class="post_arcive_content">
						<!-- post title -->
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h3>
						<!-- /post title -->
						<?php the_excerpt(); // post little content ?>
					</div>
				</div>
				<?php edit_post_link(); ?>


			<?php } ?>
		</div>
	</article>
	<!-- /article -->
	<?php $i++; ?>
<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
