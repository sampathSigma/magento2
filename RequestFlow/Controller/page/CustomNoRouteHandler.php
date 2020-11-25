<?php
/**
 * Created by PhpStorm.
 * User: sampathkumar
 * Date: 25/11/20
 * Time: 9:08 PM
 */

namespace codeTheater\RequestFlow\Controller\page;



class CustomNoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $request->setRouteName('noroutefound')->setControllerName('page')->setActionName('customnoroute');

        return true;

    }

    
}