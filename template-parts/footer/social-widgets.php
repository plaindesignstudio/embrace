<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
			?>
			<div class="widget-column footer-widget-1 text-center d-flex justify-content-center">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		<?php } ?>


