<?php

namespace Gumdrop;

/**
 * Page object representing a page of the website
 */
class Page
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */

    private $markdownContent;
    /**
     * @var string
     */
    private $htmlContent;


    /**
     * @param string $htmlContent
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
    }

    /**
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $markdownContent
     */
    public function setMarkdownContent($markdownContent)
    {
        $this->markdownContent = $markdownContent;
    }

    /**
     * @return string
     */
    public function getMarkdownContent()
    {
        return $this->markdownContent;
    }
}
