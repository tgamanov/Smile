<?php

namespace Smile\Contacts\Model;

use Smile\Contacts\Model\ResourceModel\ContactMessage as ContactMessageResourceModel;
use Magento\Framework\Model\AbstractModel;

/**
 * Class ContactMessage
 *
 * @package Smile\Contacts\Model
 */
class ContactMessage extends AbstractModel
{
    /**
     * Type codes
     */
    const TYPE_CODE_CUSTOMER = 'customer';
    const TYPE_CODE_OWNER    = 'owner';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ContactMessageResourceModel::class);
    }
}
