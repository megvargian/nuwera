/**
 * Fix WooCommerce checkout nonce issue
 * Adds the required X-WP-Nonce header to WooCommerce Store API requests
 */
(function($) {
    'use strict';

    // Add nonce to all fetch requests to WooCommerce Store API
    const originalFetch = window.fetch;
    window.fetch = function() {
        let [resource, config] = arguments;

        // Check if this is a WooCommerce Store API request
        if (typeof resource === 'string' && resource.includes('/wp-json/wc/store/')) {
            config = config || {};
            config.headers = config.headers || {};

            // Add the nonce header if available
            if (typeof wc_store_api_nonce !== 'undefined' && wc_store_api_nonce.nonce) {
                config.headers['X-WP-Nonce'] = wc_store_api_nonce.nonce;
            } else {
                // Fallback: try to get nonce from wp object
                if (typeof wp !== 'undefined' && wp.apiFetch && wp.apiFetch.nonceMiddleware) {
                    const nonce = wp.apiFetch.nonceMiddleware.nonce;
                    if (nonce) {
                        config.headers['X-WP-Nonce'] = nonce;
                    }
                }
            }
        }

        return originalFetch.apply(this, [resource, config]);
    };

    // Alternative: Intercept jQuery ajax requests (if using older WooCommerce)
    $(document).ajaxSend(function(event, jqxhr, settings) {
        if (settings.url && settings.url.includes('/wp-json/wc/store/')) {
            if (typeof wc_store_api_nonce !== 'undefined' && wc_store_api_nonce.nonce) {
                jqxhr.setRequestHeader('X-WP-Nonce', wc_store_api_nonce.nonce);
            }
        }
    });

})(jQuery);
