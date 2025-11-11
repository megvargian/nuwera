/**
 * Fix WooCommerce checkout nonce issue
 * Adds the required X-WP-Nonce header to WooCommerce Store API requests
 */
(function($) {
    'use strict';

    // Debug: Log nonce availability
    console.log('WC Store API Nonce loaded:', wc_store_api_nonce);

    // Get the nonce value
    function getNonce() {
        // Try our localized nonce first
        if (typeof wc_store_api_nonce !== 'undefined') {
            if (wc_store_api_nonce.nonce) {
                return wc_store_api_nonce.nonce;
            }
            if (wc_store_api_nonce.wc_nonce) {
                return wc_store_api_nonce.wc_nonce;
            }
        }

        // Fallback: try to get nonce from wp object
        if (typeof wp !== 'undefined' && wp.apiFetch) {
            if (wp.apiFetch.nonceMiddleware && wp.apiFetch.nonceMiddleware.nonce) {
                return wp.apiFetch.nonceMiddleware.nonce;
            }
        }

        // Last resort: check for wpApiSettings (standard WordPress REST API)
        if (typeof wpApiSettings !== 'undefined' && wpApiSettings.nonce) {
            return wpApiSettings.nonce;
        }

        return null;
    }

    // Add nonce to all fetch requests to WooCommerce Store API
    const originalFetch = window.fetch;
    window.fetch = function() {
        let [resource, config] = arguments;

        // Check if this is a WooCommerce Store API or REST API request
        if (typeof resource === 'string' && (resource.includes('/wp-json/wc/store/') || resource.includes('/wp-json/wc/'))) {
            config = config || {};
            config.headers = config.headers || {};

            // Add the nonce header if available
            const nonce = getNonce();
            if (nonce) {
                config.headers['X-WP-Nonce'] = nonce;
                console.log('Adding nonce to request:', resource.substring(resource.lastIndexOf('/') + 1));
            } else {
                console.warn('No nonce available for request:', resource);
            }
        }

        return originalFetch.apply(this, [resource, config]);
    };

    // Alternative: Intercept jQuery ajax requests (if using older WooCommerce)
    $(document).ajaxSend(function(event, jqxhr, settings) {
        if (settings.url && (settings.url.includes('/wp-json/wc/store/') || settings.url.includes('/wp-json/wc/'))) {
            const nonce = getNonce();
            if (nonce) {
                jqxhr.setRequestHeader('X-WP-Nonce', nonce);
                console.log('Adding nonce to AJAX request');
            }
        }
    });

})(jQuery);
