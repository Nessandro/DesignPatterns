<?php

namespace DesignPatterns\Structural\Facade\Components;

/*
File:   BaseVideoFormatter.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class BaseVideoFormatter
*/

use DesignPatterns\Structural\Facade\Abstracts\VideoFormatter;

class BaseVideoFormatter implements VideoFormatter
{

    public function formatVideo()
    {
        echo "opening the video...";
        echo "<br>";
        echo "formatting the video...";
        echo "<br>";
    }
}