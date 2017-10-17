<?php

namespace Smile\Contacts\Model\ResourceModel\Contact;

use Smile\Contacts\Model\Contact as ContactModel;
use Smile\Contacts\Model\ResourceModel\Contact as ContactResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 *
 * @package Smile\Contacts\Model\ResourceModel\Contact
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
        $this->_init(ContactModel::class, ContactResourceModel::class);
    }
}
