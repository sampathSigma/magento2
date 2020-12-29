<?php

namespace Sigma\Mycontact\Helper;
use Magento\Store\Model\ScopeInterface;
class Data extends \Magento\Contact\Helper\Data
{

    const CONFIG_MYCONTACT_MESSAGE = 'mycontact/fields_masks/msg';

    /**
     * Check if the store is configured to use static URLs for media
     *
     * @return bool
     */
    public function getContactMessage()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_MYCONTACT_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }
}