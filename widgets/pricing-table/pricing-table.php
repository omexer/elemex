<?php
/**
 *
 * @package Elemex
 */
namespace Elemex\Elementor\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Controls_Manager;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Repeater;
use Elementor\Core\Schemes;
use Elementor\Utils;

class Pricing_Table extends Widget {
    /**
	 * Get widget name.
	 *
	 * Retrieve pricing table widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'pricing-table';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve pricing table widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Pricing Table', 'elemex' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve pricing table widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-price-table';
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords()
	{
        return [
			'price menu',
			'pricing',
            'price',
			'table',
			'pricing table',
			'comparison table',
			'pricing plan',
			'dynamic price',
			'elemex',
            'package',
            'product',
            'plan'
		];
    }

	/**
	 * Register pricing table widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'ex_section_pricing_layouts',
			[
				'label' => esc_html__( 'Layouts', 'elemex' ),
			]
		);

		$this->add_control(
			'ex_pricing_layouts',
			[
                'label'   =>esc_html__( 'Style', 'elemex' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'style-1',
                'options' => [
                    'style-1' => esc_html__( 'Default', 'elemex' ),
                    'style-2' => esc_html__( 'Style 2', 'elemex' ),
                    'style-2' => esc_html__( 'Style 3', 'elemex' ),
                ],
            ]
		);

		$this->end_controls_section();
        
        $this->start_controls_section(
			'ex_section_price',
			[
				'label' => esc_html__( 'Price', 'elemex' ),
			]
		);

		$this->add_control(
			'ex_price_currency',
			[
                'label'   =>esc_html__( 'Currency', 'elemex' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '$',
            ]
		);
        
        $this->add_control(
			'ex_price_amount',
			[
                'label'   =>esc_html__( 'Price Amount', 'elemex' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '59',
            ]
		);
        
        $this->add_control(
			'ex_price_onsale',
			[
                'label' =>esc_html__( 'On Sale', 'elemex' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'elemex' ),
				'label_off' => esc_html__( 'No', 'elemex' ),
				'return_value' => 'yes',
				'default' => 'yes'
            ]
		);
        
        $this->add_control(
			'ex_price_onsale_amount',
			[
				'label' => esc_html__( 'Sale Price Amount', 'elemex'),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '39', 'elemex'),
				'condition' => [
					'eael_pricing_table_onsale' => 'yes'
				]
			]
		);

		$this->end_controls_section();
        
        /**
         *==================================================
         *  Style Tab
         *==================================================
         */
        
        $this->start_controls_section(
			'ex_section_price_styles',
			[
				'label' => esc_html__( 'Pricing Table Style', 'elemex'),
				'tab'   => Controls_Manager::TAB_STYLE
			]
		);

		$this->end_controls_section();
        

	}

	/**
	 * Render image box widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		
	}

	/**
	 * Render image box widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 2.9.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<?php
	}
}

