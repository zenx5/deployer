<?php
/*
Plugin Name: Deployer by Zenx5
Plugin URI: https://zenx5.pro
Description: Created for wordpress's deploy
Version: 1.0.0
Author: Octavio Martinez (Zenx5)
Author URI: https://zenx5.pro
License: GPLv2 or later
*/

require_once plugin_dir_path( __FILE__ ) . 'classes/class-deployer.php';

$nameclass = 'Deployer';

register_activation_hook(__FILE__, [$nameclass, 'activation']);
register_deactivation_hook(__FILE__, [$nameclass, 'deactivation']);
register_uninstall_hook(__FILE__, [$nameclass, 'uninstall']);

add_action('zoho_api', [$nameclass, 'init']);