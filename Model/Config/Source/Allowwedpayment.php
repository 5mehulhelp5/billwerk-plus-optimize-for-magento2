<?php

/**
 * Copyright © radarsofthouse.dk All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Radarsofthouse\BillwerkPlusSubscription\Model\Config\Source;

class Allowwedpayment implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return Reepay payment allowwed payments
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'card', 'label' => __('All available debit / credit cards')],
            ['value' => 'amex', 'label' => __('American Express')],
            ['value' => 'applepay', 'label' => __('Apple Pay')],
            ['value' => 'cash', 'label' => __('Cash')],
            ['value' => 'china_union_pay', 'label' => __('China Union Pay')],
            ['value' => 'dankort', 'label' => __('Dankort')],
            ['value' => 'diners', 'label' => __('Diners Club')],
            ['value' => 'discover', 'label' => __('Discover')],
            ['value' => 'ffk', 'label' => __('Forbrugsforeningen')],
            ['value' => 'jcb', 'label' => __('JCB')],
            ['value' => 'klarna', 'label' => __('Klarna')],
            ['value' => 'laser', 'label' => __('Laser')],
            ['value' => 'maestro', 'label' => __('Maestro')],
            ['value' => 'mc', 'label' => __('MasterCard')],
            ['value' => 'mobilepay_subscriptions', 'label' => __('MobilePay Subscriptions')],
            ['value' => 'visa', 'label' => __('VISA')],
            ['value' => 'visa_elec', 'label' => __('VISA Electron')],
            ['value' => 'vipps_recurring', 'label' => __('Vipps MobilePay Recurring')],
        ];
    }
}
