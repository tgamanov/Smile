<?php

namespace Smile\Contacts\Ui\Component\Listing\Column\StatusCode;

use Smile\Contacts\Model\Contact;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Options
 *
 * @package Smile\Contacts\Ui\Component\Listing\Column\StatusCode
 */
class Options implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => Contact::STATUS_CODE_WAIT_FOR_ANSWER,
                'label' => __('Wait for answer'),
            ],
            [
                'value' => Contact::STATUS_CODE_ANSWERED,
                'label' => __('Answered'),
            ]
        ];
    }
}
