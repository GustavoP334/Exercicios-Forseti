<?php

namespace Forseti\exerSpaceJam\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    public function __construct($retornaHtmlSiteMap)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($retornaHtmlSiteMap);
    }
}