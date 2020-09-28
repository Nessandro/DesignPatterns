<?php

namespace DesignPatterns\Structural\Adapter\Abstracts;

/*
File:   AmericanGatewayInterface.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class AmericanGatewayInterface
*/

interface AmericanGatewayInterface
{
    /**
     * @description payment
     * @return mixed
     */
    public function doPayment();

    /**
     * @description refund
     * @return mixed
     */
    public function doRefund();
}