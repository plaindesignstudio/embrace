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
if (is_active_sidebar( 'sidebar-5')):
	?>


		<?php
		if ( is_active_sidebar( 'sidebar-5' ) ) {
			?>
			<div class="widget-column col-12 position-relative">
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			 </div>
			<?php
		} ?>


<?php endif; ?>
