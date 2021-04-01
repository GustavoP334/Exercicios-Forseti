<?php

use Forseti\exerSpaceJam\PageObject\RetornaHtmlSiteMap;

require __DIR__ . '/../vendor/autoload.php';

$pagina = new RetornaHtmlSiteMap();

$html = $pagina->getHtmlSiteMap();

var_dump($html);