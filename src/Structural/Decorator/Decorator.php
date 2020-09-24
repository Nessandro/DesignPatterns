<?php
namespace DesignPatterns\Structural\Decorator;

/*
File:   Decorator.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Decorator
*/

use DesignPatterns\Structural\Decorator\Components\Hash;
use DesignPatterns\Structural\Decorator\Components\Pepper;
use DesignPatterns\Structural\Decorator\Components\Plain;
use DesignPatterns\Structural\Decorator\Components\Salt;

class Decorator
{

    public function run(): void
    {

        print '<pre>';

        /**
         * plain text without decorators
         */
        $plain = new Plain('tajneHaslo123');
        var_dump('Plain Password');
        var_dump($plain->print());
        var_dump("\r\n\r\n");

        /**
         * add salt decorator
         */
        $salt = new Salt($plain);
        var_dump('Salt Added');
        var_dump($salt->print());
        var_dump("\r\n\r\n");

        /**
         * add pepper decorator
         */
        $pepper = new Pepper($salt);
        var_dump('Salt & Pepper Added');
        var_dump($pepper->print());
        var_dump("\r\n\r\n");


        /**
         * hash (+ pepper and salt )decorator
         */
        $hash = new Hash($pepper);
        var_dump('Hashed with Salt & Pepper');
        var_dump($hash->print());
        var_dump("\r\n\r\n");

        /**
         * hash (+ plain text )decorator
         */

        $hash = new Hash($plain);
        var_dump('Hashed Plain text');
        var_dump($hash->print());
        var_dump("\r\n\r\n");

        print '</pre>';

    }

}