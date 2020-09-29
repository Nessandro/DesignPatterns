<?php
namespace DesignPatterns\Creational\Factory\Components;

/*
File:   HtmlWriter.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class HtmlWriter
*/

use DesignPatterns\Creational\Factory\Abstracts\WriterInterface;

class HtmlWriter implements WriterInterface
{

    public function write()
    {
        return '
        <html>
            <div>
                <div>name</div>
                <div>Test Document</div>
            </div>
            <div>
                <div>version</div>
                <div>1.0.0</div>
            </div>
        </html>      
        ';
    }
}