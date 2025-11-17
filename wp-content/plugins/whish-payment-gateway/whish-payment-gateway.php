<?php
/**
 * Plugin Name: Whish Payment Gateway for WooCommerce
 * Plugin URI: https://pay.codnloc.com
 * Description: Accept payments via Whish Payment Gateway by codnloc
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com
 * Text Domain: whish-payment-gateway
 * Domain Path: /languages
 * Requires at least: 5.0
 * Requires PHP: 7.2
 * WC requires at least: 3.0
 * WC tested up to: 8.0
 *
 * @package Whish_Payment_Gateway
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Define plugin constants
define( 'WHISH_PAYMENT_VERSION', '1.0.0' );
define( 'WHISH_PAYMENT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WHISH_PAYMENT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Check if WooCommerce is active
 */
if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    return;
}

/**
 * Declare compatibility with WooCommerce features
 */
add_action( 'before_woocommerce_init', function() {
    if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'cart_checkout_blocks', __FILE__, true );
    }
} );

/**
 * Register Whish Payment Gateway with WooCommerce Blocks
 */
add_action( 'woocommerce_blocks_loaded', 'whish_payment_woocommerce_blocks_support' );

function whish_payment_woocommerce_blocks_support() {
    if ( class_exists( 'Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType' ) ) {
        require_once WHISH_PAYMENT_PLUGIN_DIR . 'includes/class-wc-whish-payment-blocks-support.php';

        add_action(
            'woocommerce_blocks_payment_method_type_registration',
            function( Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry ) {
                $payment_method_registry->register( new WC_Whish_Payment_Blocks_Support() );
            }
        );
    }
}

/**
 * Initialize the gateway.
 */
add_action( 'plugins_loaded', 'whish_payment_gateway_init', 11 );

function whish_payment_gateway_init() {
    if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
        return;
    }

    // Include the gateway class
    include_once WHISH_PAYMENT_PLUGIN_DIR . 'includes/class-wc-whish-payment-gateway.php';

    /**
     * Add the gateway to WooCommerce
     */
    add_filter( 'woocommerce_payment_gateways', 'whish_add_gateway_class' );
}

/**
 * Add Whish gateway to WooCommerce
 */
function whish_add_gateway_class( $gateways ) {
    $gateways[] = 'WC_Whish_Payment_Gateway';
    return $gateways;
}

/**
 * Add custom action links
 */
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'whish_payment_action_links' );

function whish_payment_action_links( $links ) {
    $plugin_links = array(
        '<a href="' . admin_url( 'admin.php?page=wc-settings&tab=checkout&section=whish_payment' ) . '">' . __( 'Settings', 'whish-payment-gateway' ) . '</a>',
    );
    return array_merge( $plugin_links, $links );
}

/**
 * Handle callback from Whish Payment Gateway
 */
add_action( 'init', 'whish_payment_callback_handler' );

function whish_payment_callback_handler() {
    // Handle success callback
    if ( isset( $_GET['payment_success'] ) || ( isset( $_GET['payment_status'] ) && $_GET['payment_status'] === 'success' ) ) {
        $order_id = isset( $_GET['order_id'] ) ? intval( $_GET['order_id'] ) : 0;

        if ( $order_id ) {
            $order = wc_get_order( $order_id );
            if ( $order && $order->get_payment_method() === 'whish_payment' ) {
                $gateway = new WC_Whish_Payment_Gateway();

                // Mark as complete
                $order->payment_complete();
                $order->add_order_note( __( 'Payment successfully completed via Whish Payment Gateway.', 'whish-payment-gateway' ) );

                // Reduce stock
                wc_reduce_stock_levels( $order_id );

                // Redirect to success page
                wp_safe_redirect( $order->get_checkout_order_received_url() );
                exit;
            }
        }
    }

    // Handle failure callback
    if ( isset( $_GET['payment_failure'] ) || ( isset( $_GET['payment_status'] ) && $_GET['payment_status'] === 'failed' ) ) {
        $order_id = isset( $_GET['order_id'] ) ? intval( $_GET['order_id'] ) : 0;

        if ( $order_id ) {
            $order = wc_get_order( $order_id );
            if ( $order && $order->get_payment_method() === 'whish_payment' ) {
                $order->update_status( 'failed', __( 'Payment failed via Whish Payment Gateway.', 'whish-payment-gateway' ) );

                // Redirect to checkout with error
                wc_add_notice( __( 'Payment failed. Please try again.', 'whish-payment-gateway' ), 'error' );
                wp_safe_redirect( wc_get_checkout_url() );
                exit;
            }
        }
    }
}

/**
 * Legacy API callback handler (kept for compatibility)
 */
add_action( 'woocommerce_api_wc_whish_payment_gateway', 'whish_payment_legacy_callback_handler' );

function whish_payment_legacy_callback_handler() {
    whish_payment_callback_handler();
}

/**
 * Handle Store API checkout order processing for Whish Payment
 */
add_action( 'woocommerce_store_api_checkout_order_processed', 'whish_payment_store_api_checkout_order_processed' );

function whish_payment_store_api_checkout_order_processed( $order ) {
    if ( $order->get_payment_method() === 'whish_payment' ) {
        $gateway = new WC_Whish_Payment_Gateway();

        // Get the payment URL from session
        $payment_url = WC()->session->get( 'whish_payment_url_' . $order->get_id() );

        if ( $payment_url ) {
            // Store in order meta so we can retrieve it
            $order->update_meta_data( '_whish_redirect_url', $payment_url );
            $order->save();
        }
    }
}

/**
 * Modify Store API checkout response to include redirect URL
 */
add_filter( 'woocommerce_store_api_checkout_order_processed', 'whish_payment_add_redirect_to_response', 10, 1 );

function whish_payment_add_redirect_to_response( $order ) {
    if ( $order->get_payment_method() === 'whish_payment' ) {
        $payment_url = $order->get_meta( '_whish_redirect_url' );
        if ( $payment_url ) {
            add_filter( 'woocommerce_store_api_checkout_update_order_from_request', function( $updated_order, $request ) use ( $payment_url ) {
                return $updated_order;
            }, 10, 2 );
        }
    }
    return $order;
}
