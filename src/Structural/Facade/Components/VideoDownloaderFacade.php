<?php
namespace DesignPatterns\Structural\Facade\Components;

/*
File:   VideoDownloaderFacade.php
Date:   25.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class VideoDownloaderFacade
*/

use DesignPatterns\Structural\Facade\Abstracts\VideoDownloader;
use DesignPatterns\Structural\Facade\Abstracts\VideoFormatter;

class VideoDownloaderFacade
{
    /**
     * @var VideoDownloader
     */
    protected $downloader;

    /**
     * @var VideoFormatter
     */
    protected $formatter;

    /**
     * VideoDownloaderFacade constructor.
     * @param VideoDownloader $downloader
     * @param VideoFormatter $formatter
     */
    public function __construct(VideoDownloader $downloader, VideoFormatter $formatter)
    {
        $this->downloader = $downloader;
        $this->formatter = $formatter;
    }

    /**
     * @return $this
     */
    public function download(): VideoDownloaderFacade
    {
        /**
         * fetching video
         */
        $this->downloader->fetchVideo();

        /**
         * formatting video
         */
        $this->formatter->formatVideo();

        return $this;
    }

}