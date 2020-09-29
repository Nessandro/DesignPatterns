<?php
namespace DesignPatterns\Creational\Builder\Components;

/*
File:   Director.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Director
*/

use DesignPatterns\Creational\Builder\Abstracts\BuilderInterface;

class Director
{

    public function build(BuilderInterface $builder)
    {
        $builder->createOffer();
        $builder->addName();
        $builder->addExperience();
        $builder->addRequiredStack();
        $builder->addMaxSalary();
        $builder->addLanguages();

        return $builder->getOffer();
    }


}