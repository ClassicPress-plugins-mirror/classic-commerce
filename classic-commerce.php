<?php
/**
 * Plugin Name: Classic Commerce
 * Plugin URI: https://github.com/ClassicPress-research/classic-commerce
 * Description: A simple, powerful and independent e-commerce platform. Sell anything with ease.
 * Version: 0.1.0
 * Author: ClassicPress Research Team
 * Author URI: https://github.com/ClassicPress-research/classic-commerce
 * Text Domain: classic-commerce
 * Domain Path: /i18n/languages/
 *
 * @package WooCommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Load the Update Client to manage Classic Commerce updates
include_once dirname( __FILE__ ) . '/includes/class-wc-update-client.php';

// Define WC_PLUGIN_FILE.
if ( ! defined( 'WC_PLUGIN_FILE' ) ) {
	define( 'WC_PLUGIN_FILE', __FILE__ );
}

// Include the main WooCommerce class.
if ( ! class_exists( 'WooCommerce' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-woocommerce.php';
}

/**
 * Main instance of WooCommerce.
 *
 * Returns the main instance of WC to prevent the need to use globals.
 *
 * @since  2.1
 * @return WooCommerce
 */
function wc() {
	return WooCommerce::instance();
}

// Global for backwards compatibility.
$GLOBALS['woocommerce'] = wc();