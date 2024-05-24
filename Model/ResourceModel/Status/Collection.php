<?php
/**
 * Copyright © radarsofthouse.dk All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Radarsofthouse\BillwerkPlusSubscription\Model\ResourceModel\Status;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /** @var string  */
    protected $_idFieldName = 'status_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Radarsofthouse\BillwerkPlusSubscription\Model\Status::class,
            \Radarsofthouse\BillwerkPlusSubscription\Model\ResourceModel\Status::class
        );
    }
}
