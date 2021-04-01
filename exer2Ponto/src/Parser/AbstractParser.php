<?php

namespace Forseti\exer2Ponto\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    public function __construct($TokenPageObject)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($TokenPageObject);
    }

}