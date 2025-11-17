const settings = window.wc.wcSettings.getSetting('whish_payment_data', {});
const label = window.wp.htmlEntities.decodeEntities(settings.title) || window.wp.i18n.__('Whish Payment', 'whish-payment-gateway');

const Content = () => {
    return window.wp.htmlEntities.decodeEntities(settings.description || '');
};

const WhishPaymentMethod = {
    name: 'whish_payment',
    label: label,
    content: Object(window.wp.element.createElement)(Content, null),
    edit: Object(window.wp.element.createElement)(Content, null),
    canMakePayment: () => true,
    ariaLabel: label,
    supports: {
        features: settings.supports || ['products'],
    },
    paymentMethodId: 'whish_payment',
};

window.wc.wcBlocksRegistry.registerPaymentMethod(WhishPaymentMethod);
