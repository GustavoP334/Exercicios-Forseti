<?php

require __DIR__ . '/../vendor/autoload.php';

$login = new Forseti\exer2Ponto\PageObject\TablePageObject();

$logado = $login
    ->setUser('gustavo.lima@forseti.com.br')
    ->setPassword('Forseti4968')
    ->getResponse();

$info = $login->getParserTable()->getIterator()->current();

echo 'Início = ' . $info->inicio . PHP_EOL;
echo 'Almoço = ' . $info->almoco . PHP_EOL;
echo 'Retorno = ' . $info->retorno . PHP_EOL;
echo 'Final = ' . $info->final . PHP_EOL;

echo '---------Ínico-------------' . PHP_EOL;
echo 'Hora = ' . $info->hora . PHP_EOL;
echo 'Minuto = ' . $info->minuto . PHP_EOL;
echo 'Segundo = ' . $info->segundo . PHP_EOL;

echo '---------Almoço-------------' . PHP_EOL;
echo 'Hora = ' . $info->hora2 . PHP_EOL;
echo 'Minuto = ' . $info->minuto2 . PHP_EOL;
echo 'Segundo = ' . $info->segundo2 . PHP_EOL;

echo '---------Retorno-------------' . PHP_EOL;
echo 'Hora = ' . $info->hora3 . PHP_EOL;
echo 'Minuto = ' . $info->minuto3 . PHP_EOL;
echo 'Segundo = ' . $info->segundo3 . PHP_EOL;

echo '---------Retorno-------------' . PHP_EOL;
echo 'Hora = ' . $info->hora4 . PHP_EOL;
echo 'Minuto = ' . $info->minuto4 . PHP_EOL;
echo 'Segundo = ' . $info->segundo4 . PHP_EOL;
/*
foreach ($info as $infos)
{
   var_dump($infos);
}
*/
