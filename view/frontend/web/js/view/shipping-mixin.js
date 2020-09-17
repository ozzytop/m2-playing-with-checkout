define([], function () {
    'use strict';

    return function (Component) {
        return Component.extend({
            /**
             * This is just redirecting to the cart if the fields are correct
             */
            setShippingInformation: function () {
                if (this.validateShippingInformation()) {
                    window.location.href = '/checkout/cart';
                }
            }
            
        });
    }
}); 