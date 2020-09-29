<?php
namespace DesignPatterns\Creational\Builder;

/*
File:   Builder.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Builder
*/

use DesignPatterns\Creational\Builder\Components\Director;
use DesignPatterns\Creational\Builder\Components\JuniorOfferBuilder;
use DesignPatterns\Creational\Builder\Components\Offer;
use DesignPatterns\Creational\Builder\Components\SeniorOfferBuilder;

class Builder
{

    public function run()
    {
        $director = new Director();

        $juniorOffer = $director->build(new JuniorOfferBuilder());
        $this->display($juniorOffer);


        $seniorOffer = $director->build(new SeniorOfferBuilder());
        $this->display($seniorOffer);
    }

    /**
     * @param Offer $offer
     */
    public function display(Offer $offer)
    {
        echo "<br><br>-----------------<br>";
        echo "New Job Offer:<br>";

        echo "Title: {$offer->getName()}<br>";
        echo "Required Experience: {$offer->getExperience()}";

        echo "Required Stack:";
        echo implode("<br>-",$offer->getRequiredStack())."<br><br>";

        echo "Languages:";
        echo implode("<br>-",$offer->getLanguages())."<br><br>";

        echo "Max Salary: {$offer->getMaxSalary()}";
        echo "<br>-----------------";

    }

}