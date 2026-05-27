<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://pdfcrowd.com/save-as-pdf-wordpress-plugin/
 * @since      1.0.0
 *
 * @package    Save_As_Pdf_Pdfcrowd
 * @subpackage Save_As_Pdf_Pdfcrowd/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Save_As_Pdf_Pdfcrowd
 * @subpackage Save_As_Pdf_Pdfcrowd/includes
 * @author     PDFCrowd <support@pdfcrowd.com>
 */
class Save_As_Pdf_Pdfcrowd_i18n {


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain() {

        load_plugin_textdomain(
            'save-as-pdf-pdfcrowd',
            false,
            dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
        );

    }



}
