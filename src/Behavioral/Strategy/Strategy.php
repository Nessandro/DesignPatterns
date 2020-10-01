<?php
namespace DesignPatterns\Behavioral\Strategy;

/*
File:   Strategy.php
Date:   01.10.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Strategy
*/

use DesignPatterns\Behavioral\Strategy\Components\MockSupportApi;
use DesignPatterns\Behavioral\Strategy\Components\MySupportApi;
use DesignPatterns\Behavioral\Strategy\Components\SupportStrategy;

class Strategy
{

    public function run()
    {

        $strategy = new SupportStrategy();

        $strategy->setStrategy(new MySupportApi());
        $strategy->getUser();
        $strategy->getTickets();
        $strategy->createTicket();
        $strategy->createReply();
        $strategy->createUser();

        $strategy->setStrategy(new MockSupportApi());
        $strategy->getUser();
        $strategy->getTickets();
        $strategy->createTicket();
        $strategy->createReply();
        $strategy->createUser();

    }
}