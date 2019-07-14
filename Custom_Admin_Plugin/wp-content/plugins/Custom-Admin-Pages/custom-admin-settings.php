<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also defines a function that starts the plugin.
 *
 * @link              http://code.tutsplus.com/tutorials/creating-custom-admin-pages-in-wordpress-1
 * @since             1.0.0
 * @package           Custom_Admin_Settings
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Admin Settings
 * Plugin URI:        http://code.tutsplus.com/tutorials/creating-custom-admin-pages-in-wordpress-1
 * Description:       Demonstrates how to write custom administration pages in WordPress.
 * Version:           1.0.0
 * Author:            Cole Williams
 * Author URI:        https://colewill.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
// If this file is called directly, abort.

if(!defined ('WPINC') ) {
  die;
}
// pull in necessary files
foreach (glob(plugin_dir_path(__FILE__) . 'admin/*.php') as $file){
  include_once $file;
}

add_action('plugins_loaded', 'custom_admin_settings');

function custom_admin_settings(){
  $plugin = new Submenu(new Submenu_Page());
  $plugin->init();
}