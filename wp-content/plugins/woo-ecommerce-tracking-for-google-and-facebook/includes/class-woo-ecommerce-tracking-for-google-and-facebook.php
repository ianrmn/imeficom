<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://www.multidots.com/
 * @since      1.0.0
 *
 * @package    Woo_Ecommerce_Tracking_For_Google_And_Facebook
 * @subpackage Woo_Ecommerce_Tracking_For_Google_And_Facebook/includes
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
 * @package    Woo_Ecommerce_Tracking_For_Google_And_Facebook
 * @subpackage Woo_Ecommerce_Tracking_For_Google_And_Facebook/includes
 * @author     Multidots <wordpress@multidots.com>
 */
class Woo_Ecommerce_Tracking_For_Google_And_Facebook {

    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      Woo_Ecommerce_Tracking_For_Google_And_Facebook_Loader    $loader    Maintains and registers all hooks for the plugin.
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

        $this->plugin_name = 'woo-ecommerce-tracking-for-google-and-facebook';
        $this->version = '1.0.0';

        $this->load_dependencies();
        $this->set_locale();
        $this->define_admin_hooks();
        $this->define_public_hooks();
        $prefix = is_network_admin() ? 'network_admin_' : '';
        add_filter("{$prefix}plugin_action_links_" . WSFL_PLUGIN_BASENAME, array($this, 'wsfl_plugin_action_links'), 10, 4);
    }

    /**
     * Load the required dependencies for this plugin.
     *
     * Include the following files that make up the plugin:
     *
     * - Woo_Ecommerce_Tracking_For_Google_And_Facebook_Loader. Orchestrates the hooks of the plugin.
     * - Woo_Ecommerce_Tracking_For_Google_And_Facebook_i18n. Defines internationalization functionality.
     * - Woo_Ecommerce_Tracking_For_Google_And_Facebook_Admin. Defines all hooks for the admin area.
     * - Woo_Ecommerce_Tracking_For_Google_And_Facebook_Public. Defines all hooks for the public side of the site.
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
        require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-woo-ecommerce-tracking-for-google-and-facebook-loader.php';

        /**
         * The class responsible for defining internationalization functionality
         * of the plugin.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-woo-ecommerce-tracking-for-google-and-facebook-i18n.php';

        /**
         * The class responsible for defining all actions that occur in the admin area.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-woo-ecommerce-tracking-for-google-and-facebook-admin.php';

        /**
         * The class responsible for defining all actions that occur in the public-facing
         * side of the site.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'public/class-woo-ecommerce-tracking-for-google-and-facebook-public.php';

        $this->loader = new Woo_Ecommerce_Tracking_For_Google_And_Facebook_Loader();
    }

    /**
     * Define the locale for this plugin for internationalization.
     *
     * Uses the Woo_Ecommerce_Tracking_For_Google_And_Facebook_i18n class in order to set the domain and to register the hook
     * with WordPress.
     *
     * @since    1.0.0
     * @access   private
     */
    private function set_locale() {

        $plugin_i18n = new Woo_Ecommerce_Tracking_For_Google_And_Facebook_i18n();
        $plugin_i18n->set_domain($this->get_plugin_name());

        $this->loader->add_action('plugins_loaded', $plugin_i18n, 'load_plugin_textdomain');
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_admin_hooks() {

        $plugin_admin = new Woo_Ecommerce_Tracking_For_Google_And_Facebook_Admin($this->get_plugin_name(), $this->get_version());

        $this->loader->add_action('admin_enqueue_scripts', $plugin_admin, 'enqueue_styles');
        $this->loader->add_action('admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts');
        $this->loader->add_action('wp_ajax_add_plugin_user_wetfgfree', $plugin_admin, 'wp_add_plugin_userfn_wetfgffnfree');
        $this->loader->add_action('wp_ajax_nopriv_add_plugin_user_wetfgfree', $plugin_admin, 'wp_add_plugin_userfn_wetfgffnfree');

        $this->loader->add_action('admin_init', $plugin_admin, 'welcome_woocommerce_ecommerce_tracking_for_google_and_facebook_screen_do_activation_redirect');
        $this->loader->add_action('admin_menu', $plugin_admin, 'welcome_pages_screen_woocommerce_ecommerce_tracking_for_google_and_facebook');
        $this->loader->add_action('admin_menu', $plugin_admin, 'welcome_screen_woocommerce_ecommerce_tracking_for_google_and_facebook_remove_menus', 999);

        if (empty($GLOBALS['admin_page_hooks']['dots_store'])) {
            $this->loader->add_action('admin_menu', $plugin_admin, 'dot_store_menu_traking_fbg');
        }

        $this->loader->add_action("admin_menu", $plugin_admin, "add_new_menu_items_traking_fbg");
        if (!empty($_GET['page']) && (($_GET['page'] == 'woo-ecommerce-tracking-for-google-and-facebook'))) {
            $this->loader->add_filter('admin_footer_text', $plugin_admin, 'wsfl_admin_footer_review');
        }
    }

    /**
     * Register all of the hooks related to the public-facing functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_public_hooks() {

        $site_url = site_url();
        $plugin_public = new Woo_Ecommerce_Tracking_For_Google_And_Facebook_Public($this->get_plugin_name(), $this->get_version());

        //Check Ecommerce Tracking is Enable
        $ecommerce_tracking_settings_load_ecommerce_tracking_code = get_option('ecommerce_tracking_settings_load_ecommerce_tracking_code');

        //Check Facebook Conversion is Enable
        $ecommerce_tracking_settings_facebook_conversion_code = get_option('ecommerce_tracking_settings_facebook_conversion_code');

        //Check Google Conversion is Enable
        $ecommerce_tracking_settings_google_conversion_code = get_option('ecommerce_tracking_settings_google_conversion_code');

        $this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_styles');
        $this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_scripts');

        if ($ecommerce_tracking_settings_load_ecommerce_tracking_code == 'yes') {
            $this->loader->add_action('woocommerce_order_details_after_order_table', $plugin_public, 'woocommerce_load_ecommerce_tracking_code');
        }

        if ($ecommerce_tracking_settings_facebook_conversion_code == 'yes') {
            $this->loader->add_action('woocommerce_thankyou', $plugin_public, 'woo_ecommerce_fb_conversion_tracking', 10, 1);
        }

        if ($ecommerce_tracking_settings_google_conversion_code == 'yes') {
            $this->loader->add_action('woocommerce_thankyou', $plugin_public, 'woo_ecommerce_google_conversion_tracking', 10, 1);
        }
        $this->loader->add_filter('woocommerce_paypal_args', $plugin_public, 'paypal_bn_code_filter_free_advance_tracking', 99, 1);
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
     * @return    Woo_Ecommerce_Tracking_For_Google_And_Facebook_Loader    Orchestrates the hooks of the plugin.
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

    /**
     * Return the plugin action links.  This will only be called if the plugin
     * is active.
     *
     * @since 1.0.0
     * @param array $actions associative array of action names to anchor tags
     * @return array associative array of plugin action links
     */
    public function wsfl_plugin_action_links($actions, $plugin_file, $plugin_data, $context)
    {
        $custom_actions = array(
            'configure' => sprintf('<a href="%s">%s</a>', admin_url('admin.php?page=woo-ecommerce-tracking-for-google-and-facebook&tab=wc_tracking_for_google_and_facebook'), __('Settings', $this->plugin_name)),
            'Premium' => sprintf('<a href="%s" target="_blank" style="color: rgba(10, 154, 62, 1); font-weight: bold; font-size: 13px;">%s</a>', 'https://store.multidots.com/woocommerce-enhanced-ecommerce-analytics-integration-with-conversion-tracking', __('Upgrade To Pro', $this->plugin_name)),

        );

        // add the links to the front of the actions list
        return array_merge($custom_actions, $actions);
    }

}
