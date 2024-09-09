<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' )) :
	?>


		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) {
			?>
			<div class="widget-column footer-widget-1 text-left col-md-4 col-sm-12 mb-4">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<?php
		}
		if ( is_active_sidebar( 'sidebar-3' ) ) {
			?>
			<div class="widget-column footer-widget-2 text-left col-md-4 col-sm-12 mb-4">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php } 
		if ( is_active_sidebar( 'sidebar-4' ) ) {
			?>
			<div class="widget-column footer-widget-3 text-left col-md-4 col-sm-12 mb-4">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		<?php } ?>


<?php endif; ?>
