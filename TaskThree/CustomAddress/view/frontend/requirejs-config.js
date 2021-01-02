var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-billing-address': {
                'TaskThree_fnameattribute/js/action/set-billing-address-mixin': true
            },
            'Magento_Checkout/js/action/set-shipping-information': {
                'TaskThree_fnameattribute/js/action/set-shipping-information-mixin': true
            },
            'Magento_Checkout/js/action/create-shipping-address': {
                'TaskThree_fnameattribute/js/action/create-shipping-address-mixin': true
            },
            'Magento_Checkout/js/action/place-order': {
                'TaskThree_fnameattribute/js/action/set-billing-address-mixin': true
            },
            'Magento_Checkout/js/action/create-billing-address': {
                'TaskThree_fnameattribute/js/action/set-billing-address-mixin': true
            }
        }
    }
};