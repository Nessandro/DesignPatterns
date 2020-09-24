<?php
namespace DesignPatterns\Structural\Decorator\Components;

/*
File:   Plain.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Plain
*/

use DesignPatterns\Structural\Decorator\Abstracts\AbstractTextDecorator;

/**
 * Class Plain
 * @package DesignPatterns\Structural\Decorator\Components
 */
class Plain extends AbstractTextDecorator
{

    /**
     * Plain constructor.
     * @param string $text
     */
    public function __construct(string $text = '')
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function print(): string
    {
        return $this->text;
    }
}