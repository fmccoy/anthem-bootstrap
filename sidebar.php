<?php 

/**
 * The sidebar containing the main widget areas.
 *
 * @package  anthemwp
 */

?>

<div id="secondary" class="col-lg-4 col-md-4 col-sm-12 widget-area" role="complementary">
	
	<?php do_action('before_sidebar'); ?>

	<?php if( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

	<?php endif; ?>

</div>