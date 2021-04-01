<?php

use Forseti\exerSpaceJam\PageObject\RetornaHtml;

require __DIR__ . '/../vendor/autoload.php';

$pagina = new RetornaHtml();

$html = $pagina->getHtml();

var_dump($html);
