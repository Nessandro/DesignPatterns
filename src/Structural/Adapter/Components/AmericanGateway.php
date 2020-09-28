<?php

namespace DesignPatterns\Structural\Adapter\Components;

/*
File:   OldGateway.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class OldGateway
*/

use DesignPatterns\Structural\Adapter\Abstracts\AmericanGatewayInterface;

/**
 * Class AmericanGateway
 * @package DesignPatterns\Structural\Adapter\Components
 */
class AmericanGateway implements AmericanGatewayInterface
{

    /**
     * @return $this|mixed
     */
    public function doPayment(): void
    {
        echo "<br>";
        echo "American Gateway Paid";
        echo "<br>";
    }

    /**
     * @return $this|mixed
     */
    public function doRefund(): void
    {
        echo "<br>";
        echo "American Gateway Refunded";
        echo "<br>";
    }

}