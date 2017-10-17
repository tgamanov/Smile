<?php

namespace Smile\Contacts\Model\ResourceModel\ContactMessage;

use Smile\Contacts\Model\ContactMessage as ContactMessageModel;
use Smile\Contacts\Model\ResourceModel\ContactMessage as ContactMessageResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 *
 * @package Smile\Contacts\Model\ResourceModel\ContactMessage
 */
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ContactMessageModel::class, ContactMessageResourceModel::class);
    }
}
