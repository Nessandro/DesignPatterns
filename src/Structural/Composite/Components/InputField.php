<?php

namespace DesignPatterns\Structural\Composite\Components;

/*
File:   InputField.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class InputField
*/

use DesignPatterns\Structural\Composite\Abstracts\AbstractFieldContainer;
use DesignPatterns\Structural\Composite\Enums\InputTypes;

class InputField extends AbstractFieldContainer
{
    /**
     * @var string
     */
    protected $type = InputTypes::TEXT;

    /**
     * InputField constructor.
     * @param string|null $name
     */
    public function __construct(string $name = null)
    {
        parent::__construct($name);

    }

    /**
     * @param string $type
     * @return AbstractFieldContainer
     */
    public function setType(string $type = InputTypes::TEXT): AbstractFieldContainer
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="'.$this->getType().'" name="'.$this->getName().'">';
    }
}