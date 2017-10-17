<?php

namespace Smile\Contacts\Model;

use Smile\Contacts\Model\ResourceModel\Contact as ContactResourceModel;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Contact
 *
 * @package Smile\Contacts\Model
 */
class Contact extends AbstractModel
{
    /**
     * Status codes
     */
    const STATUS_CODE_WAIT_FOR_ANSWER = 'wait_for_answer';
    const STATUS_CODE_ANSWERED        = 'answered';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ContactResourceModel::class);
    }
}
