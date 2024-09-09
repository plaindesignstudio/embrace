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
if (is_active_sidebar( 'sidebar-6')):
	?>


		<?php
		if ( is_active_sidebar( 'sidebar-6' ) ) {
			?>
			<div class="widget-column col-12 mb-4">
				<?php dynamic_sidebar( 'sidebar-6' ); ?>
			</div>
			<?php
		} ?>


<?php endif; ?>
