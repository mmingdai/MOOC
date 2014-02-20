<?php
/**
 * Remove WordPress Topleft Corner Logo
 */
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );



?>