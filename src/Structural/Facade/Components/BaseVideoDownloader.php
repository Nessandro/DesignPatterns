<?php

namespace DesignPatterns\Structural\Facade\Components;

/*
File:   BaseVideoDownloader.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class BaseVideoDownloader
*/

use DesignPatterns\Structural\Facade\Abstracts\VideoDownloader;

class BaseVideoDownloader implements VideoDownloader
{

    public function fetchVideo()
    {
        echo "<br>";
        echo "<br>";
        echo "DOWNLOAD VIDEO:";
        echo "<br>";
        echo "<br>";

        echo "connecting with the server...";
        echo "<br>";
        echo "authentication....";
        echo "<br>";
        echo "fetching the video .....";
        echo "<br>";
        echo "logout....";
        echo "<br>";
    }
}