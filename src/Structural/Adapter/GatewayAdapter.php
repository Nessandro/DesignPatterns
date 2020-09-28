<?php
namespace DesignPatterns\Structural\Adapter;

/*
File:   GatewayAdapter.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class GatewayAdapter
*/

use DesignPatterns\Structural\Adapter\Components\AmericanGateway;
use DesignPatterns\Structural\Adapter\Components\AmericanGatewayAdapter;
use DesignPatterns\Structural\Adapter\Components\EuropeGateway;
use DesignPatterns\Structural\Adapter\Services\PaymentService;
use DesignPatterns\Structural\Adapter\Services\RefundService;

class GatewayAdapter
{

    public function run()
    {

        /**
         * EUROPE GATEWAY SERVICES
         */
        $europeGateway = new EuropeGateway();

        $payment    = new PaymentService($europeGateway);
        $payment->execute();

        $refund     = new RefundService($europeGateway);
        $refund->execute();


        $americanGateway = new AmericanGatewayAdapter(new AmericanGateway());

        $payment->setGateway($americanGateway);
        $payment->execute();

        $refund->setGateway($americanGateway);
        $refund->execute();

    }
}