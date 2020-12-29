<?php

namespace Sigma\Mycontact\Model\ResourceModel;

class Mycontact extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{



    protected function _construct()
    {
        $this->_init('sigma_mycontacts', 'id');
    }
}


//
//namespace  Sigma\Mycontact\Model\ResourceModel;
//use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
//class Mycontact extends AbstractDb
//{
//    /**
//     * Initialize resource model
//     *
//     * @return void
//     */
//    protected function _construct()
//    {
//        $this->_init('sigma_mycontacts', 'id');
//    }
//}