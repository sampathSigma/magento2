<?php

/**
 * Created by PhpStorm.
 * User: sampathkumar
 * Date: 25/11/20
 * Time: 8:50 PM
 */
namespace codeTheater\RequestFlow\Controller\page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class CustomNoRoute extends Action

{
    public function execute()
    {
        // TODO: Implement execute() method.
        echo "this is our custom 404 page";
    }


}