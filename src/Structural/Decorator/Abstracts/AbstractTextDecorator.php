<?php

namespace DesignPatterns\Structural\Decorator\Abstracts;

/*
File:   AbstractTextDecorator.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class AbstractTextDecorator
*/

abstract class AbstractTextDecorator implements Printable
{
    /**
     * @var
     */
    protected $text;

    /**
     * AbstractTextDecorator constructor.
     * @param AbstractTextDecorator $text
     */
    public function __construct(AbstractTextDecorator $text)
    {
        $this->text = $text;
    }

}