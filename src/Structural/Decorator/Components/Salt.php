<?php
namespace DesignPatterns\Structural\Decorator\Components;

/*
File:   Salt.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Salt
*/

use DesignPatterns\Structural\Decorator\Abstracts\AbstractTextDecorator;

/**
 * Class Salt
 * @package DesignPatterns\Structural\Decorator\Components
 */
class Salt extends AbstractTextDecorator
{
    /**
     * @var string
     */
    protected $salt = 'weakSalt123';

    /**
     * @return string
     */
    public function print(): string
    {
        return $this->salt.$this->text->print();
    }

}