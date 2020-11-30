<?php


namespace Sigma\customPlugin\PluginC\Plugin;
class Product
{
    public function beforeGetName(\Magento\Catalog\Model\Product $subject)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/PluginTest.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Before Execute From Plugin C');

    }
    
    public function aroundGetName($subject, $proceed)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/PluginTest.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Around Before Proceed Execute From Plugin C');

        $return = $proceed();

        $logger->info('Around After Proceed Execute From Plugin C');

        return $return;
    }

    public function afterGetName($subject, $result)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/PluginTest.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('After Execute From Plugin C');
        return $result;
    }

}