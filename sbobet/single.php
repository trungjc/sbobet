<?php get_header(); ?>

<div class="dc_main clearfix">

<?php
if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>');}
?>

	<div class="dch_content">
		<h1><?php the_title(); ?></h1>
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
<?php the_content(); ?>
<?php }} wp_reset_query(); ?>
		
	</div>
	
	<div class="dc_widget">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>