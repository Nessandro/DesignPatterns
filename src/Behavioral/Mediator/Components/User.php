<?php

namespace DesignPatterns\Behavioral\Mediator\Components;

/*
File:   User.php
Date:   01.10.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class User
*/

use DesignPatterns\Behavioral\Mediator\Abstracts\ListenerInterface;
use DesignPatterns\Behavioral\Mediator\Components\events;

/**
 * Class User
 * @package DesignPatterns\Behavioral\Mediator\Components
 */
class User implements ListenerInterface
{
    /**
     *
     */
    public function callEvent(string $event, object $emitter, $data)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param string $event
     */
    public function addEvent(string $event = '*')
    {
        events()->attach($this, $event);
    }

    /**
     * @param $firstname
     * @param $lastname
     */
    public function create($firstname, $lastname)
    {
        echo "<br>User {$firstname} {$lastname} has been created.<br>";
        events()->emit('user:create', $this, $this);
    }

    /**
     * @param $id
     */
    public function read($id)
    {
        echo "<br>User #{$id} Details<br>";
        events()->emit('user:read', $this, $this);
    }

    /**
     * @param $id
     */
    public function update($id)
    {
        echo "<br>User #{$id} has been updated.<br>";
        events()->emit('user:update', $this, $this);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        echo "<br>User #{$id} has been deleted.<br>";
        events()->emit('user:delete', $this, $this);

    }



}