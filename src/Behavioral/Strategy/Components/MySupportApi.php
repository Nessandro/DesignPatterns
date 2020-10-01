<?php

namespace DesignPatterns\Behavioral\Strategy\Components;

/*
File:   MySupportApi.php
Date:   01.10.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class MySupportApi
*/

use DesignPatterns\Behavioral\Strategy\Abstracts\SupportInterface;

class MySupportApi implements SupportInterface
{

    /**
     * @inheritDoc
     */
    public function createTicket()
    {
        $this->response("TICKET HAS BEEN CREATED<br>");
    }

    /**
     * @inheritDoc
     */
    public function createUser()
    {
        $this->response("USER HAS BEEN CREATED<br>");
    }

    /**
     * @inheritDoc
     */
    public function createReply()
    {
        $this->response("REPLY HAS BEEN CREATED<br>");
    }

    /**
     * @inheritDoc
     */
    public function getTickets()
    {
        $this->response("TICKETS LIST<br>");
    }

    /**
     * @inheritDoc
     */
    public function getUser()
    {
        $this->response("USER RETURNED<br>");
    }

    protected function response(string $context)
    {
        echo "<br><br>";
        echo "<div style='color: red'>";
        echo "API: MY SUPPORT API RESPONSE<br>";
        echo $context;
        echo "</div>";
        echo "<br><br>";
    }
}