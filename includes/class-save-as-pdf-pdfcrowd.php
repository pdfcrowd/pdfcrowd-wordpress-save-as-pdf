<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://pdfcrowd.com/save-as-pdf-wordpress-plugin/
 * @since      1.0.0
 *
 * @package    Save_As_Pdf_Pdfcrowd
 * @subpackage Save_As_Pdf_Pdfcrowd/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Save_As_Pdf_Pdfcrowd
 * @subpackage Save_As_Pdf_Pdfcrowd/includes
 * @author     Pdfcrowd <support@pdfcrowd.com>
 */
class Save_As_Pdf_Pdfcrowd {

    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      Save_As_Pdf_Pdfcrowd_Loader    $loader    Maintains and registers all hooks for the plugin.
     */
    protected $loader;

    /**
     * The unique identifier of this plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $plugin_name    The string used to uniquely identify this plugin.
     */
    protected $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version    The current version of the plugin.
     */
    protected $version;

    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Load the dependencies, define the locale, and set the hooks for the admin area and
     * the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function __construct() {
        $this->version = self::build_version();
        $this->plugin_name = 'save-as-pdf-pdfcrowd';
        $this->plugin_screen_hook_suffix = null;

        $this->load_dependencies();
        $this->set_locale();
        $this->define_admin_hooks();
        $this->define_public_hooks();

    }

    public static function build_version() {
        if ( defined( 'SAVE_AS_PDF_VERSION' ) ) {
            return SAVE_AS_PDF_VERSION;
        }

        return '2.6.1';
    }

    /**
     * Load the required dependencies for this plugin.
     *
     * Include the following files that make up the plugin:
     *
     * - Save_As_Pdf_Pdfcrowd_Loader. Orchestrates the hooks of the plugin.
     * - Save_As_Pdf_Pdfcrowd_i18n. Defines internationalization functionality.
     * - Save_As_Pdf_Pdfcrowd_Admin. Defines all hooks for the admin area.
     * - Save_As_Pdf_Pdfcrowd_Public. Defines all hooks for the public side of the site.
     *
     * Create an instance of the loader which will be used to register the hooks
     * with WordPress.
     *
     * @since    1.0.0
     * @access   private
     */
    private function load_dependencies() {

        /**
         * The class responsible for orchestrating the actions and filters of the
         * core plugin.
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-save-as-pdf-pdfcrowd-loader.php';

        /**
         * The class responsible for defining internationalization functionality
         * of the plugin.
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-save-as-pdf-pdfcrowd-i18n.php';

        /**
         * The class responsible for defining all actions that occur in the admin area.
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-save-as-pdf-pdfcrowd-admin.php';

        /**
         * The class responsible for defining all actions that occur in the public-facing
         * side of the site.
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-save-as-pdf-pdfcrowd-public.php';

        $this->loader = new Save_As_Pdf_Pdfcrowd_Loader();

    }

    /**
     * Define the locale for this plugin for internationalization.
     *
     * Uses the Save_As_Pdf_Pdfcrowd_i18n class in order to set the domain and to register the hook
     * with WordPress.
     *
     * @since    1.0.0
     * @access   private
     */
    private function set_locale() {

        $plugin_i18n = new Save_As_Pdf_Pdfcrowd_i18n();

        $this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_admin_hooks() {

        $plugin_admin = new Save_As_Pdf_Pdfcrowd_Admin( $this->get_plugin_name(), $this->get_version() );

        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
        $this->loader->add_action( 'admin_menu', $plugin_admin, 'add_plugin_admin_menu' );
        $this->loader->add_action( 'admin_init', $plugin_admin, 'options_update');

        $plugin_basename = plugin_basename( plugin_dir_path( __DIR__ ) . 'save-as-pdf-pdfcrowd.php' );
        $this->loader->add_filter( 'plugin_action_links_' . $plugin_basename, $plugin_admin, 'add_action_links' );

        $this->loader->add_action('wp_ajax_save_as_pdf_pdfcrowd_create_button',
                                  $this, 'create_sample_button');
    }

    /**
     * Register all of the hooks related to the public-facing functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_public_hooks() {

        $plugin_public = new Save_As_Pdf_Pdfcrowd_Public( $this->get_plugin_name(), $this->get_version() );

        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
        $this->loader->add_action( 'init', $plugin_public, 'setup_shortcodes' );
    }

    /**
     * Run the loader to execute all of the hooks with WordPress.
     *
     * @since    1.0.0
     */
    public function run() {
        $this->loader->run();
    }

    /**
     * The name of the plugin used to uniquely identify it within the context of
     * WordPress and to define internationalization functionality.
     *
     * @since     1.0.0
     * @return    string    The name of the plugin.
     */
    public function get_plugin_name() {
        return $this->plugin_name;
    }

    /**
     * The reference to the class that orchestrates the hooks with the plugin.
     *
     * @since     1.0.0
     * @return    Save_As_Pdf_Pdfcrowd_Loader    Orchestrates the hooks of the plugin.
     */
    public function get_loader() {
        return $this->loader;
    }

    /**
     * Retrieve the version number of the plugin.
     *
     * @since     1.0.0
     * @return    string    The version number of the plugin.
     */
    public function get_version() {
        return $this->version;
    }

    public function create_sample_button() {
        $_POST = stripslashes_deep($_POST);
        $out = Save_As_Pdf_Pdfcrowd_Public::create_button_from_style(
            $_POST['style']);
        echo $out;
        die();
    }
}

/**
 *  Create HTML with a button. The helper function for using from your code.
 *
 * @since    1.0.0
 * @return string returns a button
 */
function create_save_as_pdf_pdfcrowd_button($options = array()) {
    $converter = new Save_As_Pdf_Pdfcrowd_Public(
        'save-as-pdf-pdfcrowd', Save_As_Pdf_Pdfcrowd::build_version(), false);
    return $converter->save_as_pdf_pdfcrowd_shortcode_fn($options, null, 'fn');
}
