<?php

use Forseti\exerSpaceJam\Parser\FilterParser;

require __DIR__.'/../vendor/autoload.php';

$retonaHtmlSiteMap = new \Forseti\exerSpaceJam\PageObject\RetornaHtmlSiteMap();

$filterParser = new FilterParser($retonaHtmlSiteMap->getHtmlSiteMap());
$filterParser = $retonaHtmlSiteMap->getParser()->getIterator()->current();

$objeto = $retonaHtmlSiteMap->getParser()->getIterator()->current();
var_dump($objeto->descricao);
var_dump($objeto->link);

