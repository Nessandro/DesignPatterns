<?php

namespace DesignPatterns\Structural\Adapter\Services;

/*
File:   PaymentService.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class PaymentService
*/

use DesignPatterns\Structural\Adapter\Abstracts\AbstractGatewayService;
use DesignPatterns\Structural\Adapter\Abstracts\PaymentGatewayInterface;

class PaymentService extends AbstractGatewayService
{
    /**
     * @return mixed|void
     */
    public function execute()
    {
        //todo add transactions
        //todo add logs
        $result = $this->gateway->pay();
    }

}