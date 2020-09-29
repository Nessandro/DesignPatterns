<?php

namespace DesignPatterns\Creational\Factory\Components;

/*
File:   WriterFactory.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class WriterFactory
*/

use DesignPatterns\Creational\Factory\Abstracts\WriterInterface;

class WriterFactory
{
    const HTML  = 'html';
    const JSON  = 'json';
    const XML   = 'xml';

    /**
     * @param $type
     * @return WriterInterface
     * @throws \Exception
     */
    public static function create($type)
    {
        switch ($type)
        {
            case static::HTML:
                return new HtmlWriter();
            case static::JSON:
                return new JsonWriter();
            case static::XML:
                return new XmlWriter();
        }

        throw new \Exception("Type {$type} is not supported");

    }

}