<?php

namespace DesignPatterns\Creational\Builder\Components;

/*
File:   Offer.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Offer
*/

/**
 * Class Offer
 * @package DesignPatterns\Creational\Builder\Components
 */
class Offer
{

    /**
     * @var string
     */
    protected $name;
    /**
     * @var
     */
    protected $experience;
    /**
     * @var
     */
    protected $requiredStack;
    /**
     * @var
     */
    protected $maxSalary;
    /**
     * @var array
     */
    protected $languages = [];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getRequiredStack()
    {
        return $this->requiredStack;
    }

    /**
     * @param mixed $requiredStack
     */
    public function setRequiredStack($requiredStack): void
    {
        $this->requiredStack = $requiredStack;
    }

    /**
     * @return mixed
     */
    public function getMaxSalary()
    {
        return $this->maxSalary;
    }

    /**
     * @param mixed $maxSalary
     */
    public function setMaxSalary($maxSalary): void
    {
        $this->maxSalary = $maxSalary;
    }

    /**
     * @return array
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @param array $languages
     */
    public function setLanguages(array $languages = []): void
    {
        $this->languages = $languages;
    }



}