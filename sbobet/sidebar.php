<?php if( have_rows('dc_widget', option) ) { ?>
<?php while ( have_rows('dc_widget', option) ) { the_row(); ?>
<div class="dcw_item clearfix">
<?php if( get_row_layout() == 'dcw_wys' ) { ?>
	<?php if( get_sub_field('dcw_wys_title') ): ?><h4><?php the_sub_field('dcw_wys_title') ?></h4><?php endif; ?>
	<aside><?php the_sub_field('dcw_wys_cont'); ?></aside>
<?php } ?>
</div>
<?php } ?>
<?php } ?>
