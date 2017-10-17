<?php

namespace Smile\Contacts\Setup;

use Smile\Contacts\Model\ResourceModel\Contact;
use Smile\Contacts\Model\ResourceModel\ContactMessage;
use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

/**
 * Class Uninstall
 *
 * @package Smile\Contacts\Setup
 */
class Uninstall implements UninstallInterface
{
    /**
     * @param SchemaSetupInterface   $setup   setup
     * @param ModuleContextInterface $context context
     *
     * @return void
     */
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->dropTable(ContactMessage::TABLE);
        $setup->getConnection()->dropTable(Contact::TABLE);

        $setup->endSetup();
    }
}