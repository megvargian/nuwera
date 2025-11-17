<?php
/**
 * Whish Payment Gateway Block Support
 *
 * @package Whish_Payment_Gateway
 */

use Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Whish Payment Gateway Blocks integration
 */
final class WC_Whish_Payment_Blocks_Support extends AbstractPaymentMethodType {

    /**
     * Payment method name/id/slug.
     *
     * @var string
     */
    protected $name = 'whish_payment';

    /**
     * Initializes the payment method type.
     */
    public function initialize() {
        $this->settings = get_option( 'woocommerce_whish_payment_settings', array() );
    }

    /**
     * Returns if this payment method should be active. If false, the scripts will not be enqueued.
     *
     * @return boolean
     */
    public function is_active() {
        $payment_gateways_class = WC()->payment_gateways();
        $payment_gateways       = $payment_gateways_class->payment_gateways();

        return isset( $payment_gateways['whish_payment'] ) && $payment_gateways['whish_payment']->is_available();
    }

    /**
     * Returns an array of scripts/handles to be registered for this payment method.
     *
     * @return array
     */
    public function get_payment_method_script_handles() {
        $script_path       = '/assets/js/frontend/blocks.js';
        $script_asset_path = WHISH_PAYMENT_PLUGIN_DIR . 'assets/js/frontend/blocks.asset.php';
        $script_asset      = file_exists( $script_asset_path )
            ? require( $script_asset_path )
            : array(
                'dependencies' => array(),
                'version'      => WHISH_PAYMENT_VERSION,
            );
        $script_url        = WHISH_PAYMENT_PLUGIN_URL . $script_path;

        wp_register_script(
            'wc-whish-payment-blocks',
            $script_url,
            $script_asset['dependencies'],
            $script_asset['version'],
            true
        );

        if ( function_exists( 'wp_set_script_translations' ) ) {
            wp_set_script_translations( 'wc-whish-payment-blocks', 'whish-payment-gateway', WHISH_PAYMENT_PLUGIN_DIR . 'languages' );
        }

        return array( 'wc-whish-payment-blocks' );
    }

    /**
     * Returns an array of key=>value pairs of data made available to the payment methods script.
     *
     * @return array
     */
    public function get_payment_method_data() {
        return array(
            'title'       => $this->get_setting( 'title' ),
            'description' => $this->get_setting( 'description' ),
            'supports'    => array(
                'products',
            ),
        );
    }

    /**
     * Get payment method supported features.
     *
     * @return string[]
     */
    public function get_supported_features() {
        $payment_gateways = WC()->payment_gateways->payment_gateways();
        if ( isset( $payment_gateways['whish_payment'] ) ) {
            return $payment_gateways['whish_payment']->supports;
        }
        return array();
    }
}
