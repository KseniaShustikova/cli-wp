<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/KseniaShustikova
 * @since      1.0.0
 *
 * @package    Kit_Copyright
 * @subpackage Kit_Copyright/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Kit_Copyright
 * @subpackage Kit_Copyright/includes
 * @author     Ksenia <200.ksenia.200@gmail.com>
 */
class Kit_Copyright_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'kit-copyright',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
