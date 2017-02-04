<?php get_header(); ?>

<div class="dc_main clearfix">

<?php
if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>');}
?>

	<div class="dch_content">

<h1><?php echo single_cat_title(); ?></h1>

<?php $catid = get_query_var('cat'); ?>
<div class="dcar_des clearfix">
	<?php echo category_description( $catid ); ?>
</div>

<?php if (have_posts()); { $post = $posts[0]; $c=0; ?>
	<div class="dch_news clearfix">
<?php while (have_posts()) { the_post(); ?>
		<?php /*?><div class="dch_news_item clearfix">
<?php if(has_post_thumbnail()) { ?>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
			<?php the_category(); ?>
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<p><?php echo get_excerpt(120); ?></p>
		</div><?php */?>
		<?php $c++; if($c ==1) { ?>
		<div class="dc_cat1 clearfix">
<?php if(has_post_thumbnail()) { ?>
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'full', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
		<div class="category-content">
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<p><?php echo get_excerpt(200); ?></p>
			</div>
		</div>
		<?php } elseif ($c==2) { ?>
		<div class="dc_cat23">
<?php if(has_post_thumbnail()) { ?>
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'medium', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?><div class="category-content">
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<p><?php echo get_excerpt(200); ?></p>
		</div>
		</div>
		<?php } elseif ($c==3) { ?>
		<div class="dc_cat23">
<?php if(has_post_thumbnail()) { ?>
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'medium', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?><div class="category-content">
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<p><?php echo get_excerpt(200); ?></p>
		</div>
		</div>
		<?php } else { ?>
		<div class="dc_cat3 media">
<?php if(has_post_thumbnail()) { ?>
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img pull-left"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'medium', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
<div class="category-content media-body">
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<p><?php echo get_excerpt(200); ?></p>
		</div>
		</div>
		<?php } ?>
		
<?php } ?>
	</div>
<?php } wp_reset_query(); ?>

<div class="pagenavi">
<?php wp_pagenavi(); ?>
</div>	

	</div>
	
	<div class="dc_widget">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>