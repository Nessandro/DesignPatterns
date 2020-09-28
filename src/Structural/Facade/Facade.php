<?php
namespace DesignPatterns\Structural\Facade;

/*
File:   Facade.php
Date:   28.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class Facade
*/

use DesignPatterns\Structural\Facade\Components\BaseVideoDownloader;
use DesignPatterns\Structural\Facade\Components\BaseVideoFormatter;
use DesignPatterns\Structural\Facade\Components\VideoDownloaderFacade;

class Facade
{
    public function run(): void
    {
        /**
         * init video downloader
         */
        $downloader = new BaseVideoDownloader();

        /**
         * init video formatter
         */
        $formatter = new BaseVideoFormatter();

        /**
         * init & run downloader facade
         */
        $facade = new VideoDownloaderFacade($downloader, $formatter);
        $facade->download();

    }
}