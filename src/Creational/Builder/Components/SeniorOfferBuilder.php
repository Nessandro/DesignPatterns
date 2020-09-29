<?php

namespace DesignPatterns\Creational\Builder\Components;

/*
File:   SeniorDeveloperBuilder.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class SeniorDeveloperBuilder
*/

class SeniorOfferBuilder extends JuniorOfferBuilder
{

    /**
     * @inheritDoc
     */
    public function addName()
    {
        $this->offer->setName('Senior PHP Developer');
    }

    /**
     * @inheritDoc
     */
    public function addExperience()
    {
        $this->offer->setExperience(4);
    }

    /**
     * @inheritDoc
     */
    public function addRequiredStack()
    {
        $this->offer->setRequiredStack(['PHP', 'MySQL', 'JavaScript', 'jQuery', 'Apache', 'Nginx', 'Docker', 'Linux']);
    }

    /**
     * @inheritDoc
     */
    public function addMaxSalary()
    {
        $this->offer->setMaxSalary(7000);
    }

    /**
     * @inheritDoc
     */
    public function addLanguages()
    {
        $this->offer->setLanguages(['english']);
    }
}