<?php

namespace Ozzytop\PlayingCheckout\Plugin;

class LayoutProcessorPlugin
{

    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array $jsLayout
    ): array {
        

        /*    
            Unset Street 2 field
        */
        unset($jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
            ['shippingAddress']['children']['shipping-address-fieldset']['children']['street']['children'][2]);

        /*    
            Unset Company field
        */
        unset($jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['company']);
        
        $shippingConfiguration =  $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children'];

        /*    
            We change the labels to be written in vice versa
        */
        foreach($shippingConfiguration as $key => $value){
            if ($key != 'region' && $key != 'fax') {
                $newLabel = strrev($jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children'][$key]['label']->getText());
                $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children'][$key]['label'] = __($newLabel);                
            }
        }

        /*
            Billing's fields Updates
        */
        $configuration = $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'];
        foreach ($configuration as $paymentGroup => $groupConfig) {

            if (isset($groupConfig['component']) and $groupConfig['component'] === 'Magento_Checkout/js/view/billing-address') {
                // We could do the same for billing address
                continue;
            }

        }
        return $jsLayout;
    }

}
