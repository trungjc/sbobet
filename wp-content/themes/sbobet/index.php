<?php get_header(); ?>

<div class="dc_main clearfix">
	
	<div class="dch_text clearfix">
		<?php the_field('dch_content', option); ?>
	</div>
	
	<div class="dch_content">
		<div class="dch_news clearfix">
			<div class="dch_news_title">
				<h2><a href="http://sbobetkhao.com/category/fooball/">News</a></h2>
				<h3><a href="http://sbobetkhao.com/category/fooball/"><i class="fa fa-angle-right" aria-hidden="true"></i> More</a></h3>
			</div>

<?php 
$terms = get_field('home_news', option);
$num = get_field('home_news_item', option);
if( $terms ): ?>
<?php $cat_news = implode(", ", $terms); ?>
<?php endif; ?>
<?php  ?>

<?php
$args = array(
	'cat' => ''.$cat_news.'',
	'posts_per_page' => $num,
);
query_posts($args);
?>
<?php if (have_posts()); { ?>
<?php while (have_posts()) { the_post(); ?>
			<div class="dch_news_item clearfix media">
<?php if(has_post_thumbnail()) { ?>
				<a class="pull-left" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'medium', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
				<div class="media-body">
					<?php the_category(); ?>
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<div><?php echo get_excerpt(120); ?>...</div>
					<a class="readmore" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Read More</a>
				</div>
			</div>
<?php } ?>
<?php } ?>
		
			
			
	</div>
		<div class="home-page-content">
		<?php the_field('dch_content2', option); ?>
		</div>
	</div>
	
	<div class="dc_widget">
		<?php get_sidebar(); ?>
	</div>
		
	
</div>

<?php get_footer(); ?>