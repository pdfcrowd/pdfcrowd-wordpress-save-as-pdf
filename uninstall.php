<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       https://pdfcrowd.com/wordpress/
 * @since      1.0.0
 *
 * @package    Save_As_Pdf_Pdfcrowd
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

delete_option('save-as-pdf-pdfcrowd');
