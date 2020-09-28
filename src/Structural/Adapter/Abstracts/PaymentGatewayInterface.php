<?php
namespace DesignPatterns\Structural\Adapter\Abstracts;

/*
File:   PaymentGateway.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class PaymentGateway
*/

interface PaymentGatewayInterface
{
    /**
     * @description do the payment
     * @return mixed
     */
    public function pay();


    /**
     * @description return the payment
     * @return mixed
     */
    public function refund();

}