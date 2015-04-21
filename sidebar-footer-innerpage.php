<?php

/*
*   The footer sidebar
*/

if ( ! is_active_sidebar( 'footer-innerpage-left' ) && ! is_active_sidebar( 'footer-innerpage-right' ) ) {
	return;
}

$activeSidebars = 0;
$activeSidebars += is_active_sidebar( 'footer-innerpage-left' ) ? 1 : 0;
$activeSidebars += is_active_sidebar( 'footer-innerpage-right' ) ? 1 : 0;
?>

<div class="footer-widgets active-footers-<?php echo $activeSidebars ?>">

<?php
if ( is_active_sidebar( 'footer-innerpage-left' ) ) {
	?><div id="footer-innerpage-left" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-innerpage-left' ); ?>
	</div><?php
}
if ( is_active_sidebar( 'footer-innerpage-right' ) ) {
	?><div id="footer-innerpage-right" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-innerpage-right' ); ?>
	</div><?php
}
?>

</div>