<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/
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

    private $table_name;

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/save-as-pdf-pdfcrowd-public.css', array(), $this->version, 'all' );

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
        'button_disposition' => 'attachment',
        'button_format' => 'image-text',
        'button_hidden' => '1',
        'button_image' => 'pdf1.svg',
        'button_image_height' => '24',
        'button_image_url' => '',
        'button_image_width' => '24',
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
        'button_text_color' => '#fff',
        'button_text_size' => '14',
        'button_text_weight' => 'bold',
        'conversion_mode' => 'auto',
        'dev_mode' => '0',
        'no_margins' => '0',
        'output_format' => 'pdf',
        'pdf_created_callback' => '',
        'rendering_mode' => 'viewport',
        'smart_scaling_mode' => 'viewport-fit',
        'username' => '',
        'version' => '122',
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
        'header_url',
        'header_html',
        'header_height',
        'footer_url',
        'footer_html',
        'footer_height',
        'print_page_range',
        'exclude_header_on_pages',
        'exclude_footer_on_pages',
        'page_numbering_offset',
        'content_area_x',
        'content_area_y',
        'content_area_width',
        'content_area_height',
        'page_watermark',
        'page_watermark_url',
        'multipage_watermark',
        'multipage_watermark_url',
        'page_background',
        'page_background_url',
        'multipage_background',
        'multipage_background_url',
        'page_background_color',
        'no_background',
        'disable_javascript',
        'disable_image_loading',
        'disable_remote_fonts',
        'block_ads',
        'default_encoding',
        'http_auth_user_name',
        'http_auth_password',
        'use_print_media',
        'no_xpdfcrowd_header',
        'cookies',
        'verify_ssl_certificates',
        'fail_on_main_url_error',
        'fail_on_any_url_error',
        'custom_javascript',
        'on_load_javascript',
        'custom_http_header',
        'javascript_delay',
        'element_to_convert',
        'element_to_convert_mode',
        'wait_for_element',
        'viewport_width',
        'viewport_height',
        'rendering_mode',
        'smart_scaling_mode',
        'scale_factor',
        'header_footer_scale_factor',
        'jpeg_quality',
        'convert_images_to_jpeg',
        'image_dpi',
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
        'debug_log',
        'tag',
        'http_proxy',
        'https_proxy',
        'client_certificate',
        'client_certificate_password',
        'url',
        'text'
    );

    private static $DEFAULT_IMAGES = array(
        'pdf1.svg' => 'data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRUE0QzNBIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMzAsMzAgMCwzMCAwLDAgMzAsMCAzMCwzMCAiLz48cGF0aCBkPSJNMTUuMzcyLDQuMzc3ICBjMC40NTIsMC4yMTMsMC4zNTgsMC40ODksMC4yMTksMS43OTNjLTAuMTQyLDEuMzQ1LTAuNjE4LDMuODAyLTEuNTM1LDYuMjE5Yy0wLjkxOCwyLjQxMy0yLjI4LDQuNzg0LTMuNDY3LDYuNTM5ICBjLTEuMTg2LDEuNzU2LTIuMjAxLDIuODk3LTIuOTc1LDMuNTU2Yy0wLjc3NywwLjY1OS0xLjMxNCwwLjgzNS0xLjY2NSwwLjg5M2MtMC4zNDgsMC4wNTgtMC41MDYsMC0wLjYtMC4xNzcgIGMtMC4wOTQtMC4xNzYtMC4xMjctMC40NjYtMC4wNDYtMC44MmMwLjA3OS0wLjM1LDAuMjY4LTAuNzYsMC44MDQtMS4yODVjMC41NDEtMC41MjcsMS40MjYtMS4xNzIsMi42NjEtMS43NzEgIGMxLjIzNS0wLjYsMi44MTctMS4xNTYsNC4xMTYtMS41MzdjMS4yOTktMC4zNzksMi4zMTEtMC41ODUsMy4xOTctMC43NDZjMC44ODgtMC4xNjIsMS42NDctMC4yNzcsMi4zOTEtMC4zMzcgIGMwLjc0NC0wLjA1NiwxLjQ3NC0wLjA1NiwyLjE4NiwwYzAuNzEyLDAuMDYsMS40MDgsMC4xNzUsMi4wMTEsMC4zMjNjMC42LDAuMTQ2LDEuMTA4LDAuMzIxLDEuNTUxLDAuNjAxICBjMC40NDIsMC4yNzYsMC44MjMsMC42NTcsMS4wMTIsMS4wODNjMC4xOTIsMC40MjMsMC4xOTIsMC44OTMsMC4wMzMsMS4yMjhjLTAuMTU4LDAuMzM3LTAuNDc2LDAuNTQxLTAuODM5LDAuNjYgIGMtMC4zNjQsMC4xMTUtMC43NzUsMC4xNDQtMS4yNjcsMGMtMC40OS0wLjE0OC0xLjA2Mi0wLjQ3LTEuNjYyLTAuODk0Yy0wLjYwMS0wLjQyNS0xLjIzNS0wLjk1Mi0yLjA1Ny0xLjc3MSAgYy0wLjgyNC0wLjgxOS0xLjgzOC0xLjkzLTIuNjkyLTMuMDEzYy0wLjg1NC0xLjA4My0xLjU1My0yLjEzNi0yLjAyOC0zLjAyOWMtMC40NzMtMC44OTMtMC43MjctMS42MjQtMC45MzMtMi4zNTUgIGMtMC4yMDYtMC43MzMtMC4zNjQtMS40NjQtMC40MjctMi4xMjJTMTMuMzI2LDYuMTcsMTMuMzksNS43MDFjMC4wNjMtMC40NjYsMC4xNi0wLjgyLDAuMzE3LTEuMDU1ICBjMC4xNTgtMC4yMywwLjM4MS0wLjM1LDAuNTM5LTAuNDA4czAuMjU0LTAuMDU4LDAuMzQ4LTAuMDczYzAuMDk0LTAuMDE1LDAuMTg4LTAuMDQ0LDAuMzMzLDBjMC4xMzgsMC4wNDIsMC4zMjEsMC4xNTQsMC41MDQsMC4yNjgiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjEuNCIvPjwvc3ZnPgo=',
        'pdf2.svg' => 'data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMjgsMjggMSwyOCAxLDEgMjgsMSAyOCwyOCAiLz48Zz48cGF0aCBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zMC4wMTUsMjguNjY3SDBWMGgzMC4wMTVWMjguNjY3IE0yLjg4NCwyNS43ODNoMjQuMjQ0VjIuODg2ICAgSDIuODg0IiBmaWxsPSIjRUE0QzNBIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBkPSJNMTUuNDAxLDQuNDA4ICAgYzAuNDIxLDAuMTgzLDAuMzI3LDAuNDYsMC4xODgsMS43NjJjLTAuMTQzLDEuMzQ5LTAuNjE4LDMuODA2LTEuNTM1LDYuMjE4Yy0wLjkxOCwyLjQxNS0yLjI4LDQuNzg1LTMuNDY3LDYuNTQyICAgYy0xLjE4NSwxLjc1NS0yLjIwMSwyLjg5Ni0yLjk3NCwzLjU1NGMtMC43NzcsMC42NTgtMS4zMTQsMC44MzMtMS42NjUsMC44OTNjLTAuMzQ4LDAuMDYtMC41MDYsMC0wLjYtMC4xNzUgICBzLTAuMTI3LTAuNDctMC4wNDYtMC44MTljMC4wNzktMC4zNTMsMC4yNjgtMC43NjMsMC44MDQtMS4yODdjMC41NDEtMC41MjcsMS40MjYtMS4xNywyLjY2MS0xLjc3MiAgIGMxLjIzNS0wLjU5OSwyLjgxNi0xLjE1Niw0LjExNS0xLjUzNWMxLjI5OS0wLjM4MSwyLjMxMS0wLjU4NSwzLjE5Ny0wLjc0NWMwLjg4OC0wLjE2MSwxLjY0Ny0wLjI3OCwyLjM5LTAuMzM2ICAgYzAuNzQ1LTAuMDYsMS40NzQtMC4wNiwyLjE4NiwwYzAuNzEyLDAuMDU4LDEuNDA5LDAuMTc1LDIuMDExLDAuMzE5YzAuNjAxLDAuMTQ3LDEuMTA4LDAuMzIzLDEuNTUxLDAuNjAyICAgYzAuNDQyLDAuMjc3LDAuODIzLDAuNjU4LDEuMDEyLDEuMDgyYzAuMTkyLDAuNDI1LDAuMTkyLDAuODkzLDAuMDMzLDEuMjI5Yy0wLjE1OCwwLjMzNi0wLjQ3NiwwLjU0Mi0wLjgzOSwwLjY1NyAgIGMtMC4zNjMsMC4xMTctMC43NzUsMC4xNDYtMS4yNjYsMGMtMC40OTEtMC4xNDYtMS4wNjMtMC40NjctMS42NjMtMC44OTNjLTAuNi0wLjQyMy0xLjIzNC0wLjk0OC0yLjA1Ny0xLjc2OCAgIGMtMC44MjMtMC44Mi0xLjgzNy0xLjkzNC0yLjY5MS0zLjAxNWMtMC44NTQtMS4wODMtMS41NTMtMi4xMzYtMi4wMjgtMy4wMjhjLTAuNDczLTAuODkzLTAuNzI3LTEuNjI0LTAuOTMzLTIuMzU3ICAgYy0wLjIwNi0wLjczMS0wLjM2NC0xLjQ2Mi0wLjQyNy0yLjEyYy0wLjA2My0wLjY2LTAuMDMzLTEuMjQ1LDAuMDMxLTEuNzFjMC4wNjMtMC40NywwLjE2LTAuODIsMC4zMTctMS4wNTQgICBjMC4xNTgtMC4yMzUsMC4zODEtMC4zNTIsMC41MzktMC40MWMwLjE1OC0wLjA2LDAuMjU0LTAuMDYsMC4zNDgtMC4wNzNjMC4wOTQtMC4wMTQsMC4xODgtMC4wNDQsMC4zMzMsMCAgIEMxNS4wNjQsNC4yMDksMTUuMjQ4LDQuMzIxLDE1LjQwMSw0LjQwOHoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0VBNEMzQSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjEuNTciLz48L2c+PC9zdmc+Cg==',
        'pdf3.svg' => 'data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMjgsMjggNywyOCA3LDI1IDEsMjUgMSw3IDcsNyA3LDEgMjIsMSAyOCwxMCAyOCwyOCAiLz48Zz48cGF0aCBkPSJNMjguNTk1LDcuNTYybC01LjQzOC02LjMwOWwtMS4wNzgtMS4yNUg5LjIyOGMtMS43MjcsMC0zLjEyNCwxLjM5Ny0zLjEyNCwzLjEyNHYzLjk3MUg4LjA0bC0wLjAwMS0zLjIxICAgYzAuMDA0LTAuOTcxLDAuNzg0LTEuNzU2LDEuNzUyLTEuNzU2bDEwLjk5NC0wLjAxdjUuMjA4YzAuMDAxLDEuOTM5LDEuNTY3LDMuNTEsMy41MDcsMy41MWgzLjgwN0wyNy45MSwyNS44NiAgIGMtMC4wMDQsMC45NjctMC43ODQsMS43NDctMS43NTIsMS43NTRMOS42NTIsMjcuNjA2Yy0wLjg4MywwLTEuNTk0LTAuODY2LTEuNi0xLjkzNVYyNC40SDYuMTE0djEuODk2ICAgYzAsMS45MDcsMS4yNzcsMy40NTUsMi44NDUsMy40NTVsMTcuNzYzLTAuMDA1YzEuNzI2LDAsMy4xMjQtMS40MDQsMy4xMjQtMy4xMjZWOS4wMTZMMjguNTk1LDcuNTYyIiBmaWxsPSIjNDM0NDQwIi8+PHBhdGggZD0iTTIwLjE0NSwyNS4zNjhIMFY2LjEyOWgyMC4xNDVWMjUuMzY4IE0xLjkzNCwyMy40MzJoMTYuMjc0VjguMDY1SDEuOTM0IiBmaWxsPSIjRUE0QzNBIi8+PHBhdGggZD0iTTEwLjMxNCw5LjA2OSAgIGMwLjMwNSwwLjE0MSwwLjI0MiwwLjMyOCwwLjE0OCwxLjIwMWMtMC4wOTcsMC45MDUtMC40MTQsMi41NTQtMS4wMzIsNC4xNzNjLTAuNjE2LDEuNjIyLTEuNTI5LDMuMjEtMi4zMjUsNC4zOSAgIGMtMC43OTcsMS4xNzgtMS40NzgsMS45NDMtMS45OTgsMi4zODZjLTAuNTE5LDAuNDQxLTAuODgyLDAuNTU5LTEuMTE1LDAuNTk5Yy0wLjIzMywwLjA0LTAuMzM5LDAtMC40MDUtMC4xMTcgICBjLTAuMDYzLTAuMTE4LTAuMDg0LTAuMzE1LTAuMDMxLTAuNTUxYzAuMDUzLTAuMjM0LDAuMTgxLTAuNTEsMC41NDItMC44NjNjMC4zNi0wLjM1NCwwLjk1Ni0wLjc4NSwxLjc4NS0xLjE4OCAgIGMwLjgyOS0wLjQwMiwxLjg5MS0wLjc3NSwyLjc2Mi0xLjAzMXMxLjU1MS0wLjM5MywyLjE0Ni0wLjVjMC41OTUtMC4xMDgsMS4xMDQtMC4xODcsMS42MDQtMC4yMjZjMC41LTAuMDQsMC45ODgtMC4wNCwxLjQ2NywwICAgYzAuNDc4LDAuMDM5LDAuOTQ1LDAuMTE3LDEuMzQ4LDAuMjE2YzAuNDA2LDAuMDk3LDAuNzQ1LDAuMjE3LDEuMDQyLDAuNDAyYzAuMjk5LDAuMTg3LDAuNTUyLDAuNDQxLDAuNjgxLDAuNzI2ICAgYzAuMTI3LDAuMjg2LDAuMTI3LDAuNiwwLjAyMSwwLjgyNWMtMC4xMDUsMC4yMjctMC4zMTgsMC4zNjQtMC41NjMsMC40NDFjLTAuMjQ2LDAuMDgtMC41MjIsMC4wOTktMC44NTEsMCAgIGMtMC4zMy0wLjA5OC0wLjcxMi0wLjMxNC0xLjExNS0wLjU5OWMtMC40MDQtMC4yODQtMC44MjktMC42MzgtMS4zODEtMS4xODdjLTAuNTUzLTAuNTUxLTEuMjMyLTEuMjk4LTEuODA3LTIuMDIzICAgYy0wLjU3My0wLjcyNy0xLjA0MS0xLjQzNC0xLjM1OC0yLjAzM2MtMC4zMTktMC41OTktMC40ODktMS4wOS0wLjYyNy0xLjU4MmMtMC4xMzgtMC40OTEtMC4yNDQtMC45OC0wLjI4Ny0xLjQyMiAgIGMtMC4wNDMtMC40NDMtMC4wMjEtMC44MzcsMC4wMjEtMS4xNDljMC4wNDItMC4zMTUsMC4xMDYtMC41NSwwLjIxMy0wLjcwOGMwLjEwNi0wLjE1NywwLjI1Ni0wLjIzNSwwLjM2Mi0wLjI3NSAgIHMwLjE2OS0wLjA0LDAuMjM0LTAuMDQ5YzAuMDYzLTAuMDA5LDAuMTI2LTAuMDI5LDAuMjIyLDBjMC4wOTQsMC4wMywwLjIxNiwwLjEwNCwwLjM0LDAuMTgiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0VBNEMzQSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjAuNzUiLz48L2c+PC9zdmc+Cg==',
        'pdf4.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAiIGhlaWdodD0iMjciIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTIuNTA5IDAuODR2Ni4yNjU3bDUuNzU0MSAwLjEwNDE0eiIgZmlsbD0iIzY5Njk2OSIgc3Ryb2tlLXdpZHRoPSIwIi8+PGcgdHJhbnNmb3JtPSJtYXRyaXgoMS4wMTE4IDAgMCAxLjAxMDYgLTIuMTYyMSAtMy4yMDI0KSIgZmlsbC1ydWxlPSJldmVub2RkIj48cG9seWxpbmUgcG9pbnRzPSIyMC41IDI5IDMgMjkgMyA0IDE0LjUgNCAxNC41IDEwLjIgMjAuNSAxMC4yIDIwLjUgMjkiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PHBvbHlsaW5lIHBvaW50cz0iMjAgMTQgMzEgMTQgMzEgMjUgMjAgMjUiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PGcgaWQ9Imljb24tNzAtZG9jdW1lbnQtZmlsZS1wZGYiIGZpbGw9IiM5MjkyOTIiPjxwYXRoIGlkPSJkb2N1bWVudC1maWxlLXBkZiIgZD0ibTI1IDE5di0yaDR2LTFoLTV2N2gxdi0zaDN2LTF6bS0xMy0xdjVoMXYtM2gxLjk5NTFjMS4xMDczIDAgMi4wMDQ5LTAuODg3NzMgMi4wMDQ5LTIgMC0xLjEwNDYtMC44OTM5LTItMi4wMDQ5LTJoLTIuOTk1MXptMS0xdjJoMi4wMDFjMC41NTE3MSAwIDAuOTk4OTYtMC40NDM4NiAwLjk5ODk2LTEgMC0wLjU1MjI4LTAuNDQyNjYtMS0wLjk5ODk2LTF6bTUtMXY3aDIuOTk1MWMxLjEwNzMgMCAyLjAwNDktMC44ODY1NiAyLjAwNDktMi4wMDU5di0yLjk4ODJjMC0xLjEwNzgtMC44OTM5LTIuMDA1OS0yLjAwNDktMi4wMDU5em0xIDF2NWgyLjAwMWMwLjU1MTcxIDAgMC45OTg5Ni0wLjQ0MzcyIDAuOTk4OTYtMC45OTk4MXYtMy4wMDA0YzAtMC41NTIxOC0wLjQ0MjY2LTAuOTk5ODEtMC45OTg5Ni0wLjk5OTgxeiIgZmlsbD0iI2VhNGMzYSIvPjwvZz48L2c+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjkuNjc1IC0uMSkiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgZmlsbD0iIzkyOTI5MiI+PHBhdGggZD0ibS0xMC42NzUgMTAuMXYtM2wtNi03aC0xMC45OTdjLTEuMTA2MSAwLTIuMDAyOCAwLjg5ODM0LTIuMDAyOCAyLjAwNzN2MjIuOTg1YzAgMS4xMDg2IDAuODkwOTIgMi4wMDczIDEuOTk3NCAyLjAwNzNoMTUuMDA1YzEuMTAzMSAwIDEuOTk3NC0wLjg5ODIxIDEuOTk3NC0xLjk5MDh2LTIuMDA5Mmg3Ljk5MzJjMS42NjA2IDAgMy4wMDY4LTEuMzQyMyAzLjAwNjgtMi45OTg4di03LjAwMjRjMC0xLjY1NjItMS4zMzYtMi45OTg4LTMuMDA2OC0yLjk5ODh6bS0xIDEzdjIuMDA2NmMwIDAuNTQ4NDUtMC40NDc3IDAuOTkzNC0wLjk5OTk2IDAuOTkzNGgtMTVjLTAuNTQ1MjUgMC0wLjk5OTk2LTAuNDQ1NjgtMC45OTk5Ni0wLjk5NTQ2di0yMy4wMDljMC0wLjU0MDE5IDAuNDQ1NzQtMC45OTU0NiAwLjk5NTU4LTAuOTk1NDZoMTAuMDA0djQuOTk0MWMwIDEuMTE5NCAwLjg5NDUgMi4wMDU5IDEuOTk3OSAyLjAwNTloNC4wMDIxdjJoLTcuOTkzMmMtMS42NjA2IDAtMy4wMDY4IDEuMzQyMy0zLjAwNjggMi45OTg4djcuMDAyNGMwIDEuNjU2MiAxLjMzNiAyLjk5ODggMy4wMDY4IDIuOTk4OHptLTUtMjEuNXY0LjQ5MTJjMCAwLjU1NzE0IDAuNDUwNjUgMS4wMDg4IDAuOTk2NzQgMS4wMDg4aDMuNzAzMnptLTMuMDA1NCA5LjVjLTEuMTAxNiAwLTEuOTk0NiAwLjkwMDE4LTEuOTk0NiAxLjk5MnY3LjAxNmMwIDEuMTAwMiAwLjkwMjM0IDEuOTkyIDEuOTk0NiAxLjk5MmgxNy4wMTFjMS4xMDE2IDAgMS45OTQ2LTAuOTAwMTggMS45OTQ2LTEuOTkydi03LjAxNmMwLTEuMTAwMi0wLjkwMjM0LTEuOTkyLTEuOTk0Ni0xLjk5MnoiLz48L2c+PC9nPjxwYXRoIGQ9Im0zLjE1OTggNC4xMzY3aDciIGZpbGw9IiM2OTY5NjkiIHN0cm9rZT0iIzY5Njk2OSIgc3Ryb2tlLXdpZHRoPSIxcHgiLz48cGF0aCBkPSJtNC4xNTk4IDcuMTM2N2g2IiBmaWxsPSIjNjk2OTY5IiBzdHJva2U9IiM2OTY5NjkiIHN0cm9rZS13aWR0aD0iMXB4Ii8+PC9zdmc+Cg==',
        'pdfcrowd.svg' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K',
    );

    private static $ERROR_MESSAGES = array(
        400 => "The user sent an invalid request.",
        401 => "Authentication is required and has failed or has not yet been provided or your license does not exist.",
        403 => "Your license is suspended or there are no credits left.",
        405 => "The method specified in the request is not allowed. The request method must be POST.",
        413 => "<p>The size limit for the uploaded data is 100MMB.</p> <p>You can zip your HTML to avoid this error.</p>",
        429 => "The user has sent too many requests in a given amount of time (rate limiting).",
        430 => "<p>The limit of max concurrent requests was exceeded.</p>",
        452 => "There is nothing specified to be converted.",
        453 => "Some conversion option is unknown. See details in HTTP response body.",
        454 => "The input is too complex or large. It can not be converted. Try to simplify your input data.",
        455 => "The conversion can not be finished due to a system error.",
        456 => "The input file is not specified correctly. Files are accepted only in multipart POST requests.",
        457 => "The type of the input file is unknown. The file has no extension.",
        458 => "<p>The request was aborted because it took long time.</p> <p>A typical cause of this error is too many images in the HTML page which take too long to download. Another cause might be a long running JavaScript.</p> <p>Try to simplify your input data or speed up the page load time.</p>",
        459 => "The archive uploaded can not be accepted. It is too large, corrupted or contains symbolic links.",
        460 => "The output is too large. Try to simplify your input data or compress images.",
        470 => "A conversion option is set to an invalid value.",
        471 => "The converted URL can not be navigated to.",
        472 => "Exceeded the maximum number of sub-requests during a conversion.",
        473 => "The main frame loaded with an HTTP code >= 400.",
        474 => "The URL loaded with an HTTP code >= 400 or some requests are still pending. See details in a debug log.",
        475 => "The request was aborted because the custom JavaScript took long time.",
        476 => "The element specified for print or wait was not found in the input document.",
        477 => "The input document type is unknown or not supported. For example, the HTML content type should be text/html.",
        478 => "The URL hostname could not be resolved.",
        479 => "The URL is invalid.",
        480 => "The converter could not establish an HTTPS connection because of an invalid SSL certificate.",
        481 => "<p>There was a problem connecting to Pdfcrowd servers over HTTPS. This could be caused by several reasons, one of them is that your local CA certificate store is out of date or not configured correctly.</p> <p>An alternative is to use the API over HTTP. The HTTP mode can be enabled by the <a href='/doc/api/method-index/#html_to_pdf_set_use_http'>setUseHttp</a> method.<p>",
        502 => "The 502 status code indicates a temporary network issue. Try the request again.",
    );

    public static function get_options() {
        $options = get_option('save-as-pdf-pdfcrowd', self::$DEFAULTS);

        // error_log('upgrade');
        // error_log(print_r($options, true));

        if(!isset($options['version'])) {
            // error_log('the first version');
            if(isset($options['dev_mode']) && $options['dev_mode']) {
                $options['conversion_mode'] = 'development';
            } else {
                $options['conversion_mode'] = 'auto';
            }
        } else {
            if($options['version'] == 122) {
                // error_log('the same version');
                return $options;
            }
        }

        // error_log('save new options');
        $options['version'] = 122;
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

    public static function create_button_from_style(
        $options, $custom_options='', $content='', $pflags='') {
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

        $btn_style = self::rect_to_style('margin', $options);

        $classes = 'save-as-pdf-pdfcrowd-button-wrap';
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
            $classes .= ' save-as-pdf-pdfcrowd-reset';
        }

        $div_style = '';
        if($options['button_alignment']) {
            $div_style .= "text-align: {$options['button_alignment']}; ";
        }
        if($options['button_position'] == 'left') {
            $div_style .= "float: left; ";
        } elseif($options['button_position'] == 'right') {
            $div_style .= "float: right; ";
        }

        if(!empty($btn_style)) {
            $btn_style = " style='{$btn_style}'";
        }
        if(!empty($div_style)) {
            $div_style = " style='{$div_style}'";
        }

        $button = "<div class='$classes'{$div_style}><div class='save-as-pdf-pdfcrowd-button'{$btn_style} onclick='window.SaveAsPDFPdfcrowd(\"$custom_options\");' data-pdfcrowd-flags='{$pflags}'>";

        $button_content = '';
        switch($options['button_format']) {
        case 'image-text':
            $button_content = $image . '&nbsp;' . $options['button_text'];
            break;
        case 'text-image':
            $button_content = $options['button_text'] . '&nbsp;' . $image;
            break;
        case 'text':
            $button_content = $options['button_text'];
            break;
        case 'image':
            $button_content = $image;
            break;
        }

        $button .= $button_content . "</div></div>";

        if($options['button_position'] == 'below') {
            return $content . $button;
        }
        return $button . $content;
    }

    private function create_button($options, $custom_options, $content='',
        $pflags='') {
        // serialize custom attributes to string
        if($custom_options) {
            $custom_options['pflags'] = $pflags;
            $custom_options = $this->encrypt(
                serialize($custom_options), $options['api_key']);
        } else {
            $custom_options = '';
        }

        return $this->create_button_from_style($options,
                                               urlencode($custom_options),
                                               $content, $pflags);
    }

    function show_button($content) {
        $options = $this->get_options();

        // error_log(print_r($options, true));

        if(!(
            (is_home() && isset($options['button_on_home']) && $options['button_on_home']) ||
            (is_front_page() && isset($options['button_on_front']) && $options['button_on_front']) ||
            (!is_home() && !is_front_page() && is_page() && isset($options['button_on_pages']) && $options['button_on_pages']) ||
            (is_single() && isset($options['button_on_posts']) && $options['button_on_posts']) ||
            (is_category() && isset($options['button_on_categories']) && $options['button_on_categories']) ||
            (is_tax() && isset($options['button_on_taxonomies']) && $options['button_on_taxonomies'])
        )) return $content;

        return $this->create_button($options,
                                    array('permalink' => get_permalink()),
                                    $content, 'auto');
    }

    private function eval_shortcode($attrs, $content, $custom_options,
                                    $pflags = '') {
        // merge attrs with the default options defined on the settings page
        $options = $this->get_options();

        if($attrs) {
            foreach($attrs as $key => $value) {
                if(self::starts_with($key, 'button_')) {
                    $options[$key] = $value;
                } else {
                    $custom_options[$key] = $value;
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
            $custom_options['permalink'] = get_permalink();
        }
        return $this->eval_shortcode($attrs, $content, $custom_options, $pflags);
    }

    function block_save_as_pdf_pdfcrowd_shortcode($attrs = array(), $content = null) {
        // run shortcode parser recursively
        $content = do_shortcode($content);

        $custom_options = array('text' => $content);
        if(!$attrs || (!isset($attrs['output_name']) && !isset($attrs['url']))) {
            // add url so default name can be created
            $custom_options['permalink'] = get_permalink();
        }
        return $this->eval_shortcode($attrs, $content, $custom_options, 'bsc');
    }

    private static function get_url($url, $args, $throw_error = false) {
        $response = wp_remote_get($url, $args);
        if(is_wp_error($response)) {
            $msg = $response->get_error_message() . ' ' . $url;
            error_log($msg);
            if($throw_error) {
                throw new Exception(
                    self::prepare_error_message(471, $msg, '<b>"url"</b>') .
                    '<p>Or check your network and PHP configuration.</p>');
            }
            return '';
        }
        return wp_remote_retrieve_body($response);
    }

    private static function embed_styles($html, $site, $args) {
        $output = preg_replace_callback(
            "`(?i)\<link rel=[\'\"]stylesheet[\'\"](?<pre>.*?)href=[\'\"](?<url>(?:http:|https:)?\/\/{$site}.*?)[\'\"](?<post>.*?)\s*\/\s*\>`",
            function ($match) use($args) {
                $url = $match['url'];
                if(!self::starts_with($url, 'http')) {
                    $protocol = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
                    $url = $protocol . ':' . $url;
                }
                // error_log('embed ' . $url);
                $content = self::get_url($url, $args);
                return '<style ' . $match['pre'] . $match['post'] . ">\r\n" . $content . '</style>';
            },
            $html);
        return $output ? $output : $html;
    }


    private function get_output_name($options) {
        if(isset($options['output_name'])) return $options['output_name'];

        // create the default file name
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
        if($i < 0) {
            $page_name = 'generated';
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
        // error_log('use cookies');
        $cookies = array();
        foreach($_COOKIE as $name => $value) {
            $cookies[] = new WP_Http_Cookie(
                array('name' => $name, 'value' => $value));
        }
        return $cookies;
    }

    public static function do_post_request($options) {
        $auth = 'Basic ' . base64_encode(
            $options['username'] . ':' . $options['api_key']);

        $boundary = wp_generate_password(24);

        $pflags = isset($options['pflags']) ? $options['pflags'] : '-';

        global $wp_version;
        $headers = array(
            'Authorization' => $auth,
            'Content-Type' => 'multipart/form-data; boundary=' . $boundary,
            'User-Agent' => 'pdfcrowd_wordpress_plugin/1.2.2 ('
            . $pflags . '/' . $wp_version . '/' . phpversion() . ')'
        );

        // error_log('conversion start with mode: ' . $options['conversion_mode']);
        if($options['conversion_mode'] != 'url') {
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
                // error_log('download ' . $options['url']);

                try {
                    $html = self::get_url($options['url'], $args, true);
                } catch (Exception $ex) {
                    $error = new WP_Error(471, $ex->getMessage());
                    return $error;
                }
            }

            $options['text'] = $site &&
                             $options['conversion_mode'] == 'development'
                             ? self::embed_styles($html, $site, $args)
                             : $html;
        }

        if(isset($options['auto_use_cookies']) &&
           isset($options['auto_use_cookies'])) {
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

        $fields = array();
        $files = array();

        // configure the conversion
        foreach($options as $key => $value) {
            if(!in_array($key, self::$API_OPTIONS) || $value == '') {
                // ignore empty values and no API options
                continue;
            }

            if($key == 'url') {
                // use url only if text is not set
                if(!isset($options['text'])) {
                    $fields[$key] = $value;
                }
            } elseif(
                $key == 'page_watermark' ||
                $key == 'multipage_watermark' ||
                $key == 'page_background' ||
                $key == 'multipage_background' ||
                $key == 'client_certificate' ) {
                $files[$key] = $value;
            } else {
                // use only valid Pdfcrowd options
                $fields[$key] = $value;
            }
        }

        $args = array(
            'method' => 'POST',
            'timeout' => 300,
            'headers' => $headers,
            'body' => self::build_body($fields, $files, $boundary)
        );

        $protocol = (isset($options['use_http']) && $options['use_http'] == 1)
                  ? 'http' : 'https';

        $retry_count = (isset($options['retry_count']) &&
                        !empty($options['retry_count']) &&
                        $options['retry_count'] > 0)
                     ? $options['retry_count'] : 0;

        $error = null;
        while($retry_count >= 0) {
            $response = wp_remote_post(
                $protocol . '://api.pdfcrowd.com/convert/', $args);
            if(is_wp_error($response)) {
                if($response->get_error_code() != 502) {
                    return $response;
                }
                $error = $response;
            } else {
                $code = wp_remote_retrieve_response_code($response);
                if($code == 200) {
                    // conversion was ok
                    return wp_remote_retrieve_body($response);
                }

                $error = new WP_Error(
                    $code, self::prepare_error_message(
                        $code, wp_remote_retrieve_body($response),
                        '<b>"upload"</b> or <b>"development"</b>'));
                if($code != 502) {
                    return $error;
                }
            }
            // only 502 error is used for retry
            $retry_count--;
        };
        return $error;
    }

    private static function prepare_error_message($code, $text, $cmode) {
        $text = '<h3>' . $text . '</h3>';
        switch($code) {
        case 471:
        case 478:
            $link = '<a href="' .
                  admin_url('options-general.php?page=save-as-pdf-pdfcrowd#save-as-pdf-pdfcrowd-behavior') .
                  '"><b>Behavior</b></a>';
            $text = $text . '<p>Set <b>"Conversion Mode"</b> to ' .
                  $cmode . ' on the ' .
                  $link . ' settings page of the "Save as PDF by Pdfcrowd" plugin.</p>';
            break;
        }
        return $text;
    }

    function save_as_pdf_pdfcrowd() {
        $options = $this->get_options();

        if(!empty($_POST['options'])) {
            $custom_options = unserialize($this->decrypt(urldecode($_POST['options']), $options['api_key']));
            $options = wp_parse_args($custom_options, $options);
        }

        // error_log('decrypted options:');
        // error_log(print_r($options, true));

        $default_conv_mode = 'url';
        if(!isset($options['url']) && isset($options['permalink'])) {
            // use permalink as url
            $options['url'] = $options['permalink'];
            $default_conv_mode = 'upload';
        }

        // decide conversion mode
        if(!isset($options['conversion_mode']) ||
           $options['conversion_mode'] == 'auto') {
            $options['conversion_mode'] = isset($options['url'])
                                        ? $default_conv_mode : 'upload';
        }

        if(!isset($options['username']) || empty($options['username']) &&
           !isset($options['api_key']) || empty($options['api_key'])) {
            // use demo credentials
            $options['username'] = 'wp-demo';
            $options['api_key'] = 'a182eb08c32a11e992c42c4d5455307a';
        }

        $output = self::do_post_request($options);

        $hook_data = array(
            'output' => $output,
            'options' => $options,
            'file_name' => $this->get_output_name($options),
            'error' => is_wp_error($output) ? $output : null
        );

        if(isset($options['pdf_created_callback']) &&
           !empty($options['pdf_created_callback'])) {
            if($options['pdf_created_callback']($hook_data)) {
                return;
            }
        }

        if(is_wp_error($output)) {
            $code = $output->get_error_code();
            $message = $output->get_error_message();
            status_header($code, $message);
            echo $this->get_error_page($code, $message);
        } else {
            // send the generated file to the browser
            header('Content-Type: application/pdf');
            header("Content-Disposition: {$options['button_disposition']}; filename=\"{$hook_data['file_name']}\"");
            header('Cache-Control: no-cache');
            header('Accept-Ranges: none');

            echo $output;
        }

        wp_die();
    }

    private function get_error_page($code, $message) {
        $details = isset(self::$ERROR_MESSAGES[$code]) ? self::$ERROR_MESSAGES[$code] : '';
        return <<<HTML
    <html>
    <body>
    <h1>Pdfcrowd API Error {$code}</h1>
    <p>{$message}</p>
    <p>{$details}</p>
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
