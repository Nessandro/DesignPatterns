<?php
namespace DesignPatterns\Structural\Decorator\Components;

/*
File:   Hash.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Hash
*/

use DesignPatterns\Structural\Decorator\Abstracts\AbstractTextDecorator;

/**
 * Class Hash
 * @package DesignPatterns\Structural\Decorator\Components
 */
class Hash extends AbstractTextDecorator
{
    /**
     * @var string
     */
    protected $alg = 'sha1';

    /**
     * @param string $alg
     * @return Hash
     */
    public function setAlg(string $alg): Hash
    {
        $this->alg = $alg;
        return $this;
    }

    /**
     * @return string
     */
    public function print(): string
    {
        return hash($this->alg, $this->text->print());
    }
}