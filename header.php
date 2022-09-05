<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" rel="stylesheet" />


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">
				<!-- header canvas  -->
				<div class="headercanvas">
					<!-- wrapper -->
					<div class="wrapper">

								<!-- logo -->
								<div class="logo">
									<a href="<?php echo esc_url( home_url() ); ?>">
										<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="logo-img">
									</a>
								</div>
								<!-- /logo -->

								<!-- nav -->
								<nav class="nav" role="navigation">
									<?php html5blank_nav(); ?>
								</nav>
								<!-- /nav -->
					</div>
					<!-- /wrapper -->
				</div><!-- /header canvas  -->

				<!-- The Post Thumbnails -->
				<?php
				if(is_home() && get_option('page_for_posts')) :
					$IMG_attc_src = wp_get_attachment_image_src( get_post_thumbnail_id(get_option('page_for_posts')), 'full' );
					?>
					<div class="featureadimage" style="background-image: url(<?php echo $IMG_attc_src[0]; ?>);">
					</div><!-- /The Post Thumbnails -->
					<?php elseif(is_front_page()) : ?>

						<section class="slider">					
							<?php do_action('slider'); ?>
						</section>
						
					<?php else:
					$IMG_attc_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
					?>
					<div class="featureadimage" style="background-image: url(<?php echo $IMG_attc_src[0]; ?>);">
					</div><!-- /The Post Thumbnails --><?php
				endif;
				?>
			</header>
			<!-- /header -->

			
			
		<!-- wrapper -->
		<div class="wrapper">

