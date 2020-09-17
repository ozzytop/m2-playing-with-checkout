var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/view/shipping': {
                'Ozzytop_PlayingCheckout/js/view/shipping-mixin': true
            }
        }
    },
    map: {
        '*': {
            'Magento_Checkout/template/form/element/email.html': 
            'Ozzytop_PlayingCheckout/template/form/element/email.html'
        }
    }
};