<?php

namespace Sigma\Mycontact\Model\Mycontact;

use Sigma\Mycontact\Model\ResourceModel\Mycontact\CollectionFactory;
use Magento\Framework\App\Request\DataPersistorInterface;

/**
 * Class DataProvider
 */
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var \Magento\Cms\Model\ResourceModel\Block\Collection
     */
    protected $collection;

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;
    public $_storeManager;
    /**
     * @var array
     */
    protected $loadedData;

    /**
     * Constructor
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $blockCollectionFactory
     * @param DataPersistorInterface $dataPersistor
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $blockCollectionFactory,
        DataPersistorInterface $dataPersistor,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $blockCollectionFactory->create();
        $this->_storeManager=$storeManager;
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        $baseurl =  $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        /** @var \Magento\Cms\Model\Block $block */
        foreach ($items as $block) {
            $this->loadedData[$block->getId()] = $block->getData();

            
             $temp = $block->getData();
               
        }
        
       

   
      
     
        $data = $this->dataPersistor->get('sigma_mycontacts');
        
        if (!empty($data)) {
            $block = $this->collection->getNewEmptyItem();
            $block->setData($data);



            $this->loadedData[$block->getId()] = $block->getData();
             
            $this->dataPersistor->clear('sigma_mycontacts');
        }
        
//        if (empty($this->loadedData)) {
//            return $this->loadedData;
//        } else
//        {
//            if ($block->getData('bannerimage') != null) {
//                $t2[$block->getId()] = $temp;
//                return $t2;
//            } else {
//                return $this->loadedData;
//            }
//        }
    }
}
