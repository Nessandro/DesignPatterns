<?php
namespace DesignPatterns\Behavioral\Strategy\Components;

/*
File:   SupportStrategy.php
Date:   01.10.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class SupportStrategy
*/

use DesignPatterns\Behavioral\Strategy\Abstracts\SupportInterface;

class SupportStrategy
{
    /**
     * @var SupportInterface
     */
    protected $strategy;

    /**
     * SupportStrategy constructor.
     * @param SupportInterface|null $strategy
     */
    public function __construct(SupportInterface $strategy = null)
    {
        $this->setStrategy($strategy);
    }

    /**
     * @param SupportInterface|null $strategy
     */
    public function setStrategy(SupportInterface $strategy = null): void
    {
        $this->strategy = $strategy;
    }


    /**
     * @inheritDoc
     */
    public function createTicket()
    {
        return $this->strategy->createTicket();
    }

    /**
     * @inheritDoc
     */
    public function createUser()
    {
        return $this->strategy->createUser();
    }

    /**
     * @inheritDoc
     */
    public function createReply()
    {
        return $this->strategy->createReply();
    }

    /**
     * @inheritDoc
     */
    public function getTickets()
    {
        return $this->strategy->getTickets();
    }

    /**
     * @inheritDoc
     */
    public function getUser()
    {
        return $this->strategy->getUser();
    }
}