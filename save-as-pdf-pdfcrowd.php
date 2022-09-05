<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://pdfcrowd.com/save-as-pdf-wordpress-plugin/
 * @since             1.0.0
 * @package           Save_As_Pdf_Pdfcrowd
 *
 * @wordpress-plugin
 * Plugin Name:       Save as PDF by Pdfcrowd
 * Plugin URI:        https://pdfcrowd.com/save-as-pdf-wordpress-plugin/
 * Description:       Let your visitors save pages as PDF in a single click. Reliable, fast and highly customizable.
 * Version:           2.11.0
 * Author:            Pdfcrowd <support@pdfcrowd.com>
 * Author URI:        https://pdfcrowd.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       save-as-pdf-pdfcrowd
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'SAVE_AS_PDF_VERSION', '2.11.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-save-as-pdf-pdfcrowd-activator.php
 */
function activate_save_as_pdf_pdfcrowd() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-save-as-pdf-pdfcrowd-activator.php';
    Save_As_Pdf_Pdfcrowd_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-save-as-pdf-pdfcrowd-deactivator.php
 */
function deactivate_save_as_pdf_pdfcrowd() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-save-as-pdf-pdfcrowd-deactivator.php';
    Save_As_Pdf_Pdfcrowd_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_save_as_pdf_pdfcrowd'  );
register_deactivation_hook( __FILE__, 'deactivate_save_as_pdf_pdfcrowd' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-save-as-pdf-pdfcrowd.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_save_as_pdf_pdfcrowd() {

    $plugin = new Save_As_Pdf_Pdfcrowd();
    $plugin->run();

}
run_save_as_pdf_pdfcrowd();
