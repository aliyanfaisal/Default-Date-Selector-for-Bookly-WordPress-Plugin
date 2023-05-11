<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://https://aliyanfaisal.urbansofts.com
 * @since      1.0.0
 *
 * @package    Afb_Bookly_Date_Selector
 * @subpackage Afb_Bookly_Date_Selector/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Afb_Bookly_Date_Selector
 * @subpackage Afb_Bookly_Date_Selector/public
 * @author     Aliyan Faisal <aliyanfaisal15@gmail.com>
 */
class Afb_Bookly_Date_Selector_Public {

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
		$this->addMyJs();
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
		 * defined in Afb_Bookly_Date_Selector_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Afb_Bookly_Date_Selector_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/afb-bookly-date-selector-public.css', array(), $this->version, 'all' );

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
		 * defined in Afb_Bookly_Date_Selector_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Afb_Bookly_Date_Selector_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/afb-bookly-date-selector-public.js', array( 'jquery' ), $this->version, false );

	}
	
	
	public function addMyJs(){
		function mytheme_add_js_to_footer() {
			wp_enqueue_script( 'bookly-afb-js', AFB_BOOKLY_DATE_SELECTOR_URL . 'afb-js.js', array(), '1.0', true );
		}
		add_action( 'wp_footer', 'mytheme_add_js_to_footer' );

	}

}
