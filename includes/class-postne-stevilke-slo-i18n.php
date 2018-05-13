<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.seolution.net
 * @since      1.0.0
 *
 * @package    Postne_Stevilke_Slo
 * @subpackage Postne_Stevilke_Slo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Postne_Stevilke_Slo
 * @subpackage Postne_Stevilke_Slo/includes
 * @author     Seolution <info@seolution.net>
 */
class Postne_Stevilke_Slo_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'postne-stevilke-slo',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
