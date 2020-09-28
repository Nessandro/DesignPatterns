<?php

namespace DesignPatterns\Structural\Adapter\Components;

/*
File:   AmericanGatewayAdapter.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class AmericanGatewayAdapter
*/

use DesignPatterns\Structural\Adapter\Abstracts\AmericanGatewayInterface;
use DesignPatterns\Structural\Adapter\Abstracts\PaymentGatewayInterface;

class AmericanGatewayAdapter implements PaymentGatewayInterface
{
    /**
     * @var AmericanGatewayInterface
     */
    protected $gateway;

    /**
     * AmericanGatewayAdapter constructor.
     * @param AmericanGatewayInterface $gateway
     */
    public function __construct(AmericanGatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @inheritDoc
     */
    public function pay()
    {
        return $this->gateway->doPayment();
    }

    /**
     * @inheritDoc
     */
    public function refund()
    {
        return $this->gateway->doRefund();
    }
}