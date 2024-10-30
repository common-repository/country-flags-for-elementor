<?php
namespace CountryFlagsForElementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Country Flags
 *
 * Elementor widget for Country Flags.
 *
 * @since 1.0.0
 */
class Country_Flag_Widget extends Widget_Base
{
	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'country-flag';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return __( 'Country Flag', 'country-flags-for-elementor' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'cffe-icon';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return [ 'general' ];
	}

	/**
	 * Retrieve the list of styles the widget depended on.
	 *
	 * Used to set styles dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget styles dependencies.
	 */
	public function get_style_depends()
	{
		return [ 'flag-icon-css' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends()
	{
		return [ ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls()
	{
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'country-flags-for-elementor' ),
			]
		);

		$this->add_control(
			'flag',
			[
				'label' => __( 'Country Flags', 'country-flags-for-elementor' ),
				'type' => 'country-flags',
				'default' => 'flag-icon flag-icon-us',
			]
		);

		$this->add_control(
			'ratio',
			[
				'label' => __( 'Ratio', 'country-flags-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'flag-icon-squared' => __( 'Square (1x1)', 'country-flags-for-elementor' ),
					''  => __( 'Rectangle (4x3)', 'country-flags-for-elementor' ),
				],
				'default' => '',
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'country-flags-for-elementor' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'https://your-link.com', 'country-flags-for-elementor' ),
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'flag_section',
			[
				'label' => __( 'Flag', 'country-flags-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'size',
			[
				'label' => __( 'Size', 'country-flags-for-elementor' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .cffe-flag-wrapper' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label' => __( 'Alignment', 'country-flags-for-elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'country-flags-for-elementor' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'country-flags-for-elementor' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'country-flags-for-elementor' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .cffe-flag-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render()
	{
		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'wrapper', 'class', 'cffe-flag-wrapper' );

		$this->add_render_attribute( 'flag-wrapper', 'class', 'cffe-flag' );

		$tag = 'div';

		if ( ! empty( $settings['link']['url'] ) ) {
			$this->add_render_attribute( 'flag-wrapper', 'href', $settings['link']['url'] );
			$tag = 'a';

			if ( ! empty( $settings['link']['is_external'] ) ) {
				$this->add_render_attribute( 'flag-wrapper', 'target', '_blank' );
			}

			if ( $settings['link']['nofollow'] ) {
				$this->add_render_attribute( 'flag-wrapper', 'rel', 'nofollow' );
			}
		}

		if ( ! empty( $settings['flag'] ) ) {
			$this->add_render_attribute( 'flag', 'class', [ $settings['flag'], $settings['ratio'] ] );
			$this->add_render_attribute( 'flag', 'aria-hidden', 'true' );
		}

		?>
		<div <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>
			<<?php echo $tag . ' ' . $this->get_render_attribute_string( 'flag-wrapper' ); ?>>
				<i <?php echo $this->get_render_attribute_string( 'flag' ); ?>></i>
			</<?php echo $tag; ?>>
		</div>
		<?php
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template()
	{
		?>
		<# var link = settings.link.url ? 'href="' + settings.link.url + '"' : '',
				tag = link ? 'a' : 'div'; #>
		<div class="cffe-flag-wrapper">
			<{{{ tag }}} class="cffe-flag elementor-animation-{{ settings.hover_animation }}" {{{ link }}}>
				<i class="{{ settings.flag }} {{ settings.ratio }}" aria-hidden="true"></i>
			</{{{ tag }}}>
		</div>
		<?php
	}

}
