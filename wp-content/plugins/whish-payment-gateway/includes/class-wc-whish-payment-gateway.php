<?php
/**
 * Whish Payment Gateway Class
 *
 * @package Whish_Payment_Gateway
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * WC_Whish_Payment_Gateway Class
 */
class WC_Whish_Payment_Gateway extends WC_Payment_Gateway {

    /**
     * Constructor
     */
    public function __construct() {
        $this->id                 = 'whish_payment';
        $this->icon               = apply_filters( 'woocommerce_whish_payment_icon', '' );
        $this->has_fields         = false;
        $this->method_title       = __( 'Whish Payment', 'whish-payment-gateway' );
        $this->method_description = __( 'Accept payments via Whish Payment Gateway by codnloc', 'whish-payment-gateway' );

        // Supports
        $this->supports = array(
            'products',
        );

        // Load the settings
        $this->init_form_fields();
        $this->init_settings();

        // Define user set variables
        $this->title              = $this->get_option( 'title' );
        $this->description        = $this->get_option( 'description' );
        $this->website            = $this->get_option( 'website' );
        $this->secret_token       = $this->get_option( 'secret_token' );
        $this->testmode           = 'yes' === $this->get_option( 'testmode', 'no' );
        $this->debug              = 'yes' === $this->get_option( 'debug', 'no' );
        $this->currency_mode      = $this->get_option( 'currency_mode', 'USD' );

        // API endpoint
        $this->api_endpoint = 'https://pay.codnloc.com/api.php';

        // Logger
        if ( $this->debug ) {
            if ( function_exists( 'wc_get_logger' ) ) {
                $this->log = wc_get_logger();
            } else {
                $this->log = new WC_Logger();
            }
        }

        // Actions
        add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
        add_action( 'woocommerce_receipt_' . $this->id, array( $this, 'receipt_page' ) );
    }

    /**
     * Initialize Gateway Settings Form Fields
     */
    public function init_form_fields() {
        $this->form_fields = array(
            'enabled' => array(
                'title'   => __( 'Enable/Disable', 'whish-payment-gateway' ),
                'type'    => 'checkbox',
                'label'   => __( 'Enable Whish Payment Gateway', 'whish-payment-gateway' ),
                'default' => 'no',
            ),
            'title' => array(
                'title'       => __( 'Title', 'whish-payment-gateway' ),
                'type'        => 'text',
                'description' => __( 'This controls the title which the user sees during checkout.', 'whish-payment-gateway' ),
                'default'     => __( 'Whish Payment', 'whish-payment-gateway' ),
                'desc_tip'    => true,
            ),
            'description' => array(
                'title'       => __( 'Description', 'whish-payment-gateway' ),
                'type'        => 'textarea',
                'description' => __( 'This controls the description which the user sees during checkout.', 'whish-payment-gateway' ),
                'default'     => __( 'Pay securely via Whish Payment Gateway.', 'whish-payment-gateway' ),
                'desc_tip'    => true,
            ),
            'website' => array(
                'title'       => __( 'Website URL', 'whish-payment-gateway' ),
                'type'        => 'text',
                'description' => __( 'Enter your website URL as registered with Whish Payment (e.g., your-site.com).', 'whish-payment-gateway' ),
                'default'     => '',
                'desc_tip'    => true,
            ),
            'secret_token' => array(
                'title'       => __( 'Secret Token', 'whish-payment-gateway' ),
                'type'        => 'password',
                'description' => __( 'Enter your Whish Payment secret token.', 'whish-payment-gateway' ),
                'default'     => '',
                'desc_tip'    => true,
            ),
            'currency_mode' => array(
                'title'       => __( 'Currency', 'whish-payment-gateway' ),
                'type'        => 'select',
                'description' => __( 'Select the currency for transactions.', 'whish-payment-gateway' ),
                'default'     => 'USD',
                'options'     => array(
                    'USD' => __( 'USD - US Dollar', 'whish-payment-gateway' ),
                    'LBP' => __( 'LBP - Lebanese Pound', 'whish-payment-gateway' ),
                ),
                'desc_tip'    => true,
            ),
            'testmode' => array(
                'title'       => __( 'Test Mode', 'whish-payment-gateway' ),
                'type'        => 'checkbox',
                'label'       => __( 'Enable Test Mode', 'whish-payment-gateway' ),
                'default'     => 'yes',
                'description' => __( 'Place the payment gateway in test mode.', 'whish-payment-gateway' ),
                'desc_tip'    => true,
            ),
            'debug' => array(
                'title'       => __( 'Debug Log', 'whish-payment-gateway' ),
                'type'        => 'checkbox',
                'label'       => __( 'Enable logging', 'whish-payment-gateway' ),
                'default'     => 'no',
                'description' => sprintf( __( 'Log Whish Payment events inside %s', 'whish-payment-gateway' ), '<code>' . WC_Log_Handler_File::get_log_file_path( 'whish-payment' ) . '</code>' ),
            ),
            'callback_urls' => array(
                'title'       => __( 'Callback & Redirect URLs', 'whish-payment-gateway' ),
                'type'        => 'title',
                'description' => $this->get_callback_urls_description(),
            ),
        );
    }

    /**
     * Get callback URLs description
     */
    private function get_callback_urls_description() {
        $site_url = home_url();

        return sprintf(
            __( 'Configure these URLs in your Whish Payment control panel (already set):<br><br>' .
                '<strong>Success Callback URL:</strong><br><code>%s</code><br><br>' .
                '<strong>Failure Callback URL:</strong><br><code>%s</code><br><br>' .
                '<strong>Success Redirect URL:</strong><br><code>%s</code><br><br>' .
                '<strong>Failure Redirect URL:</strong><br><code>%s</code>', 'whish-payment-gateway' ),
            esc_url( $site_url . '/?payment_success' ),
            esc_url( $site_url . '/?payment_failure' ),
            esc_url( $site_url . '/checkout/order-received/' ),
            esc_url( $site_url . '/checkout/order-received/' )
        );
    }

    /**
     * Check if the gateway is available for use
     */
    public function is_available() {
        $is_available = parent::is_available();

        if ( ! $this->website || ! $this->secret_token ) {
            $is_available = false;
        }

        return $is_available;
    }

    /**
     * Process the payment and return the result
     */
    public function process_payment( $order_id ) {
        $order = wc_get_order( $order_id );

        if ( $this->debug ) {
            $this->log->add( 'whish-payment', 'Processing payment for order #' . $order_id );
        }

        // Create payment request
        $payment_url = $this->create_payment_request( $order );

        if ( $payment_url ) {
            // Mark as pending (we're awaiting the payment)
            $order->update_status( 'pending', __( 'Awaiting Whish Payment', 'whish-payment-gateway' ) );

            // Store payment URL in session for blocks checkout
            WC()->session->set( 'whish_payment_url_' . $order_id, $payment_url );

            // Return redirect
            return array(
                'result'   => 'success',
                'redirect' => $payment_url,
            );
        } else {
            if ( $this->debug ) {
                $this->log->add( 'whish-payment', 'Payment URL creation failed for order #' . $order_id );
            }
            wc_add_notice( __( 'Payment error: Unable to connect to payment gateway.', 'whish-payment-gateway' ), 'error' );
            return array(
                'result'  => 'failure',
                'message' => __( 'Payment error: Unable to connect to payment gateway.', 'whish-payment-gateway' ),
            );
        }
    }

    /**
     * Create payment request with Whish API
     */
    private function create_payment_request( $order ) {
        $order_id = $order->get_id();

        // Prepare payment data
        $payment_data = array(
            'website'             => $this->website,
            'secret'              => $this->secret_token,
            'order_id'            => (double) $order_id,
            'invoice'             => sprintf( __( 'Payment for order #%s', 'whish-payment-gateway' ), $order_id ),
            'amount'              => (float) $order->get_total(),
            'currency'            => $this->currency_mode,
            'order_user_login'    => $order->get_billing_email(),
            'order_user_email'    => $order->get_billing_email(),
            'order_billing_phone' => $order->get_billing_phone(),
            'order_first_name'    => $order->get_billing_first_name(),
            'order_last_name'     => $order->get_billing_last_name(),
        );

        if ( $this->debug ) {
            $this->log->add( 'whish-payment', 'Payment request data: ' . print_r( $payment_data, true ) );
        }

        // Make API request
        $response = wp_remote_post( $this->api_endpoint, array(
            'method'    => 'POST',
            'timeout'   => 45,
            'body'      => $payment_data,
            'headers'   => array(
                'Content-Type' => 'application/x-www-form-urlencoded',
            ),
        ) );

        if ( is_wp_error( $response ) ) {
            if ( $this->debug ) {
                $this->log->add( 'whish-payment', 'API request failed: ' . $response->get_error_message() );
            }
            return false;
        }

        $body = wp_remote_retrieve_body( $response );
        $http_code = wp_remote_retrieve_response_code( $response );
        $result = json_decode( $body, true );

        if ( $this->debug ) {
            $this->log->add( 'whish-payment', 'API HTTP Code: ' . $http_code );
            $this->log->add( 'whish-payment', 'API response body: ' . $body );
            $this->log->add( 'whish-payment', 'API response: ' . print_r( $result, true ) );
        }

        // Check for successful response
        if ( $http_code === 200 && isset( $result['success'] ) && $result['success'] === true && ! empty( $result['message'] ) ) {
            // Store payment URL in order meta
            $order->update_meta_data( '_whish_payment_url', $result['message'] );
            $order->save();

            return $result['message'];
        }

        // Handle errors
        $error_message = __( 'Unknown error occurred', 'whish-payment-gateway' );

        if ( isset( $result['message'] ) && ! empty( $result['message'] ) ) {
            $error_message = $result['message'];
        } elseif ( $http_code !== 200 ) {
            $error_message = sprintf( __( 'HTTP Error %d: %s', 'whish-payment-gateway' ), $http_code, $body );
        }

        if ( $this->debug ) {
            $this->log->add( 'whish-payment', 'Payment creation failed: ' . $error_message );
        }

        // Store error in order note
        $order->add_order_note( sprintf( __( 'Whish Payment API Error: %s', 'whish-payment-gateway' ), $error_message ) );

        return false;
    }

    /**
     * Handle callback from Whish Payment
     */
    public function handle_callback() {
        if ( $this->debug ) {
            $this->log->add( 'whish-payment', 'Callback received: ' . print_r( $_REQUEST, true ) );
        }

        // Get the status from the callback
        $status = isset( $_GET['status'] ) ? sanitize_text_field( $_GET['status'] ) : '';
        $order_id = isset( $_GET['order_id'] ) ? intval( $_GET['order_id'] ) : 0;

        if ( ! $order_id ) {
            // Try to get from POST
            $order_id = isset( $_POST['order_id'] ) ? intval( $_POST['order_id'] ) : 0;
        }

        if ( $order_id ) {
            $order = wc_get_order( $order_id );

            if ( $order ) {
                if ( $status === 'success' ) {
                    $this->payment_complete( $order );
                } elseif ( $status === 'failed' ) {
                    $this->payment_failed( $order );
                }
            }
        }

        // For callback, send 200 OK
        status_header( 200 );
        die();
    }

    /**
     * Mark payment as complete
     */
    private function payment_complete( $order ) {
        if ( $this->debug ) {
            $this->log->add( 'whish-payment', 'Payment completed for order #' . $order->get_id() );
        }

        $order->payment_complete();
        $order->add_order_note( __( 'Payment successfully completed via Whish Payment Gateway.', 'whish-payment-gateway' ) );

        // Reduce stock levels
        wc_reduce_stock_levels( $order->get_id() );

        // Empty cart
        WC()->cart->empty_cart();
    }

    /**
     * Mark payment as failed
     */
    private function payment_failed( $order ) {
        if ( $this->debug ) {
            $this->log->add( 'whish-payment', 'Payment failed for order #' . $order->get_id() );
        }

        $order->update_status( 'failed', __( 'Payment failed via Whish Payment Gateway.', 'whish-payment-gateway' ) );
    }

    /**
     * Admin options
     */
    public function admin_options() {
        ?>
        <h2><?php echo esc_html( $this->get_method_title() ); ?></h2>
        <p><?php echo esc_html( $this->get_method_description() ); ?></p>
        <table class="form-table">
            <?php $this->generate_settings_html(); ?>
        </table>
        <?php
    }
}
