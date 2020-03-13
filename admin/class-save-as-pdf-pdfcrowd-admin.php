<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/
 * @since      1.0.0
 *
 * @package    Save_As_Pdf_Pdfcrowd
 * @subpackage Save_As_Pdf_Pdfcrowd/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * @package    Save_As_Pdf_Pdfcrowd
 * @subpackage Save_As_Pdf_Pdfcrowd/admin
 * @author     Pdfcrowd <support@pdfcrowd.com>
 */
class Save_As_Pdf_Pdfcrowd_Admin {

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
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/save-as-pdf-pdfcrowd-admin.css', array( 'wp-color-picker' ), $this->version, 'all' );
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/save-as-pdf-pdfcrowd-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );
    }

    /**
    * Register the administration menu for this plugin into the WordPress Dashboard menu.
    *
    * @since    1.0.0
    */
    public function add_plugin_admin_menu() {
        $plugin_screen_hook_suffix = add_options_page(
            'Save as PDF Setup',
            'Save as PDF',
            'manage_options',
            $this->plugin_name,
            array($this, 'display_plugin_setup_page')
        );
    }

    /**
    * Build dict holding license status and other info.
    *
    * @since    1.0.0
    */
    private static function build_status($status, $product='', $credits=NULL) {
        return array('status' => $status,
                     'credits' => $credits,
                     'product' => $product);
    }

    /**
    * Get status of the Pdfcrowd API license.
    *
    * @since    1.0.0
    */
    public static function get_license_status($options) {
        if((!isset($options['username']) || empty($options['username'])) &&
           (!isset($options['api_key']) || empty($options['api_key']))) {
            return self::build_status('active', 'Demo');
        }

        if(empty($options['username'])) {
            $options['username'] = 'null';
        } else if($options['username'] === 'demo') {
            return array('status' => 'invalid');
        }

        $url = 'https://pdfcrowd.com/admin-api/api2/username:' . $options['username'] . '/';
        // small timeout so client doesn't wait too long for the license getter
        $args = array(
            'timeout' => 3,
            'headers' => array(
                'Authorization' => 'Basic ' . base64_encode($options['username'] . ':' . $options['api_key'])));
        $response = wp_remote_get($url, $args);
        if(is_wp_error($response) || !is_array($response)) {
            return self::build_status('null');
        }

        $code = wp_remote_retrieve_response_code($response);
        if($code == 401) {
            return array('status' => 'invalid');
        }

        if($code == 404) {
            return self::build_status('', 'None');
        }

        if($code != 200) {
            return self::build_status('error');
        }

        $data = json_decode(wp_remote_retrieve_body($response));
        $status = self::build_status($data->status,
                                     $data->product->name,
                                     $data->credits);
        if($status['credits'] <= 0) {
            $status['credits'] = "<span class='attention'>{$status['credits']}</span>";
        }
        return $status;
    }

    /**
     * Render the settings page for this plugin.
     *
     * @since    1.0.0
     */
    public function display_plugin_setup_page() {
        include_once( 'partials/save-as-pdf-pdfcrowd-admin-display.php' );
    }

    /**
     * Add settings action link to the plugins page.
     *
     * @since    1.0.0
     */
    public function add_action_links( $links ) {
        return array_merge(
            array(
                'settings' => '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __( 'Settings', $this->plugin_name ) . '</a>'
            ),
            $links
        );
    }

    /**
     *  Save the plugin options
     *
     * @since    1.0.0
     */
    public function options_update() {
        register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
    }

    public function validate($input) {
        $options = get_option($this->plugin_name);
        $valid = $input;
        $valid['version'] = 141;

        if(isset($input['wp_reset_settings']) &&
           $input['wp_reset_settings'] === 'reset') {
            delete_option('save-as-pdf-pdfcrowd');
            return Save_As_Pdf_Pdfcrowd_Public::get_options();
        }

        if (isset($input['page_size']) &&
            $input['page_size'] != '') {
            $page_size = $input['page_size'];
            if (!preg_match("/(?i)^(A2|A3|A4|A5|A6|Letter)$/", $page_size))
                add_settings_error(
                'page_size',
                'empty_page_size',
                pdfcrowd_create_invalid_value_message($page_size, 'Page Size', 'Allowed values are A2, A3, A4, A5, A6, Letter.'));
            
        }
        $valid['page_size'] = isset($input['page_size']) ? $input['page_size'] : '';

        if (isset($input['page_width']) &&
            $input['page_width'] != '') {
            $page_width = $input['page_width'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $page_width))
                add_settings_error(
                'page_width',
                'empty_page_width',
                pdfcrowd_create_invalid_value_message($page_width, 'Page Width', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['page_width'] = isset($input['page_width']) ? $input['page_width'] : '';

        if (isset($input['page_height']) &&
            $input['page_height'] != '') {
            $page_height = $input['page_height'];
            if (!preg_match("/(?i)^\-1$|^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $page_height))
                add_settings_error(
                'page_height',
                'empty_page_height',
                pdfcrowd_create_invalid_value_message($page_height, 'Page Height', 'Can be -1 or specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['page_height'] = isset($input['page_height']) ? $input['page_height'] : '';

        if (isset($input['orientation']) &&
            $input['orientation'] != '') {
            $orientation = $input['orientation'];
            if (!preg_match("/(?i)^(landscape|portrait)$/", $orientation))
                add_settings_error(
                'orientation',
                'empty_orientation',
                pdfcrowd_create_invalid_value_message($orientation, 'Orientation', 'Allowed values are landscape, portrait.'));
            
        }
        $valid['orientation'] = isset($input['orientation']) ? $input['orientation'] : '';

        if (isset($input['margin_top']) &&
            $input['margin_top'] != '') {
            $margin_top = $input['margin_top'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $margin_top))
                add_settings_error(
                'margin_top',
                'empty_margin_top',
                pdfcrowd_create_invalid_value_message($margin_top, 'Margin Top', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['margin_top'] = isset($input['margin_top']) ? $input['margin_top'] : '';

        if (isset($input['margin_right']) &&
            $input['margin_right'] != '') {
            $margin_right = $input['margin_right'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $margin_right))
                add_settings_error(
                'margin_right',
                'empty_margin_right',
                pdfcrowd_create_invalid_value_message($margin_right, 'Margin Right', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['margin_right'] = isset($input['margin_right']) ? $input['margin_right'] : '';

        if (isset($input['margin_bottom']) &&
            $input['margin_bottom'] != '') {
            $margin_bottom = $input['margin_bottom'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $margin_bottom))
                add_settings_error(
                'margin_bottom',
                'empty_margin_bottom',
                pdfcrowd_create_invalid_value_message($margin_bottom, 'Margin Bottom', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['margin_bottom'] = isset($input['margin_bottom']) ? $input['margin_bottom'] : '';

        if (isset($input['margin_left']) &&
            $input['margin_left'] != '') {
            $margin_left = $input['margin_left'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $margin_left))
                add_settings_error(
                'margin_left',
                'empty_margin_left',
                pdfcrowd_create_invalid_value_message($margin_left, 'Margin Left', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['margin_left'] = isset($input['margin_left']) ? $input['margin_left'] : '';

        $valid['no_margins'] = (isset($input['no_margins']) && !empty($input['no_margins'])) ? 1: 0;

        if (isset($input['header_url']) &&
            $input['header_url'] != '') {
            $header_url = $input['header_url'];
            if (!preg_match("/(?i)^https?:\/\/.*$/", $header_url))
                add_settings_error(
                'header_url',
                'empty_header_url',
                pdfcrowd_create_invalid_value_message($header_url, 'Header Url', 'The supported protocols are http:// and https://.'));
            
        }
        $valid['header_url'] = isset($input['header_url']) ? $input['header_url'] : '';

        if (isset($input['header_html']) &&
            $input['header_html'] != '') {
            $header_html = $input['header_html'];
            if (!($header_html != null && $header_html !== ''))
                add_settings_error(
                'header_html',
                'empty_header_html',
                pdfcrowd_create_invalid_value_message($header_html, 'Header Html', 'The string must not be empty.'));
            
        }
        $valid['header_html'] = isset($input['header_html']) ? $input['header_html'] : '';

        if (isset($input['header_height']) &&
            $input['header_height'] != '') {
            $header_height = $input['header_height'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $header_height))
                add_settings_error(
                'header_height',
                'empty_header_height',
                pdfcrowd_create_invalid_value_message($header_height, 'Header Height', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['header_height'] = isset($input['header_height']) ? $input['header_height'] : '';

        if (isset($input['footer_url']) &&
            $input['footer_url'] != '') {
            $footer_url = $input['footer_url'];
            if (!preg_match("/(?i)^https?:\/\/.*$/", $footer_url))
                add_settings_error(
                'footer_url',
                'empty_footer_url',
                pdfcrowd_create_invalid_value_message($footer_url, 'Footer Url', 'The supported protocols are http:// and https://.'));
            
        }
        $valid['footer_url'] = isset($input['footer_url']) ? $input['footer_url'] : '';

        if (isset($input['footer_html']) &&
            $input['footer_html'] != '') {
            $footer_html = $input['footer_html'];
            if (!($footer_html != null && $footer_html !== ''))
                add_settings_error(
                'footer_html',
                'empty_footer_html',
                pdfcrowd_create_invalid_value_message($footer_html, 'Footer Html', 'The string must not be empty.'));
            
        }
        $valid['footer_html'] = isset($input['footer_html']) ? $input['footer_html'] : '';

        if (isset($input['footer_height']) &&
            $input['footer_height'] != '') {
            $footer_height = $input['footer_height'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $footer_height))
                add_settings_error(
                'footer_height',
                'empty_footer_height',
                pdfcrowd_create_invalid_value_message($footer_height, 'Footer Height', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['footer_height'] = isset($input['footer_height']) ? $input['footer_height'] : '';

        if (isset($input['print_page_range']) &&
            $input['print_page_range'] != '') {
            $pages = $input['print_page_range'];
            if (!preg_match("/^(?:\s*(?:\d+|(?:\d*\s*\-\s*\d+)|(?:\d+\s*\-\s*\d*))\s*,\s*)*\s*(?:\d+|(?:\d*\s*\-\s*\d+)|(?:\d+\s*\-\s*\d*))\s*$/", $pages))
                add_settings_error(
                'pages',
                'empty_pages',
                pdfcrowd_create_invalid_value_message($pages, 'Print Page Range', 'A comma separated list of page numbers or ranges.'));
            
        }
        $valid['print_page_range'] = isset($input['print_page_range']) ? $input['print_page_range'] : '';

        if (isset($input['exclude_header_on_pages']) &&
            $input['exclude_header_on_pages'] != '') {
            $pages = $input['exclude_header_on_pages'];
            if (!preg_match("/^(?:\s*\-?\d+\s*,)*\s*\-?\d+\s*$/", $pages))
                add_settings_error(
                'pages',
                'empty_pages',
                pdfcrowd_create_invalid_value_message($pages, 'Exclude Header On Pages', 'A comma separated list of page numbers.'));
            
        }
        $valid['exclude_header_on_pages'] = isset($input['exclude_header_on_pages']) ? $input['exclude_header_on_pages'] : '';

        if (isset($input['exclude_footer_on_pages']) &&
            $input['exclude_footer_on_pages'] != '') {
            $pages = $input['exclude_footer_on_pages'];
            if (!preg_match("/^(?:\s*\-?\d+\s*,)*\s*\-?\d+\s*$/", $pages))
                add_settings_error(
                'pages',
                'empty_pages',
                pdfcrowd_create_invalid_value_message($pages, 'Exclude Footer On Pages', 'A comma separated list of page numbers.'));
            
        }
        $valid['exclude_footer_on_pages'] = isset($input['exclude_footer_on_pages']) ? $input['exclude_footer_on_pages'] : '';

        $valid['page_numbering_offset'] = isset($input['page_numbering_offset']) ? $input['page_numbering_offset'] : '';

        if (isset($input['content_area_x']) &&
            $input['content_area_x'] != '') {
            $content_area_x = $input['content_area_x'];
            if (!preg_match("/(?i)^\-?[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $content_area_x))
                add_settings_error(
                'content_area_x',
                'empty_content_area_x',
                pdfcrowd_create_invalid_value_message($content_area_x, 'Content Area X', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt). It may contain a negative value.'));
            
        }
        $valid['content_area_x'] = isset($input['content_area_x']) ? $input['content_area_x'] : '';

        if (isset($input['content_area_y']) &&
            $input['content_area_y'] != '') {
            $content_area_y = $input['content_area_y'];
            if (!preg_match("/(?i)^\-?[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $content_area_y))
                add_settings_error(
                'content_area_y',
                'empty_content_area_y',
                pdfcrowd_create_invalid_value_message($content_area_y, 'Content Area Y', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt). It may contain a negative value.'));
            
        }
        $valid['content_area_y'] = isset($input['content_area_y']) ? $input['content_area_y'] : '';

        if (isset($input['content_area_width']) &&
            $input['content_area_width'] != '') {
            $content_area_width = $input['content_area_width'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $content_area_width))
                add_settings_error(
                'content_area_width',
                'empty_content_area_width',
                pdfcrowd_create_invalid_value_message($content_area_width, 'Content Area Width', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['content_area_width'] = isset($input['content_area_width']) ? $input['content_area_width'] : '';

        if (isset($input['content_area_height']) &&
            $input['content_area_height'] != '') {
            $content_area_height = $input['content_area_height'];
            if (!preg_match("/(?i)^[0-9]*(\.[0-9]+)?(pt|px|mm|cm|in)$/", $content_area_height))
                add_settings_error(
                'content_area_height',
                'empty_content_area_height',
                pdfcrowd_create_invalid_value_message($content_area_height, 'Content Area Height', 'Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).'));
            
        }
        $valid['content_area_height'] = isset($input['content_area_height']) ? $input['content_area_height'] : '';

        if (isset($input['page_watermark']) &&
            $input['page_watermark'] != '') {
            $page_watermark = $input['page_watermark'];
            if (!(filesize($page_watermark) > 0))
                add_settings_error(
                'page_watermark',
                'empty_page_watermark',
                pdfcrowd_create_invalid_value_message($page_watermark, 'Page Watermark', 'The file must exist and not be empty.'));
            
        }
        $valid['page_watermark'] = isset($input['page_watermark']) ? $input['page_watermark'] : '';

        if (isset($input['page_watermark_url']) &&
            $input['page_watermark_url'] != '') {
            $page_watermark_url = $input['page_watermark_url'];
            if (!preg_match("/(?i)^https?:\/\/.*$/", $page_watermark_url))
                add_settings_error(
                'page_watermark_url',
                'empty_page_watermark_url',
                pdfcrowd_create_invalid_value_message($page_watermark_url, 'Page Watermark Url', 'The supported protocols are http:// and https://.'));
            
        }
        $valid['page_watermark_url'] = isset($input['page_watermark_url']) ? $input['page_watermark_url'] : '';

        if (isset($input['multipage_watermark']) &&
            $input['multipage_watermark'] != '') {
            $multipage_watermark = $input['multipage_watermark'];
            if (!(filesize($multipage_watermark) > 0))
                add_settings_error(
                'multipage_watermark',
                'empty_multipage_watermark',
                pdfcrowd_create_invalid_value_message($multipage_watermark, 'Multipage Watermark', 'The file must exist and not be empty.'));
            
        }
        $valid['multipage_watermark'] = isset($input['multipage_watermark']) ? $input['multipage_watermark'] : '';

        if (isset($input['multipage_watermark_url']) &&
            $input['multipage_watermark_url'] != '') {
            $multipage_watermark_url = $input['multipage_watermark_url'];
            if (!preg_match("/(?i)^https?:\/\/.*$/", $multipage_watermark_url))
                add_settings_error(
                'multipage_watermark_url',
                'empty_multipage_watermark_url',
                pdfcrowd_create_invalid_value_message($multipage_watermark_url, 'Multipage Watermark Url', 'The supported protocols are http:// and https://.'));
            
        }
        $valid['multipage_watermark_url'] = isset($input['multipage_watermark_url']) ? $input['multipage_watermark_url'] : '';

        if (isset($input['page_background']) &&
            $input['page_background'] != '') {
            $page_background = $input['page_background'];
            if (!(filesize($page_background) > 0))
                add_settings_error(
                'page_background',
                'empty_page_background',
                pdfcrowd_create_invalid_value_message($page_background, 'Page Background', 'The file must exist and not be empty.'));
            
        }
        $valid['page_background'] = isset($input['page_background']) ? $input['page_background'] : '';

        if (isset($input['page_background_url']) &&
            $input['page_background_url'] != '') {
            $page_background_url = $input['page_background_url'];
            if (!preg_match("/(?i)^https?:\/\/.*$/", $page_background_url))
                add_settings_error(
                'page_background_url',
                'empty_page_background_url',
                pdfcrowd_create_invalid_value_message($page_background_url, 'Page Background Url', 'The supported protocols are http:// and https://.'));
            
        }
        $valid['page_background_url'] = isset($input['page_background_url']) ? $input['page_background_url'] : '';

        if (isset($input['multipage_background']) &&
            $input['multipage_background'] != '') {
            $multipage_background = $input['multipage_background'];
            if (!(filesize($multipage_background) > 0))
                add_settings_error(
                'multipage_background',
                'empty_multipage_background',
                pdfcrowd_create_invalid_value_message($multipage_background, 'Multipage Background', 'The file must exist and not be empty.'));
            
        }
        $valid['multipage_background'] = isset($input['multipage_background']) ? $input['multipage_background'] : '';

        if (isset($input['multipage_background_url']) &&
            $input['multipage_background_url'] != '') {
            $multipage_background_url = $input['multipage_background_url'];
            if (!preg_match("/(?i)^https?:\/\/.*$/", $multipage_background_url))
                add_settings_error(
                'multipage_background_url',
                'empty_multipage_background_url',
                pdfcrowd_create_invalid_value_message($multipage_background_url, 'Multipage Background Url', 'The supported protocols are http:// and https://.'));
            
        }
        $valid['multipage_background_url'] = isset($input['multipage_background_url']) ? $input['multipage_background_url'] : '';

        if (isset($input['page_background_color']) &&
            $input['page_background_color'] != '') {
            $page_background_color = $input['page_background_color'];
            if (!preg_match("/^[0-9a-fA-F]{6,8}$/", $page_background_color))
                add_settings_error(
                'page_background_color',
                'empty_page_background_color',
                pdfcrowd_create_invalid_value_message($page_background_color, 'Page Background Color', 'The value must be in RRGGBB or RRGGBBAA hexadecimal format.'));
            
        }
        $valid['page_background_color'] = isset($input['page_background_color']) ? $input['page_background_color'] : '';

        $valid['no_background'] = (isset($input['no_background']) && !empty($input['no_background'])) ? 1: 0;

        $valid['disable_javascript'] = (isset($input['disable_javascript']) && !empty($input['disable_javascript'])) ? 1: 0;

        $valid['disable_image_loading'] = (isset($input['disable_image_loading']) && !empty($input['disable_image_loading'])) ? 1: 0;

        $valid['disable_remote_fonts'] = (isset($input['disable_remote_fonts']) && !empty($input['disable_remote_fonts'])) ? 1: 0;

        $valid['block_ads'] = (isset($input['block_ads']) && !empty($input['block_ads'])) ? 1: 0;

        $valid['default_encoding'] = isset($input['default_encoding']) ? $input['default_encoding'] : '';

        $valid['http_auth_user_name'] = isset($input['http_auth_user_name']) ? $input['http_auth_user_name'] : '';

        $valid['http_auth_password'] = isset($input['http_auth_password']) ? $input['http_auth_password'] : '';

        $valid['use_print_media'] = (isset($input['use_print_media']) && !empty($input['use_print_media'])) ? 1: 0;

        $valid['no_xpdfcrowd_header'] = (isset($input['no_xpdfcrowd_header']) && !empty($input['no_xpdfcrowd_header'])) ? 1: 0;

        $valid['cookies'] = isset($input['cookies']) ? $input['cookies'] : '';

        $valid['verify_ssl_certificates'] = (isset($input['verify_ssl_certificates']) && !empty($input['verify_ssl_certificates'])) ? 1: 0;

        $valid['fail_on_main_url_error'] = (isset($input['fail_on_main_url_error']) && !empty($input['fail_on_main_url_error'])) ? 1: 0;

        $valid['fail_on_any_url_error'] = (isset($input['fail_on_any_url_error']) && !empty($input['fail_on_any_url_error'])) ? 1: 0;

        if (isset($input['custom_javascript']) &&
            $input['custom_javascript'] != '') {
            $custom_javascript = $input['custom_javascript'];
            if (!($custom_javascript != null && $custom_javascript !== ''))
                add_settings_error(
                'custom_javascript',
                'empty_custom_javascript',
                pdfcrowd_create_invalid_value_message($custom_javascript, 'Custom Javascript', 'The string must not be empty.'));
            
        }
        $valid['custom_javascript'] = isset($input['custom_javascript']) ? $input['custom_javascript'] : '';

        if (isset($input['on_load_javascript']) &&
            $input['on_load_javascript'] != '') {
            $on_load_javascript = $input['on_load_javascript'];
            if (!($on_load_javascript != null && $on_load_javascript !== ''))
                add_settings_error(
                'on_load_javascript',
                'empty_on_load_javascript',
                pdfcrowd_create_invalid_value_message($on_load_javascript, 'On Load Javascript', 'The string must not be empty.'));
            
        }
        $valid['on_load_javascript'] = isset($input['on_load_javascript']) ? $input['on_load_javascript'] : '';

        if (isset($input['custom_http_header']) &&
            $input['custom_http_header'] != '') {
            $custom_http_header = $input['custom_http_header'];
            if (!preg_match("/^.+:.+$/", $custom_http_header))
                add_settings_error(
                'custom_http_header',
                'empty_custom_http_header',
                pdfcrowd_create_invalid_value_message($custom_http_header, 'Custom Http Header', 'A string containing the header name and value separated by a colon.'));
            
        }
        $valid['custom_http_header'] = isset($input['custom_http_header']) ? $input['custom_http_header'] : '';

        if (isset($input['javascript_delay']) &&
            $input['javascript_delay'] != '') {
            $javascript_delay = $input['javascript_delay'];
            if (!(intval($javascript_delay) >= 0))
                add_settings_error(
                'javascript_delay',
                'empty_javascript_delay',
                pdfcrowd_create_invalid_value_message($javascript_delay, 'Javascript Delay', 'Must be a positive integer number or 0.'));
            
        }
        $valid['javascript_delay'] = isset($input['javascript_delay']) ? $input['javascript_delay'] : '';

        if (isset($input['element_to_convert']) &&
            $input['element_to_convert'] != '') {
            $selectors = $input['element_to_convert'];
            if (!($selectors != null && $selectors !== ''))
                add_settings_error(
                'selectors',
                'empty_selectors',
                pdfcrowd_create_invalid_value_message($selectors, 'Element To Convert', 'The string must not be empty.'));
            
        }
        $valid['element_to_convert'] = isset($input['element_to_convert']) ? $input['element_to_convert'] : '';

        if (isset($input['element_to_convert_mode']) &&
            $input['element_to_convert_mode'] != '') {
            $mode = $input['element_to_convert_mode'];
            if (!preg_match("/(?i)^(cut-out|remove-siblings|hide-siblings)$/", $mode))
                add_settings_error(
                'mode',
                'empty_mode',
                pdfcrowd_create_invalid_value_message($mode, 'Element To Convert Mode', 'Allowed values are cut-out, remove-siblings, hide-siblings.'));
            
        }
        $valid['element_to_convert_mode'] = isset($input['element_to_convert_mode']) ? $input['element_to_convert_mode'] : '';

        if (isset($input['wait_for_element']) &&
            $input['wait_for_element'] != '') {
            $selectors = $input['wait_for_element'];
            if (!($selectors != null && $selectors !== ''))
                add_settings_error(
                'selectors',
                'empty_selectors',
                pdfcrowd_create_invalid_value_message($selectors, 'Wait For Element', 'The string must not be empty.'));
            
        }
        $valid['wait_for_element'] = isset($input['wait_for_element']) ? $input['wait_for_element'] : '';

        if (isset($input['viewport_width']) &&
            $input['viewport_width'] != '') {
            $viewport_width = $input['viewport_width'];
            if (!(intval($viewport_width) >= 96 && intval($viewport_width) <= 65000))
                add_settings_error(
                'viewport_width',
                'empty_viewport_width',
                pdfcrowd_create_invalid_value_message($viewport_width, 'Viewport Width', 'The value must be in the range 96-65000.'));
            
        }
        $valid['viewport_width'] = isset($input['viewport_width']) ? $input['viewport_width'] : '';

        if (isset($input['viewport_height']) &&
            $input['viewport_height'] != '') {
            $viewport_height = $input['viewport_height'];
            if (!(intval($viewport_height) > 0))
                add_settings_error(
                'viewport_height',
                'empty_viewport_height',
                pdfcrowd_create_invalid_value_message($viewport_height, 'Viewport Height', 'Must be a positive integer number.'));
            
        }
        $valid['viewport_height'] = isset($input['viewport_height']) ? $input['viewport_height'] : '';

        if (isset($input['rendering_mode']) &&
            $input['rendering_mode'] != '') {
            $rendering_mode = $input['rendering_mode'];
            if (!preg_match("/(?i)^(default|viewport)$/", $rendering_mode))
                add_settings_error(
                'rendering_mode',
                'empty_rendering_mode',
                pdfcrowd_create_invalid_value_message($rendering_mode, 'Rendering Mode', 'Allowed values are default, viewport.'));
            
        }
        $valid['rendering_mode'] = isset($input['rendering_mode']) ? $input['rendering_mode'] : '';

        if (isset($input['smart_scaling_mode']) &&
            $input['smart_scaling_mode'] != '') {
            $smart_scaling_mode = $input['smart_scaling_mode'];
            if (!preg_match("/(?i)^(default|disabled|viewport-fit|content-fit|single-page-fit)$/", $smart_scaling_mode))
                add_settings_error(
                'smart_scaling_mode',
                'empty_smart_scaling_mode',
                pdfcrowd_create_invalid_value_message($smart_scaling_mode, 'Smart Scaling Mode', 'Allowed values are default, disabled, viewport-fit, content-fit, single-page-fit.'));
            
        }
        $valid['smart_scaling_mode'] = isset($input['smart_scaling_mode']) ? $input['smart_scaling_mode'] : '';

        if (isset($input['scale_factor']) &&
            $input['scale_factor'] != '') {
            $scale_factor = $input['scale_factor'];
            if (!(intval($scale_factor) >= 10 && intval($scale_factor) <= 500))
                add_settings_error(
                'scale_factor',
                'empty_scale_factor',
                pdfcrowd_create_invalid_value_message($scale_factor, 'Scale Factor', 'The value must be in the range 10-500.'));
            
        }
        $valid['scale_factor'] = isset($input['scale_factor']) ? $input['scale_factor'] : '';

        if (isset($input['header_footer_scale_factor']) &&
            $input['header_footer_scale_factor'] != '') {
            $header_footer_scale_factor = $input['header_footer_scale_factor'];
            if (!(intval($header_footer_scale_factor) >= 10 && intval($header_footer_scale_factor) <= 500))
                add_settings_error(
                'header_footer_scale_factor',
                'empty_header_footer_scale_factor',
                pdfcrowd_create_invalid_value_message($header_footer_scale_factor, 'Header Footer Scale Factor', 'The value must be in the range 10-500.'));
            
        }
        $valid['header_footer_scale_factor'] = isset($input['header_footer_scale_factor']) ? $input['header_footer_scale_factor'] : '';

        if (isset($input['jpeg_quality']) &&
            $input['jpeg_quality'] != '') {
            $jpeg_quality = $input['jpeg_quality'];
            if (!(intval($jpeg_quality) >= 1 && intval($jpeg_quality) <= 100))
                add_settings_error(
                'jpeg_quality',
                'empty_jpeg_quality',
                pdfcrowd_create_invalid_value_message($jpeg_quality, 'Jpeg Quality', 'The value must be in the range 1-100.'));
            
        }
        $valid['jpeg_quality'] = isset($input['jpeg_quality']) ? $input['jpeg_quality'] : '';

        if (isset($input['convert_images_to_jpeg']) &&
            $input['convert_images_to_jpeg'] != '') {
            $convert_images_to_jpeg = $input['convert_images_to_jpeg'];
            if (!preg_match("/(?i)^(none|opaque|all)$/", $convert_images_to_jpeg))
                add_settings_error(
                'convert_images_to_jpeg',
                'empty_convert_images_to_jpeg',
                pdfcrowd_create_invalid_value_message($convert_images_to_jpeg, 'Convert Images To Jpeg', 'Allowed values are none, opaque, all.'));
            
        }
        $valid['convert_images_to_jpeg'] = isset($input['convert_images_to_jpeg']) ? $input['convert_images_to_jpeg'] : '';

        if (isset($input['image_dpi']) &&
            $input['image_dpi'] != '') {
            $image_dpi = $input['image_dpi'];
            if (!(intval($image_dpi) >= 0))
                add_settings_error(
                'image_dpi',
                'empty_image_dpi',
                pdfcrowd_create_invalid_value_message($image_dpi, 'Image Dpi', 'Must be a positive integer number or 0.'));
            
        }
        $valid['image_dpi'] = isset($input['image_dpi']) ? $input['image_dpi'] : '';

        $valid['linearize'] = (isset($input['linearize']) && !empty($input['linearize'])) ? 1: 0;

        $valid['encrypt'] = (isset($input['encrypt']) && !empty($input['encrypt'])) ? 1: 0;

        $valid['user_password'] = isset($input['user_password']) ? $input['user_password'] : '';

        $valid['owner_password'] = isset($input['owner_password']) ? $input['owner_password'] : '';

        $valid['no_print'] = (isset($input['no_print']) && !empty($input['no_print'])) ? 1: 0;

        $valid['no_modify'] = (isset($input['no_modify']) && !empty($input['no_modify'])) ? 1: 0;

        $valid['no_copy'] = (isset($input['no_copy']) && !empty($input['no_copy'])) ? 1: 0;

        $valid['title'] = isset($input['title']) ? $input['title'] : '';

        $valid['subject'] = isset($input['subject']) ? $input['subject'] : '';

        $valid['author'] = isset($input['author']) ? $input['author'] : '';

        $valid['keywords'] = isset($input['keywords']) ? $input['keywords'] : '';

        if (isset($input['page_layout']) &&
            $input['page_layout'] != '') {
            $page_layout = $input['page_layout'];
            if (!preg_match("/(?i)^(single-page|one-column|two-column-left|two-column-right)$/", $page_layout))
                add_settings_error(
                'page_layout',
                'empty_page_layout',
                pdfcrowd_create_invalid_value_message($page_layout, 'Page Layout', 'Allowed values are single-page, one-column, two-column-left, two-column-right.'));
            
        }
        $valid['page_layout'] = isset($input['page_layout']) ? $input['page_layout'] : '';

        if (isset($input['page_mode']) &&
            $input['page_mode'] != '') {
            $page_mode = $input['page_mode'];
            if (!preg_match("/(?i)^(full-screen|thumbnails|outlines)$/", $page_mode))
                add_settings_error(
                'page_mode',
                'empty_page_mode',
                pdfcrowd_create_invalid_value_message($page_mode, 'Page Mode', 'Allowed values are full-screen, thumbnails, outlines.'));
            
        }
        $valid['page_mode'] = isset($input['page_mode']) ? $input['page_mode'] : '';

        if (isset($input['initial_zoom_type']) &&
            $input['initial_zoom_type'] != '') {
            $initial_zoom_type = $input['initial_zoom_type'];
            if (!preg_match("/(?i)^(fit-width|fit-height|fit-page)$/", $initial_zoom_type))
                add_settings_error(
                'initial_zoom_type',
                'empty_initial_zoom_type',
                pdfcrowd_create_invalid_value_message($initial_zoom_type, 'Initial Zoom Type', 'Allowed values are fit-width, fit-height, fit-page.'));
            
        }
        $valid['initial_zoom_type'] = isset($input['initial_zoom_type']) ? $input['initial_zoom_type'] : '';

        if (isset($input['initial_page']) &&
            $input['initial_page'] != '') {
            $initial_page = $input['initial_page'];
            if (!(intval($initial_page) > 0))
                add_settings_error(
                'initial_page',
                'empty_initial_page',
                pdfcrowd_create_invalid_value_message($initial_page, 'Initial Page', 'Must be a positive integer number.'));
            
        }
        $valid['initial_page'] = isset($input['initial_page']) ? $input['initial_page'] : '';

        if (isset($input['initial_zoom']) &&
            $input['initial_zoom'] != '') {
            $initial_zoom = $input['initial_zoom'];
            if (!(intval($initial_zoom) > 0))
                add_settings_error(
                'initial_zoom',
                'empty_initial_zoom',
                pdfcrowd_create_invalid_value_message($initial_zoom, 'Initial Zoom', 'Must be a positive integer number.'));
            
        }
        $valid['initial_zoom'] = isset($input['initial_zoom']) ? $input['initial_zoom'] : '';

        $valid['hide_toolbar'] = (isset($input['hide_toolbar']) && !empty($input['hide_toolbar'])) ? 1: 0;

        $valid['hide_menubar'] = (isset($input['hide_menubar']) && !empty($input['hide_menubar'])) ? 1: 0;

        $valid['hide_window_ui'] = (isset($input['hide_window_ui']) && !empty($input['hide_window_ui'])) ? 1: 0;

        $valid['fit_window'] = (isset($input['fit_window']) && !empty($input['fit_window'])) ? 1: 0;

        $valid['center_window'] = (isset($input['center_window']) && !empty($input['center_window'])) ? 1: 0;

        $valid['display_title'] = (isset($input['display_title']) && !empty($input['display_title'])) ? 1: 0;

        $valid['right_to_left'] = (isset($input['right_to_left']) && !empty($input['right_to_left'])) ? 1: 0;

        $valid['debug_log'] = (isset($input['debug_log']) && !empty($input['debug_log'])) ? 1: 0;

        $valid['tag'] = isset($input['tag']) ? $input['tag'] : '';

        if (isset($input['http_proxy']) &&
            $input['http_proxy'] != '') {
            $http_proxy = $input['http_proxy'];
            if (!preg_match("/(?i)^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z0-9]{1,}:\d+$/", $http_proxy))
                add_settings_error(
                'http_proxy',
                'empty_http_proxy',
                pdfcrowd_create_invalid_value_message($http_proxy, 'Http Proxy', 'The value must have format DOMAIN_OR_IP_ADDRESS:PORT.'));
            
        }
        $valid['http_proxy'] = isset($input['http_proxy']) ? $input['http_proxy'] : '';

        if (isset($input['https_proxy']) &&
            $input['https_proxy'] != '') {
            $https_proxy = $input['https_proxy'];
            if (!preg_match("/(?i)^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z0-9]{1,}:\d+$/", $https_proxy))
                add_settings_error(
                'https_proxy',
                'empty_https_proxy',
                pdfcrowd_create_invalid_value_message($https_proxy, 'Https Proxy', 'The value must have format DOMAIN_OR_IP_ADDRESS:PORT.'));
            
        }
        $valid['https_proxy'] = isset($input['https_proxy']) ? $input['https_proxy'] : '';

        if (isset($input['client_certificate']) &&
            $input['client_certificate'] != '') {
            $client_certificate = $input['client_certificate'];
            if (!(filesize($client_certificate) > 0))
                add_settings_error(
                'client_certificate',
                'empty_client_certificate',
                pdfcrowd_create_invalid_value_message($client_certificate, 'Client Certificate', 'The file must exist and not be empty.'));
            
        }
        $valid['client_certificate'] = isset($input['client_certificate']) ? $input['client_certificate'] : '';

        $valid['client_certificate_password'] = isset($input['client_certificate_password']) ? $input['client_certificate_password'] : '';

        $valid['use_http'] = (isset($input['use_http']) && !empty($input['use_http'])) ? 1: 0;

        $valid['retry_count'] = isset($input['retry_count']) ? $input['retry_count'] : '';


        return $valid;
    }
}

/**
 *  Create error message for wrong option value
 *
 * @since    1.0.0
 */
if(!function_exists('pdfcrowd_create_invalid_value_message')) {
    function pdfcrowd_create_invalid_value_message($value, $field, $hint) {
        $message = "Invalid value '$value' for an option '$field'.";
        if($hint != null) {
            $message = $message . " " . $hint;
        }
        return $message;
    }
}
