<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://aliyanfaisal.urbansofts.com
 * @since      1.0.0
 *
 * @package    Afb_Bookly_Date_Selector
 * @subpackage Afb_Bookly_Date_Selector/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Afb_Bookly_Date_Selector
 * @subpackage Afb_Bookly_Date_Selector/includes
 * @author     Aliyan Faisal <aliyanfaisal15@gmail.com>
 */
class Afb_Bookly_Date_Selector_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'afb-bookly-date-selector',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
