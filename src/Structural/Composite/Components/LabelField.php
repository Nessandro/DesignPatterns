<?php

namespace DesignPatterns\Structural\Composite\Components;

/*
File:   LabelField.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class LabelField
*/

use DesignPatterns\Structural\Composite\Abstracts\AbstractFieldContainer;

class LabelField extends AbstractFieldContainer
{
    /**
     * @var
     */
    protected $content;

    /**
     * LabelField constructor.
     * @param string|null $name
     * @param string|null $content
     */
    public function __construct(string $name = null, string $content = null)
    {
        parent::__construct($name);
        $this->setContent($content);
    }

    /**
     * @param string|null $content
     * @return LabelField
     */
    public function setContent(string $content = null): LabelField
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function render()
    {
        return '<label >'. $this->getContent() .'</label>';
    }
}