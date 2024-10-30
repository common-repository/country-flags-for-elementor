<?php
namespace CountryFlagsForElementor;

use CountryFlagsForElementor\Widgets\Country_Flag_Widget;
use CountryFlagsForElementor\Controls\Country_Flags_Control;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Main Plugin Class
 *
 * Register new elementor widgets.
 *
 * @since 1.0.0
 */
class Plugin
{
	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct()
	{
		$this->add_actions();
	}

	/**
	 * Add Actions
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function add_actions()
	{
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'on_widgets_registered' ] );
		add_action( 'elementor/controls/controls_registered', [ $this, 'on_controls_registered' ] );

		add_action( 'elementor/preview/enqueue_styles', function() {
			$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
			wp_enqueue_style( 'flag-icon-css', plugins_url( '/assets/lib/flag-icon-css/css/flag-icon' . $suffix . '.css', CFFE__FILE__ ), '', CFFE_FICSS_VERSION );
		} );

		add_action( 'elementor/frontend/after_enqueue_styles', function() {
			$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
			wp_register_style( 'flag-icon-css', plugins_url( '/assets/lib/flag-icon-css/css/flag-icon' . $suffix . '.css', CFFE__FILE__ ), '', CFFE_FICSS_VERSION );
		} );

		add_action( 'elementor/editor/after_enqueue_styles', function() {
			$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
			wp_enqueue_style( 'country-flags-editor', plugins_url( '/assets/css/editor' . $suffix . '.css', CFFE__FILE__ ), '', CFFE_FICSS_VERSION );
		} );
	}

	/**
	 * On Widgets Registered
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function on_widgets_registered()
	{
		$this->include_widgets();
		$this->register_widgets();
	}

	/**
	 * Include Widgets
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function include_widgets()
	{
		require __DIR__ . '/widgets/country-flag.php';
	}

	/**
	 * Register Widgets
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function register_widgets()
	{
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Country_Flag_Widget() );
	}

	/**
	 * On Controls Registered
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function on_controls_registered()
	{
		$this->include_controls();
		$this->register_controls();
	}

	/**
	 * Includes Controls
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function include_controls()
	{
		require __DIR__ . '/controls/country-flags.php';
	}

	/**
	 * Register Controls
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function register_controls()
	{
		\Elementor\Plugin::instance()->controls_manager->register_control( 'country-flags', new Country_Flags_Control() );
	}

}
