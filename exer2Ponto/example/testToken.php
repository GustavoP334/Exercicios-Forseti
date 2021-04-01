<?php

use Forseti\exer2Ponto\PageObject\TokenPageObject;

require __DIR__ . '/../vendor/autoload.php';

$login = new TokenPageObject();

$content = $login->getParserToken()->getToken();
var_dump($content);
