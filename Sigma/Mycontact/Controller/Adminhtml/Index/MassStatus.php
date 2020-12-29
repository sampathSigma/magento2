<?php
///**
// * Copyright © 2015 Magento. All rights reserved.
// * See COPYING.txt for license details.
// */
//namespace Sigma\Mycontact\Controller\Adminhtml\Index;
//
//use Magento\Framework\Controller\ResultFactory;
//use Magento\Backend\App\Action\Context;
//use Magento\Ui\Component\MassAction\Filter;
//use Sigma\Mycontact\Model\ResourceModel\Mycontact\CollectionFactory;
//
///**
// * Class MassDisable
// */
//class MassStatus extends \Magento\Backend\App\Action
//{
//    /**
//     * @var Filter
//     */
//    protected $filter;
//
//    /**
//     * @var CollectionFactory
//     */
//    protected $collectionFactory;
//
//    /**
//     * @param Context $context
//     * @param Filter $filter
//     * @param CollectionFactory $collectionFactory
//     */
//    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory)
//    {
//        $this->filter = $filter;
//        $this->collectionFactory = $collectionFactory;
//        parent::__construct($context);
//    }
//
//    protected function _isAllowed()
//    {
//        return $this->_authorization->isAllowed('Sigma_Mycontact::mycontact');
//    }
//
//    /**
//     * Execute action
//     *
//     * @return \Magento\Backend\Model\View\Result\Redirect
//     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
//     */
//    public function execute()
//    {
//        $status = $this->getRequest()->getParam('Status');
//
//        $collection = $this->filter->getCollection($this->collectionFactory->create());
//
//        foreach ($collection as $item) {
//            $item->setStatus($status);
//            $item->save();
//        }
//
//        $this->messageManager->addSuccess(__('A total of %1 record have been changed.', $collection->getSize()));
//
//        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
//        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
//        return $resultRedirect->setPath('*/*/');
//    }
//}



namespace Sigma\Mycontact\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Sigma\Mycontact\Model\ResourceModel\Mycontact\CollectionFactory;

/**
 * Class MassDisable
 */
class MassStatus extends \Magento\Backend\App\Action
{
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory)
    {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Sigma_Mycontact::mycontact');
    }

    /**
     * Execute action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */
    public function execute()
    {
        $status = $this->getRequest()->getParam('Status');

        $collection = $this->filter->getCollection($this->collectionFactory->create());

        foreach ($collection as $item) {
            $item->setStatus($status);
            $item->save();

//            print_r($item);

//            $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
//            $logger = new \Zend\Log\Logger();
//            $logger->addWriter($writer);
//            $logger->info($status);
        }


        $this->messageManager->addSuccess(__('A total of %1 record have been changed.', $collection->getSize()));

        /* @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect /*/
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}