<?php

/*
*   The footer sidebar
*/

if ( ! is_active_sidebar( 'footer-frontpage-left' ) && ! is_active_sidebar( 'footer-frontpage-mid' ) && ! is_active_sidebar( 'footer-frontpage-right' ) ) {
	return;
}

$activeSidebars = 0;
$activeSidebars += is_active_sidebar( 'footer-frontpage-left' ) ? 1 : 0;
$activeSidebars += is_active_sidebar( 'footer-frontpage-mid' ) ? 1 : 0;
$activeSidebars += is_active_sidebar( 'footer-frontpage-right' ) ? 1 : 0;
?>

<div class="footer-widgets active-footers-<?php echo $activeSidebars ?>">

<?php
if ( is_active_sidebar( 'footer-frontpage-left' ) ) {
	?><div id="footer-frontpage-left" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-frontpage-left' ); ?>
	</div><?php
}
if ( is_active_sidebar( 'footer-frontpage-mid' ) ) {
	?><div id="footer-frontpage-mid" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-frontpage-mid' ); ?>
	</div><?php
}
if ( is_active_sidebar( 'footer-frontpage-right' ) ) {
	?><div id="footer-frontpage-right" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-frontpage-right' ); ?>
	</div><?php
}
?>

</div>