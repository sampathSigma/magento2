<?php


namespace Sigma\Mycontact\Block;

use Magento\Framework\View\Element\Template;

class Contact extends Template
{
    public function __construct(Template\Context $context, array $data)
    {
        parent::__construct($context, $data);
    }
    public function getFormAction()
    {
        return $this->getUrl('mycontactform/index/post',['_secure' => true]);
    }

}