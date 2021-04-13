<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lesser-theme
 */

if ( ! is_active_sidebar( 'post-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'post-sidebar' ); ?>
</aside><!-- #secondary -->
