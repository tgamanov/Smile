<?php

namespace Smile\Contacts\Ui\Component\MassAction\ChangeStatusCode;

use Smile\Contacts\Model\ResourceModel\Contact;
use Smile\Contacts\Ui\Component\Listing\Column\StatusCode\Options as StatusCodeOptions;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\UrlInterface;
use Zend\Stdlib\JsonSerializable;

/**
 * Class Options
 *
 * @package Smile\Contacts\Ui\Component\MassAction\ChangeStatusCode
 */
class Options implements JsonSerializable
{
    /**
     * @var array
     */
    protected $statusCodeOptions;

    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    public function __construct(
        ContextInterface $context,
        StatusCodeOptions $statusCodeOptions,
        UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        $this->statusCodeOptions = $statusCodeOptions;
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * Get action options
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $result = [];

        foreach ($this->statusCodeOptions->toOptionArray() as $option) {
            $result[] = [
                'type' => 'status_code_' . $option['value'],
                'label' => $option['label'],
                'url' => $this->urlBuilder->getUrl(
                    'contacts/massAction/changeStatusCode',
                    [
                        Contact::FIELD_STATUS_CODE => $option['value'],
                    ]
                ),
                'confirm' => [
                    'title' => __('Change Status'),
                    'message' => __('Are you sure you want to change the status of selected contacts to "%1"?', $option['label']),
                ],
            ];
        }

        return $result;
    }
}
