<?php
/*
	Plugin Name: Smashing Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 1.3.7
	Author: Teguh Kings
	Author URI: http://www.asiadevmedia.com
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'rayman813' );
$updater->set_repository( 'smashing-updater-plugin' );
$updater->initialize();