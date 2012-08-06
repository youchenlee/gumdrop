<?php

namespace Gumdrop;

/**
 * Gumdrop application
 */
class Application
{
    /**
     * @var \dflydev\markdown\MarkdownParser
     */
    private $MarkdownParser;

    /**
     * @var \Gumdrop\FileHandler
     */
    private $FileHandler;

    /**
     * @var \Gumdrop\Engine
     */
    private $Engine;

    /**
     * Twig environment generator
     * @var \Gumdrop\Twig
     */
    private $Twig;

    /**
     * @var string Location of the markdown source files
     */
    private $sourceLocation = '';

    /**
     * @var string Location of the generated site
     */
    private $destinationLocation = '';

    /**
     * Generates the site
     *
     * @param string $destination
     */
    public function generate()
    {
        $PageCollection = $this->FileHandler->listMarkdownFiles();
        $PageCollection = $this->FileHandler->getMarkdownFiles($PageCollection);
        $this->Engine->run($PageCollection);
    }


    /**
     * @param \dflydev\markdown\MarkdownParser $MarkdownParser
     *
     * @codeCoverageIgnore
     */
    public function setMarkdownParser(\dflydev\markdown\MarkdownParser $MarkdownParser)
    {
        $this->MarkdownParser = $MarkdownParser;
    }

    /**
     * @return \dflydev\markdown\MarkdownParser
     * @codeCoverageIgnore
     */
    public function getMarkdownParser()
    {
        return $this->MarkdownParser;
    }

    /**
     * @param \Gumdrop\FileHandler $FileHandler
     *
     * @codeCoverageIgnore
     */
    public function setFileHandler($FileHandler)
    {
        $this->FileHandler = $FileHandler;
    }

    /**
     * @return \Gumdrop\FileHandler
     * @codeCoverageIgnore
     */
    public function getFileHandler()
    {
        return $this->FileHandler;
    }

    /**
     * @param \Gumdrop\Engine $Engine
     *
     * @codeCoverageIgnore
     */
    public function setEngine($Engine)
    {
        $this->Engine = $Engine;
    }

    /**
     * @return \Gumdrop\Engine
     * @codeCoverageIgnore
     */
    public function getEngine()
    {
        return $this->Engine;
    }

    /**
     * Set location of the markdown source files
     *
     * @param string $sourceLocation
     */
    public function setSourceLocation($sourceLocation)
    {
        $this->sourceLocation = $sourceLocation;
    }

    /**
     * Get location of the markdown source files
     * @return string
     */
    public function getSourceLocation()
    {
        return $this->sourceLocation;
    }

    /**
     * Set the location of the generated site
     *
     * @param string $destinationLocation
     */
    public function setDestinationLocation($destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;
    }

    /**
     * Get the location of the generated site
     * @return string
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Set the Twig environment generator
     * @param \Gumdrop\Twig $Twig
     */
    public function setTwig($Twig)
    {
        $this->Twig = $Twig;
    }

    /**
     * Get the Twig environment generator
     * @return \Gumdrop\Twig
     */
    public function getTwig()
    {
        return $this->Twig;
    }
}