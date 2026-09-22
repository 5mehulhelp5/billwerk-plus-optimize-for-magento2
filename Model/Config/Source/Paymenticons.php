<?php

/**
 * Copyright © radarsofthouse.dk All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Radarsofthouse\BillwerkPlusSubscription\Model\Config\Source;

class Paymenticons implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return Reepay payment icons
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'american-express', 'label' => __('American express')],
            ['value' => 'applepay', 'label' => __('Apple Pay')],
            ['value' => 'dankort', 'label' => __('Dankort')],
            ['value' => 'diners-club-international', 'label' => __('Diners club international')],
            ['value' => 'discover', 'label' => __('Discover')],
            ['value' => 'jcb', 'label' => __('JCB')],
            ['value' => 'klarna', 'label' => __('Klarna')],
            ['value' => 'maestro', 'label' => __('Maestro')],
            ['value' => 'mastercard', 'label' => __('Mastercard')],
            ['value' => 'unionpay', 'label' => __('Unionpay')],
            ['value' => 'visa', 'label' => __('Visa')],
            ['value' => 'visa-electron', 'label' => __('Visa electron')],
            ['value' => 'vipps_recurring', 'label' => __('Vipps MobilePay')],
        ];
    }
}
