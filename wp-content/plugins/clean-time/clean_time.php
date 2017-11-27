<?php
/*
Plugin Name: Clean Time Plugin
Description: add clean time date and then display
*/

function clean_time_activate () {
	global $wpdb;
	$wp_table = $wpdb->prefix . 'clean_time_data';

	if($wpdb->get_var("show tables like '$wp_table'") != $wp_table)
		{
			$sql = "CREATE TABLE $wp_table (
				id INT(9) NOT NULL AUTO_INCREMENT,
				field1 MEDIUMTEXT NOT NULL,
				PRIMARY KEY  (id)
			);";
			
			require_once (ABSPATH . 'wp-admin/includes/upgrade.php');
			dbDelta($sql);
		
		}
	file_put_contents(__DIR__.'/my_loggg.txt', ob_get_contents());
error_log('Database was created.', 0);
}
register_activation_hook(__FILE__, clean_time_activate);
		

function clean_time_deactivate () {
	
}


register_deactivation_hook(__FILE__, clean_time_deactivate);
	

function clean_time_uninstall () { 
}


register_uninstall_hook(__FILE__, clean_time_uninstall);


function clean_time () { 
	
}

?>
