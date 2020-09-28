<?php

namespace DesignPatterns\Structural\Adapter\Abstracts;

/*
File:   AbstractGatewayService.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class AbstractGatewayService
*/

abstract class AbstractGatewayService
{
    /**
     * @var PaymentGatewayInterface
     */
    protected $gateway;

    /**
     * PaymentService constructor.
     * @param PaymentGatewayInterface $gateway
     */
    public function __construct(PaymentGatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @return PaymentGatewayInterface
     */
    public function getGateway(): PaymentGatewayInterface
    {
        return $this->gateway;
    }

    /**
     * @param PaymentGatewayInterface $gateway
     */
    public function setGateway(PaymentGatewayInterface $gateway): void
    {
        $this->gateway = $gateway;
    }

    /**
     * @return mixed
     */
    public abstract function execute();
}