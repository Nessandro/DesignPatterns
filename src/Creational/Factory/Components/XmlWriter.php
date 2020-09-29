<?php
namespace DesignPatterns\Creational\Factory\Components;

/*
File:   XmlWriter.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class XmlWriter
*/

use DesignPatterns\Creational\Factory\Abstracts\WriterInterface;

class XmlWriter implements WriterInterface
{

    public function write()
    {
        return '
        <xml version="1.0" encoding="UTF-8" standalone="yes">
            <name>Test Document</name>
            <version>1.0.0</version>
        </xml>
        ';
    }
}