<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<title><?php wp_title(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
</head>
<body>

<header id="dc_header" class="clearfix">
			<div class="menu_mobile" style="display: none">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="dc_main dc_header clearfix">
				<div class="dc_logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('dc_logo', option) ?>" alt="Logo"></a>
				</div>
				<nav class="dc_nav clearfix">
					
					<ul class="dc_menu clearfix">
						<?php wp_nav_menu( array( 'theme_location' => 'nav', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
					</ul>
				</nav>
			</div>
</header>