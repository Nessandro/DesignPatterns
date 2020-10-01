<?php
namespace DesignPatterns\Behavioral\Mediator\Components;

/*
File:   EventDispatcher.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class EventDispatcher
*/

use DesignPatterns\Behavioral\Mediator\Abstracts\ListenerInterface;

class EventDispatcher
{

    /**
     * @var array
     */
    private $listeners = [];

    public function __construct()
    {

        $this->initEventGroup('*');
    }

    /**
     *
     * @description init group if does not exists
     * @param string $event
     */
    private function initEventGroup(string $event = '*'): void
    {
        if(!isset($this->listeners[$event]))
        {
            $this->listeners[$event] = [];
        }
    }

    /**
     * returns listeners for event
     * @param string $event
     * @return array
     */
    private function getEventListeners(string $event = '*'): array
    {
        $this->initEventGroup($event);
        return array_merge($this->listeners[$event], $this->listeners['*']);
    }

    /**
     * @param ListenerInterface $listener
     * @param string $event
     */
    public function attach(ListenerInterface &$listener, string $event = '*'): void
    {
        $this->initEventGroup($event);
        $this->listeners[$event][] = $listener;
    }

    /**
     * @param ListenerInterface $listener
     * @param string $event
     */
    public function detach(ListenerInterface $listener, string $event = '*'): void
    {
        foreach ($this->getEventListeners($event) as $key => $component) {
            if ($component === $listener) {
                unset($this->listeners[$event][$key]);
            }
        }
    }

    /**
     * @param string $event
     * @param $emitter
     * @param null $data
     */
    public function emit(string $event, $emitter, $data = null): void
    {
        foreach ($this->getEventListeners($event) as $listener)
        {
            $listener->callEvent($event, $emitter, $data);
        }
    }

}