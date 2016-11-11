<?php
/**
 * {%= title %}
 *
 * {%= description %}
 *
 * @package   {%= safe_name %}
 * @author    {%= author_name %} <{%= author_email %}>
 * @license   GPL-2.0+
 * @link      {%= homepage %}
 * @copyright {%= author_name %}
 *
 * @wordpress-plugin
 * Plugin Name:       {%= title %}
 * Plugin URI:        {%= homepage %}
 * Description:       {%= description %}
 * Version:           {%= version %}
 * Author:            {%= author_name %}
 * Author URI:        {%= author_url %}
 * Text Domain:       {%= slug %}
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: {%= github_repo %}
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}



/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-{%= slug %}-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-{%= slug %}-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-{%= slug %}-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-{%= slug %}-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_{%= slug %}' );
register_deactivation_hook( __FILE__, 'deactivate_{%= slug %}' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-{%= slug %}.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_{%= slug %}() {

	$plugin = new {%= safe_name %}();
	$plugin->run();

}
run_{%= slug %}();	
