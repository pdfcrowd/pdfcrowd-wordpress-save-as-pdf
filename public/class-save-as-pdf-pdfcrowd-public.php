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
    public function __construct( $plugin_name, $version ) {
        global $wpdb;

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->table_name = $wpdb->prefix . "save-as-pdf-pdfcrowd";

        add_filter('the_content', array(&$this, 'show_button'));
        add_filter('the_excerpt', array(&$this, 'show_button'));
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
        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/save-as-pdf-pdfcrowd-public.js', array( 'jquery' ), $this->version, false );
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
        'button_alignment' => 'center',
        'button_background_color' => '#007bff',
        'button_border_color' => '#007bff',
        'button_border_style' => 'solid',
        'button_border_width' => '1',
        'button_disposition' => 'attachment',
        'button_format' => 'image-text',
        'button_hidden' => '1',
        'button_image' => 'images/pdf1.svg',
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
        'dev_mode' => '0',
        'no_margins' => '0',
        'output_format' => 'pdf',
        'rendering_mode' => 'viewport',
        'use_print_media' => '1',
        'username' => '',
        'viewport_width' => '1200',
    );

    private static $ERROR_MESSAGES = array(
        400 => "The user sent an invalid request.",
        401 => "Authentication is required and has failed or has not yet been provided or your license does not exist.",
        403 => "Your license is suspended or there are no credits left.",
        405 => "The method specified in the request is not allowed. The request method must be POST.",
        413 => "<p>The size limit for the uploaded data is 50MB.</p> <p>You can zip your HTML to avoid this error.</p>
",
        429 => "The user has sent too many requests in a given amount of time (rate limiting).",
        430 => "<p>The limit of max concurrent requests was exceeded.</p>",
        452 => "There is nothing specified to be converted.",
        453 => "Some conversion option is unknown. See details in HTTP response body.",
        454 => "The input is too complex or large. It can not be converted. Try to simplify your input data.",
        455 => "The conversion can not be finished due to a system error.",
        456 => "The input file is not specified correctly. Files are accepted only in multipart POST requests.",
        457 => "The type of the input file is unknown. The file has no extension.",
        458 => "<p>The request was aborted because it took long time.</p> <p>A typical cause of this error is too many images in the HTML page which take too long to download. Another cause might be a long running JavaScript.</p> <p>Try to simplify your input data or speed up the page load time.</p>
",
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
        481 => "<p>There was a problem connecting to Pdfcrowd servers over HTTPS. This could be caused by several reasons, one of them is that your local CA certificate store is out of date or not configured correctly.</p> <p>An alternative is to use the API over HTTP. The HTTP mode can be enabled by the <a href='/doc/api/method-index/#html_to_pdf_set_use_http'>setUseHttp</a> method.<p>
",
        502 => "The 502 status code indicates a temporary network issue. Try the request again.",
    );

    private function get_options() {
        return get_option($this->plugin_name, self::$DEFAULTS);
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

    private static function startsWith($text, $start)
    {
        $len = strlen($start);
        return (substr($text, 0, $len) === $start);
    }

    public static function create_button_from_style(
        $options, $custom_options, $content='') {
        $image = '';
        if(strpos($options['button_format'], 'image') !== false) {
            $image_style = "style='width: {$options['button_image_width']}px; height: {$options['button_image_height']}px;'";
            $image_url = $options['button_image'] == 'custom_image' ? $options['button_image_url'] : 'https://cdn.pdfcrowd.com/' . $options['button_image'];
            $image = "<img $image_style src=\"$image_url\"/>";
        }

        $btn_style = self::rect_to_style('margin', $options);

        $classes = 'save-as-pdf-pdfcrowd-button-wrap';
        if(!empty($options['button_hidden'])) {
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
        $button = "<div class='$classes'{$div_style}><div class='save-as-pdf-pdfcrowd-button'{$btn_style} onclick='window.SaveAsPDFPdfcrowd(\"$custom_options\");'>";

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

    private function create_button($options, $custom_options, $content='') {
        // serialize custom attributes to string
        $custom_options = $custom_options ? $this->encrypt(serialize($custom_options), $options['api_key']) : '';

        return $this->create_button_from_style($options,
                                               urlencode($custom_options),
                                               $content);
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

        return $this->create_button($options,
                                    array('url' => get_permalink()),
                                    $content);
    }

    private function eval_shortcode($attrs, $content, $custom_options) {
        // merge attrs with the default options defined on the settings page
        $options = $this->get_options();

        if($attrs) {
            foreach($attrs as $key => $value) {
                if(self::startsWith($key, 'button_')) {
                    $options[$key] = $value;
                } else {
                    $custom_options[$key] = $value;
                }
            }
        }

        return $this->create_button($options, $custom_options, $content);
    }

    function save_as_pdf_pdfcrowd_shortcode($attrs = array(), $content = null) {
        $custom_options = array('url' => get_permalink());
        return $this->eval_shortcode($attrs, $content, $custom_options);
   }

    function block_save_as_pdf_pdfcrowd_shortcode($attrs = array(), $content = null) {
        // merge attrs with the default options defined on the settings page
        $options = $this->get_options();

        // run shortcode parser recursively
        $content = do_shortcode($content);

        $custom_options = array('html' => $content);
        if(!isset($attrs['output_name'])) {
            // add url so default name can be created
            $custom_options['url'] = get_permalink();
        }
        return $this->eval_shortcode($attrs, $content, $custom_options);
    }

    private function embed_styles($html) {
        $my_domain = $_SERVER['SERVER_NAME'];
        $output = preg_replace_callback(
            "/(?i)\<link rel=[\'\"]stylesheet[\'\"](?<pre>.*?)href=[\'\"](?<url>https?:\/\/{$my_domain}.*?)[\'\"](?<post>.*?)\/\>/",
            function ($match) {
                $content = wp_remote_retrieve_body(wp_remote_get($match['url']));
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
            if(!empty($part)) {
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

    function save_as_pdf_pdfcrowd() {
        $options = $this->get_options();

        if(!empty($_POST['options'])) {
            $custom_options = unserialize($this->decrypt(urldecode($_POST['options']), $options['api_key']));
            $options = wp_parse_args($custom_options, $options);
        }

        if(!isset($options['username']) || empty($options['username']) &&
           !isset($options['api_key']) || empty($options['api_key'])) {
            // use demo credentials
            $options['username'] = 'wp-demo';
            $options['api_key'] = 'a182eb08c32a11e992c42c4d5455307a';
        }

        $client = new \SaveAsPdfPdfcrowd\HtmlToPdfClient(
            $options['username'],
            $options['api_key']);

        global $wp_version;
        $client->setUserAgent('pdfcrowd_wordpress_plugin/1.0.0 ('
                             . $wp_version . '/' . phpversion() . ')');

        $html = $url = null;
        if(isset($options['html'])) {
            $html = $options['html'];
        } else {
            $url = $options['url'];
        }

        try {
            // configure conversion
            foreach($options as $key => $value) {
                $method = 'set' . $this->get_function_name($key);
                if(method_exists($client, $method) && $value) {
                    $client->$method($value);
                }
            }

            $name = $this->get_output_name($options);

            if($html != null) {
                $output = $client->convertString($html);
            } elseif(empty($options['dev_mode'])) {
                $output = $client->convertUrl($url);
            } else {
                // use convert string method instead
                $content = wp_remote_retrieve_body(wp_remote_get($url));
                $content = $this->embed_styles($content);
                $output = $client->convertString($content);
            }

            // send the generated file to the browser
            header('Content-Type: application/pdf');
            header("Content-Disposition: {$options['button_disposition']}; filename=\"$name\"");
            header('Cache-Control: no-cache');
            header('Accept-Ranges: none');

            echo $output;
        } catch(\SaveAsPdfPdfcrowd\Error $why) {
            status_header($why->getCode(), $why->getMessage());
            echo $this->get_error_page($why->getCode(), $why->getMessage());
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
