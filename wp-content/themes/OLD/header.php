<!doctype html>
<html <?php language_attributes(); ?> class="no-js loader-class">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title('-', true, 'right'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">
     <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<!-- THE PRELOADER -->
		<div id="preloader">
			<img src="<?php echo get_template_directory_uri(); ?>/img/loader.svg" >
		</div>
			
		<div class="menu-toggle menuToggle">
			<span class="hamTop"></span>
			<span class="hamMid"></span>
			<span class="hamBot"></span>
		</div>
		
		<header class="header" role="banner">
			<div class="content">
				<nav class="main-nav mainNav" role="navigation">
					<?php main_theme_nav(); ?>
				</nav>
			</div>
		</header>
		<div class="header-logo">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" >
			</a>
		</div>
		<div class="header-background headerBackground"></div>
