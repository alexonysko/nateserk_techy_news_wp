<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nateserk_techy_news
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="pure-g pure-u-1 widget-area">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- #secondary -->
