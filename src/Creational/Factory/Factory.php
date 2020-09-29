<?php
namespace DesignPatterns\Creational\Factory;

/*
File:   Factory.php
Date:   29.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Factory
*/

use DesignPatterns\Creational\Factory\Components\WriterFactory;

/**
 * Class Factory
 * @package DesignPatterns\Creational\Factory
 */
class Factory
{

    /**
     * @throws \Exception
     */
    public function run(): void
    {
        $this->addHeader("XML DOCUMENT");
        $writer = WriterFactory::create(WriterFactory::XML);
        echo $writer->write();


        $this->addHeader("JSON DOCUMENT");
        $writer = WriterFactory::create(WriterFactory::JSON);
        echo $writer->write();

        $this->addHeader("HTML DOCUMENT");
        $writer = WriterFactory::create(WriterFactory::HTML);
        echo $writer->write();
    }

    /**
     * @param $header
     */
    protected function addHeader($header): void
    {
        echo "<br>";
        echo "<br>";
        echo $header;
        echo "<br>";
        echo "<br>";
    }


}