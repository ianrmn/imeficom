<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.multidots.com/
 * @since      1.0.0
 *
 * @package    Woo_Ecommerce_Tracking_For_Google_And_Facebook
 * @subpackage Woo_Ecommerce_Tracking_For_Google_And_Facebook/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Woo_Ecommerce_Tracking_For_Google_And_Facebook
 * @subpackage Woo_Ecommerce_Tracking_For_Google_And_Facebook/admin
 * @author     Multidots <wordpress@multidots.com>
 */
class Woo_Ecommerce_Tracking_For_Google_And_Facebook_Admin {

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
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Woo_Ecommerce_Tracking_For_Google_And_Facebook_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Woo_Ecommerce_Tracking_For_Google_And_Facebook_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        if (isset($_GET['page']) && !empty($_GET['page']) && ($_GET['page'] == 'woo-ecommerce-tracking-for-google-and-facebook')) {
            wp_enqueue_style($this->plugin_name . 'font-awesome', plugin_dir_url(__FILE__) . 'css/font-awesome.min.css', array(), $this->version, 'all');
            wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/woo-ecommerce-tracking-for-google-and-facebook-admin', array(), $this->version, 'all');
            wp_enqueue_style('fancybox-css', plugin_dir_url(__FILE__) . 'css/jquery.fancybox.css', array(), $this->version, 'all');
            wp_enqueue_style('advance-ecommerce-tracking-main-style', plugin_dir_url(__FILE__) . 'css/style.css', array(), $this->version);
            wp_enqueue_style('advance-ecommerce-tracking-media', plugin_dir_url(__FILE__) . 'css/media.css', array(), $this->version);
            wp_enqueue_style('advance-ecommerce-tracking-webkit', plugin_dir_url(__FILE__) . 'css/webkit.css', array(), $this->version);
        }
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Woo_Ecommerce_Tracking_For_Google_And_Facebook_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Woo_Ecommerce_Tracking_For_Google_And_Facebook_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        if (isset($_GET['page']) && !empty($_GET['page']) && ($_GET['page'] == 'woo-ecommerce-tracking-for-google-and-facebook')) {
            wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/woo-ecommerce-tracking-for-google-and-facebook-admin.js', array('jquery', 'jquery-ui-dialog'), $this->version, false);
            //enqueue script for notice pointer
            wp_enqueue_script('wp-pointer');
            wp_enqueue_style('wp-jquery-ui-dialog');
            wp_enqueue_script('fancy-box', plugin_dir_url(__FILE__) . 'js/jquery.fancybox.js', array('jquery'), $this->version);
            wp_enqueue_script('fancybox', plugin_dir_url(__FILE__) . 'js/jquery.fancybox.pack.js', array('jquery'), $this->version);
            wp_enqueue_script('fancybox-buttons', plugin_dir_url(__FILE__) . 'js/jquery.fancybox-buttons.js', array('jquery'), $this->version);
            wp_enqueue_script('fancybox-media', plugin_dir_url(__FILE__) . 'js/jquery.fancybox-media.js', array('jquery'), $this->version);
            wp_enqueue_script('fancybox-thumbs', plugin_dir_url(__FILE__) . 'js/jquery.fancybox-thumbs.js', array('jquery'), $this->version);
        }
    }

    public function wp_add_plugin_userfn_wetfgffnfree() {

        $email_id = (isset($_POST["email_id"]) && !empty($_POST["email_id"])) ? $_POST["email_id"] : '';
        $log_url = $_SERVER['HTTP_HOST'];
        $cur_date = date('Y-m-d');
        $request_url = 'http://www.multidots.com/store/wp-content/themes/business-hub-child/API/wp-add-plugin-users.php';
        if (!empty($email_id)) {
            $request_response = wp_remote_post($request_url, array('method' => 'POST',
                'timeout' => 45,
                'redirection' => 5,
                'httpversion' => '1.0',
                'blocking' => true,
                'headers' => array(),
                'body' => array('user' => array('plugin_id' => '8', 'user_email' => $email_id, 'plugin_site' => $log_url, 'status' => 1, 'activation_date' => $cur_date)),
                'cookies' => array()));
        }
        update_option('wcetsmfree_plugin_notice_shown', 'true');
    }

    public function hide_subscribe_wetfgffn() {
        $email_id = $_POST['email_id'];
        update_option('wetfgf_free_plugin_notice_shown', 'true');
    }

// Function for welocme screen page

    public function welcome_woocommerce_ecommerce_tracking_for_google_and_facebook_screen_do_activation_redirect() {


        if (!get_transient('_welcome_screen_woocommerce_ecommerce_tracking_for_google_and_facebook_activation_redirect_data')) {
            return;
        }

// Delete the redirect transient
        delete_transient('_welcome_screen_woocommerce_ecommerce_tracking_for_google_and_facebook_activation_redirect_data');

// if activating from network, or bulk
        if (is_network_admin() || isset($_GET['activate-multi'])) {
            return;
        }
// Redirect to extra cost welcome  page
//        wp_safe_redirect(add_query_arg(array('page' => 'woo-ecommerce-tracking-for-google-and-facebook&tab=about'), admin_url('index.php')));
        wp_safe_redirect(add_query_arg(array('page' => 'woo-ecommerce-tracking-for-google-and-facebook&tab=wc_tracking_for_google_and_facebook_get_started_method'), admin_url('admin.php')));
    }

    public function welcome_pages_screen_woocommerce_ecommerce_tracking_for_google_and_facebook() {
        add_dashboard_page(
                'Woocommerce-Ecommerce-Conversion-Tracking-for-Google-and-Facebook-Dashboard', 'Woocommerce Ecommerce Conversion Tracking for Google and Facebook Dashboard', 'read', 'woo-ecommerce-tracking-for-google-and-facebook', array(&$this, 'welcome_screen_content_woocommerce_ecommerce_conversion')
        );
    }

    /**
     * Dotstore menu.
     */
// custom menu for dots store menu

    public function dot_store_menu_traking_fbg() {
        global $GLOBALS;
        if (empty($GLOBALS['admin_page_hooks']['dots_store'])) {
            add_menu_page(
                    'DotStore Plugins', 'DotStore Plugins', 'NULL', 'dots_store', array($this, 'dot_store_menu_customer_io'), plugin_dir_url(__FILE__) . 'images/menu-icon.png', 25
            );
        }
    }

// custom submenu for extra flate rate shipping 

    public function add_new_menu_items_traking_fbg() {
        add_submenu_page("dots_store", "Woo Ecommerce Tracking For Google And Facebook", "Woo Ecommerce Tracking For Google And Facebook", "manage_options", "woo-ecommerce-tracking-for-google-and-facebook", 'custom_woo_traking_facebook_google', "", 99);

        function custom_woo_traking_facebook_google() {

            $url = site_url('wp-admin/admin.php?page=woo-ecommerce-tracking-for-google-and-facebook&tab=wc_tracking_for_google_and_facebook');
            include_once('partials/header/plugin-header.php');
            if (!empty($_GET['tab'])) {

                if ($_GET['tab'] == 'wc_tracking_for_google_and_facebook') {
                    wc_tracking_for_google_and_facebook_setting();
                }
                if ($_GET['tab'] == 'premium_wc_tracking_for_google_and_facebook') {
                    premium_wc_tracking_for_google_and_facebook();
                }
                if ($_GET['tab'] == 'wc_tracking_for_google_and_facebook_get_started_method') {
                    get_started_dots_plugin_settings();
                }
                if ($_GET['tab'] == 'introduction_ecommerce_analytics') {
                    introduction_ecommerce_analytics();
                }
            } else {
                ?>
                <script>location.href = '<?php echo $url; ?>';</script>
                <?php
            }
            include_once('partials/header/plugin-sidebar.php');
        }

    }

    /**
     * Remove the Extra flate rate menu in dashboard
     *
     */
    public function welcome_screen_woocommerce_ecommerce_tracking_for_google_and_facebook_remove_menus() {
        remove_submenu_page('index.php', 'woo-ecommerce-tracking-for-google-and-facebook');
    }

    public function woo_advance_tracking_custom_admin_pointers_footer() {
        $admin_pointers = woo_advance_tracking_custom_admin_pointers();
        ?>
        <script type="text/javascript">
            /* <![CDATA[ */
            (function($) {
        <?php
        foreach ($admin_pointers as $pointer => $array) {
            if ($array['active']) {
                ?>
                        $('<?php echo $array['anchor_id']; ?>').pointer({
                            content: '<?php echo $array['content']; ?>',
                            position: {
                                edge: '<?php echo $array['edge']; ?>',
                                align: '<?php echo $array['align']; ?>'
                            },
                            close: function() {
                                $.post(ajaxurl, {
                                    pointer: '<?php echo $pointer; ?>',
                                    action: 'dismiss-wp-pointer'
                                });
                            }
                        }).pointer('open');
                <?php
            }
        }
        ?>
            })(jQuery);
            /* ]]> */
        </script>
        <?php
    }
    function wsfl_admin_footer_review() {
        echo 'If you like <strong>WooCommerce Enhanced Ecommerce Analytics Integration with Conversion Tracking</strong> plugin, please leave us ★★★★★ ratings on <a href="https://wordpress.org/support/plugin/woo-ecommerce-tracking-for-google-and-facebook/reviews/#new-post" target="_blank">WordPress</a>.';
    }

}

/**
 * Function for add custom pointer
 *
 * @return unknown
 */

function wc_tracking_for_google_and_facebook_setting() {

    if (isset($_POST['wcafg_submit_plugin'])) {

        $enable_ecommerce_trackings = isset($_POST['ecommerce_tracking_settings_load_ecommerce_tracking_code']) ? $_POST['ecommerce_tracking_settings_load_ecommerce_tracking_code'] : "";
        $Enable_facebook_conversion = isset($_POST['ecommerce_tracking_settings_facebook_conversion_code']) ? $_POST['ecommerce_tracking_settings_facebook_conversion_code'] : "";
        $enable_google_conversion = isset($_POST['ecommerce_tracking_settings_google_conversion_code']) ? $_POST['ecommerce_tracking_settings_google_conversion_code'] : "";

        $Facebook_track_ID = isset($_POST['ecommerce_tracking_settings_facebook_track_id']) ? $_POST['ecommerce_tracking_settings_facebook_track_id'] : "";
        $Google_conversion_ID = isset($_POST['ecommerce_tracking_settings_google_conversion_id']) ? $_POST['ecommerce_tracking_settings_google_conversion_id'] : "";
        $Google_conversion_label = isset($_POST['ecommerce_tracking_settings_google_conversion_label']) ? $_POST['ecommerce_tracking_settings_google_conversion_label'] : "";

        // get value of form
        if (!empty($enable_ecommerce_trackings)) {
            $enable_ecommerce_trackings_value = "yes";
        } else {
            $enable_ecommerce_trackings_value = "no";
        }

        if (!empty($Enable_facebook_conversion)) {
            $Enable_facebook_conversion_value = "yes";
        } else {
            $Enable_facebook_conversion_value = "no";
        }

        if (!empty($enable_google_conversion)) {
            $enable_google_conversion_value = "yes";
        } else {
            $enable_google_conversion_value = "no";
        }

// update or add option into database

        $ecommerce_tracking_settings_load_ecommerce_tracking_code = get_option('ecommerce_tracking_settings_load_ecommerce_tracking_code');
        $ecommerce_tracking_settings_facebook_conversion_code = get_option('ecommerce_tracking_settings_facebook_conversion_code');
        $ecommerce_tracking_settings_google_conversion_code = get_option('ecommerce_tracking_settings_google_conversion_code');

        $ecommerce_tracking_settings_facebook_track_id = get_option('ecommerce_tracking_settings_facebook_track_id');
        $ecommerce_tracking_settings_google_conversion_id = get_option('ecommerce_tracking_settings_google_conversion_id');
        $ecommerce_tracking_settings_google_conversion_label = get_option('ecommerce_tracking_settings_google_conversion_label');


        if (!empty($ecommerce_tracking_settings_load_ecommerce_tracking_code)) {
            update_option('ecommerce_tracking_settings_load_ecommerce_tracking_code', $enable_ecommerce_trackings_value);
        } else {
            add_option('ecommerce_tracking_settings_load_ecommerce_tracking_code', $enable_ecommerce_trackings_value);
        }

        if (!empty($ecommerce_tracking_settings_facebook_conversion_code)) {
            update_option('ecommerce_tracking_settings_facebook_conversion_code', $Enable_facebook_conversion_value);
        } else {
            add_option('ecommerce_tracking_settings_facebook_conversion_code', $Enable_facebook_conversion_value);
        }

        if (!empty($ecommerce_tracking_settings_google_conversion_code)) {
            update_option('ecommerce_tracking_settings_google_conversion_code', $enable_google_conversion_value);
        } else {
            add_option('ecommerce_tracking_settings_google_conversion_code', $enable_google_conversion_value);
        }

        if (!empty($ecommerce_tracking_settings_facebook_track_id)) {
            update_option('ecommerce_tracking_settings_facebook_track_id', $Facebook_track_ID);
        } else {
            update_option('ecommerce_tracking_settings_facebook_track_id', $Facebook_track_ID);
        }

        if (!empty($ecommerce_tracking_settings_google_conversion_id)) {
            update_option('ecommerce_tracking_settings_google_conversion_id', $Google_conversion_ID);
        } else {
            update_option('ecommerce_tracking_settings_google_conversion_id', $Google_conversion_ID);
        }

        if (!empty($ecommerce_tracking_settings_google_conversion_label)) {
            update_option('ecommerce_tracking_settings_google_conversion_label', $Google_conversion_label);
        } else {
            update_option('ecommerce_tracking_settings_google_conversion_label', $Google_conversion_label);
        }
        ?>
        <div id="message" class="updated inline"><p><strong>Your settings have been saved.</strong></p></div>
        <?php
    }
    ?>
    <div class="waet-table">	
        <form id="cw_plugin_form_id" method="post" action="" enctype="multipart/form-data" novalidate="novalidate"> 

            <div class="under-table third-tab">
                <div class="set">
                    <h2>Ecommerce Tracking Settings</h2>
                </div>

                <table class="table-outer form-table">
                    <tbody>  

                        <tr>
                            <td class="ur-1"><?php echo __("Enable Ecommerce Tracking", WSFL_PLUGIN_SLUG); ?>s</td>
                            <?php
                            $ecommerce_trackings = get_option('ecommerce_tracking_settings_load_ecommerce_tracking_code');
                            ?>
                            <td class="ur-2">
                                <input name="ecommerce_tracking_settings_load_ecommerce_tracking_code" id="ecommerce_tracking_settings_load_ecommerce_tracking_code" type="checkbox" class="" value="1" <?php
                                if ($ecommerce_trackings == 'yes') {
                                    echo 'checked';
                                }
                                ?> >
                                <span class="enable_ecommerce_tracking_disctiption_tab"><i class="fa fa-question-circle "></i></span>
                                <p class="description" style="display:none;">Enable Ecommerce Tracking on Thank you Page</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="ur-1"><?php echo __("Enable Facebook Conversion", WSFL_PLUGIN_SLUG); ?> </td>
                            <?php
                            $Enable_facebook = get_option('ecommerce_tracking_settings_facebook_conversion_code');
                            ?>
                            <td class="ur-2">
                                <input name="ecommerce_tracking_settings_facebook_conversion_code" id="ecommerce_tracking_settings_facebook_conversion_code" type="checkbox" class="" value="1" <?php
                                if ($Enable_facebook == 'yes') {
                                    echo 'checked';
                                }
                                ?>> 
                                <span class="enable_ecommerce_tracking_disctiption_tab"><i class="fa fa-question-circle "></i></span>
                                <p class="description" style="display:none;">Enable Facebook Conversion</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="ur-1"><?php echo __("Enable Google Conversion", WSFL_PLUGIN_SLUG); ?> </td>
                            <?php
                            $Enable_Google = get_option('ecommerce_tracking_settings_google_conversion_code');
                            ?>
                            <td class="ur-2">
                                <input name="ecommerce_tracking_settings_google_conversion_code" id="ecommerce_tracking_settings_google_conversion_code" type="checkbox" class="" value="1" <?php
                                if ($Enable_Google == 'yes') {
                                    echo 'checked';
                                }
                                ?>> 
                                <span class="enable_ecommerce_tracking_disctiption_tab"><i class="fa fa-question-circle "></i></span>
                                <p class="description" style="display:none;">Enable Google Conversion</p>
                            </td>
                        </tr>

                        <tr>
                            <?php
                            $Facebook_track = get_option('ecommerce_tracking_settings_facebook_track_id');
                            ?>
                            <td class="ur-1"><?php echo __("Facebook Track ID", WSFL_PLUGIN_SLUG); ?> </td>
                            <td class="ur-2">
                                <input value="<?php echo isset($Facebook_track) ? $Facebook_track : ""; ?>" name="ecommerce_tracking_settings_facebook_track_id" id="ecommerce_tracking_settings_facebook_track_id" type="text" style="" value="" class="" placeholder=""> 
                                <span class="enable_ecommerce_tracking_disctiption_tab"><i class="fa fa-question-circle "></i></span>
                                <p class="description" style="display:none;">Enter Facebook Track ID</p>
                            </td> 
                        </tr>

                        <tr>
                            <?php
                            $Google_conversion = get_option('ecommerce_tracking_settings_google_conversion_id');
                            ?>
                            <td class="ur-1"><?php echo __("Google Conversion ID", WSFL_PLUGIN_SLUG); ?> </td>
                            <td class="ur-2">
                                <input value="<?php echo isset($Google_conversion) ? $Google_conversion : ""; ?>" name="ecommerce_tracking_settings_google_conversion_id" id="ecommerce_tracking_settings_google_conversion_id" type="text" style="" value="" class="" placeholder=""> 
                                <span class="enable_ecommerce_tracking_disctiption_tab"><i class="fa fa-question-circle "></i></span>
                                <p class="description" style="display:none;">Google Conversion ID</p>	
                            </td>
                        </tr>

                        <tr>
                            <?php
                            $Google_conversion_label = get_option('ecommerce_tracking_settings_google_conversion_label');
                            ?>
                            <td class="ur-1"><?php echo __("Google Conversion Label", WSFL_PLUGIN_SLUG); ?> </td>
                            <td class="ur-2">
                                <input value="<?php echo isset($Google_conversion_label) ? $Google_conversion_label : ""; ?>" name="ecommerce_tracking_settings_google_conversion_label" id="ecommerce_tracking_settings_google_conversion_label" type="text" style="" value="" class="" placeholder="">
                                <span class="enable_ecommerce_tracking_disctiption_tab" ><i class="fa fa-question-circle "></i></span>
                                <p class="description" style="display:none;">Google Conversion Label</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="submit save-for-later" id="save-for-later">
                    <input type="submit" value="Save Changes" class="button button-primary" id="wsfl_submit_plugin" name="wcafg_submit_plugin">
                </p>
            </div>
        </form>
    </div>
    <?php
}

function premium_wc_tracking_for_google_and_facebook() {
    ?>
    <div id="main-tab">
        <div class="wrapper">
            <div class="tab-dot">
                <div class="waet-table res-cl key-featured">
                    <h2>Free vs Premium </h2>
                    <table class="form-table table-outer premium-free-table" align="center">
                        <thead>
                            <tr class="blue">
                                <th>KEY FEATURES LIST</th>
                                <th>FREE</th>
                                <th>PREMIUM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="dark">
                                <td class="pad">WooCommerce Ecommerce tracking functionality.(on Thank you Page)</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr>
                                <td class="pad">Google Conversion tracking functionality.</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr class="dark">
                                <td class="pad">Facebook Conversion tracking functionality. </td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr>
                                <td class="pad">Easy Integration with Multiple Analytics tools</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr class="dark">
                                <td class="pad">Woopra Ecommerce Tracking</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr>
                                <td class="pad">Gosquared Ecommerce Tracking</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>

                            <tr class="dark">
                                <td class="pad">Twitter Ecommerce Conversion</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr>
                                <td class="pad">Allows you to Track below Event</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr class="dark">
                                <td class="pad">Track Place Order</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr>
                                <td class="pad">Track Add to Cart</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr class="dark">
                                <td class="pad">Track Remove from Cart</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr>
                                <td class="pad">Track Order Complete</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr class="dark">
                                <td class="pad">Track Discount Coupon</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr>
                                <td class="pad">Tracking Total Order Revenue</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr class="dark">
                                <td class="pad">Track User Register</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr>
                                <td class="pad">Track No of Transaction</td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/trash.png'); ?>"></td>
                                <td><img src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/check-mark.png'); ?>"></td>
                            </tr>
                            <tr class="pad radius-s">
                                <td class="pad"></td>
                                <td></td>
                                <td class="green red"><a href="https://store.multidots.com/woocommerce-enhanced-ecommerce-analytics-integration-with-conversion-tracking" target="_blank">UPGRADE TO <br> PREMIUM VERSION </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
}

function get_started_dots_plugin_settings() {
    $current_user = wp_get_current_user();
    if (!get_option('wcetsmfree_plugin_notice_shown')) {
        ?>
        <div id="wcetsmfree_dialog">
            <p><?php _e('Be the first to get latest updates and exclusive content straight to your email inbox.', WSFL_PLUGIN_TEXT_DOMAIN); ?></p>
            <p><input type="text" id="txt_user_sub_wcetsm" class="regular-text" name="txt_user_sub_wcetsm" value="<?php echo $current_user->user_email; ?>"></p>
        </div>
    <?php } ?>
    ?>
    <div class="waet-table res-cl">
        <h2>Thanks For Installing</h2>
        <table class="form-table table-outer">
            <tbody>
                <tr>
                    <td class="fr-2">
                        <p class="block gettingstarted"><strong>Getting Started </strong></p>
                        <p class="block textgetting">
                            With this plugin, you can track Ecommerce tracking, Facebook Conversion, Google Conversion into your WooCommerce site. This plugin is boosting your business and Enhance your marketing.This plugin gives you the option to track your order in Google using Ecommerce tracking code
                        </p>
                        <p class="block textgetting">
                            <strong>Step 1 :</strong> Enable e-commerce tracking on Thank you Page
                            <span class="gettingstarted">
                                <img style="border-bottom: 2px solid #E9E9E9;margin-top: 3%;"src="<?php echo plugin_dir_url(__FILE__) . 'images/ecommerce_tracking_get_started.png'; ?>"></span>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <?php
}

function introduction_ecommerce_analytics() {

    $plugin_name = WSFL_PLUGIN_NAME;
    $plugin_version = WSFL_PLUGIN_VERSION;
    ?>
    <div class="waet-table">	
        <form id="cw_plugin_form_id_second"  > 
            <style type="text/css">.dotstore_plugin_supports_feature {margin-top: -19px !important;}</style>
            <div class="under-table third-tab">
                <div class="set">
                    <h2><?php echo __("Quick info", WSFL_PLUGIN_SLUG); ?></h2>
                </div>
                <table class="form-table table-outer">
                    <tbody>
                        <tr>
                            <td class="fr-1">Product Type</td>
                            <td class="fr-2">WordPress Plugin</td>
                        </tr>
                        <tr>
                            <td class="fr-1">Product Name</td>
                            <td class="fr-2"><?php echo $plugin_name; ?></td>
                        </tr>
                        <tr>
                            <td class="fr-1">Installed Version</td>
                            <td class="fr-2"><?php echo $plugin_version; ?></td>
                        </tr>
                        <tr>
                            <td class="fr-1">License & Terms of use</td>
                            <td class="fr-2"> <a href="https://store.multidots.com/terms-conditions/" target="_blank">Click here</a> to view license and terms of use.</td>
                        </tr>
                        <tr>
                            <td class="fr-1">Help & Support</td>
                            <td class="fr-2">
                                <ul style="margin-left: 15px !important;list-style: inherit; ">
                                    <li><a href="#"> Quick Start Guide</a></li>
                                    <li><a href="https://store.multidots.com/docs/plugins/woocommerce-enhanced-ecommerce-analytics-integration-conversion-tracking/">Documentation</a></li>
                                    <li><a href="https://store.multidots.com/dotstore-support-panel/"> Support Fourm</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="fr-1">Localization</td>
                            <td class="fr-2">English ,Spanish</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </form>
    </div>

    <?php

}
