<?php
declare(strict_types=1);

namespace Assignment\DisallowState\Plugin\Magento\Directory\Model\ResourceModel\Region;

class Collection
{

    public function afterAddAllowedCountriesFilter(
        \Magento\Directory\Model\ResourceModel\Region\Collection $subject,
        $result,
        $store = null
    ) {
        $result->addFieldToFilter('main_table.code', ['nin' => ['GU','PW','AS','AE','AA','AP','FM','MH','MP']]);
        return $result;
    }
}