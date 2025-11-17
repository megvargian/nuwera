=== Whish Payment Gateway for WooCommerce ===
Contributors: yourname
Tags: woocommerce, payment gateway, whish, codnloc, payments
Requires at least: 5.0
Tested up to: 6.4
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Accept payments via Whish Payment Gateway by codnloc for WooCommerce.

== Description ==

The Whish Payment Gateway plugin allows you to accept payments on your WooCommerce store using the Whish Payment system by codnloc.

= Features =

* Easy integration with WooCommerce
* Secure payment processing
* Support for USD and LBP currencies
* Test mode for development
* Debug logging for troubleshooting
* Automatic order status updates
* Callback and redirect URL handling

= Requirements =

* WordPress 5.0 or higher
* WooCommerce 3.0 or higher
* PHP 7.2 or higher
* Whish Payment account with valid credentials

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/whish-payment-gateway` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Go to WooCommerce > Settings > Payments > Whish Payment to configure the plugin.
4. Enter your Website URL and Secret Token from your Whish Payment account.
5. Configure the callback and redirect URLs in your Whish Payment control panel at https://pay.codnloc.com

== Configuration ==

1. **Enable/Disable**: Enable or disable the payment gateway
2. **Title**: The title displayed to customers during checkout
3. **Description**: The description displayed to customers during checkout
4. **Website URL**: Your website URL as registered with Whish Payment
5. **Secret Token**: Your Whish Payment secret token
6. **Currency**: Select USD or LBP
7. **Test Mode**: Enable for testing (no real transactions)
8. **Debug Log**: Enable detailed logging for troubleshooting

= Callback URLs =

The plugin provides four callback URLs that must be configured in your Whish Payment control panel:
* Success Callback URL
* Failure Callback URL
* Success Redirect URL
* Failure Redirect URL

These URLs are displayed in the plugin settings page.

== Frequently Asked Questions ==

= Where do I get my credentials? =

You can get your Website URL and Secret Token from the Whish Payment control panel at https://pay.codnloc.com

= What currencies are supported? =

Currently, the gateway supports USD (US Dollar) and LBP (Lebanese Pound).

= How do I test the payment gateway? =

Enable "Test Mode" in the plugin settings to test without processing real transactions.

= Where can I find the logs? =

Enable "Debug Log" in the settings. Logs are stored in WooCommerce > Status > Logs.

== Changelog ==

= 1.0.0 =
* Initial release
* Support for Whish Payment API integration
* USD and LBP currency support
* Test mode functionality
* Debug logging
* Callback and redirect URL handling

== Support ==

For support, please contact:
* WhatsApp: +961 3 687 150
* Email: pay@codnloc.com
* Control Panel: https://pay.codnloc.com

== Documentation ==

API Documentation: https://pay.codnloc.com/whish-api-documentation.html
User Guide: https://pay.codnloc.com/user-guide.html
