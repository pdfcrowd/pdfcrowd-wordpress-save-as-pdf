<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://pdfcrowd.com/save-as-pdf-wordpress-plugin/
 * @since      1.0.0
 *
 * @package    Save_As_Pdf_Pdfcrowd
 * @subpackage Save_As_Pdf_Pdfcrowd/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Save_As_Pdf_Pdfcrowd
 * @subpackage Save_As_Pdf_Pdfcrowd/public
 * @author     Pdfcrowd <support@pdfcrowd.com>
 */
class Save_As_Pdf_Pdfcrowd_Public {

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
     * The table name for plugin settings.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $table_name    The table name for plugin settings.
     */
    private $table_name;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version, $add_filters = true) {
        global $wpdb;

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->table_name = $wpdb->prefix . "save-as-pdf-pdfcrowd";

        if($add_filters) {
            add_filter('the_content', array(&$this, 'show_button'));
            add_filter('the_excerpt', array(&$this, 'show_button'));
        }
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style($this->plugin_name,
                         plugin_dir_url( __FILE__ ) . 'css/save-as-pdf-pdfcrowd-public.css',
                         array(),
                         $this->version,
                         'all');

        wp_enqueue_style($this->plugin_name . 'indicators',
                         plugin_dir_url( __FILE__ ) . 'css/save-as-pdf-pdfcrowd-indicators.css',
                         array(),
                         $this->version,
                         'all');

            wp_enqueue_style($this->plugin_name . 'components',
                         plugin_dir_url( __FILE__ ) . 'css/save-as-pdf-pdfcrowd-components.css',
                         array(),
                         $this->version,
                         'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        wp_enqueue_script($this->plugin_name,
                          plugin_dir_url( __FILE__ ) . 'js/save-as-pdf-pdfcrowd-public.js',
                          array( 'jquery', 'underscore' ),
                          $this->version,
                          false);

        wp_enqueue_script($this->plugin_name . 'indicators',
                          plugin_dir_url( __FILE__ ) . 'js/save-as-pdf-pdfcrowd-indicators.js',
                          array('jquery'),
                          $this->version,
                          false);

        $components = $this->plugin_name . 'components';
        wp_enqueue_script($components,
                          plugin_dir_url( __FILE__ ) . 'js/save-as-pdf-pdfcrowd-components.js',
                          array('jquery'),
                          $this->version,
                          false);
        $components_translations = array(
            'email_success' => __('Email with PDF has been sent.',
                                  $this->plugin_name),
            'email_fail' => __('Error occurred.',
                               $this->plugin_name),
            'email_prompt' => __('Enter your email:',
                                 $this->plugin_name),
            'ok' => __('Ok',
                       $this->plugin_name),
            'cancel' => __('Cancel',
                           $this->plugin_name)
        );
        wp_localize_script($components,
                           'save_as_pdf_pdfcrowd_i18n',
                           $components_translations);
    }

    public function setup_shortcodes() {
        add_shortcode('save_as_pdf_pdfcrowd',
                      array($this, 'save_as_pdf_pdfcrowd_shortcode'));
        add_shortcode('block_save_as_pdf_pdfcrowd',
                      array($this, 'block_save_as_pdf_pdfcrowd_shortcode'));
        add_action('wp_ajax_save_as_pdf_pdfcrowd', array($this, 'save_as_pdf_pdfcrowd'));
        add_action('wp_ajax_nopriv_save_as_pdf_pdfcrowd', array($this, 'save_as_pdf_pdfcrowd'));
        add_action('wp_head', array($this, 'add_ajaxurl'), 1);
    }

    function add_ajaxurl() { ?>
            <script type="text/javascript">
            //<![CDATA[
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
            //]]>
            </script>
        <?php
    }

    public static $DEFAULTS = array(
        'api_key' => '',
        'auto_use_cookies' => '0',
        'button_alignment' => 'center',
        'button_background_color' => '#007bff',
        'button_border_color' => '#007bff',
        'button_border_style' => 'solid',
        'button_border_width' => '1',
        'button_custom_html' => '',
        'button_custom_indicator' => '',
        'button_disposition' => 'attachment',
        'button_format' => 'image-text',
        'button_hidden' => '1',
        'button_hover' => '1',
        'button_html_hidden' => '0',
        'button_id' => '',
        'button_image' => 'pdf1.svg',
        'button_image_height' => '24',
        'button_image_url' => '',
        'button_image_width' => '24',
        'button_indicator' => 'ellipsis',
        'button_indicator_html' => '<img src="https://storage.googleapis.com/pdfcrowd-cdn/images/spinner.gif"
style="position: absolute; top: calc(50% - 12px); left: calc(50% - 12px);">',
        'button_indicator_timeout' => '60',
        'button_margin_bottom' => '6',
        'button_margin_left' => '6',
        'button_margin_right' => '6',
        'button_margin_top' => '6',
        'button_on_categories' => '1',
        'button_on_front' => '1',
        'button_on_home' => '1',
        'button_on_pages' => '1',
        'button_on_posts' => '1',
        'button_on_taxonomies' => '1',
        'button_padding_bottom' => '6',
        'button_padding_left' => '6',
        'button_padding_right' => '6',
        'button_padding_top' => '6',
        'button_position' => 'below',
        'button_radius' => '3',
        'button_styling' => 'custom',
        'button_text' => 'Save as PDF',
        'button_text_color' => '#ffffff',
        'button_text_size' => '14',
        'button_text_weight' => 'bold',
        'button_translation' => '',
        'button_translation_domain' => '',
        'button_user_drawings' => '0',
        'conversion_mode' => 'url',
        'converter_version' => '20.10',
        'custom_data' => '',
        'dev_mode' => '0',
        'diagnostics' => '0',
        'email_bcc' => '',
        'email_cc' => '',
        'email_custom_dialogs' => '',
        'email_dialogs' => 'modal',
        'email_from' => '',
        'email_message' => '<p>Dear {{user_first_name}} {{user_last_name}},</p>
<p>Please, find {{title}} attached.</p>
<p>Best Regards,<br>
<a href="{{site_url}}">{{site}}</a></p>',
        'email_recipient' => 'user',
        'email_recipient_address' => '',
        'email_subject' => '{{site}} - {{title}} PDF',
        'enable_cookies_opt' => '0',
        'error_page' => '',
        'license_type' => 'demo',
        'no_margins' => '0',
        'output_format' => 'pdf',
        'output_name' => '',
        'pdf_created_callback' => '',
        'rendering_mode' => 'viewport',
        'smart_scaling_mode' => 'viewport-fit',
        'url_lookup' => 'auto',
        'username' => '',
        'version' => '3230',
        'viewport_height' => '15000',
        'viewport_width' => '993',
    );

    private static $API_OPTIONS = array(
        'page_size',
        'page_width',
        'page_height',
        'orientation',
        'margin_top',
        'margin_right',
        'margin_bottom',
        'margin_left',
        'no_margins',
        'print_page_range',
        'page_numbering_offset',
        'content_area_x',
        'content_area_y',
        'content_area_width',
        'content_area_height',
        'css_page_rule_mode',
        'remove_blank_pages',
        'header_url',
        'header_html',
        'header_height',
        'footer_url',
        'footer_html',
        'footer_height',
        'no_header_footer_horizontal_margins',
        'exclude_header_on_pages',
        'exclude_footer_on_pages',
        'header_footer_scale_factor',
        'page_watermark',
        'page_watermark_url',
        'multipage_watermark',
        'multipage_watermark_url',
        'page_background',
        'page_background_url',
        'multipage_background',
        'multipage_background_url',
        'page_background_color',
        'use_print_media',
        'no_background',
        'disable_javascript',
        'disable_image_loading',
        'disable_remote_fonts',
        'use_mobile_user_agent',
        'load_iframes',
        'block_ads',
        'default_encoding',
        'locale',
        'http_auth_user_name',
        'http_auth_password',
        'cookies',
        'verify_ssl_certificates',
        'fail_on_main_url_error',
        'fail_on_any_url_error',
        'no_xpdfcrowd_header',
        'custom_css',
        'custom_javascript',
        'on_load_javascript',
        'custom_http_header',
        'javascript_delay',
        'element_to_convert',
        'element_to_convert_mode',
        'wait_for_element',
        'auto_detect_element_to_convert',
        'readability_enhancements',
        'viewport_width',
        'viewport_height',
        'rendering_mode',
        'smart_scaling_mode',
        'scale_factor',
        'jpeg_quality',
        'convert_images_to_jpeg',
        'image_dpi',
        'enable_pdf_forms',
        'linearize',
        'encrypt',
        'user_password',
        'owner_password',
        'no_print',
        'no_modify',
        'no_copy',
        'title',
        'subject',
        'author',
        'keywords',
        'extract_meta_tags',
        'page_layout',
        'page_mode',
        'initial_zoom_type',
        'initial_page',
        'initial_zoom',
        'hide_toolbar',
        'hide_menubar',
        'hide_window_ui',
        'fit_window',
        'center_window',
        'display_title',
        'right_to_left',
        'data_string',
        'data_file',
        'data_format',
        'data_encoding',
        'data_ignore_undefined',
        'data_auto_escape',
        'data_trim_blocks',
        'data_options',
        'debug_log',
        'tag',
        'http_proxy',
        'https_proxy',
        'client_certificate',
        'client_certificate_password',
        'layout_dpi',
        'contents_matrix',
        'header_matrix',
        'footer_matrix',
        'disable_page_height_optimization',
        'main_document_css_annotation',
        'header_footer_css_annotation',
        'max_loading_time',
        'url',
        'text',
        'file'
    );

    private static $IGNORED_OPTIONS = array(
        '20.10' => array(
        ),
        '18.10' => array(
            'css_page_rule_mode',
            'remove_blank_pages',
            'no_header_footer_horizontal_margins',
            'use_mobile_user_agent',
            'load_iframes',
            'locale',
            'custom_css',
            'auto_detect_element_to_convert',
            'readability_enhancements',
            'layout_dpi',
            'contents_matrix',
            'header_matrix',
            'footer_matrix',
            'disable_page_height_optimization',
            'main_document_css_annotation',
            'header_footer_css_annotation',
            'max_loading_time',
        ),
        'latest' => array()
    );

    private static $DEFAULT_IMAGES = array(
        'pdf1.svg' => 'data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRUE0QzNBIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMzAsMzAgMCwzMCAwLDAgMzAsMCAzMCwzMCAiLz48cGF0aCBkPSJNMTUuMzcyLDQuMzc3ICBjMC40NTIsMC4yMTMsMC4zNTgsMC40ODksMC4yMTksMS43OTNjLTAuMTQyLDEuMzQ1LTAuNjE4LDMuODAyLTEuNTM1LDYuMjE5Yy0wLjkxOCwyLjQxMy0yLjI4LDQuNzg0LTMuNDY3LDYuNTM5ICBjLTEuMTg2LDEuNzU2LTIuMjAxLDIuODk3LTIuOTc1LDMuNTU2Yy0wLjc3NywwLjY1OS0xLjMxNCwwLjgzNS0xLjY2NSwwLjg5M2MtMC4zNDgsMC4wNTgtMC41MDYsMC0wLjYtMC4xNzcgIGMtMC4wOTQtMC4xNzYtMC4xMjctMC40NjYtMC4wNDYtMC44MmMwLjA3OS0wLjM1LDAuMjY4LTAuNzYsMC44MDQtMS4yODVjMC41NDEtMC41MjcsMS40MjYtMS4xNzIsMi42NjEtMS43NzEgIGMxLjIzNS0wLjYsMi44MTctMS4xNTYsNC4xMTYtMS41MzdjMS4yOTktMC4zNzksMi4zMTEtMC41ODUsMy4xOTctMC43NDZjMC44ODgtMC4xNjIsMS42NDctMC4yNzcsMi4zOTEtMC4zMzcgIGMwLjc0NC0wLjA1NiwxLjQ3NC0wLjA1NiwyLjE4NiwwYzAuNzEyLDAuMDYsMS40MDgsMC4xNzUsMi4wMTEsMC4zMjNjMC42LDAuMTQ2LDEuMTA4LDAuMzIxLDEuNTUxLDAuNjAxICBjMC40NDIsMC4yNzYsMC44MjMsMC42NTcsMS4wMTIsMS4wODNjMC4xOTIsMC40MjMsMC4xOTIsMC44OTMsMC4wMzMsMS4yMjhjLTAuMTU4LDAuMzM3LTAuNDc2LDAuNTQxLTAuODM5LDAuNjYgIGMtMC4zNjQsMC4xMTUtMC43NzUsMC4xNDQtMS4yNjcsMGMtMC40OS0wLjE0OC0xLjA2Mi0wLjQ3LTEuNjYyLTAuODk0Yy0wLjYwMS0wLjQyNS0xLjIzNS0wLjk1Mi0yLjA1Ny0xLjc3MSAgYy0wLjgyNC0wLjgxOS0xLjgzOC0xLjkzLTIuNjkyLTMuMDEzYy0wLjg1NC0xLjA4My0xLjU1My0yLjEzNi0yLjAyOC0zLjAyOWMtMC40NzMtMC44OTMtMC43MjctMS42MjQtMC45MzMtMi4zNTUgIGMtMC4yMDYtMC43MzMtMC4zNjQtMS40NjQtMC40MjctMi4xMjJTMTMuMzI2LDYuMTcsMTMuMzksNS43MDFjMC4wNjMtMC40NjYsMC4xNi0wLjgyLDAuMzE3LTEuMDU1ICBjMC4xNTgtMC4yMywwLjM4MS0wLjM1LDAuNTM5LTAuNDA4czAuMjU0LTAuMDU4LDAuMzQ4LTAuMDczYzAuMDk0LTAuMDE1LDAuMTg4LTAuMDQ0LDAuMzMzLDBjMC4xMzgsMC4wNDIsMC4zMjEsMC4xNTQsMC41MDQsMC4yNjgiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjEuNCIvPjwvc3ZnPgo=',
        'pdf2.svg' => 'data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMjgsMjggMSwyOCAxLDEgMjgsMSAyOCwyOCAiLz48Zz48cGF0aCBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zMC4wMTUsMjguNjY3SDBWMGgzMC4wMTVWMjguNjY3IE0yLjg4NCwyNS43ODNoMjQuMjQ0VjIuODg2ICAgSDIuODg0IiBmaWxsPSIjRUE0QzNBIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBkPSJNMTUuNDAxLDQuNDA4ICAgYzAuNDIxLDAuMTgzLDAuMzI3LDAuNDYsMC4xODgsMS43NjJjLTAuMTQzLDEuMzQ5LTAuNjE4LDMuODA2LTEuNTM1LDYuMjE4Yy0wLjkxOCwyLjQxNS0yLjI4LDQuNzg1LTMuNDY3LDYuNTQyICAgYy0xLjE4NSwxLjc1NS0yLjIwMSwyLjg5Ni0yLjk3NCwzLjU1NGMtMC43NzcsMC42NTgtMS4zMTQsMC44MzMtMS42NjUsMC44OTNjLTAuMzQ4LDAuMDYtMC41MDYsMC0wLjYtMC4xNzUgICBzLTAuMTI3LTAuNDctMC4wNDYtMC44MTljMC4wNzktMC4zNTMsMC4yNjgtMC43NjMsMC44MDQtMS4yODdjMC41NDEtMC41MjcsMS40MjYtMS4xNywyLjY2MS0xLjc3MiAgIGMxLjIzNS0wLjU5OSwyLjgxNi0xLjE1Niw0LjExNS0xLjUzNWMxLjI5OS0wLjM4MSwyLjMxMS0wLjU4NSwzLjE5Ny0wLjc0NWMwLjg4OC0wLjE2MSwxLjY0Ny0wLjI3OCwyLjM5LTAuMzM2ICAgYzAuNzQ1LTAuMDYsMS40NzQtMC4wNiwyLjE4NiwwYzAuNzEyLDAuMDU4LDEuNDA5LDAuMTc1LDIuMDExLDAuMzE5YzAuNjAxLDAuMTQ3LDEuMTA4LDAuMzIzLDEuNTUxLDAuNjAyICAgYzAuNDQyLDAuMjc3LDAuODIzLDAuNjU4LDEuMDEyLDEuMDgyYzAuMTkyLDAuNDI1LDAuMTkyLDAuODkzLDAuMDMzLDEuMjI5Yy0wLjE1OCwwLjMzNi0wLjQ3NiwwLjU0Mi0wLjgzOSwwLjY1NyAgIGMtMC4zNjMsMC4xMTctMC43NzUsMC4xNDYtMS4yNjYsMGMtMC40OTEtMC4xNDYtMS4wNjMtMC40NjctMS42NjMtMC44OTNjLTAuNi0wLjQyMy0xLjIzNC0wLjk0OC0yLjA1Ny0xLjc2OCAgIGMtMC44MjMtMC44Mi0xLjgzNy0xLjkzNC0yLjY5MS0zLjAxNWMtMC44NTQtMS4wODMtMS41NTMtMi4xMzYtMi4wMjgtMy4wMjhjLTAuNDczLTAuODkzLTAuNzI3LTEuNjI0LTAuOTMzLTIuMzU3ICAgYy0wLjIwNi0wLjczMS0wLjM2NC0xLjQ2Mi0wLjQyNy0yLjEyYy0wLjA2My0wLjY2LTAuMDMzLTEuMjQ1LDAuMDMxLTEuNzFjMC4wNjMtMC40NywwLjE2LTAuODIsMC4zMTctMS4wNTQgICBjMC4xNTgtMC4yMzUsMC4zODEtMC4zNTIsMC41MzktMC40MWMwLjE1OC0wLjA2LDAuMjU0LTAuMDYsMC4zNDgtMC4wNzNjMC4wOTQtMC4wMTQsMC4xODgtMC4wNDQsMC4zMzMsMCAgIEMxNS4wNjQsNC4yMDksMTUuMjQ4LDQuMzIxLDE1LjQwMSw0LjQwOHoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0VBNEMzQSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjEuNTciLz48L2c+PC9zdmc+Cg==',
        'pdf3.svg' => 'data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMjgsMjggNywyOCA3LDI1IDEsMjUgMSw3IDcsNyA3LDEgMjIsMSAyOCwxMCAyOCwyOCAiLz48Zz48cGF0aCBkPSJNMjguNTk1LDcuNTYybC01LjQzOC02LjMwOWwtMS4wNzgtMS4yNUg5LjIyOGMtMS43MjcsMC0zLjEyNCwxLjM5Ny0zLjEyNCwzLjEyNHYzLjk3MUg4LjA0bC0wLjAwMS0zLjIxICAgYzAuMDA0LTAuOTcxLDAuNzg0LTEuNzU2LDEuNzUyLTEuNzU2bDEwLjk5NC0wLjAxdjUuMjA4YzAuMDAxLDEuOTM5LDEuNTY3LDMuNTEsMy41MDcsMy41MWgzLjgwN0wyNy45MSwyNS44NiAgIGMtMC4wMDQsMC45NjctMC43ODQsMS43NDctMS43NTIsMS43NTRMOS42NTIsMjcuNjA2Yy0wLjg4MywwLTEuNTk0LTAuODY2LTEuNi0xLjkzNVYyNC40SDYuMTE0djEuODk2ICAgYzAsMS45MDcsMS4yNzcsMy40NTUsMi44NDUsMy40NTVsMTcuNzYzLTAuMDA1YzEuNzI2LDAsMy4xMjQtMS40MDQsMy4xMjQtMy4xMjZWOS4wMTZMMjguNTk1LDcuNTYyIiBmaWxsPSIjNDM0NDQwIi8+PHBhdGggZD0iTTIwLjE0NSwyNS4zNjhIMFY2LjEyOWgyMC4xNDVWMjUuMzY4IE0xLjkzNCwyMy40MzJoMTYuMjc0VjguMDY1SDEuOTM0IiBmaWxsPSIjRUE0QzNBIi8+PHBhdGggZD0iTTEwLjMxNCw5LjA2OSAgIGMwLjMwNSwwLjE0MSwwLjI0MiwwLjMyOCwwLjE0OCwxLjIwMWMtMC4wOTcsMC45MDUtMC40MTQsMi41NTQtMS4wMzIsNC4xNzNjLTAuNjE2LDEuNjIyLTEuNTI5LDMuMjEtMi4zMjUsNC4zOSAgIGMtMC43OTcsMS4xNzgtMS40NzgsMS45NDMtMS45OTgsMi4zODZjLTAuNTE5LDAuNDQxLTAuODgyLDAuNTU5LTEuMTE1LDAuNTk5Yy0wLjIzMywwLjA0LTAuMzM5LDAtMC40MDUtMC4xMTcgICBjLTAuMDYzLTAuMTE4LTAuMDg0LTAuMzE1LTAuMDMxLTAuNTUxYzAuMDUzLTAuMjM0LDAuMTgxLTAuNTEsMC41NDItMC44NjNjMC4zNi0wLjM1NCwwLjk1Ni0wLjc4NSwxLjc4NS0xLjE4OCAgIGMwLjgyOS0wLjQwMiwxLjg5MS0wLjc3NSwyLjc2Mi0xLjAzMXMxLjU1MS0wLjM5MywyLjE0Ni0wLjVjMC41OTUtMC4xMDgsMS4xMDQtMC4xODcsMS42MDQtMC4yMjZjMC41LTAuMDQsMC45ODgtMC4wNCwxLjQ2NywwICAgYzAuNDc4LDAuMDM5LDAuOTQ1LDAuMTE3LDEuMzQ4LDAuMjE2YzAuNDA2LDAuMDk3LDAuNzQ1LDAuMjE3LDEuMDQyLDAuNDAyYzAuMjk5LDAuMTg3LDAuNTUyLDAuNDQxLDAuNjgxLDAuNzI2ICAgYzAuMTI3LDAuMjg2LDAuMTI3LDAuNiwwLjAyMSwwLjgyNWMtMC4xMDUsMC4yMjctMC4zMTgsMC4zNjQtMC41NjMsMC40NDFjLTAuMjQ2LDAuMDgtMC41MjIsMC4wOTktMC44NTEsMCAgIGMtMC4zMy0wLjA5OC0wLjcxMi0wLjMxNC0xLjExNS0wLjU5OWMtMC40MDQtMC4yODQtMC44MjktMC42MzgtMS4zODEtMS4xODdjLTAuNTUzLTAuNTUxLTEuMjMyLTEuMjk4LTEuODA3LTIuMDIzICAgYy0wLjU3My0wLjcyNy0xLjA0MS0xLjQzNC0xLjM1OC0yLjAzM2MtMC4zMTktMC41OTktMC40ODktMS4wOS0wLjYyNy0xLjU4MmMtMC4xMzgtMC40OTEtMC4yNDQtMC45OC0wLjI4Ny0xLjQyMiAgIGMtMC4wNDMtMC40NDMtMC4wMjEtMC44MzcsMC4wMjEtMS4xNDljMC4wNDItMC4zMTUsMC4xMDYtMC41NSwwLjIxMy0wLjcwOGMwLjEwNi0wLjE1NywwLjI1Ni0wLjIzNSwwLjM2Mi0wLjI3NSAgIHMwLjE2OS0wLjA0LDAuMjM0LTAuMDQ5YzAuMDYzLTAuMDA5LDAuMTI2LTAuMDI5LDAuMjIyLDBjMC4wOTQsMC4wMywwLjIxNiwwLjEwNCwwLjM0LDAuMTgiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0VBNEMzQSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjAuNzUiLz48L2c+PC9zdmc+Cg==',
        'pdf4.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAiIGhlaWdodD0iMjciIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTIuNTA5IDAuODR2Ni4yNjU3bDUuNzU0MSAwLjEwNDE0eiIgZmlsbD0iIzY5Njk2OSIgc3Ryb2tlLXdpZHRoPSIwIi8+PGcgdHJhbnNmb3JtPSJtYXRyaXgoMS4wMTE4IDAgMCAxLjAxMDYgLTIuMTYyMSAtMy4yMDI0KSIgZmlsbC1ydWxlPSJldmVub2RkIj48cG9seWxpbmUgcG9pbnRzPSIyMC41IDI5IDMgMjkgMyA0IDE0LjUgNCAxNC41IDEwLjIgMjAuNSAxMC4yIDIwLjUgMjkiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PHBvbHlsaW5lIHBvaW50cz0iMjAgMTQgMzEgMTQgMzEgMjUgMjAgMjUiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PGcgaWQ9Imljb24tNzAtZG9jdW1lbnQtZmlsZS1wZGYiIGZpbGw9IiM5MjkyOTIiPjxwYXRoIGlkPSJkb2N1bWVudC1maWxlLXBkZiIgZD0ibTI1IDE5di0yaDR2LTFoLTV2N2gxdi0zaDN2LTF6bS0xMy0xdjVoMXYtM2gxLjk5NTFjMS4xMDczIDAgMi4wMDQ5LTAuODg3NzMgMi4wMDQ5LTIgMC0xLjEwNDYtMC44OTM5LTItMi4wMDQ5LTJoLTIuOTk1MXptMS0xdjJoMi4wMDFjMC41NTE3MSAwIDAuOTk4OTYtMC40NDM4NiAwLjk5ODk2LTEgMC0wLjU1MjI4LTAuNDQyNjYtMS0wLjk5ODk2LTF6bTUtMXY3aDIuOTk1MWMxLjEwNzMgMCAyLjAwNDktMC44ODY1NiAyLjAwNDktMi4wMDU5di0yLjk4ODJjMC0xLjEwNzgtMC44OTM5LTIuMDA1OS0yLjAwNDktMi4wMDU5em0xIDF2NWgyLjAwMWMwLjU1MTcxIDAgMC45OTg5Ni0wLjQ0MzcyIDAuOTk4OTYtMC45OTk4MXYtMy4wMDA0YzAtMC41NTIxOC0wLjQ0MjY2LTAuOTk5ODEtMC45OTg5Ni0wLjk5OTgxeiIgZmlsbD0iI2VhNGMzYSIvPjwvZz48L2c+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjkuNjc1IC0uMSkiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgZmlsbD0iIzkyOTI5MiI+PHBhdGggZD0ibS0xMC42NzUgMTAuMXYtM2wtNi03aC0xMC45OTdjLTEuMTA2MSAwLTIuMDAyOCAwLjg5ODM0LTIuMDAyOCAyLjAwNzN2MjIuOTg1YzAgMS4xMDg2IDAuODkwOTIgMi4wMDczIDEuOTk3NCAyLjAwNzNoMTUuMDA1YzEuMTAzMSAwIDEuOTk3NC0wLjg5ODIxIDEuOTk3NC0xLjk5MDh2LTIuMDA5Mmg3Ljk5MzJjMS42NjA2IDAgMy4wMDY4LTEuMzQyMyAzLjAwNjgtMi45OTg4di03LjAwMjRjMC0xLjY1NjItMS4zMzYtMi45OTg4LTMuMDA2OC0yLjk5ODh6bS0xIDEzdjIuMDA2NmMwIDAuNTQ4NDUtMC40NDc3IDAuOTkzNC0wLjk5OTk2IDAuOTkzNGgtMTVjLTAuNTQ1MjUgMC0wLjk5OTk2LTAuNDQ1NjgtMC45OTk5Ni0wLjk5NTQ2di0yMy4wMDljMC0wLjU0MDE5IDAuNDQ1NzQtMC45OTU0NiAwLjk5NTU4LTAuOTk1NDZoMTAuMDA0djQuOTk0MWMwIDEuMTE5NCAwLjg5NDUgMi4wMDU5IDEuOTk3OSAyLjAwNTloNC4wMDIxdjJoLTcuOTkzMmMtMS42NjA2IDAtMy4wMDY4IDEuMzQyMy0zLjAwNjggMi45OTg4djcuMDAyNGMwIDEuNjU2MiAxLjMzNiAyLjk5ODggMy4wMDY4IDIuOTk4OHptLTUtMjEuNXY0LjQ5MTJjMCAwLjU1NzE0IDAuNDUwNjUgMS4wMDg4IDAuOTk2NzQgMS4wMDg4aDMuNzAzMnptLTMuMDA1NCA5LjVjLTEuMTAxNiAwLTEuOTk0NiAwLjkwMDE4LTEuOTk0NiAxLjk5MnY3LjAxNmMwIDEuMTAwMiAwLjkwMjM0IDEuOTkyIDEuOTk0NiAxLjk5MmgxNy4wMTFjMS4xMDE2IDAgMS45OTQ2LTAuOTAwMTggMS45OTQ2LTEuOTkydi03LjAxNmMwLTEuMTAwMi0wLjkwMjM0LTEuOTkyLTEuOTk0Ni0xLjk5MnoiLz48L2c+PC9nPjxwYXRoIGQ9Im0zLjE1OTggNC4xMzY3aDciIGZpbGw9IiM2OTY5NjkiIHN0cm9rZT0iIzY5Njk2OSIgc3Ryb2tlLXdpZHRoPSIxcHgiLz48cGF0aCBkPSJtNC4xNTk4IDcuMTM2N2g2IiBmaWxsPSIjNjk2OTY5IiBzdHJva2U9IiM2OTY5NjkiIHN0cm9rZS13aWR0aD0iMXB4Ii8+PC9zdmc+Cg==',
        'pdfcrowd.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K',
    );

    private static $ERROR_MESSAGES = array(
        400 => "The client sent an invalid request.",
        401 => "Authentication credentials were not provided or the API license is not active.",
        403 => "The API service is suspended or there are no credits left.",
        405 => "The method specified in the request is not allowed. The request method must be POST.",
        413 => "<p>The upload size limit is 300MB.</p> <p>You can zip uploaded HTML to avoid this error.</p>",
        429 => "<p>The client has sent too many requests within a certain timeframe (rate limiting).</p> <p>Upgrade to a higher Pdfcrowd API plan to avoid this error.</p>",
        430 => "<p>The client has sent too many concurrent requests at a time.</p> <p>Upgrade to a higher Pdfcrowd API plan to avoid this error.</p>",
        432 => "<p>The limit for the demo license has been exceeded.</p> <p>Use your personal Pdfcrowd API credentials.</p>",
        452 => "There is no input specified to be converted.",
        453 => "Unknown conversion option. See details in the HTTP response body.",
        454 => "The input is too complex or large. It can not be converted. Try to simplify the input data.",
        455 => "The conversion can not be completed due to a system error.",
        456 => "The input file is not specified correctly. Multipart/form-data is required for file upload.",
        457 => "The type of the input file is unknown. The file has no extension.",
        458 => "<p>The request was aborted because it took a long time.</p> <p>The typical cause of this error is too many images in an HTML page that take too long to download. Another cause might be a long running JavaScript.</p> <p>Try to simplify your input data or speed up the page load time.</p>",
        459 => "The uploaded archive can not be processed. It is too large, corrupted or contains symbolic links.",
        470 => "A conversion option is set to an invalid value.",
        471 => "The input URL can not be loaded.",
        472 => "Exceeded the maximum number of subrequests during the conversion.",
        473 => "The main frame failed with HTTP code >= 400.",
        474 => "One or more subrequests failed with HTTP code >= 400 or some subrequests are still pending. See details in the debug log.",
        475 => "The request was aborted because the custom JavaScript took a long time.",
        476 => "The element specified for printing or waiting for was not found in the input document.",
        477 => "The input document type is unknown or not supported. For example, the HTML content type should be text/html.",
        478 => "The URL hostname could not be resolved.",
        479 => "The URL is invalid.",
        480 => "The converter could not establish an HTTPS connection because of an invalid SSL certificate.",
        481 => "<p>There was a problem connecting to Pdfcrowd servers over HTTPS. This could be caused by several reasons, one of them is that your local CA certificate store is out of date or not configured correctly.</p> <p>An alternative is to use the API over HTTP. The HTTP mode can be enabled by the <a href='/api/method-index/#html_to_pdf_set_use_http'>setUseHttp</a> method.<p>",
        482 => "The input template or data is invalid.",
        483 => "The input is password protected. Provide a valid password.",
        484 => "The input contains an unsupported feature, typically a font type.",
        485 => "An error occurred while executing the OnLoad JavaScript. See details in the debug log.",
        503 => "The 503 status code indicates a temporary network issue. Try the request again.",
    );

    public static function get_options() {
        $options = get_option('save-as-pdf-pdfcrowd', self::$DEFAULTS);

        if(!isset($options['version'])) {
            if(isset($options['dev_mode']) && $options['dev_mode']) {
                $options['conversion_mode'] = 'development';
            } else {
                $options['conversion_mode'] = 'auto';
            }
            $options['version'] = 1000;
        }

        if($options['version'] == 3230) {
            return $options;
        }

        if($options['version'] < 2000) {
            $options['converter_version'] = '18.10';
        }

        $options['enable_cookies_opt'] = (
            $options['version'] < 2140 &&
            (!empty($options['auto_use_cookies']) ||
             !empty($options['use_http']))) ? 1 : 0;

        if($options['version'] < 2110) {
            if(empty($options['username']) || $options['username'] === 'demo') {
                $options['license_type'] = 'demo';
            } else {
                $options['license_type'] = 'regular';
            }
        }

        if($options['version'] < 2600) {
            $options['url_lookup'] = 'location';
        }

        $options['version'] = 3230;
        if(!isset($options['button_indicator_html'])) {
            $options['button_indicator_html'] = '<img src="https://storage.googleapis.com/pdfcrowd-cdn/images/spinner.gif"
style="position: absolute; top: calc(50% - 12px); left: calc(50% - 12px);">';
        }
        update_option('save-as-pdf-pdfcrowd', $options);

        return $options;
    }

    private static function rect_to_style($prefix, $options) {
        $result = '';
        foreach(array('top', 'right', 'bottom', 'left') as $d) {
            $value = $options["button_{$prefix}_{$d}"];
            if(strlen($value)) {
                $result .= "{$prefix}-{$d}: {$value}px; ";
            }
        }
        return $result;
    }

    public static function get_button_text($options) {
        if(!isset($options['button_translation']) ||
           !$options['button_translation']) {
            return isset($options['button_text']) ?
                $options['button_text'] : '';
        }
        $text = $options['button_text'];
        if($options['button_translation'] == 'domain') {
            return translate($text,
                             isset($options['button_translation_domain'])
                             ? $options['button_translation_domain']
                             : '');
        }

        // try to find the translation
        global $l10n;
        $domains = $l10n ? array_keys( $l10n ) : array();
        foreach($domains as $domain) {
            $result = translate($text, $domain);
            if($result != $text) {
                return $result;
            }
        }

        return $text;
    }

    private static function string_subst($format, $args) {
        $names = preg_match_all('/\{\{\s*(.*?)\s*\}\}/',
                                $format,
                                $matches, PREG_SET_ORDER);
        $values = array();
        foreach($matches as $match) {
            $values[] = $args[$match[1]];
        }
        $format = preg_replace('/\{\{(.*?)\}\}/', '%s', $format);
        return vsprintf($format, $values);
    }

    private static function get_email_config($options) {
        $dialogs = 'SaveAsPDFPdfcrowdComponents.email.system';
        if(isset($options['email_dialogs'])) {
            if($options['email_dialogs'] == 'custom') {
                $dialogs = isset($options['email_custom_dialogs'])
                         ? $options['email_custom_dialogs']
                         : '';
            } else {
                $dialogs = 'SaveAsPDFPdfcrowdComponents.email.' . $options['email_dialogs'];
            }
        }
        $recipient = '';
        if(isset($options['email_recipient']) &&
           $options['email_recipient'] != 'address') {
            $recipient = is_user_logged_in()
                       ? $options['email_recipient']
                       : 'prompt';
        }
        return array('dialogs' => $dialogs, 'recipient' => $recipient);
    }

    public static function create_button_from_style(
        $options, $custom_options='', $content='', $pflags='', $enc_data='""') {
        $image = '';
        if(strpos($options['button_format'], 'image') !== false) {
            if($options['button_image'] == 'custom_html') {
                $image = $options['button_custom_html'];
            }
            else if($options['button_image'] != 'custom_image' || $options['button_image_url']) {
                $image_style = "style='width: {$options['button_image_width']}px; height: {$options['button_image_height']}px;'";
                $image_url = $options['button_image'] == 'custom_image' ? $options['button_image_url'] : self::$DEFAULT_IMAGES[$options['button_image']];
                $image = "<img $image_style src=\"$image_url\"/>";
            }
        }

        $config = array();
        $custom_indicator = false;
        $config['indicator'] = isset($options['button_indicator'])
                             ? $options['button_indicator']
                             : '';
        $config['indicator_timeout'] = !empty($options['button_indicator_timeout'])
                                     ? $options['button_indicator_timeout']
                                     : '60';
        if($config['indicator'] == 'custom') {
            $custom_indicator = true;
            $config['indicator'] = isset($options['button_custom_indicator'])
                                 ? $options['button_custom_indicator']
                                 : '';
        } else if($config['indicator']) {
            $config['indicator'] = 'SaveAsPDFPdfcrowdIndicators.' . $config['indicator'];
        }

        $btn_style = self::rect_to_style('margin', $options);

        $classes = 'save-as-pdf-pdfcrowd-button-wrap';
        $btn_classes = 'save-as-pdf-pdfcrowd-button';
        if(isset($options['button_hidden']) && $options['button_hidden'] == 1) {
            $classes .= ' pdfcrowd-remove';
        }
        if($options['button_styling'] == 'custom') {
            $btn_style .= self::rect_to_style('padding', $options);
            if(strlen($options['button_text_size'])) {
                $btn_style .= "font-size: {$options['button_text_size']}px; ";
            }
            if(strlen($options['button_text_weight'])) {
                $btn_style .= "font-weight: {$options['button_text_weight']}; ";
            }
            if(strlen($options['button_text_color'])) {
                $btn_style .= "color: {$options['button_text_color']}; ";
            }
            if(strlen($options['button_background_color'])) {
                $btn_style .= "background-color: {$options['button_background_color']}; ";
            }
            if(strlen($options['button_border_color'])) {
                $btn_style .= "border-color: {$options['button_border_color']}; ";
            }
            if(strlen($options['button_border_style'])) {
                $btn_style .= "border-style: {$options['button_border_style']}; ";
            }
            if(strlen($options['button_border_width'])) {
                $btn_style .= "border-width: {$options['button_border_width']}px; ";
            }
            if(strlen($options['button_radius'])) {
                $btn_style .= "border-radius: {$options['button_radius']}px; ";
            }
            if(isset($options['button_hover']) && $options['button_hover'] == 1) {
                $btn_classes .= $custom_indicator
                             ? ' save-as-pdf-pdfcrowd-has-indicator-func'
                             : ' save-as-pdf-pdfcrowd-button-hoverable';
            }
            $classes .= ' save-as-pdf-pdfcrowd-reset';
        }

        $div_style = '';
        if(isset($options['button_html_hidden']) &&
           $options['button_html_hidden'] == 1) {
            $div_style = 'display: none !important;';
        }
        $button_tag = 'div';
        if($options['button_alignment']) {
            $div_style .= "text-align: {$options['button_alignment']}; ";
        }
        if($options['button_position'] == 'left') {
            $div_style .= "float: left; ";
        } elseif($options['button_position'] == 'right') {
            $div_style .= "float: right; ";
        } elseif($options['button_position'] == 'inline') {
            $button_tag = 'span';
        }

        if(!empty($btn_style)) {
            $btn_style = " style='{$btn_style}'";
        }
        if(!empty($div_style)) {
            $div_style = " style='{$div_style}'";
        }

        if(isset($options['button_disposition'])) {
            if($options['button_disposition'] == 'inline_new_tab') {
                $config['target'] = '_blank';
            } else if($options['button_disposition'] == 'email') {
                $config['email'] = self::get_email_config($options);
            }
        }

        if(isset($options['button_user_drawings']) &&
           $options['button_user_drawings']) {
            $config['persistent_canvases'] = '1';
        }

        $config = json_encode($config);

        $button_id = !empty($options['button_id']) ?
                   "id='" . $options['button_id'] . "'" : '';

        $button = "<{$button_tag} class='$classes'{$div_style}><{$button_tag} {$button_id} class='{$btn_classes}'{$btn_style} onclick='window.SaveAsPDFPdfcrowd(\"$custom_options\", $enc_data, $config, this);' data-pdfcrowd-flags='{$pflags}'>";

        $button_content = '';
        switch($options['button_format']) {
        case 'image-text':
            $button_content = $image . '&nbsp;' .
                            self::get_button_text($options);
            break;
        case 'text-image':
            $button_content = self::get_button_text($options)
                            . '&nbsp;' . $image;
            break;
        case 'text':
            $button_content = self::get_button_text($options);
            break;
        case 'image':
            $button_content = $image;
            break;
        }

        if(!empty($options['button_indicator']) &&
           $options['button_indicator'] == 'html' &&
           isset($options['button_indicator_html'])) {
            $button_content .= "<{$button_tag} class='save-as-pdf-pdfcrowd-ind save-as-pdf-pdfcrowd-ind-in' style='display: none !important;'>" .
                            $options['button_indicator_html'] . "</{$button_tag}>";
        }

        $button .= $button_content . "</{$button_tag}></{$button_tag}>";

        if(!empty($options['_diag'])) {
            $button = $options['_diag'] . $button;
        }

        if($options['button_position'] == 'below') {
            return $content . $button;
        }
        return $button . $content;
    }

    private static function diagnostics_options($options, $title) {
        if(empty($options)) return '';

        $data = '<table class="save-as-pdf-pdfcrowd-diag-tab">';
        foreach($options as $key => $value) {
            $data .= "<tr><th>{$key}</th><td>" . esc_html($value) . '</td></tr>';
        }
        $data .= "</table>";
        return "<h4>{$title}</h4>" . $data;
    }

    private function get_diagnostics($options, $custom_options, $pflags, $mode) {
        if(!isset($options['diagnostics']) || $options['diagnostics'] != 1) {
            return '';
        }

        $diag = '<div class="save-as-pdf-pdfcrowd-diag"><h3>Pdfcrowd Diagnostics</h3>';

        if(!empty($custom_options['api_key'])) {
            $custom_options['api_key'] = '- secret -';
        }
        $diag .= self::diagnostics_options(
            $custom_options, 'Custom options');

        $d_config = self::prepare_conv(
            wp_parse_args($custom_options, $options));
        $diag .= self::diagnostics_options(
            $d_config['fields'], 'API options');
        $diag .= self::diagnostics_options(
            $d_config['files'], 'API files');

        $created_by = '';
        switch($pflags) {
        case 'sc': $created_by = 'shortcode'; break;
        case 'bsc': $created_by = 'block shortcode'; break;
        case 'fn': $created_by = 'function'; break;
        case 'auto': $created_by = 'show button on'; break;
        }

        global $wp_version;
        $diag .= self::diagnostics_options(
            array(
                'created by' => $created_by,
                'conversion mode' => $mode,
                'url lookup' => $options['url_lookup'],
                'url home' => home_url(),
                'url args' => add_query_arg(NULL, NULL),
                'url check' => empty($custom_options['permalink']) || (
                    parse_url(home_url(), PHP_URL_HOST) ==
                    parse_url($custom_options['permalink'], PHP_URL_HOST)),
                'converter version' => $d_config['converter_version'],
                'plugin version' => $this->version,
                'wp version' => $wp_version,
                'settings version' => $options['version'],
                'pdfcrowd license' => $options['license_type'],
                'pdfcrowd username' => isset($options['username'])
                ? $options['username'] : '',
                'home page' => is_home(),
                'front page' => is_front_page(),
                'page' => is_page(),
                'single' => is_single(),
                'category' => is_category(),
                'taxonomy' => is_tax(),
            ), 'Extra');

        return $diag . '</div>';
    }

    private function create_button($options, $custom_options, $content='',
        $pflags='') {

        $mode = '';
        if(isset($custom_options['conversion_mode'])) {
            $mode = $custom_options['conversion_mode'];
        } else if(isset($options['conversion_mode'])) {
            $mode = $options['conversion_mode'];
        }

        $options['_diag'] = $this->get_diagnostics(
            $options, $custom_options, $pflags, $mode);

        $enc_data = '""';
        if($mode == 'content') {
            // uncommment if you wish to disable page cache
            // for content conversion mode
            // if(!defined('DONOTCACHEPAGE')) {
            //     define('DONOTCACHEPAGE', true);
            // }

            if(!$custom_options) {
                $custom_options = array();
            }
            // add some features to detect valid content
            // token is valid for 2 days
            $custom_options['_time'] = time() + 60 * 60 * 24 * 2;
            $custom_options['_token'] = rand();
            $date_index = (date('z', $custom_options['_time']) + 22) % 30;
            $enc_data = '[' . $custom_options['_token'] . ', ' .
                      $date_index . ']';
        }

        // prepare strings for emails
        if(isset($options['email_subject']) ||
           isset($custom_options['email_message'])) {
            if(!$custom_options) {
                $custom_options = array();
            }
            $custom_options['email_data'] = json_encode(array(
                'title' => get_the_title()
            ));
        }

        // serialize custom attributes to string
        if($custom_options) {
            $custom_options['pflags'] = $pflags;
            $custom_options = $this->encrypt(
                serialize($custom_options), $options['api_key']);
        } else {
            $custom_options = '';
        }

        return $this->create_button_from_style(
            $options,
            urlencode($custom_options),
            $content, $pflags, $enc_data);
    }

    private function get_permalink_with_params() {
        return isset($_GET) ?
            add_query_arg($_GET, get_permalink()) : get_permalink();
    }

    function show_button($content) {
        $options = $this->get_options();

        if(!(
            (is_home() && isset($options['button_on_home']) && $options['button_on_home']) ||
            (is_front_page() && isset($options['button_on_front']) && $options['button_on_front']) ||
            (!is_home() && !is_front_page() && is_page() && isset($options['button_on_pages']) && $options['button_on_pages']) ||
            (is_single() && isset($options['button_on_posts']) && $options['button_on_posts']) ||
            (is_category() && isset($options['button_on_categories']) && $options['button_on_categories']) ||
            (is_tax() && isset($options['button_on_taxonomies']) && $options['button_on_taxonomies'])
        )) return $content;

        $custom_options = array(
            'permalink' => $this->get_permalink_with_params());
        if(!empty($options['url_lookup'])) {
            if($options['url_lookup'] === 'auto') {
                // use permalinks for posts on the post lists
                if(is_front_page() && is_home()) {
                    $custom_options['url_lookup'] = 'permalink';
                }
            }
        }
        return $this->create_button($options, $custom_options, $content, 'auto');
    }

    private function eval_shortcode($attrs, $content, $custom_options,
                                    $pflags = '') {
        // merge attrs with the default options defined on the settings page
        $options = $this->get_options();

        if($attrs) {
            foreach($attrs as $key => $value) {
                if(is_string($key)) {
                    // accept only string keys
                    if(self::starts_with($key, 'button_')) {
                        if($key == 'button_disposition') {
                            // button disposition is required in
                            // coversion too
                            $custom_options[$key] = $value;
                        }
                        $options[$key] = $value;
                    } else {
                        if(self::starts_with($key, 'email_')) {
                            // email settings are used for GUI too
                            // so store them in both dicts
                            $options[$key] = $value;
                        }
                        $custom_options[$key] = $value;
                    }
                }
            }
        }

        return $this->create_button($options, $custom_options, $content,
                                    $pflags);
    }

    function save_as_pdf_pdfcrowd_shortcode($attrs = array(), $content = null) {
        return $this->save_as_pdf_pdfcrowd_shortcode_fn($attrs, $content, 'sc');
    }

    function save_as_pdf_pdfcrowd_shortcode_fn($attrs, $content, $pflags) {
        $custom_options = array();
        if(!$attrs || !isset($attrs['url'])) {
            // remember permalink for url conversion
            $custom_options['permalink'] = $this->get_permalink_with_params();
        }
        return $this->eval_shortcode($attrs, $content, $custom_options, $pflags);
    }

    function block_save_as_pdf_pdfcrowd_shortcode($attrs = array(), $content = null) {
        // run shortcode parser recursively
        $content = do_shortcode($content);

        $custom_options = array('text' => $content);
        if(!$attrs || !isset($attrs['url'])) {
            // add url so default name can be created
            $custom_options['permalink'] = $this->get_permalink_with_params();
        }
        return $this->eval_shortcode($attrs, $content, $custom_options, 'bsc');
    }

    private static function get_url(
        $options, $url, $args, $throw_error = false, $throw_on_400 = false) {
        $response = wp_remote_get($url, $args);
        $msg = '';
        if(is_wp_error($response)) {
            $msg = $response->get_error_message() . ' ' . $url;
            error_log("Pdfcrowd: failed to get URL {$url}. " . $msg);
            if($throw_error) {
                if(empty($options['error_page'])) {
                    $msg = self::prepare_error_message(
                        471, $msg, '<b>"URL" or "Content"</b>') .
                         '<p>Or check your network and PHP configuration.</p>';
                } else {
                    $msg .= ' Please, check your network.';
                }
                return new WP_Error(471, $msg);
            }
            return '';
        }

        if($throw_on_400) {
            $status_code = wp_remote_retrieve_response_code($response);
            if($status_code && $status_code >= 400) {
                if(empty($options['error_page'])) {
                    $msg = self::prepare_error_message(473, 'URL Load Error') .
                         "<p>Failed url is <a href='$url'>$url</a> with status $status_code.</p>" .
                         '<h3>Response</h3><div style="background-color: #eee">' . wp_remote_retrieve_body($response) .
                         '</div>';
                } else {
                    $msg = "URL Load Error $status_code: $url";
                }
                return new WP_Error(473, $msg);
            }
        }
        return wp_remote_retrieve_body($response);
    }

    private static function embed_styles($options, $html, $site, $args) {
        $protocol = !empty($_SERVER['HTTPS']) ? 'https' : 'http';

        $output = preg_replace_callback(
            "`(?i)\<link rel=[\'\"]stylesheet[\'\"](?<pre>.*?)href=[\'\"](?<url>(?:http:|https:)?\/\/{$site}.*?)[\'\"](?<post>.*?)\s*\/\s*\>`",
            function ($match) use($options, $args) {
                $url = $match['url'];
                if(!self::starts_with($url, 'http')) {
                    $url = $protocol . ':' . $url;
                }
                $content = self::get_url($options, $url, $args);
                if(is_wp_error($content)) {
                    return $content;
                }
                return '<style ' . $match['pre'] . $match['post'] . ">\r\n" . $content . '</style>';
            },
            $html);
        return $output ? $output : $html;
    }

    private static function add_missing_protocol($html) {
        $protocol = !empty($_SERVER['HTTPS']) ? 'https' : 'http';

        $output = preg_replace(
            "`(?im)(\<(?:a|img|link|iframe|input|body|base|script|embed)\s+[^\>]*(?:src|href|background)\s*=\s*[\'\"])(?:\/\/)`",
            '$1' . $protocol . '://',
            $html);
        return $output ? $output : $html;
    }


    private function get_output_name($options) {
        if(isset($options['output_name']) &&
           $options['output_name']) return $options['output_name'];

        // create the default file name
        $i = -1;
        if(isset($options['url'])) {
            $page_name = explode('/', $options['url']);
            $i = count($page_name) - 1;
            while($i >= 0) {
                $part = explode('#', explode('?', $page_name[$i])[0])[0];
                if($part != '') {
                    $page_name = $part;
                    break;
                }
                --$i;
            }
        }
        if($i < 0) {
            $page_name = 'generated';
        } else {
            $page_name = rawurldecode($page_name);
        }
        $format = isset($options['output_format']) ? $options['output_format'] : 'pdf';
        return $page_name . ".{$format}";
    }

    private static function add_file_field($name, $file_name, $data, $boundary, &$body) {
        $body .= "--" . $boundary . "\r\n";
        $body .= 'Content-Disposition: form-data; name="' . $name . '";' . ' filename="' . $file_name . '"' . "\r\n";
        $body .= 'Content-Type: application/octet-stream' . "\r\n";
        $body .= "\r\n";
        $body .= $data . "\r\n";
    }

    private static function build_body($fields, $files, $boundary) {
        $body = '';

        foreach ($fields as $name => $content) {
            $body .= "--" . $boundary . "\r\n";
            $body .= 'Content-Disposition: form-data; name="' . $name . '"' . "\r\n\r\n";
            $body .= $content . "\r\n";
        }

        foreach ($files as $name => $file_name) {
            self::add_file_field($name, $file_name,
                                 file_get_contents($file_name),
                                 $boundary,
                                 $body);
        }

        return $body . "--" . $boundary . "--\r\n";
    }

    private static function starts_with($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }

    private static function strip_https($url) {
        $https = array('http://', 'https://');
        foreach($https as $schema) {
            if(strpos($url, $schema) === 0) {
                return str_replace($schema, '', $url);
            }
        }
        return $url;
    }

    private static function collect_cookies() {
        $cookies = array();
        foreach($_COOKIE as $name => $value) {
            $cookies[] = new WP_Http_Cookie(
                array('name' => $name, 'value' => $value));
        }
        return $cookies;
    }

    private static function use_connection_args($options, &$args) {
        $headers = array();
        if(isset($options['http_auth_user_name']) and
           $options['http_auth_user_name'] and
           isset($options['http_auth_password']) and
           $options['http_auth_password']) {
            $headers['Authorization'] = 'Basic ' . base64_encode(
                $options['http_auth_user_name'] . ':' .
                $options['http_auth_password']);
        }

        if(isset($options['cookies']) and $options['cookies']) {
            if(!isset($args['cookies'])) {
                $args['cookies'] = array();
            }

            foreach(explode(';', $options['cookies']) as $cookie) {
                $vals = explode('=', $cookie, 2);
                if(count($vals) == 2) {
                    $args['cookies'][$vals[0]] = $vals[1];
                }
            }
        }

        if(isset($options['use_mobile_user_agent']) &&
           $options['use_mobile_user_agent'] == 1) {
            $headers['User-Agent'] = 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36';
        }
        $args['headers'] = $headers;
    }

    public static function do_post_request($options) {
        if($options['conversion_mode'] != 'url' && !isset($options['file'])) {
            $html = null;
            $args = array('sslverify' => false);
            $site = self::strip_https(get_site_url());

            if(isset($options['text'])) {
                $html = $options['text'];
                $args['cookies'] = self::collect_cookies();
            } else {
                if($site) {
                    $url_site = self::strip_https($options['url']);

                    if(self::starts_with($url_site, $site)) {
                        $args['cookies'] = self::collect_cookies();
                    }
                }

                self::use_connection_args($options, $args);

                $html = self::get_url(
                    $options,
                    $options['url'],
                    $args,
                    true,
                    (isset($options['fail_on_main_url_error']) &&
                     $options['fail_on_main_url_error'] == 1) ||
                    (isset($options['fail_on_any_url_error']) &&
                     $options['fail_on_any_url_error'] == 1));
                if(is_wp_error($html)) {
                    return self::check_error($options, $html);
                }
            }

            // add http:// or https:// to links without it
            $html = self::add_missing_protocol($html);

            if($site && $options['conversion_mode'] == 'development') {
                $html = self::embed_styles($options, $html, $site, $args);
                if(is_wp_error($html)) {
                    return self::check_error($options, $html);
                }
            }
            $options['text'] = $html;
        }

        if(isset($options['auto_use_cookies']) &&
           $options['auto_use_cookies'] == 1) {
            if(isset($options['cookies']) && $options['cookies']) {
                $options['cookies'] .= ';';
            } else {
                $options['cookies'] = '';
            }
            $cookies = implode(';', array_map(function($name, $value) {
                return $name . '=' . rawurlencode($value);
            }, array_keys($_COOKIE), array_values($_COOKIE)));
            $options['cookies'] .= $cookies;
        }

        return self::convert($options);
    }

    private static function prepare_conv($options) {
        $fields = array();
        $files = array();

        $converter_version = '20.10';
        if(!empty($options['converter_version'])) {
            $converter_version = $options['converter_version'];
        }

        $ignored_options = self::$IGNORED_OPTIONS[$converter_version];

        // configure the conversion
        foreach($options as $key => $value) {
            if(!in_array($key, self::$API_OPTIONS) || $value == '' ||
               in_array($key, $ignored_options)) {
                // ignore empty values, no API options and
                // options not supported by a specific converter version
                continue;
            }

            if($key == 'url') {
                // use url only if text is not set
                if(!isset($options['text']) && !isset($options['file'])) {
                    $fields[$key] = $value;
                }
            } elseif(
                $key == 'page_watermark' ||
                $key == 'multipage_watermark' ||
                $key == 'page_background' ||
                $key == 'multipage_background' ||
                $key == 'data_file' ||
                $key == 'client_certificate' ||
                $key == 'file'
            ) {
                $files[$key] = $value;
            } else {
                // use only valid Pdfcrowd options
                $fields[$key] = $value;
            }
        }

        return array('fields' => $fields,
                     'files' => $files,
                     'converter_version' => $converter_version);
    }

    public static function convert($options) {
        $config = self::prepare_conv($options);

        $auth = 'Basic ' . base64_encode(
            $options['username'] . ':' . $options['api_key']);

        $boundary = wp_generate_password(24);

        $pflags = isset($options['pflags']) ? $options['pflags'] : '-';

        global $wp_version;
        $headers = array(
            'Authorization' => $auth,
            'Content-Type' => 'multipart/form-data; boundary=' . $boundary,
            'User-Agent' => 'pdfcrowd_wordpress_plugin/3.2.3 ('
            . $pflags . '/' . $wp_version . '/' . phpversion() . ')'
        );

        $args = array(
            'method' => 'POST',
            'timeout' => 300,
            'headers' => $headers,
            'body' => self::build_body(
                $config['fields'], $config['files'], $boundary)
        );

        $protocol = (isset($options['use_http']) && $options['use_http'] == 1)
                  ? 'http' : 'https';

        $retry_count = (!empty($options['retry_count']) &&
                        $options['retry_count'] > 0)
                     ? $options['retry_count'] : 0;
        $retry_attempt = 1;

        $error = null;
        while($retry_count >= 0) {
            $response = wp_remote_post(
                $protocol . '://api.pdfcrowd.com/convert/' .
                $config['converter_version'] . '/',
                $args);
            if(is_wp_error($response)) {
                $error = $response;
                if($response->get_error_code() != 502 &&
                   $response->get_error_code() != 503) {
                    break;
                }
            } else {
                $code = wp_remote_retrieve_response_code($response);
                if($code == 200) {
                    // conversion was ok
                    return wp_remote_retrieve_body($response);
                }

                // wait in case of the concurrency limit for 30 seconds
                if($retry_attempt <= 15 && ($code == 430 || $code == 429)) {
                    // give time to finish the previous conversion
                    error_log("concurrency limit reached, attempt {$retry_attempt}/15, waiting, a higher Pdfcrowd API plan is recommended");
                    sleep(2);
                    $retry_attempt++;
                    continue;
                }

                $msg = wp_remote_retrieve_body($response);
                if(empty($options['error_page'])) {
                    $msg = self::prepare_error_message(
                        $code, $msg, '<b>"upload"</b> or <b>"development"</b>');
                }
                $error = new WP_Error($code, $msg);
                if($code != 502 && $code != 503) {
                    break;
                }
            }
            // only 502 and 503 error is used for retry
            $retry_count--;
        };

        return self::check_error($options, $error);
    }

    private static function check_error($options, $error) {
        if(!$error || empty($options['error_page'])) {
            return $error;
        }

        // redirect to error page
        $code = $error->get_error_code();
        $message = urlencode($error->get_error_message());
        $details = '';
        if(isset(self::$ERROR_MESSAGES[$code])) {
            $details = $message;
            $message = urlencode(self::$ERROR_MESSAGES[$code]);
        }
        $url = $options['error_page'];
        if(!filter_var($url, FILTER_VALIDATE_URL)) {
            $url = get_permalink(get_page_by_path($url));
        }
        wp_redirect($url .
                    "?error-code={$code}&error-message={$message}&error-details={$details}");
        exit;
    }

    private static function prepare_error_message($code, $text, $cmode = null) {
        $details = isset(self::$ERROR_MESSAGES[$code]) ?
                 '<p>' . self::$ERROR_MESSAGES[$code] . '</p>' : '';
        $text = $details . '<p>' . $text . '</p>';
        switch($code) {
        case 471:
        case 478:
            $text = $text . '<p>Set <b>"Conversion Mode"</b> to ' .
                  $cmode . ' on the <b>Mode</b> settings page of the "Save as PDF by Pdfcrowd" plugin.</p>';
            break;
        default:
            $text = preg_replace(
                '/Details:\s(https:\/\/www.pdfcrowd.com\/[^\s<]*)/s',
                '<br>More: <a href="$1">$1</a>', $text);
        }
        return $text;
    }

    private static function validate_data($options, $data) {
        if(!isset($options['_time']) || $options['_time'] < time()) {
            return null;
        }

        $data = base64_decode($data);
        $token = $options['_token'];
        $shift = $token & 15;
        $base = $token & ~((1|2|4|8|16) << $shift);
        $base = $base ^ 0xffffffff;
        $code = (date('z', $options['_time']) + 22) % 30;

        $data = unpack('c*', $data);
        $result = '';
        foreach($data as $char) {
            $result .= chr($char ^ $code ^ (($base >> ($base&15)) & 0xff));
        }

        $result = mb_convert_encoding($result, 'UTF-8');
        if(!strpos($result, strval($token))) {
            return null;
        }
        return $result;
    }

    private function get_location($options) {
        $location = null;
        $permalink = null;

        if(isset($_POST['location'])) {
            $location = $_POST['location'];
        }
        if(isset($options['permalink'])) {
            $permalink = $options['permalink'];
        }

        if(!$location) {
            return $permalink;
        }

        if(!$permalink) {
            return null;
        }

        // check if the location is from my domain
        if(parse_url($location, PHP_URL_HOST) !=
           parse_url($permalink, PHP_URL_HOST)) {
            error_log('Pdfcrowd: conflict in location URL ' . $location . ' vs ' . $permalink);
            return $permalink;
        }

        return isset($options['url_lookup']) &&
            $options['url_lookup'] === 'permalink' ? $permalink : $location;
    }

    private static function delete_file($file_path) {
        global $wp_filesystem;
        if(!$wp_filesystem->delete($file_path)) {
            error_log('Pdfcrowd: can not delete file ' . $file_path);
        }
    }

    private static function make_temporary_file(
        $file_name, $content, $prefix='') {
        global $wp_filesystem;
        if(empty($wp_filesystem)) {
            // init filesystem
            WP_Filesystem();
        }

        $upload_dir = wp_upload_dir();
        if(empty($upload_dir['basedir'])) {
            error_log('Pdfcrowd: no upload dir specified');
            return false;
        }

        $tmp_dir = null;
        $tmp_dir = $upload_dir['basedir'] . '/_pdfcrowd_mail_tmp';
        if(!$wp_filesystem->exists($tmp_dir)) {
            // make temporary folder
            if(!$wp_filesystem->mkdir($tmp_dir)) {
                error_log('Pdfcrowd: can not create folder ' . $tmp_dir);
            }
        }

        // test if file exists and can be created
        $file_path = $tmp_dir . '/' . $prefix . $file_name;
        $fp = @fopen($file_path, 'x');
        if(!$fp) {
            if($wp_filesystem->exists($file_path) && empty($prefix)) {
                // file already exists, retry once with random suffix
                return self::make_temporary_file(
                    $file_name, $content, wp_generate_password(6, false) . '_');
            }
            error_log('Pdfcrowd: can not save file ' . $file_path);
            return false;
        }
        fclose($fp);

        if(!$wp_filesystem->put_contents($file_path, $content)) {
            error_log('Pdfcrowd: can not write to file ' . $file_path);
            self::delete_file($file_path);
            return false;
        }
        return $file_path;
    }

    private static function send_json_error($code, $message, $is_html=false) {
        wp_send_json_error(array('code' => $code,
                                 'message' => $message,
                                 'isHtml' => $is_html));
    }

    private static function send_email($options, $file_name, $output,
                                       $plugin_name) {
        // check empty filename
        if(empty($file_name)) {
            $format = isset($options['output_format'])
                    ? $options['output_format']
                    : 'pdf';
            $file_name = 'generated.' . $format;
        }

        $tmp_file_name = self::make_temporary_file($file_name, $output);
        if(!$tmp_file_name) {
            return self::send_json_error(
                455, __('Output file can not be prepared.', $plugin_name));
        }

        $email_to = $options['email_to'];
        $email_data = json_decode($options['email_data'], true);
        $email_data['user_name'] = '';
        $email_data['user_first_name'] = '';
        $email_data['user_last_name'] = '';
        $email_data['user_display_name'] = '';

        if($options['email_recipient'] == 'user') {
            $curr_user = wp_get_current_user();
            $email_data['user_name'] = $curr_user->user_nicename;
            $email_data['user_first_name'] = $curr_user->user_firstname;
            $email_data['user_last_name'] = $curr_user->user_lastname;
            $email_data['user_display_name'] = $curr_user->display_name;
        }
        $subject = $options['email_subject'];
        $message = $options['email_message'];

        $email_data['site'] = get_bloginfo('name');
        $email_data['site_url'] = get_bloginfo('url');
        $subject = self::string_subst($subject, $email_data);
        $message = self::string_subst($message, $email_data);

        $headers = array('Content-Type: text/html; charset=UTF-8');
        if(!empty($options['email_cc'])) {
            $headers[] = 'Cc: ' . $options['email_cc'];
        }
        if(!empty($options['email_bcc'])) {
            $headers[] = 'Bcc: ' . $options['email_bcc'];
        }
        if(!empty($options['email_from'])) {
            $headers[] = 'From: ' . $options['email_from'];
        }
        if(!wp_mail($email_to,
                    $subject,
                    $message,
                    $headers,
                    array($tmp_file_name))) {
            error_log('Pdfcrowd: send failed to ' . $email_to);
            self::delete_file($tmp_file_name);
            self::send_json_error(455, __('Mail system error.', $plugin_name));
        } else {
            self::delete_file($tmp_file_name);
            wp_send_json_success();
        }
    }

    private static function get_email_recipient($options) {
        if($options['email_recipient'] == 'prompt') {
            return $_POST['recipient'];
        }

        if($options['email_recipient'] == 'address') {
            return $options['email_recipient_address'];
        }

        return wp_get_current_user()->user_email;
    }

    function save_as_pdf_pdfcrowd() {
        // set download cookie at first, so the conversion button
        // can be re-enabled
        if(isset($_POST['download-id'])) {
            setcookie('pdfcrowdDownloadId', $_POST['download-id'], 0, "/");
        }

        $options = $this->get_options();

        if(!empty($_POST['options'])) {
            $decrypted = $this->decrypt(urldecode($_POST['options']),
                                        $options['api_key']);
            if($decrypted === false) {
                _e('Configuration error. Refresh page and retry.',
                   $this->plugin_name);
                wp_die();
            }
            $custom_options = unserialize($decrypted);
            $options = wp_parse_args($custom_options, $options);
        }

        // error_log('decrypted options:');
        // error_log(print_r($options, true));

        $default_conv_mode = 'url';
        if(!isset($options['url'])) {
            $location = $this->get_location($options);
            if($location) {
                // use the location as url
                $options['url'] = $location;
                $default_conv_mode = 'upload';
            }
        }

        // decide conversion mode
        if(!isset($options['conversion_mode']) ||
           $options['conversion_mode'] == 'auto') {
            $options['conversion_mode'] = isset($options['url'])
                                        ? $default_conv_mode : 'upload';
        } else if($options['conversion_mode'] == 'content') {
            if(!isset($options['text']) && !isset($options['file'])) {
                // take data from the page if they are not set explicitelly
                // text is set e.g. when block shortcode is used
                $options['text'] = self::validate_data($options, $_POST['cdata']);
                if(!$options['text']) {
                    _e('Invalid token. Use Conversion Mode Url or disable cache for this page.',
                       $this->plugin_name);
                    wp_die();
                }
            }
        }

        if($options['license_type'] === 'demo') {
            // use demo credentials
            if(empty($options['username'])) {
                $options['username'] = 'wp-demo';
            }
            if(empty($options['api_key'])) {
                $options['api_key'] = 'a182eb08c32a11e992c42c4d5455307a';
            }
        }

        $output = self::do_post_request($options);


        // take options by reference so email_to can be read in callback too
        // and even callback can update options, e.g. change output name by
        // some logic or fix email address et
        $hook_data = array(
            'output' => $output,
            'options' => &$options,
            'file_name' => $this->get_output_name($options),
            'error' => is_wp_error($output) ? $output : null
        );

        if(isset($options['diagnostics']) && $options['diagnostics'] == 1) {
            error_log('output_file_name: ' . $hook_data['file_name']);
            if($hook_data['error']) {
                error_log('error: ' . print_r($hook_data['error'], true));
            }
        }

        if($options['button_disposition'] == 'email') {
            $options['email_to'] = self::get_email_recipient($options);
        }

        if(!empty($options['pdf_created_callback'])) {
            if($options['pdf_created_callback']($hook_data)) {
                return;
            }
        }

        if(is_wp_error($output)) {
            $code = $output->get_error_code();
            $message = $output->get_error_message();
            if($options['button_disposition'] == 'email') {
                self::send_json_error($code, $message, true);
            } else {
                // use just the main error status for a status_header
                $status_text = $message;
                if(preg_match('/<p>(.*?)<\/p>/', $message, $matches)) {
                    $status_text = $matches[1];
                }
                status_header((int) $code, $status_text);
                echo $this->get_error_page($options, $code, $message);
            }
        } else {
            if($options['button_disposition'] == 'email') {
                self::send_email($options, $hook_data['file_name'],
                                 $output, $this->plugin_name);
            } else {
                // send the generated file to the browser
                header('Content-Type: application/pdf');
                $disposition = $options['button_disposition'] == 'inline_new_tab' ? 'inline' : $options['button_disposition'];
                header("Content-Disposition: {$disposition}; filename*=UTF-8''" . rawurlencode($hook_data['file_name']));
                header('Cache-Control: no-cache');
                header('Accept-Ranges: none');

                echo $output;
            }
        }

        wp_die();
    }

    private function get_error_page($options, $code, $message) {
        $back = (empty($options['button_disposition']) ||
                 $options['button_disposition'] === 'attachment' ||
                 $options['button_disposition'] === 'inline')
              ? '<a href="javascript:history.go(-1)">Go Back</a>'
              : '';
        return <<<HTML
    <!DOCTYPE html>
    <html>
    <head>
    <title>PDF Download Failed</title>
    </head>
    <body class="save-as-pdf-pdfcrowd-err">
    <h1>PDF Download Failed</h1>
    <p>Please try again later.</p>
    {$back}
    <div class="save-as-pdf-pdfcrowd-err-admin" style="margin-top: 2em">
    <h2>Details for Administrator</h2>
    <p>Code: {$code}</p>
    <p>{$message}</p>
    </div>
    </body>
    </html>
HTML;
    }

    private function get_function_name($key) {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
    }

    private function encrypt($string, $key) {
        $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext_raw = openssl_encrypt($string, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
        return base64_encode( $iv.$hmac.$ciphertext_raw );
    }

    private function decrypt($ciphertext, $key) {
        $c = base64_decode($ciphertext);
        $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
        $iv = substr($c, 0, $ivlen);
        $hmac = substr($c, $ivlen, $sha2len=32);
        $ciphertext_raw = substr($c, $ivlen+$sha2len);
        $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
        if (hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
        {
            return $original_plaintext;
        }
        return false;
    }
}

/**
 *  function for triggering conversion from the server code
 *
 * @since    1.6.0
 */
if(!function_exists('pdfcrowd_save_as_pdf')) {
    function pdfcrowd_save_as_pdf($options) {
        return Save_As_Pdf_Pdfcrowd_Public::convert($options);
    }
}
