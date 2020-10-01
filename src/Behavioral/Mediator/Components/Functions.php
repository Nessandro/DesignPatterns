<?php

namespace DesignPatterns\Behavioral\Mediator\Components;


/**
 * @return \DesignPatterns\Behavioral\Mediator\Components\EventDispatcher
 */
if (!function_exists('\DesignPatterns\Behavioral\Mediator\Component\events')) {
    function events(): EventDispatcher
    {
        static $eventDispatcher;
        if (!$eventDispatcher) {
            $eventDispatcher = new EventDispatcher();
        }

        return $eventDispatcher;
    }
}