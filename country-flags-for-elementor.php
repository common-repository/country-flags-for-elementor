<?php
/**
 * Plugin Name: Country Flags for Elementor
 * Description: This plugin adds a country flags widget to the Elementor Page Builder.
 * Plugin URI:  https://wordpress.org/plugins/country-flags-for-elementor
 * Version:     1.0.1
 * Author:      wepic
 * Author URI:  https://wepic.be/
 * Text Domain: country-flags-for-elementor
 * 
 * Elementor tested up to: 3.2.5
 * Elementor Pro tested up to: 3.3.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'CFFE_VERSION', '1.0.1' );
define( 'CFFE_E_VERSION', '2.1.0' );
define( 'CFFE_PHP_VERSION', '5.4' );
define( 'CFFE_FICSS_VERSION', '3.1.0' );
define( 'CFFE__FILE__', __FILE__ );
define( 'CFFE_PLUGIN_BASE', plugin_basename( CFFE__FILE__ ) );
define( 'CFFE_URL', plugins_url( '/', CFFE__FILE__ ) );
define( 'CFFE_PATH', plugin_dir_path( CFFE__FILE__ ) );

/**
 * Main Plugin Class
 *
 * The init class that runs the plugin.
 *
 * @since 1.0.0
 */
final class Country_Flags_for_Elementor
{
	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var Country_Flags_for_Elementor The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return Country_Flags_for_Elementor An instance of the class.
	 */
	public static function instance()
	{
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Clone
	 *
	 * Disable class cloning.
	 *
	 * @since  1.0.0
	 *
	 * @access protected
	 *
	 * @return void
	 */
	public function __clone()
	{
		// Cloning instances of the class is forbidden
		_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'country-flags-for-elementor' ), '1.0.0' );
	}

	/**
	 * Wakeup
	 *
	 * Disable unserializing the class.
	 *
	 * @since  1.0.0
	 *
	 * @access protected
	 *
	 * @return void
	 */
	public function __wakeup()
	{
		// Unserializing instances of the class is forbidden.
		_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'country-flags-for-elementor' ), '1.0.0' );
	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct()
	{
		$this->includes();
		$this->init_hooks();

		do_action( 'cffe_loaded' );
	}

	/**
	 * Include Files
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function includes() 
	{
		require_once( __DIR__ . '/plugin.php' );
	}

	/**
	 * Init Hooks
	 *
	 * Hook into actions and filters.
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function init_hooks()
	{
		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );
	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function i18n()
	{
		load_plugin_textdomain( 'country-flags-for-elementor', false, dirname( CFFE_PLUGIN_BASE ) . '/languages/' );
	}

	/**
	 * Initialize the plugin
	 *
	 * Load the plugin after Elementor (and other plugins) are loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init()
	{
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			add_action( 'admin_init', [ $this, 'deactivate_plugin' ] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, CFFE_E_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			add_action( 'admin_init', [ $this, 'deactivate_plugin' ] );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, CFFE_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			add_action( 'admin_init', [ $this, 'deactivate_plugin' ] );
			return;
		}

		// Plugin
		new \CountryFlagsForElementor\Plugin();
	}

	/**
	 * Deactivate Elementor
	 *
	 * Deactivate this plugin if elementor is not installed and active.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function deactivate_plugin()
	{
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_missing_main_plugin()
	{
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		if ( ! current_user_can( 'activate_plugins' ) ) {
			return;
		}

		$message = sprintf(
			/* translators: 1: PLUGIN_NAME 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'country-flags-for-elementor' ),
			'<strong>' . esc_html__( 'Country Flags for Elementor', 'country-flags-for-elementor' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'country-flags-for-elementor' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version()
	{
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		if ( ! current_user_can( 'activate_plugins' ) ) {
			return;
		}

		$message = sprintf(
			/* translators: 1: PLUGIN_NAME 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'country-flags-for-elementor' ),
			'<strong>' . esc_html__( 'Country Flags for Elementor', 'country-flags-for-elementor' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'country-flags-for-elementor' ) . '</strong>',
			CFFE_E_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_php_version()
	{
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: PLUGIN_NAME 2: PHP 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'country-flags-for-elementor' ),
			'<strong>' . esc_html__( 'Country Flags for Elementor', 'country-flags-for-elementor' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'country-flags-for-elementor' ) . '</strong>',
			CFFE_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

}


/**
 * Load Plugin
 *
 * @since 1.0.0
 */
function CFFE_load()
{
	return Country_Flags_for_Elementor::instance();
}

// Run Plugin
CFFE_load();
