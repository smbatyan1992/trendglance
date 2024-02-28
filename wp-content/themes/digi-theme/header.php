<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo wp_get_document_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- Generate favicon here http://www.favicon-generator.org/ -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header itemscope itemtype="http://schema.org/WPHeader">
	<div class="top-header">
		<div class="container">
			<nav itemscope itemtype="http://schema.org/SiteNavigationElement"><?php
				wp_nav_menu([
					'theme_location' => 'primary-menu',
					'menu_class' => 'main-menu',
					'container' => '',
				]); ?>
			</nav>
		</div>
	</div>
	<div class="header-second">
		<div itemscope itemtype="http://schema.org/Organization" id="logo">
			<div class="container">
				<a itemprop="url" href="<?php echo bloginfo('url') ?>">
					<img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
				</a>
			</div>
		</div>
	</div>
</header>