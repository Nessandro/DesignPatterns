<?php
namespace DesignPatterns\Creational\Factory\Components;

/*
File:   JsonWriter.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class JsonWriter
*/

use DesignPatterns\Creational\Factory\Abstracts\WriterInterface;

class JsonWriter implements WriterInterface
{

    public function write()
    {
        return '
        {
            "name": "Test Document",
            "version": "1.0.0"
        }';
    }
}