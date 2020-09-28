<?php
namespace DesignPatterns\Structural\Adapter\Components;

/*
File:   BestGateway.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class BestGateway
*/

use DesignPatterns\Structural\Adapter\Abstracts\PaymentGatewayInterface;

class EuropeGateway implements PaymentGatewayInterface
{

    /**
     * @inheritDoc
     */
    public function pay(): void
    {
        echo "<br>";
        echo "Europe Gateway Paid.";
        echo "<br>";
    }

    /**
     * @inheritDoc
     */
    public function refund(): void
    {
        echo "<br>";
        echo "Europe Gateway Refunded.";
        echo "<br>";
    }
}