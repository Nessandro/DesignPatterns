<?php

namespace DesignPatterns\Behavioral\Mediator\Components;

/*
File:   Logger.php
Date:   01.10.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Logger
*/

use DesignPatterns\Behavioral\Mediator\Abstracts\ListenerInterface;

class Logger implements ListenerInterface
{

    /**
     *
     */
    public function __construct()
    {
        $this->addEvent('user:create');
        $this->addEvent('user:read');
        $this->addEvent('user:update');
        $this->addEvent('user:delete');
    }

    /**
     * @param string $event
     */
    public function addEvent(string $event = '*')
    {
        events()->attach($this, $event);
    }

    /**
     * @param string $event
     * @param object $emitter
     * @param $data
     */
    public function callEvent(string $event, object $emitter, $data)
    {
        switch ($event)
        {
            case 'user:create':
                echo "Logged event: user:create<br>";
                break;
            case 'user:read':
                echo "Logged event: user:read<br>";
                break;
            case 'user:update':
                echo "Logged event: user:update<br>";
                break;
            case 'user:delete':
                echo "Logged event: user:delete<br>";
                break;
        }
    }
}