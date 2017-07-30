<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
$plugin_name = WSFL_PLUGIN_NAME;
$plugin_version = WSFL_PLUGIN_VERSION;
?>
<div id="dotsstoremain">
    <div class="all-pad">
        <header class="dots-header">
            <div class="dots-logo-main">
                <img  src="<?php echo WSFL_PLUGIN_URL . '/admin/images/WSFL.png'; ?>">
            </div>
            <div class="dots-header-right">
                <div class="logo-detail">
                    <strong><?php echo $plugin_name; ?></strong>
                    <span>Free Version <?php echo $plugin_version; ?></span>


                </div>
                <div class="button-dots">
                    <span class="support_dotstore_image"><a href="https://store.multidots.com/woocommerce-enhanced-ecommerce-analytics-integration-with-conversion-tracking" target="_blank"><img  src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/upgrade_new.png'); ?>"> </a></span>
                    <span class="support_dotstore_image"><a  target="_blank" href="https://store.multidots.com/dotstore-support-panel/" > <img   src="<?php echo site_url('wp-content/plugins/woo-ecommerce-tracking-for-google-and-facebook/admin/images/support_new.png'); ?>"></a></span>
                </div>
            </div>
            <?php
            $site_url = "admin.php?page=woo-ecommerce-tracking-for-google-and-facebook&tab=";


            if (!empty($_GET['tab']) && $_GET['tab'] == 'premiuam_version') {
                $premiuam_version = "active";
            } else {
                $premiuam_version = "";
            }
            if (!empty($_GET['tab']) && $_GET['tab'] == 'wc_tracking_for_google_and_facebook') {
                $wc_tracking_for_google_and_facebook = "active";
            } else {
                $wc_tracking_for_google_and_facebook = "";
            }
            if (!empty($_GET['tab']) && $_GET['tab'] == 'premium_wc_tracking_for_google_and_facebook') {
                $premium_wc_tracking_for_google_and_facebook = "active";
            } else {
                $premium_wc_tracking_for_google_and_facebook = "";
            }
            if (!empty($_GET['tab']) && $_GET['tab'] == 'wc_tracking_for_google_and_facebook_get_started_method') {
                $wc_tracking_for_google_and_facebook_get_started_method = "active";
            } else {
                $wc_tracking_for_google_and_facebook_get_started_method = "";
            }
            if (!empty($_GET['tab']) && $_GET['tab'] == 'introduction_ecommerce_analytics') {
                $introduction_ecommerce_analytics = "active";
            } else {
                $introduction_ecommerce_analytics = "";
            }
            ?>
            <div class="dots-menu-main">
                <nav>
                    <ul>
                        <li>
                            <a class="dotstore_plugin <?php echo $wc_tracking_for_google_and_facebook; ?>"  href="<?php echo $site_url . 'wc_tracking_for_google_and_facebook'; ?>">Ecommerce Tracking Settings</a>
                        </li>

                        <li>
                            <a class="dotstore_plugin <?php echo $premium_wc_tracking_for_google_and_facebook; ?>"  href="<?php echo $site_url . 'premium_wc_tracking_for_google_and_facebook'; ?>">Premium Version</a>
                        </li>

                        <li>
                            <a class="dotstore_plugin <?php echo $wc_tracking_for_google_and_facebook_get_started_method; ?> <?php echo $introduction_ecommerce_analytics; ?>"  href="<?php echo $site_url . 'wc_tracking_for_google_and_facebook_get_started_method'; ?>">About Plugin</a>
                            <ul class="sub-menu">
                                <li><a  class="dotstore_plugin <?php echo $wc_tracking_for_google_and_facebook_get_started_method; ?>"  href="<?php echo $site_url . 'wc_tracking_for_google_and_facebook_get_started_method'; ?>">Getting Started</a></li>
                                <li><a class="dotstore_plugin <?php echo $introduction_ecommerce_analytics; ?>" href="<?php echo $site_url . 'introduction_ecommerce_analytics'; ?>">Quick info</a></li>
                                <li><a  target="_blank" href="https://store.multidots.com/suggest-a-feature/">Suggest A Feature</a></li>	
                            </ul>
                        </li>

                        <li>
                            <a class="dotstore_plugin <?php // echo $wc_lite_extra_shipping_dotstore_contact_support_method;           ?>"  href="#">Dotstore</a>
                            <ul class="sub-menu">
                                <li><a target="_blank" href="https://store.multidots.com/go/Flatrate-newui-woocommerce-Plugins">WooCommerce Plugins</a></li>
                                <li><a target="_blank" href="https://store.multidots.com/go/flatrate-newui-Wordpress-Plugins">Wordpress Plugins</a></li><br>
                                <li><a target="_blank" href="https://store.multidots.com/go/flatrate-newui-Wordpress-Plugins">Free Plugins</a></li>
                                <li><a target="_blank" href="https://store.multidots.com/go/flatrate-newui-theme">Free Themes</a></li>
                                <li><a target="_blank" href="https://store.multidots.com/dotstore-support-panel/">Contact Support</a></li>
                            </ul>
                        </li>

                    </ul>

                    </li>

                </nav>
            </div>
        </header>