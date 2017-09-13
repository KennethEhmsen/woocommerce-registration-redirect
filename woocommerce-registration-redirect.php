<?php
/**
 * Plugin Name: WooCommerce Registration Redirect
 * Description: After registration, logout the user and redirect to home page in WooCommerce.
 * Version:     1.0.0
 * Author:      Liquid Web
 * Author URI:  https://www.liquidweb.com
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: woocommerce-registration-redirect
 * Domain Path: /languages
 * WC requires at least: 3.0.0
 * WC tested up to: 3.2.0
 */

function custom_registration_redirect() {
    wp_logout();
    wp_destroy_current_session();
    return home_url('/');
}
add_action('woocommerce_registration_redirect', 'custom_registration_redirect', 99);
