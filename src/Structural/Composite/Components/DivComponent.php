<?php

namespace DesignPatterns\Structural\Composite\Components;

/*
File:   DivComponent.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class DivComponent
*/

use DesignPatterns\Structural\Composite\Abstracts\AbstractFieldContainer;

class DivComponent extends AbstractFieldContainer
{
    /**
     * @return string
     */
    public function render(): string
    {
        $html = '<div name="'.$this->getName().'">';
        foreach ($this->getNodes() as $node)
        {
            $html .= $node->render();
        }

        $html .= '</div>';

        return $html;
    }
}