<?php
namespace DesignPatterns\Behavioral\Strategy\Abstracts;

/*
File:   StrategyInterface.php
Date:   01.10.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class StrategyInterface
*/

/**
 * Interface SupportInterface
 * @package DesignPatterns\Behavioral\Strategy\Abstracts
 */
interface SupportInterface
{

    /**
     * @return mixed
     */
    public function createTicket();

    /**
     * @return mixed
     */
    public function createUser();

    /**
     * @return mixed
     */
    public function createReply();

    /**
     * @return mixed
     */
    public function getTickets();

    /**
     * @return mixed
     */
    public function getUser();

}