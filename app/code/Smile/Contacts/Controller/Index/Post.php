<?php

namespace Smile\Contacts\Controller\Index;

use Smile\Contacts\Model\Contact;
use Smile\Contacts\Model\ContactFactory;
use Smile\Contacts\Model\ContactMessage;
use Smile\Contacts\Model\ContactMessageFactory;
use Magento\Store\Model\Store;
use Magento\Framework\DataObject;
use Magento\Store\Model\StoreManagerInterface;


class Post
{
     /**
     * @var ContactFactory
     */
    protected $contactFactory;

    /**
     * @var ContactMessageFactory
     */
    protected $contactMessageFactory;

    public function __construct(
        ContactFactory $contactFactory,
        ContactMessageFactory $contactMessageFactory,
        StoreManagerInterface $storeManager

    )
    {
        $this->contactFactory = $contactFactory;
        $this->contactMessageFactory = $contactMessageFactory;
    }

    public function afterExecute(\Magento\Contact\Controller\Index\Post $subject)
    {
        $post = $subject->getRequest()->getParams();
        $postObject = new DataObject();
        $postObject->setData($post);

        $contact = $this->contactFactory->create();
        $contact->setData('store_id', Store::DEFAULT_STORE_ID)
            ->setData('status_code', Contact::STATUS_CODE_WAIT_FOR_ANSWER)
            ->setData('user_name', $postObject->getData('name'))
            ->setData('user_email', $postObject->getData('email'))
            ->setData('phone_number', $postObject->getData('telephone'));
        $contact->save();

        $message = $this->contactMessageFactory->create();
        $message->setData('contact_id', $contact->getId())
            ->setData('type_code', ContactMessage::TYPE_CODE_CUSTOMER)
            ->setData('text', $postObject->getData('comment'));
        $message->save();
    }

}