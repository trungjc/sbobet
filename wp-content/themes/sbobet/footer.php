<footer id="dc_footer">
	<div class="dc_main clearfix">
		<div class="dc_footer">
<?php if( have_rows('dc_footer1', option) ) { ?>
<?php while ( have_rows('dc_footer1', option) ) { the_row(); ?>
<?php if( get_row_layout() == 'dcf1_nav' ) { ?>
			<?php if( get_sub_field('dcf1_nav_title') ): ?><h4><?php the_sub_field('dcf1_nav_title') ?></h4><?php endif; ?>
<?php $fnav = get_sub_field('dcf1_menu'); ?>
			<ul class="dcf_menu">
				<?php wp_nav_menu( array( 'menu' =>$fnav, 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
<?php } elseif( get_row_layout() == 'dcf1_cont' ) { ?>
			<?php the_sub_field('dcf1_content'); ?>
<?php } ?>
<?php } ?>
<?php } ?>
		</div>
		<div class="dc_footer">
<?php if( have_rows('dc_footer2', option) ) { ?>
<?php while ( have_rows('dc_footer2', option) ) { the_row(); ?>
<?php if( get_row_layout() == 'dcf1_nav' ) { ?>
			<?php if( get_sub_field('dcf1_nav_title') ): ?><h4><?php the_sub_field('dcf1_nav_title') ?></h4><?php endif; ?>
<?php $fnav = get_sub_field('dcf1_menu'); ?>
			<ul class="dcf_menu">
				<?php wp_nav_menu( array( 'menu' =>$fnav, 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
<?php } elseif( get_row_layout() == 'dcf1_cont' ) { ?>
			<?php the_sub_field('dcf1_content'); ?>
<?php } ?>
<?php } ?>
<?php } ?>
		</div>
		<div class="dc_footer">
<?php if( have_rows('dc_footer3', option) ) { ?>
<?php while ( have_rows('dc_footer3', option) ) { the_row(); ?>
<?php if( get_row_layout() == 'dcf1_nav' ) { ?>
			<?php if( get_sub_field('dcf1_nav_title') ): ?><h4><?php the_sub_field('dcf1_nav_title') ?></h4><?php endif; ?>
<?php $fnav = get_sub_field('dcf1_menu'); ?>
			<ul class="dcf_menu">
				<?php wp_nav_menu( array( 'menu' =>$fnav, 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
<?php } elseif( get_row_layout() == 'dcf1_cont' ) { ?>
			<?php the_sub_field('dcf1_content'); ?>
<?php } ?>
<?php } ?>
<?php } ?>
		</div>
		<div class="dc_footer">
<?php if( have_rows('dc_footer4', option) ) { ?>
<?php while ( have_rows('dc_footer4', option) ) { the_row(); ?>
<?php if( get_row_layout() == 'dcf1_nav' ) { ?>
			<?php if( get_sub_field('dcf1_nav_title') ): ?><h4><?php the_sub_field('dcf1_nav_title') ?></h4><?php endif; ?>
<?php $fnav = get_sub_field('dcf1_menu'); ?>
			<ul class="dcf_menu">
				<?php wp_nav_menu( array( 'menu' =>$fnav, 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
<?php } elseif( get_row_layout() == 'dcf1_cont' ) { ?>
			<?php the_sub_field('dcf1_content'); ?>
<?php } ?>
<?php } ?>
<?php } ?>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

<script type="text/javascript" >
	$(document).ready(function(){
		$('.menu_mobile').on('click',function(){
			$(this).parent().toggleClass('active');
		})
	})
</script>

</body>
</html>