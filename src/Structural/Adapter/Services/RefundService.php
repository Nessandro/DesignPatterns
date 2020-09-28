<?php

namespace DesignPatterns\Structural\Adapter\Services;

/*
File:   RefundService.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class RefundService
*/

use DesignPatterns\Structural\Adapter\Abstracts\AbstractGatewayService;

class RefundService extends AbstractGatewayService
{
    /**
     * @inheritDoc
     */
    public function execute()
    {
        //todo add transactions
        //todo add logs
        $result = $this->gateway->refund();
    }
}