<?php

/*
*   The footer sidebar
*/

if ( ! is_active_sidebar( 'footer-frontpage' ) && ! is_active_sidebar( 'footer-innerpage' ) ) {
	return;
}

$activeSidebars = 0;
$activeSidebars += is_active_sidebar( 'footer-frontpage' ) ? 1 : 0;
$activeSidebars += is_active_sidebar( 'footer-innerpage' ) ? 1 : 0;
?>

<div class="footer-widgets active-footers-<?php echo $activeSidebars ?>">

<?php
if ( is_active_sidebar( 'footer-frontpage' ) ) {
	?>
	<div id="footer-left" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-frontpage' ); ?>
	</div><?php
}
if ( is_active_sidebar( 'footer-innerpage' ) ) {
	?><div id="footer-right" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-innerpage' ); ?>
	</div><!-- #footer-right -->
	<?php
}
?>

</div>