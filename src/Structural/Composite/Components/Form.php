<?php

namespace DesignPatterns\Structural\Composite\Components;

/*
File:   Form.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Form
*/

use DesignPatterns\Structural\Composite\Abstracts\AbstractFieldContainer;

class Form extends AbstractFieldContainer
{

    /**
     *
     * @description render the form output
     * @return string
     */
    public function render(): string
    {
        //TODO: add engine to load html
        $html = '<form name="'.$this->getName().'">';

        foreach ($this->getNodes() as $node)
        {
            /* @var $node AbstractFieldContainer */
            $html .= $node->render();
        }

        $html .= '</form>';

        return $html;

    }
}