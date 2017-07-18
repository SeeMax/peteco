<!doctype html>
<html <?php language_attributes(); ?> class="no-js loader-class">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        
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
		<section class="header-top">
			<div class="content">
				<div class="personal-info">
					<span class="your-name"><?php the_field("your_name", "options"); ?></span>
					<span class="your-titles"><?php the_field("your_titles", "options"); ?></span>			
				</div>
				<nav class="main-nav mainNav" role="navigation">
					<?php main_theme_nav(); ?>
				</nav>
			</div>
		</section>	
		<header class="header" role="banner">
			<div class="content">
				<div class="header-logo">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" >
					</a>
				</div>
			</div>
		</header>

