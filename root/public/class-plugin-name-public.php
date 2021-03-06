<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       {%= homepage %}
 * @since      1.0.0
 *
 * @package    {%= safe_name %}
 * @subpackage {%= safe_name %}/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    {%= safe_name %}
 * @subpackage {%= safe_name %}/public
 * @author     {%= author_name %} <{%= author_email %}>
 */
class {%= safe_name %}_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register class hooks
	 *
	 * @since 1.0.0	 *
	 */
	public function register_hooks(){
		add_action( 'wp_enqueue_scripts', array($this, 'enqueue_styles') );
		add_action( 'wp_enqueue_scripts', array($this, 'enqueue_scripts') );
	}

	/**
	 * Create a new instance of this class and register hooks
	 * @param $plugin_name
	 * @param $version
	 *
	 * @return {%= safe_name %}_Public
	 */
	public static function create($plugin_name, $version){
		$instance = new self($plugin_name, $version);
		$instance->register_hooks();
		return $instance;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in {%= safe_name %}_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The {%= safe_name %}_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/main.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in {%= safe_name %}_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The {%= safe_name %}_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/main.js', array( 'jquery' ), $this->version, false );

	}

}
