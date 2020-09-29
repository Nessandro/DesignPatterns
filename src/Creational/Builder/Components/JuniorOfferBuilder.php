<?php

namespace DesignPatterns\Creational\Builder\Components;

/*
File:   JuniorDeveloperBuilder.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class JuniorDeveloperBuilder
*/

use DesignPatterns\Creational\Builder\Abstracts\BuilderInterface;

class JuniorOfferBuilder implements BuilderInterface
{
    /**
     * @var Offer
     */
    protected $offer;

    /**
     * @inheritDoc
     */
    public function createOffer()
    {
        $this->offer = new Offer();
    }

    /**
     * @inheritDoc
     */
    public function addName()
    {
        $this->offer->setName('Junior PHP Developer');
    }

    /**
     * @inheritDoc
     */
    public function addExperience()
    {
        $this->offer->setExperience(1);
    }

    /**
     * @inheritDoc
     */
    public function addRequiredStack()
    {
        $this->offer->setRequiredStack(['PHP', 'MySQL', 'JavaScript']);
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

    /**
     * @inheritDoc
     */
    public function getOffer(): Offer
    {
        return $this->offer;
    }

}