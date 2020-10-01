<?php
namespace DesignPatterns\Behavioral\Mediator;

/*
File:   Mediator.php
Date:   01.10.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Mediator
*/

use DesignPatterns\Behavioral\Mediator\Components\Logger;
use DesignPatterns\Behavioral\Mediator\Components\User;

class Mediator
{

    public function run()
    {
        /**
         * create logger
         * in logger
         */
        $logger = new Logger();

        /**
         * create model
         */
        $user = new User();

        /**
         * simple CRUD actions
         */
        $user->create('Test','Developer');

        $user->read(1);

        $user->update(1);

        $user->delete(1);

    }

}