<?php
namespace DesignPatterns\Behavioral\Mediator\Abstracts;

/*
File:   ObserverInterface.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class ObserverInterface
*/

interface ListenerInterface
{

    public function callEvent(string $event, object $emitter, $data);

    public function addEvent(string $event = '*');

}