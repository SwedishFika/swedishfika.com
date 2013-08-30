<!doctype html>  
 <html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="utf-8">
		<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '-', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " - $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!--[if lt IE 9]>
			<?php wp_print_scripts(array('swedishfika-html5shiv')); ?>
		<![endif]-->
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	<body <?php body_class(); ?>>
		<div class="coffee">
			<header class="higher-than-the-sky" role="banner">
					<?php if ( $site_description && ( is_home() || is_front_page() ) ){ ?>
						<h1><a href="<?php echo home_url(); ?>" class="go-home" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/swedish-fika-logo.png" alt="<?php bloginfo('name'); ?>" /></a></h1>
					<?php }else{ ?>
						<a href="<?php echo home_url(); ?>" class="go-home" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/swedish-fika-logo.png" alt="<?php bloginfo('name'); ?>" /></a>
					<?php } ?>
					<nav role="navigation">
						<?php swedishfika_main_nav(); ?>
					</nav>
			</header> <!-- end header -->
