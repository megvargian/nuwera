<?php
/**
 * Test Whish Payment API
 * Upload this file to your server and access it via browser to test the API
 */

// Your credentials
$website = 'nuwera.band';
$secret = '2ebba66541867018eaff1ecea42001ca'; // Replace with your actual secret

$payment_data = array(
    'website'             => $website,
    'secret'              => $secret,
    'order_id'            => (double) time(),
    'invoice'             => 'Test Payment',
    'amount'              => 1.00,
    'currency'            => 'USD',
    'order_user_login'    => 'test@test.com',
    'order_user_email'    => 'test@test.com',
    'order_billing_phone' => '+96170245612',
    'order_first_name'    => 'Test',
    'order_last_name'     => 'User',
);

echo "<h2>Testing Whish Payment API</h2>";
echo "<h3>Request Data:</h3>";
echo "<pre>" . print_r($payment_data, true) . "</pre>";

$ch = curl_init('https://pay.codnloc.com/api.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($payment_data),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/x-www-form-urlencoded'
    ]
]);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

echo "<h3>Response:</h3>";
echo "<p><strong>HTTP Code:</strong> $http_code</p>";

if ($error) {
    echo "<p style='color:red'><strong>CURL Error:</strong> $error</p>";
}

echo "<p><strong>Response Body:</strong></p>";
echo "<pre>" . htmlspecialchars($response) . "</pre>";

$result = json_decode($response, true);
if ($result) {
    echo "<h3>Parsed Response:</h3>";
    echo "<pre>" . print_r($result, true) . "</pre>";

    if (isset($result['success']) && $result['success'] === true) {
        echo "<p style='color:green;font-weight:bold'>✓ SUCCESS! Payment URL: " . htmlspecialchars($result['message']) . "</p>";
    } else {
        echo "<p style='color:red;font-weight:bold'>✗ FAILED: " . htmlspecialchars($result['message'] ?? 'Unknown error') . "</p>";
    }
}
