<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
		<div id="right-widget-col" class="sticky-top">
		<iframe style="margin-top: 1rem;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbilanciamente&tabs&width=340&height=130&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
