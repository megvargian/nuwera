# Whish Payment Gateway for WooCommerce

A WordPress plugin that integrates Whish Payment Gateway by codnloc with WooCommerce.

## Description

This plugin allows you to accept payments on your WooCommerce store using the Whish Payment system. It provides a seamless checkout experience and handles payment processing, callbacks, and order status updates automatically.

## Features

- ✅ Easy WooCommerce integration
- ✅ Secure payment processing via Whish Payment API
- ✅ Support for USD and LBP currencies
- ✅ Test mode for safe development and testing
- ✅ Debug logging for troubleshooting
- ✅ Automatic order status management
- ✅ Callback and redirect URL handling
- ✅ Customer information forwarding to payment gateway

## Requirements

- WordPress 5.0 or higher
- WooCommerce 3.0 or higher
- PHP 7.2 or higher
- Active Whish Payment account with credentials

## Installation

1. Download or clone this repository
2. Upload the `whish-payment-gateway` folder to `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Go to **WooCommerce → Settings → Payments → Whish Payment**
5. Configure your settings:
   - Enter your Website URL (as registered with Whish Payment)
   - Enter your Secret Token
   - Select your preferred currency (USD or LBP)
   - Configure other options as needed
6. Copy the callback URLs from the settings page
7. Add these URLs to your Whish Payment control panel at https://pay.codnloc.com

## Configuration

### Required Settings

- **Website URL**: Your domain as registered with Whish Payment (e.g., `your-site.com`)
- **Secret Token**: Your authentication token from Whish Payment dashboard

### Optional Settings

- **Title**: Payment method name shown to customers (default: "Whish Payment")
- **Description**: Payment method description during checkout
- **Currency**: Choose USD or LBP
- **Test Mode**: Enable for testing without real transactions
- **Debug Log**: Enable detailed logging for troubleshooting

### Callback URLs Configuration

After activating the plugin, you'll see four callback URLs in the settings:

1. **Success Callback URL** - For successful payment notifications
2. **Failure Callback URL** - For failed payment notifications
3. **Success Redirect URL** - Where customers are sent after successful payment
4. **Failure Redirect URL** - Where customers are sent after failed payment

⚠️ **Important**: You must add these URLs to your Whish Payment control panel.

## API Integration

The plugin uses the Whish Payment API with the following endpoint:

```
POST https://pay.codnloc.com/api.php
```

### Parameters Sent

- `website` - Your website URL
- `secret` - Your secret token
- `order_id` - WooCommerce order ID
- `invoice` - Order description
- `amount` - Order total
- `currency` - USD or LBP
- `order_user_email` - Customer email
- `order_billing_phone` - Customer phone
- `order_first_name` - Customer first name
- `order_last_name` - Customer last name

## Workflow

1. Customer completes checkout and selects Whish Payment
2. Order is created with "Pending" status
3. Customer is redirected to Whish Payment page
4. Customer completes payment
5. Whish sends callback to your site
6. Order status is updated automatically
7. Customer is redirected back to your site

## Troubleshooting

### Enable Debug Mode

1. Go to plugin settings
2. Enable "Debug Log"
3. Check logs at **WooCommerce → Status → Logs**
4. Look for logs starting with `whish-payment`

### Common Issues

**Payment not processing:**
- Verify your Website URL and Secret Token
- Check if credentials are active in Whish dashboard
- Ensure callback URLs are properly configured

**Callback not working:**
- Verify callback URLs are accessible (not behind firewall/auth)
- Check server logs for any errors
- Ensure permalink structure is set (not default)

**Order status not updating:**
- Enable debug logging
- Check if callbacks are being received
- Verify order ID is correctly passed

## Support

For technical support and questions:

- **WhatsApp**: +961 3 687 150
- **Email**: pay@codnloc.com
- **Control Panel**: https://pay.codnloc.com
- **API Documentation**: https://pay.codnloc.com/whish-api-documentation.html

## Development

### File Structure

```
whish-payment-gateway/
├── whish-payment-gateway.php          # Main plugin file
├── includes/
│   └── class-wc-whish-payment-gateway.php  # Gateway class
├── languages/
│   └── whish-payment-gateway.pot      # Translation template
├── README.md                           # This file
└── readme.txt                          # WordPress.org readme
```

### Hooks and Filters

The plugin provides several hooks for customization:

```php
// Modify gateway icon
add_filter('woocommerce_whish_payment_icon', 'custom_whish_icon');

// Additional hooks available in the gateway class
```

## Security

- All sensitive data is transmitted over HTTPS
- Secret tokens are stored securely in WordPress options
- Input data is sanitized and validated
- Order verification before status updates

## Changelog

### Version 1.0.0
- Initial release
- Whish Payment API integration
- USD and LBP currency support
- Test mode functionality
- Debug logging
- Callback handling
- Redirect URL management

## License

This plugin is licensed under the GPLv2 or later.

## Credits

Developed for integration with Whish Payment Gateway by codnloc.

## Links

- [Whish Payment Control Panel](https://pay.codnloc.com)
- [API Documentation](https://pay.codnloc.com/whish-api-documentation.html)
- [User Guide](https://pay.codnloc.com/user-guide.html)
- [Terms and Conditions](https://pay.codnloc.com/terms.html)
- [Privacy Policy](https://pay.codnloc.com/privacy.html)
