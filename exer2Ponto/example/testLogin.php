<?php

require __DIR__ . '/../vendor/autoload.php';

$login = new Forseti\exer2Ponto\PageObject\TablePageObject();

$logado = $login
    ->setUser('gustavo.lima@forseti.com.br')
    ->setPassword('Forseti4968')
    ->getResponse();

$info = $login->getParserTable()->getIterator()->current();

foreach ($info as $infos)
{
    var_dump($infos);
}
