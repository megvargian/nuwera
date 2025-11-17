<?php
/**
 * Debug script - Load this in WordPress admin to check plugin status
 * Add to functions.php temporarily: include_once WP_PLUGIN_DIR . '/whish-payment-gateway/debug-check.php';
 */

add_action('admin_notices', function() {
    if (!current_user_can('manage_options')) {
        return;
    }

    echo '<div class="notice notice-info"><p><strong>Whish Payment Debug:</strong></p>';

    // Check if WooCommerce is active
    echo '<p>WooCommerce Active: ' . (class_exists('WooCommerce') ? 'YES ✓' : 'NO ✗') . '</p>';

    // Check if gateway class exists
    echo '<p>Gateway Class Exists: ' . (class_exists('WC_Whish_Payment_Gateway') ? 'YES ✓' : 'NO ✗') . '</p>';

    // Check available gateways
    if (function_exists('WC')) {
        $gateways = WC()->payment_gateways->payment_gateways();
        echo '<p>Registered Payment Gateways: ' . implode(', ', array_keys($gateways)) . '</p>';

        if (isset($gateways['whish_payment'])) {
            $gateway = $gateways['whish_payment'];
            echo '<p>Whish Gateway Found: YES ✓</p>';
            echo '<p>Enabled: ' . ($gateway->enabled === 'yes' ? 'YES ✓' : 'NO ✗') . '</p>';
            echo '<p>Title: ' . esc_html($gateway->title) . '</p>';
            echo '<p>Website: ' . esc_html($gateway->website ?: 'NOT SET') . '</p>';
            echo '<p>Secret Token: ' . (empty($gateway->secret_token) ? 'NOT SET' : 'SET ✓') . '</p>';
            echo '<p>is_available(): ' . ($gateway->is_available() ? 'TRUE ✓' : 'FALSE ✗') . '</p>';
        } else {
            echo '<p>Whish Gateway Found: NO ✗</p>';
        }
    }

    echo '</div>';
});
