<?php

/*
*   The footer sidebar
*/

if ( ! is_active_sidebar( 'footer-frontpage' ) ) {
	return;
}

$activeSidebars = 0;
$activeSidebars += is_active_sidebar( 'footer-frontpage' ) ? 1 : 0;
?>

<div class="footer-widgets active-footers-<?php echo $activeSidebars ?>">

<?php
if ( is_active_sidebar( 'footer-frontpage' ) ) {
	?>
	<div id="footer-frontpage" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-frontpage' ); ?>
	</div<!-- #footer-left -->
	<?php
}
?>

</div>