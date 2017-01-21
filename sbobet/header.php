<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
</head>
<body>

<header id="dc_header" class="clearfix">
	<div class="dc_main dc_header clearfix">
		<div class="dc_logo">
			<a href="#" title="Homepage"><img src="<?php bloginfo('template_directory'); ?>/img/sbobet_logo_trim.jpg" alt="Logo"></a>
		</div>
		<nav class="dc_nav clearfix">
			<ul class="dc_menu clearfix">
				<?php wp_nav_menu( array( 'theme_location' => 'nav', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</nav>
	</div>
</header>