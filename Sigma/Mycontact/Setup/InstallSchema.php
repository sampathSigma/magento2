<?php

namespace Sigma\Mycontact\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{



    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {


        $installer = $setup;
        $installer->startSetup();


        /**

                */

        $table = $installer->getConnection()->newTable($installer->getTable('sigma_mycontacts'))
                                ->addColumn(
                                    'id',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                                    null,
                                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                                    'ID'
                                )
                                ->addColumn(
                                    'name',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                    255,
                                    ['nullable' => true, 'default' => null],
                                    'Name'
                                )
                                ->addColumn(
                                    'email',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                    255,
                                    ['nullable' => true, 'default' => null],
                                    'Email'
                                )
                                ->addColumn(
                                    'company',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                    255,
                                    ['nullable' => true, 'default' => null],
                                    'Company'
                                )
                                ->addColumn(
                                    'telephone',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                    255,
                                    ['nullable' => true, 'default' => null],
                                    'Telephone'
                                )
                              ->addColumn(
                                  'gender',
                                  \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                  255,
                                  ['nullable' => true, 'default' => null],
                                  'Gender'
                              )

            ->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => true, 'default' => 1],
                'Status'
            );



        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}



//namespace Sigma\Mycontact\Setup;
//
//use Magento\Framework\Setup\InstallSchemaInterface;
//use Magento\Framework\Setup\ModuleContextInterface;
//use Magento\Framework\Setup\SchemaSetupInterface;
//use Magento\Framework\DB\Ddl\Table;
//
//class InstallSchema implements InstallSchemaInterface
//{
//    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
//    {
//        $installer = $setup;
//        $installer->startSetup();
//        $tableName = $installer->getTable('sigma_mycontacts');
//        // Check if the table already exists
//        if ($installer->getConnection()->isTableExists($tableName) != true) {
//            // Create company_blog table
//            $table = $installer->getConnection()
//                ->newTable($tableName)
//                ->addColumn(
//                    'id',
//                    Table::TYPE_INTEGER,
//                    null,
//                    [
//                        'identity' => true,
//                        'unsigned' => true,
//                        'nullable' => false,
//                        'primary' => true
//                    ],
//                    'ID'
//                )
//                ->addColumn(
//                    'name',
//                    Table::TYPE_TEXT,
//                    null,
//                    ['nullable' => false, 'default' => ''],
//                    'Name'
//                )
//                ->addColumn(
//                    'email',
//                    Table::TYPE_TEXT,
//                    null,
//                    ['nullable' => false, 'default' => ''],
//                    'Email'
//                )
//                ->addColumn(
//                    'company',
//                    Table::TYPE_TEXT,
//                    null,
//                    ['nullable' => false, 'default' => ''],
//                    'Company'
//                )
//                ->addColumn(
//                    'telephone',
//                    Table::TYPE_TEXT,
//                    null,
//                    ['nullable' => false, 'default' => ''],
//                    'telephone'
//                )
//
//                ->setComment('Sigma Mycontact')
//                ->setOption('type', 'InnoDB')
//                ->setOption('charset', 'utf8');
//            $installer->getConnection()->createTable($table);
//        }
//
//        $installer->endSetup();
//    }
//}