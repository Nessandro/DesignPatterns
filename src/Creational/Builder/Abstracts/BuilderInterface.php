<?php
namespace DesignPatterns\Creational\Builder\Abstracts;

/*
File:   BuilderInterface.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class BuilderInterface
*/

use DesignPatterns\Creational\Builder\Components\Offer;

interface BuilderInterface
{

    /**
     * @return mixed
     */
    public function createOffer();

    /**
     * @return mixed
     */
    public function addName();

    /**
     * @return mixed
     */
    public function addExperience();

    /**
     * @return mixed
     */
    public function addRequiredStack();

    /**
     * @return mixed
     */
    public function addMaxSalary();

    /**
     * @return mixed
     */
    public function addLanguages();

    /**
     * @return Offer
     */
    public function getOffer(): Offer;
}