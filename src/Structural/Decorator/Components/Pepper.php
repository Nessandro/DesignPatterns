<?php
namespace DesignPatterns\Structural\Decorator\Components;

/*
File:   Peper.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Peper
*/

use DesignPatterns\Structural\Decorator\Abstracts\AbstractTextDecorator;

/**
 * Class Pepper
 * @package DesignPatterns\Structural\Decorator\Components
 */
class Pepper extends AbstractTextDecorator
{
    /**
     * @var string
     */
    protected $pepper = 'weakPeper123';

    /**
     * @return string
     */
    public function print(): string
    {
        return $this->text->print().$this->pepper;
    }
}