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

if (! defined('{%= short_name %}_DIR')) {
	define('{%= short_name %}_DIR', plugin_dir_path( __FILE__ ));
}

if (! defined('{%= short_name %}_VERSION')) {
	define('{%= short_name %}_VERSION', '1.0');
}


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-{%= slug %}-activator.php
 */
function activate_{%= short_name_var %}() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-{%= short_name_files %}-activator.php';
	{%= safe_name %}_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-{%= slug %}-deactivator.php
 */
function deactivate_{%= short_name_var %}() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-{%= short_name_files %}-deactivator.php';
	{%= safe_name %}_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_{%= short_name_var %}' );
register_deactivation_hook( __FILE__, 'deactivate_{%= short_name_var %}' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-{%= short_name_files %}.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_{%= short_name_var %}() {

	$plugin = new {%= safe_name %}();
	$plugin->run();

}
run_{%= short_name_var %}();	
